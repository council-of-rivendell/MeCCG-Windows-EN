#
# Miscellanous server related subroutines.
#

use File::Path;
use Proc::Daemon;
use Cwd;

# Globals

%server_game=(); # games indexed by the server process PID
%server_size=(); # RSS of the server indexed by the server process PID
%server_options=(); # arguments indexed by the server process PID
%script_game=(); # games for each running Server script indexed by the PID
%script_type=(); # type 'meta', 'factory', 'central', or 'table' of the Server script indexed by the PID
%ppid=(); # Parent process IDs.
@games=(); # List of games found based on servers.

# Latest configuration read:
$conf_game="";    # Name of the game
@conf_servers=(); # Server commands.
@conf_logs=();    # Log files.
@conf_types=();   # Server types: 'meta', 'factory', 'central', 'game'.

read_server_processes();

#
# read_server_processes() - Fill global variables.
#
sub read_server_processes
{
    my $pid;
    my $p_pid;
    my $cmd;
    my $game;
    my $sz;
    my @childs;

    open(PS,"ps -C ccg_server -o pid,ppid,rss,command|");
    while (<PS>)
    {
	chomp;
	if (m|^\s*(\d+)\s+(\d+)\s+(\d+)\s+(.*)|)
	{
	    $pid=$1;
	    $p_pid=$2;
	    $sz=$3;
	    $cmd=$4;

	    $ppid{$pid}=$p_pid;
	    $cmd=~s|^module_[-a-z0-9]+|.|;

	    if ($cmd=~s|^\./ccg_server ||)
	    {
		$cmd=~s|\s+(\w+)\.xml$||;
		$game=$1;
		$server_game{$pid}=$game;
		$server_size{$pid}=$sz;
		push @games,$game if(not grep(/^$game/,@games));
		$server_options{$pid}=$cmd;
	    }
	}
    }
    close(PS);
    open(PS,"ps -C Server -o pid,ppid,command|");
    while (<PS>)
    {
	chomp;
	if (m|^\s*(\d+)\s+(\d+)\s+(.*)|)
	{
	    $pid=$1;
	    $p_pid=$2;
	    $cmd=$3;

	    if(m/meta-/)
	    {
		$script_type{$pid}="meta";
	    }
	    elsif(m/factory-/)
	    {
		$script_type{$pid}="factory";
	    }
	    elsif(m/central-/)
	    {
		$script_type{$pid}="central";
	    }
	    else
	    {
		$script_type{$pid}="table";
	    }

	    $ppid{$pid}=$p_pid;
	    for (@games)
	    {
		if($cmd=~m/\b$_\b/)
		{
		    $script_game{$pid}=$_ ;
		}
	    }
	}
    }
    close(PS);

    for (keys %ppid)
    {
	if ($server_game{$ppid{$_}} ne "")
	{
	    push @childs,$_;
	}
    }

    for (@childs)
    {
	$server_game{$_}="";
	$server_options{$_}="";
    }
}

#
# match_servers(regex,game) - Return a list of servers matching regex.
#
sub match_servers
{
    my $reg=shift;
    my $game=shift;
    my @ret;

    for(keys %ppid)
    {
	push @ret,$_ if($server_options{$_} =~ m/$reg/ && ($game eq "" || $server_game{$_} eq $game));
    }

    return @ret;
}

#
# meta_servers() - Return a list of meta server processes IDs.
#
sub meta_servers
{
    my $game=shift;
    return match_servers("--load meta-server.triggers",$game);
}

#
# factory_servers() - Return a list of factory server processes IDs.
#
sub factory_servers
{
    my $game=shift;
    return match_servers("--load factory-server.triggers",$game);
}

#
# central_servers() - Return a list of central server processes IDs.
#
sub central_servers
{
    my $game=shift;
    return match_servers("--load central-server.triggers",$game);
}

#
# game_servers() - Return a list of game server processes IDs.
#
sub game_servers
{
    my $game=shift;
    return match_servers("--load server.triggers",$game);
}

#
# scripts(game,[type]) - Return list of Server script PIDs.
#
sub scripts
{
    my $game=shift;
    my $type=shift;
    my @ret;

    for(keys(%script_game))
    {
	push @ret,$_ if $script_game{$_} eq $game and ($type eq "" or $script_type{$_} eq $type);
    }

    return @ret;
}

#
# rss_size(PID) - Return process RSS info from 'ps' command.
#
sub rss_size
{
    my $pid=shift;
    
    return $server_size{$pid};
}

#
# players(pid) - Return the number of players for server.
#
sub players
{
    my $pid=shift;
    my $opt=$server_options{$pid};

    return $1 if $opt=~m/--players (\d+)/;
    
    return 1;
}

#
# bet(pid) - Return bet for server.
#
sub bet
{
    my $pid=shift;
    my $opt=$server_options{$pid};

    return $1 if $opt=~m/--bet ([0-9.]+)/;
    
    return "0.0";
}

