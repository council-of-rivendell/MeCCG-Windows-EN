<p class=func>
  <b class=functitle>/addproduct <em>n</em> <em>id</em> <em>t</em> <em>prc</em></b><br>
  <em>Mode: Chat mode</em><br>
  <em>Restrictions: God and Salesman only</em><br>
This command adds one product for sale. The ordering code of the product is '<em>id</em> <em>t</em>', where <em>id</em> is the abbreviation of the card set and <em>t</em> is the type of the product ('booster', 'starter', etc.). The ordering code is a string which describes the product for the factory server. Number of the sale items available is <em>n</em> and the price of them is <em>prc</em> apiece.
</p>

<p class=func>
  <b class=functitle>/away <em>text</em></b><br>
  <em>Mode: Chat mode</em><br>
Marks you as away from the keyboard with the given text as an explantion. Without any arguments, removes away status.
</p>

<p class=func>
  <b class=functitle>/ban <em>player</em></b><br>
  <em>Mode: Chat mode</em><br>
  <em>Restrictions: God and Guard only</em><br>
Without any arguments, this command lists all banned users. Adding one or more player nicks as arguments, this commands adds them to the ban list. When a player is banned, he cannot login in to the game anymore. Additionally, if the banned player is online when this command is issued, he is kicked automatically from the server. See also /help restrict and /help unban.
</p>

<p class=func>
  <b class=functitle>/bans</b><br>
  <em>Mode: Chat mode</em><br>
This command lists all banned users and restricted domains.
</p>

<p class=func>
  <b class=functitle>/bid <em>bid</em></b><br>
  <em>Mode: Play mode</em><br>
Simple auction system works as follows: each player places their bids using this command. The bid can be any text. When each player has placed their bids, the auction results are displayed and book-keeping for bidding is reseted to be ready for next bidding.
</p>

<p class=func>
  <b class=functitle>/bind <em>text</em></b><br>
  <em>Mode: Any mode</em><br>
Without any arguments, show a listing of all bindings. Otherwise, wait for a key press. After that, bind the given <em>text</em> to the key pressed. When the key with a binding is pressed, current input line is stored temporarily, the bound text is then put to the input line and return-key is pressed automatically. After that the content of the old input line is restored. See also /help bindk and /help unbind.
</p>

<p class=func>
  <b class=functitle>/bindk <em>text</em></b><br>
  <em>Mode: Any mode</em><br>
Without any arguments, show a listing of all key stroke bindings. Otherwise, wait for a key press. After that, bind the given <em>text</em> to the key pressed. When the key with a binding is pressed, the bound text is appended to the input line as single key press. See also /help bind and /help unbind.
</p>

<p class=func>
  <b class=functitle>/buy <em>n</em> <em>product</em></b><br>
  <em>Mode: Chat mode</em><br>
This command buys one or more products, which can be listed using <em>/products</em> command. An optional argument <em>n</em> determines the number of products to buy. Default is one. A product can be given as an abbreviation instead of the full set name. The set name may be followed by an optional product type specifier, which defaults to 'booster' if not given. The product names are also case insensitive.
</p>

<p class=func>
  <b class=functitle>/copydeck <em>name</em></b><br>
  <em>Mode: Chat mode</em><br>
Make an exact copy of the current deck if selected and name it to <em>name</em>. Selects the copy as the current deck. If there are no deck selected, this command does nothing.
</p>

<p class=func>
  <b class=functitle>/default <em>r</em> <em>p</em></b><br>
  <em>Mode: Chat mode</em><br>
When selling a card first time without any competing offer, the price of the card is set to the default value. Each rarity has it's own default price, which is set when you sell the first card having the rarity in question. At that time you set the initial default value using number pad and enter. After that you can set the price <em>p</em> as default for rarity <em>r</em> using this command. Without arguments, this command lists current default prices by rarity. 
</p>

<p class=func>
  <b class=functitle>/delgame</b><br>
  <em>Mode: Play mode</em><br>
Remove a saved game for the current group of players. This command should be applied to save disk space on a server, when the saved game is not needed anymore.
</p>

<p class=func>
  <b class=functitle>/delproduct <em>id</em> <em>t</em></b><br>
  <em>Mode: Chat mode</em><br>
  <em>Restrictions: God and Salesman only</em><br>
This command removes one product. The ordering code <em>id t</em> is the same as in <em>/addproduct</em>.
</p>

<p class=func>
  <b class=functitle>/display <em>name</em></b><br>
  <em>Mode: Any mode</em><br>
