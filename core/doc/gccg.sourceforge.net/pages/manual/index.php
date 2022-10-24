<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<?include("book.php")?>
<html>
  <head>
	<title>Generic Collectible Card Game</title>
	<link href="../default.css" rel="stylesheet" type="text/css">
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  </head>

  <body>

	<h1>Generic Collectible Card Game</h1>
	
	&copy; 2001,2002,2003 Tommi Ronkainen

	<h2>Contents</h2>
	<p class=toc>
	  <?create_toc("manual/index.php")?>
	</p>

	<h2><?h1("Introduction")?></h2>
	
	<h3><?h2("What is it?")?></h3>

	Generic Collectible Card Game is a multi-player multi-platform
	implementation of a card game engine. The card game engine is
	designed to be of general purpose core for several modules each
	defining the game specific behavior. Players download a client for
	their platform and all modules of interest. After launching the
	client for one of the games, it connects to the central server of
	the game chosen. When connected, all aspects of the collecting,
	trading and playing are available to the player.

	<h3><?h2("Architecture")?></h3>

	<div class="caption"><?fig("Architecure of the server system")?></div>
	<img alt="Picture of architecture" src="img_architecture.png">

	<p>
	  The server system is a cluster of servers possibly distributed
	  to several hosts. The center of the gaming system is the
	  <em>meta server</em>, which is the place where clients connect
	  to in first place. The meta server acts as a chat room and is
	  also responsible for keeping track of players&rsquo; collections as
	  well as all card and money transactions. The meta server is
	  supported by one or more other servers.
	<p>
	  Only obligatory additional server is the <em>factory
		server</em>, which serves as booster generator for meta
	  server. The reasoning behind this server split is that the meta
	  server does not have any knowledge of cards. It just uses simple
	  integers to denote cards and <em>product codes</em> to denote
	  different boosters and starters available. When the meta server
	  sends amount of product and it&rsquo;s product code, the factory
	  server then generates list of (not necessarily) random integers
	  presenting the product matching the product code. The generation
	  process simulates actual rarity distribution of the product
	  ordered.
	<p>
	  When a single game server is launched, it connects to the meta
	  server specified by it&rsquo;s configuration. When a connection is
	  established, the new server process appears as a table in the
	  chat room. Players can see the operating parameters (such as bet
	  and number of players required) of the game server on their
	  screens. After initialization, the game server sleeps until the
	  meta server awakes it by sending a message to initiate a
	  game. After specified number of players are connected, the game
	  begins and the game server process the whole game until the
	  result of the game is declared. <em>The declared game
		result</em> is then sent to the meta server and the game server
	  quits. Usually game servers are configured to start over again.

	<h2><?h1("Client")?></h2>

	<h3><?h2("Keyboard and mouse")?></h3>

	<div class="caption"><?tbl("Keyboard shortcuts")?></div>
	<table>
		<tr><th>Key combo</th><th>Action</th><th>Mode</th></tr>
		<tr><td>Alt+Enter</td><td>Toggle between fullscreen and windowed mode</td><td align="center">-</td></tr>
		<tr><td>Ctrl+Enter</td><td>Evaluate Gccg-script expression</td><td align="center">-</td></tr>
		<tr><td>Shift</td><td>Zoom card image</td><td align="center">-</td></tr>
	</table>
	[Collect stuff from menus and add here]

	<div class="caption"><?tbl("Mouse gestures")?></div>
	<table>
		<tr><th>Mouse action</th><th>Target</th><th>Event</th><th>Mode</th></tr>
		<tr><td>Alt + Left click</td><td>Any</td><td>Same as middle click</td><td align="center">-</td></tr>
		<tr><td>Ctrl + Alt + Left click</td><td>Any</td><td>Same as ctrl + middle click</td><td align="center">-</td></tr>
		<tr><td>Ctrl + Left click</td><td>Card in play</td><td>Detach a card if attached</td><td align="center">Play</td></tr>
		<tr><td>Ctrl + Left drag</td><td>Card in play</td><td>Attach a card to another</td><td align="center">Play</td></tr>
		<tr><td>Ctrl + Middle click</td><td>Any</td><td>Add name of the target to chat line</td><td align="center">-</td></tr>
		<tr><td>Mouse wheel</td><td>Current deck listing</td><td>Scroll up/down</td><td align="center">-</td></tr>
		<tr><td>Mouse wheel</td><td>My collection</td><td>Next/previous page</td><td align="center">-</td></tr>
		<tr><td>Mouse wheel</td><td>None above</td><td>Scroll messages up/down</td><td align="center">-</td></tr>
	</table>
	[Collect stuff from menus and add here]

	<h3><?h2("Extensions for Mtg")?></h3>

	<div class="caption"><?tbl("Keyboard shortcuts for Mtg")?></div>
	<table>
		<tr><th>Key combo</th><th>Action</th><th>Mode</th></tr>
		<tr><td>Shift + Control + B</td><td>Produce black mana symbol</td><td align="center">-</td></tr>
		<tr><td>Shift + Control + C</td><td>Produce colorless mana symbol (1)</td><td align="center">-</td></tr>
		<tr><td>Shift + Control + G</td><td>Produce green mana symbol</td><td align="center">-</td></tr>
		<tr><td>Shift + Control + R</td><td>Produce red mana symbol</td><td align="center">-</td></tr>
		<tr><td>Shift + Control + U</td><td>Produce blue mana symbol</td><td align="center">-</td></tr>
		<tr><td>Shift + Control + W</td><td>Produce white mana symbol</td><td align="center">-</td></tr>
		<tr><td colspan=3><div class="footnote">(1) Repeat to produce symbols for 2 colorless mana, etc...</div></td></tr>
	</table>

	<h3><?h2("Extensions for Pokemon")?></h3>

	<div class="caption"><?tbl("Keyboard shortcuts for Pokemon")?></div>
	<table>
		<tr><th>Key combo</th><th>Action</th><th>Mode</th></tr>
		<tr><td>Control + 0</td><td>Use pokemon power</td><td align="center">play</td></tr>
		<tr><td>Control + 1</td><td>Use first attack</td><td align="center">play</td></tr>
		<tr><td>Control + 2</td><td>Use second attack</td><td align="center">play</td></tr>
		<tr><td>Control + 3</td><td>Use third attack</td><td align="center">play</td></tr>
		<tr><td>Control + 4</td><td>Use fourth attack</td><td align="center">play</td></tr>
		<tr><td>Control + 5</td><td>Use fifth attack</td><td align="center">play</td></tr>
		<tr><td>Shift + Control + C</td><td>Produce colorless energy symbol</td><td align="center">-</td></tr>
		<tr><td>Shift + Control + F</td><td>Produce fighting energy symbol</td><td align="center">-</td></tr>
		<tr><td>Shift + Control + G</td><td>Produce grass energy symbol</td><td align="center">-</td></tr>
		<tr><td>Shift + Control + L</td><td>Produce lightning energy symbol</td><td align="center">-</td></tr>
		<tr><td>Shift + Control + P</td><td>Produce psychic energy symbol</td><td align="center">-</td></tr>
		<tr><td>Shift + Control + R</td><td>Produce fire energy symbol</td><td align="center">-</td></tr>
		<tr><td>Shift + Control + W</td><td>Produce water energy symbol</td><td align="center">-</td></tr>
	</table>

	<h3><?h2("Extensions for Metw")?></h3>

	<div class="caption"><?tbl("Keyboard shortcuts for Metw")?></div>
	<table>
		<tr><th>Key combo</th><th>Action</th><th>Mode</th></tr>
		<tr><td>Ctrl + 1</td><td>Announce Organization phase (1)</td><td align="center">-</td></tr>
		<tr><td>Ctrl + 2</td><td>Announce Long-event phase (1)</td><td align="center">-</td></tr>
		<tr><td>Ctrl + 3</td><td>Announce Movement phase (1)</td><td align="center">-</td></tr>
		<tr><td>Ctrl + 4</td><td>Announce Site phase (1)</td><td align="center">-</td></tr>
		<tr><td>Ctrl + M</td><td>Toggle map on/off</td><td align="center">-</td></tr>
		<tr><td>Ctrl + +</td><td>Increment score of a card by one</td><td align="center">play</td></tr>
		<tr><td>Ctrl + -</td><td>Decrement score of a card by one</td><td align="center">play</td></tr>
		<tr><td>Enter</td><td>Enter to site</td><td align="center">play</td></tr>
		<tr><td>Shift + Control + B</td><td>Produce Border-land symbol</td><td align="center">-</td></tr>
		<tr><td>Shift + Control + C</td><td>Produce Coastal Seas symbol</td><td align="center">-</td></tr>
		<tr><td>Shift + Control + D</td><td>Produce Dark-domain symbol</td><td align="center">-</td></tr>
		<tr><td>Shift + Control + F</td><td>Produce Free-domain symbol</td><td align="center">-</td></tr>
		<tr><td>Shift + Control + S</td><td>Produce Shadow-land symbol</td><td align="center">-</td></tr>
		<tr><td>Shift + Control + W</td><td>Produce Wilderness symbol</td><td align="center">-</td></tr>
		<tr><td>Shift + Alt + B</td><td>Produce Border-hold symbol</td><td align="center">-</td></tr>
		<tr><td>Shift + Alt + D</td><td>Produce Dark-hold symbol</td><td align="center">-</td></tr>
		<tr><td>Shift + Alt + F</td><td>Produce Free-hold symbol</td><td align="center">-</td></tr>
		<tr><td>Shift + Alt + H</td><td>Produce Haven symbol</td><td align="center">-</td></tr>
		<tr><td>Shift + Alt + R</td><td>Produce Ruins & Lairs symbol</td><td align="center">-</td></tr>
		<tr><td>Shift + Alt + S</td><td>Produce Shadow-hold symbol</td><td align="center">-</td></tr>
		<tr><td colspan=3><div class="footnote">(1) Key binding instead of function.</div></td></tr>
	</table>

	<p>

	<div class="caption"><?tbl("Mouse gestures for Metw")?></div>
	<table>
		<tr><th>Mouse action</th><th>Target</th><th>Event</th></tr>
		<tr><td>Middle click</td><td>A card in hand</td><td>Play the card face down</td></tr>
	</table>

	<h3><?h2("Client command reference")?></h3>

	<?readfile("ref_commands.php")?>

	<h2><?h1("Server")?></h2>

	<h3><?h2("Rules definition file")?></h3>

	Different game rules are specified by the rules definition file. It
	is a plain ASCII-file describing the rules for one or more game
	formats supported by the game servers. The syntax of the file is
	following:

	<pre>