#
# rules(pid) - Return rules for server.
#
sub rules
{
    my $pid=shift;
    my $opt=$server_options{$pid};

    return $1 if $opt=~m/--rules (\S+)/;
    
    return "default";
}

#
# kill_ps(pid list string) - Kill processes and show it's pid.
#
sub kill_ps
{
    my $ps=shift;
    if($ps ne "")
    {
	print "  PIDs $ps\n";
	system("kill $ps");
    }
}

#
# wait_ps(pid list string) - Wait until process is dead.
#
sub wait_ps
{
    my @ps=split /\s+/,shift;
    for(@ps)
    {
	print "  Killing $_...\n";
	while(1)
	{
	    $s=`ps h $_`;
	    chomp $s;
	    last if $s eq "";
	}
    }
}

#
# rotate(file) - Rotate a log file.
#
sub rotate($)
{
    my $file=shift;
    
    return if ! -f $file;

    my $dir=dirname($file);
    my $n=1;

    while(-f "$file.$n.gz") {
	$n++;
    }

    my $m;
    if($n > 1) {
	print "Rotating ",$n-1," log files.\n";
    }
    while($n > 1) {
	$m=$n;
	$n--;
	system("mv '$file.$n.gz' '$file.$m.gz'");
    }
    
    print "Creating $file.1.gz.\n";
    system("gzip -c - < '$file' > '$file'.1.gz");
    unlink($file);
}

#
# read_conf(conf_file) - Read in server launch rules from config file.
#
sub read_conf
{
    my $conf=shift;

    $conf_game="";
    @conf_servers=();
    @conf_logs=();

    open(CFG,$conf) or die "$0: cannot open $conf";

    my $port;

    while(<CFG>)
    {
	chomp;
	s/^(.*)\s*\#.*/$1/;
	s/^\s+//;
	s/\s+$//;
	next if m/^$/;
	if(m/^system\s+(.+)$/)
	{
	    $game=$1;
	    $port=`./perl/game_info.pl $game table-start`;
	    $port=~s/\s+$//;
	    die "unknown game '$game'" if $port eq "";
	    $conf_game=$game;
	}
	elsif(m/^(factory|meta|central|game)(.*)/)
	{
	    my $servertype=$1;
	    my $arg=$2;
	    my %param=();

	    $arg=~s/^\s+//;
	    
	    while($arg ne "")
	    {
		if($arg=~s/^([-a-z]+)=\"([^\"]*)\"\s*(.*)/$3/)
		{
		    $param{$1}=$2;
		}
		elsif($arg=~s/([-a-z]+)=(\S+)\s*(.*)/$3/)
		{
		    $param{$1}=$2;
		}
		elsif($arg=~s/(tournament|debug)\s*(.*)/$2/)
		{
		    $param{$1}="";
		}
		else
		{
		    die "$0: invalid argument(s) '$arg'";
		}
	    }

	    my $cmd;

	    if($servertype eq "game" && !exists $param{'port'})
	    {
		$cmd="--port $port $conf_game";
		$port++;
	    }
	    else
	    {
		$cmd="$servertype-$conf_game";
	    }

	    my $args;
	    my $logfile;
	    my $f;

	    foreach $f (keys %param)
	    {
		$args.=" --$f ".$param{$f} if $f ne "log";
		$logfile=$param{$f} if $f eq "log";
	    }


	    if($logfile ne "")
	    {
		my $dir=`perl/game_info.pl $conf_game game-dir`;
		$dir=~s/\s+$//;
		$logfile="log/$dir/$logfile";
	    }

	    $cmd="./Server$args $cmd";
	    push @conf_servers,$cmd;
	    push @conf_logs,$logfile;
	    push @conf_types,$servertype;
	}
	else
	{
	    die "$0: invalid line in configuration '$_'";
	}
    }

    return $game;
}

#
# launch_server(type,command,log) - Launch a server process.
#
sub launch_server
{
    my $type=shift;
    my $cmd=shift;
    my $logfile=shift;

    if($logfile ne "")
    {
	rotate($logfile);

	File::Path::mkpath(dirname($logfile));

	system("echo ------------------------------------------------ >> $logfile");
	system("echo Server launch at: `date` >> $logfile");
	system("echo ------------------------------------------------ >> $logfile");
	
	$cmd.=" >> $logfile 2>&1";
    }
    print "[$type] $cmd\n";
    sleep(1);
    $pid = Proc::Daemon::Init({work_dir => cwd(), exec_command => $cmd});
}

#
# launch_servers(type) - Launch all servers read from config.
#
sub launch_servers
{
    my $type=shift;

    my $n=@conf_servers;

    for(my $i=0;$i<$n;$i++) {

	if($conf_types[$i] eq $type or !$type) {
	    launch_server($conf_types[$i],$conf_servers[$i],$conf_logs[$i]);
	}
    }
}

1;