When you have filtered and sorted your own custom display, you can save it for later use with this command. The name of the custom display appears at the end of the display selection list. If you want to destroy this display later, you can choose \"Destroy this display\" from the collection menu while the display is selected. See also /help select and /help sort.
</p>

<p class=func>
  <b class=functitle>/draw <em>options</em></b><br>
  <em>Mode: Play mode</em><br>
Declare the result of the game to be a draw. If someone has already declared the result, new declaration overrides it. Optional arguments <em>options</em> are game specific.
</p>

<p class=func>
  <b class=functitle>/eval <em>exp</em></b><br>
  <em>Mode: Any mode</em><br>
This command takes an expression <em>exp</em> and evaluates it using gccg-script engine. The resulting value of the expression is stored to the variable <em>E</em>. Expression can contain more than one statements separated by semicolon. The last semicolon should be omitted.
</p>

<p class=func>
  <b class=functitle>/faq <em>entry</em></b><br>
  <em>Mode: Chat mode</em><br>
This command displays an <em>entry</em> using {cyan}cyan text and adds a line to the FAQ proposals. All proposals are examined manually and added to the FAQ if they are useful. Please add questions starting with Q: and answers starting with A:. Without arguments, show current proposals for the FAQ.
</p>

<p class=func>
  <b class=functitle>/find <em>card_name</em></b><br>
  <em>Mode: Any mode</em><br>
Find a card having a name <em>card_name</em>. If exact name was not found, then search for cards with the name containing a text <em>card_name</em>. If found either way, show the collection if not already visible. Then turn to page containing the card found. If already in such page, search for the next page containing the card qualifying the search criteria.
</p>

<p class=func>
  <b class=functitle>/give <em>player</em> <em>amount</em></b><br>
  <em>Mode: Chat mode</em><br>
Give an <em>amount</em> of money to the other <em>player</em>. The other player must be online and the amount must be greater than zero.
</p>

<p class=func>
  <b class=functitle>/giveticket <em>u</em> <em>n</em> <em>s</em> <em>p</em></b><br>
  <em>Mode: Chat mode</em><br>
  <em>Restrictions: God, Salesman and Judge only</em><br>
Give <em>n</em> free product tickects, each allowing to buy one product <em>p</em> of the set <em>s</em> without charge, to the player <em>u</em>.
</p>

<p class=func>
  <b class=functitle>/go <em>table</em></b><br>
  <em>Mode: Chat mode</em><br>
This command allows you to sit down to the <em>table</em> given as a table number. You can check available tables using <em>/tables</em> command.
</p>

<p class=func>
  <b class=functitle>/grant <em>player1</em> <em>player2</em></b><br>
  <em>Mode: Chat mode</em><br>
If the <em>player2</em> is online, copy the password of <em>player1</em> to the <em>player2</em>. Every player can grant his or her password to anybody, but only God can grant others' passwords. After the password is copied, the <em>player2</em> who received the password, can log in as <em>player1</em>.
</p>

<p class=func>
  <b class=functitle>/have <em>player</em></b><br>
  <em>Mode: Chat mode</em><br>
Asks the meta server for the have list of the given <em>player</em>. The have list contains all cards which you have marked as wanted and which are put for sale by the <em>player</em>.
</p>

<p class=func>
  <b class=functitle>/help <em>topic</em></b><br>
  <em>Mode: Any mode</em><br>
Show information about the given <em>topic</em>. If there are no such topic, then all card names are checked against and if a match is found, then the card data of the mathed card is shown. Without arguments, show the list of available topics.
</p>

<p class=func>
  <b class=functitle>/inplay</b><br>
  <em>Mode: Play mode</em><br>
List all cards on table sorted by the owner of the card.
</p>

<p class=func>
  <b class=functitle>/join</b><br>
  <em>Mode: Chat mode</em><br>
Toggle your play/watch status. If you are sitting on table without the ongoing game, you will join to the game. If the number of players is sufficient, the game begins. If you join to the game that has already started, you will watch the game. This command also cancels 'ready to play' status, if already joined, but the game has not yet started.
</p>

<p class=func>
  <b class=functitle>/kick <em>player</em></b><br>
  <em>Mode: Chat mode</em><br>
  <em>Restrictions: God and Guard only</em><br>
This command forces disconnection for <em>player</em>.
</p>

<p class=func>
  <b class=functitle>/kicktable <em>tblnum</em></b><br>
  <em>Mode: Chat mode</em><br>
  <em>Restrictions: God and Guard only</em><br>
This command forces disconnection for table <em>tblnum</em>.
</p>

<p class=func>
  <b class=functitle>/legal</b><br>
  <em>Mode: Play mode</em><br>
This command asks the game server to report more detailed information on the legality of the current play deck. The deck is checked against all game formats defined and the report of violations against each format is generated.
</p>