Game <em>name of the game</em>
Info <em>short description</em>
Format <em>name of the format</em>
Rules for <em>deck component</em>
<em>rules</em>...
	</pre>

	The name of the game is the abbreviation of the game, info gives a
	short description to display at tables, the name of the format is
	any text describing the game format and the deck component is the
	name of the part of the deck where rules applies to. The deck part
	&rsquo;<tt>all parts</tt>&rsquo; denotes all cards of the different deck parts joined
	together. After these definitions, there are one or more rules
	applying to the specified deck part in the given game format. Any
	of these two latter declarations (name of the format
	and deck component) can be repeated as many times as needed,
	i.e. it is possible to define several formats in the
	same file.

	<p>

	  The deck checking works as follows. A set of rules is applied to
	  each deck part (or to the combined set of all cards). Each
	  limiting rule removes matching cards from the part under the
	  examination. If there are any cards left after applying every
	  limiting rule, the deck part is not legal. There are also
	  check-rules that do not alter the deck part in any way, but checks
	  some general principle. In short, the order of the rules is
	  important.
	  
	<p>

	  The following rules are recognized:

	<pre>
Size <em>min</em>-<em>max</em>
	</pre>

	Set the minimum and maximum number of cards the deck part can
	contain. The maximum number is optional and defaults to
	unlimited. This command should be the first one unless it is
	appropriate that certain type of cards are removed before the
	check.

	<pre>
Size <em>n1</em>,...,<em>nk</em>
	</pre>

	Set the list of allowed sizes for the deck part. 

	<pre>
Limit <em>n</em>
card <em>name 1</em>
card <em>name 2</em> ...
	</pre>
	

	The maximum number of each cards explicitly listed is set to n.


	<pre>Limit any
card <em>name 1</em>
card <em>name 2</em> ...
	</pre>
	
	There is no limit to the number of listed cards. 

	<pre>
General limit <em>n</em>
	</pre>
	
	
	This is the default maximum number of each individual card. 

	<pre>
Otherwise ok
	</pre>
	

	This is a catch-all rule which denotes that the deck qualifies to
	the game format if any earlier rule was not broken. Each rule
	removes all cards passing the check. If there are any cards left
	after all rules are applied, an error occurs. It depends on the
	earlier rules if this catch-all rule is appropriate or not.

	<pre>
Set <em>s</em> limit <em>n</em>
	</pre>
	
	Allow at most n cards from the card set s, where s is the
	abbreviation of the card set.

	Do not use rule <tt>Otherwise ok</tt> with this rule, since it won&rsquo;t work.

	<pre>
Limit <em>n</em> for each card having <em>e</em>
	</pre>
	
	Searches cards fulfilling the condition e given as a scripting
	language expression. Limit each of the cards to n. The expression
	may contain # to denote card number of the card.

	<pre>
Limit <em>n</em> cards having <em>e</em>
	</pre>

	Searches cards fulfilling the condition e given as a scripting
	language expression. Limit the total number of the cards to n. The
	expression may contain # to denote card number of the card.

	<pre>
Check &rsquo;<em>text</em>&rsquo; using <em>e</em>
	</pre>
	
	Evaluate an expression e and report failure for text, if the
	expression evaluates to false. The expression may contain # to
	denote a list of card numbers to check.

	<div class="caption"><?ex("Rules defintion file for Pokemon")?></div>
	<div class="example">
	  In this example we define <em>Tournament</em> rules for
	  Pokemon. First we set the deck size to precisely 60. Then we
	  remove all basic energy cards and all cards having at most 4
	  copies. If there aren&rsquo;t any cards left after these removals, the
	  deck is legal.
	  <pre>
Game Pokemon
Format Tournament
Rules for deck

Size 60-60

Limit any

Fighting Energy
Grass Energy
Fire Energy
Lightning Energy
Water Energy
Psychic Energy

General limit 4

