#
# SQL Reader - Read MySQL dump and fill tables:
#
# $table{table name} - List of field names.
# $key{table name} - Key field for table.
# $field{table name}{key value}{field name} - Value of the field.
#
sub load_sql
{
	my $filename=shift;
	my $readmode=0;
	my $current_table;
	
	open(F,$filename) or die "$0: cannot open $filename";
	while(<F>)
	{
		s/\s+$//;
		s/^\s+//;
		next if m/^\#/;
		next if m/^$/;

		if($readmode==0)
		{
			if(m/^CREATE TABLE \`(.+?)\`/)
			{
				$readmode=1;
				$current_table=$1;
			}
			elsif(m/^INSERT INTO \`(.+?)\` VALUES \((.+)\);$/)
			{
				parse_insert($1,$2);
				next;
			}
			else
			{
				die "$0: cannot parse '$_'";
			}
			
		}elsif($readmode==1) # CREATE TABLE
		{
			next if m/^KEY/;
			
			if(m/^\`(.+?)\`/)
			{
				push @{$table{$current_table}},$1;
				$key{$current_table}=$1 if($key{$current_table} eq "");
			}
			elsif(m/^PRIMARY KEY .*?\`(.+?)\`/)
			{
				$key{$current_table}=$1;
			}
			elsif(m/^\)/)
			{
				$readmode=0;
			}
			else
			{
				die "$0: cannot parse '$_'";
			}
		}
	}
	close(F);
}

sub parse_insert
{
	my $tablename=shift;
	my $data=shift;
	my $key;
	my $val;
	my %values=();

	$data=~s/&/&et;/g;
	$data=~s/\\\'/&amp;/g;
	for(@{$table{$tablename}})
	{
		$key=$_;
		$val="";
		$data=~s/^\s*,\s*//;
		if($data=~s/^('.*?'|\d+|NULL)//)
		{
			$val=$1;
			$val=~s/&amp;/\'/g;
			$val=~s/&et;/&/g;
			$val=~s/^\'//;
			$val=~s/\'$//;
			$values{$key}=$val;
		}
		else
		{
			die "$0: cannot parse \"$data\"";
		}
	}

	die "key value is empty" if $values{$key{$tablename}} eq "";
	die "key '$values{$key{$tablename}}' used twice" if $field{$tablename}{$values{$key{$tablename}}} ne "";
	for(keys %values)
	{
		$field{$tablename}{$values{$key{$tablename}}}{$_}=$values{$_};
	}
}

#
# Execute simple query on currently loaded database. Look out for each field
# having the searched value and return the list of keys matching.
#
# SELECT(table name, field to search, value to search)
#
sub SELECT
{
	my $tablename=shift;
	my $search=shift;
	my $val=shift;
	my @ret;
	
	for(keys %{$field{$tablename}})
	{
		push @ret,$_ if($field{$tablename}{$_}{$search} eq $val);		
	}

	return @ret;
}

1;