<p class=func>
  <b class=functitle>/loadgame</b><br>
  <em>Mode: Play mode</em><br>
Searches if there is a saved game for current player(s) and restores it, if found. Note that you must be playing at the same server, where you saved your game - not necessarily at the same table. The game server announces at the beginning of the game, if there is a saved game available for your play group. Restoring the saved game does not remove it from the server; see also /help delgame.
</p>

<p class=func>
  <b class=functitle>/loadimages</b><br>
  <em>Mode: Any mode</em><br>
Normally all card images are loaded or generated on demand. This may cause unwanted delays when turning pages of the collection. This command loads all images at once.
</p>

<p class=func>
  <b class=functitle>/me <em>text</em></b><br>
  <em>Mode: Any mode</em><br>
Send an emote string to the server, which replies it as an action made by you.
</p>

<p class=func>
  <b class=functitle>/newdeck <em>deckname</em></b><br>
  <em>Mode: Chat mode</em><br>
Create an empty deck with the given <em>deckname</em> and select it as the current deck. Opens up the deck editing list automatically. The deck is saved automatically after the editing list is closed
</p>

<p class=func>
  <b class=functitle>/ok</b><br>
  <em>Mode: Play mode</em><br>
Give your acceptance to the declared result. After all players have accepted the declared result, the game ends and meta server will update all game depended statistics accordingly.
</p>

<p class=func>
  <b class=functitle>/payall <em>amount</em></b><br>
  <em>Mode: Chat mode</em><br>
  <em>Restrictions: God only</em><br>
Add the given <em>amount</em> of money to every player.
</p>

<p class=func>
  <b class=functitle>/products</b><br>
  <em>Mode: Chat mode</em><br>
List the quantity and the price of each product for sale.
</p>

<p class=func>
  <b class=functitle>/quit</b><br>
  <em>Mode: Any mode</em><br>
If you are watching or playing, leave the game and return to the chat mode. Otherwise, save decks and other client-side data and close the server connection. After that, quit.
</p>

<p class=func>
  <b class=functitle>/rd</b><br>
  <em>Mode: Chat mode</em><br>
Send the content of the current deck to the meta server for registration. The meta server stores a copy of the deck. After you have registered your deck, game servers check your game decks against the registered deck. Then reports are generated wether the game deck is identical to the registered deck and/or wether the combined parts of the game deck contains the same cards as the registered one. NOTE: The game servers do not report anything if the deck is not registered. So, it is up to the player to observe that an opponent haven't change his deck during tournament event. See also /help ro.
</p>

<p class=func>
  <b class=functitle>/reboot</b><br>
  <em>Mode: Chat mode</em><br>
  <em>Restrictions: God only</em><br>
Send Quit-message to all players and game servers. After that, reboot the meta server.
</p>

<p class=func>
  <b class=functitle>/refresh</b><br>
  <em>Mode: Any mode</em><br>
Ask full refresh of the collection status from server. Normally the collection state is stored on disk cache and may be not accurate if you have been offline.
</p>

<p class=func>
  <b class=functitle>/register <em>set</em></b><br>
  <em>Mode: Chat mode</em><br>
If the player has collected all cards of the <em>set</em>, he or she is awarded by a bonus. The bonus is $0.1 per individual card in the set. If the player has not yet collected all cards, the number of missing cards is announced. The <em>set</em> must be given as an abbreviation of the card set (case insensitive). If the abbreviation is not valid, the list of valid abbreviations are shown.
</p>

<p class=func>
  <b class=functitle>/removeuser <em>player</em></b><br>
  <em>Mode: Chat mode</em><br>
  <em>Restrictions: God only</em><br>
This command deletes all data of <em>player</em>.
</p>

<p class=func>
  <b class=functitle>/renamedeck <em>name</em></b><br>
  <em>Mode: Chat mode</em><br>
Give new <em>name</em> to the current deck if selected. If there are no deck selected, this command does nothing.
</p>

<p class=func>
  <b class=functitle>/reproduce</b><br>
  <em>Mode: Chat mode</em><br>
  <em>Restrictions: God and Salesman only</em><br>
Check all products. If there is a sold out product, then add a shipment of product with halved availability (compared to the previous shipment) and price increased by 10%.
</p>

<p class=func>
  <b class=functitle>/restrict <em>domain</em></b><br>
  <em>Mode: Chat mode</em><br>
  <em>Restrictions: God and Guard only</em><br>