Otherwise ok</pre>
	</div>

	<h3><?h2("Setting up a game server(s)")?></h3>

	You can launch your own game servers and add them as tables to the
	meta server. Usually this is needed if someone wishes to play with
	different set up than provided by the server owner or when there
	are more players than tables. For example, you can alter the
	number of players and amount of money to bet. You can even write
	your own <em>rules definition file</em>, then compile it to
	<em>Gccg-script</em> and play your own game format.

	<h4><?h3("Setting up an additional table(s)")?></h4>
	<ol>
	  <li>Install binary package (or source and compile it) for your
		platform to have program called <tt>ccg_server</tt>.
	  <li>Then install the game module, the server module and the game
		specific server module<br>
		<tt class=code>./gccg_package i <em>game</em> server <em>game</em>-server</tt>
	  <li>Launch your server for <em>p</em> players and connect it to the meta server <em>meta</em><br>
		<tt class=code>./Server --server <em>meta</em> --bet <em>bet</em> --players <em>p</em> <em>game</em></tt><br>
		Without <tt>--server</tt> argument, the game server registers itself to the default meta server. Default bet is $1 and default number of players is one.
	  <li>Don&rsquo;t forget to open appropriate incoming TCP/IP ports at your firewall if blocked by default.</li>
	</ol>
	If you wish set up more than one table, you need to give different
	port numbers for each server using argument <tt>--port
	  <em>num</em></tt>. See following table for port numbers.
	<p>
	<div class="caption"><?tbl("Port numbers")?></div>
	<table>
		<tr><th>Port</th><th>Service</th></tr>
		<tr><td>29100</td><td>Meta server for Mtg</td></tr>
		<tr><td>29101</td><td>Factory server for Mtg</td></tr>
		<tr><td>29102</td><td>Meta server for Poker demo</td></tr>
		<tr><td>29103</td><td>Factory server for Poker demo</td></tr>
		<tr><td>29104</td><td>Meta server for Wind and Water</td></tr>
		<tr><td>29105</td><td>Factory server for Wind and Water</td></tr>
		<tr><td>29110</td><td>Meta server for Pokemon</td></tr>
		<tr><td>29111</td><td>Factory server for Pokemon</td></tr>
		<tr><td>29120</td><td>Meta server for Lotr</td></tr>
		<tr><td>29121</td><td>Factory server for Lotr</td></tr>
		<tr><td>29130</td><td>Meta server for Metw</td></tr>
		<tr><td>29131</td><td>Factory server for Metw</td></tr>
		<tr><td>29200-29299</td><td>Game servers for Mtg</td></tr>
		<tr><td>29300-29399</td><td>Game servers for Pokemon</td></tr>
		<tr><td>29400-29499</td><td>Game servers for Lotr</td></tr>
		<tr><td>29500-29599</td><td>Game servers for Metw</td></tr>
		<tr><td>29600-29699</td><td>Game servers for Wind and Water</td></tr>
	</table>

	<h4><?h3("Creating a table with own rules")?></h4>

	Default rules for game servers includes only the most important
	game formats. There might be already additional rule sets
	depending on game, but it is also possible to define own game
	formats (see Section <?ref("Rules definition file")?>). If you
	wish to create own rulesets, then you need to
	install a package <tt>dev-tools</tt> first. 
	<p>
	  The package contains subdirectory <tt>data/</tt>, where you can
	  find examples of format definitions, each having <tt>.rules</tt>
	  extension. Pick one of the examples which resembles your upcoming
	  game format mostly and copy it to new name. Then edit it to
	  implement your game format and convert it to Gccg-script by
	  issuing command
	  <br><tt class=code>make rules</tt><br> 
	  The command reads all
	  rules defintions having extension <tt>.rules</tt> found at
	  <tt>data/</tt> directory and converts them putting results to the
	  directory <tt>script/</tt>.
	<p>
	  Now rules are ready for testing (assume that our rule set is
	  called <tt>Mtg-block.rules</tt> which comes with the
	  dev-tools). Try one player table issuing <br><tt class=code>./Server
		--rules Mtg-block.rules mtg</tt><br> Don&rsquo;t forget to add 
	  <tt>--server</tt> argument if using other meta server than
	  default one.

	<h3><?h2("Setting up the whole system manually")?></h3>

	First you need to install <tt><em>game</em></tt>,
	<tt><em>game</em>-server</tt> and <tt>server</tt> packages as
	described in previous subsection. The following order is
	recommended altough the system should raise up eventually even if
	servers are not launched in the correct order:

	<ol>
	  <li>Lauch the factory server for your game<br>
		<tt class=code>./Server factory-<em>game</em></tt>
	  <li>Lauch the meta server for your game<br>
		<tt class=code>./Server meta-<em>game</em></tt>
	  <li>You should be now able to log in to your own meta
		server. Try your client<br>
		<tt class=code>./<em>Game</em> --server your.server</tt>
	  <li>Launch game servers you need as described in earlier subsection. 
		Remember to add <tt>--server</tt> argument or  otherwise the game 
		server(s) connects to the default meta server.
	</ol>

	Servers load/save data automatically on startup/exit to the
	<tt>save/<em>Game</em></tt> directory. You can stop servers simply
	pressing <tt>ctrl+c</tt> on each server process in reverse order
	as they are launched.
	
	<h4><?h3("Fine tuning")?></h4>

	Before you put your server system into production, you should
	check out the beginning of the scripts
	<tt>scripts/meta-server.functions</tt> and
	<tt>scripts/<em>Game</em>-meta-server.functions</tt>.
	Immediately after commented lines there are some variable
	definitions you may wish to change. Default values are defined
	in <tt>scripts/meta-server.functions</tt>, but if other
	definition is given in
	<tt>scripts/<em>Game</em>-meta-server.functions</tt>, the
	latter definition overrides the default. Here are some of the
	most important variables:

	<dl>
	  <dt>TIME_ZONE</dt><dd>This variable is announced to clients
		in certain situations where the local server-side time zone is
		needed.</dd>
	  <dt>INITIAL_MONEY</dt><dd>This is the minimum of the
		starting money given to the each new player.</dd>
	  <dt>AMOUNT_TO_PAY_WEEKLY</dt><dd>This is weekly
		payment. Together with the previous variable this defines
		the total number of money to be given to the new
		player. The exact formula is <p class=math><em>INITIAL_MONEY</em> +
		  <em>AMOUNT_TO_PAY_WEEKLY</em> x <em>p</em>,</p> where <em>p</em> is the
		number of products available at the time of registration.
	  <dt>PRIZE_PER_PLAYER</dt><dd>This defines additional bonus
		to be given to the player winning a match. The formula for
		earnigs for the winning player is <p class=math>(<em>p</em> -  1) x
		  (<em>b</em> +  <em>PRIZE_PER_PLAYER</em>) + (<em>p</em> x
		  <em>b</em>),</p> where <em>p</em> is the number of players,
		<em>b</em> is the bet at the table used. In short,
		<em>PRIZE_PER_PLAYER</em> tells how much one player
		receives when playing against one opponent with $0 bet.
	</dl>

	

	<h3><?h2("Tools for server adminstration")?></h3>

	We are already familiar with one script called <tt>Server</tt>. It
	is a front end to the actual binary <tt>server</tt>. It chooses
	correct parameters to the binary in order to launch the server
	selected. It also passes through all extra parameters given. After
	launching the server, it waits until it terminates. If the server
	process returns error, then the script sleeps for 30 seconds and
	relaunches the server with the same parameters. If the server
	process exited without error, then relauch is made immediately.

	<p>
	  [Descripe other scripts.]

	<h3><?h2("Adminstrator&rsquo;s tasks")?></h3>

	<h4><?h3("Roles")?></h4>

	When your server system is up and running, your first task is to
	reserve certain user accounts having special access to maintenance
	commands. This is accomplished by simply launching the client once
	for each account to reserve, i.e. <tt>./Game --user God --server
	  your.server</tt>. Roles to reserve are following:

	<dl>
	  <dt>God</dt><dd>This account have full access to
		everything. With this account you can give any amount of money
		(even negative) to anybody and the amount is not subtracted from
		this account. You can give cards without owning them. Any
		password can be granted to anybody, whereas usually players
		can grant only their own passwords.</dd>
	  <dt>Guard</dt><dd>This account can kick people out of the chat
		room.</dd>
	  <dt>Judge</dt><dd>Reserved for future.</dd>
	  <dt>Salesman</dt><dd>This account is now obsolete, but it still
		can do product management with <tt>/addproduct</tt> and <tt>/reproduce</tt>.</dd>
	  <dt>root</dt><dd>This has no special meaning in Gccg, but
		reserving the root account prevents stupid people to log in
		directly from root account.</dd>
	</dl>
	
	
	<h2><?h1("Internals")?></h2>

	<h3><?h2("Dependent and independent parts")?></h3>

	<p>
	  [Table: script files]

	<h3><?h2("Boot sequence")?></h3>
	<h4><?h3("Client boot sequence")?></h4>
	<h4><?h3("Server boot sequence")?></h4>

	<h3><?h2("Text formatting")?></h3>

	<h4><?h3("General tags")?></h4>

	The text renderer of the Gccg client interpretes tags, which can
	be used to change font properties and add game specific symbols to
	the text. Each tag begins with <tt>{</tt> and ends with <tt>}</tt>.
	Here is a summary of general formatting tags:
	<p>
	<div class="caption"><?tbl("General formatting tags")?></div>
	<table>
		<tr><th>Tag</th><th>Interpretation</th></tr>
		<tr><td><tt>{lb}</tt></td><td>Draw <tt>{</tt>.</td></tr>
		<tr><td><tt>{rb}</tt></td><td>Draw <tt>}</tt>.</td></tr>
		<tr><td><tt>{hr}</tt></td><td>Draw thin horizontal line.</td></tr>
		<tr><td><tt>{left}</tt></td><td>Align text left.</td></tr>
		<tr><td><tt>{center}</tt></td><td>Align text centered.</td></tr>
		<tr><td><tt>{right}</tt></td><td>Align text right.</td></tr>
		<tr><td><tt>{shadow}</tt></td><td>Turn on shadow for text.</td></tr>
		<tr><td><tt>{noshadow}</tt></td><td>Turn off shadow for text.</td></tr>
		<tr><td><tt>{sz<em>n</em>}</tt></td><td>Set font size to <em>n</em> points.</td></tr>
		<tr><td><tt>{font<em>n</em>}</tt></td><td>Select font number <em>n</em> as current font.</td></tr>
		<tr><td><tt>{reset}</tt></td><td>Reset all formatting properties to the default except shadow.</td></tr>
		<tr><td><tt>{red}</tt></td><td>Change text color to red.</td></tr>
		<tr><td><tt>{green}</tt></td><td>Change text color to green.</td></tr>
		<tr><td><tt>{black}</tt></td><td>Change text color to black.</td></tr>
		<tr><td><tt>{blue}</tt></td><td>Change text color to blue.</td></tr>
		<tr><td><tt>{yellow}</tt></td><td>Change text color to yellow.</td></tr>
		<tr><td><tt>{white}</tt></td><td>Change text color to white.</td></tr>
		<tr><td><tt>{brown}</tt></td><td>Change text color to brown.</td></tr>
		<tr><td><tt>{gold}</tt></td><td>Change text color to gold.</td></tr>
		<tr><td><tt>{gray}</tt></td><td>Change text color to gray.</td></tr>
		<tr><td><tt>{magenta}</tt></td><td>Change text color to magenta.</td></tr>
		<tr><td><tt>{orange}</tt></td><td>Change text color to orange.</td></tr>
		<tr><td><tt>{cyan}</tt></td><td>Change text color to cyan.</td></tr>
	</table>

	<h4><?h3("Mtg specific tags")?></h4>

	<div class="caption"><?tbl("Mtg tags")?></div>
	<table>
		<tr><th>Tag</th><th>Interpretation</th></tr>
		<tr><td><tt>{B}</tt></td><td>Black mana symbol.</td></tr>
		<tr><td><tt>{G}</tt></td><td>Green mana symbol.</td></tr>
		<tr><td><tt>{R}</tt></td><td>Red mana symbol.</td></tr>
		<tr><td><tt>{U}</tt></td><td>Blue mana symbol.</td></tr>
		<tr><td><tt>{W}</tt></td><td>White mana symbol.</td></tr>
		<tr><td><tt>{0}</tt></td><td>Zero mana symbol.</td></tr>
		<tr><td><tt>{1}</tt></td><td>One colorless mana symbol.</td></tr>
		<tr><td><tt>{2}</tt></td><td>Two colorless mana symbol.</td></tr>
		<tr><td><tt>{3}</tt></td><td>Three colorless mana symbol.</td></tr>
		<tr><td><tt>{4}</tt></td><td>Four colorless mana symbol.</td></tr>
		<tr><td><tt>{5}</tt></td><td>Five colorless mana symbol.</td></tr>
		<tr><td><tt>{6}</tt></td><td>Six colorless mana symbol.</td></tr>
		<tr><td><tt>{7}</tt></td><td>Seven colorless mana symbol.</td></tr>
		<tr><td><tt>{8}</tt></td><td>Eight colorless mana symbol.</td></tr>
		<tr><td><tt>{9}</tt></td><td>Nine colorless mana symbol.</td></tr>
		<tr><td><tt>{X}</tt></td><td>X mana symbol.</td></tr>
		<tr><td><tt>{Y}</tt></td><td>Y mana symbol.</td></tr>
		<tr><td><tt>{T}</tt></td><td>Tap symbol.</td></tr>
	</table>

	<h4><?h3("Metw specific tags")?></h4>

	<div class="caption"><?tbl("Metw tags")?></div>
	<table>
		<tr><td><tt>{b}</tt></td><td>Border-land symbol.</td></tr>
		<tr><td><tt>{c}</tt></td><td>Coastal sea symbol.</td></tr>
		<tr><td><tt>{d}</tt></td><td>Dark-domain symbol.</td></tr>
		<tr><td><tt>{f}</tt></td><td>Free-domain symbol.</td></tr>
		<tr><td><tt>{s}</tt></td><td>Shadow-land symbol.</td></tr>
		<tr><td><tt>{w}</tt></td><td>Wilderness symbol.</td></tr>
		<tr><td><tt>{B}</tt></td><td>Border-hold symbol.</td></tr>
		<tr><td><tt>{D}</tt></td><td>Dark-hold symbol.</td></tr>
		<tr><td><tt>{F}</tt></td><td>Free-hold symbol.</td></tr>
		<tr><td><tt>{H}</tt></td><td>Haven symbol.</td></tr>
		<tr><td><tt>{R}</tt></td><td>Ruins &amp; Lairs symbol.</td></tr>
		<tr><td><tt>{S}</tt></td><td>Shadow-hold symbol.</td></tr>
	</table>

	<h4><?h3("Pokemon specific tags")?></h4>

	<div class="caption"><?tbl("Pokemon tags")?></div>
	<table>
		<tr><td><tt>{c}</tt></td><td>Colorless energy symbol.</td></tr>
		<tr><td><tt>{f}</tt></td><td>Fighting energy symbol.</td></tr>
		<tr><td><tt>{g}</tt></td><td>Grass energy symbol.</td></tr>
		<tr><td><tt>{l}</tt></td><td>Lightning energy symbol.</td></tr>
		<tr><td><tt>{p}</tt></td><td>Psychic energy symbol.</td></tr>
		<tr><td><tt>{r}</tt></td><td>Fire energy symbol.</td></tr>
		<tr><td><tt>{w}</tt></td><td>Water energy symbol.</td></tr>
	</table>

	<h2><?h1("Scripting language")?></h2>

	<h3><?h2("Syntax")?></h3>
	<h4><?h3("Atomic data types")?></h4>

	<dl>
	  <dt>null</dt>
	  <dd>
		Empty value which can be expressed explicitly using
		<tt>NULL</tt> or <tt>()</tt>.
	  </dd>
	  
	  <dt>integer</dt>
	  <dd>
		Any integer value supported by <tt>C++</tt> compiler.
	  </dd>
	  
	  <dt>real</dt>
	  <dd>
		Any real value supported by <tt>C++</tt> compiler.
	  </dd>
	  
	  <dt>string</dt>
	  <dd>
		A sequence of characters beginning and ending with <tt>"</tt>
		or <tt>&rsquo;</tt>. If the sequence is enclosed in <tt>"</tt>, the
		special sequence <tt>\n</tt> is converted to the new line and
		the sequence <tt>\<em>c</em></tt> to the character
		<tt><em>c</em></tt>.
	  </dd>
	  
	  <dt>list</dt>
	  <dd>
		An ordered sequence of any other objects. The sequence begins
		with <tt>(</tt> and ends with <tt>)</tt> and elements are
		separated by commas. An empty list is denoted by <tt>(,)</tt>
		and a list with one member is denoted by
		<tt>(<em>e</em>,)</tt>, where <em>e</em> is the member of the
		list.
	  </dd>
	</dl>

	<h4><?h3("Expressions")?></h4>

	<dl>
	  <dt>atomic</dt>
	  <dd>
		Any atomic value evaluates to itself.
	  </dd>
	  
	  <dt>variable</dt>
	  <dd>
		A legal variable name can have one or more following
		characters: <tt>a</tt>...<tt>z</tt>, <tt>A</tt>...<tt>Z</tt>,
		<tt>0</tt>...<tt>9</tt>, <tt>_</tt> and <tt>.</tt>. A digit
		cannot be the first character of the variable name and
		<tt>NULL</tt> is forbidden as a variable name. Variable
		evaluates to it&rsquo;s current value if set. If not set, then it
		evaluates to <tt>NULL</tt>.
	  </dd>

	  <dt>array</dt>
	  <dd>
		The language does not have separate array type. However, list
		variables can be used as arrays. If
		<em>a=(a<sub>0</sub>,a<sub>1</sub>,...,a<sub>n-1</sub>)</em>
		is a list, we can use notation <tt>a[i]</tt> as a reference to
		<em>a<sub>i</sub></em>. This notation can be
		nested like <tt>a[i][j]</tt>, i.e lists of lists represents
		2&ndash;dimensional array. Access time is constant. List indexing can be
		also used after any expression in parenthesis, e.g. <tt>(seq(1,5))[i]</tt>.
	  </dd>
	  
	  <dt>dictionary</dt>
	  <dd>
		Dictionary type is also a special kind of list, which contains
		key&ndash;value pairs. Each member of the dictionary is a list
		with two members: <em>(key,value)</em>. Dictionary must be
		initialized as an empty list, i.e. <tt>d=(,)</tt>. After that
		each reference of form <tt>var{key}</tt> creates new pair
		(<em>key</em>,<tt>NULL</tt>) if necessary. If there is already
		correct key, then value corresponding to the key is returned. Dictionary indexing
        can also be used after expression in parenthesis like array indexing.
	  </dd>
	  
	  <dt>negation</dt>
	  <dd>
		Value of an expression <tt>-e</tt> is a negation of <em>e</em>
		if <em>e</em> is a number. Otherwise <tt>Parser::LangErr</tt>
		is thrown.
	  </dd>
	  
	  <dt>addition</dt>
	  <dd>
		Value of an expression <tt>e<sub>1</sub>+e<sub>2</sub></tt> is
		a concatenation of lists if both <em>e<sub>1</sub></em> and
		<em>e<sub>2</sub></em> are lists. If both are numbers, then
		value is the sum of those numbers. If one is an integer and
		other is a real, then answer is given as a real number. If one
		of the arguments is a string, then result is concatenation of
		the string and the other expression converted to string.
	  </dd>

	  <dt>subtraction</dt>
	  <dd>
		An expression <tt>e<sub>1</sub>-e<sub>2</sub></tt> is a short
		hand notation for <em>e<sub>1</sub>+(-e<sub>2</sub>)</em>
		except for lists. If both arguments are list, the result is a
		list containing all members of <em>e<sub>1</sub></em> which do
		not belong to <em>e<sub>2</sub></em>.
	  </dd>

	  <dt>multiplication</dt>
	  <dd>
		An expression <tt>e<sub>1</sub>*e<sub>2</sub></tt>
		evaluates to <em>e<sub>1</sub></em> x <em>e<sub>2</sub></em>
		if both are numbers. If one is a number <em>n</em> and other
		is a string or a list, then the string or list is catenated
		with itself <em>n</em> times. If both operands are lists with
		the same size, then return value is a list containing pairwise
		multiplied elements of <em>e<sub>1</sub></em> and
		<em>e<sub>2</sub></em>. Otherwise <tt>Parser::LangErr</tt> is
		thrown.
	  </dd>
	  
	  <dt>division</dt>
	  <dd>
		An expression <tt>e<sub>1</sub> / e<sub>2</sub></tt> evaluates
		to the integer part of <em>e<sub>1</sub>/e<sub>2</sub></em> if
		both are integers. If either or both are real, the result of
		operation is <em>e<sub>1</sub>/e<sub>2</sub></em>. Otherwise
		<tt>Parser::LangErr</tt> is thrown.
	  </dd>
	  
	  <dt>modulo</dt>
	  <dd>
		An expression <tt>e<sub>1</sub> % e<sub>2</sub></tt> evaluates to remainder of division
		<em>e<sub>1</sub>/e<sub>2</sub></em> if both are integers. If
		either one is <tt>NULL</tt>, return <tt>NULL</tt>. Otherwise
		<tt>Parser::LangErr</tt> is thrown.
	  </dd>

	  <dt>function call</dt>
	  <dd>
		Function call <tt>f(e)</tt> calls an user defined function if
		available. Otherwise an internal function is called. Function
		call evaluates to the value returned by the function.
	  </dd>

	  <dt>substitution</dt>
	  <dd>
		Values can be assigned to variables with expression
		<tt>v=e</tt>, where <em>v</em> is a valid variable name. The
		substitution evaluates to <em>e</em>.
	  </dd>

	  <dt>relation</dt>
	  <dd>
		Two expression can be compared with traditional operators
		<tt>==</tt>, <tt>!=</tt>, <tt>&lt;</tt>, <tt>></tt>,
		<tt>&lt;=</tt> and <tt>>=</tt>. Each of these operators
		returns 1, if relation is true and 0 otherwise. Relation is
		valid ordering and can be used with any type.  When both
		operands are <tt>NULL</tt>, equality operator returns 1. If
		one of the operands is <tt>NULL</tt> and the other is not,
		equality operator returns 0. List operands are considered
		equal if they have same length and they have same members in
		same order.  Operator <tt>!=</tt> is a short hand notation for
		<tt>not</tt> <em>e<sub>1</sub></em> <tt>==</tt> <em>e<sub>2</sub></em>.
	  </dd>

	  <dt>logical</dt>
	  <dd>
		Operators <tt>&amp;&amp;</tt>, <tt>!</tt> and <tt>||</tt> can
		be used. The <tt>!</tt>&ndash;operator returns 1 except when
		argument is non&ndash;zero integer or non&ndash;zero real.
		Other operators returns <tt>NULL</tt> if any argument is
		<tt>NULL</tt>. If both arguments are integers, then logical
		value 1 or 0 is returned. In any other case
		<tt>Parser::LangErr</tt> is thrown.
	</dl>

	<h4><?h3("Control flow")?></h4>

	Each code line is ended by <tt>;</tt> and lines of the script
	beginning with <tt>#</tt> are comments.  The scripting language
	supports standard <tt>if</tt>- and
	<tt>while</tt>-statements. Additionally, a <tt>for</tt> loop is
	supported as <tt>for (v) (L) {loop body}</tt>, where <em>v</em> is a
	loop variable which gets assigned all values of the list
	<em>L</em>. All loop variables are local to the loop body and
	stored to the stack. If the loop body alters stack content
	incorrectly (i.e. pushed values are not popped), then loop
	variables probably gets different values after the loop. As a
	special form of the for loop is <tt>for (v) (n) {loop body}</tt>,
	where <em>n</em> is an integer expression. In this case, the loop
	variable <em>v</em> runs through values 0,1,...,n-1.

	<div class="caption"><?ex("Control flow")?></div>
	<div class="example">
	  Following code 
	  <pre>
