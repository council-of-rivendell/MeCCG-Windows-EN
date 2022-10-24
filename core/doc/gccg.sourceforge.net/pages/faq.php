<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<?include("manual/book.php")?>
<html>
  <head>
	<title>Generic Collectible Card Game</title>
	<link href="default.css" rel="stylesheet" type="text/css">
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  </head>
  <body>
	<h1>Table of contents</h1>
	<p class=toc>
	  <?create_toc("faq.php")?>
	</p>

	<h1>Frequently Asked Questions</h1>

	<!-- =================== GETTING STARTED ================== -->
	<h2><?h1("Getting started")?></h2>

	<!-- ==================== -->
	<h3><?h2("System Requirements")?></h3>
	<!-- ==================== -->

	<h4><?h3("Mhz?")?></h4>
	Approximately 300Mhz PC is tested and it is playable (anyone using
	less than that, please inform). Non-PC system users may adjust the
	approximation accordingly.

	<h4><?h3("How much RAM?")?></h4>
	As much as it can get, 160M at least recommended. Seriously, cards
	eat lot of memory and they are generated when needed. Memory
	consumption can be stopped in non-Windows versions by limiting the
	maximum amount of RAM the application can get (see <tt>man
	  ulimit</tt>).

	<h4><?h3("How much disk?")?></h4>
	Image cache may consume over 1G of disk space. If you don't want
	that, use <tt>--nocache</tt> argument for your client. (Not
	implemented on Windows.)

	<h4><?h3("Bandwidth?")?></h4>
	Gccg does not need much bandwidth. It is tested using 56K modem
	connection and it is playable just fine. However, during login
	there are lot of information to transfer and that may take a
	while.

	<!-- ==================== -->
	<h3><?h2("Graphics Setup")?></h3>
	<!-- ==================== -->

	<h4><?h3("What is recommended resolution?")?></h4>
	The resolution 1024x768 or above is recommended, while 800x600 is
	still playable. See also <?ref("I can&rsquo;t resize the window?")?>

	<h4><?h3("I don&rsquo;t see what i am typing?")?></h4> 
	Your Gccg-window
	is too big for your screen. Increase your resolution beyond
	1024x768, move the window upwards, use full screen mode or resize
	the window.

	<h4><?h3("How do i set full screen mode?")?></h4>
	Windows: edit the batch file (<tt><em>Game.bat</em></tt>) which launches the game and replace
	the line
	<br><tt class=code>
	  ccg_client.exe --user %USER% %1 %2 %3 %4 %5 %6 %7 %8 %9  <em>game</em>.xml
	</tt><br>
	with
	<br><tt class=code>
	  ccg_client.exe --full --user %USER% %1 %2 %3 %4 %5 %6 %7 %8 %9  <em>game</em>.xml
	</tt><br>
	<p>
	  Other systems: launch the client using
	<br><tt class=code>
	  ./<em>Game</em> --full
	</tt><br>
	<p>
	  Note: <tt>Ctrl+Alt+F</tt> toggles full screen on and off, but it
	  works only in Linux currently. Waiting for SDL library to
	  implement it for other systems too.
	<p>
	  Note: In windows, you can go back from the full screen mode using <tt>Alt+Tab</tt>.

	<h4><?h3("I can&rsquo;t resize the window?")?></h4>
	The application is not yet very easily resizeable. You can add
	parameter <tt>--geometry 800x600</tt> to get 800x600 screen for
	example. Follow instructions in <?ref("How do i set full screen mode?")?>
	replacing the parameter <tt>--full</tt> with your desired geometry
	setting.

	<h3><?h2("First steps")?></h3>
	<!-- ==================== -->

	<h4><?h3("I am logged in! What to do?")?></h4>
	You can ask people around for help. If you don&rsquo;t want to
	show that you are newbie (well, they see it anyway, because you
	are a rat!), you can right click everything and try to figure out
	things from the context menus. Pressing <tt>F1</tt> shows you list
	of commands to use in addition to menus. You can get more info
	about commands using
	<br><tt class=code>
	  /help <em>command</em>
	  <br></tt>
	
	<h4><?h3("I don't want to be a rat!")?></h4>
	Then you must change your <em>avatar</em>. Check the list of avatars from <a href="misc/avatars.html">here</a>.

	<h4><?h3("Some people have text under their <tt>/whois</tt> info?")?></h4>
	You can set your own quote or short message using <tt>/set plan
	  <em>text to add</em></tt>.

	<h3><?h2("Mouse and keyboard")?></h3>
	<!-- ==================== -->

	<h4><?h3("Sometimes chat line editing keys stops working while playing.")?></h4>
        The input line must be clear when using these during play.
        Press backspace until your input line is empty.

	<h4><?h3("I don't have right mouse button.")?></h4>
        Use <tt>/bind /eval MenuByContext()</tt> and press a key to bind the right button to the one of unused keys.

	<h4><?h3("I don't have middle mouse button.")?></h4>
        Use <tt>/bind /eval MouseMiddleClick()</tt> and press a key to bind the middle button to the one of unused keys. You can also use <tt>Alt+left click</tt> instead of middle clicking.

	<!-- =================== Client =========================== -->
    <h2><?h1("Client in general")?></h2>

	<h3><?h2("Account")?></h3>
	<!-- ==================== -->

	<h4><?h3("What is my password?")?></h4>
	The client generates a random password for you when you register
	yourself into the game first time. The server stores your password
	at the first login. After that, your password must match or you
	are not able to login. (If you really want to know what your
	password is, check <tt>~/.gccg/<em>Game</em>/password</tt> (or
	<tt>C:\.gccg\<em>Game</em>\password</tt> in Windows).

	<h4><?h3("I am going to reinstall my OS. What to do?")?></h4>
	Make a backup copy of your <tt>~/.gccg</tt> directory (or
	<tt>C:\.gccg</tt> in Windows). It contains your
	passwords and decks. 

	<h4><?h3("I lost my password.")?></h4>
	Ask an administrator to send the password file for you by email
	and apologize that you didn't read the FAQ <?ref("I am going to reinstall my OS. What to do?")?>
        <b>NEW:</b> When you receive your password, drop that to your 
        <tt>~/.gccg/<em>Game</em>/password</tt> and  launch the client.
        (<tt>C:\.gccg\<em>Game</em>\password</tt> in Windows.)

	<h4><?h3("How do i change my nick name?")?></h4>
	Start an another account and ask admin to remove older account
	before you get caught and recieve a lifetime ban. ;)

	<h3><?h2("Economy")?></h3>
	<!-- ==================== -->

	<h4><?h3("Do i have to pay real money?")?></h4>
	No. It is purely imaginary. Everything is free of charge.

	<h4><?h3("What's all this money stuff good for anyway? I just want to play!")?></h4>
	Don't worry, it is fully optional. You can add any card to your
	deck, it will merely be considered a proxy. (Do know that once you
	start the collecting it turns out addictive.)

	<h4><?h3("I'm out of money! How do I get more?")?></h4>
	a) You earn money by winning (or even when losing) games.<br>
	b) You earn even more money by playing games with a bet (see
	<tt>$<em>num</em></tt> markings on tables).<br>
	c) Sell your cards.<br>
	d) Collect all cards of a published set and register it.

	<h3><?h2("Collecting")?></h3>
	<!-- ==================== -->

	<h4><?h3("Why there aren't any fixed packs?")?></h4>
	All fixed decks are included (or are going to be included) as
	sample decks for the game. This leaves you some collecting tasks
	to fill missing cards for the sample decks.

	<h4><?h3("How can i buy promotional/special cards?")?></h4>
	You can't unless someone has one for sale. You earn one random
	promotional/special card by playing a game without proxies.

	<h3><?h2("Sorting and filtering the collection")?></h3>
	<!-- ==================== -->

	<h4><?h3("How do i show cards i own?")?></h4>
	Use
	<br><tt class=code>
	  /select have>0
	  <br></tt>
	or actually <tt>/select have</tt> is enough, since <tt>have</tt>
	evaluates to a positive number if you have one or more
	cards. Check also if there is already a filter for "Sealed deck"
	for the game in question (right click collection border, choose
	"Select display..." and look for "Sealed deck").

	<h3><?h2("Trading")?></h3>
	<!-- ==================== -->

	<h4><?h3("How do I put cards on my have list?")?></h4>
	Actually you don&rsquo;t. The server generates it for you from two things:<br>
	1) All cards you have for sale are concidered also tradeable.<br>
	2) If you have more than <tt>trade_limit</tt> cards, all extras
	are tradeable. Default <tt>trade_limit</tt> is 4 and can be
	altered using the command
	<br><tt class=code>
	  /set trade_limit <em>n</em>
	  <br></tt>
	where <em>n</em> is your new <tt>trade_limit</tt>.

	<h4><?h3("My <tt>have</tt>-list is still empty?")?></h4>
	The meta server saves bandwidth by reducing the list of potential
	trades before sending the list to the client. All cards you don&rsquo;t have
	in your <tt>/want</tt>-list, are not sent to you. Now because of
	selling and wanting are exclusive, you can&rsquo;t see your cards for
	sale in your <tt>/have</tt>-list. However, you can see the cards
	you have more than your <tt>trade_limit</tt> and still want them.

	<h3><?h2("Selling")?></h3>
	<!-- ==================== -->

	<h4><?h3("How do i set a price for my card?")?></h4>
        Type in a number while mouse over the card and press enter.

	<h4><?h3("When i sell a card, my prices is always higher than others.")?></h4>
        You can change the default behaviour. Try <tt>/set price lower</tt> for
        example. The possible values are <tt>lower</tt>, <tt>higher</tt>, <tt>same</tt> or <tt>default</tt>. See more information about the last value <tt>/help default</tt>.

	<h3><?h2("Decks")?></h3>
	<!-- ==================== -->

	<h4><?h3("How do i use proxies?")?></h4>
	Just put any unowned cards to the deck. They are displayed with
	red note if you don&rsquo;t have them. Server complains about your
	proxies, but you can safely ignore it.<br>
	Note: You should agree with the opponent before the game if you
	are going to use proxies.

	<h4><?h3("I exported a deck but i can't find it?")?></h4>
    Check <tt>C:\.gccg\<em>Game</em>\export</tt> (Windows) or <tt>~/.gccg/<em>Game</em>/export/</tt> (non-Windows).

	<h4><?h3("How do i import an existing deck?")?></h4>
	Write a simple text file where you put line by line number of
	each card and the card name. If your deck has more sections than
	just a main deck, add section names without any preceding
	number. You can check the examples in the directory
	<tt>decks/<em>Game</em>/</tt>. When your deck is ready, put it to
	your <tt>import</tt> directory which is at the same subtree as
	your <tt>export</tt> directory (See 
	<?ref("I exported a deck but i can't find it?")?>) After that you
	can try importing it (<tt>Ctrl+I</tt>).
	<p>
	  Tip: Don't copy any Gccg comment headers from the sample
	  decks. Without them, the client tries harder to resolve unrecognized card
	  names. Otherwise it assumes a Gccg-exported deck with precisely
	  correct card names.
	<p>
	  Note: Gccg supports also other deck formats like NetMECCG and
	  Apprentice and those decks are importable without any modifications.

	<h3><?h2("Playing")?></h3>
	<!-- ==================== -->

	<h4><?h3("Can i play sealed deck games?")?></h4>
	Yes, check out <tt>/help sealed</tt>.

	<h4><?h3("How do i attach cards together?")?></h4>
	To attach a card to another card, move the cursor over the card
	you wish to attach. Then, hold down the <tt>Control</tt> key. While
	holding the <tt>Control</tt> key, click and move the mouse as if you
	were dragging the card until your cursor is over the second
	card. Let go of the <tt>Control</tt> key.

	<h3><?h2("Tricks and Tips")?></h3>
	<!-- ==================== -->

	<h4><?h3("How can i restore collection default view?")?></h4>
	You can bind an menu option <em>Select Display.../Default</em> to a key by
	<br><tt class=code>
	/bind /eval SetBookIndex("default","default")
	  <br></tt>
	and pressing the target key.

	<!-- =================== MTG ============================== -->
	<h2><?h1("Mtg")?></h2>

	<h3><?h2("Playing")?></h3>
	<!-- ==================== -->

	<h4><?h3("How can i alter my life points?")?></h4>
	You can set the life to the specified <em>n</em> by simply typing
	<tt><em>n</em></tt> and pressing Enter. You can also increase it
	by the specified amount by preceding the number with <tt>+</tt>
	sign or	decrease it by preceding with <tt>-</tt> sign.

	<h4><?h3("I try to say a number, but my life changes? That sucks.")?></h4>
	Add one space before or after the number.

	<h3><?h2("Specific cards")?></h3>
	<!-- ==================== -->

	<h4><?h3("Cursed Scroll.")?></h4>
	You name a card (<tt>Ctrl+middle click</tt> over the card and
	press enter) and
	shuffle your hand (<tt>Ctrl+S</tt> over your hand). Then
	your opponent left clicks your hand to expand it to the full
	size and chooses from the menu "Reveal card" over the chosen card.

	<h4><?h3("Hymn to Tourach.")?></h4>
	Left click the opponent's hand to expand it to the full size and
	shuffle it (<tt>Ctrl+S</tt> over the hand). Then select "Force
	discard" twice over the selected cards.

	<h4><?h3("Future Sight.")?></h4>
	Just reveal your deck (<tt>Ctrl+F</tt> over your deck). It shows
	the topmost card all the time then.

	<h4><?h3("Summoner's Egg.")?></h4>
        Play imprinted card face down, then use Imprint/Equip from menu.

	<h4><?h3("Parallel Thoughs.")?></h4>
        Look at your deck (<tt>Ctrl+L</tt>) and set seven cards aside
        (<tt>End</tt>). Then shuffle your library (<tt>Ctrl+S</tt>) and choose "Shuffle
        and put to the top of the deck". Then play seven times "Play a card face down"
        from your deck. Finally arrange cards to the table so that both agree which is the 
        top of the pile.

	<h4><?h3("Shahrazad.")?></h4>
        <b>NEW:</b> Move your all table cards to one pile without changing their rotation.
        Note that you must put face down morph etc cards at the bottom of the pile.
        Then play all your hand cards face down to the top of the pile. Now
        put all your discard cards face up to the top of pile.
        And finally, put counters to the topmost card indicating your life. 
        If you don't have hand cards, you may need to use some other marking than 
        face down hand cards.

	<h3><?h2("Rules")?></h3>
	<!-- ==================== -->

	<h4><?h3("What is Tribal War?")?></h4>
	Tribal War has three variants: T1, T1.5 and Ante. The rules are the same
	as normal T1, T1.5 or Ante, but your deck must contain 33% creatures
	having the same type. Creatures having more than one type, counts
	toward any of the types it have. Following cards are restricted to one in the
	T1 variant: <em>An-Zerrin Ruins</em>, <em>Engineered Plague</em>,
	<em>Extinction</em> and <em>Coat of Arms</em>. The cards are
	banned in the T1.5 variant. In the Ante variant there are no
	additional restrictions.


	<!-- =================== METW ============================= -->
	<h2><?h1("Metw")?></h2>

	<h3><?h2("General")?></h3>
	<!-- ==================== -->

	<h4><?h3("Balrog boosters?")?></h4>
	That was a design decision made by play testing team long time
	ago. Two fixed decks aren't very collectable and randomized
	boosters fits much better to Gccg collecting scheme.

	<h4><?h3("Rarity distributon of Balrog boosters?")?></h4>

	Take two boxes and count each card. You get number of times that
	card appear on a virtual "common" sheet.

	<h3><?h2("Decks")?></h3>
	<!-- ==================== -->

	<h4><?h3("How to build 2 different hazard decks?")?></h4>
	You can simply make two versions of the same deck with different
	hazard strategies. However, another method is to make actually 3
	decks: one common part, one versus minion part, one versus hero
	part. Just before play, use a command <tt>/newdeck play</tt> and
	merge appropriate parts to the deck using "Add cards from another
	deck..." option. This causes a little more work before a game, but
	makes updating common part easier.

	<h3><?h2("Playing")?></h3>
	<!-- ==================== -->

	<h4><?h3("Deck exhausted, what to do?")?></h4>
	Hide the discard pile (<tt>Ctrl+F</tt>) if revealed.
	Look at your discard pile (<tt>Ctrl+L</tt>) and press
	<tt>Home</tt> key over all sites in your discard pile. Now select
	up to 5 cards to put into the sideboard. Right click each of them
	and select "Put to sideboard". Now close the discard viewer
	(<tt>Esc</tt>) and look at your sideboard (left click or
	<tt>Ctrl+L</tt>). Press <tt>Delete</tt> over each card you wish to
	put into your deck. Finally, close the sideboard viewer and choose
	"Shuffle to the deck" from the discard pile context menu. Don't
	forget to reveal your discard pile again if it must be revealed.

	<h4><?h3("Can i play solitaire?")?></h4>
        <b>NEW:</b> Not really, but there is one little tool, which may help
        you in one player game to simulate hazards. You can select hazard deck 
        (stored in <tt>scripts/Metw/*.hazards</tt> in Gccg-format) using command
        <tt>/hazard</tt>. Without arguments it lists available hazards. You 
         can load one of them. Pressing <tt>Ctrl+Tab</tt> sets next card aside
         from the top of the hazard deck. You can do with it whatever you want.

	<h3><?h2("Specific cards")?></h3>
	<!-- ==================== -->

	<h4><?h3("Aware of their Ways.")?></h4>
	 Opponent shuffles (<tt>Ctrl+S</tt>) his discard pile and then
	 sets aside (<tt>End</tt> key) top 4 cards from the discard
	 pile. Then he reveals (<tt>Ctrl+F</tt>) the cards set
	 aside. You choose one (<tt>ctrl+middle click</tt> and press
	 <tt>Enter</tt>). The chosen card is then removed from the
	 game and opponent discards (<tt>Delete</tt>) the rest.

	<h4><?h3("Barrow-blade.")?></h4>
	In order to get the correct item score you can press <tt>Ctrl++</tt> over the
	<em>Dagger of Westernesse</em> and <tt>Ctrl+-</tt> over the
	<em>Barrow-blade</em>.

	<h4><?h3("Goblin Faces.")?></h4>
	Press <tt>End</tt> key over your opponent's deck to get cards
	aside. Then play them one by one face down (menu). For each card tell
	opponent wheter to put it to the top or to the bottom of the deck.
	Opponent can then use <tt>Home</tt> to put a card to the top of the
	deck and <tt>Ctrl+Home</tt> to put a card to the bottom of the
	 deck.

	<h4><?h3("Secret News.")?></h4>
	Left click your opponent's hand to expand it to the full
	size. Shuffle it (<tt>Ctrl+S</tt>) and choose 5 times "Reveal
	card" menu option over the chosen cards.

	<h4><?h3("Long Dark Reach.")?></h4>
        Set aside normally and play a creature if any. 
        Then choose "Shuffle and put to the top of the deck" from the menu
        of cards set aside.


	<!-- =================== SERVER =========================== -->
	<h2><?h1("Server")?></h2>

	<h3><?h2("Using server stuff")?></h3>

	<h4><?h3("My table does not connect to my local server.")?></h4>
        Add <tt>--server <em>your.ip.here</em></tt> to your server launch command.

	<h3><?h2("How do i add a table?")?></h3>
        <b>NEW:</b> See <a href="http://gccg.sourceforge.net/manual/#sec3.2.1.">instructions</a>.

	<!-- =================== CONTRIBUTING ===================== -->
	<h2><?h1("Contributing")?></h2>

	<h3><?h2("Graphics")?></h3>
	<!-- ==================== -->

	<h4><?h3("Can i make a custom avatar?")?></h4>
	Yes. Create an image fulfilling the avatar specifications and drop it
	to the directory <tt>graphics/avatar</tt> for testing. If it looks fine, send it
	to the author who will include it to the next build of the client.

	<h4><?h3("What are specifications for avatar images?")?></h4>
	PNG-files 32x32, pure black (R,G,B = 0,0,0) is invisible. The
	picture must not violate copyrights or good taste.
	<p>
  </body>
</html>