Without any arguments, this command lists all restrictions currently in effect. Domain name can be exact or it can contain * as a joker character, for example *.cheaters.com. When the restriction is added to the domain, all existing players can connect but new players are not accepted any more. They get a message explaining the situation and how to get an account by email from the server administrator. See also /help ban and /help unrestrict.
</p>

<p class=func>
  <b class=functitle>/ro</b><br>
  <em>Mode: Chat mode</em><br>
You can retrieve the original composiotion of the registered deck with this command. Be careful when using this command, since it overwrites your current deck with the content of the registered deck. See also /help rd.
</p>

<p class=func>
  <b class=functitle>/rtfm</b><br>
  <em>Mode: Any mode</em><br>
Show a link http://gccg.sf.net/faq.php for newbies. Optional arguments are added after the link in parenthesis, e.g. section number to check out.
</p>

<p class=func>
  <b class=functitle>/save</b><br>
  <em>Mode: Chat mode</em><br>
This command saves all client-side data to the directory ~/.gccg/Game/. It also sends an advise to the server to save all important data.
</p>

<p class=func>
  <b class=functitle>/savegame</b><br>
  <em>Mode: Play mode</em><br>
Saves your current game status to the disk in the game server. Each player, player pair, player triple, etc. have one personal save file, which is overwritten each time using this command. Saving the game does not end it, but you can declare undecided result and continue later using <em>/loadgame</em>. This command is automatically applied when one of the players' network connection dies. See also /help delgame.
</p>

<p class=func>
  <b class=functitle>/sealed <em>args</em></b><br>
  <em>Mode: Chat mode</em><br>
The sealed deck game is based on alter egos of players. To initiate an sealed deck event, you must first transfer an amount of money to the sealed deck alter ego of your player character. This is accomplished by the command <em>/sealed &lt;n&gt;</em>, where <em>&lt;n&gt;</em> is the amount of money to start with. Tha cards and money already owned by the sealed deck alter ego, is not lost. The money is added to instead. The command also switches to the sealed deck character immediately. If you want to switch between your normal character and the sealed deck character, you can say <em>/sealed</em> without any arguments. To transfer all cards and money back to your main character, say <em>/sealed end</em>.
</p>

<p class=func>
  <b class=functitle>/select <em>exp</em></b><br>
  <em>Mode: Any mode</em><br>
You can refine your collection view by applying subsequent selects. Each select expression checks every card from the current display and drops those cards not matching the filter expression <em>exp</em>. The filter expression is one of the following:<br>&nbsp;&nbsp;  <em>&lt;e1&gt; rel &lt;e2&gt;</em> - comparison where rel is <em>=</em>, <em>&gt;</em>, <em>&lt;</em>, <em>!=</em>, <em>&lt;=</em> or <em>&gt;=</em><br>&nbsp;&nbsp;  <em>&lt;e1&gt; op &lt;e2&gt;</em> - mathematical expression where op is <em>+</em>, <em>-</em>, <em>*</em>, or <em>/</em><br>&nbsp;&nbsp;  (<em>e)</em> - parenthesis alters precedence<br>&nbsp;&nbsp;  <em>&lt;e1&gt; has &lt;e2&gt;</em> - true if <em>e2</em> is a substring of <em>e1</em> (comparison case independent)<br>&nbsp;&nbsp;  not <em>&lt;e&gt;</em> - negate expression <em>e</em><br>&nbsp;&nbsp;  <em>&lt;e1&gt; and &lt;e2&gt;</em> - true if both expressions are true<br>&nbsp;&nbsp;  <em>&lt;e1&gt; or &lt;e2&gt;</em> - true if either expressions is true<br>&nbsp;&nbsp;  <em>&lt;attr&gt;</em> - "
</p>

<p class=func>
  <b class=functitle>/set <em>var</em> <em>value</em></b><br>
  <em>Mode: Chat mode</em><br>
Without arguments, this command lists all options currenlty set. Otherwise it can be used to fine tune operating parameters of the client or the server. All settings are offered to the server. If the server accepts the setting, i.e. the given variable <em>var</em> is meaningful to the server, then the server side option is set to <em>value</em>. In any case, client-side option is set to the <em>value</em>. The list of client-side options follows:<br>&nbsp;&nbsp;  nosound <em>&lt;s&gt;</em> - if set to 'yes', play no sound when game begins<br>&nbsp;&nbsp;  log <em>&lt;s&gt;</em> - if set to 'yes', print messages to stdout.<br>&nbsp;&nbsp;  trade_limit <em>&lt;n&gt;</em> - if you own more than <em>n</em> copies of the given card, consider these extra cards as tradeable (default 4)<br>&nbsp;&nbsp;  price <em>'higher'/'lower'/'same'/'default'</em> - when selling first card or pressing enter, choose price according to this setting (default 'higher')<br>&nbsp;&nbsp;The list of server-side options:<br>&nbsp;&nbsp;  avatar <em>&lt;image&gt;</em> - choose an image presenting you (see graphics/avatar)<br>&nbsp;&nbsp;  email <em>&lt;s&gt;</em> - set your email address shown by /whois command to <em>s</em><br>&nbsp;&nbsp;  plan <em>&lt;s&gt;</em> - set additional information shown by /whois command to <em>s</em><br>&nbsp;&nbsp;  realname <em>&lt;s&gt;</em> - set your real name shown by /whois command to <em>s</em><br>&nbsp;&nbsp;
</p>