for(i)(10)
{
  if(i % 2==0)
  {
    j=i;
    while(j)
      print(j=j-1);
    println("");
  }
}
	  </pre>
	  produces 
	  <pre>
10
3210
543210
76543210
	  </pre>
	</div>

	<h4><?h3("Defining own functions")?></h4>
	
	You can define own function as follows: 

	<p>
	<div class="caption"><?ex("Defining functions")?></div>
	<div class="example">
	  Let us define
	  <pre>
def increment
{
  return(ARG+1);
}
	  </pre>
	  The statement <tt>return(ARG+1)</tt> sets the return value of
	  the function which defaults to <tt>NULL</tt>. Pseudo variable
	  <tt>ARG</tt> contains arguments of the function call. The
	  function above increments given argument by one if
	  possible. Otherwise it produces exception, if argument is
	  incompatible with addition operation. For example, the
	  expression <tt>increment(1.2)</tt> gives a result 2.2.
	</div>
	
	<p>
	  NOTE 1: The <tt>return</tt>-statement do not terminate the execution of the
	  function. You can set the return value more than once and the last
	  call to return takes precedence.
	<p>
	  NOTE 2: The function can be defined more than once. New definition
	  overwrites older definition.
	<p>
	  NOTE 3: Function definitions can be introduced anywhere in the code,
	  even inside loops or <tt>if-else</tt> constructions.
	  
	  
	<h4><?h3("Local variables")?></h4>

	There are no local variables. However, it is possible to simulate
	local variables using stack:

	<div class="caption"><?ex("Local variables")?></div>
	<div class="example">
	  Let us define
	  <pre>
#
# foo(n,e) - evaluates n times expression e
#
def foo
{
  push(a);
  a=seq(1,ARG[0]);
  forall(ARG[1],a);
  a=pop();
}
	  </pre>
	  This function evaluates the argument ten times. (Actually it is
	  unnecessary to store sequence 1,...,10 temporarily, but this is
	  just an example.)
	</div>

	<h3><?h2("Function reference")?></h3>

	  All functions are documented <a href="ref_functions.php">here</a>.
	  
	<?include("function_index.php")?>

	<h2><?h1("Implementing games using Gccg")?></h2>

	<h3><?h2("Planning and preparations")?></h3>

	<p>
	  Before starting a concrete work on a game project, you must
	  collect some knowledge and material. You should be very
	  familiar with the traditional conventions and rules of the
	  game under implementation. Also, it would be very fruitful
	  for the speed of the development, if you have at least basic
	  knowledge for several other games already implemented under
	  Gccg. When accomplishing each task a developer with large
	  knowledge base can select the existing game with the most
	  resemblance with respect to the task under work. If lucky,
	  you can use lot of existing material as source.

	<p>
	  Following information must be collected as a preparation for
	  the project:
	<ul>
	  <li>Choose a <em>short name</em> for the game. It should be different
		to all existing games and usable as a part of a filename. You
		should also try to choose a short name, which is not trademarked.
	  <li>List of all cards that exist in the game. This list must
		contain at least the card name and it&rsquo;s rarity
		distribution. You must also find out all rarities and
		assign one letter to denote each rarity. You also need
		packing information of each product for sale.
	  <li>Decide additional card data needed. At least you need
		all information which is relevant to the location
		algorithm. Usually some kind of the card type is used to
		decide where to put a card when played on table. However,
		the best possible solution is to provide all card data,
		because unused data can be used as reference during play.
	  <li>Choose a source(s) for data and acquire documents
		needed. Usually some kind of a spoiler list is
		enough. Ensure that the spoiler list contain all data you
		need and the information given is correct. Sometimes it is
		useful to use two different spoilers and make some kind of
		cross validation between the two, since there are almost
		always errors. In the worst case, you may use original cards
		and do a lot of hand work.
	  <li>Reserve port numbers for your game 
		(see Table <?ref("Port numbers")?>) 
		from the author. In principle any ports can be used, but
		organizing default port numbers makes life easier when someone
		wants to establish several servers.
	</ul>
	<p>
	<div class="caption"><?$demostep=1; ex("Collectible Poker - Step ".$demostep++)?></div>
	<div class="example">
	  As an example, we build our own collectible card game. It is
	  a collectible Poker game with jokers. We choose
	  <em>Poker</em> as a short name for the game. List of cards
	  is traditional 2,3,4,5,6,7,8,9,10,J,Q,K,A of spades, hearts,
	  clubs and diamonds plus two jokers, red and black. Since
	  there is no rarity distribution, we made one by
	  ourselves. Let us call rarities as <em>common</em>,
	  <em>uncommon</em>, <em>rare</em> and <em>very rare</em> and
	  denote them C, U, R and V. We choose that 2,3,4,5,6,7 and 8
	  are commons; 9,10,J and Q are uncommons; kings and aces of
	  each suit are rares; and jokers are very rare. Suppose that
	  these are sold as boosters containing 1 rare, 2 uncommon and
	  4 commons. We set that instead of a rare card, there can be
	  a very rare card with probability of 20%.
	</div>
	<p>
	  This documentation is written to Unix-environment. Fortunately
	  there is an excellent collection of Unix tools for Windows
	  called <a href="http://www.cygwin.com/">Cygwin</a>. You should
	  install Cygwin if using Windows. [What packages are needed for
	  Cygwin?] Then the most of this document applies also to the Cygwin
	  environment. In addition to the decent working environment, you
	  need to install at least binary packages (or compile from
	  source) for your platform and the following packages:
	  <tt>client</tt>, <tt>fonts</tt>, <tt>server</tt> and
	  <tt>dev-tools</tt>. It is also highly recommended that you
	  install all games you know including server packages. These can
	  help you a lot, when you can peek how things are done in the
	  game you are familiar with.
	  
	<h3><?h2("Beginning of the hard work is easy")?></h3>

	Let us start from the easiest task. We need to establish
	similar directory structure as other games by creating
	subdirectories with the same name as the short name of the
	game. Then we need the image (or images if the game have
	several card backs) presenting the back of the cards in our
	game and store it under <tt>graphics/<em>Game</em>/</tt> directory. The
	card back image can be in any format supported by
	<tt>SDL_image</tt> and it must have the size of a zoomed card
	image on the client. The zoom size can be decided by the designer
	of the game.

	<p>
	<div class="caption"><?ex("Collectible Poker - Step ".$step++)?></div>
	<div class="example">
	  At first, we create directories<br>
	  <tt class=code>mkdir data/Poker</tt><br>
	  <tt class=code>mkdir lib/Poker</tt><br>
	  <tt class=code>mkdir decks/Poker</tt><br>
	  <tt class=code>mkdir graphics/Poker</tt><br>
	  <tt class=code>mkdir xml/Poker</tt><br>
	  <tt class=code>mkdir scripts/Poker</tt><br>
	  and then we store our card background image to<br>
	  <tt class=code>graphics/Poker/back.jpg</tt>
	</div>

	<h3><?h2("Basics of XML files")?></h3>
	
	The game and cards are defined in XML-files. The <em>game
	  definition file</em> is stored in
	<tt>xml/<em>game</em>.xml</tt> and it defines general
	properties of the game and client behavior. Each published
	card set is described in <em>set definition file</em> and are
	stored under <tt>xml/<em>Game</em>/</tt> directory.

	<p>
	<div class="caption"><?ex("Collectible Poker - Step ".$step++)?></div>
	<div class="example">
	  Let us write a minimal game definition file
	  <tt>xml/poker.xml</tt> for Poker and
	  extend it later as needed:
	  <pre>