<p class=func>
  <b class=functitle>/sort <em>[n]</em> <em>k1</em> <em>k2</em> <em>...</em></b><br>
  <em>Mode: Any mode</em><br>
Sort the current collection view according to one or more sort keys <em>k1</em>, <em>k2</em>, etc. Each key is one of the following: name of the card attribute, age as age of the set, name as name of the card, or set as name of the set card belongs. The valid card attributes are "+
</p>

<p class=func>
  <b class=functitle>/su <em>user</em></b><br>
  <em>Mode: Chat mode</em><br>
This command closes current session and begins new one with a player account <em>user</em>. You must have already registered the account.
</p>

<p class=func>
  <b class=functitle>/tables</b><br>
  <em>Mode: Chat mode</em><br>
Show a list of game servers available. The list contains IP-addresses, ports and game parameters (number of players, bet) of each game server.
</p>

<p class=func>
  <b class=functitle>/time <em>time</em> <em>message</em></b><br>
  <em>Mode: Chat mode</em><br>
  <em>Restrictions: Judge only</em><br>
Adds a timer for calling time limits in a tournament. When this command is issued, the Judge yells '<em>time</em> minutes until <em>message</em>'. Then it announces half time (if the limit is more than 19 minutes) and 5 minutes before the limit (if the limit is more than 5 minutes). Finally the end of the time limit is called.
</p>

<p class=func>
  <b class=functitle>/unban <em>player</em></b><br>
  <em>Mode: Chat mode</em><br>
  <em>Restrictions: God and Guard only</em><br>
Remove a player from the ban list. See also /help ban.
</p>

<p class=func>
  <b class=functitle>/unbind</b><br>
  <em>Mode: Any mode</em><br>
Waits for a key press. If the key pressed has a binding (see. /bind), remove the binding.
</p>

<p class=func>
  <b class=functitle>/undecided</b><br>
  <em>Mode: Play mode</em><br>
Declare that the game is not played to the final result. If someone has already declared the result, new declaration overrides it.
</p>

<p class=func>
  <b class=functitle>/unrestrict <em>domain</em></b><br>
  <em>Mode: Chat mode</em><br>
  <em>Restrictions: God and Guard only</em><br>
Remove a domain from the restriction list. See also /help restrict.
</p>

<p class=func>
  <b class=functitle>/unset <em>var</em></b><br>
  <em>Mode: Chat mode</em><br>
This command removes the current setting of <em>var</em>.
</p>

<p class=func>
  <b class=functitle>/users <em>pattern</em></b><br>
  <em>Mode: Chat mode</em><br>
Show list of all users matching wildcard <em>pattern</em> or all users if not given. The total number of users matching is shown instead if the list is too long.
</p>

<p class=func>
  <b class=functitle>/want <em>player</em></b><br>
  <em>Mode: Chat mode</em><br>
Asks the meta server for the want list of the given <em>player</em>. The have list contains all cards which he or she have marked as wanted. The cards you have for sale or you have more than <em>trade_limit</em>, are shown in green.
</p>

<p class=func>
  <b class=functitle>/who</b><br>
  <em>Mode: Chat mode</em><br>
Show a list of all players and their ip-addresses, who are currently connected to the meta server.
</p>

<p class=func>
  <b class=functitle>/whois <em>player</em></b><br>
  <em>Mode: Chat mode</em><br>
Ask the meta server to describe a <em>player</em>. The personal data (realname, email, plan) set by the player is shown as well as his/her wealth and game play history.
</p>

<p class=func>
  <b class=functitle>/win <em>options</em></b><br>
  <em>Mode: Play mode</em><br>
Declare yourself as a winner of the game. If someone has already declared the result, new declaration overrides it. Optional arguments <em>options</em> are game specific.
</p>

<p class=func>
  <b class=functitle>/yell <em>message</em></b><br>
  <em>Mode: Chat mode</em><br>
This command echoes a <em>message</em> to all players, even those who are currently playing.
</p>