&lt;?xml version="1.0" encoding="ISO-8859-1"?&gt;
&lt;!DOCTYPE ccg SYSTEM "gccg-game.dtd"&gt;

&lt;ccg name="Collectible Poker" dir="Poker"&gt;
  &lt;option name="hand card size" value="50"/&gt;
  &lt;option name="table card size" value="50"/&gt;
  &lt;option name="deck card size" value="50"/&gt;
  &lt;option name="book card size" value="50"/&gt;
  &lt;cardset source="poker_basecards.xml"/&gt;
&lt;/ccg&gt;</pre>
	  Now we can validate XML code, for example, using command line tool <tt>xmllint</tt><br>
	  <tt class=code>xmllint --noout --valid xml/poker.xml</tt>
	</div>
	<p>
	  The structure of the game definition file is
	  simple. Everything is stored inside tag <tt>ccg</tt>, which
	  have two attributes, the full name of the game and the short
	  name of the game. Everything else is given in any order
	  using couple of predefined tags. In above example, we
	  introduced <tt>option</tt> tag which have two attributes:
	  name of the option and it&rsquo;s value. The options above
	  determines the size of cards used in several places in the
	  client. The values are percentage of the size with respect
	  to our card background image. So, in the example, we decided
	  that cards in the hand, in the deck, in the collection or on
	  the table have their sizes halved. After the options, there
	  is a tag pointing to a set definition file. The
	  <tt>cardset</tt> tag determines which set definition files to
	  load on startup.
	<p>
	  The set definition file specifies a list of cards in some
	  order. The order determines one-to-one mapping between card
	  numbers and card names. The first card of the first set
	  definition file given in the game definition file is a card number
	  zero. After that, each card gets next integer in sequence and
	  this numbering continues through every set definition file
	  specified in the game definition file. The card number zero has
	  a special meaning. It represents the back side image of
	  cards. Additionally, the first set definition file does not
	  specify any real cards. It is reserved for card backs and other
	  special objects needed.

	<p>
	<div class="caption"><?ex("Collectible Poker - Step ".$step++)?></div>
	<div class="example">
	  Let&rsquo;s create a set definition file
	  <tt>xml/Poker/poker_basecards.xml</tt> for reserved cards:
	  <pre>
&lt;?xml version="1.0" encoding="ISO-8859-1"?&gt;
&lt;!DOCTYPE ccg-setinfo SYSTEM "../gccg-set.dtd"&gt;
&lt;ccg-setinfo name="" game="Collectible Poker"&gt;

  &lt;cards&gt;
    &lt;card name="A Card" text="" graphics="back.jpg"&gt;
    &lt;/card&gt;
    &lt;card name="_unknown_" text="" graphics=""&gt;
    &lt;/card&gt;
    &lt;card name="_unknown_" text="" graphics=""&gt;
    &lt;/card&gt;
  &lt;/cards&gt;

&lt;/ccg-setinfo&gt;</pre>
	  And, of course, we validate our XML<br>
	  <tt class=code>xmllint --noout --valid xml/Poker/poker_basecards.xml</tt>
	</div>

	<p>
	In the example above, we didn&rsquo;t gave a name to our set
	(<tt>name</tt> attribute of <tt>ccg-setinfo</tt> tag). In that
	case, all cards from the nameless set definition file is
	considered special and they do not appear in players&rsquo;
	collection. Cards are listed in order inside <tt>cards</tt>
	tag. Each individual card is defined by <tt>card</tt> tag, which
	have attributes <tt>name</tt>, <tt>text</tt> and
	<tt>graphics</tt>. In the example, <tt>name</tt> attributes have a
	special value <tt>A Card</tt> denoting that the card does not
	have any meaningful name and <tt>_unknown</tt> for unused card slots.
        Attribute <tt>text</tt> contains the
	text of the card if any. The last attribute <tt>graphics</tt>
	points to the image representing the card. The images are searched
	from <tt>graphics/<em>Game</em>/</tt> directory, unless the set
	definition file specifies different directory (see Section <?ref("Creating set definition files")?>). The example
	above sets image for the card number zero, i.e. the backside of
	cards. After the zero-card, there are cards 1 and 2 reserved for
	future. The number of reserved cards should be decided now to be
	big enough, since it ruins everything if card numbers changes
	later. If adding one card here, it shifts all the rest card
	numbers by one and every old server and client are incompatible
	thereafter.

	<h3><?h2("First Gccg-script")?></h3>

	The game specific functionality is programmed using platform
	independent Gccg-script. When the client starts, it checks that
	the most important definitions are give and if not, client
	displays an error message and quits. We are not yet going to the
	details of scripting, but we set up minimal script
	<tt>scripts/<em>Game</em>.include</tt> to boot our
	game instead and fill details later.

	<div class="caption"><?ex("Collectible Poker - Step ".$step++)?></div>
	<div class="example">
	  We write following <tt>scripts/Poker.include</tt>:
	  <pre>
# VARIABLES
# =========

HANDSIZE=5;
DECKBOX_SIZE=(20,220,110);
if(!port)
  port=29102;
product.image=(,);

# FUNCTIONS
# =========

def NewDeck
{
  return((("deck",(,)),));
}

def InitializeLocationTables
{
  rules.category=(,);
  rules.coordinate=(,);
}

def StartGame 
{
}</pre>
	</div>
	<p>
	In the example above, we defined couple of variables and
	functions. Here is a description of variables:
	<dl>
	  <dt>HANDSIZE</dt>
	  <dd>This is the natural hand size for the game if any. Usually there
		are menu entries that allow directly transfer <em>HANDSIZE</em>
		number of cards from one target to another where appropriate.</dd>
	  <dt>DECKBOX_SIZE</dt>
	  <dd>This variable contains a triplet (<em>w1, w2, w3</em>),
		where each number is a width of the deck edit field in
		pixels. The first component <em>w1</em> sets the width of the
		number of the cards field, <em>w2</em> sets width for
		card names and <em>w3</em> sets width of the card type
		field.</dd>
	  <dt>port</dt>
	  <dd>This is the default port number where to connect. We should
		check first that we don&rsquo;t override port number given as an
		argument to the client.</dd>
	  <dt>product.image</dt>
	  <dd>This is a dictionary mapping product names to the
		corresponding product images under
		<tt>graphics/<em>Game</em>/</tt>. In the example we just
		defined an empty dictionary (which is the same as an empty
		list). If the image of a product is not found from this
		dictionary, the client uses
		<tt>graphics/unknown_booster.jpg</tt> instead.
	</dl>
	And here are short descriptions of obligatory function
	definitions:
	<dl>
	  <dt>NewDeck()</dt>
	  <dd>This functions takes no arguments and returns an empty deck
		structure. The decks are described as dictionary which maps
		deck name strings to the lists of integers representing card
		numbers in the deck part. In this case, we are satisfied with
		one part called <em>deck</em> and it&rsquo;s content defaults to the
		empty list.</dd>
	  <dt>InitializeLocationTables()</dt>
	  <dd>The <em>card placement algorithm</em> is described in section
	  <?ref("Card placement algorithm")?> This is an initialization
		function, which fills rules for the location algorithm. We
		leave tables <tt>rules.category</tt> and
		<tt>rules.coordinate</tt> empty for now and discuss them
		later.
	  <dt>StartGame()</dt>
	  <dd>This function is called at the beginning of the each game and can
		contain initialization tasks and automated start up procedures at the
		beginning of the match.
	</dl>
	<p>
	  Now we are ready for our first test launch. Just say
	  <br><tt class=code>ccg_client <em>game</em>.xml</tt><br>
	  and client should start using our minimal set of
	  definitions. Connection to the meta server will fail and there is
	  not much to do. You can browse empty collection without any
	  cards and quit.

	<div class="caption"><?fig("First launch")?></div>
	<img alt="First launch" src="poker_shot1.png">

	<h3><?h2("Creating set definition files")?></h3>

	The first larger programming task is the generation of set
	definition files. Usually this is accomplished by downloading
	appropriate spoilers preferably in ASCII text format and then
	converting them to XML using Perl. A directory
	<tt>data<em>/Game</em></tt> is reserved for accumulating all
	external data needed for the game. You can write small sample XML
	file by hand if not yet familiar with this process and try it
	first. After that you can write Perl script
	<tt><em>game</em>_spoil_to_xml.pl</tt> to convert full featured
	set description. You must also edit the game definition file to
	load all information of sets.

	<p>
	<div class="caption"><?ex("Collectible Poker - Step ".$step++)?></div>
	<div class="example">
	  We want to create one deck suitable for playing poker. Here is a
	  snippet of <tt>xml/basic_deck.xml</tt>:
	  <pre>
&lt;?xml version="1.0" encoding="ISO-8859-1"?&gt;
&lt;!DOCTYPE ccg-setinfo SYSTEM "../gccg-set.dtd"&gt;
&lt;ccg-setinfo name="Basic Deck" dir="BasicDeck"
  abbrev="BD" game="Collectible Poker"&gt;

  &lt;cards&gt;
    &lt;card name="Red Joker" text="" graphics="rj.jpg"&gt;
       &lt;attr key="rarity" value="V"/&gt;
       &lt;attr key="suit" value="any"/&gt;
       &lt;attr key="rank" value="any"/&gt;
    &lt;/card&gt;
    &lt;card name="Black Joker" text="" graphics="bj.jpg"&gt;
       &lt;attr key="rarity" value="V"/&gt;
       &lt;attr key="suit" value="any"/&gt;
       &lt;attr key="rank" value="any"/&gt;
    &lt;/card&gt;
    &lt;card name="Ace of Spades" text="" graphics="as.jpg"&gt;
       &lt;attr key="rarity" value="R"/&gt;
       &lt;attr key="suit" value="spades"/&gt;
       &lt;attr key="rank" value="ace"/&gt;
    &lt;/card&gt;
    &lt;card name="King of Spades" text="" graphics="ks.jpg"&gt;
       &lt;attr key="rarity" value="R"/&gt;
       &lt;attr key="suit" value="spades"/&gt;
       &lt;attr key="rank" value="king"/&gt;
    &lt;/card&gt;

    ...

    &lt;card name="Three of Clubs" text="" graphics="3c.jpg"&gt;
       &lt;attr key="rarity" value="C"/&gt;
       &lt;attr key="suit" value="clubs"/&gt;
       &lt;attr key="rank" value="3"/&gt;
    &lt;/card&gt;
    &lt;card name="Two of Clubs" text="" graphics="2c.jpg"&gt;
       &lt;attr key="rarity" value="C"/&gt;
       &lt;attr key="suit" value="clubs"/&gt;
       &lt;attr key="rank" value="2"/&gt;
    &lt;/card&gt;
  &lt;/cards&gt;

&lt;/ccg-setinfo&gt;</pre>
	  We also need to update the game definition file to read this
	  file in after our previous set definition file, which defined
	  the card back.
<pre>
  ...
  &lt;cardset source="poker_basecards.xml"/&gt;
  <b>&lt;cardset source="basic_deck.xml"/&gt;</b>
  ...</pre>
	  The line in <tt><b>bold</b></tt> text represents our latest
	  addition to the file. Now we have following: card number zero is
	  the back of the card, card numbers 1 and 2 are reserved for
	  future, card numbers 3 and 4 are jokers, card number 5 is ace of
	  spades and so on. 
	  <p>
		If we wish, we can create several copies of this set
		definition file and create several different products each
		having different graphics. This can be done
		simply by changing subdirectory specification <tt>dir</tt> at
		the beginning of the set definition file. We can also change
		rarities of additional card sets, if we like.
	</div>

	<p>
	  The header tag <tt>ccg-setinfo</tt> introduced two new
	  attributes. The attribute <tt>dir</tt> defines subdirectory for
	  the set, which is used as source when looking for card
	  images. In the example above, the full path of the image of King
	  of Spades is thus <tt>graphics/Poker/BasicDeck/ks.jpg</tt>. The
	  attribute <tt>abbrev</tt> is two letter abbreviation for the
	  set, which is used in several places instead of the full set
	  name. Each card now contains card property definitions. Each
	  property is given by <tt>attr</tt> tag, which has two
	  attributes: <tt>key</tt> and <tt>value</tt>. When a script needs
	  to know an attribute of a card, it can call a function
	  <tt>card_attr(<em>a</em>,<em>n</em>)</tt>, where <em>n</em> is
	  the number of the card and <em>a</em> is the attribute. If there
	  is an <tt>attr</tt> mapping having <tt>key="<em>a</em>"</tt>
	  defined in the set definition file, the <tt>value</tt> attribute
	  is then returned; <tt>NULL</tt> otherwise. Only compulsory
	  property for actual cards is <tt>rarity</tt>. It is one of the
	  letters chosen to present rarities followed by optional
	  probability weight, e.g. R2.  For the sake of completeness, we
	  mention that <tt>card</tt> tag can contain an attribute
	  <tt>back</tt>, which defines the card number of the
	  card. Default card back is zero card.
	<p>
	  When your Perl converter works perfectly, you can update
	  <tt>Makefile</tt> in <tt>data/</tt> directory to help rebuilding
	  of XML files. You should add your game to usage line and create
	  an entry for your game, which builds all XML files needed. In
	  principle, you need one line for each set
	  <br><tt class=code>./<em>game</em>_spoil_to_xml.pl
		<em>Game</em>/<em>set</em>_spoiler.txt &gt; ../xml/<em>Game</em>/<em>set</em>.xml</tt><br>
	  </tt>
	  You can find examples from the existing <tt>data/Makefile</tt>.

	<p>
	  Now it is time for second test launch. This time we can browse
	  the collection having empty slots for cards. We can use
	  <tt>Ctrl+H</tt> to view statistics of a card or zoom a computer
	  generated default card image using <tt>Shift</tt> key. However, cards
	  are in alphabetical order, which probably is not acceptable for
	  the most of the games. See chapter 
	  <?ref("Details of game defining XML")?>
	  for more information.
	<div class="caption"><?fig("Second launch")?></div>
	<img alt="Second launch" src="poker_shot2.png">

	<h3><?h2("Setting up factory server")?></h3>

	We have working client now. Our next step is to build server
	environment for the game. The factory server loads XML description
	of the game and card sets and provides randomly generated
	products. The protocol is simple. The <em>factory server</em> return a list
	of card numbers when it receives a triplet
	<tt>(<em>n</em>,<em>s</em>,<em>t</em>)</tt>, where <em>n</em> is
	the number of products, <em>s</em> is the card set and <em>t</em>
	is the product type requested from the card set.

	<div class="caption"><?ex("Collectible Poker - Step ".$step++)?></div>
	<div class="example">
	  Write initial <tt>scripts/Poker-factory-server.include</tt>:
	  <pre>
if(!port)
  port=29103;

def InitDistributions
{
  distribution=(,);
  distribution{"BD"}=(,);
  distribution{"BD"}{"booster"}=((4,"C"),(2,"U"),(1,"R"));
}</pre>
	  This version does not yet recognize our special rarity V, but we
	  will add that soon after we have tested this version.
	</div>

	<p>
	We need to define following variables:
	<dt>
	  <dt>port</dt>
	  <dd>Port number of the factory server.</dd>
	  <dt>distribution</dt>
	  <dd>This variable contains the rarity distribution of products and
		  it is initialized at function
		  <tt>InitDistributions</tt>. The distribution is a
		  dictionary with two keys: a set abbreviation and product name. 
		  Value of the dictionary entry is a list containing pairs (<em>n,r</em>), where
		  <em>n</em> is the number of cards having rarity <em>r</em> 
		  in the product.</dd> 
	</dt>
	and following function:
	<dt>
	  <dt>InitDistributions()</dt>
	  <dd>This function is responsible to initialize
		  <tt>distribution</tt> variable. In the example above we
		  define a booster containing BD cards (i.e. cards from the
		  Basic Deck card set). The dictionary should contain
		  list of pairs <tt>(<em>n</em>,<em>d</em>)</tt>, where <em>n</em> is
		  the number of cards to be taken from the distribution
		  <em>d</em>.</dd>
	</dt>
	<p>
	<div class="caption"><?ex("Collectible Poker - Step ".$step++)?></div>
	<div class="example">
	  We are ready to launch our factory server:
	  <br><tt class=code>./ccg_server --load factory-server.triggers poker.xml</tt><br>
	  Now we can test it using telnet:
<pre><b>[wigy] gandalf:~ >telnet localhost 29103</b>
Trying 127.0.0.1...
Connected to localhost.
Escape character is &rsquo;^]&rsquo;.
(("BD",("Basic Deck",3,56)),)
<b>(2,"BD","booster")</b>
((42,14,37,13,48,7,44),(12,42,53,30,21,8,31))</pre>
	  When connecting to the factory server, it sends some information
	  usable to the meta server. We then ask two Basic Deck boosters
	  and the server replies nicely returning a list of two boosters
	  as card numbers.
	</div>
	  
	<p>
	  Sometimes products cannot be constructed directly from the
	  distribution information. When the product does not have clear
	  "slots" for each rarity, we may need to code our own
	  function. We can overwrite default behavior by defining function
	  <tt>Produce<em>Name</em></tt>, which is called when the server
	  wants to construct any product called <em>Name</em>. We can
	  refine even further, by defining function
	  <tt>Produce<em>Set</em>_<em>Name</em></tt>, which is called when
	  the server generates the specified product <em>Name</em> from
	  the given <em>Set</em>.
	  
	<div class="caption"><?ex("Collectible Poker - Step ".$step++)?></div>
	<div class="example">
	  We look at Pokemon factory server how Holo-cards are implemented
	  and we implement Very Rare cards in the same way. We add the
	  following code (in bold) to the factory server code.
	  <pre>
  ...
  distribution{"BD"}{"booster"}=((4,"C"),(2,"U"),(1,"R"));
<b>  distribution{"BD-V"}=(,);
  distribution{"BD-V"}{"booster"}=((4,"C"),(2,"U"),(1,"V"));
}

def ProduceBD_Booster
{
  if(random(100) < 20)
    return(RandomCardSet("BD",distribution{"BD-V"}{"booster"}));
  else
    return(RandomCardSet("BD",distribution{"BD"}{"booster"}));
}</b></pre>
	  Now we have two alternative distributions. We have added
	  special distribution where a rare card is replaced with a very
	  rare card. When a booster is generated, we choose randomly which one of the
	  distributions to use. Then we use factory server function
	  <tt>RandomCardSet</tt> to generate cards from the chosen distribution.
	</div>

	<h3><?h2("Setting up meta server")?></h3>

	One more server is needed to initiate basic functionality of
	collecting and trading. The <em>meta server</em> handles this
	task. Basicly we do not need much more than initialize some
	variables to bring the meta server alive.
	<dt>
	  <dt>AMOUNT_TO_PAY_WEEKLY</dt>
	  <dd>See <?ref("Fine tuning")?></dd> 
	  <dt>INITIAL_MONEY</dt>
	  <dd>See <?ref("Fine tuning")?></dd> 
	  <dt>PRIZE_PER_PLAYER</dt>
	  <dd>See <?ref("Fine tuning")?></dd> 
	  <dt>factory.port</dt>
	  <dd>Port number of the factory server, where the meta server
		connects to.</dd>
	  <dt>port</dt>
	  <dd>Port number of the meta server.</dd>
	  <dt>products</dt>
	  <dd>This variable holds current storage of products. It is a
		dictionary having complete product names as a key. Each key
		corresponds to a value (<em>n,p,(s,t),n<sub>0</sub></em>). The
		initial size of the current print run is <em>n<sub>0</sub></em> and
		the number of products available now is <em>n</em> (see
		command <tt>/reproduce</tt>). The product itself is described
		by the pair (<em>s,t</em>), where <em>s</em> is the card set
		and <em>t</em> is the product type 
		(see <?ref("Setting up factory server")?>). The price of the
		product is <em>p</em>.</dd>
	</dt>

	<p>

	<div class="caption"><?ex("Collectible Poker - Step ".$step++)?></div>
	<div class="example">
	  Let us write following <tt>scripts/Poker-meta-server.include</tt>:
	  <pre>
if(!port)
  port=29102;
factory.port=29103;

PRIZE_PER_PLAYER=1.0;
INITIAL_MONEY=50.0;
AMOUNT_TO_PAY_WEEKLY=10.0;

if(!load("products"))
{
  products=(,);
  products{"Basic deck booster"}=(65536,3.9,("BD","booster"),65536);
  save("products");
}</pre>
	  We do not want to lose the status of the
	  variable <tt>products</tt> between reboots. So, we try to load
	  it&rsquo;s saved value first and if that fails, we initialize it to
	  the initial value. We put 65536 boosters available for $3.90.
	  Finally, we save the value of the <tt>products</tt>. This is
	  also done automatically when server is shut down.
	</div>

	<p>
	  Now it is time to test, if our server system is ready to sell
	  products and manage collections. First we need to launch the
	  factory server as described in the previous section and then
	  launch the metaserver
	  <br><tt class=code>
		./ccg_server --load meta-server.triggers <em>game</em>.xml
	  <br></tt>
	  Now we can try our client to connect the meta server (don&rsquo;t
	  forget to add <tt>--server</tt> argument if necessary) and if
	  succeeded, we are able to buy boosters, buy and sell cards,
	  create decks and manage our want-lists. However, there are no
	  card graphics yet but just simple blank skeletons having the
	  name of the card and nothing else.
	<p>
	<div class="caption"><?fig("Buying the first boosters")?></div>
	<img alt="Second launch" src="poker_shot3.png">
	<p>
	  After testing you can shut down servers by simply pressing
	  <tt>Ctrl+C</tt>. When receiving <tt>Ctrl+c</tt> or some other
	  signal suggesting the end of excecution, the server saves it&rsquo;s data
	  and quits. You can look to the directory
	  <tt>save/<em>Game</em></tt> and there are all the non-static
	  data of both servers.

	<h3><?h2("Details of game defining XML")?></h3>
	<h3><?h2("Card placement algorithm")?></h3>
	
	<h3><?h2("Packaging a game module for client installation")?></h3>
	Game modules will allow a client to install a game from an online repository.
	the first part documents how to create and provide the modules. The second
	part how to use the client to use it.
	<p>
	A game module can consist of several packages. Possibly one can divide it into
	a xml tables and exectuables package, a graphics package and a decks package.
	These packages and their content one defines in xml/packages.xml. Each module
	is labelled with a name and a version. The inclusion of files is via include 
	single file, a list specified via wildcards or a whole directory, see example: <br>
	<pre>
	 <module name="GameA" version="X.Y.Z"> <br>
		<include file="GameA.extension"/> <br>
		<include files="directoryA/GameA*.extension"/> <br>
		<include dir="directoryA"/> <br>
	</module> <br>
	</pre>
	The script call "./gccg_package b" creates all modules defined in packages.xml 
	in build/modules as tgz archives. It also creates a list available.xml of those 
	packages together with their version number. <br>
	</p>
	<p>
	The modules in build/modules are supposed to be provided in a repository 
	directory on a server for a client to fetch. The client needs the URL of 
	the repository added in /xml/installed.xml The command 
	<pre> perl gccg_package source add <URL> </pre> does that or it can also be 
	added by hand in the installed.xml directly: <br>
	<pre> 
	<source url="http://domain.name/gccg-repository-name/"/> 
	</pre>
	Fetching modules with a client is performed with
	<pre >perl gccg_package install core client fonts [windows32] [module names] </pre> <br>
	Note that the client checks versions and skips those that are outdated or already 
	installed locally. So you need to update version labels.
	</p>
	
	<p><hr>
	  [Rest details to be given later. These are just copy paste from my
	  personal notes and probably also outdated.]

	<ul>
	  <li>Write rest of xml/game.xml file.
	  <li>Copy and update client scripts.
	  <li>Update Server script.
		<ul>
		  <li> add game name to usage line.
		  <li> add handlers for cases meta-game, factory-game and game.
		</ul>
	  <li>Write rest of scripts/game.include file.
	  <li>Now client should be able to join chat, to buy boosters and to create decks.
	  <li>Define drawing hints in xml/game.xml
	  <li>Write scripts/game-server.triggers
		<ul>
		  <li> add necessary deck parts to SetUpPlayer
		</ul>
	  <li>Launch game server.
	  <li>Write necessary functions for client scripts/game.include
		<ul>
		  <li>add deck locations: DeckpartLocation
		</ul>
	  <li>Update server scripts/server.functions
		<ul>
		  <li> add visibility info to new deck parts visible.me, visible.opp
		</ul>
	  <li>Acquire card images.
	  <li>Create packages (packages.xml, revisions, build)
	  <li>Make sample decks
	</ul>

  </body>
</html>
