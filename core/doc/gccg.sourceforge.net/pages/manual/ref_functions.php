<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
  <head>
    <title>Gccg-script Function Reference</title>
    <link href="../default.css" rel="stylesheet" type="text/css">
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  </head>
  <body>

  <h1>Gccg-script Function Reference</h1>

<h2>List of All Functions</h2>

<table class=toc width="95%">
 <tr class=toc>
  <td class=toc width="33%"><b>- A -</b></td>
  <td class=toc width="33%"><a href="#InitializeInputSystem:client.functions"><b>InitializeInputSystem</b></a><br>
</td>
  <td class=toc width="33%"><a href="#ProductLookup:client.functions"><b>ProductLookup</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#abs:common.include"><b>abs</b></a><br>
</td>
  <td class=toc width="33%"><a href="#InitializeLocationTables:Lotr.include"><b>InitializeLocationTables</b></a><br>
</td>
  <td class=toc width="33%"><a href="#push:parser.h"><b>push</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#AcceptableResult:server.functions"><b>AcceptableResult</b></a><br>
</td>
  <td class=toc width="33%"><a href="#InitializeLocationTables:Metw.include"><b>InitializeLocationTables</b></a><br>
</td>
  <td class=toc width="33%"><a href="#Put.Active:server.functions"><b>Put.Active</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#AcceptResult:server.functions"><b>AcceptResult</b></a><br>
</td>
  <td class=toc width="33%"><a href="#InitializeLocationTables:Mtg.include"><b>InitializeLocationTables</b></a><br>
</td>
  <td class=toc width="33%"><a href="#Put.DeckBottom:server.functions"><b>Put.DeckBottom</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#Action:meta-server.functions"><b>Action</b></a><br>
</td>
  <td class=toc width="33%"><a href="#InitializeLocationTables:Pokemon.include"><b>InitializeLocationTables</b></a><br>
</td>
  <td class=toc width="33%"><a href="#Put.DeckTop:server.functions"><b>Put.DeckTop</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#Action:server.functions"><b>Action</b></a><br>
</td>
  <td class=toc width="33%"><a href="#InitializePanelSystem:client.functions"><b>InitializePanelSystem</b></a><br>
</td>
  <td class=toc width="33%"><a href="#Put.Hand:server.functions"><b>Put.Hand</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#ActiveSetMenu:client.functions"><b>ActiveSetMenu</b></a><br>
</td>
  <td class=toc width="33%"><a href="#InitializeScoreSystem:client.functions"><b>InitializeScoreSystem</b></a><br>
</td>
  <td class=toc width="33%"><a href="#Put.OutOfPlay:server.functions"><b>Put.OutOfPlay</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#AddCard:client.functions"><b>AddCard</b></a><br>
</td>
  <td class=toc width="33%"><a href="#InitializeWatcher:server.functions"><b>InitializeWatcher</b></a><br>
</td>
  <td class=toc width="33%"><a href="#Put.Table:server.functions"><b>Put.Table</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#AddCard:meta-server.functions"><b>AddCard</b></a><br>
</td>
  <td class=toc width="33%"><a href="#InitialScore:Lotr-server.include"><b>InitialScore</b></a><br>
</td>
  <td class=toc width="33%"><a href="#PutActive:client.functions"><b>PutActive</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#AddCards:client.functions"><b>AddCards</b></a><br>
</td>
  <td class=toc width="33%"><a href="#InitialScore:Metw-server.include"><b>InitialScore</b></a><br>
</td>
  <td class=toc width="33%"><a href="#PutCardInGroup:client.functions"><b>PutCardInGroup</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#AddCards:meta-server.functions"><b>AddCards</b></a><br>
</td>
  <td class=toc width="33%"><a href="#InitialScore:Mtg-server.include"><b>InitialScore</b></a><br>
</td>
  <td class=toc width="33%"><a href="#PutDeck:client.functions"><b>PutDeck</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#AddGameResult:meta-server.functions"><b>AddGameResult</b></a><br>
</td>
  <td class=toc width="33%"><a href="#InitialScore:Pokemon-server.include"><b>InitialScore</b></a><br>
</td>
  <td class=toc width="33%"><a href="#PutDeckBottom:client.functions"><b>PutDeckBottom</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#AddHistory:client.functions"><b>AddHistory</b></a><br>
</td>
  <td class=toc width="33%"><a href="#InitServer:server.functions"><b>InitServer</b></a><br>
</td>
  <td class=toc width="33%"><a href="#PutDeckHook:Metw.include"><b>PutDeckHook</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#AddInputHook:Mtg.include"><b>AddInputHook</b></a><br>
</td>
  <td class=toc width="33%"><a href="#InitServerHook:Lotr-server.include"><b>InitServerHook</b></a><br>
</td>
  <td class=toc width="33%"><a href="#PutHand:client.functions"><b>PutHand</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#AddMarker:client.functions"><b>AddMarker</b></a><br>
</td>
  <td class=toc width="33%"><a href="#InitServerHook:Metw-server.include"><b>InitServerHook</b></a><br>
</td>
  <td class=toc width="33%"><a href="#PutTable:client.functions"><b>PutTable</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#AddMarker:server.functions"><b>AddMarker</b></a><br>
</td>
  <td class=toc width="33%"><a href="#InitServerHook:Pokemon-server.include"><b>InitServerHook</b></a><br>
</td>
  <td class=toc width="33%"><a href="#PutTableHook:Lotr.include"><b>PutTableHook</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#AddMinuteTimer:client.functions"><b>AddMinuteTimer</b></a><br>
</td>
  <td class=toc width="33%"><a href="#InitTables:factory-server.functions"><b>InitTables</b></a><br>
</td>
  <td class=toc width="33%"><a href="#PutTableHook:Metw.include"><b>PutTableHook</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#AddRoomPlayer:client.functions"><b>AddRoomPlayer</b></a><br>
</td>
  <td class=toc width="33%"><a href="#inline_images:parser_libcards.cpp"><b>inline_images</b></a><br>
</td>
  <td class=toc width="33%"><a href="#PutTableHook:Mtg.include"><b>PutTableHook</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#AddRoomTable:client.functions"><b>AddRoomTable</b></a><br>
</td>
  <td class=toc width="33%"><a href="#inplay:interpreter.cpp"><b>inplay</b></a><br>
</td>
  <td class=toc width="33%"><a href="#put_cardbox:interpreter.cpp"><b>put_cardbox</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#AddSideboardFwCards:Metw.include"><b>AddSideboardFwCards</b></a><br>
</td>
  <td class=toc width="33%"><a href="#Input:client.functions"><b>Input</b></a><br>
</td>
  <td class=toc width="33%"><a href="#put_cardbox_recenter:interpreter.cpp"><b>put_cardbox_recenter</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#AddTickets:meta-server.functions"><b>AddTickets</b></a><br>
</td>
  <td class=toc width="33%"><a href="#InputHook:Lotr.include"><b>InputHook</b></a><br>
</td>
  <td class=toc width="33%"><a href="#put_deck_bottom:interpreter.cpp"><b>put_deck_bottom</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#AddTimer:client.functions"><b>AddTimer</b></a><br>
</td>
  <td class=toc width="33%"><a href="#InputHook:Mtg.include"><b>InputHook</b></a><br>
</td>
  <td class=toc width="33%"><a href="#put_deck_top:interpreter.cpp"><b>put_deck_top</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#AddToDeck:client.functions"><b>AddToDeck</b></a><br>
</td>
  <td class=toc width="33%"><a href="#InputKeyBackspace:client.functions"><b>InputKeyBackspace</b></a><br>
</td>
  <td class=toc width="33%"><a href="#put_hand:interpreter.cpp"><b>put_hand</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#add_marker:interpreter.cpp"><b>add_marker</b></a><br>
</td>
  <td class=toc width="33%"><a href="#InputKeyDelete:client.functions"><b>InputKeyDelete</b></a><br>
</td>
  <td class=toc width="33%"><a href="#put_inplay:interpreter.cpp"><b>put_inplay</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#add_text:interpreter.cpp"><b>add_text</b></a><br>
</td>
  <td class=toc width="33%"><a href="#InputKeyEnd:client.functions"><b>InputKeyEnd</b></a><br>
</td>
  <td class=toc width="33%"><b>- Q -</b></td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#add_to_collection:server.cpp"><b>add_to_collection</b></a><br>
</td>
  <td class=toc width="33%"><a href="#InputKeyHome:client.functions"><b>InputKeyHome</b></a><br>
</td>
  <td class=toc width="33%"><a href="#Quit:client.functions"><b>Quit</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#AdjustScore:Metw.include"><b>AdjustScore</b></a><br>
</td>
  <td class=toc width="33%"><a href="#InputKeyLeft:client.functions"><b>InputKeyLeft</b></a><br>
</td>
  <td class=toc width="33%"><a href="#quit:parser_lib.cpp"><b>quit</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#age:common.include"><b>age</b></a><br>
</td>
  <td class=toc width="33%"><a href="#InputKeyRight:client.functions"><b>InputKeyRight</b></a><br>
</td>
  <td class=toc width="33%"><b>- R -</b></td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#age:parser_libcards.cpp"><b>age</b></a><br>
</td>
  <td class=toc width="33%"><a href="#InputNewline:client.functions"><b>InputNewline</b></a><br>
</td>
  <td class=toc width="33%"><a href="#Raise:client.functions"><b>Raise</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#Alert:client.functions"><b>Alert</b></a><br>
</td>
  <td class=toc width="33%"><a href="#InputSplit:client.functions"><b>InputSplit</b></a><br>
</td>
  <td class=toc width="33%"><a href="#raise:interpreter.cpp"><b>raise</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#AlertOff:client.functions"><b>AlertOff</b></a><br>
</td>
  <td class=toc width="33%"><a href="#InputSplit:interpreter.cpp"><b>InputSplit</b></a><br>
</td>
  <td class=toc width="33%"><a href="#Raise:server.functions"><b>Raise</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#AllDecksLoaded:server.functions"><b>AllDecksLoaded</b></a><br>
</td>
  <td class=toc width="33%"><a href="#intersect:interpreter.cpp"><b>intersect</b></a><br>
</td>
  <td class=toc width="33%"><a href="#random:parser_lib.cpp"><b>random</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#apply:parser.h"><b>apply</b></a><br>
</td>
  <td class=toc width="33%"><a href="#InverseSelectByAttr:client.functions"><b>InverseSelectByAttr</b></a><br>
</td>
  <td class=toc width="33%"><a href="#RandomCardSet:factory-server.functions"><b>RandomCardSet</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#ApplyImportDeck:client.functions"><b>ApplyImportDeck</b></a><br>
</td>
  <td class=toc width="33%"><a href="#invert:interpreter.cpp"><b>invert</b></a><br>
</td>
  <td class=toc width="33%"><a href="#randomize:parser_lib.cpp"><b>randomize</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#ApplyImportDeckBack:client.functions"><b>ApplyImportDeckBack</b></a><br>
</td>
  <td class=toc width="33%"><a href="#IsAway:client.functions"><b>IsAway</b></a><br>
</td>
  <td class=toc width="33%"><a href="#RandomNearPoint:client.functions"><b>RandomNearPoint</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#array:parser_lib.cpp"><b>array</b></a><br>
</td>
  <td class=toc width="33%"><a href="#isdict:parser_lib.cpp"><b>isdict</b></a><br>
</td>
  <td class=toc width="33%"><a href="#rarities:parser_libcards.cpp"><b>rarities</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#ASCIIFormatParser:client.functions"><b>ASCIIFormatParser</b></a><br>
</td>
  <td class=toc width="33%"><a href="#isfunction:parser.h"><b>isfunction</b></a><br>
</td>
  <td class=toc width="33%"><a href="#read_file:parser_lib.cpp"><b>read_file</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#ASCIIFormatSuffix:client.functions"><b>ASCIIFormatSuffix</b></a><br>
</td>
  <td class=toc width="33%"><a href="#IsLoop:server.functions"><b>IsLoop</b></a><br>
</td>
  <td class=toc width="33%"><a href="#RecalculateScores:Metw.include"><b>RecalculateScores</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#AssignPlayer:server.functions"><b>AssignPlayer</b></a><br>
</td>
  <td class=toc width="33%"><a href="#IsObject:server.functions"><b>IsObject</b></a><br>
</td>
  <td class=toc width="33%"><a href="#Receive:client.functions"><b>Receive</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#Attach:client.functions"><b>Attach</b></a><br>
</td>
  <td class=toc width="33%"><a href="#isreal:common.include"><b>isreal</b></a><br>
</td>
  <td class=toc width="33%"><a href="#ReceiveClose:server.functions"><b>ReceiveClose</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#attach:interpreter.cpp"><b>attach</b></a><br>
</td>
  <td class=toc width="33%"><a href="#IsRestricted:meta-server.functions"><b>IsRestricted</b></a><br>
</td>
  <td class=toc width="33%"><a href="#ReceiveData:meta-server.functions"><b>ReceiveData</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#attach:parser.h"><b>attach</b></a><br>
</td>
  <td class=toc width="33%"><a href="#IsServer:meta-server.functions"><b>IsServer</b></a><br>
</td>
  <td class=toc width="33%"><a href="#ReceiveData:server.functions"><b>ReceiveData</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#Attach:server.functions"><b>Attach</b></a><br>
</td>
  <td class=toc width="33%"><a href="#IsStayTapped:client.functions"><b>IsStayTapped</b></a><br>
</td>
  <td class=toc width="33%"><a href="#ReceiveOpen:server.functions"><b>ReceiveOpen</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#Attachments:client.functions"><b>Attachments</b></a><br>
</td>
  <td class=toc width="33%"><a href="#IsTableBanned:meta-server.functions"><b>IsTableBanned</b></a><br>
</td>
  <td class=toc width="33%"><a href="#RecognizeCard:client.functions"><b>RecognizeCard</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#Attr:parser_libcards.cpp"><b>Attr</b></a><br>
</td>
  <td class=toc width="33%"><a href="#IsUserDisplay:client.functions"><b>IsUserDisplay</b></a><br>
</td>
  <td class=toc width="33%"><a href="#RecognizeDeckFormat:client.functions"><b>RecognizeDeckFormat</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#attributes:parser_libcards.cpp"><b>attributes</b></a><br>
</td>
  <td class=toc width="33%"><a href="#isvar:parser.h"><b>isvar</b></a><br>
</td>
  <td class=toc width="33%"><a href="#redraw:interpreter.cpp"><b>redraw</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#attrs:parser_libcards.cpp"><b>attrs</b></a><br>
</td>
  <td class=toc width="33%"><a href="#IsVeryNear:client.functions"><b>IsVeryNear</b></a><br>
</td>
  <td class=toc width="33%"><a href="#RefineFilter:client.functions"><b>RefineFilter</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#AvailableForSale:meta-server.functions"><b>AvailableForSale</b></a><br>
</td>
  <td class=toc width="33%"><a href="#IsVolatile:client.functions"><b>IsVolatile</b></a><br>
</td>
  <td class=toc width="33%"><a href="#refresh:interpreter.cpp"><b>refresh</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#AvailableForTrade:meta-server.functions"><b>AvailableForTrade</b></a><br>
</td>
  <td class=toc width="33%"><a href="#is_object:client.functions"><b>is_object</b></a><br>
</td>
  <td class=toc width="33%"><a href="#Refresh:meta-server.functions"><b>Refresh</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#AvatarFloorPos:client.functions"><b>AvatarFloorPos</b></a><br>
</td>
  <td class=toc width="33%"><a href="#is_user:server.cpp"><b>is_user</b></a><br>
</td>
  <td class=toc width="33%"><a href="#RefreshBook:client.functions"><b>RefreshBook</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#AvatarPos:server.functions"><b>AvatarPos</b></a><br>
</td>
  <td class=toc width="33%"><b>- J -</b></td>
  <td class=toc width="33%"><a href="#RefreshBookForDeck:client.functions"><b>RefreshBookForDeck</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#AvatarRecalcTable:client.functions"><b>AvatarRecalcTable</b></a><br>
</td>
  <td class=toc width="33%"><a href="#join:parser_lib.cpp"><b>join</b></a><br>
</td>
  <td class=toc width="33%"><a href="#RefreshChatRoom:meta-server.functions"><b>RefreshChatRoom</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><b>- B -</b></td>
  <td class=toc width="33%"><a href="#JoinTable:client.functions"><b>JoinTable</b></a><br>
</td>
  <td class=toc width="33%"><a href="#RefreshCurrentDeck:client.functions"><b>RefreshCurrentDeck</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#beep:interpreter.cpp"><b>beep</b></a><br>
</td>
  <td class=toc width="33%"><a href="#JoinTable:meta-server.functions"><b>JoinTable</b></a><br>
</td>
  <td class=toc width="33%"><a href="#RegisterDeck:meta-server.functions"><b>RegisterDeck</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#Bid:client.functions"><b>Bid</b></a><br>
</td>
  <td class=toc width="33%"><a href="#joker_match:parser_lib.cpp"><b>joker_match</b></a><br>
</td>
  <td class=toc width="33%"><a href="#RegisterGameResult:meta-server.functions"><b>RegisterGameResult</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#BidHook:Lotr.include"><b>BidHook</b></a><br>
</td>
  <td class=toc width="33%"><a href="#JudgeChatCommandTime:client.functions"><b>JudgeChatCommandTime</b></a><br>
</td>
  <td class=toc width="33%"><a href="#RegisterPlayer:meta-server.functions"><b>RegisterPlayer</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#BookChangeForsale:client.functions"><b>BookChangeForsale</b></a><br>
</td>
  <td class=toc width="33%"><b>- K -</b></td>
  <td class=toc width="33%"><a href="#RegisterPlayer:server.functions"><b>RegisterPlayer</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#BookFullRefresh:client.functions"><b>BookFullRefresh</b></a><br>
</td>
  <td class=toc width="33%"><a href="#KeyAltKey1:client.functions"><b>KeyAltKey1</b></a><br>
</td>
  <td class=toc width="33%"><a href="#RegisterServer:meta-server.functions"><b>RegisterServer</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#BookGoBack:client.functions"><b>BookGoBack</b></a><br>
</td>
  <td class=toc width="33%"><a href="#KeyAltKey2:client.functions"><b>KeyAltKey2</b></a><br>
</td>
  <td class=toc width="33%"><a href="#RegisterSubmenu:client.functions"><b>RegisterSubmenu</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#BookSetPrice:client.functions"><b>BookSetPrice</b></a><br>
</td>
  <td class=toc width="33%"><a href="#KeyAltKey3:client.functions"><b>KeyAltKey3</b></a><br>
</td>
  <td class=toc width="33%"><a href="#RemoveAvatar:client.functions"><b>RemoveAvatar</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#book_cards:interpreter.cpp"><b>book_cards</b></a><br>
</td>
  <td class=toc width="33%"><a href="#KeyAltKey4:client.functions"><b>KeyAltKey4</b></a><br>
</td>
  <td class=toc width="33%"><a href="#RemoveObsoletePrices:meta-server.functions"><b>RemoveObsoletePrices</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#book_entry:interpreter.cpp"><b>book_entry</b></a><br>
</td>
  <td class=toc width="33%"><a href="#KeyAltKey5:client.functions"><b>KeyAltKey5</b></a><br>
</td>
  <td class=toc width="33%"><a href="#remove_obsolete_prices:server.cpp"><b>remove_obsolete_prices</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#book_last_page:interpreter.cpp"><b>book_last_page</b></a><br>
</td>
  <td class=toc width="33%"><a href="#KeyAltKey6:client.functions"><b>KeyAltKey6</b></a><br>
</td>
  <td class=toc width="33%"><a href="#repeat:parser.h"><b>repeat</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#book_page:interpreter.cpp"><b>book_page</b></a><br>
</td>
  <td class=toc width="33%"><a href="#KeyBackspace:client.functions"><b>KeyBackspace</b></a><br>
</td>
  <td class=toc width="33%"><a href="#replace:parser_lib.cpp"><b>replace</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#book_pageof:interpreter.cpp"><b>book_pageof</b></a><br>
</td>
  <td class=toc width="33%"><a href="#KeyControlKey0:Pokemon.include"><b>KeyControlKey0</b></a><br>
</td>
  <td class=toc width="33%"><a href="#ReplaceTable:client.functions"><b>ReplaceTable</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#book_set_deck:interpreter.cpp"><b>book_set_deck</b></a><br>
</td>
  <td class=toc width="33%"><a href="#KeyControlKey1:Pokemon.include"><b>KeyControlKey1</b></a><br>
</td>
  <td class=toc width="33%"><a href="#ReplaceTableHook:Metw.include"><b>ReplaceTableHook</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#book_set_entry:interpreter.cpp"><b>book_set_entry</b></a><br>
</td>
  <td class=toc width="33%"><a href="#KeyControlKey2:Pokemon.include"><b>KeyControlKey2</b></a><br>
</td>
  <td class=toc width="33%"><a href="#replace_cardbox_recenter:interpreter.cpp"><b>replace_cardbox_recenter</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#book_set_index:interpreter.cpp"><b>book_set_index</b></a><br>
</td>
  <td class=toc width="33%"><a href="#KeyControlKey3:Pokemon.include"><b>KeyControlKey3</b></a><br>
</td>
  <td class=toc width="33%"><a href="#Reply:meta-server.functions"><b>Reply</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#book_set_page:interpreter.cpp"><b>book_set_page</b></a><br>
</td>
  <td class=toc width="33%"><a href="#KeyControlKey4:Pokemon.include"><b>KeyControlKey4</b></a><br>
</td>
  <td class=toc width="33%"><a href="#Reply:server.functions"><b>Reply</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#book_set_slot:common.include"><b>book_set_slot</b></a><br>
</td>
  <td class=toc width="33%"><a href="#KeyControlKey5:Pokemon.include"><b>KeyControlKey5</b></a><br>
</td>
  <td class=toc width="33%"><a href="#ReRegisterPlayer:meta-server.functions"><b>ReRegisterPlayer</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#book_set_slot:interpreter.cpp"><b>book_set_slot</b></a><br>
</td>
  <td class=toc width="33%"><a href="#KeyControlKeyB:client.functions"><b>KeyControlKeyB</b></a><br>
</td>
  <td class=toc width="33%"><a href="#RestoreDeck:client.functions"><b>RestoreDeck</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#book_titles:interpreter.cpp"><b>book_titles</b></a><br>
</td>
  <td class=toc width="33%"><a href="#KeyControlKeyC:client.functions"><b>KeyControlKeyC</b></a><br>
</td>
  <td class=toc width="33%"><a href="#RestoreMenuContext:client.functions"><b>RestoreMenuContext</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#Buy:client.functions"><b>Buy</b></a><br>
</td>
  <td class=toc width="33%"><a href="#KeyControlKeyH:client.functions"><b>KeyControlKeyH</b></a><br>
</td>
  <td class=toc width="33%"><a href="#ResultAccepted:server.functions"><b>ResultAccepted</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#Buy:meta-server.functions"><b>Buy</b></a><br>
</td>
  <td class=toc width="33%"><a href="#KeyControlKeyM:Metw.include"><b>KeyControlKeyM</b></a><br>
</td>
  <td class=toc width="33%"><a href="#return:parser.h"><b>return</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#BuyCard:meta-server.functions"><b>BuyCard</b></a><br>
</td>
  <td class=toc width="33%"><a href="#KeyControlKeyP:client.functions"><b>KeyControlKeyP</b></a><br>
</td>
  <td class=toc width="33%"><a href="#Reveal:server.functions"><b>Reveal</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><b>- C -</b></td>
  <td class=toc width="33%"><a href="#KeyControlKeyPageDown:client.functions"><b>KeyControlKeyPageDown</b></a><br>
</td>
  <td class=toc width="33%"><a href="#reverse:parser_lib.cpp"><b>reverse</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#cache_parameters:parser.h"><b>cache_parameters</b></a><br>
</td>
  <td class=toc width="33%"><a href="#KeyControlKeyPageUp:client.functions"><b>KeyControlKeyPageUp</b></a><br>
</td>
  <td class=toc width="33%"><a href="#right:parser_lib.cpp"><b>right</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#call:parser.h"><b>call</b></a><br>
</td>
  <td class=toc width="33%"><a href="#KeyControlKeyR:client.functions"><b>KeyControlKeyR</b></a><br>
</td>
  <td class=toc width="33%"><a href="#Roll:meta-server.functions"><b>Roll</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#canonical_name:parser_libcards.cpp"><b>canonical_name</b></a><br>
</td>
  <td class=toc width="33%"><a href="#KeyControlKeyReturn:client.functions"><b>KeyControlKeyReturn</b></a><br>
</td>
  <td class=toc width="33%"><a href="#Roll:server.functions"><b>Roll</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#card:interpreter.cpp"><b>card</b></a><br>
</td>
  <td class=toc width="33%"><a href="#KeyDelete:client.functions"><b>KeyDelete</b></a><br>
</td>
  <td class=toc width="33%"><a href="#RootObject:server.functions"><b>RootObject</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#cardbox:interpreter.cpp"><b>cardbox</b></a><br>
</td>
  <td class=toc width="33%"><a href="#KeyDown:client.functions"><b>KeyDown</b></a><br>
</td>
  <td class=toc width="33%"><a href="#root_object:client.functions"><b>root_object</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#CardMenu:client.functions"><b>CardMenu</b></a><br>
</td>
  <td class=toc width="33%"><a href="#KeyEnd:client.functions"><b>KeyEnd</b></a><br>
</td>
  <td class=toc width="33%"><a href="#rot:interpreter.cpp"><b>rot</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#cards:parser_libcards.cpp"><b>cards</b></a><br>
</td>
  <td class=toc width="33%"><a href="#KeyEnter:client.functions"><b>KeyEnter</b></a><br>
</td>
  <td class=toc width="33%"><a href="#Rotate:client.functions"><b>Rotate</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#CardSelectBoxMenu:client.functions"><b>CardSelectBoxMenu</b></a><br>
</td>
  <td class=toc width="33%"><a href="#KeyEscape:client.functions"><b>KeyEscape</b></a><br>
</td>
  <td class=toc width="33%"><a href="#Rotate:server.functions"><b>Rotate</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#CardsOfSetWithRarity:factory-server.functions"><b>CardsOfSetWithRarity</b></a><br>
</td>
  <td class=toc width="33%"><a href="#KeyEscapeHook:Metw.include"><b>KeyEscapeHook</b></a><br>
</td>
  <td class=toc width="33%"><a href="#round:common.include"><b>round</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#card_attr:parser_libcards.cpp"><b>card_attr</b></a><br>
</td>
  <td class=toc width="33%"><a href="#KeyF10:client.functions"><b>KeyF10</b></a><br>
</td>
  <td class=toc width="33%"><a href="#RuleAgentMindTotal:Metw-common.include"><b>RuleAgentMindTotal</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#card_back:parser_libcards.cpp"><b>card_back</b></a><br>
</td>
  <td class=toc width="33%"><a href="#KeyF11:client.functions"><b>KeyF11</b></a><br>
</td>
  <td class=toc width="33%"><a href="#RuleBothHeroAndMinionUnique:Metw-common.include"><b>RuleBothHeroAndMinionUnique</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#card_data:interpreter.cpp"><b>card_data</b></a><br>
</td>
  <td class=toc width="33%"><a href="#KeyF12:client.functions"><b>KeyF12</b></a><br>
</td>
  <td class=toc width="33%"><a href="#RuleCanonicalCardLimitSingle:common.include"><b>RuleCanonicalCardLimitSingle</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#Category:client.functions"><b>Category</b></a><br>
</td>
  <td class=toc width="33%"><a href="#KeyF1:client.functions"><b>KeyF1</b></a><br>
</td>
  <td class=toc width="33%"><a href="#RuleCardLimitAny:common.include"><b>RuleCardLimitAny</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#CategoryMatch:client.functions"><b>CategoryMatch</b></a><br>
</td>
  <td class=toc width="33%"><a href="#KeyHome:client.functions"><b>KeyHome</b></a><br>
</td>
  <td class=toc width="33%"><a href="#RuleCardLimitGeneral:common.include"><b>RuleCardLimitGeneral</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#center_of:interpreter.cpp"><b>center_of</b></a><br>
</td>
  <td class=toc width="33%"><a href="#KeyLeft:client.functions"><b>KeyLeft</b></a><br>
</td>
  <td class=toc width="33%"><a href="#RuleCardLimitSingle:common.include"><b>RuleCardLimitSingle</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#change_card:interpreter.cpp"><b>change_card</b></a><br>
</td>
  <td class=toc width="33%"><a href="#KeyModifierDown:client.functions"><b>KeyModifierDown</b></a><br>
</td>
  <td class=toc width="33%"><a href="#RuleCardSet:common.include"><b>RuleCardSet</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#ChatCommandAway:client.functions"><b>ChatCommandAway</b></a><br>
</td>
  <td class=toc width="33%"><a href="#KeyModifierUp:client.functions"><b>KeyModifierUp</b></a><br>
</td>
  <td class=toc width="33%"><a href="#RuleCardSetReprint:common.include"><b>RuleCardSetReprint</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#ChatCommandBuy:client.functions"><b>ChatCommandBuy</b></a><br>
</td>
  <td class=toc width="33%"><a href="#KeyPageDown:client.functions"><b>KeyPageDown</b></a><br>
</td>
  <td class=toc width="33%"><a href="#RuleCheckExpression:common.include"><b>RuleCheckExpression</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#ChatCommandCopydeck:client.functions"><b>ChatCommandCopydeck</b></a><br>
</td>
  <td class=toc width="33%"><a href="#KeyPageUp:client.functions"><b>KeyPageUp</b></a><br>
</td>
  <td class=toc width="33%"><a href="#RuleCheckWizards:Metw-common.include"><b>RuleCheckWizards</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#ChatCommandDefault:client.functions"><b>ChatCommandDefault</b></a><br>
</td>
  <td class=toc width="33%"><a href="#KeyReturn:client.functions"><b>KeyReturn</b></a><br>
</td>
  <td class=toc width="33%"><a href="#RuleCountBiggestPopulation:Mtg-common.include"><b>RuleCountBiggestPopulation</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#ChatCommandGive:client.functions"><b>ChatCommandGive</b></a><br>
</td>
  <td class=toc width="33%"><a href="#KeyRight:client.functions"><b>KeyRight</b></a><br>
</td>
  <td class=toc width="33%"><a href="#RuleCountColors:Mtg-common.include"><b>RuleCountColors</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#ChatCommandGo:client.functions"><b>ChatCommandGo</b></a><br>
</td>
  <td class=toc width="33%"><a href="#keys:parser.h"><b>keys</b></a><br>
</td>
  <td class=toc width="33%"><a href="#RuleCountCreatures:Metw-common.include"><b>RuleCountCreatures</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#ChatCommandJoin:client.functions"><b>ChatCommandJoin</b></a><br>
</td>
  <td class=toc width="33%"><a href="#KeyShiftAltKeyB:Metw.include"><b>KeyShiftAltKeyB</b></a><br>
</td>
  <td class=toc width="33%"><a href="#RuleDeckMaximum:common.include"><b>RuleDeckMaximum</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#ChatCommandNewdeck:client.functions"><b>ChatCommandNewdeck</b></a><br>
</td>
  <td class=toc width="33%"><a href="#KeyShiftAltKeyD:Metw.include"><b>KeyShiftAltKeyD</b></a><br>
</td>
  <td class=toc width="33%"><a href="#RuleDeckMinimum:common.include"><b>RuleDeckMinimum</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#ChatCommandRd:client.functions"><b>ChatCommandRd</b></a><br>
</td>
  <td class=toc width="33%"><a href="#KeyShiftAltKeyF:Metw.include"><b>KeyShiftAltKeyF</b></a><br>
</td>
  <td class=toc width="33%"><a href="#RuleDeckSizes:common.include"><b>RuleDeckSizes</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#ChatCommandRenamedeck:client.functions"><b>ChatCommandRenamedeck</b></a><br>
</td>
  <td class=toc width="33%"><a href="#KeyShiftAltKeyH:Metw.include"><b>KeyShiftAltKeyH</b></a><br>
</td>
  <td class=toc width="33%"><a href="#RuleHazardResourceBalance:Metw-common.include"><b>RuleHazardResourceBalance</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#ChatCommandSave:client.functions"><b>ChatCommandSave</b></a><br>
</td>
  <td class=toc width="33%"><a href="#KeyShiftAltKeyR:Metw.include"><b>KeyShiftAltKeyR</b></a><br>
</td>
  <td class=toc width="33%"><a href="#RuleLimitByExpression:common.include"><b>RuleLimitByExpression</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#ChatCommandSealed:client.functions"><b>ChatCommandSealed</b></a><br>
</td>
  <td class=toc width="33%"><a href="#KeyShiftAltKeyS:Metw.include"><b>KeyShiftAltKeyS</b></a><br>
</td>
  <td class=toc width="33%"><a href="#RuleLimitEachByExpression:common.include"><b>RuleLimitEachByExpression</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#ChatCommandSu:client.functions"><b>ChatCommandSu</b></a><br>
</td>
  <td class=toc width="33%"><a href="#KeyShiftControlKey0:Mtg.include"><b>KeyShiftControlKey0</b></a><br>
</td>
  <td class=toc width="33%"><a href="#RuleNonUniqueStageCards:Metw-common.include"><b>RuleNonUniqueStageCards</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#ChatKeyControlKeyD:client.functions"><b>ChatKeyControlKeyD</b></a><br>
</td>
  <td class=toc width="33%"><a href="#KeyShiftControlKeyB:Metw.include"><b>KeyShiftControlKeyB</b></a><br>
</td>
  <td class=toc width="33%"><a href="#RuleOptions:client.functions"><b>RuleOptions</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#ChatKeyControlKeyE:client.functions"><b>ChatKeyControlKeyE</b></a><br>
</td>
  <td class=toc width="33%"><a href="#KeyShiftControlKeyB:Mtg.include"><b>KeyShiftControlKeyB</b></a><br>
</td>
  <td class=toc width="33%"><a href="#RulePass:common.include"><b>RulePass</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#ChatKeyControlKeyI:client.functions"><b>ChatKeyControlKeyI</b></a><br>
</td>
  <td class=toc width="33%"><a href="#KeyShiftControlKeyC:Metw.include"><b>KeyShiftControlKeyC</b></a><br>
</td>
  <td class=toc width="33%"><a href="#rules:parser_libcards.cpp"><b>rules</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#ChatKeyControlKeyS:client.functions"><b>ChatKeyControlKeyS</b></a><br>
</td>
  <td class=toc width="33%"><a href="#KeyShiftControlKeyC:Mtg.include"><b>KeyShiftControlKeyC</b></a><br>
</td>
  <td class=toc width="33%"><a href="#RuleSpecific:Metw-common.include"><b>RuleSpecific</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#ChatKeyControlKeyW:client.functions"><b>ChatKeyControlKeyW</b></a><br>
</td>
  <td class=toc width="33%"><a href="#KeyShiftControlKeyC:Pokemon.include"><b>KeyShiftControlKeyC</b></a><br>
</td>
  <td class=toc width="33%"><a href="#RuleStagepoints:Metw-common.include"><b>RuleStagepoints</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#ChatKeyControlKeyX:client.functions"><b>ChatKeyControlKeyX</b></a><br>
</td>
  <td class=toc width="33%"><a href="#KeyShiftControlKeyD:Metw.include"><b>KeyShiftControlKeyD</b></a><br>
</td>
  <td class=toc width="33%"><a href="#RuleViolation:common.include"><b>RuleViolation</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#ChatMapMenu:Metw.include"><b>ChatMapMenu</b></a><br>
</td>
  <td class=toc width="33%"><a href="#KeyShiftControlKeyF:Metw.include"><b>KeyShiftControlKeyF</b></a><br>
</td>
  <td class=toc width="33%"><b>- S -</b></td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#CheckFilterVersion:client.functions"><b>CheckFilterVersion</b></a><br>
</td>
  <td class=toc width="33%"><a href="#KeyShiftControlKeyF:Pokemon.include"><b>KeyShiftControlKeyF</b></a><br>
</td>
  <td class=toc width="33%"><a href="#save:parser.h"><b>save</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#CheckForCard:client.functions"><b>CheckForCard</b></a><br>
</td>
  <td class=toc width="33%"><a href="#KeyShiftControlKeyG:Mtg.include"><b>KeyShiftControlKeyG</b></a><br>
</td>
  <td class=toc width="33%"><a href="#SaveAll:client.functions"><b>SaveAll</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#CheckFunctionsOrQuit:client.functions"><b>CheckFunctionsOrQuit</b></a><br>
</td>
  <td class=toc width="33%"><a href="#KeyShiftControlKeyG:Pokemon.include"><b>KeyShiftControlKeyG</b></a><br>
</td>
  <td class=toc width="33%"><a href="#SaveAll:meta-server.functions"><b>SaveAll</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#CheckInitialVariables:client.functions"><b>CheckInitialVariables</b></a><br>
</td>
  <td class=toc width="33%"><a href="#KeyShiftControlKeyL:Pokemon.include"><b>KeyShiftControlKeyL</b></a><br>
</td>
  <td class=toc width="33%"><a href="#SaveBookState:client.functions"><b>SaveBookState</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#CheckInitialVariablesOrQuit:client.functions"><b>CheckInitialVariablesOrQuit</b></a><br>
</td>
  <td class=toc width="33%"><a href="#KeyShiftControlKeyP:Pokemon.include"><b>KeyShiftControlKeyP</b></a><br>
</td>
  <td class=toc width="33%"><a href="#SaveFilename:server.functions"><b>SaveFilename</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#CheckLegalitySubmenu:client.functions"><b>CheckLegalitySubmenu</b></a><br>
</td>
  <td class=toc width="33%"><a href="#KeyShiftControlKeyR:Mtg.include"><b>KeyShiftControlKeyR</b></a><br>
</td>
  <td class=toc width="33%"><a href="#SavegameHook:Metw-server.include"><b>SavegameHook</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#CheckPrice:meta-server.functions"><b>CheckPrice</b></a><br>
</td>
  <td class=toc width="33%"><a href="#KeyShiftControlKeyR:Pokemon.include"><b>KeyShiftControlKeyR</b></a><br>
</td>
  <td class=toc width="33%"><a href="#SaveMenuContext:client.functions"><b>SaveMenuContext</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#CheckSealedCharacter:meta-server.functions"><b>CheckSealedCharacter</b></a><br>
</td>
  <td class=toc width="33%"><a href="#KeyShiftControlKeyS:Metw.include"><b>KeyShiftControlKeyS</b></a><br>
</td>
  <td class=toc width="33%"><a href="#SavePath:common.include"><b>SavePath</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#check_card:server.cpp"><b>check_card</b></a><br>
</td>
  <td class=toc width="33%"><a href="#KeyShiftControlKeyT:Mtg.include"><b>KeyShiftControlKeyT</b></a><br>
</td>
  <td class=toc width="33%"><a href="#Say:client.functions"><b>Say</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#ChooseDeckMenu:client.functions"><b>ChooseDeckMenu</b></a><br>
</td>
  <td class=toc width="33%"><a href="#KeyShiftControlKeyU:Mtg.include"><b>KeyShiftControlKeyU</b></a><br>
</td>
  <td class=toc width="33%"><a href="#Say:meta-server.functions"><b>Say</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#ClearCardBook:client.functions"><b>ClearCardBook</b></a><br>
</td>
  <td class=toc width="33%"><a href="#KeyShiftControlKeyW:Metw.include"><b>KeyShiftControlKeyW</b></a><br>
</td>
  <td class=toc width="33%"><a href="#Say:server.functions"><b>Say</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#ClearEmptyGroups:client.functions"><b>ClearEmptyGroups</b></a><br>
</td>
  <td class=toc width="33%"><a href="#KeyShiftControlKeyW:Mtg.include"><b>KeyShiftControlKeyW</b></a><br>
</td>
  <td class=toc width="33%"><a href="#scale_image:interpreter.cpp"><b>scale_image</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#ClearGame:client.functions"><b>ClearGame</b></a><br>
</td>
  <td class=toc width="33%"><a href="#KeyShiftControlKeyW:Pokemon.include"><b>KeyShiftControlKeyW</b></a><br>
</td>
  <td class=toc width="33%"><a href="#Score:client.functions"><b>Score</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#ClearScores:client.functions"><b>ClearScores</b></a><br>
</td>
  <td class=toc width="33%"><a href="#KeyShiftControlKeyX:Mtg.include"><b>KeyShiftControlKeyX</b></a><br>
</td>
  <td class=toc width="33%"><a href="#Score:server.functions"><b>Score</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#ClearSearchbox:client.functions"><b>ClearSearchbox</b></a><br>
</td>
  <td class=toc width="33%"><a href="#KeyShiftControlKeyY:Mtg.include"><b>KeyShiftControlKeyY</b></a><br>
</td>
  <td class=toc width="33%"><a href="#ScoreAdjustment:Metw.include"><b>ScoreAdjustment</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#Command:meta-server.functions"><b>Command</b></a><br>
</td>
  <td class=toc width="33%"><a href="#KeyTab:client.functions"><b>KeyTab</b></a><br>
</td>
  <td class=toc width="33%"><a href="#ScoreToText:client.functions"><b>ScoreToText</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#Command:server.functions"><b>Command</b></a><br>
</td>
  <td class=toc width="33%"><a href="#KeyUp:client.functions"><b>KeyUp</b></a><br>
</td>
  <td class=toc width="33%"><a href="#ScoreToText:Metw.include"><b>ScoreToText</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#CommandAddproduct:meta-server.functions"><b>CommandAddproduct</b></a><br>
</td>
  <td class=toc width="33%"><b>- L -</b></td>
  <td class=toc width="33%"><a href="#ScoreToText:Pokemon.include"><b>ScoreToText</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#CommandBan:meta-server.functions"><b>CommandBan</b></a><br>
</td>
  <td class=toc width="33%"><a href="#L:parser_lib.cpp"><b>L</b></a><br>
</td>
  <td class=toc width="33%"><a href="#screen2table:interpreter.cpp"><b>screen2table</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#CommandBans:meta-server.functions"><b>CommandBans</b></a><br>
</td>
  <td class=toc width="33%"><a href="#languages:parser_lib.cpp"><b>languages</b></a><br>
</td>
  <td class=toc width="33%"><a href="#scripts:parser_libcards.cpp"><b>scripts</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#CommandBid:server.functions"><b>CommandBid</b></a><br>
</td>
  <td class=toc width="33%"><a href="#last:parser_lib.cpp"><b>last</b></a><br>
</td>
  <td class=toc width="33%"><a href="#ScrollHistory:client.functions"><b>ScrollHistory</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#CommandBind:client.functions"><b>CommandBind</b></a><br>
</td>
  <td class=toc width="33%"><a href="#lc:parser_lib.cpp"><b>lc</b></a><br>
</td>
  <td class=toc width="33%"><a href="#Sealed:meta-server.functions"><b>Sealed</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#CommandBindk:client.functions"><b>CommandBindk</b></a><br>
</td>
  <td class=toc width="33%"><a href="#LeaveChatMode:client.functions"><b>LeaveChatMode</b></a><br>
</td>
  <td class=toc width="33%"><a href="#SealedEnd:meta-server.functions"><b>SealedEnd</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#CommandDebug:meta-server.functions"><b>CommandDebug</b></a><br>
</td>
  <td class=toc width="33%"><a href="#LeavePlayMode:client.functions"><b>LeavePlayMode</b></a><br>
</td>
  <td class=toc width="33%"><a href="#SealedEndHook:Metw-meta-server.include"><b>SealedEndHook</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#CommandDelgame:server.functions"><b>CommandDelgame</b></a><br>
</td>
  <td class=toc width="33%"><a href="#LeaveTable:client.functions"><b>LeaveTable</b></a><br>
</td>
  <td class=toc width="33%"><a href="#SealedEndHook:Mtg-meta-server.include"><b>SealedEndHook</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#CommandDelproduct:meta-server.functions"><b>CommandDelproduct</b></a><br>
</td>
  <td class=toc width="33%"><a href="#LeaveTable:meta-server.functions"><b>LeaveTable</b></a><br>
</td>
  <td class=toc width="33%"><a href="#SealedOff:meta-server.functions"><b>SealedOff</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#CommandDisplay:client.functions"><b>CommandDisplay</b></a><br>
</td>
  <td class=toc width="33%"><a href="#LeaveWatchMode:client.functions"><b>LeaveWatchMode</b></a><br>
</td>
  <td class=toc width="33%"><a href="#SealedOn:meta-server.functions"><b>SealedOn</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#CommandEval:client.functions"><b>CommandEval</b></a><br>
</td>
  <td class=toc width="33%"><a href="#left:parser_lib.cpp"><b>left</b></a><br>
</td>
  <td class=toc width="33%"><a href="#SealedStart:meta-server.functions"><b>SealedStart</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#CommandFaq:meta-server.functions"><b>CommandFaq</b></a><br>
</td>
  <td class=toc width="33%"><a href="#LegalityCheck:server.functions"><b>LegalityCheck</b></a><br>
</td>
  <td class=toc width="33%"><a href="#SealedStartHook:Metw-meta-server.include"><b>SealedStartHook</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#CommandFaqclear:meta-server.functions"><b>CommandFaqclear</b></a><br>
</td>
  <td class=toc width="33%"><a href="#LegalityCheckDeck:common.include"><b>LegalityCheckDeck</b></a><br>
</td>
  <td class=toc width="33%"><a href="#SealedStartHook:Mtg-meta-server.include"><b>SealedStartHook</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#CommandFind:client.functions"><b>CommandFind</b></a><br>
</td>
  <td class=toc width="33%"><a href="#LegalityCheckRule:common.include"><b>LegalityCheckRule</b></a><br>
</td>
  <td class=toc width="33%"><a href="#SearchDeck:client.functions"><b>SearchDeck</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#CommandGiveticket:meta-server.functions"><b>CommandGiveticket</b></a><br>
</td>
  <td class=toc width="33%"><a href="#LegalityCheckRules:common.include"><b>LegalityCheckRules</b></a><br>
</td>
  <td class=toc width="33%"><a href="#SearchDeck:server.functions"><b>SearchDeck</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#CommandGrant:meta-server.functions"><b>CommandGrant</b></a><br>
</td>
  <td class=toc width="33%"><a href="#LegalityCheckRuleset:common.include"><b>LegalityCheckRuleset</b></a><br>
</td>
  <td class=toc width="33%"><a href="#SearchStartingCards:Lotr.include"><b>SearchStartingCards</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#CommandHave:meta-server.functions"><b>CommandHave</b></a><br>
</td>
  <td class=toc width="33%"><a href="#length:parser_lib.cpp"><b>length</b></a><br>
</td>
  <td class=toc width="33%"><a href="#SectionSubmenu:client.functions"><b>SectionSubmenu</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#CommandHelp:client.functions"><b>CommandHelp</b></a><br>
</td>
  <td class=toc width="33%"><a href="#LineSplitFirstSpace:client.functions"><b>LineSplitFirstSpace</b></a><br>
</td>
  <td class=toc width="33%"><a href="#select:parser.h"><b>select</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#CommandKick:meta-server.functions"><b>CommandKick</b></a><br>
</td>
  <td class=toc width="33%"><a href="#listbox_clear:interpreter.cpp"><b>listbox_clear</b></a><br>
</td>
  <td class=toc width="33%"><a href="#SelectByAttr:client.functions"><b>SelectByAttr</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#CommandKicktable:meta-server.functions"><b>CommandKicktable</b></a><br>
</td>
  <td class=toc width="33%"><a href="#listbox_entry:interpreter.cpp"><b>listbox_entry</b></a><br>
</td>
  <td class=toc width="33%"><a href="#SelectCard:client.functions"><b>SelectCard</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#CommandLoadgame:server.functions"><b>CommandLoadgame</b></a><br>
</td>
  <td class=toc width="33%"><a href="#listbox_scroll:interpreter.cpp"><b>listbox_scroll</b></a><br>
</td>
  <td class=toc width="33%"><a href="#SelectDeck:client.functions"><b>SelectDeck</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#CommandLoadimages:client.functions"><b>CommandLoadimages</b></a><br>
</td>
  <td class=toc width="33%"><a href="#listbox_set_deck:interpreter.cpp"><b>listbox_set_deck</b></a><br>
</td>
  <td class=toc width="33%"><a href="#SelectDeckPart:client.functions"><b>SelectDeckPart</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#CommandLog:client.functions"><b>CommandLog</b></a><br>
</td>
  <td class=toc width="33%"><a href="#listbox_set_entry:interpreter.cpp"><b>listbox_set_entry</b></a><br>
</td>
  <td class=toc width="33%"><a href="#SelectMenuChooseADeck:client.functions"><b>SelectMenuChooseADeck</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#CommandMe:client.functions"><b>CommandMe</b></a><br>
</td>
  <td class=toc width="33%"><a href="#listbox_sort_rows:interpreter.cpp"><b>listbox_sort_rows</b></a><br>
</td>
  <td class=toc width="33%"><a href="#Send:client.functions"><b>Send</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#CommandNewuser:client.functions"><b>CommandNewuser</b></a><br>
</td>
  <td class=toc width="33%"><a href="#listjoin:common.include"><b>listjoin</b></a><br>
</td>
  <td class=toc width="33%"><a href="#Send:meta-server.functions"><b>Send</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#CommandPayall:meta-server.functions"><b>CommandPayall</b></a><br>
</td>
  <td class=toc width="33%"><a href="#load:parser.h"><b>load</b></a><br>
</td>
  <td class=toc width="33%"><a href="#Send:server.functions"><b>Send</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#CommandProducts:meta-server.functions"><b>CommandProducts</b></a><br>
</td>
  <td class=toc width="33%"><a href="#LoadAllRules:client.functions"><b>LoadAllRules</b></a><br>
</td>
  <td class=toc width="33%"><a href="#SendAll:meta-server.functions"><b>SendAll</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#CommandQuit:client.functions"><b>CommandQuit</b></a><br>
</td>
  <td class=toc width="33%"><a href="#LoadAllScripts:client.functions"><b>LoadAllScripts</b></a><br>
</td>
  <td class=toc width="33%"><a href="#SendAll:server.functions"><b>SendAll</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#CommandReboot:meta-server.functions"><b>CommandReboot</b></a><br>
</td>
  <td class=toc width="33%"><a href="#LoadAvatar:client.functions"><b>LoadAvatar</b></a><br>
</td>
  <td class=toc width="33%"><a href="#SendAllNP:meta-server.functions"><b>SendAllNP</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#CommandRefresh:client.functions"><b>CommandRefresh</b></a><br>
</td>
  <td class=toc width="33%"><a href="#LoadBookState:client.functions"><b>LoadBookState</b></a><br>
</td>
  <td class=toc width="33%"><a href="#SendFullGameStatus:server.functions"><b>SendFullGameStatus</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#CommandRegister:meta-server.functions"><b>CommandRegister</b></a><br>
</td>
  <td class=toc width="33%"><a href="#LoadgameHook:Metw-server.include"><b>LoadgameHook</b></a><br>
</td>
  <td class=toc width="33%"><a href="#SendFullGameStatusHook:Metw-server.include"><b>SendFullGameStatusHook</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#CommandReload:meta-server.functions"><b>CommandReload</b></a><br>
</td>
  <td class=toc width="33%"><a href="#LoadMenu:client.functions"><b>LoadMenu</b></a><br>
</td>
  <td class=toc width="33%"><a href="#SendMeta:client.functions"><b>SendMeta</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#CommandReload:server.functions"><b>CommandReload</b></a><br>
</td>
  <td class=toc width="33%"><a href="#load_deck:parser_libcards.cpp"><b>load_deck</b></a><br>
</td>
  <td class=toc width="33%"><a href="#SendOther:meta-server.functions"><b>SendOther</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#CommandRemoveuser:meta-server.functions"><b>CommandRemoveuser</b></a><br>
</td>
  <td class=toc width="33%"><a href="#load_image:interpreter.cpp"><b>load_image</b></a><br>
</td>
  <td class=toc width="33%"><a href="#SendOther:server.functions"><b>SendOther</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#CommandReproduce:meta-server.functions"><b>CommandReproduce</b></a><br>
</td>
  <td class=toc width="33%"><a href="#LocationList:client.functions"><b>LocationList</b></a><br>
</td>
  <td class=toc width="33%"><a href="#seq:parser_lib.cpp"><b>seq</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#CommandRestrict:meta-server.functions"><b>CommandRestrict</b></a><br>
</td>
  <td class=toc width="33%"><a href="#Log:factory-server.functions"><b>Log</b></a><br>
</td>
  <td class=toc width="33%"><a href="#Set:meta-server.functions"><b>Set</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#CommandRo:meta-server.functions"><b>CommandRo</b></a><br>
</td>
  <td class=toc width="33%"><a href="#Log:meta-server.functions"><b>Log</b></a><br>
</td>
  <td class=toc width="33%"><a href="#SetActive:client.functions"><b>SetActive</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#CommandRtfm:meta-server.functions"><b>CommandRtfm</b></a><br>
</td>
  <td class=toc width="33%"><a href="#Log:server.functions"><b>Log</b></a><br>
</td>
  <td class=toc width="33%"><a href="#SetAvatar:client.functions"><b>SetAvatar</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#CommandRtfm:server.functions"><b>CommandRtfm</b></a><br>
</td>
  <td class=toc width="33%"><a href="#Lower:client.functions"><b>Lower</b></a><br>
</td>
  <td class=toc width="33%"><a href="#SetAwayOff:client.functions"><b>SetAwayOff</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#CommandSave:meta-server.functions"><b>CommandSave</b></a><br>
</td>
  <td class=toc width="33%"><a href="#lower:interpreter.cpp"><b>lower</b></a><br>
</td>
  <td class=toc width="33%"><a href="#SetAwayOn:client.functions"><b>SetAwayOn</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#CommandSavegame:server.functions"><b>CommandSavegame</b></a><br>
</td>
  <td class=toc width="33%"><a href="#Lower:server.functions"><b>Lower</b></a><br>
</td>
  <td class=toc width="33%"><a href="#SetBookIndex:client.functions"><b>SetBookIndex</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#CommandSelect:client.functions"><b>CommandSelect</b></a><br>
</td>
  <td class=toc width="33%"><a href="#LowerAttachments:client.functions"><b>LowerAttachments</b></a><br>
</td>
  <td class=toc width="33%"><a href="#SetBookPage:client.functions"><b>SetBookPage</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#CommandSet:client.functions"><b>CommandSet</b></a><br>
</td>
  <td class=toc width="33%"><b>- M -</b></td>
  <td class=toc width="33%"><a href="#SetCardbook:client.functions"><b>SetCardbook</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#CommandSort:client.functions"><b>CommandSort</b></a><br>
</td>
  <td class=toc width="33%"><a href="#MainLoop:client.functions"><b>MainLoop</b></a><br>
</td>
  <td class=toc width="33%"><a href="#SetDeck:client.functions"><b>SetDeck</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#CommandTables:client.functions"><b>CommandTables</b></a><br>
</td>
  <td class=toc width="33%"><a href="#MakeLegalityCheck:client.functions"><b>MakeLegalityCheck</b></a><br>
</td>
  <td class=toc width="33%"><a href="#SetForsale:meta-server.functions"><b>SetForsale</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#CommandUnban:meta-server.functions"><b>CommandUnban</b></a><br>
</td>
  <td class=toc width="33%"><a href="#MakeLegalityCheck:server.functions"><b>MakeLegalityCheck</b></a><br>
</td>
  <td class=toc width="33%"><a href="#SetHand:client.functions"><b>SetHand</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#CommandUnbind:client.functions"><b>CommandUnbind</b></a><br>
</td>
  <td class=toc width="33%"><a href="#mana:Mtg.include"><b>mana</b></a><br>
</td>
  <td class=toc width="33%"><a href="#SetHandSize:client.functions"><b>SetHandSize</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#CommandUnrestrict:meta-server.functions"><b>CommandUnrestrict</b></a><br>
</td>
  <td class=toc width="33%"><a href="#ManualTarget:client.functions"><b>ManualTarget</b></a><br>
</td>
  <td class=toc width="33%"><a href="#SetJoinGame:client.functions"><b>SetJoinGame</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#CommandUnset:client.functions"><b>CommandUnset</b></a><br>
</td>
  <td class=toc width="33%"><a href="#MapCon2Plr:server.functions"><b>MapCon2Plr</b></a><br>
</td>
  <td class=toc width="33%"><a href="#SetMe:client.functions"><b>SetMe</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#CommandUsers:meta-server.functions"><b>CommandUsers</b></a><br>
</td>
  <td class=toc width="33%"><a href="#max:parser_lib.cpp"><b>max</b></a><br>
</td>
  <td class=toc width="33%"><a href="#SetMode:client.functions"><b>SetMode</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#CommandWant:meta-server.functions"><b>CommandWant</b></a><br>
</td>
  <td class=toc width="33%"><a href="#Menu:client.functions"><b>Menu</b></a><br>
</td>
  <td class=toc width="33%"><a href="#SetMoney:client.functions"><b>SetMoney</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#CommandWho:client.functions"><b>CommandWho</b></a><br>
</td>
  <td class=toc width="33%"><a href="#MenuByContext:client.functions"><b>MenuByContext</b></a><br>
</td>
  <td class=toc width="33%"><a href="#SetMyName:client.functions"><b>SetMyName</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#CommandWhois:meta-server.functions"><b>CommandWhois</b></a><br>
</td>
  <td class=toc width="33%"><a href="#MenuClick:client.functions"><b>MenuClick</b></a><br>
</td>
  <td class=toc width="33%"><a href="#SetOfCard:meta-server.functions"><b>SetOfCard</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#CommandYell:meta-server.functions"><b>CommandYell</b></a><br>
</td>
  <td class=toc width="33%"><a href="#MergeDeck:client.functions"><b>MergeDeck</b></a><br>
</td>
  <td class=toc width="33%"><a href="#SetOption:client.functions"><b>SetOption</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#CompanySize:Lotr.include"><b>CompanySize</b></a><br>
</td>
  <td class=toc width="33%"><a href="#MergeDeckSubmenu:client.functions"><b>MergeDeckSubmenu</b></a><br>
</td>
  <td class=toc width="33%"><a href="#SetPassword:client.functions"><b>SetPassword</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#Con2Plr:server.functions"><b>Con2Plr</b></a><br>
</td>
  <td class=toc width="33%"><a href="#Message:client.functions"><b>Message</b></a><br>
</td>
  <td class=toc width="33%"><a href="#SetPrice:client.functions"><b>SetPrice</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#Con:meta-server.functions"><b>Con</b></a><br>
</td>
  <td class=toc width="33%"><a href="#message:interpreter.cpp"><b>message</b></a><br>
</td>
  <td class=toc width="33%"><a href="#SetPrice:meta-server.functions"><b>SetPrice</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#ConnectServer:client.functions"><b>ConnectServer</b></a><br>
</td>
  <td class=toc width="33%"><a href="#MessageHook:Mtg.include"><b>MessageHook</b></a><br>
</td>
  <td class=toc width="33%"><a href="#SetProducts:client.functions"><b>SetProducts</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#ConstructMenu:client.functions"><b>ConstructMenu</b></a><br>
</td>
  <td class=toc width="33%"><a href="#min:parser_lib.cpp"><b>min</b></a><br>
</td>
  <td class=toc width="33%"><a href="#sets:parser_libcards.cpp"><b>sets</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#CoordinateMapping:client.functions"><b>CoordinateMapping</b></a><br>
</td>
  <td class=toc width="33%"><a href="#min_price:server.cpp"><b>min_price</b></a><br>
</td>
  <td class=toc width="33%"><a href="#SetScore:client.functions"><b>SetScore</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#CoordToPlr:server.functions"><b>CoordToPlr</b></a><br>
</td>
  <td class=toc width="33%"><a href="#Mode:client.functions"><b>Mode</b></a><br>
</td>
  <td class=toc width="33%"><a href="#SetStayTapped:client.functions"><b>SetStayTapped</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#CoordToSvr:server.functions"><b>CoordToSvr</b></a><br>
</td>
  <td class=toc width="33%"><a href="#Mode:meta-server.functions"><b>Mode</b></a><br>
</td>
  <td class=toc width="33%"><a href="#SetUpPlayer:Lotr-server.include"><b>SetUpPlayer</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#copy:parser_lib.cpp"><b>copy</b></a><br>
</td>
  <td class=toc width="33%"><a href="#mouse:interpreter.cpp"><b>mouse</b></a><br>
</td>
  <td class=toc width="33%"><a href="#SetUpPlayer:Metw-server.include"><b>SetUpPlayer</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#count:parser_lib.cpp"><b>count</b></a><br>
</td>
  <td class=toc width="33%"><a href="#MouseControlLeftClick:client.functions"><b>MouseControlLeftClick</b></a><br>
</td>
  <td class=toc width="33%"><a href="#SetUpPlayer:Mtg-server.include"><b>SetUpPlayer</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#CountCanonicalNamePairs:client.functions"><b>CountCanonicalNamePairs</b></a><br>
</td>
  <td class=toc width="33%"><a href="#MouseControlLeftDragBegin:client.functions"><b>MouseControlLeftDragBegin</b></a><br>
</td>
  <td class=toc width="33%"><a href="#SetUpPlayer:Pokemon-server.include"><b>SetUpPlayer</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#CountCards:common.include"><b>CountCards</b></a><br>
</td>
  <td class=toc width="33%"><a href="#MouseControlLeftDragEnd:client.functions"><b>MouseControlLeftDragEnd</b></a><br>
</td>
  <td class=toc width="33%"><a href="#set_attr:interpreter.cpp"><b>set_attr</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#CounterSubmenu:client.functions"><b>CounterSubmenu</b></a><br>
</td>
  <td class=toc width="33%"><a href="#MouseControlMiddleClick:client.functions"><b>MouseControlMiddleClick</b></a><br>
</td>
  <td class=toc width="33%"><a href="#set_bgcolor:interpreter.cpp"><b>set_bgcolor</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#CountNamePairs:client.functions"><b>CountNamePairs</b></a><br>
</td>
  <td class=toc width="33%"><a href="#MouseControlMiddleClickMap:Metw.include"><b>MouseControlMiddleClickMap</b></a><br>
</td>
  <td class=toc width="33%"><a href="#set_cardsize:interpreter.cpp"><b>set_cardsize</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#count_cards:server.cpp"><b>count_cards</b></a><br>
</td>
  <td class=toc width="33%"><a href="#MouseLeftClick:client.functions"><b>MouseLeftClick</b></a><br>
</td>
  <td class=toc width="33%"><a href="#set_data:parser_libcards.cpp"><b>set_data</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#CreateActive:client.functions"><b>CreateActive</b></a><br>
</td>
  <td class=toc width="33%"><a href="#MouseLeftClickActiveSet:client.functions"><b>MouseLeftClickActiveSet</b></a><br>
</td>
  <td class=toc width="33%"><a href="#set_error_trigger:server.cpp"><b>set_error_trigger</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#CreateAvatar:client.functions"><b>CreateAvatar</b></a><br>
</td>
  <td class=toc width="33%"><a href="#MouseLeftClickActiveSet:Lotr.include"><b>MouseLeftClickActiveSet</b></a><br>
</td>
  <td class=toc width="33%"><a href="#set_fgcolor:interpreter.cpp"><b>set_fgcolor</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#CreateDeck:client.functions"><b>CreateDeck</b></a><br>
</td>
  <td class=toc width="33%"><a href="#MouseLeftClickActiveSet:Metw.include"><b>MouseLeftClickActiveSet</b></a><br>
</td>
  <td class=toc width="33%"><a href="#set_forsale:server.cpp"><b>set_forsale</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#CreateDeck:server.functions"><b>CreateDeck</b></a><br>
</td>
  <td class=toc width="33%"><a href="#MouseLeftClickCard:client.functions"><b>MouseLeftClickCard</b></a><br>
</td>
  <td class=toc width="33%"><a href="#set_lang:parser_lib.cpp"><b>set_lang</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#CreateDeckHook:Metw.include"><b>CreateDeckHook</b></a><br>
</td>
  <td class=toc width="33%"><a href="#MouseLeftClickCardSelectBox:client.functions"><b>MouseLeftClickCardSelectBox</b></a><br>
</td>
  <td class=toc width="33%"><a href="#set_name:interpreter.cpp"><b>set_name</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#CreateDeckHook:Mtg.include"><b>CreateDeckHook</b></a><br>
</td>
  <td class=toc width="33%"><a href="#MouseLeftClickCurrentDeck:client.functions"><b>MouseLeftClickCurrentDeck</b></a><br>
</td>
  <td class=toc width="33%"><a href="#set_of:parser_libcards.cpp"><b>set_of</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#CreateFilter:client.functions"><b>CreateFilter</b></a><br>
</td>
  <td class=toc width="33%"><a href="#MouseLeftClickDeck:client.functions"><b>MouseLeftClickDeck</b></a><br>
</td>
  <td class=toc width="33%"><a href="#set_price:server.cpp"><b>set_price</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#CreateHand:client.functions"><b>CreateHand</b></a><br>
</td>
  <td class=toc width="33%"><a href="#MouseLeftClickDeckSearchBox:client.functions"><b>MouseLeftClickDeckSearchBox</b></a><br>
</td>
  <td class=toc width="33%"><a href="#set_textalign:interpreter.cpp"><b>set_textalign</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#CreateIndex:client.functions"><b>CreateIndex</b></a><br>
</td>
  <td class=toc width="33%"><a href="#MouseLeftClickDiscardPile:Metw.include"><b>MouseLeftClickDiscardPile</b></a><br>
</td>
  <td class=toc width="33%"><a href="#set_textcolor:interpreter.cpp"><b>set_textcolor</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#CreatePanel:client.functions"><b>CreatePanel</b></a><br>
</td>
  <td class=toc width="33%"><a href="#MouseLeftClickDiscardPileSearchBoxHook:Metw.include"><b>MouseLeftClickDiscardPileSearchBoxHook</b></a><br>
</td>
  <td class=toc width="33%"><a href="#set_textfont:interpreter.cpp"><b>set_textfont</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#CreatePlayerIcon:client.functions"><b>CreatePlayerIcon</b></a><br>
</td>
  <td class=toc width="33%"><a href="#MouseLeftClickHand:client.functions"><b>MouseLeftClickHand</b></a><br>
</td>
  <td class=toc width="33%"><a href="#set_textmargin:interpreter.cpp"><b>set_textmargin</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#CreatePlayerObjects:server.functions"><b>CreatePlayerObjects</b></a><br>
</td>
  <td class=toc width="33%"><a href="#MouseLeftClickMap:Metw.include"><b>MouseLeftClickMap</b></a><br>
</td>
  <td class=toc width="33%"><a href="#set_textsize:interpreter.cpp"><b>set_textsize</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#CreateScreen:client.functions"><b>CreateScreen</b></a><br>
</td>
  <td class=toc width="33%"><a href="#MouseLeftClickMyCollection:client.functions"><b>MouseLeftClickMyCollection</b></a><br>
</td>
  <td class=toc width="33%"><a href="#set_textvalign:interpreter.cpp"><b>set_textvalign</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#CreateTypeLegalTable:Mtg-common.include"><b>CreateTypeLegalTable</b></a><br>
</td>
  <td class=toc width="33%"><a href="#MouseLeftClickOpenBooster:client.functions"><b>MouseLeftClickOpenBooster</b></a><br>
</td>
  <td class=toc width="33%"><a href="#set_title:interpreter.cpp"><b>set_title</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#create_book:interpreter.cpp"><b>create_book</b></a><br>
</td>
  <td class=toc width="33%"><a href="#MouseLeftClickOpponentHand:client.functions"><b>MouseLeftClickOpponentHand</b></a><br>
</td>
  <td class=toc width="33%"><a href="#ShowGameSpecificHelp:Mtg.include"><b>ShowGameSpecificHelp</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#create_cardbox:interpreter.cpp"><b>create_cardbox</b></a><br>
</td>
  <td class=toc width="33%"><a href="#MouseLeftClickPool:Metw.include"><b>MouseLeftClickPool</b></a><br>
</td>
  <td class=toc width="33%"><a href="#ShowGameSpecificHelp:Pokemon.include"><b>ShowGameSpecificHelp</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#create_deck:interpreter.cpp"><b>create_deck</b></a><br>
</td>
  <td class=toc width="33%"><a href="#MouseLeftClickPoolSearchBoxHook:Metw.include"><b>MouseLeftClickPoolSearchBoxHook</b></a><br>
</td>
  <td class=toc width="33%"><a href="#ShowHelp:client.functions"><b>ShowHelp</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#create_hand:interpreter.cpp"><b>create_hand</b></a><br>
</td>
  <td class=toc width="33%"><a href="#MouseLeftClickPrizes:Pokemon.include"><b>MouseLeftClickPrizes</b></a><br>
</td>
  <td class=toc width="33%"><a href="#ShowPanel:client.functions"><b>ShowPanel</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#create_image:interpreter.cpp"><b>create_image</b></a><br>
</td>
  <td class=toc width="33%"><a href="#MouseLeftClickSideboard:Metw.include"><b>MouseLeftClickSideboard</b></a><br>
</td>
  <td class=toc width="33%"><a href="#ShowPlaymat:client.functions"><b>ShowPlaymat</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#create_listbox:interpreter.cpp"><b>create_listbox</b></a><br>
</td>
  <td class=toc width="33%"><a href="#MouseLeftClickSideboard:Mtg.include"><b>MouseLeftClickSideboard</b></a><br>
</td>
  <td class=toc width="33%"><a href="#ShowScreen:client.functions"><b>ShowScreen</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#create_menu:interpreter.cpp"><b>create_menu</b></a><br>
</td>
  <td class=toc width="33%"><a href="#MouseLeftClickSideboardSearchBoxHook:Metw.include"><b>MouseLeftClickSideboardSearchBoxHook</b></a><br>
</td>
  <td class=toc width="33%"><a href="#shuffle:parser_lib.cpp"><b>shuffle</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#create_msgbox:interpreter.cpp"><b>create_msgbox</b></a><br>
</td>
  <td class=toc width="33%"><a href="#MouseLeftClickSiteCard:Lotr.include"><b>MouseLeftClickSiteCard</b></a><br>
</td>
  <td class=toc width="33%"><a href="#ShuffleDeck:server.functions"><b>ShuffleDeck</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#CurrentDeckAddHavens:Metw.include"><b>CurrentDeckAddHavens</b></a><br>
</td>
  <td class=toc width="33%"><a href="#MouseLeftClickSites:Lotr.include"><b>MouseLeftClickSites</b></a><br>
</td>
  <td class=toc width="33%"><a href="#SideboardSearchBoxMenuHook:Metw.include"><b>SideboardSearchBoxMenuHook</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#CurrentDeckAddSites:Metw.include"><b>CurrentDeckAddSites</b></a><br>
</td>
  <td class=toc width="33%"><a href="#MouseLeftClickSites:Metw.include"><b>MouseLeftClickSites</b></a><br>
</td>
  <td class=toc width="33%"><a href="#SingleCardMenu:client.functions"><b>SingleCardMenu</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#CurrentDeckMenu:client.functions"><b>CurrentDeckMenu</b></a><br>
</td>
  <td class=toc width="33%"><a href="#MouseLeftClickSitesSearchBoxHook:Lotr.include"><b>MouseLeftClickSitesSearchBoxHook</b></a><br>
</td>
  <td class=toc width="33%"><a href="#SingleCardMenuHook:Metw.include"><b>SingleCardMenuHook</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#CurrentDeckRemoveSites:Metw.include"><b>CurrentDeckRemoveSites</b></a><br>
</td>
  <td class=toc width="33%"><a href="#MouseLeftClickSitesSearchBoxHook:Metw.include"><b>MouseLeftClickSitesSearchBoxHook</b></a><br>
</td>
  <td class=toc width="33%"><a href="#SingleCardMenuHook:Mtg.include"><b>SingleCardMenuHook</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#CurrentDeckRemoveUnownedSites:Metw.include"><b>CurrentDeckRemoveUnownedSites</b></a><br>
</td>
  <td class=toc width="33%"><a href="#MouseLeftClickTable:client.functions"><b>MouseLeftClickTable</b></a><br>
</td>
  <td class=toc width="33%"><a href="#SitesOfRegion:Metw.include"><b>SitesOfRegion</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#CurrentFilter:client.functions"><b>CurrentFilter</b></a><br>
</td>
  <td class=toc width="33%"><a href="#MouseLeftClickTwilightPool:Lotr.include"><b>MouseLeftClickTwilightPool</b></a><br>
</td>
  <td class=toc width="33%"><a href="#SlashCommand:client.functions"><b>SlashCommand</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#CurrentSorting:client.functions"><b>CurrentSorting</b></a><br>
</td>
  <td class=toc width="33%"><a href="#MouseLeftDragBegin:client.functions"><b>MouseLeftDragBegin</b></a><br>
</td>
  <td class=toc width="33%"><a href="#SlashComments:client.functions"><b>SlashComments</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#current_time:parser_lib.cpp"><b>current_time</b></a><br>
</td>
  <td class=toc width="33%"><a href="#MouseLeftDragEnd:client.functions"><b>MouseLeftDragEnd</b></a><br>
</td>
  <td class=toc width="33%"><a href="#sleep:parser_lib.cpp"><b>sleep</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><b>- D -</b></td>
  <td class=toc width="33%"><a href="#MouseMiddleClick:client.functions"><b>MouseMiddleClick</b></a><br>
</td>
  <td class=toc width="33%"><a href="#sort:parser_lib.cpp"><b>sort</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#DataPath:common.include"><b>DataPath</b></a><br>
</td>
  <td class=toc width="33%"><a href="#MouseMiddleClickCard:client.functions"><b>MouseMiddleClickCard</b></a><br>
</td>
  <td class=toc width="33%"><a href="#SortSites:Metw.include"><b>SortSites</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#date:parser_lib.cpp"><b>date</b></a><br>
</td>
  <td class=toc width="33%"><a href="#MouseMiddleClickCard:Pokemon.include"><b>MouseMiddleClickCard</b></a><br>
</td>
  <td class=toc width="33%"><a href="#sort_by:parser_libcards.cpp"><b>sort_by</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#deck:interpreter.cpp"><b>deck</b></a><br>
</td>
  <td class=toc width="33%"><a href="#MouseMiddleClickCurrentDeck:client.functions"><b>MouseMiddleClickCurrentDeck</b></a><br>
</td>
  <td class=toc width="33%"><a href="#sort_fn:common.include"><b>sort_fn</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#DeckCheck:meta-server.functions"><b>DeckCheck</b></a><br>
</td>
  <td class=toc width="33%"><a href="#MouseMiddleClickDeckSearchBox:client.functions"><b>MouseMiddleClickDeckSearchBox</b></a><br>
</td>
  <td class=toc width="33%"><a href="#sort_fn:parser.h"><b>sort_fn</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#DeckMenu:client.functions"><b>DeckMenu</b></a><br>
</td>
  <td class=toc width="33%"><a href="#MouseMiddleClickHand:Metw.include"><b>MouseMiddleClickHand</b></a><br>
</td>
  <td class=toc width="33%"><a href="#Special:client.functions"><b>Special</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#DeckName:client.functions"><b>DeckName</b></a><br>
</td>
  <td class=toc width="33%"><a href="#MouseMiddleClickMap:Metw.include"><b>MouseMiddleClickMap</b></a><br>
</td>
  <td class=toc width="33%"><a href="#Special:server.functions"><b>Special</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#DeckName:server.functions"><b>DeckName</b></a><br>
</td>
  <td class=toc width="33%"><a href="#MouseMiddleClickMyCollection:client.functions"><b>MouseMiddleClickMyCollection</b></a><br>
</td>
  <td class=toc width="33%"><a href="#SpecialEventAdjustScore:Metw.include"><b>SpecialEventAdjustScore</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#decks:parser_libcards.cpp"><b>decks</b></a><br>
</td>
  <td class=toc width="33%"><a href="#MouseMiddleClickOpenBooster:client.functions"><b>MouseMiddleClickOpenBooster</b></a><br>
</td>
  <td class=toc width="33%"><a href="#SpecialHook:Metw-server.include"><b>SpecialHook</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#DeckSearchBoxMenu:client.functions"><b>DeckSearchBoxMenu</b></a><br>
</td>
  <td class=toc width="33%"><a href="#MouseMiddleClickPoolSearchBoxHook:Metw.include"><b>MouseMiddleClickPoolSearchBoxHook</b></a><br>
</td>
  <td class=toc width="33%"><a href="#split:parser_lib.cpp"><b>split</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#DeclareResult:server.functions"><b>DeclareResult</b></a><br>
</td>
  <td class=toc width="33%"><a href="#MouseMiddleClickSites:Metw.include"><b>MouseMiddleClickSites</b></a><br>
</td>
  <td class=toc width="33%"><a href="#SplitToWords:client.functions"><b>SplitToWords</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#Default:client.functions"><b>Default</b></a><br>
</td>
  <td class=toc width="33%"><a href="#MouseMiddleClickTable:client.functions"><b>MouseMiddleClickTable</b></a><br>
</td>
  <td class=toc width="33%"><a href="#StacksByGroup:client.functions"><b>StacksByGroup</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#DefaultInitialPrice:client.functions"><b>DefaultInitialPrice</b></a><br>
</td>
  <td class=toc width="33%"><a href="#MouseMiddleClickTwilightPool:Lotr.include"><b>MouseMiddleClickTwilightPool</b></a><br>
</td>
  <td class=toc width="33%"><a href="#stacktrace:parser.h"><b>stacktrace</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#del:common.include"><b>del</b></a><br>
</td>
  <td class=toc width="33%"><a href="#MouseMiddleDragBegin:client.functions"><b>MouseMiddleDragBegin</b></a><br>
</td>
  <td class=toc width="33%"><a href="#StartChatMode:client.functions"><b>StartChatMode</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#DelActive:client.functions"><b>DelActive</b></a><br>
</td>
  <td class=toc width="33%"><a href="#MouseMiddleDragEnd:client.functions"><b>MouseMiddleDragEnd</b></a><br>
</td>
  <td class=toc width="33%"><a href="#StartGame:Lotr.include"><b>StartGame</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#DelCard:meta-server.functions"><b>DelCard</b></a><br>
</td>
  <td class=toc width="33%"><a href="#MouseMoveObject:client.functions"><b>MouseMoveObject</b></a><br>
</td>
  <td class=toc width="33%"><a href="#StartGame:meta-server.functions"><b>StartGame</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#DelCardInGroup:client.functions"><b>DelCardInGroup</b></a><br>
</td>
  <td class=toc width="33%"><a href="#MouseWheel:client.functions"><b>MouseWheel</b></a><br>
</td>
  <td class=toc width="33%"><a href="#StartGame:Metw.include"><b>StartGame</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#DelCards:meta-server.functions"><b>DelCards</b></a><br>
</td>
  <td class=toc width="33%"><a href="#MouseWheelChatMsg:client.functions"><b>MouseWheelChatMsg</b></a><br>
</td>
  <td class=toc width="33%"><a href="#StartGame:Mtg.include"><b>StartGame</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#DelCursor:client.functions"><b>DelCursor</b></a><br>
</td>
  <td class=toc width="33%"><a href="#MouseWheelCurrentDeck:client.functions"><b>MouseWheelCurrentDeck</b></a><br>
</td>
  <td class=toc width="33%"><a href="#StartGame:Pokemon.include"><b>StartGame</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#DelDeck:client.functions"><b>DelDeck</b></a><br>
</td>
  <td class=toc width="33%"><a href="#MouseWheelMenu:client.functions"><b>MouseWheelMenu</b></a><br>
</td>
  <td class=toc width="33%"><a href="#StartGame:server.functions"><b>StartGame</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#DelDeckHook:Metw.include"><b>DelDeckHook</b></a><br>
</td>
  <td class=toc width="33%"><a href="#MouseWheelMyCollection:client.functions"><b>MouseWheelMyCollection</b></a><br>
</td>
  <td class=toc width="33%"><a href="#StartPlayMode:client.functions"><b>StartPlayMode</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#DelDeckTop:client.functions"><b>DelDeckTop</b></a><br>
</td>
  <td class=toc width="33%"><a href="#MoveAvatar:client.functions"><b>MoveAvatar</b></a><br>
</td>
  <td class=toc width="33%"><a href="#StartWatchMode:client.functions"><b>StartWatchMode</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#DeleteDeck:client.functions"><b>DeleteDeck</b></a><br>
</td>
  <td class=toc width="33%"><a href="#MoveObject:client.functions"><b>MoveObject</b></a><br>
</td>
  <td class=toc width="33%"><a href="#str2filter_atom:client.functions"><b>str2filter_atom</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#DelHand:client.functions"><b>DelHand</b></a><br>
</td>
  <td class=toc width="33%"><a href="#MoveObject:server.functions"><b>MoveObject</b></a><br>
</td>
  <td class=toc width="33%"><a href="#str2filter_exp:client.functions"><b>str2filter_exp</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#DelMarker:client.functions"><b>DelMarker</b></a><br>
</td>
  <td class=toc width="33%"><a href="#MovePanel:client.functions"><b>MovePanel</b></a><br>
</td>
  <td class=toc width="33%"><a href="#str2filter_join:client.functions"><b>str2filter_join</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#DelMarker:server.functions"><b>DelMarker</b></a><br>
</td>
  <td class=toc width="33%"><a href="#move_object:interpreter.cpp"><b>move_object</b></a><br>
</td>
  <td class=toc width="33%"><a href="#str2filter_rel:client.functions"><b>str2filter_rel</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#DelMenu:client.functions"><b>DelMenu</b></a><br>
</td>
  <td class=toc width="33%"><a href="#Msg:client.functions"><b>Msg</b></a><br>
</td>
  <td class=toc width="33%"><a href="#str2filter_split:client.functions"><b>str2filter_split</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#DelRoomPlayer:client.functions"><b>DelRoomPlayer</b></a><br>
</td>
  <td class=toc width="33%"><a href="#msgbox_scroll:interpreter.cpp"><b>msgbox_scroll</b></a><br>
</td>
  <td class=toc width="33%"><a href="#str2filter_sum:client.functions"><b>str2filter_sum</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#DelRoomTable:client.functions"><b>DelRoomTable</b></a><br>
</td>
  <td class=toc width="33%"><a href="#MsgCards:server.functions"><b>MsgCards</b></a><br>
</td>
  <td class=toc width="33%"><a href="#str2filter_term:client.functions"><b>str2filter_term</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#delsaved:parser.h"><b>delsaved</b></a><br>
</td>
  <td class=toc width="33%"><a href="#MsgChat:client.functions"><b>MsgChat</b></a><br>
</td>
  <td class=toc width="33%"><a href="#str2filter_typeconvert:client.functions"><b>str2filter_typeconvert</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#DelTable:client.functions"><b>DelTable</b></a><br>
</td>
  <td class=toc width="33%"><a href="#MsgOrdinal:server.functions"><b>MsgOrdinal</b></a><br>
</td>
  <td class=toc width="33%"><a href="#str2filter_typetoint:client.functions"><b>str2filter_typetoint</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#DelTableHook:Metw.include"><b>DelTableHook</b></a><br>
</td>
  <td class=toc width="33%"><a href="#MsgTransfer:server.functions"><b>MsgTransfer</b></a><br>
</td>
  <td class=toc width="33%"><a href="#str2filter_typetostring:client.functions"><b>str2filter_typetostring</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#del_all_texts:interpreter.cpp"><b>del_all_texts</b></a><br>
</td>
  <td class=toc width="33%"><a href="#MsgVerbObject:server.functions"><b>MsgVerbObject</b></a><br>
</td>
  <td class=toc width="33%"><a href="#str2sorting:client.functions"><b>str2sorting</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#del_cardbox:interpreter.cpp"><b>del_cardbox</b></a><br>
</td>
  <td class=toc width="33%"><a href="#MsgVerbObjectObject:server.functions"><b>MsgVerbObjectObject</b></a><br>
</td>
  <td class=toc width="33%"><a href="#String2Filter:client.functions"><b>String2Filter</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#del_cardbox_all_recenter:interpreter.cpp"><b>del_cardbox_all_recenter</b></a><br>
</td>
  <td class=toc width="33%"><a href="#MyCollectionMenu:client.functions"><b>MyCollectionMenu</b></a><br>
</td>
  <td class=toc width="33%"><a href="#String2Sorting:client.functions"><b>String2Sorting</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#del_cardbox_recenter:interpreter.cpp"><b>del_cardbox_recenter</b></a><br>
</td>
  <td class=toc width="33%"><a href="#MyDeck:client.functions"><b>MyDeck</b></a><br>
</td>
  <td class=toc width="33%"><a href="#strreplace:common.include"><b>strreplace</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#del_deck:interpreter.cpp"><b>del_deck</b></a><br>
</td>
  <td class=toc width="33%"><a href="#MyFrodo:Lotr.include"><b>MyFrodo</b></a><br>
</td>
  <td class=toc width="33%"><a href="#strreplace:parser_lib.cpp"><b>strreplace</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#del_deck_top:interpreter.cpp"><b>del_deck_top</b></a><br>
</td>
  <td class=toc width="33%"><a href="#MyPath:common.include"><b>MyPath</b></a><br>
</td>
  <td class=toc width="33%"><a href="#SubjectName:server.functions"><b>SubjectName</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#del_entry:parser.h"><b>del_entry</b></a><br>
</td>
  <td class=toc width="33%"><b>- N -</b></td>
  <td class=toc width="33%"><a href="#Submenu:client.functions"><b>Submenu</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#del_hand:interpreter.cpp"><b>del_hand</b></a><br>
</td>
  <td class=toc width="33%"><a href="#name:parser_libcards.cpp"><b>name</b></a><br>
</td>
  <td class=toc width="33%"><a href="#subobjects:client.functions"><b>subobjects</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#del_marker:interpreter.cpp"><b>del_marker</b></a><br>
</td>
  <td class=toc width="33%"><a href="#net_client_ip:parser_libnet.cpp"><b>net_client_ip</b></a><br>
</td>
  <td class=toc width="33%"><a href="#substr:parser_lib.cpp"><b>substr</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#del_object:interpreter.cpp"><b>del_object</b></a><br>
</td>
  <td class=toc width="33%"><a href="#net_client_name:parser_libnet.cpp"><b>net_client_name</b></a><br>
</td>
  <td class=toc width="33%"><a href="#sum:common.include"><b>sum</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#del_prices:server.cpp"><b>del_prices</b></a><br>
</td>
  <td class=toc width="33%"><a href="#net_close:parser_libnet.cpp"><b>net_close</b></a><br>
</td>
  <td class=toc width="33%"><b>- T -</b></td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#del_text:interpreter.cpp"><b>del_text</b></a><br>
</td>
  <td class=toc width="33%"><a href="#net_connect:parser_libnet.cpp"><b>net_connect</b></a><br>
</td>
  <td class=toc width="33%"><a href="#table2screen:interpreter.cpp"><b>table2screen</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#DestroyUserDisplay:client.functions"><b>DestroyUserDisplay</b></a><br>
</td>
  <td class=toc width="33%"><a href="#net_create_server:parser_libnet.cpp"><b>net_create_server</b></a><br>
</td>
  <td class=toc width="33%"><a href="#Table:client.functions"><b>Table</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#Detach:client.functions"><b>Detach</b></a><br>
</td>
  <td class=toc width="33%"><a href="#net_get:parser_libnet.cpp"><b>net_get</b></a><br>
</td>
  <td class=toc width="33%"><a href="#TableCoord:client.functions"><b>TableCoord</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#detach:interpreter.cpp"><b>detach</b></a><br>
</td>
  <td class=toc width="33%"><a href="#net_isopen:parser_libnet.cpp"><b>net_isopen</b></a><br>
</td>
  <td class=toc width="33%"><a href="#TableMenu:client.functions"><b>TableMenu</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#Detach:server.functions"><b>Detach</b></a><br>
</td>
  <td class=toc width="33%"><a href="#net_send:parser_libnet.cpp"><b>net_send</b></a><br>
</td>
  <td class=toc width="33%"><a href="#TableNumber:client.functions"><b>TableNumber</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#diff_time:parser_lib.cpp"><b>diff_time</b></a><br>
</td>
  <td class=toc width="33%"><a href="#net_server_close:parser_libnet.cpp"><b>net_server_close</b></a><br>
</td>
  <td class=toc width="33%"><a href="#TableObject:client.functions"><b>TableObject</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#DiscardPileMenu:client.functions"><b>DiscardPileMenu</b></a><br>
</td>
  <td class=toc width="33%"><a href="#net_server_get:parser_libnet.cpp"><b>net_server_get</b></a><br>
</td>
  <td class=toc width="33%"><a href="#tail:parser_lib.cpp"><b>tail</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#DisconnectPlayer:meta-server.functions"><b>DisconnectPlayer</b></a><br>
</td>
  <td class=toc width="33%"><a href="#net_server_isopen:parser_libnet.cpp"><b>net_server_isopen</b></a><br>
</td>
  <td class=toc width="33%"><a href="#Take.Active:server.functions"><b>Take.Active</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#DisconnectServer:meta-server.functions"><b>DisconnectServer</b></a><br>
</td>
  <td class=toc width="33%"><a href="#net_server_send:parser_libnet.cpp"><b>net_server_send</b></a><br>
</td>
  <td class=toc width="33%"><a href="#Take.Deck:server.functions"><b>Take.Deck</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#DisplaySubmenu:client.functions"><b>DisplaySubmenu</b></a><br>
</td>
  <td class=toc width="33%"><a href="#net_server_send_all:parser_libnet.cpp"><b>net_server_send_all</b></a><br>
</td>
  <td class=toc width="33%"><a href="#Take.DeckTop:server.functions"><b>Take.DeckTop</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#dist:common.include"><b>dist</b></a><br>
</td>
  <td class=toc width="33%"><a href="#NewDeck:Lotr.include"><b>NewDeck</b></a><br>
</td>
  <td class=toc width="33%"><a href="#Take.Hand:server.functions"><b>Take.Hand</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#dump:interpreter.cpp"><b>dump</b></a><br>
</td>
  <td class=toc width="33%"><a href="#NewDeck:Metw.include"><b>NewDeck</b></a><br>
</td>
  <td class=toc width="33%"><a href="#Take.OutOfPlay:server.functions"><b>Take.OutOfPlay</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><b>- E -</b></td>
  <td class=toc width="33%"><a href="#NewDeck:Mtg.include"><b>NewDeck</b></a><br>
</td>
  <td class=toc width="33%"><a href="#Take.SearchDeck:server.functions"><b>Take.SearchDeck</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#EditAdd:client.functions"><b>EditAdd</b></a><br>
</td>
  <td class=toc width="33%"><a href="#NewDeck:Pokemon.include"><b>NewDeck</b></a><br>
</td>
  <td class=toc width="33%"><a href="#Take.Table:server.functions"><b>Take.Table</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#EditAddSideboard:Metw.include"><b>EditAddSideboard</b></a><br>
</td>
  <td class=toc width="33%"><a href="#NewUser:meta-server.functions"><b>NewUser</b></a><br>
</td>
  <td class=toc width="33%"><a href="#tap:interpreter.cpp"><b>tap</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#EditAddSideboard:Mtg.include"><b>EditAddSideboard</b></a><br>
</td>
  <td class=toc width="33%"><a href="#NextFreeAttachPos:client.functions"><b>NextFreeAttachPos</b></a><br>
</td>
  <td class=toc width="33%"><a href="#tapped:interpreter.cpp"><b>tapped</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#EditCardname:client.functions"><b>EditCardname</b></a><br>
</td>
  <td class=toc width="33%"><a href="#NextSiteNumber:Lotr.include"><b>NextSiteNumber</b></a><br>
</td>
  <td class=toc width="33%"><a href="#tapped_left:interpreter.cpp"><b>tapped_left</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#EditCardNumber:client.functions"><b>EditCardNumber</b></a><br>
</td>
  <td class=toc width="33%"><a href="#NextTarget:client.functions"><b>NextTarget</b></a><br>
</td>
  <td class=toc width="33%"><a href="#tap_left:interpreter.cpp"><b>tap_left</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#EditCountCards:client.functions"><b>EditCountCards</b></a><br>
</td>
  <td class=toc width="33%"><a href="#None:client.functions"><b>None</b></a><br>
</td>
  <td class=toc width="33%"><a href="#TargetCard:client.functions"><b>TargetCard</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#EditCreateDeck:client.functions"><b>EditCreateDeck</b></a><br>
</td>
  <td class=toc width="33%"><a href="#Null:client.functions"><b>Null</b></a><br>
</td>
  <td class=toc width="33%"><a href="#TargetingOptions:client.functions"><b>TargetingOptions</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#EditDel:client.functions"><b>EditDel</b></a><br>
</td>
  <td class=toc width="33%"><a href="#Null:meta-server.functions"><b>Null</b></a><br>
</td>
  <td class=toc width="33%"><a href="#TargetName:server.functions"><b>TargetName</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#EditNearestPartname:client.functions"><b>EditNearestPartname</b></a><br>
</td>
  <td class=toc width="33%"><a href="#Null:server.functions"><b>Null</b></a><br>
</td>
  <td class=toc width="33%"><a href="#text:parser_libcards.cpp"><b>text</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#EditPartname:client.functions"><b>EditPartname</b></a><br>
</td>
  <td class=toc width="33%"><a href="#Number:server.functions"><b>Number</b></a><br>
</td>
  <td class=toc width="33%"><a href="#text_height:interpreter.cpp"><b>text_height</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#EditRemoveSideboard:Metw.include"><b>EditRemoveSideboard</b></a><br>
</td>
  <td class=toc width="33%"><b>- O -</b></td>
  <td class=toc width="33%"><a href="#text_width:interpreter.cpp"><b>text_width</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#EditRemoveSideboard:Mtg.include"><b>EditRemoveSideboard</b></a><br>
</td>
  <td class=toc width="33%"><a href="#ObjectAt:client.functions"><b>ObjectAt</b></a><br>
</td>
  <td class=toc width="33%"><a href="#Tickets:meta-server.functions"><b>Tickets</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#EndGame:meta-server.functions"><b>EndGame</b></a><br>
</td>
  <td class=toc width="33%"><a href="#ObjectName:server.functions"><b>ObjectName</b></a><br>
</td>
  <td class=toc width="33%"><a href="#TicketsList:meta-server.functions"><b>TicketsList</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#EndGame:Mtg.include"><b>EndGame</b></a><br>
</td>
  <td class=toc width="33%"><a href="#objects:interpreter.cpp"><b>objects</b></a><br>
</td>
  <td class=toc width="33%"><a href="#TicketsOf:meta-server.functions"><b>TicketsOf</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#EndGame:server.functions"><b>EndGame</b></a><br>
</td>
  <td class=toc width="33%"><a href="#object_data:interpreter.cpp"><b>object_data</b></a><br>
</td>
  <td class=toc width="33%"><a href="#time:parser_lib.cpp"><b>time</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#EndGameHook:Metw-meta-server.include"><b>EndGameHook</b></a><br>
</td>
  <td class=toc width="33%"><a href="#object_name:interpreter.cpp"><b>object_name</b></a><br>
</td>
  <td class=toc width="33%"><a href="#Timer15Seconds:client.functions"><b>Timer15Seconds</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#EndGameHook:Mtg-meta-server.include"><b>EndGameHook</b></a><br>
</td>
  <td class=toc width="33%"><a href="#object_type:interpreter.cpp"><b>object_type</b></a><br>
</td>
  <td class=toc width="33%"><a href="#Timer5Seconds:client.functions"><b>Timer5Seconds</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#EndOfTurnHook:Lotr.include"><b>EndOfTurnHook</b></a><br>
</td>
  <td class=toc width="33%"><a href="#ObjH:client.functions"><b>ObjH</b></a><br>
</td>
  <td class=toc width="33%"><a href="#Timer:client.functions"><b>Timer</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#EnsurePriceUpdate:meta-server.functions"><b>EnsurePriceUpdate</b></a><br>
</td>
  <td class=toc width="33%"><a href="#ObjW:client.functions"><b>ObjW</b></a><br>
</td>
  <td class=toc width="33%"><a href="#TimerMinute:client.functions"><b>TimerMinute</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#execute:parser.h"><b>execute</b></a><br>
</td>
  <td class=toc width="33%"><a href="#OpenBoosterMenu:client.functions"><b>OpenBoosterMenu</b></a><br>
</td>
  <td class=toc width="33%"><a href="#title:interpreter.cpp"><b>title</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#ExportASCIIDeck:client.functions"><b>ExportASCIIDeck</b></a><br>
</td>
  <td class=toc width="33%"><a href="#OpponentActiveSetMenu:client.functions"><b>OpponentActiveSetMenu</b></a><br>
</td>
  <td class=toc width="33%"><a href="#tofilename:common.include"><b>tofilename</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#ExportCards:client.functions"><b>ExportCards</b></a><br>
</td>
  <td class=toc width="33%"><a href="#OpponentDeckMenu:client.functions"><b>OpponentDeckMenu</b></a><br>
</td>
  <td class=toc width="33%"><a href="#tofnc:common.include"><b>tofnc</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#ExportDeckMenu:client.functions"><b>ExportDeckMenu</b></a><br>
</td>
  <td class=toc width="33%"><a href="#OpponentDiscardPileMenu:client.functions"><b>OpponentDiscardPileMenu</b></a><br>
</td>
  <td class=toc width="33%"><a href="#ToggleJoinGame:meta-server.functions"><b>ToggleJoinGame</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#ExportGccgDeck:client.functions"><b>ExportGccgDeck</b></a><br>
</td>
  <td class=toc width="33%"><a href="#OpponentHandMenu:client.functions"><b>OpponentHandMenu</b></a><br>
</td>
  <td class=toc width="33%"><a href="#TogglePanel:client.functions"><b>TogglePanel</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#ExportToFile:client.functions"><b>ExportToFile</b></a><br>
</td>
  <td class=toc width="33%"><a href="#OpponentPrizesMenu:Pokemon.include"><b>OpponentPrizesMenu</b></a><br>
</td>
  <td class=toc width="33%"><a href="#toint:parser_lib.cpp"><b>toint</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><b>- F -</b></td>
  <td class=toc width="33%"><a href="#OriToPlr:server.functions"><b>OriToPlr</b></a><br>
</td>
  <td class=toc width="33%"><a href="#TokenSubmenu:Mtg.include"><b>TokenSubmenu</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#filter_mana:Mtg.include"><b>filter_mana</b></a><br>
</td>
  <td class=toc width="33%"><a href="#OriToSvr:server.functions"><b>OriToSvr</b></a><br>
</td>
  <td class=toc width="33%"><a href="#toreal:parser_lib.cpp"><b>toreal</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#find:parser_lib.cpp"><b>find</b></a><br>
</td>
  <td class=toc width="33%"><a href="#OtherDeckFormats:client.functions"><b>OtherDeckFormats</b></a><br>
</td>
  <td class=toc width="33%"><a href="#tostr:parser_lib.cpp"><b>tostr</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#FindCardGroupIndices:client.functions"><b>FindCardGroupIndices</b></a><br>
</td>
  <td class=toc width="33%"><a href="#Owner:client.functions"><b>Owner</b></a><br>
</td>
  <td class=toc width="33%"><a href="#Touch:server.functions"><b>Touch</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#FindCards:client.functions"><b>FindCards</b></a><br>
</td>
  <td class=toc width="33%"><a href="#Owner:server.functions"><b>Owner</b></a><br>
</td>
  <td class=toc width="33%"><a href="#toval:parser_lib.cpp"><b>toval</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#FindOtherCard:client.functions"><b>FindOtherCard</b></a><br>
</td>
  <td class=toc width="33%"><b>- P -</b></td>
  <td class=toc width="33%"><a href="#tr:common.include"><b>tr</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#FindSpace:client.functions"><b>FindSpace</b></a><br>
</td>
  <td class=toc width="33%"><a href="#PanelVisible:client.functions"><b>PanelVisible</b></a><br>
</td>
  <td class=toc width="33%"><a href="#tr:parser_lib.cpp"><b>tr</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#first:parser_lib.cpp"><b>first</b></a><br>
</td>
  <td class=toc width="33%"><a href="#ParentObject:client.functions"><b>ParentObject</b></a><br>
</td>
  <td class=toc width="33%"><a href="#Transfer:server.functions"><b>Transfer</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#FixedSet:factory-server.functions"><b>FixedSet</b></a><br>
</td>
  <td class=toc width="33%"><a href="#Play.Card.Stage1:server.functions"><b>Play.Card.Stage1</b></a><br>
</td>
  <td class=toc width="33%"><a href="#TransferMoney:meta-server.functions"><b>TransferMoney</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#Flash:client.functions"><b>Flash</b></a><br>
</td>
  <td class=toc width="33%"><a href="#Play.Card.Stage2:server.functions"><b>Play.Card.Stage2</b></a><br>
</td>
  <td class=toc width="33%"><a href="#TribalLegal:Mtg-common.include"><b>TribalLegal</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#flatten:parser_lib.cpp"><b>flatten</b></a><br>
</td>
  <td class=toc width="33%"><a href="#Play:client.functions"><b>Play</b></a><br>
</td>
  <td class=toc width="33%"><a href="#trigger:interpreter.cpp"><b>trigger</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#Flip:server.functions"><b>Flip</b></a><br>
</td>
  <td class=toc width="33%"><a href="#PlayCard:client.functions"><b>PlayCard</b></a><br>
</td>
  <td class=toc width="33%"><a href="#trim:parser_lib.cpp"><b>trim</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#forall:parser.h"><b>forall</b></a><br>
</td>
  <td class=toc width="33%"><a href="#PlayCommandDraw:client.functions"><b>PlayCommandDraw</b></a><br>
</td>
  <td class=toc width="33%"><a href="#TrimSpaces:client.functions"><b>TrimSpaces</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#format:parser_lib.cpp"><b>format</b></a><br>
</td>
  <td class=toc width="33%"><a href="#PlayCommandInplay:client.functions"><b>PlayCommandInplay</b></a><br>
</td>
  <td class=toc width="33%"><a href="#TryTransferHook:Lotr.include"><b>TryTransferHook</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#FreeTablePos:client.functions"><b>FreeTablePos</b></a><br>
</td>
  <td class=toc width="33%"><a href="#PlayCommandLegal:client.functions"><b>PlayCommandLegal</b></a><br>
</td>
  <td class=toc width="33%"><a href="#TryTransferHook:Metw.include"><b>TryTransferHook</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#fuzzy:parser_lib.cpp"><b>fuzzy</b></a><br>
</td>
  <td class=toc width="33%"><a href="#PlayCommandLose:client.functions"><b>PlayCommandLose</b></a><br>
</td>
  <td class=toc width="33%"><a href="#TryTransferTo:client.functions"><b>TryTransferTo</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#fuzzy_images:parser_libcards.cpp"><b>fuzzy_images</b></a><br>
</td>
  <td class=toc width="33%"><a href="#PlayCommandOk:client.functions"><b>PlayCommandOk</b></a><br>
</td>
  <td class=toc width="33%"><a href="#TwilightPool:Lotr.include"><b>TwilightPool</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><b>- G -</b></td>
  <td class=toc width="33%"><a href="#PlayCommandUndecided:client.functions"><b>PlayCommandUndecided</b></a><br>
</td>
  <td class=toc width="33%"><a href="#TwilightTokens:Lotr.include"><b>TwilightTokens</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#GameSetup:client.functions"><b>GameSetup</b></a><br>
</td>
  <td class=toc width="33%"><a href="#PlayCommandWin:client.functions"><b>PlayCommandWin</b></a><br>
</td>
  <td class=toc width="33%"><a href="#TypeLegal:Mtg-common.include"><b>TypeLegal</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#game_data:parser_libcards.cpp"><b>game_data</b></a><br>
</td>
  <td class=toc width="33%"><a href="#PlayerName:client.functions"><b>PlayerName</b></a><br>
</td>
  <td class=toc width="33%"><a href="#typeof:parser_lib.cpp"><b>typeof</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#game_option:parser_libcards.cpp"><b>game_option</b></a><br>
</td>
  <td class=toc width="33%"><a href="#PlayerNumber:server.functions"><b>PlayerNumber</b></a><br>
</td>
  <td class=toc width="33%"><a href="#TypeRestricted:Mtg-common.include"><b>TypeRestricted</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#GccgFormatParser:client.functions"><b>GccgFormatParser</b></a><br>
</td>
  <td class=toc width="33%"><a href="#PlayerOrder:server.functions"><b>PlayerOrder</b></a><br>
</td>
  <td class=toc width="33%"><b>- U -</b></td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#GccgFormatSuffix:client.functions"><b>GccgFormatSuffix</b></a><br>
</td>
  <td class=toc width="33%"><a href="#PlayEvent:Lotr.include"><b>PlayEvent</b></a><br>
</td>
  <td class=toc width="33%"><a href="#uc:parser_lib.cpp"><b>uc</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#GeneratePassword:common.include"><b>GeneratePassword</b></a><br>
</td>
  <td class=toc width="33%"><a href="#PlayFromSelectionHook:Metw.include"><b>PlayFromSelectionHook</b></a><br>
</td>
  <td class=toc width="33%"><a href="#ucfirst:parser_lib.cpp"><b>ucfirst</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#GetByPrimaryCategory:client.functions"><b>GetByPrimaryCategory</b></a><br>
</td>
  <td class=toc width="33%"><a href="#PlayInstant:Mtg.include"><b>PlayInstant</b></a><br>
</td>
  <td class=toc width="33%"><a href="#unique:parser_lib.cpp"><b>unique</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#GetGroups:client.functions"><b>GetGroups</b></a><br>
</td>
  <td class=toc width="33%"><a href="#PlayInterrupt:Mtg.include"><b>PlayInterrupt</b></a><br>
</td>
  <td class=toc width="33%"><a href="#UnsetStayTapped:client.functions"><b>UnsetStayTapped</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#get_attr:interpreter.cpp"><b>get_attr</b></a><br>
</td>
  <td class=toc width="33%"><a href="#PlayKeyControlKeyA:client.functions"><b>PlayKeyControlKeyA</b></a><br>
</td>
  <td class=toc width="33%"><a href="#untap:interpreter.cpp"><b>untap</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#get_card_data:server.cpp"><b>get_card_data</b></a><br>
</td>
  <td class=toc width="33%"><a href="#PlayKeyControlKeyA:Lotr.include"><b>PlayKeyControlKeyA</b></a><br>
</td>
  <td class=toc width="33%"><a href="#UntapHook:Metw.include"><b>UntapHook</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#get_lang:parser_lib.cpp"><b>get_lang</b></a><br>
</td>
  <td class=toc width="33%"><a href="#PlayKeyControlKeyD:client.functions"><b>PlayKeyControlKeyD</b></a><br>
</td>
  <td class=toc width="33%"><a href="#UntapHook:Mtg.include"><b>UntapHook</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#get_texts:interpreter.cpp"><b>get_texts</b></a><br>
</td>
  <td class=toc width="33%"><a href="#PlayKeyControlKeyD:Lotr.include"><b>PlayKeyControlKeyD</b></a><br>
</td>
  <td class=toc width="33%"><a href="#untapped:interpreter.cpp"><b>untapped</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#Give:meta-server.functions"><b>Give</b></a><br>
</td>
  <td class=toc width="33%"><a href="#PlayKeyControlKeyDelete:client.functions"><b>PlayKeyControlKeyDelete</b></a><br>
</td>
  <td class=toc width="33%"><a href="#UpdateCard:meta-server.functions"><b>UpdateCard</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#GiveCard:meta-server.functions"><b>GiveCard</b></a><br>
</td>
  <td class=toc width="33%"><a href="#PlayKeyControlKeyDelete:Lotr.include"><b>PlayKeyControlKeyDelete</b></a><br>
</td>
  <td class=toc width="33%"><a href="#UpdatePanel:client.functions"><b>UpdatePanel</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#GiveCardSubmenu:client.functions"><b>GiveCardSubmenu</b></a><br>
</td>
  <td class=toc width="33%"><a href="#PlayKeyControlKeyE:client.functions"><b>PlayKeyControlKeyE</b></a><br>
</td>
  <td class=toc width="33%"><a href="#UpdateProductsPanel:client.functions"><b>UpdateProductsPanel</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#GiveMoney:meta-server.functions"><b>GiveMoney</b></a><br>
</td>
  <td class=toc width="33%"><a href="#PlayKeyControlKeyF:client.functions"><b>PlayKeyControlKeyF</b></a><br>
</td>
  <td class=toc width="33%"><a href="#UploadDeck:server.functions"><b>UploadDeck</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#Group:server.functions"><b>Group</b></a><br>
</td>
  <td class=toc width="33%"><a href="#PlayKeyControlKeyHome:client.functions"><b>PlayKeyControlKeyHome</b></a><br>
</td>
  <td class=toc width="33%"><a href="#User:meta-server.functions"><b>User</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#GroupNumbers:client.functions"><b>GroupNumbers</b></a><br>
</td>
  <td class=toc width="33%"><a href="#PlayKeyControlKeyI:Mtg.include"><b>PlayKeyControlKeyI</b></a><br>
</td>
  <td class=toc width="33%"><a href="#UserWithoutMode:meta-server.functions"><b>UserWithoutMode</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><b>- H -</b></td>
  <td class=toc width="33%"><a href="#PlayKeyControlKeyL:client.functions"><b>PlayKeyControlKeyL</b></a><br>
</td>
  <td class=toc width="33%"><a href="#user_has_cards:server.cpp"><b>user_has_cards</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#h:interpreter.cpp"><b>h</b></a><br>
</td>
  <td class=toc width="33%"><a href="#PlayKeyControlKeyMinus:Metw.include"><b>PlayKeyControlKeyMinus</b></a><br>
</td>
  <td class=toc width="33%"><b>- V -</b></td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#hand:interpreter.cpp"><b>hand</b></a><br>
</td>
  <td class=toc width="33%"><a href="#PlayKeyControlKeyP:client.functions"><b>PlayKeyControlKeyP</b></a><br>
</td>
  <td class=toc width="33%"><a href="#ValidCardNumber:common.include"><b>ValidCardNumber</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#HandleMetaServer:server.functions"><b>HandleMetaServer</b></a><br>
</td>
  <td class=toc width="33%"><a href="#PlayKeyControlKeyPlus:Metw.include"><b>PlayKeyControlKeyPlus</b></a><br>
</td>
  <td class=toc width="33%"><a href="#ValidMode:common.include"><b>ValidMode</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#HandlePriceInput:client.functions"><b>HandlePriceInput</b></a><br>
</td>
  <td class=toc width="33%"><a href="#PlayKeyControlKeyS:client.functions"><b>PlayKeyControlKeyS</b></a><br>
</td>
  <td class=toc width="33%"><a href="#ValidUsername:common.include"><b>ValidUsername</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#HandMenu:client.functions"><b>HandMenu</b></a><br>
</td>
  <td class=toc width="33%"><a href="#PlayKeyControlKeyT:client.functions"><b>PlayKeyControlKeyT</b></a><br>
</td>
  <td class=toc width="33%"><a href="#valueof:parser.h"><b>valueof</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#HandPos:server.functions"><b>HandPos</b></a><br>
</td>
  <td class=toc width="33%"><a href="#PlayKeyControlKeyU:client.functions"><b>PlayKeyControlKeyU</b></a><br>
</td>
  <td class=toc width="33%"><a href="#values:parser_lib.cpp"><b>values</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#HashComments:client.functions"><b>HashComments</b></a><br>
</td>
  <td class=toc width="33%"><a href="#PlayKeyControlKeyU:Lotr.include"><b>PlayKeyControlKeyU</b></a><br>
</td>
  <td class=toc width="33%"><a href="#vardump:parser.h"><b>vardump</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#has_entry:parser_lib.cpp"><b>has_entry</b></a><br>
</td>
  <td class=toc width="33%"><a href="#PlayKeyDelete:client.functions"><b>PlayKeyDelete</b></a><br>
</td>
  <td class=toc width="33%"><a href="#Verb:server.functions"><b>Verb</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#has_text:interpreter.cpp"><b>has_text</b></a><br>
</td>
  <td class=toc width="33%"><a href="#PlayKeyEnd:client.functions"><b>PlayKeyEnd</b></a><br>
</td>
  <td class=toc width="33%"><a href="#VersionCompare:common.include"><b>VersionCompare</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#HaveList:client.functions"><b>HaveList</b></a><br>
</td>
  <td class=toc width="33%"><a href="#PlayKeyEnter:Metw.include"><b>PlayKeyEnter</b></a><br>
</td>
  <td class=toc width="33%"><b>- W -</b></td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#have_list:server.cpp"><b>have_list</b></a><br>
</td>
  <td class=toc width="33%"><a href="#PlayKeyHome:client.functions"><b>PlayKeyHome</b></a><br>
</td>
  <td class=toc width="33%"><a href="#w:interpreter.cpp"><b>w</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#having_rarity:parser_libcards.cpp"><b>having_rarity</b></a><br>
</td>
  <td class=toc width="33%"><a href="#PlayKeyInsert:client.functions"><b>PlayKeyInsert</b></a><br>
</td>
  <td class=toc width="33%"><a href="#WaitMetaEvents:server.functions"><b>WaitMetaEvents</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#head:parser_lib.cpp"><b>head</b></a><br>
</td>
  <td class=toc width="33%"><a href="#PlayMapMenu:Metw.include"><b>PlayMapMenu</b></a><br>
</td>
  <td class=toc width="33%"><a href="#WantList:client.functions"><b>WantList</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#HidePanel:client.functions"><b>HidePanel</b></a><br>
</td>
  <td class=toc width="33%"><a href="#PlayPoolMenu:Metw.include"><b>PlayPoolMenu</b></a><br>
</td>
  <td class=toc width="33%"><a href="#want_list:server.cpp"><b>want_list</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#HidePlaymat:client.functions"><b>HidePlaymat</b></a><br>
</td>
  <td class=toc width="33%"><a href="#PlaySideboardMenu:Metw.include"><b>PlaySideboardMenu</b></a><br>
</td>
  <td class=toc width="33%"><a href="#WatchActiveSetMenu:client.functions"><b>WatchActiveSetMenu</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><b>- I -</b></td>
  <td class=toc width="33%"><a href="#PlaySideboardMenu:Mtg.include"><b>PlaySideboardMenu</b></a><br>
</td>
  <td class=toc width="33%"><a href="#WatchCardMenu:client.functions"><b>WatchCardMenu</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#Image:server.functions"><b>Image</b></a><br>
</td>
  <td class=toc width="33%"><a href="#PlaySite:Lotr.include"><b>PlaySite</b></a><br>
</td>
  <td class=toc width="33%"><a href="#WatchCommandInplay:client.functions"><b>WatchCommandInplay</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#images:parser_libcards.cpp"><b>images</b></a><br>
</td>
  <td class=toc width="33%"><a href="#PlaySiteFromSelection:Metw.include"><b>PlaySiteFromSelection</b></a><br>
</td>
  <td class=toc width="33%"><a href="#WatchCommandNewdeck:client.functions"><b>WatchCommandNewdeck</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#image_height:interpreter.cpp"><b>image_height</b></a><br>
</td>
  <td class=toc width="33%"><a href="#PlaySitesMenu:Lotr.include"><b>PlaySitesMenu</b></a><br>
</td>
  <td class=toc width="33%"><a href="#WatchCommandRd:client.functions"><b>WatchCommandRd</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#image_pixel:interpreter.cpp"><b>image_pixel</b></a><br>
</td>
  <td class=toc width="33%"><a href="#PlaySitesMenu:Metw.include"><b>PlaySitesMenu</b></a><br>
</td>
  <td class=toc width="33%"><a href="#WatchDeckMenu:client.functions"><b>WatchDeckMenu</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#image_width:interpreter.cpp"><b>image_width</b></a><br>
</td>
  <td class=toc width="33%"><a href="#PlaySorcery:Mtg.include"><b>PlaySorcery</b></a><br>
</td>
  <td class=toc width="33%"><a href="#WatchDeckSearchBoxMenu:client.functions"><b>WatchDeckSearchBoxMenu</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#ImportAdd:client.functions"><b>ImportAdd</b></a><br>
</td>
  <td class=toc width="33%"><a href="#PlayTrainer:Pokemon.include"><b>PlayTrainer</b></a><br>
</td>
  <td class=toc width="33%"><a href="#WatchDiscardPileMenu:client.functions"><b>WatchDiscardPileMenu</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#ImportASCIIDeck:client.functions"><b>ImportASCIIDeck</b></a><br>
</td>
  <td class=toc width="33%"><a href="#PlayTwilightPoolMenu:Lotr.include"><b>PlayTwilightPoolMenu</b></a><br>
</td>
  <td class=toc width="33%"><a href="#WatcherSay:server.functions"><b>WatcherSay</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#ImportDeck:client.functions"><b>ImportDeck</b></a><br>
</td>
  <td class=toc width="33%"><a href="#Plr2Con:server.functions"><b>Plr2Con</b></a><br>
</td>
  <td class=toc width="33%"><a href="#WatchHandMenu:client.functions"><b>WatchHandMenu</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#ImportDeckFormat:client.functions"><b>ImportDeckFormat</b></a><br>
</td>
  <td class=toc width="33%"><a href="#PoolSearchBoxMenuHook:Metw.include"><b>PoolSearchBoxMenuHook</b></a><br>
</td>
  <td class=toc width="33%"><a href="#WatchKeyControlKeyD:client.functions"><b>WatchKeyControlKeyD</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#ImportDeckMenu:client.functions"><b>ImportDeckMenu</b></a><br>
</td>
  <td class=toc width="33%"><a href="#pop:parser.h"><b>pop</b></a><br>
</td>
  <td class=toc width="33%"><a href="#WatchKeyControlKeyE:client.functions"><b>WatchKeyControlKeyE</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#ImportDeckMenuEntry:client.functions"><b>ImportDeckMenuEntry</b></a><br>
</td>
  <td class=toc width="33%"><a href="#Positions:client.functions"><b>Positions</b></a><br>
</td>
  <td class=toc width="33%"><a href="#WatchKeyControlKeyI:client.functions"><b>WatchKeyControlKeyI</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#ImportErrorAdd:client.functions"><b>ImportErrorAdd</b></a><br>
</td>
  <td class=toc width="33%"><a href="#PressKey:client.functions"><b>PressKey</b></a><br>
</td>
  <td class=toc width="33%"><a href="#WatchKeyControlKeyS:client.functions"><b>WatchKeyControlKeyS</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#ImportGccgDeck:client.functions"><b>ImportGccgDeck</b></a><br>
</td>
  <td class=toc width="33%"><a href="#PriceDelta:client.functions"><b>PriceDelta</b></a><br>
</td>
  <td class=toc width="33%"><a href="#WatchKeyControlKeyW:client.functions"><b>WatchKeyControlKeyW</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#ImportReaderLineByLine:client.functions"><b>ImportReaderLineByLine</b></a><br>
</td>
  <td class=toc width="33%"><a href="#price_list:server.cpp"><b>price_list</b></a><br>
</td>
  <td class=toc width="33%"><a href="#WatchKeyControlKeyX:client.functions"><b>WatchKeyControlKeyX</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#index:parser_lib.cpp"><b>index</b></a><br>
</td>
  <td class=toc width="33%"><a href="#print:parser_lib.cpp"><b>print</b></a><br>
</td>
  <td class=toc width="33%"><a href="#WatchOpponentDeckMenu:client.functions"><b>WatchOpponentDeckMenu</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#InitDistributions:Lotr-factory-server.include"><b>InitDistributions</b></a><br>
</td>
  <td class=toc width="33%"><a href="#println:parser_lib.cpp"><b>println</b></a><br>
</td>
  <td class=toc width="33%"><a href="#WatchOpponentDiscardPileMenu:client.functions"><b>WatchOpponentDiscardPileMenu</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#InitDistributions:Metw-factory-server.include"><b>InitDistributions</b></a><br>
</td>
  <td class=toc width="33%"><a href="#PrizeForDraw:meta-server.functions"><b>PrizeForDraw</b></a><br>
</td>
  <td class=toc width="33%"><a href="#WatchOpponentHandMenu:client.functions"><b>WatchOpponentHandMenu</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#InitDistributions:Mtg-factory-server.include"><b>InitDistributions</b></a><br>
</td>
  <td class=toc width="33%"><a href="#PrizeForLoss:meta-server.functions"><b>PrizeForLoss</b></a><br>
</td>
  <td class=toc width="33%"><a href="#WeStartedGame:meta-server.functions"><b>WeStartedGame</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#InitDistributions:Pokemon-factory-server.include"><b>InitDistributions</b></a><br>
</td>
  <td class=toc width="33%"><a href="#PrizeForWin:meta-server.functions"><b>PrizeForWin</b></a><br>
</td>
  <td class=toc width="33%"><a href="#wr:common.include"><b>wr</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#Initialize:client.functions"><b>Initialize</b></a><br>
</td>
  <td class=toc width="33%"><a href="#PrizesMenu:Pokemon.include"><b>PrizesMenu</b></a><br>
</td>
  <td class=toc width="33%"><a href="#write_file:parser_lib.cpp"><b>write_file</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#Initialize:factory-server.functions"><b>Initialize</b></a><br>
</td>
  <td class=toc width="33%"><a href="#Produce:factory-server.functions"><b>Produce</b></a><br>
</td>
  <td class=toc width="33%"><b>- _ -</b></td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#InitializeConnection:client.functions"><b>InitializeConnection</b></a><br>
</td>
  <td class=toc width="33%"><a href="#ProduceBE_Booster:Mtg-factory-server.include"><b>ProduceBE_Booster</b></a><br>
</td>
  <td class=toc width="33%"><a href="#_EndGame:client.functions"><b>_EndGame</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#InitializeGame:Lotr.include"><b>InitializeGame</b></a><br>
</td>
  <td class=toc width="33%"><a href="#ProduceBE_Starter:Mtg-factory-server.include"><b>ProduceBE_Starter</b></a><br>
</td>
  <td class=toc width="33%"><a href="#_InitializeGame:client.functions"><b>_InitializeGame</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#InitializeGame:Metw.include"><b>InitializeGame</b></a><br>
</td>
  <td class=toc width="33%"><a href="#ProduceBooster:Pokemon-factory-server.include"><b>ProduceBooster</b></a><br>
</td>
  <td class=toc width="33%"><a href="#_StartGame:client.functions"><b>_StartGame</b></a><br>
</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#InitializeGame:Mtg.include"><b>InitializeGame</b></a><br>
</td>
  <td class=toc width="33%"><a href="#ProduceLE_Starter:Metw-factory-server.include"><b>ProduceLE_Starter</b></a><br>
</td>
  <td class=toc width="33%">(1138 functions)</td>
 </tr>
 <tr class=toc>
  <td class=toc width="33%"><a href="#InitializeGame:Pokemon.include"><b>InitializeGame</b></a><br>
</td>
  <td class=toc width="33%"><a href="#ProduceTW_Starter:Metw-factory-server.include"><b>ProduceTW_Starter</b></a><br>
</td>
  <td class=toc width="33%">&nbsp;</td>
 </tr>
</table>
</p>
<h2>Common client and server functions</h2>
<a name="abs:common.include">
<p class=func>
  <b class=functitle>def abs(<em>x</em>)</b><br>
<em>Category: Common client and server functions</em><br>
<em>File: common.include</em><br>
  Return absolute value of x.
</p>

<a name="age:common.include">
<p class=func>
  <b class=functitle>def age(<em>set</em>)</b><br>
<em>Category: Common client and server functions</em><br>
<em>File: common.include</em><br>
  Workaround for binaries not having age().
</p>

<a name="book_set_slot:common.include">
<p class=func>
  <b class=functitle>def book_set_slot(<em>set</em>)</b><br>
<em>Category: Common client and server functions</em><br>
<em>File: common.include</em><br>
  Workaround for binaries not having book<sub>s</sub>et<sub>s</sub>lot().
</p>

<a name="CountCards:common.include">
<p class=func>
  <b class=functitle>def CountCards(<em>list of card numbers</em>)</b><br>
<em>Category: Common client and server functions</em><br>
<em>File: common.include</em><br>
  Return list of pairs (card number,nmb.of card).
</p>

<a name="DataPath:common.include">
<p class=func>
  <b class=functitle>def DataPath(<em>section</em>)</b><br>
<em>Category: Common client and server functions</em><br>
<em>File: common.include</em><br>
  Return directory containing Gccg data for section.
</p>

<a name="del:common.include">
<p class=func>
  <b class=functitle>def del(<em>e</em>, <em>L</em>)</b><br>
<em>Category: Common client and server functions</em><br>
<em>File: common.include</em><br>
  Remove one instance of element e from the list L and return remaining list.
</p>

<a name="dist:common.include">
<p class=func>
  <b class=functitle>def dist(<em>(x1</em>, <em>y1)</em>, <em>(x2</em>, <em>y2)</em>)</b><br>
<em>Category: Common client and server functions</em><br>
<em>File: common.include</em><br>
  Compute the square of the distance between (x1,y1) and (x2,y2).
</p>

<a name="GeneratePassword:common.include">
<p class=func>
  <b class=functitle>def GeneratePassword()</b><br>
<em>Category: Common client and server functions</em><br>
<em>File: common.include</em><br>
  Return randomly generated string.
</p>

<a name="isreal:common.include">
<p class=func>
  <b class=functitle>def isreal(<em>d</em>)</b><br>
<em>Category: Common client and server functions</em><br>
<em>File: common.include</em><br>
  Return 1 if string d represents a real number.
</p>

<a name="LegalityCheckDeck:common.include">
<p class=func>
  <b class=functitle>def LegalityCheckDeck(<em>deck</em>)</b><br>
<em>Category: Common client and server functions</em><br>
<em>File: common.include</em><br>
  Return the list of rulesets to which deck mathces.
</p>

<a name="LegalityCheckRule:common.include">
<p class=func>
  <b class=functitle>def LegalityCheckRule(<em>(rule name</em>, <em>parameters)</em>, <em>deck part</em>, <em>list of cards</em>)</b><br>
<em>Category: Common client and server functions</em><br>
<em>File: common.include</em><br>
  Evaluate one rule for the given deck part.
</p>

<a name="LegalityCheckRules:common.include">
<p class=func>
  <b class=functitle>def LegalityCheckRules(<em>rules</em>, <em>part name</em>, <em>list of cards</em>)</b><br>
<em>Category: Common client and server functions</em><br>
<em>File: common.include</em><br>
  Apply all rules in the rules list to the list of cards. Return 1 if the list of cards is valid, 0 otherwise.
</p>

<a name="LegalityCheckRuleset:common.include">
<p class=func>
  <b class=functitle>def LegalityCheckRuleset(<em>ruleset name</em>, <em>deck</em>)</b><br>
<em>Category: Common client and server functions</em><br>
<em>File: common.include</em><br>
  Return 1 if a deck matches the given ruleset. If the ruleset name is "" collect all deckparts together before check, otherwise just single part is checked.
</p>

<a name="listjoin:common.include">
<p class=func>
  <b class=functitle>def listjoin(<em>L</em>, <em>e</em>)</b><br>
<em>Category: Common client and server functions</em><br>
<em>File: common.include</em><br>
  Join elements of the list L to the new list by inserting an element e between each member of the list L.
</p>

<a name="MyPath:common.include">
<p class=func>
  <b class=functitle>def MyPath()</b><br>
<em>Category: Common client and server functions</em><br>
<em>File: common.include</em><br>
  Return my personal Gccg directory for the current game.
</p>

<a name="round:common.include">
<p class=func>
  <b class=functitle>def round(<em>n</em>, <em>d</em>)</b><br>
<em>Category: Common client and server functions</em><br>
<em>File: common.include</em><br>
  Round a number to d decimals.
</p>

<a name="RuleCanonicalCardLimitSingle:common.include">
<p class=func>
  <b class=functitle>def RuleCanonicalCardLimitSingle(<em>(card name</em>, <em> limit)</em>, <em> list of cards</em>)</b><br>
<em>Category: Common client and server functions</em><br>
<em>File: common.include</em><br>
  Check limit and remove cards by canonical name.
</p>

<a name="RuleCardLimitAny:common.include">
<p class=func>
  <b class=functitle>def RuleCardLimitAny(<em>card name</em>, <em> list of cards</em>)</b><br>
<em>Category: Common client and server functions</em><br>
<em>File: common.include</em><br>
  Remove all cards by name.
</p>

<a name="RuleCardLimitGeneral:common.include">
<p class=func>
  <b class=functitle>def RuleCardLimitGeneral(<em>limit</em>, <em> list of cards</em>)</b><br>
<em>Category: Common client and server functions</em><br>
<em>File: common.include</em><br>
  Check the limit and remove cards with the given name and report errors.
</p>

<a name="RuleCardLimitSingle:common.include">
<p class=func>
  <b class=functitle>def RuleCardLimitSingle(<em>(card name</em>, <em> limit)</em>, <em> list of cards</em>)</b><br>
<em>Category: Common client and server functions</em><br>
<em>File: common.include</em><br>
  Check limit and remove cards by name.
</p>

<a name="RuleCardSet:common.include">
<p class=func>
  <b class=functitle>def RuleCardSet(<em>(set abbrev</em>, <em>limit)</em>, <em> list of cards</em>)</b><br>
<em>Category: Common client and server functions</em><br>
<em>File: common.include</em><br>
  Check the number of cards belonging to the set.
</p>

<a name="RuleCardSetReprint:common.include">
<p class=func>
  <b class=functitle>def RuleCardSetReprint(<em>(set abbrev</em>, <em>limit)</em>, <em> list of cards</em>)</b><br>
<em>Category: Common client and server functions</em><br>
<em>File: common.include</em><br>
  Check the number of cards belonging to the set including cards with the same name.
</p>

<a name="RuleCheckExpression:common.include">
<p class=func>
  <b class=functitle>def RuleCheckExpression(<em>(description</em>, <em> expression)</em>, <em>list of cards</em>)</b><br>
<em>Category: Common client and server functions</em><br>
<em>File: common.include</em><br>
  Evaluate expression by subtituting card list to # and report description if failed.
</p>

<a name="RuleDeckMaximum:common.include">
<p class=func>
  <b class=functitle>def RuleDeckMaximum(<em>max</em>, <em> list of cards</em>)</b><br>
<em>Category: Common client and server functions</em><br>
<em>File: common.include</em><br>
  Return card list, but report error if more than maximum.
</p>

<a name="RuleDeckMinimum:common.include">
<p class=func>
  <b class=functitle>def RuleDeckMinimum(<em>min</em>, <em> list of cards</em>)</b><br>
<em>Category: Common client and server functions</em><br>
<em>File: common.include</em><br>
  Return card list, but report error if less than minimum.
</p>

<a name="RuleDeckSizes:common.include">
<p class=func>
  <b class=functitle>def RuleDeckSizes(<em>list of allowed sizes</em>, <em> list of cards</em>)</b><br>
<em>Category: Common client and server functions</em><br>
<em>File: common.include</em><br>
  Return card list, but report error if size is not in the list of allowed sizes.
</p>

<a name="RuleLimitByExpression:common.include">
<p class=func>
  <b class=functitle>def RuleLimitByExpression(<em>(limit</em>, <em>expression)</em>, <em>list of cards</em>)</b><br>
<em>Category: Common client and server functions</em><br>
<em>File: common.include</em><br>
  Limit total number of card satisfying the expression and remove them.
</p>

<a name="RuleLimitEachByExpression:common.include">
<p class=func>
  <b class=functitle>def RuleLimitEachByExpression(<em>(limit</em>, <em>expression)</em>, <em>list of cards</em>)</b><br>
<em>Category: Common client and server functions</em><br>
<em>File: common.include</em><br>
  Limit each card satisfying the expression and remove them.
</p>

<a name="RulePass:common.include">
<p class=func>
  <b class=functitle>def RulePass()</b><br>
<em>Category: Common client and server functions</em><br>
<em>File: common.include</em><br>
  Catch all rule, return empty list.
</p>

<a name="RuleViolation:common.include">
<p class=func>
  <b class=functitle>def RuleViolation(<em>reason</em>)</b><br>
<em>Category: Common client and server functions</em><br>
<em>File: common.include</em><br>
  Store deck rule violation message.
</p>

<a name="SavePath:common.include">
<p class=func>
  <b class=functitle>def SavePath()</b><br>
<em>Category: Common client and server functions</em><br>
<em>File: common.include</em><br>
  Return directory for (server) saves.
</p>

<a name="sort_fn:common.include">
<p class=func>
  <b class=functitle>def sort_fn(<em>set</em>)</b><br>
<em>Category: Common client and server functions</em><br>
<em>File: common.include</em><br>
  Workaround for binaries not having sort<sub>f</sub>n().
</p>

<a name="strreplace:common.include">
<p class=func>
  <b class=functitle>def strreplace(<em>s</em>, <em>a</em>, <em>b</em>)</b><br>
<em>Category: Common client and server functions</em><br>
<em>File: common.include</em><br>
  Replace all instances of a in string s with b. Also in C++.
</p>

<a name="sum:common.include">
<p class=func>
  <b class=functitle>def sum(<em>e<sub>1</sub></em>, ..., <em>e<sub>n</sub></em>)</b><br>
<em>Category: Common client and server functions</em><br>
<em>File: common.include</em><br>
  Return sum of arguments.
</p>

<a name="tofilename:common.include">
<p class=func>
  <b class=functitle>def tofilename(<em>text</em>)</b><br>
<em>Category: Common client and server functions</em><br>
<em>File: common.include</em><br>
  Convert a text to valid filename.
</p>

<a name="tofnc:common.include">
<p class=func>
  <b class=functitle>def tofnc(<em>text</em>)</b><br>
<em>Category: Common client and server functions</em><br>
<em>File: common.include</em><br>
  Convert a text to valid function name.
</p>

<a name="tr:common.include">
<p class=func>
  <b class=functitle>def tr(<em>s</em>, <em>a</em>, <em>b</em>)</b><br>
<em>Category: Common client and server functions</em><br>
<em>File: common.include</em><br>
  Replace every character in string a found from string s with b. Also in C++.
</p>

<a name="ValidCardNumber:common.include">
<p class=func>
  <b class=functitle>def ValidCardNumber(<em>number</em>)</b><br>
<em>Category: Common client and server functions</em><br>
<em>File: common.include</em><br>
  Return 1 if the number is valid cardnumber and presents real card.
</p>

<a name="ValidMode:common.include">
<p class=func>
  <b class=functitle>def ValidMode(<em>mode</em>)</b><br>
<em>Category: Common client and server functions</em><br>
<em>File: common.include</em><br>
  Return 1 if mode is valid.
</p>

<a name="ValidUsername:common.include">
<p class=func>
  <b class=functitle>def ValidUsername(<em>name</em>)</b><br>
<em>Category: Common client and server functions</em><br>
<em>File: common.include</em><br>
  Return 1 if name is valid as a username.
</p>

<a name="VersionCompare:common.include">
<p class=func>
  <b class=functitle>def VersionCompare(<em>ver1</em>, <em>ver2</em>)</b><br>
<em>Category: Common client and server functions</em><br>
<em>File: common.include</em><br>
  Return 1 if version ver1 is older than ver2.
</p>

<a name="wr:common.include">
<p class=func>
  <b class=functitle>def wr(<em>e</em>)</b><br>
<em>Category: Common client and server functions</em><br>
<em>File: common.include</em><br>
  Write expression literally to stdout.
</p>

<h2>Core functions (C++)</h2>
<a name="apply:parser.h">
<p class=func>
  <b class=functitle>def apply(<em>f</em>, <em>L</em>)</b><br>
<em>Category: Core functions (C++)</em><br>
<em>File: parser.h</em><br>
  Call a function <em>f</em> once for each argument in the list <em>L</em>. Return list of return values of each call.
</p>

<a name="array:parser_lib.cpp">
<p class=func>
  <b class=functitle>def array(<em>d<sub>1</sub></em>, ..., <em>d<sub>n</sub></em>)</b><br>
<em>Category: Core functions (C++)</em><br>
<em>File: parser_lib.cpp</em><br>
  This function creates list of lists structure which is suitable for array like indexing. Dimension of the array is <em>n</em> and each d<sub>i</sub> denotes the size of the <em>i</em>th dimension of the array. Initial values of the list are <tt>NULL</tt>.
</p>

<a name="attach:parser.h">
<p class=func>
  <b class=functitle>def attach(<em>v</em>, <em>t</em>)</b><br>
<em>Category: Core functions (C++)</em><br>
<em>File: parser.h</em><br>
  Attach a variable 'v' to the disk database. If the database does not exist yet, then current value of the variable 'v' is taken as initial content for the database having type t. Supportet types are now "DBSingleFile" and "DBStringKeys". After that, each change in the value of variable 'v' is stored to the disk automatically. If the database exist already, then old value of the variable 'v' is ignored and the database is used instead.
</p>

<a name="cache_parameters:parser.h">
<p class=func>
  <b class=functitle>def cache_parameters(<em>var</em>, <em>(p1</em>, <em>p2</em>, <em>p3)</em>)</b><br>
<em>Category: Core functions (C++)</em><br>
<em>File: parser.h</em><br>
  If only a variable name is given, return the list containing current cache parameters for that database variable. If a list of parameters is also given, set parameters and return earlier settings. Parameters are p1 - cache refresh rate in seconds, p2 - mininmum age before disk write in seconds, p3 - maximum number of entries to write at one update. A negative value can be given in order to leave a parameter unchanged.
</p>

<a name="call:parser.h">
<p class=func>
  <b class=functitle>def call(<em>f</em>, <em>e</em>)</b><br>
<em>Category: Core functions (C++)</em><br>
<em>File: parser.h</em><br>
  Call function <em>f</em> given as a string with arguments <em>e</em>.
</p>

<a name="copy:parser_lib.cpp">
<p class=func>
  <b class=functitle>def copy(<em>e</em>, <em>n</em>)</b><br>
<em>Category: Core functions (C++)</em><br>
<em>File: parser_lib.cpp</em><br>
  Create a list with element <em>e</em> repeated n times. If <em>n<= 0</em>, return empty list. Return <tt>NULL</tt>, if arguments are invalid.
</p>

<a name="count:parser_lib.cpp">
<p class=func>
  <b class=functitle>def count(<em>e</em>, <em>L</em>)</b><br>
<em>Category: Core functions (C++)</em><br>
<em>File: parser_lib.cpp</em><br>
  Count number of elements <em>e</em> in list <em>L</em>.
</p>

<a name="current_time:parser_lib.cpp">
<p class=func>
  <b class=functitle>def current_time()</b><br>
<em>Category: Core functions (C++)</em><br>
<em>File: parser_lib.cpp</em><br>
  Return the time in seconds since the Epoch as real number.
</p>

<a name="date:parser_lib.cpp">
<p class=func>
  <b class=functitle>def date()</b><br>
<em>Category: Core functions (C++)</em><br>
<em>File: parser_lib.cpp</em><br>
  Return current day in <tt>%d.%m.%y</tt> format.
</p>

<a name="delsaved:parser.h">
<p class=func>
  <b class=functitle>def delsaved(<em>s</em>)</b><br>
<em>Category: Core functions (C++)</em><br>
<em>File: parser.h</em><br>
  Remove a file where variable 's' is saved. Return 1 if file exist and is succesfully removed.
</p>

<a name="del_entry:parser.h">
<p class=func>
  <b class=functitle>def del_entry(<em>e</em>, <em>L</em>)</b><br>
<em>Category: Core functions (C++)</em><br>
<em>File: parser.h</em><br>
  If <em>L</em> is a list of pairs (i.e.dictionary), delete all elements whose first component is e. If <em>L</em> is a string delete entry from directly from parser the variable and return 1 if successful.
</p>

<a name="diff_time:parser_lib.cpp">
<p class=func>
  <b class=functitle>def diff_time(<em>t1</em>, <em>t2</em>)</b><br>
<em>Category: Core functions (C++)</em><br>
<em>File: parser_lib.cpp</em><br>
  Return the time difference from the moment <em>t2</em> to the moment t1 given as seconds (since the Epoch). The return value is a quadruple (d,h,m,s), where d is the number of days, h is the number of hours, <em>m</em> is the number of minutes and s is the number of seconds. All return values are negative if the moment t2 is after the moment <em>t1</em>.
</p>

<a name="execute:parser.h">
<p class=func>
  <b class=functitle>def execute(<em>f</em>)</b><br>
<em>Category: Core functions (C++)</em><br>
<em>File: parser.h</em><br>
  Run script at a file <em>f</em> and return 1, if the file exists. Throw fatal exception, if the security manager is enabled and the file is not declared as a safe in the program binary.
</p>

<a name="find:parser_lib.cpp">
<p class=func>
  <b class=functitle>def find(<em>e</em>, <em>L</em>)</b><br>
<em>Category: Core functions (C++)</em><br>
<em>File: parser_lib.cpp</em><br>
  Return index of the first instance of element <em>e</em> in a list L or <tt>NULL</tt> if not found. Alternatively find the starting position of the first instance of substring e in a string <em>L</em>.
</p>

<a name="first:parser_lib.cpp">
<p class=func>
  <b class=functitle>def first(<em>L</em>)</b><br>
<em>Category: Core functions (C++)</em><br>
<em>File: parser_lib.cpp</em><br>
  If <em>L</em> is a non-empty list, return the first element of the list. If it is a string, return the first character as a string. Otherwise <tt>NULL</tt>.
</p>

<a name="flatten:parser_lib.cpp">
<p class=func>
  <b class=functitle>def flatten(<em>L</em>)</b><br>
<em>Category: Core functions (C++)</em><br>
<em>File: parser_lib.cpp</em><br>
  If <em>L</em> is not a list, return a list containing <em>L</em> as an element. Otherwise destroy sublist structures and leave elements untouched.
</p>

<a name="forall:parser.h">
<p class=func>
  <b class=functitle>def forall(<em>s</em>, <em>e<sub>1</sub></em>, ..., <em>e<sub>n</sub></em>)</b><br>
<em>Category: Core functions (C++)</em><br>
<em>File: parser.h</em><br>
  Evaluate string <em>s</em> once for each e<sub>1</sub>,...,e<sub>n</sub> substituting value of each e<sub>i</sub> in the place of the first <tt>#</tt> character in s. Return the list of results. If n=1 and e<sub>1</sub> is a list, substitute each value of the list <em>e<sub>1</sub></em>.
</p>

<a name="format:parser_lib.cpp">
<p class=func>
  <b class=functitle>def format(<em>f</em>, <em>e</em>)</b><br>
<em>Category: Core functions (C++)</em><br>
<em>File: parser_lib.cpp</em><br>
  Return C-printf formatted string of a real number <em>f</em>.
</p>

<a name="fuzzy:parser_lib.cpp">
<p class=func>
  <b class=functitle>def fuzzy(<em>s</em>)</b><br>
<em>Category: Core functions (C++)</em><br>
<em>File: parser_lib.cpp</em><br>
  Remove all accents from letters and drop spaces and special characters.
</p>

<a name="get_lang:parser_lib.cpp">
<p class=func>
  <b class=functitle>def get_lang()</b><br>
<em>Category: Core functions (C++)</em><br>
<em>File: parser_lib.cpp</em><br>
  Return current localization language.
</p>

<a name="has_entry:parser_lib.cpp">
<p class=func>
  <b class=functitle>def has_entry(<em>e</em>, <em>L</em>)</b><br>
<em>Category: Core functions (C++)</em><br>
<em>File: parser_lib.cpp</em><br>
  Return 1 if dictionary <em>L</em> has member e, 0 otherwise. Throw exception, if <em>L</em> is not a dictionary.
</p>

<a name="head:parser_lib.cpp">
<p class=func>
  <b class=functitle>def head(<em>L</em>)</b><br>
<em>Category: Core functions (C++)</em><br>
<em>File: parser_lib.cpp</em><br>
  Return all member of the list <em>L</em> except the last. If L have one or zero members, return empty list. If <em>L</em> is not a list, return <tt>NULL</tt>.
</p>

<a name="index:parser_lib.cpp">
<p class=func>
  <b class=functitle>def index(<em>L<sub>1</sub></em>, <em>L<sub>2</sub></em>)</b><br>
<em>Category: Core functions (C++)</em><br>
<em>File: parser_lib.cpp</em><br>
  Select members of list <em>L<sub>1</sub></em> using list L<sub>2</sub> as index. If any member i of L<sub>2</sub> is not integer or i &lt; 0 or i => |L<sub>1</sub>|, error is thrown. The resulting list has the same number of elements as L<sub>2</sub>, each element corresponding to indexing member in <em>L<sub>2</sub></em>.
</p>

<a name="isdict:parser_lib.cpp">
<p class=func>
  <b class=functitle>def isdict(<em>L</em>)</b><br>
<em>Category: Core functions (C++)</em><br>
<em>File: parser_lib.cpp</em><br>
  Return 1 if L is a dictionary.
</p>

<a name="isfunction:parser.h">
<p class=func>
  <b class=functitle>def isfunction(<em>s</em>)</b><br>
<em>Category: Core functions (C++)</em><br>
<em>File: parser.h</em><br>
  Return 1 if <em>s</em> is user defined function, 2 if s is library function, 3 if s is internal parser function, 4 if s is application defined function, 5 if <em>s</em> is a special function and 0 if there is no such function.
</p>

<a name="isvar:parser.h">
<p class=func>
  <b class=functitle>def isvar(<em>s</em>)</b><br>
<em>Category: Core functions (C++)</em><br>
<em>File: parser.h</em><br>
  Return 1 if a string <em>s</em> name of the defined varible.
</p>

<a name="join:parser_lib.cpp">
<p class=func>
  <b class=functitle>def join(<em>e</em>, <em>s</em>)</b><br>
<em>Category: Core functions (C++)</em><br>
<em>File: parser_lib.cpp</em><br>
  If <em>e</em> is a list of strings and s is not given, concatenate the strings together and return the resulting string. With s, add a string <em>s</em> between list members.
</p>

<a name="joker_match:parser_lib.cpp">
<p class=func>
  <b class=functitle>def joker_match(<em>p</em>, <em>s</em>)</b><br>
<em>Category: Core functions (C++)</em><br>
<em>File: parser_lib.cpp</em><br>
  Return 1 if string s matches to joker pattern p. If a list of strings is given instead of a single string, then each maching string is returned.
</p>

<a name="keys:parser.h">
<p class=func>
  <b class=functitle>def keys(<em>D</em>)</b><br>
<em>Category: Core functions (C++)</em><br>
<em>File: parser.h</em><br>
  Return list of key elements of dictionary <em>D</em> or throw error if D is not a dictionary. This functions also returns list of first elements of list containing only pairs. If <em>D</em> is given as a string, the parser variable with that name is accessed directly. This is much faster escpecially with file databases.
</p>

<a name="L:parser_lib.cpp">
<p class=func>
  <b class=functitle>def L(<em>msg</em>, <em>[arg1]</em>, <em>[arg2]</em>)</b><br>
<em>Category: Core functions (C++)</em><br>
<em>File: parser_lib.cpp</em><br>
  Localize a message.
</p>

<a name="languages:parser_lib.cpp">
<p class=func>
  <b class=functitle>def languages(<em>code</em>)</b><br>
<em>Category: Core functions (C++)</em><br>
<em>File: parser_lib.cpp</em><br>
  Return a dictionary mapping ISO639 language codes to language names.
</p>

<a name="last:parser_lib.cpp">
<p class=func>
  <b class=functitle>def last(<em>L</em>)</b><br>
<em>Category: Core functions (C++)</em><br>
<em>File: parser_lib.cpp</em><br>
  If <em>L</em> is a non-empty list, return the last element of the list. If it is a string, return the last character as a a string.
</p>

<a name="lc:parser_lib.cpp">
<p class=func>
  <b class=functitle>def lc(<em>s</em>)</b><br>
<em>Category: Core functions (C++)</em><br>
<em>File: parser_lib.cpp</em><br>
  Convert string <em>s</em> to lower case.
</p>

<a name="left:parser_lib.cpp">
<p class=func>
  <b class=functitle>def left(<em>s</em>, <em>n</em>)</b><br>
<em>Category: Core functions (C++)</em><br>
<em>File: parser_lib.cpp</em><br>
  Return <em>n</em> characters from the beginning of string s or empty string if n <= 0. If s is a list, then return <em>n</em> members from the beginning of the list.
</p>

<a name="length:parser_lib.cpp">
<p class=func>
  <b class=functitle>def length(<em>e</em>)</b><br>
<em>Category: Core functions (C++)</em><br>
<em>File: parser_lib.cpp</em><br>
  If <em>e</em> is a string or a list, return length of it. Otherwise return -1.
</p>

<a name="load:parser.h">
<p class=func>
  <b class=functitle>def load(<em>s</em>)</b><br>
<em>Category: Core functions (C++)</em><br>
<em>File: parser.h</em><br>
  Load the value of the variable with name <em>s</em> from the save directory. Return 1, if success, 0 otherwise.
</p>

<a name="max:parser_lib.cpp">
<p class=func>
  <b class=functitle>def max(<em>L</em>)</b><br>
<em>Category: Core functions (C++)</em><br>
<em>File: parser_lib.cpp</em><br>
  Return maximum member of the list <em>L</em> with respect to &lt; operator.
</p>

<a name="min:parser_lib.cpp">
<p class=func>
  <b class=functitle>def min(<em>L</em>)</b><br>
<em>Category: Core functions (C++)</em><br>
<em>File: parser_lib.cpp</em><br>
  Return minimum member of the list <em>L</em> with respect to &lt; operator.
</p>

<a name="pop:parser.h">
<p class=func>
  <b class=functitle>def pop()</b><br>
<em>Category: Core functions (C++)</em><br>
<em>File: parser.h</em><br>
  Remove the topmost value of the stack and return it.
</p>

<a name="print:parser_lib.cpp">
<p class=func>
  <b class=functitle>def print(<em>e</em>)</b><br>
<em>Category: Core functions (C++)</em><br>
<em>File: parser_lib.cpp</em><br>
  Print the value of expression <em>e</em> to the standard output. List members are separeated by spaces.
</p>

<a name="println:parser_lib.cpp">
<p class=func>
  <b class=functitle>def println(<em>e</em>)</b><br>
<em>Category: Core functions (C++)</em><br>
<em>File: parser_lib.cpp</em><br>
  Same as <tt>print</tt>, but a new line is appended.
</p>

<a name="push:parser.h">
<p class=func>
  <b class=functitle>def push(<em>e<sub>1</sub></em>, ..., <em>e<sub>n</sub></em>)</b><br>
<em>Category: Core functions (C++)</em><br>
<em>File: parser.h</em><br>
  Push values <em>e<sub>1</sub></em>,...,<em>e<sub>n</sub></em> to the stack in that order. Return the current size of the stack.
</p>

<a name="quit:parser_lib.cpp">
<p class=func>
  <b class=functitle>def quit(<em>n</em>)</b><br>
<em>Category: Core functions (C++)</em><br>
<em>File: parser_lib.cpp</em><br>
  Throw Quit exception with optional exit code <em>n</em>.
</p>

<a name="random:parser_lib.cpp">
<p class=func>
  <b class=functitle>def random(<em>n</em>)</b><br>
<em>Category: Core functions (C++)</em><br>
<em>File: parser_lib.cpp</em><br>
  Return random number between <em>0</em> and n-1. If <em>n</em> is not an integer, return <tt>NULL</tt>.
</p>

<a name="randomize:parser_lib.cpp">
<p class=func>
  <b class=functitle>def randomize(<em>e</em>)</b><br>
<em>Category: Core functions (C++)</em><br>
<em>File: parser_lib.cpp</em><br>
  Initialize random number generator with seed <em>e</em> if <em>e</em> is integer. Otherwise initialze it with microsecond time value taken from system clock. Return value is the seed.
</p>

<a name="read_file:parser_lib.cpp">
<p class=func>
  <b class=functitle>def read_file(<em>f</em>)</b><br>
<em>Category: Core functions (C++)</em><br>
<em>File: parser_lib.cpp</em><br>
  Read a text file f and return list of strings representing lines of the text file. Return NULL if reading fails.
</p>

<a name="repeat:parser.h">
<p class=func>
  <b class=functitle>def repeat(<em>[n]</em>, <em>s</em>)</b><br>
<em>Category: Core functions (C++)</em><br>
<em>File: parser.h</em><br>
  Evaluate a string <em>s</em> n times if n > 0. Return list of results. If n is omitted, then evaluate string <em>s</em> forever.
</p>

<a name="replace:parser_lib.cpp">
<p class=func>
  <b class=functitle>def replace(<em>L</em>, <em>s</em>, <em>d</em>)</b><br>
<em>Category: Core functions (C++)</em><br>
<em>File: parser_lib.cpp</em><br>
  Replace object L or members of list L having value s with value d.
</p>

<a name="return:parser.h">
<p class=func>
  <b class=functitle>def return(<em>e</em>)</b><br>
<em>Category: Core functions (C++)</em><br>
<em>File: parser.h</em><br>
  Set the return value during execution of the user defined function. Note: this do not terminate the execution of the function.
</p>

<a name="reverse:parser_lib.cpp">
<p class=func>
  <b class=functitle>def reverse(<em>L</em>)</b><br>
<em>Category: Core functions (C++)</em><br>
<em>File: parser_lib.cpp</em><br>
  Return a list <em>L</em> reversed or throw an exception if <em>L</em> is not a list.
</p>

<a name="right:parser_lib.cpp">
<p class=func>
  <b class=functitle>def right(<em>s</em>, <em>n</em>)</b><br>
<em>Category: Core functions (C++)</em><br>
<em>File: parser_lib.cpp</em><br>
  Return <em>n</em> characters from the end of string s or empty string if n <= 0. If s is a list, then return <em>n</em> members from the end of the list.
</p>

<a name="save:parser.h">
<p class=func>
  <b class=functitle>def save(<em>s</em>)</b><br>
<em>Category: Core functions (C++)</em><br>
<em>File: parser.h</em><br>
  Save the variable with name <em>s</em> to save directory or skip this if it is a database. If the variable <em>s</em> is not declared, throw error. If the variable has two dots in it's name, throw fatal error. Return 1, if success, 0 otherwise.
</p>

<a name="select:parser.h">
<p class=func>
  <b class=functitle>def select(<em>s</em>, <em>L</em>)</b><br>
<em>Category: Core functions (C++)</em><br>
<em>File: parser.h</em><br>
  Substitute each member <em>x\in L</em> into the string s in place of <tt>#</tt> character(s). If expression evaluates to non-zero integer, add <em>x</em> to the resulting list.
</p>

<a name="seq:parser_lib.cpp">
<p class=func>
  <b class=functitle>def seq(<em>n<sub>1</sub></em>, <em>n<sub>2</sub></em>)</b><br>
<em>Category: Core functions (C++)</em><br>
<em>File: parser_lib.cpp</em><br>
  Generate sequence <em>(n<sub>1</sub>,n<sub>1</sub>+1,...,n<sub>2</sub>)</em>. Return <tt>NULL</tt> if <em>n<sub>1</sub> > n<sub>2</sub></em> or if arguments are not integers.
</p>

<a name="set_lang:parser_lib.cpp">
<p class=func>
  <b class=functitle>def set_lang(<em>code</em>)</b><br>
<em>Category: Core functions (C++)</em><br>
<em>File: parser_lib.cpp</em><br>
  Select current language for localization.
</p>

<a name="shuffle:parser_lib.cpp">
<p class=func>
  <b class=functitle>def shuffle(<em>L</em>)</b><br>
<em>Category: Core functions (C++)</em><br>
<em>File: parser_lib.cpp</em><br>
  Return a randomly shuffled version of list <em>L</em>.
</p>

<a name="sleep:parser_lib.cpp">
<p class=func>
  <b class=functitle>def sleep(<em>t</em>)</b><br>
<em>Category: Core functions (C++)</em><br>
<em>File: parser_lib.cpp</em><br>
  Wait for <em>t</em> seconds.
</p>

<a name="sort:parser_lib.cpp">
<p class=func>
  <b class=functitle>def sort(<em>L</em>)</b><br>
<em>Category: Core functions (C++)</em><br>
<em>File: parser_lib.cpp</em><br>
  Return list as sorted according to <tt>&lt;</tt> operator.
</p>

<a name="sort_fn:parser.h">
<p class=func>
  <b class=functitle>def sort_fn(<em>f</em>, <em>L</em>)</b><br>
<em>Category: Core functions (C++)</em><br>
<em>File: parser.h</em><br>
  Return the list L sorted using the function f as comparison function. Each list member is substituted in place of '#' in the string f and evaluated to produce coparison function value.
</p>

<a name="split:parser_lib.cpp">
<p class=func>
  <b class=functitle>def split(<em>s<sub>1</sub></em>, <em>s<sub>2</sub></em>, <em>d</em>)</b><br>
<em>Category: Core functions (C++)</em><br>
<em>File: parser_lib.cpp</em><br>
  If <em>d</em> is not givent Split the string s<sub>1</sub> to pieces separated by the string s<sub>2</sub> and return pieces as a list of strings. If s<sub>2</sub> is empty string, split the string to single characters. If <em>d=1</em> is given, add delimiters too in the resulting list.
</p>

<a name="stacktrace:parser.h">
<p class=func>
  <b class=functitle>def stacktrace()</b><br>
<em>Category: Core functions (C++)</em><br>
<em>File: parser.h</em><br>
  Print function call stack with arguments.
</p>

<a name="strreplace:parser_lib.cpp">
<p class=func>
  <b class=functitle>def strreplace(<em>s</em>, <em>a</em>, <em>b</em>)</b><br>
<em>Category: Core functions (C++)</em><br>
<em>File: parser_lib.cpp</em><br>
  Replace every instance of string a found from string s with b. Return NULL on if infinite recursive replacement.
</p>

<a name="substr:parser_lib.cpp">
<p class=func>
  <b class=functitle>def substr(<em>s</em>, <em>p</em>, <em>z</em>)</b><br>
<em>Category: Core functions (C++)</em><br>
<em>File: parser_lib.cpp</em><br>
  Return substring of <em>s</em> starting at position p and having a length of z. If z is not given, return substring of s starting at position <em>p</em> until end of the string.
</p>

<a name="tail:parser_lib.cpp">
<p class=func>
  <b class=functitle>def tail(<em>L</em>)</b><br>
<em>Category: Core functions (C++)</em><br>
<em>File: parser_lib.cpp</em><br>
  Return all members of the list <em>L</em> except the first. If L have one or zero members, return empty list. If <em>L</em> is not a list, return <tt>NULL</tt>.
</p>

<a name="time:parser_lib.cpp">
<p class=func>
  <b class=functitle>def time()</b><br>
<em>Category: Core functions (C++)</em><br>
<em>File: parser_lib.cpp</em><br>
  Return current time in 24H clock format <tt>%h:%m:%s</tt>.
</p>

<a name="toint:parser_lib.cpp">
<p class=func>
  <b class=functitle>def toint(<em>e</em>)</b><br>
<em>Category: Core functions (C++)</em><br>
<em>File: parser_lib.cpp</em><br>
  If <em>e</em> is an integer return it unchanged. If e is a string, convert value to integer. If <em>e</em> is a real, round to nearest integer and return it. Otherwise, return 0.
</p>

<a name="toreal:parser_lib.cpp">
<p class=func>
  <b class=functitle>def toreal(<em>e</em>)</b><br>
<em>Category: Core functions (C++)</em><br>
<em>File: parser_lib.cpp</em><br>
  If <em>e</em> is an integer or a real return it as a real. If <em>e</em> is a string, convert value to real. Otherwise, return 0.0.
</p>

<a name="tostr:parser_lib.cpp">
<p class=func>
  <b class=functitle>def tostr(<em>e</em>)</b><br>
<em>Category: Core functions (C++)</em><br>
<em>File: parser_lib.cpp</em><br>
  Convert any element to string. This string is in such format that it produces element <em>e</em> when evaluated.
</p>

<a name="toval:parser_lib.cpp">
<p class=func>
  <b class=functitle>def toval(<em>e</em>)</b><br>
<em>Category: Core functions (C++)</em><br>
<em>File: parser_lib.cpp</em><br>
  Convert string converted by <tt>tostr</tt> back to appropriate value. If <em>e</em> is not a string, return <em>e</em>.
</p>

<a name="tr:parser_lib.cpp">
<p class=func>
  <b class=functitle>def tr(<em>s</em>, <em>a</em>, <em>b</em>)</b><br>
<em>Category: Core functions (C++)</em><br>
<em>File: parser_lib.cpp</em><br>
  Replace every character in string a found from string s with b.
</p>

<a name="trim:parser_lib.cpp">
<p class=func>
  <b class=functitle>def trim(<em>s</em>)</b><br>
<em>Category: Core functions (C++)</em><br>
<em>File: parser_lib.cpp</em><br>
  Remove spaces from the beginning and from the end string s.
</p>

<a name="typeof:parser_lib.cpp">
<p class=func>
  <b class=functitle>def typeof(<em>e</em>)</b><br>
<em>Category: Core functions (C++)</em><br>
<em>File: parser_lib.cpp</em><br>
  Return the type of <em>e</em> as a string <tt>null</tt>, <tt>integer</tt>, <tt>string</tt>, <tt>list</tt> or <tt>real</tt>.
</p>

<a name="uc:parser_lib.cpp">
<p class=func>
  <b class=functitle>def uc(<em>s</em>)</b><br>
<em>Category: Core functions (C++)</em><br>
<em>File: parser_lib.cpp</em><br>
  Convert string <em>s</em> to upper case.
</p>

<a name="ucfirst:parser_lib.cpp">
<p class=func>
  <b class=functitle>def ucfirst(<em>s</em>)</b><br>
<em>Category: Core functions (C++)</em><br>
<em>File: parser_lib.cpp</em><br>
  Convert the first letter of the string <em>s</em> to upper case.
</p>

<a name="unique:parser_lib.cpp">
<p class=func>
  <b class=functitle>def unique(<em>L</em>)</b><br>
<em>Category: Core functions (C++)</em><br>
<em>File: parser_lib.cpp</em><br>
  Return unique elements of sorted list <em>L</em>.
</p>

<a name="valueof:parser.h">
<p class=func>
  <b class=functitle>def valueof(<em>s</em>)</b><br>
<em>Category: Core functions (C++)</em><br>
<em>File: parser.h</em><br>
  Return value of the variable named <em>s</em> or NULL if not defined.
</p>

<a name="values:parser_lib.cpp">
<p class=func>
  <b class=functitle>def values(<em>D</em>)</b><br>
<em>Category: Core functions (C++)</em><br>
<em>File: parser_lib.cpp</em><br>
  Return list of value elements of dictionary <em>D</em> or throw error if <em>D</em> is not a dictionary.  This functions also returns list of first elements of list containing only pairs.
</p>

<a name="vardump:parser.h">
<p class=func>
  <b class=functitle>def vardump()</b><br>
<em>Category: Core functions (C++)</em><br>
<em>File: parser.h</em><br>
  Print all variables and their values to the file named 'vardump'.
</p>

<a name="write_file:parser_lib.cpp">
<p class=func>
  <b class=functitle>def write_file(<em>file</em>, <em>lines</em>)</b><br>
<em>Category: Core functions (C++)</em><br>
<em>File: parser_lib.cpp</em><br>
  Write text lines to the file. Return 1 if successful and NULL if fails.
</p>

<h2>GUI library (C++)</h2>
<a name="add_marker:interpreter.cpp">
<p class=func>
  <b class=functitle>def add_marker(<em>o</em>, <em>n</em>)</b><br>
<em>Category: GUI library (C++)</em><br>
<em>File: interpreter.cpp</em><br>
  Add a marker number <em>n</em> to the object o. Throw an exception if <em>n</em> is not valid marker number.
</p>

<a name="add_text:interpreter.cpp">
<p class=func>
  <b class=functitle>def add_text(<em>o</em>, <em>t</em>)</b><br>
<em>Category: GUI library (C++)</em><br>
<em>File: interpreter.cpp</em><br>
  Add a text <em>t</em> to the object <em>o</em>.
</p>

<a name="attach:interpreter.cpp">
<p class=func>
  <b class=functitle>def attach(<em>o<sub>1</sub></em>, <em>o<sub>2</sub></em>)</b><br>
<em>Category: GUI library (C++)</em><br>
<em>File: interpreter.cpp</em><br>
  Attach an object <em>o<sub>1</sub></em> to an object <em>o<sub>2</sub></em>. Return <tt>NULL</tt>, if the attachment would cause a loop chain, 1 otherwise.
</p>

<a name="beep:interpreter.cpp">
<p class=func>
  <b class=functitle>def beep(<em>o</em>, <em>s</em>)</b><br>
<em>Category: GUI library (C++)</em><br>
<em>File: interpreter.cpp</em><br>
  Produce a beep.
</p>

<a name="book_cards:interpreter.cpp">
<p class=func>
  <b class=functitle>def book_cards(<em>o</em>, <em>n</em>)</b><br>
<em>Category: GUI library (C++)</em><br>
<em>File: interpreter.cpp</em><br>
  Return all cards at the page <em>n</em> in a book <em>o</em>.
</p>

<a name="book_entry:interpreter.cpp">
<p class=func>
  <b class=functitle>def book_entry(<em>o</em>, <em>n</em>)</b><br>
<em>Category: GUI library (C++)</em><br>
<em>File: interpreter.cpp</em><br>
  Return entry of card <em>n</em> from book <em>o</em> (See <tt>book_set_entry</tt>).
</p>

<a name="book_last_page:interpreter.cpp">
<p class=func>
  <b class=functitle>def book_last_page(<em>o</em>)</b><br>
<em>Category: GUI library (C++)</em><br>
<em>File: interpreter.cpp</em><br>
  Return last page number of the book.
</p>

<a name="book_page:interpreter.cpp">
<p class=func>
  <b class=functitle>def book_page(<em>o</em>)</b><br>
<em>Category: GUI library (C++)</em><br>
<em>File: interpreter.cpp</em><br>
  Return current page number of the book.
</p>

<a name="book_pageof:interpreter.cpp">
<p class=func>
  <b class=functitle>def book_pageof(<em>o</em>, <em>n</em>)</b><br>
<em>Category: GUI library (C++)</em><br>
<em>File: interpreter.cpp</em><br>
  Return page number of card <em>n</em> in a book <em>o</em>.
</p>

<a name="book_set_deck:interpreter.cpp">
<p class=func>
  <b class=functitle>def book_set_deck(<em>o</em>, <em>L</em>)</b><br>
<em>Category: GUI library (C++)</em><br>
<em>File: interpreter.cpp</em><br>
  Set current "ondeck" cards according to the list <em>L</em>.
</p>

<a name="book_set_entry:interpreter.cpp">
<p class=func>
  <b class=functitle>def book_set_entry(<em>o</em>, <em>L</em>)</b><br>
<em>Category: GUI library (C++)</em><br>
<em>File: interpreter.cpp</em><br>
  Set card entries of the book <em>o</em>. A list L is a list of pairs ((n<sub>1</sub>,e<sub>1</sub>),...,(n<sub>k</sub>,e<sub>k</sub>)). Each n<sub>i</sub> is the card number of the entry e<sub>i</sub> to be set. Entry data e<sub>i</sub> is a vector (c,p<sub>s</sub>,s,p<sub>m</sub>,f,d), where c is the number of cards owned, <em>p<sub>s</sub></em> is the lowest price offered, s is name of the seller, p<sub>m</sub> is price set by me, f is number of cards for sale from my collection and <em>d</em> is number of cards in my current deck. Alternative shorter form for entries is <em>(c,f,p<sub>m</sub>)</em>, which sets only those fields of the entry.
</p>

<a name="book_set_index:interpreter.cpp">
<p class=func>
  <b class=functitle>def book_set_index(<em>o</em>, <em>L</em>)</b><br>
<em>Category: GUI library (C++)</em><br>
<em>File: interpreter.cpp</em><br>
  Set the current index of the card book <em>o</em>. A list <em>L</em> contains titles and card numbers to show. Each string is interpreted as a title and each integer as a card number.
</p>

<a name="book_set_page:interpreter.cpp">
<p class=func>
  <b class=functitle>def book_set_page(<em>o</em>, <em>p</em>)</b><br>
<em>Category: GUI library (C++)</em><br>
<em>File: interpreter.cpp</em><br>
  Set the current page of the card book <em>o</em> to <em>p</em>. Returns previous current page.
</p>

<a name="book_set_slot:interpreter.cpp">
<p class=func>
  <b class=functitle>def book_set_slot(<em>o</em>, <em>s</em>)</b><br>
<em>Category: GUI library (C++)</em><br>
<em>File: interpreter.cpp</em><br>
  Set the current selected slot of the card book <em>o</em> to the card s (integer) or to the title <em>s</em> (string). Returns the page having the slot or NULL if not found. String "" removes the slot selection.
</p>

<a name="book_titles:interpreter.cpp">
<p class=func>
  <b class=functitle>def book_titles(<em>o</em>)</b><br>
<em>Category: GUI library (C++)</em><br>
<em>File: interpreter.cpp</em><br>
  Return list all of pairs <em>(t<sub>i</sub>,p<sub>i</sub>)</em>, where t<sub>i</sub> is a title from the book o and <em>p<sub>i</sub></em> is the page number containing the title.
</p>

<a name="card:interpreter.cpp">
<p class=func>
  <b class=functitle>def card(<em>o</em>)</b><br>
<em>Category: GUI library (C++)</em><br>
<em>File: interpreter.cpp</em><br>
  Return the card number of the object <em>o</em> or <tt>NULL</tt> if <em>o</em> is not a card in play.
</p>

<a name="cardbox:interpreter.cpp">
<p class=func>
  <b class=functitle>def cardbox(<em>n</em>)</b><br>
<em>Category: GUI library (C++)</em><br>
<em>File: interpreter.cpp</em><br>
  Return the content of the card box <em>n</em>.
</p>

<a name="card_data:interpreter.cpp">
<p class=func>
  <b class=functitle>def card_data(<em>o</em>)</b><br>
<em>Category: GUI library (C++)</em><br>
<em>File: interpreter.cpp</em><br>
  Return a vector (<em>o,a,c,r</em>), where o is owner of the card, a is current rotation angle, c is the card number of the visible side and r is real identity of the card number if known. Return <tt>NULL</tt> if <em>o</em> is not a card in play.
</p>

<a name="center_of:interpreter.cpp">
<p class=func>
  <b class=functitle>def center_of(<em>n</em>, <em>[table]</em>)</b><br>
<em>Category: GUI library (C++)</em><br>
<em>File: interpreter.cpp</em><br>
  Return a vector <em>(x,y)</em> containing the center of the object or <tt>NULL</tt> if n is not an object. If optional argument <em>table</em> is given, convert coordinates to the table coordinates.
</p>

<a name="change_card:interpreter.cpp">
<p class=func>
  <b class=functitle>def change_card(<em>n</em>, <em>c</em>)</b><br>
<em>Category: GUI library (C++)</em><br>
<em>File: interpreter.cpp</em><br>
  Change the image of the card with object number <em>n</em> to <em>c</em>. Shift previous card number to real-card value.
</p>

<a name="create_book:interpreter.cpp">
<p class=func>
  <b class=functitle>def create_book(<em>x</em>, <em>y</em>, <em>n</em>, <em>s</em>, <em>c</em>, <em>r</em>)</b><br>
<em>Category: GUI library (C++)</em><br>
<em>File: interpreter.cpp</em><br>
  Create a card book named <em>s</em> with object number n at (x,y). Size of the card book is c columns and <em>r</em> rows. Note that the card book is not visible by default. Sets also variable <tt>book.last_page</tt> to denote the last page of the book.
</p>

<a name="create_cardbox:interpreter.cpp">
<p class=func>
  <b class=functitle>def create_cardbox(<em>x</em>, <em>y</em>, <em>n</em>, <em>s</em>)</b><br>
<em>Category: GUI library (C++)</em><br>
<em>File: interpreter.cpp</em><br>
  Create a card box object at <em>(x,y)</em>. It's object number is n and name s. Return <em>n</em>.
</p>

<a name="create_deck:interpreter.cpp">
<p class=func>
  <b class=functitle>def create_deck(<em>x</em>, <em>y</em>, <em>n</em>, <em>s</em>)</b><br>
<em>Category: GUI library (C++)</em><br>
<em>File: interpreter.cpp</em><br>
  Create a deck object to <em>(x,y)</em>. Object number is n and name is s. Return <em>n</em>.
</p>

<a name="create_hand:interpreter.cpp">
<p class=func>
  <b class=functitle>def create_hand(<em>x</em>, <em>y</em>, <em>n</em>, <em>s</em>)</b><br>
<em>Category: GUI library (C++)</em><br>
<em>File: interpreter.cpp</em><br>
  Create a hand object at <em>(x,y)</em>. It's object number is n and name s. Return <em>n</em>.
</p>

<a name="create_image:interpreter.cpp">
<p class=func>
  <b class=functitle>def create_image(<em>x</em>, <em>y</em>, <em>n</em>, <em>i</em>, <em>s</em>, <em>v</em>)</b><br>
<em>Category: GUI library (C++)</em><br>
<em>File: interpreter.cpp</em><br>
  Create an image at <em>(x,y)</em>. An object number is n, an image number is i and a name is s. Argument <em>v</em> is optional and defines the visibility of the image.
</p>

<a name="create_listbox:interpreter.cpp">
<p class=func>
  <b class=functitle>def create_listbox(<em>x</em>, <em>y</em>, <em>n</em>, <em>s</em>, <em>r</em>, <em>T</em>, <em>W</em>, <em>r<sub>v</sub></em>, <em>A</em>)</b><br>
<em>Category: GUI library (C++)</em><br>
<em>File: interpreter.cpp</em><br>
  Create a listbox at <em>(x,y)</em> with object number n and name s. The initial number of rows is r (table grows automatically), the number of visible rows is n<sub>n</sub>, list of titles is T, list of column widths is W and list of alignments (0 - left, 1 - center, 2 - right) is <em>A</em>. Note that list box is not visible by default.
</p>

<a name="create_menu:interpreter.cpp">
<p class=func>
  <b class=functitle>def create_menu(<em>x</em>, <em>y</em>, <em>n</em>, <em>s</em>, <em>M</em>)</b><br>
<em>Category: GUI library (C++)</em><br>
<em>File: interpreter.cpp</em><br>
  Create a menu at <em>(x,y)</em> with object number n and name s. List of menu entries M may contain lists with one (t,), two (t,s) or three (t,s,a) string members. Here t is a text to show on entry, <em>s</em> is shortcut key and <em>a</em> is an action to send menu handler (i.e. code to execute).
</p>

<a name="create_msgbox:interpreter.cpp">
<p class=func>
  <b class=functitle>def create_msgbox(<em>x<sub>0</sub></em>, <em>y<sub>0</sub></em>, <em>n</em>, <em>s</em>, <em>w</em>, <em>h</em>, <em>L</em>)</b><br>
<em>Category: GUI library (C++)</em><br>
<em>File: interpreter.cpp</em><br>
  Create a message box to the position <em>(x<sub>0</sub>,y<sub>0</sub>)</em>. Object number is n, name is s and the size of the box is w\times h. Return the object number of the message box created. The maximum number of lines is <em>L</em>.
</p>

<a name="deck:interpreter.cpp">
<p class=func>
  <b class=functitle>def deck(<em>d</em>)</b><br>
<em>Category: GUI library (C++)</em><br>
<em>File: interpreter.cpp</em><br>
  Return the list of card numbers in deck <em>d</em>.
</p>

<a name="del_all_texts:interpreter.cpp">
<p class=func>
  <b class=functitle>def del_all_texts(<em>o</em>)</b><br>
<em>Category: GUI library (C++)</em><br>
<em>File: interpreter.cpp</em><br>
  Delete all texts from the object <em>o</em>. Return number of texts removed.
</p>

<a name="del_cardbox:interpreter.cpp">
<p class=func>
  <b class=functitle>def del_cardbox(<em>b</em>, <em>i</em>)</b><br>
<em>Category: GUI library (C++)</em><br>
<em>File: interpreter.cpp</em><br>
  Remove a card with index <em>i</em> from the card box b. Return <tt>NULL</tt> if <em>i</em> is not a valid index. Otherwise return the card number of the removed card.
</p>

<a name="del_cardbox_all_recenter:interpreter.cpp">
<p class=func>
  <b class=functitle>def del_cardbox_all_recenter(<em>b</em>)</b><br>
<em>Category: GUI library (C++)</em><br>
<em>File: interpreter.cpp</em><br>
  Remove all cards. Return the number of cards removed.
</p>

<a name="del_cardbox_recenter:interpreter.cpp">
<p class=func>
  <b class=functitle>def del_cardbox_recenter(<em>b</em>, <em>i</em>)</b><br>
<em>Category: GUI library (C++)</em><br>
<em>File: interpreter.cpp</em><br>
  Same as the <tt>del<sub>c</sub>ardbox</tt>, but move the box keeping the center of the box in place.
</p>

<a name="del_deck:interpreter.cpp">
<p class=func>
  <b class=functitle>def del_deck(<em>o</em>, <em>i</em>)</b><br>
<em>Category: GUI library (C++)</em><br>
<em>File: interpreter.cpp</em><br>
  Remove the <em>i</em>th card counting from the top of the deck <em>o</em>.
</p>

<a name="del_deck_top:interpreter.cpp">
<p class=func>
  <b class=functitle>def del_deck_top(<em>d</em>)</b><br>
<em>Category: GUI library (C++)</em><br>
<em>File: interpreter.cpp</em><br>
  Remove a card from the top of the deck <em>d</em>. Return card number if successful and <tt>NULL</tt> if not. h. Return <tt>NULL</tt> if <em>i</em> is not a valid index. Otherwise return card number of the removed card.
</p>

<a name="del_hand:interpreter.cpp">
<p class=func>
  <b class=functitle>def del_hand(<em>h</em>, <em>i</em>)</b><br>
<em>Category: GUI library (C++)</em><br>
<em>File: interpreter.cpp</em><br>
  Remove a card with index <em>i</em> from a hand h. Return <tt>NULL</tt> if <em>i</em> is not a valid index. Otherwise return card number of the removed card.
</p>

<a name="del_marker:interpreter.cpp">
<p class=func>
  <b class=functitle>def del_marker(<em>o</em>, <em>n</em>)</b><br>
<em>Category: GUI library (C++)</em><br>
<em>File: interpreter.cpp</em><br>
  Delete a marker number <em>n</em> from the object o. Throw an exception if <em>n</em> is not valid marker number.
</p>

<a name="del_object:interpreter.cpp">
<p class=func>
  <b class=functitle>def del_object(<em>n</em>)</b><br>
<em>Category: GUI library (C++)</em><br>
<em>File: interpreter.cpp</em><br>
  Remove an object <em>n</em> from the screen if it exist and return 1. Otherwise NULL.
</p>

<a name="del_text:interpreter.cpp">
<p class=func>
  <b class=functitle>def del_text(<em>o</em>, <em>t</em>)</b><br>
<em>Category: GUI library (C++)</em><br>
<em>File: interpreter.cpp</em><br>
  Delete a text <em>t</em> from the object <em>o</em>.
</p>

<a name="detach:interpreter.cpp">
<p class=func>
  <b class=functitle>def detach(<em>o</em>)</b><br>
<em>Category: GUI library (C++)</em><br>
<em>File: interpreter.cpp</em><br>
  Detach an object <em>o</em> if attached to another object.
</p>

<a name="dump:interpreter.cpp">
<p class=func>
  <b class=functitle>def dump()</b><br>
<em>Category: GUI library (C++)</em><br>
<em>File: interpreter.cpp</em><br>
  Print status of the all display elements on stdout.
</p>

<a name="get_attr:interpreter.cpp">
<p class=func>
  <b class=functitle>def get_attr(<em>o</em>, <em>a</em>)</b><br>
<em>Category: GUI library (C++)</em><br>
<em>File: interpreter.cpp</em><br>
  Get the current value of the widget flag <em>a</em> of the object <em>o</em> (See Class Widget).
</p>

<a name="get_texts:interpreter.cpp">
<p class=func>
  <b class=functitle>def get_texts(<em>o</em>)</b><br>
<em>Category: GUI library (C++)</em><br>
<em>File: interpreter.cpp</em><br>
  Return a list of all texts added to object.
</p>

<a name="h:interpreter.cpp">
<p class=func>
  <b class=functitle>def h(<em>h</em>)</b><br>
<em>Category: GUI library (C++)</em><br>
<em>File: interpreter.cpp</em><br>
  Convert a width component to the physical pixel width.
</p>

<a name="hand:interpreter.cpp">
<p class=func>
  <b class=functitle>def hand(<em>h</em>)</b><br>
<em>Category: GUI library (C++)</em><br>
<em>File: interpreter.cpp</em><br>
  Return the list of card numbers in hand <em>h</em>.
</p>

<a name="has_text:interpreter.cpp">
<p class=func>
  <b class=functitle>def has_text(<em>o</em>, <em>t</em>)</b><br>
<em>Category: GUI library (C++)</em><br>
<em>File: interpreter.cpp</em><br>
  Return 1 if an object <em>o</em> has text <em>t</em> on it.
</p>

<a name="image_height:interpreter.cpp">
<p class=func>
  <b class=functitle>def image_height(<em>i</em>)</b><br>
<em>Category: GUI library (C++)</em><br>
<em>File: interpreter.cpp</em><br>
  Return the height of the image <em>i</em>.
</p>

<a name="image_pixel:interpreter.cpp">
<p class=func>
  <b class=functitle>def image_pixel(<em>i</em>, <em>x</em>, <em>y</em>)</b><br>
<em>Category: GUI library (C++)</em><br>
<em>File: interpreter.cpp</em><br>
  Return (r,g,b) value of the pixel (x,y) of the image <em>i</em>.
</p>

<a name="image_width:interpreter.cpp">
<p class=func>
  <b class=functitle>def image_width(<em>i</em>)</b><br>
<em>Category: GUI library (C++)</em><br>
<em>File: interpreter.cpp</em><br>
  Return the width of the image <em>i</em>.
</p>

<a name="inplay:interpreter.cpp">
<p class=func>
  <b class=functitle>def inplay(<em>[p]</em>)</b><br>
<em>Category: GUI library (C++)</em><br>
<em>File: interpreter.cpp</em><br>
  Return the list of objects numbers in play owned by player number <em>p</em> or all objects if <em>p</em> is not given. The topmost object is last.
</p>

<a name="InputSplit:interpreter.cpp">
<p class=func>
  <b class=functitle>def InputSplit(<em>line</em>)</b><br>
<em>Category: GUI library (C++)</em><br>
<em>File: interpreter.cpp</em><br>
  Return a pair where the first component is the input line before the cursor and the second component after the cursor. Each component is splitted list of the input atoms, i.e. mixed list of characters and tags. If the line is empty string returns a pair of two list each having a string "".
</p>

<a name="intersect:interpreter.cpp">
<p class=func>
  <b class=functitle>def intersect(<em>o</em>)</b><br>
<em>Category: GUI library (C++)</em><br>
<em>File: interpreter.cpp</em><br>
  Return a list of all other objects intersecting an object <em>o</em>. Alternatively intersect(x,y,w,<em>h</em>) returns a list of all objects intersecting rectangle.
</p>

<a name="invert:interpreter.cpp">
<p class=func>
  <b class=functitle>def invert(<em>o</em>)</b><br>
<em>Category: GUI library (C++)</em><br>
<em>File: interpreter.cpp</em><br>
  If an object <em>o</em> is not a card in play, return <tt>NULL</tt>. If it as already inverted card, return 0. Otherwise invert the card and return 1.
</p>

<a name="listbox_clear:interpreter.cpp">
<p class=func>
  <b class=functitle>def listbox_clear(<em>l</em>)</b><br>
<em>Category: GUI library (C++)</em><br>
<em>File: interpreter.cpp</em><br>
  Clear all elements of list box <em>l</em>.
</p>

<a name="listbox_entry:interpreter.cpp">
<p class=func>
  <b class=functitle>def listbox_entry(<em>l</em>, <em>r</em>)</b><br>
<em>Category: GUI library (C++)</em><br>
<em>File: interpreter.cpp</em><br>
  Return content of the row <em>r</em> of the listbox <em>l</em>.
</p>

<a name="listbox_scroll:interpreter.cpp">
<p class=func>
  <b class=functitle>def listbox_scroll(<em>l</em>, <em>\delta</em>)</b><br>
<em>Category: GUI library (C++)</em><br>
<em>File: interpreter.cpp</em><br>
  Scroll list box content by <em>\delta</em> rows up.
</p>

<a name="listbox_set_deck:interpreter.cpp">
<p class=func>
  <b class=functitle>def listbox_set_deck(<em>l</em>, <em>D</em>, <em>b</em>)</b><br>
<em>Category: GUI library (C++)</em><br>
<em>File: interpreter.cpp</em><br>
  Clear list box <em>l</em> and construct deck listing of the deck D as it's new content. Check missing cards from a card book b. Deck <em>D</em> is hashmap from the part names of the deck to the list of card numbers contained in each part.
</p>

<a name="listbox_set_entry:interpreter.cpp">
<p class=func>
  <b class=functitle>def listbox_set_entry(<em>l</em>, <em>i</em>, <em>L</em>)</b><br>
<em>Category: GUI library (C++)</em><br>
<em>File: interpreter.cpp</em><br>
  Set a row <em>i</em> of the list box l to contain a list L as it's data. The size of the list L must match to the number of columns defined to the list box. String entries of <em>L</em> are used as they are and non-string entries are converted to string before use.
</p>

<a name="listbox_sort_rows:interpreter.cpp">
<p class=func>
  <b class=functitle>def listbox_sort_rows(<em>l</em>, <em>r<sub>1</sub></em>, <em>r<sub>2</sub></em>, <em>c</em>)</b><br>
<em>Category: GUI library (C++)</em><br>
<em>File: interpreter.cpp</em><br>
  Sort rows <em>r<sub>1</sub></em>-r<sub>2</sub> of the list box l using column <em>c</em> as a key.
</p>

<a name="load_image:interpreter.cpp">
<p class=func>
  <b class=functitle>def load_image(<em>s<sub>1</sub></em>, <em>[s<sub>2</sub>]</em>)</b><br>
<em>Category: GUI library (C++)</em><br>
<em>File: interpreter.cpp</em><br>
  Load an image with filename <em>s<sub>1</sub></em> or s<sub>2</sub> if <em>s<sub>1</sub></em> not found and return it's image number. If neither one is found, throw an exception.
</p>

<a name="lower:interpreter.cpp">
<p class=func>
  <b class=functitle>def lower(<em>o</em>)</b><br>
<em>Category: GUI library (C++)</em><br>
<em>File: interpreter.cpp</em><br>
  Lower an object <em>o</em> below other objects.
</p>

<a name="message:interpreter.cpp">
<p class=func>
  <b class=functitle>def message(<em>o</em>, <em>m</em>)</b><br>
<em>Category: GUI library (C++)</em><br>
<em>File: interpreter.cpp</em><br>
  Print message to the message box <em>o</em>. Returns <em>o</em> if successfull, <tt>null</tt> otherwise.
</p>

<a name="mouse:interpreter.cpp">
<p class=func>
  <b class=functitle>def mouse(<em>m</em>)</b><br>
<em>Category: GUI library (C++)</em><br>
<em>File: interpreter.cpp</em><br>
  If <em>m</em> is 1, show mouse pointer, otherwise hide it.
</p>

<a name="move_object:interpreter.cpp">
<p class=func>
  <b class=functitle>def move_object(<em>n</em>, <em>x</em>, <em>y</em>)</b><br>
<em>Category: GUI library (C++)</em><br>
<em>File: interpreter.cpp</em><br>
  Move an object <em>n</em> to <em>(x,y)</em>.
</p>

<a name="msgbox_scroll:interpreter.cpp">
<p class=func>
  <b class=functitle>def msgbox_scroll(<em>b</em>, <em>n</em>)</b><br>
<em>Category: GUI library (C++)</em><br>
<em>File: interpreter.cpp</em><br>
  Scroll the content of the message box <em>b</em> by n lines upward if n=> 1 or -n lines downward if <em>n <= -1</em>.
</p>

<a name="objects:interpreter.cpp">
<p class=func>
  <b class=functitle>def objects()</b><br>
<em>Category: GUI library (C++)</em><br>
<em>File: interpreter.cpp</em><br>
  Return all object numbers of the objects on the screen.
</p>

<a name="object_data:interpreter.cpp">
<p class=func>
  <b class=functitle>def object_data(<em>n</em>)</b><br>
<em>Category: GUI library (C++)</em><br>
<em>File: interpreter.cpp</em><br>
  Return a data vector <em>(x,y,w,h,p,G,M)</em> for the object number n, where (x,y) is coordinates on the table, w \times h is the size of the object, p is the object number of the parent object, G is the list of all attached object numbers and M is list of all pairs (c,<em>n</em>) of markers  at the object, where n is number of markers and <em>c</em> is number of color.
</p>

<a name="object_name:interpreter.cpp">
<p class=func>
  <b class=functitle>def object_name(<em>n</em>)</b><br>
<em>Category: GUI library (C++)</em><br>
<em>File: interpreter.cpp</em><br>
  Name of the object number <em>n</em>.
</p>

<a name="object_type:interpreter.cpp">
<p class=func>
  <b class=functitle>def object_type(<em>n</em>)</b><br>
<em>Category: GUI library (C++)</em><br>
<em>File: interpreter.cpp</em><br>
  Type of the object number <em>n</em> as a string "image", "counter", "marker", "cardinplay", "hand", "deck", "messagebox", "cardbox", "cardbook", "menu", or "listbox".
</p>

<a name="put_cardbox:interpreter.cpp">
<p class=func>
  <b class=functitle>def put_cardbox(<em>b</em>, <em>e</em>)</b><br>
<em>Category: GUI library (C++)</em><br>
<em>File: interpreter.cpp</em><br>
  Put a card <em>e</em> or list of cards a e to the card box b. Throw an exception if e is not an imagenumber or contains invalid image number. Otherwise return <em>b</em>.
</p>

<a name="put_cardbox_recenter:interpreter.cpp">
<p class=func>
  <b class=functitle>def put_cardbox_recenter(<em>b</em>, <em>e</em>)</b><br>
<em>Category: GUI library (C++)</em><br>
<em>File: interpreter.cpp</em><br>
  Same as the <tt>put<sub>c</sub>ardbox<sub>r</sub>ecenter</tt>, but move the card box after addition in a such way, that the center point of the box remains in place.
</p>

<a name="put_deck_bottom:interpreter.cpp">
<p class=func>
  <b class=functitle>def put_deck_bottom(<em>d</em>, <em>e</em>)</b><br>
<em>Category: GUI library (C++)</em><br>
<em>File: interpreter.cpp</em><br>
  If <em>e</em> is an integer, put a card number e to the bottom of the deck. If <em>e</em> is a list, convert each element of the list to integer and add corresponding cards to the bottom of the deck. Return deck size if succesful, otherwise <tt>NULL</tt>.
</p>

<a name="put_deck_top:interpreter.cpp">
<p class=func>
  <b class=functitle>def put_deck_top(<em>d</em>, <em>e</em>)</b><br>
<em>Category: GUI library (C++)</em><br>
<em>File: interpreter.cpp</em><br>
  If <em>e</em> is an integer, put a card e to the top of the deck. If <em>e</em> is a list, convert each element of the list to integer and add corresponding cards to the top of the deck. Return the deck size if succesful, otherwise <tt>NULL</tt>.
</p>

<a name="put_hand:interpreter.cpp">
<p class=func>
  <b class=functitle>def put_hand(<em>h</em>, <em>i</em>)</b><br>
<em>Category: GUI library (C++)</em><br>
<em>File: interpreter.cpp</em><br>
  Put a card <em>i</em> to a hand h. Return <tt>NULL</tt> if i is not a imagenumber. Otherwise return <em>h</em>.
</p>

<a name="put_inplay:interpreter.cpp">
<p class=func>
  <b class=functitle>def put_inplay(<em>n</em>, <em>x</em>, <em>y</em>, <em>o</em>, <em>i</em>, <em>p</em>)</b><br>
<em>Category: GUI library (C++)</em><br>
<em>File: interpreter.cpp</em><br>
  Put a card <em>i</em> on the table, center of untapped card at the postition (x,y) and oriented in o degrees clockwise. Object number is n and owning player is <em>p</em>. Return the object number of new object.
</p>

<a name="raise:interpreter.cpp">
<p class=func>
  <b class=functitle>def raise(<em>o</em>)</b><br>
<em>Category: GUI library (C++)</em><br>
<em>File: interpreter.cpp</em><br>
  Raise an object <em>o</em> and all related objects (child and parent objects recursively) above other objects. Return the number of raised objects.
</p>

<a name="redraw:interpreter.cpp">
<p class=func>
  <b class=functitle>def redraw(<em>o</em>)</b><br>
<em>Category: GUI library (C++)</em><br>
<em>File: interpreter.cpp</em><br>
  Draw object <em>o</em> again.
</p>

<a name="refresh:interpreter.cpp">
<p class=func>
  <b class=functitle>def refresh(<em>i</em>)</b><br>
<em>Category: GUI library (C++)</em><br>
<em>File: interpreter.cpp</em><br>
  Disable screen refresh (i.e. don't update screen until <tt>refresh(1)</tt> is called) if <em>i=0</em> or enable it if <em>i\ne 0</em>. Return refresh status before this call.
</p>

<a name="replace_cardbox_recenter:interpreter.cpp">
<p class=func>
  <b class=functitle>def replace_cardbox_recenter(<em>b</em>, <em>e</em>)</b><br>
<em>Category: GUI library (C++)</em><br>
<em>File: interpreter.cpp</em><br>
  Replace the content of the card box <em>b</em> by card or cards <em>e</em>. Keep the center of the box in place.
</p>

<a name="rot:interpreter.cpp">
<p class=func>
  <b class=functitle>def rot(<em>\alpha</em>, <em>c</em>)</b><br>
<em>Category: GUI library (C++)</em><br>
<em>File: interpreter.cpp</em><br>
  Rotate a card <em>c</em> by <em>\alpha</em> degrees.
</p>

<a name="scale_image:interpreter.cpp">
<p class=func>
  <b class=functitle>def scale_image(<em>i</em>, <em>w</em>, <em>h</em>)</b><br>
<em>Category: GUI library (C++)</em><br>
<em>File: interpreter.cpp</em><br>
  Scale an image <em>i</em> to new size <em>w \times h</em>. Return old size (w,h) of the image.
</p>

<a name="screen2table:interpreter.cpp">
<p class=func>
  <b class=functitle>def screen2table(<em>x</em>, <em>y</em>)</b><br>
<em>Category: GUI library (C++)</em><br>
<em>File: interpreter.cpp</em><br>
  Convert screen coordinates (x,y) to table coordinates (x',y').
</p>

<a name="set_attr:interpreter.cpp">
<p class=func>
  <b class=functitle>def set_attr(<em>o</em>, <em>a</em>, <em>b</em>)</b><br>
<em>Category: GUI library (C++)</em><br>
<em>File: interpreter.cpp</em><br>
  Set the value of the widget flag <em>a</em> of the object o to <em>b</em> (See Class Widget).
</p>

<a name="set_bgcolor:interpreter.cpp">
<p class=func>
  <b class=functitle>def set_bgcolor(<em>o</em>, <em>c</em>)</b><br>
<em>Category: GUI library (C++)</em><br>
<em>File: interpreter.cpp</em><br>
  Set the background color for object <em>o</em> (see <tt>set_fgcolor</tt>).
</p>

<a name="set_cardsize:interpreter.cpp">
<p class=func>
  <b class=functitle>def set_cardsize(<em>t</em>, <em>s</em>)</b><br>
<em>Category: GUI library (C++)</em><br>
<em>File: interpreter.cpp</em><br>
  Set card zoom factor <em>s</em> for card type t. The type <em>t</em> is a string "hand", "book", "deck" or "table". Returns old size.
</p>

<a name="set_fgcolor:interpreter.cpp">
<p class=func>
  <b class=functitle>def set_fgcolor(<em>o</em>, <em>c</em>)</b><br>
<em>Category: GUI library (C++)</em><br>
<em>File: interpreter.cpp</em><br>
  Set the foreground color of the object <em>o</em>. Color c should be <tt>NULL</tt> if set to invisible or a list (<em>r,g,b</em>) giving RGB-values between 0 and 255. The previous value is returned.
</p>

<a name="set_name:interpreter.cpp">
<p class=func>
  <b class=functitle>def set_name(<em>o</em>, <em>s</em>)</b><br>
<em>Category: GUI library (C++)</em><br>
<em>File: interpreter.cpp</em><br>
  Give a name <em>s</em> to an object <em>o</em>. Return old name of the object.
</p>

<a name="set_textalign:interpreter.cpp">
<p class=func>
  <b class=functitle>def set_textalign(<em>o</em>, <em>a</em>)</b><br>
<em>Category: GUI library (C++)</em><br>
<em>File: interpreter.cpp</em><br>
  Set the text alignment <em>a</em> (0 = left, 1 = center, 2 = right) for the object <em>o</em>. Old value is returned.
</p>

<a name="set_textcolor:interpreter.cpp">
<p class=func>
  <b class=functitle>def set_textcolor(<em>o</em>, <em>c</em>)</b><br>
<em>Category: GUI library (C++)</em><br>
<em>File: interpreter.cpp</em><br>
  Set the text color for object <em>o</em> (see <tt>set_fgcolor</tt>).
</p>

<a name="set_textfont:interpreter.cpp">
<p class=func>
  <b class=functitle>def set_textfont(<em>o</em>, <em>f</em>)</b><br>
<em>Category: GUI library (C++)</em><br>
<em>File: interpreter.cpp</em><br>
  Set the font for object <em>o</em>.
</p>

<a name="set_textmargin:interpreter.cpp">
<p class=func>
  <b class=functitle>def set_textmargin(<em>o</em>, <em>m</em>)</b><br>
<em>Category: GUI library (C++)</em><br>
<em>File: interpreter.cpp</em><br>
  Set the text margin to <em>m</em> pixels between the object border and the text of the object <em>o</em>. Old value is returned.
</p>

<a name="set_textsize:interpreter.cpp">
<p class=func>
  <b class=functitle>def set_textsize(<em>o</em>, <em>s</em>)</b><br>
<em>Category: GUI library (C++)</em><br>
<em>File: interpreter.cpp</em><br>
  Set the point size of texts for the object <em>o</em>. Old value is returned.
</p>

<a name="set_textvalign:interpreter.cpp">
<p class=func>
  <b class=functitle>def set_textvalign(<em>o</em>, <em>a</em>)</b><br>
<em>Category: GUI library (C++)</em><br>
<em>File: interpreter.cpp</em><br>
  Set the vertical text alignment <em>a</em> (0 = top, 1 = middle, 2 = bottom) for the object <em>o</em>. Old value is returned.
</p>

<a name="set_title:interpreter.cpp">
<p class=func>
  <b class=functitle>def set_title(<em>o</em>, <em>t</em>)</b><br>
<em>Category: GUI library (C++)</em><br>
<em>File: interpreter.cpp</em><br>
  Set title <em>t</em> for the object <em>o</em> and return previous title.
</p>

<a name="table2screen:interpreter.cpp">
<p class=func>
  <b class=functitle>def table2screen(<em>x</em>, <em>y</em>)</b><br>
<em>Category: GUI library (C++)</em><br>
<em>File: interpreter.cpp</em><br>
  Convert screen coordinates (x,y) to table coordinates (x',y').
</p>

<a name="tap:interpreter.cpp">
<p class=func>
  <b class=functitle>def tap(<em>o</em>)</b><br>
<em>Category: GUI library (C++)</em><br>
<em>File: interpreter.cpp</em><br>
  If an object <em>o</em> is not a card in play, return <tt>NULL</tt>. If it as already tapped card, return 0. Otherwise tap the card and return 1.
</p>

<a name="tapped:interpreter.cpp">
<p class=func>
  <b class=functitle>def tapped(<em>o</em>)</b><br>
<em>Category: GUI library (C++)</em><br>
<em>File: interpreter.cpp</em><br>
  If <em>o</em> is not a card in play, return <tt>NULL</tt>. Otherwise return 1 or 0 depending on tapped status.
</p>

<a name="tapped_left:interpreter.cpp">
<p class=func>
  <b class=functitle>def tapped_left(<em>o</em>)</b><br>
<em>Category: GUI library (C++)</em><br>
<em>File: interpreter.cpp</em><br>
  If <em>o</em> is not a card in play, return <tt>NULL</tt>. Otherwise return 1 or 0 depending if card is tapped left or not.
</p>

<a name="tap_left:interpreter.cpp">
<p class=func>
  <b class=functitle>def tap_left(<em>o</em>)</b><br>
<em>Category: GUI library (C++)</em><br>
<em>File: interpreter.cpp</em><br>
  If an object <em>o</em> is not a card in play, return <tt>NULL</tt>. If it as already left tapped card, return 0. Otherwise tap left the card and return 1.
</p>

<a name="text_height:interpreter.cpp">
<p class=func>
  <b class=functitle>def text_height(<em>f</em>, <em>sz</em>, <em>s</em>)</b><br>
<em>Category: GUI library (C++)</em><br>
<em>File: interpreter.cpp</em><br>
  Return the text width of a string <em>s</em> when rendered at point size sz using font <em>f</em>.
</p>

<a name="text_width:interpreter.cpp">
<p class=func>
  <b class=functitle>def text_width(<em>f</em>, <em>sz</em>, <em>s</em>)</b><br>
<em>Category: GUI library (C++)</em><br>
<em>File: interpreter.cpp</em><br>
  Return the text width of a string <em>s</em> when rendered at point size sz using font <em>f</em>.
</p>

<a name="title:interpreter.cpp">
<p class=func>
  <b class=functitle>def title(<em>o</em>)</b><br>
<em>Category: GUI library (C++)</em><br>
<em>File: interpreter.cpp</em><br>
  Return title of the object <em>o</em>.
</p>

<a name="trigger:interpreter.cpp">
<p class=func>
  <b class=functitle>def trigger(<em>s<sub>1</sub></em>, <em>s<sub>2</sub></em>)</b><br>
<em>Category: GUI library (C++)</em><br>
<em>File: interpreter.cpp</em><br>
  Call a trigger named <tt>"<em>s<sub>1</sub></em>"</tt> <tt>"<em>s<sub>2</sub></em>"</tt>. Return <tt>NULL</tt> if the trigger does not exists. Otherwise, return 1 and set a variable <tt>RET</tt> to the last value of evaluated expression in the trigger.
</p>

<a name="untap:interpreter.cpp">
<p class=func>
  <b class=functitle>def untap(<em>o</em>)</b><br>
<em>Category: GUI library (C++)</em><br>
<em>File: interpreter.cpp</em><br>
  If an object <em>o</em> is not a card in play, return <tt>NULL</tt>. If it as already untapped card, return 0. Otherwise untap the card and return 1.
</p>

<a name="untapped:interpreter.cpp">
<p class=func>
  <b class=functitle>def untapped(<em>o</em>)</b><br>
<em>Category: GUI library (C++)</em><br>
<em>File: interpreter.cpp</em><br>
  If <em>o</em> is not a card in play, return <tt>NULL</tt>. Otherwise return 1 or 0 depending on tapped status.
</p>

<a name="w:interpreter.cpp">
<p class=func>
  <b class=functitle>def w(<em>w</em>)</b><br>
<em>Category: GUI library (C++)</em><br>
<em>File: interpreter.cpp</em><br>
  Convert a width component to the physical pixel width.
</p>

<h2>Game data library (C++)</h2>
<a name="age:parser_libcards.cpp">
<p class=func>
  <b class=functitle>def age(<em>n</em>)</b><br>
<em>Category: Game data library (C++)</em><br>
<em>File: parser_libcards.cpp</em><br>
  Card age of the card number <em>n</em> or set named n. Return NULL if <em>n</em> is not a valid card number or set name.
</p>

<a name="Attr:parser_libcards.cpp">
<p class=func>
  <b class=functitle>def Attr(<em>k</em>, <em>n</em>)</b><br>
<em>Category: Game data library (C++)</em><br>
<em>File: parser_libcards.cpp</em><br>
  Same as card<sub>a</sub>ttr, but return "" instead of NULL for missing attribute.
</p>

<a name="attributes:parser_libcards.cpp">
<p class=func>
  <b class=functitle>def attributes()</b><br>
<em>Category: Game data library (C++)</em><br>
<em>File: parser_libcards.cpp</em><br>
  Return the list containing all attributes.
</p>

<a name="attrs:parser_libcards.cpp">
<p class=func>
  <b class=functitle>def attrs(<em>c</em>)</b><br>
<em>Category: Game data library (C++)</em><br>
<em>File: parser_libcards.cpp</em><br>
  Return the sorted list of pairs containg attribute names and values of the cards number <em>c</em>. This list can be used as dictionary.
</p>

<a name="canonical_name:parser_libcards.cpp">
<p class=func>
  <b class=functitle>def canonical_name(<em>n</em>)</b><br>
<em>Category: Game data library (C++)</em><br>
<em>File: parser_libcards.cpp</em><br>
  Unique name of a card number <em>n</em>, which identifies the card by adding a set name and key attribute if otherwise undistinguishable. However, cards with the same properties and the same name have also the same canonical name if both belong in the same set.
</p>

<a name="cards:parser_libcards.cpp">
<p class=func>
  <b class=functitle>def cards(<em>[set]</em>)</b><br>
<em>Category: Game data library (C++)</em><br>
<em>File: parser_libcards.cpp</em><br>
  Return the list of all non-special card numbers if no arguments given. Otherwise, return the card numbers from the given set.
</p>

<a name="card_attr:parser_libcards.cpp">
<p class=func>
  <b class=functitle>def card_attr(<em>k</em>, <em>n</em>)</b><br>
<em>Category: Game data library (C++)</em><br>
<em>File: parser_libcards.cpp</em><br>
  Return card attribute of the card number <em>n</em> with key k. If the cards has <tt>&lt;attr key="</tt>k<tt>" value="</tt>v<tt>"/></tt>  defined in XML-description, return <em>v</em>. Otherwise return <tt>NULL</tt>.
</p>

<a name="card_back:parser_libcards.cpp">
<p class=func>
  <b class=functitle>def card_back(<em>c</em>)</b><br>
<em>Category: Game data library (C++)</em><br>
<em>File: parser_libcards.cpp</em><br>
  Return background image number of the card.
</p>

<a name="decks:parser_libcards.cpp">
<p class=func>
  <b class=functitle>def decks()</b><br>
<em>Category: Game data library (C++)</em><br>
<em>File: parser_libcards.cpp</em><br>
  Return a list of strings containgin deck names available or <tt>NULL</tt> if cannot open deck directory.
</p>

<a name="fuzzy_images:parser_libcards.cpp">
<p class=func>
  <b class=functitle>def fuzzy_images(<em>s</em>)</b><br>
<em>Category: Game data library (C++)</em><br>
<em>File: parser_libcards.cpp</em><br>
  Return a list of image numbers, which has almost the card name <em>s</em>.
</p>

<a name="game_data:parser_libcards.cpp">
<p class=func>
  <b class=functitle>def game_data()</b><br>
<em>Category: Game data library (C++)</em><br>
<em>File: parser_libcards.cpp</em><br>
  Return dictionaty of game data containgin entries <tt>"game"</tt> (name of the game), <tt>"gamedir"</tt> (directory name for the game), <tt>"play"</tt> (attribute to call triggers for when playing a card) and <tt>"location hint"</tt> (attributes to call triggers for when deciding card placement).
</p>

<a name="game_option:parser_libcards.cpp">
<p class=func>
  <b class=functitle>def game_option(<em>o</em>)</b><br>
<em>Category: Game data library (C++)</em><br>
<em>File: parser_libcards.cpp</em><br>
  Return the value of an option <em>o</em> defined in game.xml file.
</p>

<a name="having_rarity:parser_libcards.cpp">
<p class=func>
  <b class=functitle>def having_rarity(<em>rarity</em>, <em> list of cards</em>)</b><br>
<em>Category: Game data library (C++)</em><br>
<em>File: parser_libcards.cpp</em><br>
  Return weighted list of cards having the given rarity. For example, if a card have rarity 'CB+CS2' and we ask for rarity 'CS' then this function returns a list having two occurrences of the card.
</p>

<a name="images:parser_libcards.cpp">
<p class=func>
  <b class=functitle>def images(<em>s</em>)</b><br>
<em>Category: Game data library (C++)</em><br>
<em>File: parser_libcards.cpp</em><br>
  Return a list of image numbers, which has a card name <em>s</em>.
</p>

<a name="inline_images:parser_libcards.cpp">
<p class=func>
  <b class=functitle>def inline_images()</b><br>
<em>Category: Game data library (C++)</em><br>
<em>File: parser_libcards.cpp</em><br>
  Return the list containing inline image tags.
</p>

<a name="load_deck:parser_libcards.cpp">
<p class=func>
  <b class=functitle>def load_deck(<em>s</em>)</b><br>
<em>Category: Game data library (C++)</em><br>
<em>File: parser_libcards.cpp</em><br>
  If a deck named <em>s</em> is available, load it and return a list of strings containing each line of the text file. Return NULL if the deck cannot be loaded.
</p>

<a name="name:parser_libcards.cpp">
<p class=func>
  <b class=functitle>def name(<em>n</em>)</b><br>
<em>Category: Game data library (C++)</em><br>
<em>File: parser_libcards.cpp</em><br>
  Name of the card number <em>n</em>.
</p>

<a name="rarities:parser_libcards.cpp">
<p class=func>
  <b class=functitle>def rarities()</b><br>
<em>Category: Game data library (C++)</em><br>
<em>File: parser_libcards.cpp</em><br>
  Return the list containing all rarities.
</p>

<a name="rules:parser_libcards.cpp">
<p class=func>
  <b class=functitle>def rules()</b><br>
<em>Category: Game data library (C++)</em><br>
<em>File: parser_libcards.cpp</em><br>
  Return the list containing all rule files for this game.
</p>

<a name="scripts:parser_libcards.cpp">
<p class=func>
  <b class=functitle>def scripts()</b><br>
<em>Category: Game data library (C++)</em><br>
<em>File: parser_libcards.cpp</em><br>
  Return a list of strings containging game specific extension scripts under scripts/Game directory.
</p>

<a name="sets:parser_libcards.cpp">
<p class=func>
  <b class=functitle>def sets()</b><br>
<em>Category: Game data library (C++)</em><br>
<em>File: parser_libcards.cpp</em><br>
  List of set abbreviations of loaded card sets.
</p>

<a name="set_data:parser_libcards.cpp">
<p class=func>
  <b class=functitle>def set_data(<em>s</em>)</b><br>
<em>Category: Game data library (C++)</em><br>
<em>File: parser_libcards.cpp</em><br>
  Return a vector <em>(n,c<sub>1</sub>,c<sub>2</sub>)</em> for card set with abbreviation s. Here n is the name of the set, c<sub>1</sub> is the first card of the set and <em>c<sub>2</sub></em> is the last card of the set.
</p>

<a name="set_of:parser_libcards.cpp">
<p class=func>
  <b class=functitle>def set_of(<em>c</em>)</b><br>
<em>Category: Game data library (C++)</em><br>
<em>File: parser_libcards.cpp</em><br>
  return set abbreviation of the set where a card number <em>c</em> belongs to or <tt>NULL</tt> if none.
</p>

<a name="sort_by:parser_libcards.cpp">
<p class=func>
  <b class=functitle>def sort_by(<em>k</em>, <em>L</em>, <em>t</em>)</b><br>
<em>Category: Game data library (C++)</em><br>
<em>File: parser_libcards.cpp</em><br>
  Sort a list of card numbers <em>L</em> according to the key k. If k is a list, then the first list member is used as a primary key, second as a secundary key and so on. Each key can be a string '[att]', where attr is a card attribute. Then that attribute of the card is used as a sorting key. Special attribute "[name]" sorts according to card name and "[set]" accorfing to the card set. The key can be prepended by a character 'N' to force numerical sorting and by a character '-' to force reverse sorting. If an integer <em>t > 0</em> is given, add title entries to the list.
</p>

<a name="text:parser_libcards.cpp">
<p class=func>
  <b class=functitle>def text(<em>n</em>)</b><br>
<em>Category: Game data library (C++)</em><br>
<em>File: parser_libcards.cpp</em><br>
  Card text of the card number <em>n</em>.
</p>

<h2>General client functions</h2>
<a name="ActiveSetMenu:client.functions">
<p class=func>
  <b class=functitle>def ActiveSetMenu()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Create a menu for your cards set aside.
</p>

<a name="AddCard:client.functions">
<p class=func>
  <b class=functitle>def AddCard(<em>card number</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Add a card to my collection.
</p>

<a name="AddCards:client.functions">
<p class=func>
  <b class=functitle>def AddCards(<em>list of card numbers</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Add cards to my collection.
</p>

<a name="AddHistory:client.functions">
<p class=func>
  <b class=functitle>def AddHistory(<em>string</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Add a string to the input history and reset history position.
</p>

<a name="AddMarker:client.functions">
<p class=func>
  <b class=functitle>def AddMarker(<em>object number</em>, <em>marker type</em>, <em>[count]</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Add a marker to the object.
</p>

<a name="AddMinuteTimer:client.functions">
<p class=func>
  <b class=functitle>def AddMinuteTimer(<em>delay in minutes</em>, <em>command</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Add a timer which fires after the given delay.
</p>

<a name="AddRoomPlayer:client.functions">
<p class=func>
  <b class=functitle>def AddRoomPlayer(<em>player number</em>, <em>data</em>, <em>avatar</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Add player to chat room.
</p>

<a name="AddRoomTable:client.functions">
<p class=func>
  <b class=functitle>def AddRoomTable(<em>table number</em>, <em>data</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Add table to chat room.
</p>

<a name="AddTimer:client.functions">
<p class=func>
  <b class=functitle>def AddTimer(<em>delay in seconds</em>, <em>command</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Add a timer which fires after the given delay.
</p>

<a name="AddToDeck:client.functions">
<p class=func>
  <b class=functitle>def AddToDeck(<em>deck name</em>, <em>deck part</em>, <em>card name</em>, <em>count</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Add card(s) to the deck in the deck collection.
</p>

<a name="Alert:client.functions">
<p class=func>
  <b class=functitle>def Alert(<em>message</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Display message box.
</p>

<a name="AlertOff:client.functions">
<p class=func>
  <b class=functitle>def AlertOff()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Hide previously displayed message.
</p>

<a name="ApplyImportDeck:client.functions">
<p class=func>
  <b class=functitle>def ApplyImportDeck(<em>path</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Handle menu selection for import deck menu. Check if path ends with / and show a submenu. Otherwise import the selected deck.
</p>

<a name="ApplyImportDeckBack:client.functions">
<p class=func>
  <b class=functitle>def ApplyImportDeckBack(<em>path</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Handle backing up one level in import path.
</p>

<a name="ASCIIFormatParser:client.functions">
<p class=func>
  <b class=functitle>def ASCIIFormatParser(<em>one or two strings</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Parse ASCII format lines.
</p>

<a name="ASCIIFormatSuffix:client.functions">
<p class=func>
  <b class=functitle>def ASCIIFormatSuffix()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Return filename suffix .txt for ASCII-format.
</p>

<a name="Attach:client.functions">
<p class=func>
  <b class=functitle>def Attach(<em>src object number</em>, <em> target object number</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Attach an object to another.
</p>

<a name="Attachments:client.functions">
<p class=func>
  <b class=functitle>def Attachments(<em>object number</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Return list of attached objects.
</p>

<a name="AvatarFloorPos:client.functions">
<p class=func>
  <b class=functitle>def AvatarFloorPos(<em>player number</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Return (x,y) pair telling location of the avatar on the floor.
</p>

<a name="AvatarRecalcTable:client.functions">
<p class=func>
  <b class=functitle>def AvatarRecalcTable(<em>table</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Reposition all avatar at table.
</p>

<a name="Bid:client.functions">
<p class=func>
  <b class=functitle>def Bid(<em>results</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Handle bidding results (dictionary mapping player numbers to bids).
</p>

<a name="BookChangeForsale:client.functions">
<p class=func>
  <b class=functitle>def BookChangeForsale(<em>card number</em>, <em>difference</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  decrease or increase number of cards for sale.
</p>

<a name="BookFullRefresh:client.functions">
<p class=func>
  <b class=functitle>def BookFullRefresh()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Clear the book content and ask for full refresh.
</p>

<a name="BookGoBack:client.functions">
<p class=func>
  <b class=functitle>def BookGoBack()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Return to the previous indexing in history and remove it from the history.
</p>

<a name="BookSetPrice:client.functions">
<p class=func>
  <b class=functitle>def BookSetPrice(<em>card number</em>, <em>price</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  set my price for a card and update it on server.
</p>

<a name="Buy:client.functions">
<p class=func>
  <b class=functitle>def Buy(<em>list of received cards</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Called when booster/starter bought.
</p>

<a name="CardMenu:client.functions">
<p class=func>
  <b class=functitle>def CardMenu()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Create a menu for single card in play.
</p>

<a name="CardSelectBoxMenu:client.functions">
<p class=func>
  <b class=functitle>def CardSelectBoxMenu()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Menu for card selector.
</p>

<a name="Category:client.functions">
<p class=func>
  <b class=functitle>def Category(<em>card number</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Return the category of the card from rules.category table.
</p>

<a name="CategoryMatch:client.functions">
<p class=func>
  <b class=functitle>def CategoryMatch(<em>category</em>, <em>partial categroy</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Return 1 if a 'category' have includes a 'partial category' at the beginning of it's components.
</p>

<a name="ChatCommandAway:client.functions">
<p class=func>
  <b class=functitle>def ChatCommandAway()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Implementation of /away command.
</p>

<a name="ChatCommandBuy:client.functions">
<p class=func>
  <b class=functitle>def ChatCommandBuy()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Implementation of /buy command.
</p>

<a name="ChatCommandCopydeck:client.functions">
<p class=func>
  <b class=functitle>def ChatCommandCopydeck()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Implementation of /copydeck command.
</p>

<a name="ChatCommandDefault:client.functions">
<p class=func>
  <b class=functitle>def ChatCommandDefault()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Implementation of /default command.
</p>

<a name="ChatCommandGive:client.functions">
<p class=func>
  <b class=functitle>def ChatCommandGive(<em>player</em>, <em>amount</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Implementation of /give command.
</p>

<a name="ChatCommandGo:client.functions">
<p class=func>
  <b class=functitle>def ChatCommandGo()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Implementation of /go command.
</p>

<a name="ChatCommandJoin:client.functions">
<p class=func>
  <b class=functitle>def ChatCommandJoin()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Implementation of /join command.
</p>

<a name="ChatCommandNewdeck:client.functions">
<p class=func>
  <b class=functitle>def ChatCommandNewdeck(<em>name</em>, <em>of</em>, <em>the</em>, <em>deck</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Implementation of /newdeck command.
</p>

<a name="ChatCommandRd:client.functions">
<p class=func>
  <b class=functitle>def ChatCommandRd()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Implementation of /rd command in chat mode.
</p>

<a name="ChatCommandRenamedeck:client.functions">
<p class=func>
  <b class=functitle>def ChatCommandRenamedeck(<em>new name</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Implementation of renamedeck command.
</p>

<a name="ChatCommandSave:client.functions">
<p class=func>
  <b class=functitle>def ChatCommandSave()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Implementation of /save command.
</p>

<a name="ChatCommandSealed:client.functions">
<p class=func>
  <b class=functitle>def ChatCommandSealed()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Implementation of /sealed command.
</p>

<a name="ChatCommandSu:client.functions">
<p class=func>
  <b class=functitle>def ChatCommandSu()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Implementation of /su command.
</p>

<a name="ChatKeyControlKeyD:client.functions">
<p class=func>
  <b class=functitle>def ChatKeyControlKeyD()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Handler for key Control+D in chat mode.
</p>

<a name="ChatKeyControlKeyE:client.functions">
<p class=func>
  <b class=functitle>def ChatKeyControlKeyE()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Handler for key Control+E in chat mode.
</p>

<a name="ChatKeyControlKeyI:client.functions">
<p class=func>
  <b class=functitle>def ChatKeyControlKeyI()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Handler for key Control+I in chat mode.
</p>

<a name="ChatKeyControlKeyS:client.functions">
<p class=func>
  <b class=functitle>def ChatKeyControlKeyS()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Handler for key Control+S in chat mode.
</p>

<a name="ChatKeyControlKeyW:client.functions">
<p class=func>
  <b class=functitle>def ChatKeyControlKeyW()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Handler for key Control+W in chat mode.
</p>

<a name="ChatKeyControlKeyX:client.functions">
<p class=func>
  <b class=functitle>def ChatKeyControlKeyX()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Handler for key Control+X in chat mode.
</p>

<a name="CheckFilterVersion:client.functions">
<p class=func>
  <b class=functitle>def CheckFilterVersion()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Check that stored indices and filters are created with the current algorithm and there were the same number of cards. If different, clear all filters and indices and store new filter version.
</p>

<a name="CheckForCard:client.functions">
<p class=func>
  <b class=functitle>def CheckForCard()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Return a card number, if mouse points to card name (deck listing, etc.) or card image. Otherwise NULL.
</p>

<a name="CheckFunctionsOrQuit:client.functions">
<p class=func>
  <b class=functitle>def CheckFunctionsOrQuit(<em>f</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Quit with an error message if function f is not defined.
</p>

<a name="CheckInitialVariables:client.functions">
<p class=func>
  <b class=functitle>def CheckInitialVariables()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Check that required variables and functions are defined before game initialization.
</p>

<a name="CheckInitialVariablesOrQuit:client.functions">
<p class=func>
  <b class=functitle>def CheckInitialVariablesOrQuit(<em>v</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Quit with an error message if variable v is not defined.
</p>

<a name="CheckLegalitySubmenu:client.functions">
<p class=func>
  <b class=functitle>def CheckLegalitySubmenu()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Deck legality checking menu.
</p>

<a name="ChooseDeckMenu:client.functions">
<p class=func>
  <b class=functitle>def ChooseDeckMenu()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Choose a deck.
</p>

<a name="ClearCardBook:client.functions">
<p class=func>
  <b class=functitle>def ClearCardBook()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Clear content of the collection.
</p>

<a name="ClearEmptyGroups:client.functions">
<p class=func>
  <b class=functitle>def ClearEmptyGroups()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Move cards that has been moved enough since they played to the group ("moved",""). Remove groups without cards on table from 'card.group' table. Fix also cards having (0,0) as their coordinates.
</p>

<a name="ClearGame:client.functions">
<p class=func>
  <b class=functitle>def ClearGame()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Clear table, remove aside, hand, deck and avatar objects.
</p>

<a name="ClearScores:client.functions">
<p class=func>
  <b class=functitle>def ClearScores()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Remove all scores.
</p>

<a name="ClearSearchbox:client.functions">
<p class=func>
  <b class=functitle>def ClearSearchbox()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Clear content of the search box.
</p>

<a name="CommandBind:client.functions">
<p class=func>
  <b class=functitle>def CommandBind(<em>text</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Implementation of /bind command.
</p>

<a name="CommandBindk:client.functions">
<p class=func>
  <b class=functitle>def CommandBindk(<em>text</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Implementation of /bindk command.
</p>

<a name="CommandDisplay:client.functions">
<p class=func>
  <b class=functitle>def CommandDisplay()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Implementation of /display command.
</p>

<a name="CommandEval:client.functions">
<p class=func>
  <b class=functitle>def CommandEval()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Implementation of /eval command.
</p>

<a name="CommandFind:client.functions">
<p class=func>
  <b class=functitle>def CommandFind()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Implementation of /find command.
</p>

<a name="CommandHelp:client.functions">
<p class=func>
  <b class=functitle>def CommandHelp(<em>topic</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Implementation of /help command.
</p>

<a name="CommandLoadimages:client.functions">
<p class=func>
  <b class=functitle>def CommandLoadimages()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Implementation of /loadimages command.
</p>

<a name="CommandLog:client.functions">
<p class=func>
  <b class=functitle>def CommandLog()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Set logging on/off.
</p>

<a name="CommandMe:client.functions">
<p class=func>
  <b class=functitle>def CommandMe()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Implementation of /me command.
</p>

<a name="CommandNewuser:client.functions">
<p class=func>
  <b class=functitle>def CommandNewuser()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Implementation of /newuser command.
</p>

<a name="CommandQuit:client.functions">
<p class=func>
  <b class=functitle>def CommandQuit()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Implementation of /quit command.
</p>

<a name="CommandRefresh:client.functions">
<p class=func>
  <b class=functitle>def CommandRefresh()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Implementation of /refresh command.
</p>

<a name="CommandSelect:client.functions">
<p class=func>
  <b class=functitle>def CommandSelect()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Implementation of /select command.
</p>

<a name="CommandSet:client.functions">
<p class=func>
  <b class=functitle>def CommandSet()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Implementation of /set command.
</p>

<a name="CommandSort:client.functions">
<p class=func>
  <b class=functitle>def CommandSort()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Implementation of /sort command.
</p>

<a name="CommandTables:client.functions">
<p class=func>
  <b class=functitle>def CommandTables()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Implementation of /tables command.
</p>

<a name="CommandUnbind:client.functions">
<p class=func>
  <b class=functitle>def CommandUnbind()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Implementation of /unbind command.
</p>

<a name="CommandUnset:client.functions">
<p class=func>
  <b class=functitle>def CommandUnset()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Implementation of /unset command.
</p>

<a name="CommandWho:client.functions">
<p class=func>
  <b class=functitle>def CommandWho()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Implementation of /who command.
</p>

<a name="ConnectServer:client.functions">
<p class=func>
  <b class=functitle>def ConnectServer(<em>server</em>, <em>port</em>, <em>cookie</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Connect to the game server.
</p>

<a name="ConstructMenu:client.functions">
<p class=func>
  <b class=functitle>def ConstructMenu(<em>context</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Construct a menu and return a menu for the given context by integrating standard entries (MENU variable), game specific entries (GAME<sub>M</sub>ENU variable) and extension defined entries (EXTRA<sub>M</sub>ENU variable) together. A context parameter is one of the following: - 'Main Menu - Chat' chat mode main menu. - 'Main Menu - Play' play mode main menu. - 'Main Menu - Watch' watch mode main menu. - 'Current Deck Menu' deck editor. - 'Tap a card' menu used instead of default tapping menu. - 'A card' - menu added to card in play menu. - 'Deck Draw' - Additional deck menu card draw entries. - 'Table' - game table menu. - 'Open Booster' - opened booster menu. - 'Hand' - my hand menu. - 'Products' - products menu.
</p>

<a name="CoordinateMapping:client.functions">
<p class=func>
  <b class=functitle>def CoordinateMapping(<em>category</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Return coordinate mapping rules of the given category from the 'rules.coordinate' table.
</p>

<a name="CountCanonicalNamePairs:client.functions">
<p class=func>
  <b class=functitle>def CountCanonicalNamePairs(<em>list of card numbers</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Return the list of strings having number of cards and a card name.
</p>

<a name="CounterSubmenu:client.functions">
<p class=func>
  <b class=functitle>def CounterSubmenu()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Choose a counter color.
</p>

<a name="CountNamePairs:client.functions">
<p class=func>
  <b class=functitle>def CountNamePairs(<em>list of card numbers</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Return the list of strings having number of cards and a card name.
</p>

<a name="CreateActive:client.functions">
<p class=func>
  <b class=functitle>def CreateActive(<em>object num</em>, <em>owner player</em>, <em>name</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Create active set.
</p>

<a name="CreateAvatar:client.functions">
<p class=func>
  <b class=functitle>def CreateAvatar(<em>image number</em>, <em>object number</em>, <em>player name</em>, <em>(x</em>, <em>y)</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Create avatar image.
</p>

<a name="CreateDeck:client.functions">
<p class=func>
  <b class=functitle>def CreateDeck(<em>object num</em>, <em>owner player</em>, <em>name</em>, <em>(x</em>, <em>y)</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Create a deck.
</p>

<a name="CreateFilter:client.functions">
<p class=func>
  <b class=functitle>def CreateFilter(<em>filter expressions</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Return a list of cards matching the filter expression.
</p>

<a name="CreateHand:client.functions">
<p class=func>
  <b class=functitle>def CreateHand(<em>object num</em>, <em>owner player</em>, <em>object name</em>, <em>(x</em>, <em>y)</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Create a hand.
</p>

<a name="CreateIndex:client.functions">
<p class=func>
  <b class=functitle>def CreateIndex(<em>(filter expression</em>, <em>sort expression)</em>, <em> list of cards</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Return indexing matching filter/sort expression pair. First filter collection is checked and already calculated value is returned if found. Otherwise it is generated. The sort expression is either single string or a list of strings. If the list begins with a number, then it is taken as a title level depth, i.e. how many sorting criteria are taken into account when constructing the title for the sorted section. Default title depth is one.
</p>

<a name="CreatePanel:client.functions">
<p class=func>
  <b class=functitle>def CreatePanel(<em>name</em>, <em>x</em>, <em>y</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Construct (invisible) objects for the given panel. If the panel already exists, then creation is skipped but the panel is moved to the position (x,y).
</p>

<a name="CreatePlayerIcon:client.functions">
<p class=func>
  <b class=functitle>def CreatePlayerIcon(<em>object num</em>, <em>player name</em>, <em>(x</em>, <em>y)</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Create player icon.
</p>

<a name="CreateScreen:client.functions">
<p class=func>
  <b class=functitle>def CreateScreen(<em>name</em>, <em>list of panels</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Connect number of panels to the one screen.
</p>

<a name="CurrentDeckMenu:client.functions">
<p class=func>
  <b class=functitle>def CurrentDeckMenu()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Menu for current deck editor operations.
</p>

<a name="CurrentFilter:client.functions">
<p class=func>
  <b class=functitle>def CurrentFilter()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Return value of the current filter expression.
</p>

<a name="CurrentSorting:client.functions">
<p class=func>
  <b class=functitle>def CurrentSorting()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Return value of the current sorting expression.
</p>

<a name="DeckMenu:client.functions">
<p class=func>
  <b class=functitle>def DeckMenu()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Create menu for your deck.
</p>

<a name="DeckName:client.functions">
<p class=func>
  <b class=functitle>def DeckName(<em>internal name</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Return human readable version of a deck name.
</p>

<a name="DeckSearchBoxMenu:client.functions">
<p class=func>
  <b class=functitle>def DeckSearchBoxMenu()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Create menu for deck search box.
</p>

<a name="Default:client.functions">
<p class=func>
  <b class=functitle>def Default(<em>group index</em>, <em>card index</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Return a random point at the center of the screen.
</p>

<a name="DefaultInitialPrice:client.functions">
<p class=func>
  <b class=functitle>def DefaultInitialPrice(<em>card number</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Return default initial price for cards using 'price' setting.
</p>

<a name="DelActive:client.functions">
<p class=func>
  <b class=functitle>def DelActive(<em>player</em>, <em>i</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Delete card from the active set.
</p>

<a name="DelCardInGroup:client.functions">
<p class=func>
  <b class=functitle>def DelCardInGroup(<em>object number</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Remove references of the card from table 'card.group'.
</p>

<a name="DelCursor:client.functions">
<p class=func>
  <b class=functitle>def DelCursor()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Remove the cursor from the input line.
</p>

<a name="DelDeck:client.functions">
<p class=func>
  <b class=functitle>def DelDeck(<em>object number</em>, <em>i</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Remove the card at position i from the deck.
</p>

<a name="DelDeckTop:client.functions">
<p class=func>
  <b class=functitle>def DelDeckTop(<em>object number</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Remove top card of the deck.
</p>

<a name="DeleteDeck:client.functions">
<p class=func>
  <b class=functitle>def DeleteDeck(<em>name</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Remove the deck from the collection.
</p>

<a name="DelHand:client.functions">
<p class=func>
  <b class=functitle>def DelHand(<em>player number</em>, <em>i</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Remove the card at position i from the player's hand.
</p>

<a name="DelMarker:client.functions">
<p class=func>
  <b class=functitle>def DelMarker(<em>object number</em>, <em>marker type</em>, <em>[count]</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Delete a marker from the object.
</p>

<a name="DelMenu:client.functions">
<p class=func>
  <b class=functitle>def DelMenu()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Remove current menu if shown.
</p>

<a name="DelRoomPlayer:client.functions">
<p class=func>
  <b class=functitle>def DelRoomPlayer(<em>player number</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Delete player from chat room.
</p>

<a name="DelRoomTable:client.functions">
<p class=func>
  <b class=functitle>def DelRoomTable(<em>table number</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Delete table from chat room.
</p>

<a name="DelTable:client.functions">
<p class=func>
  <b class=functitle>def DelTable(<em>object number</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Del a card 'object number' from the table.
</p>

<a name="DestroyUserDisplay:client.functions">
<p class=func>
  <b class=functitle>def DestroyUserDisplay()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Remove current display if it is user defined.
</p>

<a name="Detach:client.functions">
<p class=func>
  <b class=functitle>def Detach(<em>object number</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Detach an object.
</p>

<a name="DiscardPileMenu:client.functions">
<p class=func>
  <b class=functitle>def DiscardPileMenu()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Create menu for your discard pile.
</p>

<a name="DisplaySubmenu:client.functions">
<p class=func>
  <b class=functitle>def DisplaySubmenu()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Show display options menu.
</p>

<a name="EditAdd:client.functions">
<p class=func>
  <b class=functitle>def EditAdd(<em>deck part</em>, <em>card name or number</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Add a card to the current deck.
</p>

<a name="EditCardname:client.functions">
<p class=func>
  <b class=functitle>def EditCardname()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  return name of the card under mouse on the deck list or NULL if none.
</p>

<a name="EditCardNumber:client.functions">
<p class=func>
  <b class=functitle>def EditCardNumber()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Return (random) card number in deck editor under mouse or NULL if none.
</p>

<a name="EditCountCards:client.functions">
<p class=func>
  <b class=functitle>def EditCountCards(<em>part name</em>, <em>canonical name or number</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Count number of cards in the part of the current deck.
</p>

<a name="EditCreateDeck:client.functions">
<p class=func>
  <b class=functitle>def EditCreateDeck(<em>deck name</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Create a new deck and select it as current deck.
</p>

<a name="EditDel:client.functions">
<p class=func>
  <b class=functitle>def EditDel(<em>deck part</em>, <em>canonical name or number</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Delete a card from the current deck, return 1 if successful.
</p>

<a name="EditNearestPartname:client.functions">
<p class=func>
  <b class=functitle>def EditNearestPartname()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Return name of the deck part above current line.
</p>

<a name="EditPartname:client.functions">
<p class=func>
  <b class=functitle>def EditPartname()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Return name of the deck part title under mouse or NULL if none.
</p>

<a name="ExportASCIIDeck:client.functions">
<p class=func>
  <b class=functitle>def ExportASCIIDeck(<em>deck name</em>, <em>deck structure</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Convert a deck to the list of lines of the ASCII deckfile.
</p>

<a name="ExportCards:client.functions">
<p class=func>
  <b class=functitle>def ExportCards(<em>format</em>, <em>list of card number</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Return a list mapped through conversion table cardmap{"E"}{format}.
</p>

<a name="ExportDeckMenu:client.functions">
<p class=func>
  <b class=functitle>def ExportDeckMenu()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Export a deck.
</p>

<a name="ExportGccgDeck:client.functions">
<p class=func>
  <b class=functitle>def ExportGccgDeck(<em>deck name</em>, <em>deck structure</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Convert a deck to the list of lines of the Gccg deckfile.
</p>

<a name="ExportToFile:client.functions">
<p class=func>
  <b class=functitle>def ExportToFile(<em>deck structure</em>, <em>name</em>, <em>format</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Export a deck to the file.
</p>

<a name="FindCardGroupIndices:client.functions">
<p class=func>
  <b class=functitle>def FindCardGroupIndices(<em>category</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Return a pair (group index,index) by searching for a free slot in 'card.group' table. Add "reserved" entry to the table.
</p>

<a name="FindCards:client.functions">
<p class=func>
  <b class=functitle>def FindCards(<em>count</em>, <em>card name</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Find several card images, preferably images of owned cards.
</p>

<a name="FindOtherCard:client.functions">
<p class=func>
  <b class=functitle>def FindOtherCard(<em>group index</em>, <em>card index</em>, <em>expression</em>, <em>xoffset</em>, <em>yoffset</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Look for other card on table using expression as a search criteria 'expression'. The criteria can use predefined variables 'group', 'category' and 'card'. Symbol # refers to the object number of the card on table under testing.
</p>

<a name="FindSpace:client.functions">
<p class=func>
  <b class=functitle>def FindSpace(<em>card number</em>, <em>orientation</em>, <em>face down?</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Return suitable free location (x,y) to put card in play.
</p>

<a name="Flash:client.functions">
<p class=func>
  <b class=functitle>def Flash(<em>object number</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Flash the object.
</p>

<a name="FreeTablePos:client.functions">
<p class=func>
  <b class=functitle>def FreeTablePos()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Return (x,y) pair of the first free table position.
</p>

<a name="GameSetup:client.functions">
<p class=func>
  <b class=functitle>def GameSetup(<em>my player number</em>, <em>total players</em>, <em>list of player names</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Set the number of players, my playernumber and list of player names.
</p>

<a name="GccgFormatParser:client.functions">
<p class=func>
  <b class=functitle>def GccgFormatParser(<em>one or two strings</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Parse Gccg format lines.
</p>

<a name="GccgFormatSuffix:client.functions">
<p class=func>
  <b class=functitle>def GccgFormatSuffix()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Return filename suffix .deck for Gccg-format.
</p>

<a name="GetByPrimaryCategory:client.functions">
<p class=func>
  <b class=functitle>def GetByPrimaryCategory(<em>category table</em>, <em> primary category</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Return a list of 'category table' table entries having a selected 'primary category'.
</p>

<a name="GetGroups:client.functions">
<p class=func>
  <b class=functitle>def GetGroups(<em>categroy table</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Collect group names from the list of category table entries.
</p>

<a name="GiveCardSubmenu:client.functions">
<p class=func>
  <b class=functitle>def GiveCardSubmenu(<em>card number</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Generate menu for giving a card.
</p>

<a name="GroupNumbers:client.functions">
<p class=func>
  <b class=functitle>def GroupNumbers(<em>primary category</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Return group numbers in use under the given primary category.
</p>

<a name="HandlePriceInput:client.functions">
<p class=func>
  <b class=functitle>def HandlePriceInput()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Handler for number + return, i.e. pricing.
</p>

<a name="HandMenu:client.functions">
<p class=func>
  <b class=functitle>def HandMenu()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Create a menu for your hand.
</p>

<a name="HashComments:client.functions">
<p class=func>
  <b class=functitle>def HashComments(<em>text line</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Return empty string when the text line begins with #-character. Otherwise the line itself.
</p>

<a name="HaveList:client.functions">
<p class=func>
  <b class=functitle>def HaveList(<em>user name</em>, <em>list of cards for sale</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Receive have list from server.
</p>

<a name="HidePanel:client.functions">
<p class=func>
  <b class=functitle>def HidePanel(<em>name</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Turn the panel invisible.
</p>

<a name="HidePlaymat:client.functions">
<p class=func>
  <b class=functitle>def HidePlaymat()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Hide play mode background.
</p>

<a name="ImportAdd:client.functions">
<p class=func>
  <b class=functitle>def ImportAdd(<em>n</em>, <em>card number</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Add n cards to the import.part part of the import.deck structure.
</p>

<a name="ImportASCIIDeck:client.functions">
<p class=func>
  <b class=functitle>def ImportASCIIDeck(<em>file content</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  ASCII-text importer.
</p>

<a name="ImportDeck:client.functions">
<p class=func>
  <b class=functitle>def ImportDeck(<em>file content</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Try to recognize the deck format of the file and then import the deck according to that format. The file content is given as a list of strings representing lines of the file. Return a deck structure or a string describing the reason why import failed.
</p>

<a name="ImportDeckFormat:client.functions">
<p class=func>
  <b class=functitle>def ImportDeckFormat(<em>format</em>, <em>file content</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Import deck in the given format. Arguments and return value as in ImportDeck(). The variables import.deck, import.part and import.error are initialized and filled during the import process. It import.error is still an empty string after the calling appropriate importer, then import.deck structure is returned. Otherwise import.error is returned.
</p>

<a name="ImportDeckMenu:client.functions">
<p class=func>
  <b class=functitle>def ImportDeckMenu(<em>[path]</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Show deck import menu. If path is NULL, show the top level. Otherwise the specified sublevel of decks.
</p>

<a name="ImportDeckMenuEntry:client.functions">
<p class=func>
  <b class=functitle>def ImportDeckMenuEntry(<em>prefix</em>, <em>filename</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Convert a deck filename to an menu entry.
</p>

<a name="ImportErrorAdd:client.functions">
<p class=func>
  <b class=functitle>def ImportErrorAdd(<em>msg</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Add a message msg to import.error variable.
</p>

<a name="ImportGccgDeck:client.functions">
<p class=func>
  <b class=functitle>def ImportGccgDeck(<em>file content</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Gccg-format importer.
</p>

<a name="ImportReaderLineByLine:client.functions">
<p class=func>
  <b class=functitle>def ImportReaderLineByLine(<em>file content</em>, <em>comment stripper</em>, <em>line trimmer</em>, <em>line splitter</em>, <em>line parser</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
   Deck import reader for text formats. Comment stripper, line trimmer and line splitter are function names,which are applied to the each line of the file. Comment stripper removes comments, line trimmer removes unnecessary parts of the line and line splitter converts it to the suitable format to the line parser. The parser updates variables import.error, import.deck and import.part and is applied to every non-empty line after trimming.
</p>

<a name="Initialize:client.functions">
<p class=func>
  <b class=functitle>def Initialize()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Initialize screen objects and variables.
</p>

<a name="InitializeConnection:client.functions">
<p class=func>
  <b class=functitle>def InitializeConnection()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Check the variables and try out servers to connect.
</p>

<a name="InitializeInputSystem:client.functions">
<p class=func>
  <b class=functitle>def InitializeInputSystem()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Load old history and clear input variables.
</p>

<a name="InitializePanelSystem:client.functions">
<p class=func>
  <b class=functitle>def InitializePanelSystem()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Initialize all panel handling variables. Entries for each object in panel<sub>s</sub>tructure are:  (type,name,variable,x,y,w,h,txtc,fgc,bgc,font,ptsz,align,valign,attrs,arg1,arg2,arg3), where  - type[0] is "msgbox" - name[1] is object name - variable[2] is the name of the variable for object number storage or NULL if none - x[3],y[4],w[5],h[6] is object dimensions (first is absolute, the rest are relative to the first object) - txtc[7],fgc[8],bgc[9] are text, foreground and background colors - font[10],ptsz[11],align[12],valign[13] are font info and text alignment - attrs[14] is a list of attributes to set - arg1[15], arg2[16] and arg3[17] are object specific arguments. msgbox: number of lines Entries for each panel in panel<sub>o</sub>ptions are: - none yet.
</p>

<a name="InitializeScoreSystem:client.functions">
<p class=func>
  <b class=functitle>def InitializeScoreSystem()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Initialize score structures and objects.
</p>

<a name="Input:client.functions">
<p class=func>
  <b class=functitle>def Input(<em>string</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Append a string to current command line input at the current cursor position.
</p>

<a name="InputKeyBackspace:client.functions">
<p class=func>
  <b class=functitle>def InputKeyBackspace()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Input line editor handler for key Backspace.
</p>

<a name="InputKeyDelete:client.functions">
<p class=func>
  <b class=functitle>def InputKeyDelete()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Input line editor handler for key Delete.
</p>

<a name="InputKeyEnd:client.functions">
<p class=func>
  <b class=functitle>def InputKeyEnd()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Input line editor handler for key End.
</p>

<a name="InputKeyHome:client.functions">
<p class=func>
  <b class=functitle>def InputKeyHome()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Input line editor handler for key Home.
</p>

<a name="InputKeyLeft:client.functions">
<p class=func>
  <b class=functitle>def InputKeyLeft()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Input line editor handler for key Left.
</p>

<a name="InputKeyRight:client.functions">
<p class=func>
  <b class=functitle>def InputKeyRight()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Input line editor handler for key Right.
</p>

<a name="InputNewline:client.functions">
<p class=func>
  <b class=functitle>def InputNewline()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Clear current input line and append it to the history. Returns the line before clear and converts {lb} and {rb} tags to { and }.
</p>

<a name="InputSplit:client.functions">
<p class=func>
  <b class=functitle>def InputSplit()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Handles prehandling of the input line when editing. Return a pair where the first component is the input line before the cursor and the second component after the cursor. Each component is splitted list of the input, i.e. mixed list of characters and tags.
</p>

<a name="InverseSelectByAttr:client.functions">
<p class=func>
  <b class=functitle>def InverseSelectByAttr(<em>list of card numbers</em>, <em> attr</em>, <em> search</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Return the list of card numbers which do not have an attribute attr which contains search string.
</p>

<a name="IsAway:client.functions">
<p class=func>
  <b class=functitle>def IsAway()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Return 1 if away, 0 if not away or NULL if never set before.
</p>

<a name="IsStayTapped:client.functions">
<p class=func>
  <b class=functitle>def IsStayTapped(<em>object</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Return 1 if object has stay-tapped flag set.
</p>

<a name="IsUserDisplay:client.functions">
<p class=func>
  <b class=functitle>def IsUserDisplay()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Return 1 if the current display is an user defined display.
</p>

<a name="IsVeryNear:client.functions">
<p class=func>
  <b class=functitle>def IsVeryNear(<em>pos</em>, <em>list of positions</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Return index if pos is near some point in the list or NULL if it is not near any point.
</p>

<a name="IsVolatile:client.functions">
<p class=func>
  <b class=functitle>def IsVolatile(<em>list of expressions</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Check the filtering expression and return 1 if it is volatile, i.e. the indexing should be recalculated on every use.
</p>

<a name="is_object:client.functions">
<p class=func>
  <b class=functitle>def is_object(<em>object number</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Return 1 if the object exists.
</p>

<a name="JoinTable:client.functions">
<p class=func>
  <b class=functitle>def JoinTable(<em>player number</em>, <em>table number</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Add player to the table.
</p>

<a name="JudgeChatCommandTime:client.functions">
<p class=func>
  <b class=functitle>def JudgeChatCommandTime(<em>minutes</em>, <em>event</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Add timer calling the event after specified time in minutes.
</p>

<a name="KeyAltKey1:client.functions">
<p class=func>
  <b class=functitle>def KeyAltKey1()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Select counter color "red".
</p>

<a name="KeyAltKey2:client.functions">
<p class=func>
  <b class=functitle>def KeyAltKey2()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Select counter color "green".
</p>

<a name="KeyAltKey3:client.functions">
<p class=func>
  <b class=functitle>def KeyAltKey3()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Select counter color "blue".
</p>

<a name="KeyAltKey4:client.functions">
<p class=func>
  <b class=functitle>def KeyAltKey4()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Select counter color "orange".
</p>

<a name="KeyAltKey5:client.functions">
<p class=func>
  <b class=functitle>def KeyAltKey5()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Select counter color "yellow".
</p>

<a name="KeyAltKey6:client.functions">
<p class=func>
  <b class=functitle>def KeyAltKey6()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Select counter color "black".
</p>

<a name="KeyBackspace:client.functions">
<p class=func>
  <b class=functitle>def KeyBackspace()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Handler for key Backspace.
</p>

<a name="KeyControlKeyB:client.functions">
<p class=func>
  <b class=functitle>def KeyControlKeyB()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Handler for key Control+B.
</p>

<a name="KeyControlKeyC:client.functions">
<p class=func>
  <b class=functitle>def KeyControlKeyC()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Handler for key Control+C.
</p>

<a name="KeyControlKeyH:client.functions">
<p class=func>
  <b class=functitle>def KeyControlKeyH()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Handler for key Control+H.
</p>

<a name="KeyControlKeyP:client.functions">
<p class=func>
  <b class=functitle>def KeyControlKeyP()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Handler for key Control+P.
</p>

<a name="KeyControlKeyPageDown:client.functions">
<p class=func>
  <b class=functitle>def KeyControlKeyPageDown()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Handler for key Control PageDown.
</p>

<a name="KeyControlKeyPageUp:client.functions">
<p class=func>
  <b class=functitle>def KeyControlKeyPageUp()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Handler for key Control PageUp.
</p>

<a name="KeyControlKeyR:client.functions">
<p class=func>
  <b class=functitle>def KeyControlKeyR()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Handler for key Control+R.
</p>

<a name="KeyControlKeyReturn:client.functions">
<p class=func>
  <b class=functitle>def KeyControlKeyReturn()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Handler for key Control+Return.
</p>

<a name="KeyDelete:client.functions">
<p class=func>
  <b class=functitle>def KeyDelete()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Handler for key Delete.
</p>

<a name="KeyDown:client.functions">
<p class=func>
  <b class=functitle>def KeyDown()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Handler for key Down.
</p>

<a name="KeyEnd:client.functions">
<p class=func>
  <b class=functitle>def KeyEnd()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Handler for key End.
</p>

<a name="KeyEnter:client.functions">
<p class=func>
  <b class=functitle>def KeyEnter()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Handler for key Enter.
</p>

<a name="KeyEscape:client.functions">
<p class=func>
  <b class=functitle>def KeyEscape()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Handler for key Escape.
</p>

<a name="KeyF10:client.functions">
<p class=func>
  <b class=functitle>def KeyF10()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Handler for key F10.
</p>

<a name="KeyF11:client.functions">
<p class=func>
  <b class=functitle>def KeyF11()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Handler for key F11.
</p>

<a name="KeyF12:client.functions">
<p class=func>
  <b class=functitle>def KeyF12()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Handler for key F12.
</p>

<a name="KeyF1:client.functions">
<p class=func>
  <b class=functitle>def KeyF1()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Handler for key F1.
</p>

<a name="KeyHome:client.functions">
<p class=func>
  <b class=functitle>def KeyHome()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Handler for key Home.
</p>

<a name="KeyLeft:client.functions">
<p class=func>
  <b class=functitle>def KeyLeft()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Handler for key Left.
</p>

<a name="KeyModifierDown:client.functions">
<p class=func>
  <b class=functitle>def KeyModifierDown(<em>mod</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Called when "shift", "control" or "alt" is pressed down.
</p>

<a name="KeyModifierUp:client.functions">
<p class=func>
  <b class=functitle>def KeyModifierUp(<em>mod</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Called when "shift", "control" or "alt" is released.
</p>

<a name="KeyPageDown:client.functions">
<p class=func>
  <b class=functitle>def KeyPageDown()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Handler for key PageDown.
</p>

<a name="KeyPageUp:client.functions">
<p class=func>
  <b class=functitle>def KeyPageUp()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Handler for key PageUp.
</p>

<a name="KeyReturn:client.functions">
<p class=func>
  <b class=functitle>def KeyReturn()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Handler for key Return.
</p>

<a name="KeyRight:client.functions">
<p class=func>
  <b class=functitle>def KeyRight()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Handler for key Right.
</p>

<a name="KeyTab:client.functions">
<p class=func>
  <b class=functitle>def KeyTab()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Handler for key Tab.
</p>

<a name="KeyUp:client.functions">
<p class=func>
  <b class=functitle>def KeyUp()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Handler for key Up.
</p>

<a name="LeaveChatMode:client.functions">
<p class=func>
  <b class=functitle>def LeaveChatMode()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Cleaning operations when leaving chat mode.
</p>

<a name="LeavePlayMode:client.functions">
<p class=func>
  <b class=functitle>def LeavePlayMode()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Cleaning operations when leaving play mode.
</p>

<a name="LeaveTable:client.functions">
<p class=func>
  <b class=functitle>def LeaveTable(<em>player number</em>, <em>table number</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Delete player from the table.
</p>

<a name="LeaveWatchMode:client.functions">
<p class=func>
  <b class=functitle>def LeaveWatchMode()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Cleaning operations when leaving watch mode.
</p>

<a name="LineSplitFirstSpace:client.functions">
<p class=func>
  <b class=functitle>def LineSplitFirstSpace(<em>text line</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Split a line to two from the first space occurring in the text line. Return the original line if none.
</p>

<a name="LoadAllRules:client.functions">
<p class=func>
  <b class=functitle>def LoadAllRules()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Search all rules for this game and append them to 'deck<sub>r</sub>ules' variable.
</p>

<a name="LoadAllScripts:client.functions">
<p class=func>
  <b class=functitle>def LoadAllScripts()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Search all game specific extension scripts and execute all command-scripts.
</p>

<a name="LoadAvatar:client.functions">
<p class=func>
  <b class=functitle>def LoadAvatar(<em>name</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Load avatar if not loaded.
</p>

<a name="LoadBookState:client.functions">
<p class=func>
  <b class=functitle>def LoadBookState()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Restore the state of the collection from the disk. Return 1 if found, NULL otherwise.
</p>

<a name="LoadMenu:client.functions">
<p class=func>
  <b class=functitle>def LoadMenu(<em>script file</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Append menus found from the script file to the menu.
</p>

<a name="LocationList:client.functions">
<p class=func>
  <b class=functitle>def LocationList(<em>group index</em>, <em>card index</em>, <em>((x1</em>, <em>y1)</em>, <em>(x2</em>, <em>y2)</em>, <em>...)</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Predefined positions.
</p>

<a name="Lower:client.functions">
<p class=func>
  <b class=functitle>def Lower(<em>object number</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Lower an object.
</p>

<a name="LowerAttachments:client.functions">
<p class=func>
  <b class=functitle>def LowerAttachments(<em>object number</em>, <em>xoffset</em>, <em>yoffset</em>, <em>xsuboffset</em>, <em>ysuboffset</em>, <em>index</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Scan through attachments of object starting from index and lower each attachment found.
</p>

<a name="MainLoop:client.functions">
<p class=func>
  <b class=functitle>def MainLoop()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Main loop called frequently.
</p>

<a name="MakeLegalityCheck:client.functions">
<p class=func>
  <b class=functitle>def MakeLegalityCheck(<em>ruleset</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Perform client-side legality check for the current deck.
</p>

<a name="ManualTarget:client.functions">
<p class=func>
  <b class=functitle>def ManualTarget(<em>object number</em>, <em> targeting rule</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Apply targeting manually.
</p>

<a name="Menu:client.functions">
<p class=func>
  <b class=functitle>def Menu(<em>name</em>, <em>entries</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Delete old menu and create new one. Entries are given as triplets (menu text, short cut, code). Either 'code' is executed or appropriate command (if shortcut starts with /) or keyhandler is called.
</p>

<a name="MenuByContext:client.functions">
<p class=func>
  <b class=functitle>def MenuByContext()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Deside which menu to show according to GUI variables.
</p>

<a name="MenuClick:client.functions">
<p class=func>
  <b class=functitle>def MenuClick()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Handle menu event.
</p>

<a name="MergeDeck:client.functions">
<p class=func>
  <b class=functitle>def MergeDeck(<em>deck name</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Add content of the another deck to the current deck.
</p>

<a name="MergeDeckSubmenu:client.functions">
<p class=func>
  <b class=functitle>def MergeDeckSubmenu()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Show merge deck options.
</p>

<a name="Message:client.functions">
<p class=func>
  <b class=functitle>def Message(<em>s</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Print a string s as a message.
</p>

<a name="Mode:client.functions">
<p class=func>
  <b class=functitle>def Mode()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Return current client mode ("sealed",etc.) or "" if none.
</p>

<a name="MouseControlLeftClick:client.functions">
<p class=func>
  <b class=functitle>def MouseControlLeftClick()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Handle control+left click event.
</p>

<a name="MouseControlLeftDragBegin:client.functions">
<p class=func>
  <b class=functitle>def MouseControlLeftDragBegin()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  The beginning of mouse dragging using ctrl+left button.
</p>

<a name="MouseControlLeftDragEnd:client.functions">
<p class=func>
  <b class=functitle>def MouseControlLeftDragEnd()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  The end of mouse dragging using ctrl+left button.
</p>

<a name="MouseControlMiddleClick:client.functions">
<p class=func>
  <b class=functitle>def MouseControlMiddleClick()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Handle control+middle click event.
</p>

<a name="MouseLeftClick:client.functions">
<p class=func>
  <b class=functitle>def MouseLeftClick()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Handle left click event.
</p>

<a name="MouseLeftClickActiveSet:client.functions">
<p class=func>
  <b class=functitle>def MouseLeftClickActiveSet()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Handler for mouse left clicking on active set.
</p>

<a name="MouseLeftClickCard:client.functions">
<p class=func>
  <b class=functitle>def MouseLeftClickCard()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Handler for mouse left clicking a card.
</p>

<a name="MouseLeftClickCardSelectBox:client.functions">
<p class=func>
  <b class=functitle>def MouseLeftClickCardSelectBox()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Apply the selector expression to the selected card.
</p>

<a name="MouseLeftClickCurrentDeck:client.functions">
<p class=func>
  <b class=functitle>def MouseLeftClickCurrentDeck()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Handler for mouse left click on the current deck editor.
</p>

<a name="MouseLeftClickDeck:client.functions">
<p class=func>
  <b class=functitle>def MouseLeftClickDeck()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Handler for mouse left clicking on deck.
</p>

<a name="MouseLeftClickDeckSearchBox:client.functions">
<p class=func>
  <b class=functitle>def MouseLeftClickDeckSearchBox()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Handler for mouse left clicking on deck search box.
</p>

<a name="MouseLeftClickHand:client.functions">
<p class=func>
  <b class=functitle>def MouseLeftClickHand()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Handler for mouse left clicking on hand.
</p>

<a name="MouseLeftClickMyCollection:client.functions">
<p class=func>
  <b class=functitle>def MouseLeftClickMyCollection()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Handler for mouse left click on my collection.
</p>

<a name="MouseLeftClickOpenBooster:client.functions">
<p class=func>
  <b class=functitle>def MouseLeftClickOpenBooster()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Handler for mouse left click on opened booster.
</p>

<a name="MouseLeftClickOpponentHand:client.functions">
<p class=func>
  <b class=functitle>def MouseLeftClickOpponentHand()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Handler for mouse left clicking on opponent's hand.
</p>

<a name="MouseLeftClickTable:client.functions">
<p class=func>
  <b class=functitle>def MouseLeftClickTable()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Handler for mouse left click on table.
</p>

<a name="MouseLeftDragBegin:client.functions">
<p class=func>
  <b class=functitle>def MouseLeftDragBegin()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  The beginning of mouse dragging using left button.
</p>

<a name="MouseLeftDragEnd:client.functions">
<p class=func>
  <b class=functitle>def MouseLeftDragEnd()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  The end of mouse dragging using left button.
</p>

<a name="MouseMiddleClick:client.functions">
<p class=func>
  <b class=functitle>def MouseMiddleClick()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Handle middle click event.
</p>

<a name="MouseMiddleClickCard:client.functions">
<p class=func>
  <b class=functitle>def MouseMiddleClickCard()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Handler for mouse middle clicking a card.
</p>

<a name="MouseMiddleClickCurrentDeck:client.functions">
<p class=func>
  <b class=functitle>def MouseMiddleClickCurrentDeck()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Handler for mouse middle click on the current deck editor.
</p>

<a name="MouseMiddleClickDeckSearchBox:client.functions">
<p class=func>
  <b class=functitle>def MouseMiddleClickDeckSearchBox()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Handler for mouse middle clicking on deck search box.
</p>

<a name="MouseMiddleClickMyCollection:client.functions">
<p class=func>
  <b class=functitle>def MouseMiddleClickMyCollection()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Handler for mouse middle click on my collection.
</p>

<a name="MouseMiddleClickOpenBooster:client.functions">
<p class=func>
  <b class=functitle>def MouseMiddleClickOpenBooster()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Handler for mouse middle click opened booster.
</p>

<a name="MouseMiddleClickTable:client.functions">
<p class=func>
  <b class=functitle>def MouseMiddleClickTable()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Handler for mouse middle click on table.
</p>

<a name="MouseMiddleDragBegin:client.functions">
<p class=func>
  <b class=functitle>def MouseMiddleDragBegin()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  The beginning of mouse dragging using middle button.
</p>

<a name="MouseMiddleDragEnd:client.functions">
<p class=func>
  <b class=functitle>def MouseMiddleDragEnd()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  The end of mouse dragging using middle button.
</p>

<a name="MouseMoveObject:client.functions">
<p class=func>
  <b class=functitle>def MouseMoveObject()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Handler for moving objects using mouse.
</p>

<a name="MouseWheel:client.functions">
<p class=func>
  <b class=functitle>def MouseWheel(<em>dir</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Mouse wheel rolled (dir=0 up, dir=1 down).
</p>

<a name="MouseWheelChatMsg:client.functions">
<p class=func>
  <b class=functitle>def MouseWheelChatMsg(<em>dir</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Mouse wheel handler for additional chat box.
</p>

<a name="MouseWheelCurrentDeck:client.functions">
<p class=func>
  <b class=functitle>def MouseWheelCurrentDeck(<em>dir</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Mouse wheel handler for deck editor (dir=0 up, dir=1 down).
</p>

<a name="MouseWheelMenu:client.functions">
<p class=func>
  <b class=functitle>def MouseWheelMenu(<em>dir</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Mouse wheel handler for menu (dir=0 up, dir=1 down).
</p>

<a name="MouseWheelMyCollection:client.functions">
<p class=func>
  <b class=functitle>def MouseWheelMyCollection(<em>dir</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Mouse wheel handler for collection (dir=0 up, dir=1 down).
</p>

<a name="MoveAvatar:client.functions">
<p class=func>
  <b class=functitle>def MoveAvatar(<em>player number</em>, <em> table or -1</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Move avatar.
</p>

<a name="MoveObject:client.functions">
<p class=func>
  <b class=functitle>def MoveObject(<em>n</em>, <em>x</em>, <em>y</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Move object number 'n' to (x,y).
</p>

<a name="MovePanel:client.functions">
<p class=func>
  <b class=functitle>def MovePanel(<em>name</em>, <em>x</em>, <em>y</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Move panel to the specified position.
</p>

<a name="Msg:client.functions">
<p class=func>
  <b class=functitle>def Msg(<em>s</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Print message without time stamp.
</p>

<a name="MsgChat:client.functions">
<p class=func>
  <b class=functitle>def MsgChat(<em>s</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Print message without time stamp in watch mode chat box.
</p>

<a name="MyCollectionMenu:client.functions">
<p class=func>
  <b class=functitle>def MyCollectionMenu()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Generate menu for card book.
</p>

<a name="MyDeck:client.functions">
<p class=func>
  <b class=functitle>def MyDeck(<em>deck name</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Return object number of the deck.
</p>

<a name="NextFreeAttachPos:client.functions">
<p class=func>
  <b class=functitle>def NextFreeAttachPos(<em>object number</em>, <em>xoffset</em>, <em>yoffset</em>, <em>xsuboffset</em>, <em>ysuboffset</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Find next free position among attachments having given offsets.
</p>

<a name="NextTarget:client.functions">
<p class=func>
  <b class=functitle>def NextTarget()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Return next target in the targeting queue and remove it from the queue. Return value is a list  (object number, card number, xoffset, yoffset, xsuboffset,ysuboffset, options) or NULL if no targets found.
</p>

<a name="None:client.functions">
<p class=func>
  <b class=functitle>def None()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Empty function returning it's arguments.
</p>

<a name="Null:client.functions">
<p class=func>
  <b class=functitle>def Null()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Null command for TCP/IP keepalive.
</p>

<a name="ObjectAt:client.functions">
<p class=func>
  <b class=functitle>def ObjectAt(<em>x</em>, <em>y</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Return an object number whose center point is at (x,y) or NULL if none.
</p>

<a name="ObjH:client.functions">
<p class=func>
  <b class=functitle>def ObjH(<em>object number</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Return the height of the object.
</p>

<a name="ObjW:client.functions">
<p class=func>
  <b class=functitle>def ObjW(<em>object number</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Return the width of the object.
</p>

<a name="OpenBoosterMenu:client.functions">
<p class=func>
  <b class=functitle>def OpenBoosterMenu()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Menu for just opened booster.
</p>

<a name="OpponentActiveSetMenu:client.functions">
<p class=func>
  <b class=functitle>def OpponentActiveSetMenu()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Create a menu for opponent's cards set aside.
</p>

<a name="OpponentDeckMenu:client.functions">
<p class=func>
  <b class=functitle>def OpponentDeckMenu()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Create menu for opponent's deck.
</p>

<a name="OpponentDiscardPileMenu:client.functions">
<p class=func>
  <b class=functitle>def OpponentDiscardPileMenu()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Create menu for opponent's discard pile.
</p>

<a name="OpponentHandMenu:client.functions">
<p class=func>
  <b class=functitle>def OpponentHandMenu()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Create a menu for your opponent's hand.
</p>

<a name="OtherDeckFormats:client.functions">
<p class=func>
  <b class=functitle>def OtherDeckFormats()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Return the list of game specific deck format codes.
</p>

<a name="Owner:client.functions">
<p class=func>
  <b class=functitle>def Owner(<em>object number</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  return player number of the owner of the object.
</p>

<a name="PanelVisible:client.functions">
<p class=func>
  <b class=functitle>def PanelVisible(<em>name</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Return 1 if the panel is visible.
</p>

<a name="ParentObject:client.functions">
<p class=func>
  <b class=functitle>def ParentObject(<em>object number</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Return an object where the given object is attached to or NULL if none.
</p>

<a name="Play:client.functions">
<p class=func>
  <b class=functitle>def Play(<em>card number</em>, <em>face down?</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  call appropriate functions to play a card.
</p>

<a name="PlayCard:client.functions">
<p class=func>
  <b class=functitle>def PlayCard(<em>card number</em>, <em>upside down?</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Default handler for playing card on table.
</p>

<a name="PlayCommandDraw:client.functions">
<p class=func>
  <b class=functitle>def PlayCommandDraw(<em>options</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Implementation of /draw command.
</p>

<a name="PlayCommandInplay:client.functions">
<p class=func>
  <b class=functitle>def PlayCommandInplay()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Implementation of /inplay command in play mode.
</p>

<a name="PlayCommandLegal:client.functions">
<p class=func>
  <b class=functitle>def PlayCommandLegal()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Implementation of /legal command.
</p>

<a name="PlayCommandLose:client.functions">
<p class=func>
  <b class=functitle>def PlayCommandLose()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Implementation of /lose command (not yet implemented).
</p>

<a name="PlayCommandOk:client.functions">
<p class=func>
  <b class=functitle>def PlayCommandOk()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Implementation of /ok command.
</p>

<a name="PlayCommandUndecided:client.functions">
<p class=func>
  <b class=functitle>def PlayCommandUndecided(<em>options</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Implementation of /undecided command.
</p>

<a name="PlayCommandWin:client.functions">
<p class=func>
  <b class=functitle>def PlayCommandWin(<em>options</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Implementation of /win command.
</p>

<a name="PlayerName:client.functions">
<p class=func>
  <b class=functitle>def PlayerName(<em>player number</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Convert chat room player number to name.
</p>

<a name="PlayKeyControlKeyA:client.functions">
<p class=func>
  <b class=functitle>def PlayKeyControlKeyA()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Handler for key Control+A in play mode.
</p>

<a name="PlayKeyControlKeyD:client.functions">
<p class=func>
  <b class=functitle>def PlayKeyControlKeyD()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Handler for key Control+D in play mode.
</p>

<a name="PlayKeyControlKeyDelete:client.functions">
<p class=func>
  <b class=functitle>def PlayKeyControlKeyDelete()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Handler for key Control+Delete in play mode.
</p>

<a name="PlayKeyControlKeyE:client.functions">
<p class=func>
  <b class=functitle>def PlayKeyControlKeyE()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Handler for key Control+E in play mode.
</p>

<a name="PlayKeyControlKeyF:client.functions">
<p class=func>
  <b class=functitle>def PlayKeyControlKeyF()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Handler for key Control+F in play mode.
</p>

<a name="PlayKeyControlKeyHome:client.functions">
<p class=func>
  <b class=functitle>def PlayKeyControlKeyHome()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Handler for key Control+Home in play mode.
</p>

<a name="PlayKeyControlKeyL:client.functions">
<p class=func>
  <b class=functitle>def PlayKeyControlKeyL()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Handler for key Control+L in play mode.
</p>

<a name="PlayKeyControlKeyP:client.functions">
<p class=func>
  <b class=functitle>def PlayKeyControlKeyP()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Handler for key Control+P in play mode.
</p>

<a name="PlayKeyControlKeyS:client.functions">
<p class=func>
  <b class=functitle>def PlayKeyControlKeyS()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Handler for key Control+S in play mode.
</p>

<a name="PlayKeyControlKeyT:client.functions">
<p class=func>
  <b class=functitle>def PlayKeyControlKeyT()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Handler for key Control+T in play mode.
</p>

<a name="PlayKeyControlKeyU:client.functions">
<p class=func>
  <b class=functitle>def PlayKeyControlKeyU()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Handler for key Control+U in play mode.
</p>

<a name="PlayKeyDelete:client.functions">
<p class=func>
  <b class=functitle>def PlayKeyDelete()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Handler for key Delete in play mode.
</p>

<a name="PlayKeyEnd:client.functions">
<p class=func>
  <b class=functitle>def PlayKeyEnd()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Handler for key End in play mode.
</p>

<a name="PlayKeyHome:client.functions">
<p class=func>
  <b class=functitle>def PlayKeyHome()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Handler for key Home in play mode.
</p>

<a name="PlayKeyInsert:client.functions">
<p class=func>
  <b class=functitle>def PlayKeyInsert()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Handler for key Insert in play mode.
</p>

<a name="Positions:client.functions">
<p class=func>
  <b class=functitle>def Positions(<em>object numbers</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Return list of coordinates having center points of objects.
</p>

<a name="PressKey:client.functions">
<p class=func>
  <b class=functitle>def PressKey(<em>key code</em>, <em>key ascii</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Handle keypress, return 0 if not undefined key.
</p>

<a name="PriceDelta:client.functions">
<p class=func>
  <b class=functitle>def PriceDelta(<em>prc</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Search for suitable price increase/decrease step according to the current price prc.
</p>

<a name="ProductLookup:client.functions">
<p class=func>
  <b class=functitle>def ProductLookup(<em>name</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Search for a product name defined by user supplied string.
</p>

<a name="PutActive:client.functions">
<p class=func>
  <b class=functitle>def PutActive(<em>player number</em>, <em>card</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Put a card to the players active set.
</p>

<a name="PutCardInGroup:client.functions">
<p class=func>
  <b class=functitle>def PutCardInGroup(<em>card number</em>, <em>object number</em>, <em>x</em>, <em>y</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Update 'card.group' table replacing "reserved" entry with this card. This hook is called when a card is put to the table. If no "reserved" entry is found, reserve new enrty.
</p>

<a name="PutDeck:client.functions">
<p class=func>
  <b class=functitle>def PutDeck(<em>object number</em>, <em>card number(s)</em>, <em>[real cards]</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Put one or more cards to the top of the deck.
</p>

<a name="PutDeckBottom:client.functions">
<p class=func>
  <b class=functitle>def PutDeckBottom(<em>object number</em>, <em>card number(s)</em>, <em>[real cards]</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Put card(s) to the bottom of the deck.
</p>

<a name="PutHand:client.functions">
<p class=func>
  <b class=functitle>def PutHand(<em>player number</em>, <em>card</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Put a card to the players hand.
</p>

<a name="PutTable:client.functions">
<p class=func>
  <b class=functitle>def PutTable(<em>object number</em>, <em>x</em>, <em>y</em>, <em>orientation</em>, <em>card number</em>, <em>player</em>, <em>real card number</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Put a card owned by player using object number to the table centered at (x,y) using the given orientation. Real card number can be different than card number, if card is placed face down.
</p>

<a name="Quit:client.functions">
<p class=func>
  <b class=functitle>def Quit()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Called when metaserver closes connection.
</p>

<a name="Raise:client.functions">
<p class=func>
  <b class=functitle>def Raise(<em>object number</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Raise an object.
</p>

<a name="RandomNearPoint:client.functions">
<p class=func>
  <b class=functitle>def RandomNearPoint(<em>group index</em>, <em>card index</em>, <em>x</em>, <em>y</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Return random point near (x,y).
</p>

<a name="Receive:client.functions">
<p class=func>
  <b class=functitle>def Receive(<em>e</em>, <em>d</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Network event ('e','d') received.
</p>

<a name="RecognizeCard:client.functions">
<p class=func>
  <b class=functitle>def RecognizeCard(<em>name</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Try to convert a name to card number applying images() and fuzzy<sub>i</sub>mages(). Return NULL if unknown.
</p>

<a name="RecognizeDeckFormat:client.functions">
<p class=func>
  <b class=functitle>def RecognizeDeckFormat(<em>file content</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Return format code for the deck or NULL if not recognized.
</p>

<a name="RefineFilter:client.functions">
<p class=func>
  <b class=functitle>def RefineFilter(<em>single filter expression</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Add expression to the current filter and update the collection to show refined filtering.
</p>

<a name="RefreshBook:client.functions">
<p class=func>
  <b class=functitle>def RefreshBook(<em>list of cards</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Ask for refresh for cards if not yet asked.
</p>

<a name="RefreshBookForDeck:client.functions">
<p class=func>
  <b class=functitle>def RefreshBookForDeck(<em>deck name</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Refresh all cards in deck.
</p>

<a name="RefreshCurrentDeck:client.functions">
<p class=func>
  <b class=functitle>def RefreshCurrentDeck()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Update collection and current deck if selected.
</p>

<a name="RegisterSubmenu:client.functions">
<p class=func>
  <b class=functitle>def RegisterSubmenu()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Set registration menu.
</p>

<a name="RemoveAvatar:client.functions">
<p class=func>
  <b class=functitle>def RemoveAvatar(<em>player name</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Delete avatar from screen.
</p>

<a name="ReplaceTable:client.functions">
<p class=func>
  <b class=functitle>def ReplaceTable(<em>object</em>, <em>card</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Replace card on table with new card image.
</p>

<a name="RestoreDeck:client.functions">
<p class=func>
  <b class=functitle>def RestoreDeck(<em>deck name or id</em>, <em> deck content</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Retrieve the registered deck.
</p>

<a name="RestoreMenuContext:client.functions">
<p class=func>
  <b class=functitle>def RestoreMenuContext()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Restore saved GUI object variables.
</p>

<a name="root_object:client.functions">
<p class=func>
  <b class=functitle>def root_object(<em>object number</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Return the root object of the object.
</p>

<a name="Rotate:client.functions">
<p class=func>
  <b class=functitle>def Rotate(<em>object number</em>, <em> orientation degrees</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Rotate an object.
</p>

<a name="RuleOptions:client.functions">
<p class=func>
  <b class=functitle>def RuleOptions(<em>category</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Return options for the rule matching category.
</p>

<a name="SaveAll:client.functions">
<p class=func>
  <b class=functitle>def SaveAll()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Save all user variables.
</p>

<a name="SaveBookState:client.functions">
<p class=func>
  <b class=functitle>def SaveBookState()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Store the state of the collection to the disk.
</p>

<a name="SaveMenuContext:client.functions">
<p class=func>
  <b class=functitle>def SaveMenuContext()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Save GUI object variables.
</p>

<a name="Say:client.functions">
<p class=func>
  <b class=functitle>def Say(<em>message</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Say given message.
</p>

<a name="Score:client.functions">
<p class=func>
  <b class=functitle>def Score(<em>player</em>, <em> score structure</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Set the current score for player.
</p>

<a name="ScoreToText:client.functions">
<p class=func>
  <b class=functitle>def ScoreToText(<em>score structure</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Convert a score structure to string.
</p>

<a name="ScrollHistory:client.functions">
<p class=func>
  <b class=functitle>def ScrollHistory(<em>dir</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Scroll the input history down if dir is 1 or up if -1. Return value of the history line at the new position.
</p>

<a name="SearchDeck:client.functions">
<p class=func>
  <b class=functitle>def SearchDeck(<em>L</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Set search box content to 'L'.
</p>

<a name="SectionSubmenu:client.functions">
<p class=func>
  <b class=functitle>def SectionSubmenu()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Display page title choices.
</p>

<a name="SelectByAttr:client.functions">
<p class=func>
  <b class=functitle>def SelectByAttr(<em>list of card numbers</em>, <em> attr</em>, <em> search</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Return the list of card numbers which have an attribute attr and it contains search string.
</p>

<a name="SelectCard:client.functions">
<p class=func>
  <b class=functitle>def SelectCard(<em>list of cards</em>, <em> expression</em>, <em>card source</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Select a card and evaluate expression denoting the selected card with #. If card source is not null, the selected card can be transferred with shortcut keys.
</p>

<a name="SelectDeck:client.functions">
<p class=func>
  <b class=functitle>def SelectDeck(<em>deck name</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Called when player selects his deck.
</p>

<a name="SelectDeckPart:client.functions">
<p class=func>
  <b class=functitle>def SelectDeckPart(<em>part</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Select default editing section.
</p>

<a name="SelectMenuChooseADeck:client.functions">
<p class=func>
  <b class=functitle>def SelectMenuChooseADeck()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Handler for selection from deck menu.
</p>

<a name="Send:client.functions">
<p class=func>
  <b class=functitle>def Send(<em>event</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Send network protocol message to the server.
</p>

<a name="SendMeta:client.functions">
<p class=func>
  <b class=functitle>def SendMeta(<em>event</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Send network protocol message to the meta server.
</p>

<a name="SetActive:client.functions">
<p class=func>
  <b class=functitle>def SetActive(<em>player number</em>, <em> card list</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Set content of the active set.
</p>

<a name="SetAvatar:client.functions">
<p class=func>
  <b class=functitle>def SetAvatar(<em>player number</em>, <em>player name</em>, <em>avatar name</em>, <em>table or -1</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Create avatar (if needed) and locate it to the table or floor.
</p>

<a name="SetAwayOff:client.functions">
<p class=func>
  <b class=functitle>def SetAwayOff()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Turn away status off.
</p>

<a name="SetAwayOn:client.functions">
<p class=func>
  <b class=functitle>def SetAwayOn(<em>message</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Turn away status on.
</p>

<a name="SetBookIndex:client.functions">
<p class=func>
  <b class=functitle>def SetBookIndex(<em>filter</em>, <em>sorting</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Set current filter and sorting for the card book. If the (filter,sorting) pair does not yet exist, create it first. If the filtering expression is volatile, don't save index.
</p>

<a name="SetBookPage:client.functions">
<p class=func>
  <b class=functitle>def SetBookPage(<em>page</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Select the page for your collection.
</p>

<a name="SetCardbook:client.functions">
<p class=func>
  <b class=functitle>def SetCardbook(<em>entries</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Update entries (# of cards,for sale,my price) at my card book.
</p>

<a name="SetDeck:client.functions">
<p class=func>
  <b class=functitle>def SetDeck(<em>object number</em>, <em> card list</em>, <em> [identity of cards]</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Set deck content.
</p>

<a name="SetHand:client.functions">
<p class=func>
  <b class=functitle>def SetHand(<em>player number</em>, <em> card list</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Set hand content.
</p>

<a name="SetHandSize:client.functions">
<p class=func>
  <b class=functitle>def SetHandSize(<em>size percentage</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Set hand size with respect to the default size.
</p>

<a name="SetJoinGame:client.functions">
<p class=func>
  <b class=functitle>def SetJoinGame(<em>player</em>, <em>table</em>, <em>0 or 1</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Player joins (1) or leaves (0) the game at table.
</p>

<a name="SetMe:client.functions">
<p class=func>
  <b class=functitle>def SetMe(<em>number</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Set my player number.
</p>

<a name="SetMode:client.functions">
<p class=func>
  <b class=functitle>def SetMode(<em>mode</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Change current client mode "menu","chat","play" or "watch".
</p>

<a name="SetMoney:client.functions">
<p class=func>
  <b class=functitle>def SetMoney(<em>amount</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Set current amount of money.
</p>

<a name="SetMyName:client.functions">
<p class=func>
  <b class=functitle>def SetMyName(<em>name</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Set my name.
</p>

<a name="SetOption:client.functions">
<p class=func>
  <b class=functitle>def SetOption(<em>option</em>, <em>value</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Set option during a game.
</p>

<a name="SetPassword:client.functions">
<p class=func>
  <b class=functitle>def SetPassword(<em>user</em>, <em>password</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Set and save password for user.
</p>

<a name="SetPrice:client.functions">
<p class=func>
  <b class=functitle>def SetPrice(<em>card number</em>, <em>(seller</em>, <em>price)</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Set price data for a card in card book.
</p>

<a name="SetProducts:client.functions">
<p class=func>
  <b class=functitle>def SetProducts(<em>product list</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Set content of product list.
</p>

<a name="SetScore:client.functions">
<p class=func>
  <b class=functitle>def SetScore(<em>player</em>, <em>value</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Set value of player's score counter.
</p>

<a name="SetStayTapped:client.functions">
<p class=func>
  <b class=functitle>def SetStayTapped()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Set stay-tapped flag for card under the mouse.
</p>

<a name="ShowHelp:client.functions">
<p class=func>
  <b class=functitle>def ShowHelp()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Show help text.
</p>

<a name="ShowPanel:client.functions">
<p class=func>
  <b class=functitle>def ShowPanel(<em>name</em>, <em>[state]</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Turn the panel visible or hide it if state is given and zero or NULL.
</p>

<a name="ShowPlaymat:client.functions">
<p class=func>
  <b class=functitle>def ShowPlaymat()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Load play mode background and turn playmat visible.
</p>

<a name="ShowScreen:client.functions">
<p class=func>
  <b class=functitle>def ShowScreen(<em>name</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Hide previous screen (if any) and display the given screen.
</p>

<a name="SingleCardMenu:client.functions">
<p class=func>
  <b class=functitle>def SingleCardMenu(<em>context</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Return menu items for single card.
</p>

<a name="SlashCommand:client.functions">
<p class=func>
  <b class=functitle>def SlashCommand(<em>string</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Analyze and execute chat /-command.
</p>

<a name="SlashComments:client.functions">
<p class=func>
  <b class=functitle>def SlashComments(<em>text line</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Return empty string when the text line begins with //. Otherwise the line itself.
</p>

<a name="Special:client.functions">
<p class=func>
  <b class=functitle>def Special(<em>function</em>, <em> args</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Handle game specific special commands.
</p>

<a name="SplitToWords:client.functions">
<p class=func>
  <b class=functitle>def SplitToWords(<em>string</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Split an input string to the pieces. Each member of the return list is either a single letter or a tag.
</p>

<a name="StacksByGroup:client.functions">
<p class=func>
  <b class=functitle>def StacksByGroup(<em>group index</em>, <em>card index</em>, <em>x</em>, <em>y</em>, <em>xoffset</em>, <em>yoffset</em>, <em>stack x-step</em>, <em>stack y-step</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Each group forms own vertical stack.
</p>

<a name="StartChatMode:client.functions">
<p class=func>
  <b class=functitle>def StartChatMode()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Initialization of the chat mode.
</p>

<a name="StartPlayMode:client.functions">
<p class=func>
  <b class=functitle>def StartPlayMode()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Initialization of the play mode.
</p>

<a name="StartWatchMode:client.functions">
<p class=func>
  <b class=functitle>def StartWatchMode()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Initialization of the watch mode.
</p>

<a name="str2filter_atom:client.functions">
<p class=func>
  <b class=functitle>def str2filter_atom(<em>string</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Helper function for String2Filter(). Parse atomic expression and return a pair (e,t), where e is the expression corresponding the atom, t is a presenting type the type of expression "i"/"r"/"s" (integer,real,string).
</p>

<a name="str2filter_exp:client.functions">
<p class=func>
  <b class=functitle>def str2filter_exp(<em>string</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Helper function for String2Filter(). Parse logical expression.
</p>

<a name="str2filter_join:client.functions">
<p class=func>
  <b class=functitle>def str2filter_join(<em>(e1</em>, <em>e2)</em>, <em>operator</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Join one or two triplets together by adding operator string between them. If two triplets are given, they are assumed to have the same type.
</p>

<a name="str2filter_rel:client.functions">
<p class=func>
  <b class=functitle>def str2filter_rel(<em>string</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Helper function for String2Filter(). Parse comparison relation.
</p>

<a name="str2filter_split:client.functions">
<p class=func>
  <b class=functitle>def str2filter_split(<em>string</em>, <em>split string</em>, <em>function</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Helper function for String2Filter(). Try to split a string from every possible index containing a split string. Call a function for each splitted part and return a list containing two return values of the successful call. Return NULL if the string cannot be splitted legally from any position. (See str2filter<sub>a</sub>tom for more info about return values).
</p>

<a name="str2filter_sum:client.functions">
<p class=func>
  <b class=functitle>def str2filter_sum(<em>string</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Helper function for String2Filter(). Parse sum expression.
</p>

<a name="str2filter_term:client.functions">
<p class=func>
  <b class=functitle>def str2filter_term(<em>string</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Helper function for String2Filter(). Parse multiplication expression.
</p>

<a name="str2filter_typeconvert:client.functions">
<p class=func>
  <b class=functitle>def str2filter_typeconvert(<em>e1</em>, <em>e2</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Helper function for String2Filter(). Check compatibility of types for triplets e1 and e2 (See str2filter<sub>a</sub>tom for info about triplets). If incompatible, add proper type conversion to the expression and change a type of the return value. If an argument e2 is not given, return arguments unmodified.
</p>

<a name="str2filter_typetoint:client.functions">
<p class=func>
  <b class=functitle>def str2filter_typetoint(<em>e1</em>, <em>e2</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Helper function for String2Filter(). Convert types to integer when needed.
</p>

<a name="str2filter_typetostring:client.functions">
<p class=func>
  <b class=functitle>def str2filter_typetostring(<em>e1</em>, <em>e2</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Helper function for String2Filter(). Convert types to string when needed.
</p>

<a name="str2sorting:client.functions">
<p class=func>
  <b class=functitle>def str2sorting(<em>string</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Helper function to String2Sorting().
</p>

<a name="String2Filter:client.functions">
<p class=func>
  <b class=functitle>def String2Filter(<em>string</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Convert a string to the filter expression or return NULL if invalid.
</p>

<a name="String2Sorting:client.functions">
<p class=func>
  <b class=functitle>def String2Sorting(<em>string</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Convert a string to the sorting expression,  or return NULL if invalid.
</p>

<a name="Submenu:client.functions">
<p class=func>
  <b class=functitle>def Submenu(<em>name</em>, <em>entries</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Create submenu (same as Menu() right now).
</p>

<a name="subobjects:client.functions">
<p class=func>
  <b class=functitle>def subobjects(<em>object number</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Return all direct subobjects of the object.
</p>

<a name="Table:client.functions">
<p class=func>
  <b class=functitle>def Table()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Return number of table where i am sitting or -1.
</p>

<a name="TableCoord:client.functions">
<p class=func>
  <b class=functitle>def TableCoord(<em>table number</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Convert table number to (x,y) pair describing position of the table.
</p>

<a name="TableMenu:client.functions">
<p class=func>
  <b class=functitle>def TableMenu()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Menu for tables.
</p>

<a name="TableNumber:client.functions">
<p class=func>
  <b class=functitle>def TableNumber(<em>object number</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Convert object number to table number.
</p>

<a name="TableObject:client.functions">
<p class=func>
  <b class=functitle>def TableObject(<em>table number</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Convert table number to object number presenting the table.
</p>

<a name="TargetCard:client.functions">
<p class=func>
  <b class=functitle>def TargetCard(<em>group index</em>, <em>card index</em>, <em>xoffset</em>, <em>yoffset</em>, <em>xsuboffset</em>, <em>ysuboffset</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Choose a target for card.
</p>

<a name="TargetingOptions:client.functions">
<p class=func>
  <b class=functitle>def TargetingOptions()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Return the list of targetting (category,group) pairs defined for this game.
</p>

<a name="Timer15Seconds:client.functions">
<p class=func>
  <b class=functitle>def Timer15Seconds()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Timer which is called every 15 seconds. Unused.
</p>

<a name="Timer5Seconds:client.functions">
<p class=func>
  <b class=functitle>def Timer5Seconds()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Timer which is called every 5 seconds. Handle timer<sub>m</sub>inute queue.
</p>

<a name="Timer:client.functions">
<p class=func>
  <b class=functitle>def Timer()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Timer function to handle timer events in queue every second if the queue is not empty.
</p>

<a name="TimerMinute:client.functions">
<p class=func>
  <b class=functitle>def TimerMinute()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Timer which is called every minute. Send NULL to meta server.
</p>

<a name="TogglePanel:client.functions">
<p class=func>
  <b class=functitle>def TogglePanel(<em>name</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Toggle visibility status of the panel.
</p>

<a name="TrimSpaces:client.functions">
<p class=func>
  <b class=functitle>def TrimSpaces(<em>text line</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Remove spaces from the beginning and the end of text line.
</p>

<a name="TryTransferTo:client.functions">
<p class=func>
  <b class=functitle>def TryTransferTo(<em>e</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Check the object under cursor and send transfer request to destination 'e' if the object was recognized.
</p>

<a name="UnsetStayTapped:client.functions">
<p class=func>
  <b class=functitle>def UnsetStayTapped()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Clear stay-tapped flag for card under the mouse.
</p>

<a name="UpdatePanel:client.functions">
<p class=func>
  <b class=functitle>def UpdatePanel(<em>panel</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Refresh a content of the panel by calling appropriate function.
</p>

<a name="UpdateProductsPanel:client.functions">
<p class=func>
  <b class=functitle>def UpdateProductsPanel()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Refresh content of the product panel.
</p>

<a name="WantList:client.functions">
<p class=func>
  <b class=functitle>def WantList(<em>user name</em>, <em>list of wanted cards</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Receive want list from server.
</p>

<a name="WatchActiveSetMenu:client.functions">
<p class=func>
  <b class=functitle>def WatchActiveSetMenu()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Nothing.
</p>

<a name="WatchCardMenu:client.functions">
<p class=func>
  <b class=functitle>def WatchCardMenu()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Create single card menu during watch mode.
</p>

<a name="WatchCommandInplay:client.functions">
<p class=func>
  <b class=functitle>def WatchCommandInplay()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Implementation of /inplay command in watch mode.
</p>

<a name="WatchCommandNewdeck:client.functions">
<p class=func>
  <b class=functitle>def WatchCommandNewdeck(<em>name</em>, <em>of</em>, <em>the</em>, <em>deck</em>)</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Implementation of /newdeck command.
</p>

<a name="WatchCommandRd:client.functions">
<p class=func>
  <b class=functitle>def WatchCommandRd()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Implementation of /rd command in watch mode.
</p>

<a name="WatchDeckMenu:client.functions">
<p class=func>
  <b class=functitle>def WatchDeckMenu()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Nothing.
</p>

<a name="WatchDeckSearchBoxMenu:client.functions">
<p class=func>
  <b class=functitle>def WatchDeckSearchBoxMenu()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Create deck search box menu during watch mode.
</p>

<a name="WatchDiscardPileMenu:client.functions">
<p class=func>
  <b class=functitle>def WatchDiscardPileMenu()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Nothing.
</p>

<a name="WatchHandMenu:client.functions">
<p class=func>
  <b class=functitle>def WatchHandMenu()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Nothing.
</p>

<a name="WatchKeyControlKeyD:client.functions">
<p class=func>
  <b class=functitle>def WatchKeyControlKeyD()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Handler for key Control+D in watch mode.
</p>

<a name="WatchKeyControlKeyE:client.functions">
<p class=func>
  <b class=functitle>def WatchKeyControlKeyE()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Handler for key Control+E in watch mode.
</p>

<a name="WatchKeyControlKeyI:client.functions">
<p class=func>
  <b class=functitle>def WatchKeyControlKeyI()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Handler for key Control+I in watch mode.
</p>

<a name="WatchKeyControlKeyS:client.functions">
<p class=func>
  <b class=functitle>def WatchKeyControlKeyS()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Handler for key Control+S in chat mode.
</p>

<a name="WatchKeyControlKeyW:client.functions">
<p class=func>
  <b class=functitle>def WatchKeyControlKeyW()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Handler for key Control+W in watch mode.
</p>

<a name="WatchKeyControlKeyX:client.functions">
<p class=func>
  <b class=functitle>def WatchKeyControlKeyX()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Handler for key Control+X in watch mode.
</p>

<a name="WatchOpponentDeckMenu:client.functions">
<p class=func>
  <b class=functitle>def WatchOpponentDeckMenu()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Create deck menu during watch mode.
</p>

<a name="WatchOpponentDiscardPileMenu:client.functions">
<p class=func>
  <b class=functitle>def WatchOpponentDiscardPileMenu()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Create opponent's discard pile menu during watch mode.
</p>

<a name="WatchOpponentHandMenu:client.functions">
<p class=func>
  <b class=functitle>def WatchOpponentHandMenu()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Nothing.
</p>

<a name="_EndGame:client.functions">
<p class=func>
  <b class=functitle>def _EndGame()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Game over. Close connections.
</p>

<a name="_InitializeGame:client.functions">
<p class=func>
  <b class=functitle>def _InitializeGame()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Initialize game variables.
</p>

<a name="_StartGame:client.functions">
<p class=func>
  <b class=functitle>def _StartGame()</b><br>
<em>Category: General client functions</em><br>
<em>File: client.functions</em><br>
  Initialize a game.
</p>

<h2>General factory server functions</h2>
<a name="CardsOfSetWithRarity:factory-server.functions">
<p class=func>
  <b class=functitle>def CardsOfSetWithRarity(<em>card numbers</em>, <em>rarity</em>)</b><br>
<em>Category: General factory server functions</em><br>
<em>File: factory-server.functions</em><br>
  Return weighted set of cards with given rarity.
</p>

<a name="FixedSet:factory-server.functions">
<p class=func>
  <b class=functitle>def FixedSet(<em>set</em>, <em>list of card names</em>)</b><br>
<em>Category: General factory server functions</em><br>
<em>File: factory-server.functions</em><br>
  return fixed set of card numbers.
</p>

<a name="Initialize:factory-server.functions">
<p class=func>
  <b class=functitle>def Initialize()</b><br>
<em>Category: General factory server functions</em><br>
<em>File: factory-server.functions</em><br>
  Initialize all card distribution tables.
</p>

<a name="InitTables:factory-server.functions">
<p class=func>
  <b class=functitle>def InitTables(<em>set abbrev</em>)</b><br>
<em>Category: General factory server functions</em><br>
<em>File: factory-server.functions</em><br>
  Initialize card distribution tables for a set.
</p>

<a name="Log:factory-server.functions">
<p class=func>
  <b class=functitle>def Log(<em>message</em>)</b><br>
<em>Category: General factory server functions</em><br>
<em>File: factory-server.functions</em><br>
  Print a message with date and time.
</p>

<a name="Produce:factory-server.functions">
<p class=func>
  <b class=functitle>def Produce(<em>set</em>, <em>type</em>)</b><br>
<em>Category: General factory server functions</em><br>
<em>File: factory-server.functions</em><br>
  Return "booster" or "starter" of set.
</p>

<a name="RandomCardSet:factory-server.functions">
<p class=func>
  <b class=functitle>def RandomCardSet(<em>set abbrev</em>, <em>distribution</em>)</b><br>
<em>Category: General factory server functions</em><br>
<em>File: factory-server.functions</em><br>
  Return random sample of cards with given distribution.
</p>

<h2>General game server functions</h2>
<a name="AcceptableResult:server.functions">
<p class=func>
  <b class=functitle>def AcceptableResult(<em>text</em>)</b><br>
<em>Category: General game server functions</em><br>
<em>File: server.functions</em><br>
  return list of acceptable results.
</p>

<a name="AcceptResult:server.functions">
<p class=func>
  <b class=functitle>def AcceptResult()</b><br>
<em>Category: General game server functions</em><br>
<em>File: server.functions</em><br>
  Give acceptance to the currently declared result.
</p>

<a name="Action:server.functions">
<p class=func>
  <b class=functitle>def Action(<em>s</em>)</b><br>
<em>Category: General game server functions</em><br>
<em>File: server.functions</em><br>
  Player takes an action 's'.
</p>

<a name="AddMarker:server.functions">
<p class=func>
  <b class=functitle>def AddMarker(<em>object number</em>, <em>marker type</em>, <em>[count]</em>)</b><br>
<em>Category: General game server functions</em><br>
<em>File: server.functions</em><br>
  Add or del marker(s) on object.
</p>

<a name="AllDecksLoaded:server.functions">
<p class=func>
  <b class=functitle>def AllDecksLoaded()</b><br>
<em>Category: General game server functions</em><br>
<em>File: server.functions</em><br>
  Return 1 if all players have uploaded their decks.
</p>

<a name="AssignPlayer:server.functions">
<p class=func>
  <b class=functitle>def AssignPlayer(<em>player name</em>, <em>player  number</em>)</b><br>
<em>Category: General game server functions</em><br>
<em>File: server.functions</em><br>
  Reassign player with the name to the number. Player having the number before reassignment gets the current player number of the player to be assigned. Note: this function does not transfer cards, only connections and scores are remapped. So, this is identical to exchanging seats in the table, but not exchanging any cards.
</p>

<a name="Attach:server.functions">
<p class=func>
  <b class=functitle>def Attach(<em>src object number</em>, <em> target object number</em>)</b><br>
<em>Category: General game server functions</em><br>
<em>File: server.functions</em><br>
  Detach an object and attach it to the another target.
</p>

<a name="AvatarPos:server.functions">
<p class=func>
  <b class=functitle>def AvatarPos(<em>player number</em>)</b><br>
<em>Category: General game server functions</em><br>
<em>File: server.functions</em><br>
  Return position of the avatar in server coordinates.
</p>

<a name="Command:server.functions">
<p class=func>
  <b class=functitle>def Command(<em>cmd string</em>)</b><br>
<em>Category: General game server functions</em><br>
<em>File: server.functions</em><br>
  Handle special commands.
</p>

<a name="CommandBid:server.functions">
<p class=func>
  <b class=functitle>def CommandBid(<em>bid</em>)</b><br>
<em>Category: General game server functions</em><br>
<em>File: server.functions</em><br>
  Store arguments and display all bids if all players has placed their bids.
</p>

<a name="CommandDelgame:server.functions">
<p class=func>
  <b class=functitle>def CommandDelgame()</b><br>
<em>Category: General game server functions</em><br>
<em>File: server.functions</em><br>
  Delete saved game.
</p>

<a name="CommandLoadgame:server.functions">
<p class=func>
  <b class=functitle>def CommandLoadgame()</b><br>
<em>Category: General game server functions</em><br>
<em>File: server.functions</em><br>
  Load saved game status.
</p>

<a name="CommandReload:server.functions">
<p class=func>
  <b class=functitle>def CommandReload()</b><br>
<em>Category: General game server functions</em><br>
<em>File: server.functions</em><br>
  Reload function definions.
</p>

<a name="CommandRtfm:server.functions">
<p class=func>
  <b class=functitle>def CommandRtfm()</b><br>
<em>Category: General game server functions</em><br>
<em>File: server.functions</em><br>
  Show some extra help.
</p>

<a name="CommandSavegame:server.functions">
<p class=func>
  <b class=functitle>def CommandSavegame()</b><br>
<em>Category: General game server functions</em><br>
<em>File: server.functions</em><br>
  Save current game status.
</p>

<a name="Con2Plr:server.functions">
<p class=func>
  <b class=functitle>def Con2Plr(<em>connection</em>)</b><br>
<em>Category: General game server functions</em><br>
<em>File: server.functions</em><br>
  Convert client connection number to player number. Return NULL if no such connection.
</p>

<a name="CoordToPlr:server.functions">
<p class=func>
  <b class=functitle>def CoordToPlr(<em>x</em>, <em>y</em>, <em>p</em>)</b><br>
<em>Category: General game server functions</em><br>
<em>File: server.functions</em><br>
  Convert server coordinates (x,y) to player coordinates for player or watcher p.
</p>

<a name="CoordToSvr:server.functions">
<p class=func>
  <b class=functitle>def CoordToSvr(<em>x</em>, <em>y</em>, <em>p</em>)</b><br>
<em>Category: General game server functions</em><br>
<em>File: server.functions</em><br>
  Convert player coordinates (x,y) for player 'p' to server coordinates.
</p>

<a name="CreateDeck:server.functions">
<p class=func>
  <b class=functitle>def CreateDeck(<em>owner</em>, <em>name</em>, <em>x</em>, <em>y</em>)</b><br>
<em>Category: General game server functions</em><br>
<em>File: server.functions</em><br>
  Create new deck to the game.
</p>

<a name="CreatePlayerObjects:server.functions">
<p class=func>
  <b class=functitle>def CreatePlayerObjects(<em>player</em>)</b><br>
<em>Category: General game server functions</em><br>
<em>File: server.functions</em><br>
  Create GUI objects for decks, hands, etc. related  to the player by sending appropriate creation commands to all.
</p>

<a name="DeckName:server.functions">
<p class=func>
  <b class=functitle>def DeckName(<em>object number</em>)</b><br>
<em>Category: General game server functions</em><br>
<em>File: server.functions</em><br>
  Return human readable version of a deck.
</p>

<a name="DeclareResult:server.functions">
<p class=func>
  <b class=functitle>def DeclareResult(<em>win|lose|draw|undecided</em>, <em>optional sub type</em>)</b><br>
<em>Category: General game server functions</em><br>
<em>File: server.functions</em><br>
  Declare the result of the game.
</p>

<a name="DelMarker:server.functions">
<p class=func>
  <b class=functitle>def DelMarker(<em>object number</em>, <em>marker type</em>, <em>[count]</em>)</b><br>
<em>Category: General game server functions</em><br>
<em>File: server.functions</em><br>
  Delete marker(s) from an object.
</p>

<a name="Detach:server.functions">
<p class=func>
  <b class=functitle>def Detach(<em>object number</em>)</b><br>
<em>Category: General game server functions</em><br>
<em>File: server.functions</em><br>
  Detach an object if attached.
</p>

<a name="EndGame:server.functions">
<p class=func>
  <b class=functitle>def EndGame()</b><br>
<em>Category: General game server functions</em><br>
<em>File: server.functions</em><br>
  Close the current game.
</p>

<a name="Flip:server.functions">
<p class=func>
  <b class=functitle>def Flip(<em>object number</em>)</b><br>
<em>Category: General game server functions</em><br>
<em>File: server.functions</em><br>
  Reval or hide object.
</p>

<a name="Group:server.functions">
<p class=func>
  <b class=functitle>def Group(<em>object number</em>)</b><br>
<em>Category: General game server functions</em><br>
<em>File: server.functions</em><br>
  Return list of all cards attached recursively including card itself in table stacking order.
</p>

<a name="HandleMetaServer:server.functions">
<p class=func>
  <b class=functitle>def HandleMetaServer(<em>event</em>)</b><br>
<em>Category: General game server functions</em><br>
<em>File: server.functions</em><br>
  Handle meta server instruction.
</p>

<a name="HandPos:server.functions">
<p class=func>
  <b class=functitle>def HandPos(<em>player number</em>)</b><br>
<em>Category: General game server functions</em><br>
<em>File: server.functions</em><br>
  Return position of the hand cards in server coordinates.
</p>

<a name="Image:server.functions">
<p class=func>
  <b class=functitle>def Image(<em>card number</em>, <em>visibility</em>)</b><br>
<em>Category: General game server functions</em><br>
<em>File: server.functions</em><br>
  Return card number or it's background if not visible.
</p>

<a name="InitializeWatcher:server.functions">
<p class=func>
  <b class=functitle>def InitializeWatcher(<em>player number</em>)</b><br>
<em>Category: General game server functions</em><br>
<em>File: server.functions</em><br>
  Initialize structures and send current game status to watcher.
</p>

<a name="InitServer:server.functions">
<p class=func>
  <b class=functitle>def InitServer(<em>nmb.of players</em>)</b><br>
<em>Category: General game server functions</em><br>
<em>File: server.functions</em><br>
  Initialize server structures.
</p>

<a name="IsLoop:server.functions">
<p class=func>
  <b class=functitle>def IsLoop(<em>src object number</em>, <em> target object number</em>)</b><br>
<em>Category: General game server functions</em><br>
<em>File: server.functions</em><br>
  Return 1 if attachment would cause a loop.
</p>

<a name="IsObject:server.functions">
<p class=func>
  <b class=functitle>def IsObject(<em>num</em>)</b><br>
<em>Category: General game server functions</em><br>
<em>File: server.functions</em><br>
  Check if num is legal object number.
</p>

<a name="LegalityCheck:server.functions">
<p class=func>
  <b class=functitle>def LegalityCheck()</b><br>
<em>Category: General game server functions</em><br>
<em>File: server.functions</em><br>
  Make lagality check for the current player's deck.
</p>

<a name="Log:server.functions">
<p class=func>
  <b class=functitle>def Log(<em>s</em>)</b><br>
<em>Category: General game server functions</em><br>
<em>File: server.functions</em><br>
  Write string 's' to the log.
</p>

<a name="Lower:server.functions">
<p class=func>
  <b class=functitle>def Lower(<em>object number</em>)</b><br>
<em>Category: General game server functions</em><br>
<em>File: server.functions</em><br>
  Lower an object.
</p>

<a name="MakeLegalityCheck:server.functions">
<p class=func>
  <b class=functitle>def MakeLegalityCheck(<em>deck</em>, <em>verbose report</em>)</b><br>
<em>Category: General game server functions</em><br>
<em>File: server.functions</em><br>
  Perform legality check for the deck. Return list of legal game formats.
</p>

<a name="MapCon2Plr:server.functions">
<p class=func>
  <b class=functitle>def MapCon2Plr(<em>connection</em>, <em>player</em>)</b><br>
<em>Category: General game server functions</em><br>
<em>File: server.functions</em><br>
  Set mapping between connection number and player number.
</p>

<a name="MoveObject:server.functions">
<p class=func>
  <b class=functitle>def MoveObject(<em>n</em>, <em>x</em>, <em>y</em>)</b><br>
<em>Category: General game server functions</em><br>
<em>File: server.functions</em><br>
  Move object to new place on table. (x,y) given in current player's coordinates.
</p>

<a name="MsgCards:server.functions">
<p class=func>
  <b class=functitle>def MsgCards(<em>list of cards</em>, <em> visibile?</em>, <em> options</em>)</b><br>
<em>Category: General game server functions</em><br>
<em>File: server.functions</em><br>
  Convert a card list to text.
</p>

<a name="MsgOrdinal:server.functions">
<p class=func>
  <b class=functitle>def MsgOrdinal(<em>order number</em>, <em>total</em>, <em>item</em>, <em>container</em>)</b><br>
<em>Category: General game server functions</em><br>
<em>File: server.functions</em><br>
  Return container with item name and order number if given (>= 0).
</p>

<a name="MsgTransfer:server.functions">
<p class=func>
  <b class=functitle>def MsgTransfer(<em>src</em>, <em>cards to self</em>, <em>cards to others</em>, <em>dst</em>, <em>nmb. of cards</em>, <em>options</em>)</b><br>
<em>Category: General game server functions</em><br>
<em>File: server.functions</em><br>
  Send transfer message.
</p>

<a name="MsgVerbObject:server.functions">
<p class=func>
  <b class=functitle>def MsgVerbObject(<em>verb</em>, <em> obj.num or (obj.num</em>, <em>index) or text</em>, <em>[notes]</em>)</b><br>
<em>Category: General game server functions</em><br>
<em>File: server.functions</em><br>
  Tell all that current player acts 'verb' with 'object'. Optional argument notes is added to the end of the message.
</p>

<a name="MsgVerbObjectObject:server.functions">
<p class=func>
  <b class=functitle>def MsgVerbObjectObject(<em>verb</em>, <em> object number</em>, <em> preposition</em>, <em> object number</em>, <em>[notes]</em>)</b><br>
<em>Category: General game server functions</em><br>
<em>File: server.functions</em><br>
  Tell all that current player acts 'verb' with 'object' prep 'object'. Optional argument notes is added to the end of the message.
</p>

<a name="Null:server.functions">
<p class=func>
  <b class=functitle>def Null()</b><br>
<em>Category: General game server functions</em><br>
<em>File: server.functions</em><br>
  Handler for client Null message. Check the inactivity of other clients.
</p>

<a name="Number:server.functions">
<p class=func>
  <b class=functitle>def Number(<em>player name</em>)</b><br>
<em>Category: General game server functions</em><br>
<em>File: server.functions</em><br>
  Return player or watcher number or NULL if none.
</p>

<a name="ObjectName:server.functions">
<p class=func>
  <b class=functitle>def ObjectName(<em>to whom</em>, <em> object number or string</em>)</b><br>
<em>Category: General game server functions</em><br>
<em>File: server.functions</em><br>
  Calculate name for the object as text as seen by players.
</p>

<a name="OriToPlr:server.functions">
<p class=func>
  <b class=functitle>def OriToPlr(<em>o</em>, <em>p</em>)</b><br>
<em>Category: General game server functions</em><br>
<em>File: server.functions</em><br>
  Convert server orientation 'o' to player orientation for player or watcher 'p'.
</p>

<a name="OriToSvr:server.functions">
<p class=func>
  <b class=functitle>def OriToSvr(<em>o</em>, <em>p</em>)</b><br>
<em>Category: General game server functions</em><br>
<em>File: server.functions</em><br>
  Convert player orientation 'o' for player 'p' to server orientation.
</p>

<a name="Owner:server.functions">
<p class=func>
  <b class=functitle>def Owner(<em>object number</em>)</b><br>
<em>Category: General game server functions</em><br>
<em>File: server.functions</em><br>
  Return player number owning the object.
</p>

<a name="Play.Card.Stage1:server.functions">
<p class=func>
  <b class=functitle>def Play.Card.Stage1(<em>card number</em>, <em>vis.self</em>, <em>vis.opp</em>, <em>face down?</em>)</b><br>
<em>Category: General game server functions</em><br>
<em>File: server.functions</em><br>
  First stage of the playing a card, i.e. after announcement the card is moved from the source to the play.stack.
</p>

<a name="Play.Card.Stage2:server.functions">
<p class=func>
  <b class=functitle>def Play.Card.Stage2(<em>vis.self</em>, <em>vis.opp</em>, <em>card number</em>, <em>face down?</em>)</b><br>
<em>Category: General game server functions</em><br>
<em>File: server.functions</em><br>
  Second stage of the playing a card, i.e remove the card from play.stack.
</p>

<a name="PlayerNumber:server.functions">
<p class=func>
  <b class=functitle>def PlayerNumber(<em>player name</em>)</b><br>
<em>Category: General game server functions</em><br>
<em>File: server.functions</em><br>
  Convert a player name to it's player number or -1 if not playing.
</p>

<a name="PlayerOrder:server.functions">
<p class=func>
  <b class=functitle>def PlayerOrder()</b><br>
<em>Category: General game server functions</em><br>
<em>File: server.functions</em><br>
  Return list of player names in current player order.
</p>

<a name="Plr2Con:server.functions">
<p class=func>
  <b class=functitle>def Plr2Con(<em>connection</em>)</b><br>
<em>Category: General game server functions</em><br>
<em>File: server.functions</em><br>
  Convert player number to client connection number. Returns NULL if no such player.
</p>

<a name="Put.Active:server.functions">
<p class=func>
  <b class=functitle>def Put.Active(<em>card number</em>, <em>vis.self</em>, <em>vis.opp</em>, <em>player</em>)</b><br>
<em>Category: General game server functions</em><br>
<em>File: server.functions</em><br>
  Put a card to active set.
</p>

<a name="Put.DeckBottom:server.functions">
<p class=func>
  <b class=functitle>def Put.DeckBottom(<em>card number</em>, <em>vis.self</em>, <em>vis.opp</em>, <em>deck object number</em>)</b><br>
<em>Category: General game server functions</em><br>
<em>File: server.functions</em><br>
  Put a card to bottom of the deck.
</p>

<a name="Put.DeckTop:server.functions">
<p class=func>
  <b class=functitle>def Put.DeckTop(<em>card number</em>, <em>vis.self</em>, <em>vis.opp</em>, <em>deck object number</em>)</b><br>
<em>Category: General game server functions</em><br>
<em>File: server.functions</em><br>
  Put a card to top of the deck.
</p>

<a name="Put.Hand:server.functions">
<p class=func>
  <b class=functitle>def Put.Hand(<em>card number</em>, <em>vis.self</em>, <em>vis.opp</em>, <em>owner of hand</em>)</b><br>
<em>Category: General game server functions</em><br>
<em>File: server.functions</em><br>
  Put a card to the hand.
</p>

<a name="Put.OutOfPlay:server.functions">
<p class=func>
  <b class=functitle>def Put.OutOfPlay(<em>card number</em>, <em>vis.self</em>, <em>vis.opp</em>)</b><br>
<em>Category: General game server functions</em><br>
<em>File: server.functions</em><br>
  Put a card to the out of play.
</p>

<a name="Put.Table:server.functions">
<p class=func>
  <b class=functitle>def Put.Table(<em>card number</em>, <em>vis.self</em>, <em>vis.opp</em>, <em>x</em>, <em>y</em>, <em>orientation</em>, <em>face down?</em>)</b><br>
<em>Category: General game server functions</em><br>
<em>File: server.functions</em><br>
  Put a card to the table.
</p>

<a name="Raise:server.functions">
<p class=func>
  <b class=functitle>def Raise(<em>object number</em>)</b><br>
<em>Category: General game server functions</em><br>
<em>File: server.functions</em><br>
  Raise an object.
</p>

<a name="ReceiveClose:server.functions">
<p class=func>
  <b class=functitle>def ReceiveClose(<em>connection number</em>)</b><br>
<em>Category: General game server functions</em><br>
<em>File: server.functions</em><br>
  Handle network event "close".
</p>

<a name="ReceiveData:server.functions">
<p class=func>
  <b class=functitle>def ReceiveData(<em>e</em>, <em>d</em>)</b><br>
<em>Category: General game server functions</em><br>
<em>File: server.functions</em><br>
  Called when network event (e,d) was received.
</p>

<a name="ReceiveOpen:server.functions">
<p class=func>
  <b class=functitle>def ReceiveOpen(<em>connection number</em>)</b><br>
<em>Category: General game server functions</em><br>
<em>File: server.functions</em><br>
  Handle network event "open".
</p>

<a name="RegisterPlayer:server.functions">
<p class=func>
  <b class=functitle>def RegisterPlayer(<em>user</em>, <em>version</em>, <em>number of known cards</em>, <em>game name</em>, <em>cookie</em>)</b><br>
<em>Category: General game server functions</em><br>
<em>File: server.functions</em><br>
  Check registration information and and initialize player/watcher. Return 1 if registration is successful.
</p>

<a name="Reply:server.functions">
<p class=func>
  <b class=functitle>def Reply(<em>m</em>)</b><br>
<em>Category: General game server functions</em><br>
<em>File: server.functions</em><br>
  Send message 'm' to current connection.
</p>

<a name="ResultAccepted:server.functions">
<p class=func>
  <b class=functitle>def ResultAccepted()</b><br>
<em>Category: General game server functions</em><br>
<em>File: server.functions</em><br>
  Return 1 if all players has been accepted the game result or disconnected.
</p>

<a name="Reveal:server.functions">
<p class=func>
  <b class=functitle>def Reveal(<em>object number</em>, <em>card index to reveal</em>)</b><br>
<em>Category: General game server functions</em><br>
<em>File: server.functions</em><br>
  Reveal one of the cards.
</p>

<a name="Roll:server.functions">
<p class=func>
  <b class=functitle>def Roll(<em>d</em>)</b><br>
<em>Category: General game server functions</em><br>
<em>File: server.functions</em><br>
  Roll dice 'd' which is a string i.e. "2d6".
</p>

<a name="RootObject:server.functions">
<p class=func>
  <b class=functitle>def RootObject(<em>object number</em>)</b><br>
<em>Category: General game server functions</em><br>
<em>File: server.functions</em><br>
  Return root object of the group where an object belongs.
</p>

<a name="Rotate:server.functions">
<p class=func>
  <b class=functitle>def Rotate(<em>n</em>, <em>d</em>)</b><br>
<em>Category: General game server functions</em><br>
<em>File: server.functions</em><br>
  Rotate object number 'n' on table to have rotation angle 'd' degrees clockwise.
</p>

<a name="SaveFilename:server.functions">
<p class=func>
  <b class=functitle>def SaveFilename()</b><br>
<em>Category: General game server functions</em><br>
<em>File: server.functions</em><br>
  Generate filename for save game.
</p>

<a name="Say:server.functions">
<p class=func>
  <b class=functitle>def Say(<em>s</em>)</b><br>
<em>Category: General game server functions</em><br>
<em>File: server.functions</em><br>
  Player says 's'.
</p>

<a name="Score:server.functions">
<p class=func>
  <b class=functitle>def Score(<em>player</em>, <em>score</em>)</b><br>
<em>Category: General game server functions</em><br>
<em>File: server.functions</em><br>
  Set score for a player.
</p>

<a name="SearchDeck:server.functions">
<p class=func>
  <b class=functitle>def SearchDeck(<em>object number</em>)</b><br>
<em>Category: General game server functions</em><br>
<em>File: server.functions</em><br>
  Player looks for deck.
</p>

<a name="Send:server.functions">
<p class=func>
  <b class=functitle>def Send(<em>player</em>, <em> command</em>)</b><br>
<em>Category: General game server functions</em><br>
<em>File: server.functions</em><br>
  Send a command to client if still online.
</p>

<a name="SendAll:server.functions">
<p class=func>
  <b class=functitle>def SendAll(<em>command</em>)</b><br>
<em>Category: General game server functions</em><br>
<em>File: server.functions</em><br>
  Send command to all.
</p>

<a name="SendFullGameStatus:server.functions">
<p class=func>
  <b class=functitle>def SendFullGameStatus(<em>player</em>)</b><br>
<em>Category: General game server functions</em><br>
<em>File: server.functions</em><br>
  Send full update of the game status to the player or watcher.
</p>

<a name="SendOther:server.functions">
<p class=func>
  <b class=functitle>def SendOther(<em>player</em>, <em>command</em>)</b><br>
<em>Category: General game server functions</em><br>
<em>File: server.functions</em><br>
  Send command to all players except player 'p'.
</p>

<a name="ShuffleDeck:server.functions">
<p class=func>
  <b class=functitle>def ShuffleDeck(<em>object number</em>)</b><br>
<em>Category: General game server functions</em><br>
<em>File: server.functions</em><br>
  Shuffle deck or hand.
</p>

<a name="Special:server.functions">
<p class=func>
  <b class=functitle>def Special(<em>data...</em>)</b><br>
<em>Category: General game server functions</em><br>
<em>File: server.functions</em><br>
  Send special event to all clients.
</p>

<a name="StartGame:server.functions">
<p class=func>
  <b class=functitle>def StartGame()</b><br>
<em>Category: General game server functions</em><br>
<em>File: server.functions</em><br>
  Initialize structures and send all initialization commands to clients.
</p>

<a name="SubjectName:server.functions">
<p class=func>
  <b class=functitle>def SubjectName(<em>p</em>)</b><br>
<em>Category: General game server functions</em><br>
<em>File: server.functions</em><br>
  Return player name or "You" if 'p' is current player.
</p>

<a name="Take.Active:server.functions">
<p class=func>
  <b class=functitle>def Take.Active(<em>vis.self</em>, <em>vis.opp</em>, <em>player</em>, <em>card index</em>)</b><br>
<em>Category: General game server functions</em><br>
<em>File: server.functions</em><br>
  Take a card from active set.
</p>

<a name="Take.Deck:server.functions">
<p class=func>
  <b class=functitle>def Take.Deck(<em>vis.self</em>, <em>vis.opp</em>, <em>object number</em>, <em>deck card index</em>)</b><br>
<em>Category: General game server functions</em><br>
<em>File: server.functions</em><br>
  Take a card from any position from the deck.
</p>

<a name="Take.DeckTop:server.functions">
<p class=func>
  <b class=functitle>def Take.DeckTop(<em>vis.self</em>, <em>vis.opp</em>, <em>object number</em>)</b><br>
<em>Category: General game server functions</em><br>
<em>File: server.functions</em><br>
  Take a card from the top of the deck.
</p>

<a name="Take.Hand:server.functions">
<p class=func>
  <b class=functitle>def Take.Hand(<em>vis.self</em>, <em>vis.opp</em>, <em>owner of hand</em>, <em>hand card index</em>)</b><br>
<em>Category: General game server functions</em><br>
<em>File: server.functions</em><br>
  Take a card from the hand.
</p>

<a name="Take.OutOfPlay:server.functions">
<p class=func>
  <b class=functitle>def Take.OutOfPlay(<em>vis.self</em>, <em>vis.opp</em>, <em>card number</em>)</b><br>
<em>Category: General game server functions</em><br>
<em>File: server.functions</em><br>
  Take a card from out of play.
</p>

<a name="Take.SearchDeck:server.functions">
<p class=func>
  <b class=functitle>def Take.SearchDeck(<em>vis.self</em>, <em>vis.opp</em>, <em>object number</em>, <em>card number(s)</em>, <em>iteration</em>)</b><br>
<em>Category: General game server functions</em><br>
<em>File: server.functions</em><br>
  Search a card from the deck.
</p>

<a name="Take.Table:server.functions">
<p class=func>
  <b class=functitle>def Take.Table(<em>vis.self</em>, <em>vis.opp</em>, <em>object number</em>)</b><br>
<em>Category: General game server functions</em><br>
<em>File: server.functions</em><br>
  Take a card from table.
</p>

<a name="TargetName:server.functions">
<p class=func>
  <b class=functitle>def TargetName(<em>to whom</em>, <em>number of cards in transfer</em>, <em>target type</em>, <em>target parameters</em>)</b><br>
<em>Category: General game server functions</em><br>
<em>File: server.functions</em><br>
  Convert  target to text. Traget parameters are the same as in TransferFunction source and destination.
</p>

<a name="Touch:server.functions">
<p class=func>
  <b class=functitle>def Touch(<em>object number</em>, <em>index</em>)</b><br>
<em>Category: General game server functions</em><br>
<em>File: server.functions</em><br>
  Send message to all, that current player touches 't'.
</p>

<a name="Transfer:server.functions">
<p class=func>
  <b class=functitle>def Transfer(<em>number of cards</em>, <em>source</em>, <em>destination</em>, <em>options</em>)</b><br>
<em>Category: General game server functions</em><br>
<em>File: server.functions</em><br>
  Generic card transfer. Source location is one of the following: - ("active",player number,card index) - from cards set aside - ("deck",deck object number,card index) - from a card pile - ("deck.top",deck object number) - from top of a card pile - ("deck.search",deck object number,card number) - search a card from a pile - ("hand",player number,card index) - players hand  - ("out.of.play",card number) - generate a card - ("play",card number,face down?) - finish the playing of a card by placing it to destination - ("table",card object number) - from table Destination locations is one of the following: - ("active",player number) - set aside - ("deck.bottom",deck object number) - to the bottom of a card pile - ("deck.top",deck object number) - to the top of a card pile - ("hand",player number) - to hand - ("out.of.play",) - remove from play - ("play",face down?) - play a card by taking it from source - ("table",x,y,orientation,face down?) - put to the table Option is a dictionary containing possible following entries: - reveal - attribute of a cards to reveal if otherwise unknown. - shuffle - if, "yes" shuffle transferred cards.
</p>

<a name="UploadDeck:server.functions">
<p class=func>
  <b class=functitle>def UploadDeck(<em>dictionary of deck parts</em>)</b><br>
<em>Category: General game server functions</em><br>
<em>File: server.functions</em><br>
  Player uploads his decks. Check legality.
</p>

<a name="Verb:server.functions">
<p class=func>
  <b class=functitle>def Verb(<em>to whom</em>, <em>verb</em>)</b><br>
<em>Category: General game server functions</em><br>
<em>File: server.functions</em><br>
  Return a verb in correct form.
</p>

<a name="WaitMetaEvents:server.functions">
<p class=func>
  <b class=functitle>def WaitMetaEvents(<em>end</em>)</b><br>
<em>Category: General game server functions</em><br>
<em>File: server.functions</em><br>
  Wait and handle events from the meta server until receiving 'end' event.
</p>

<a name="WatcherSay:server.functions">
<p class=func>
  <b class=functitle>def WatcherSay(<em>s</em>)</b><br>
<em>Category: General game server functions</em><br>
<em>File: server.functions</em><br>
  Watcher says 's'.
</p>

<h2>General meta server functions</h2>
<a name="Action:meta-server.functions">
<p class=func>
  <b class=functitle>def Action(<em>s</em>)</b><br>
<em>Category: General meta server functions</em><br>
<em>File: meta-server.functions</em><br>
  Player takes an action 's'.
</p>

<a name="AddCard:meta-server.functions">
<p class=func>
  <b class=functitle>def AddCard(<em>player name</em>, <em>card number</em>)</b><br>
<em>Category: General meta server functions</em><br>
<em>File: meta-server.functions</em><br>
  Add a card to player's collection.
</p>

<a name="AddCards:meta-server.functions">
<p class=func>
  <b class=functitle>def AddCards(<em>player name</em>, <em>card number</em>, <em>count</em>)</b><br>
<em>Category: General meta server functions</em><br>
<em>File: meta-server.functions</em><br>
  Add cards to player's collection.
</p>

<a name="AddGameResult:meta-server.functions">
<p class=func>
  <b class=functitle>def AddGameResult(<em>nmb.players</em>, <em>player</em>, <em>result</em>)</b><br>
<em>Category: General meta server functions</em><br>
<em>File: meta-server.functions</em><br>
  Add one game result to the given player.
</p>

<a name="AddTickets:meta-server.functions">
<p class=func>
  <b class=functitle>def AddTickets(<em>user name</em>, <em>product name</em>, <em>count</em>)</b><br>
<em>Category: General meta server functions</em><br>
<em>File: meta-server.functions</em><br>
  Add or del product tickets. If count is negative, return number of tickets deleted.
</p>

<a name="AvailableForSale:meta-server.functions">
<p class=func>
  <b class=functitle>def AvailableForSale(<em>user name</em>, <em>card number</em>, <em>amount</em>)</b><br>
<em>Category: General meta server functions</em><br>
<em>File: meta-server.functions</em><br>
  Return 1 if a player can sell cards (i.e. not registered).
</p>

<a name="AvailableForTrade:meta-server.functions">
<p class=func>
  <b class=functitle>def AvailableForTrade(<em>user name</em>, <em>card number</em>)</b><br>
<em>Category: General meta server functions</em><br>
<em>File: meta-server.functions</em><br>
  Return 1 if a player can give the card away (i.e. not registered).
</p>

<a name="Buy:meta-server.functions">
<p class=func>
  <b class=functitle>def Buy(<em>amount</em>, <em>product name</em>)</b><br>
<em>Category: General meta server functions</em><br>
<em>File: meta-server.functions</em><br>
  Client buys a product.
</p>

<a name="BuyCard:meta-server.functions">
<p class=func>
  <b class=functitle>def BuyCard(<em>card number</em>, <em>[price]</em>)</b><br>
<em>Category: General meta server functions</em><br>
<em>File: meta-server.functions</em><br>
  Client buys a card.
</p>

<a name="CheckPrice:meta-server.functions">
<p class=func>
  <b class=functitle>def CheckPrice(<em>player name</em>, <em>card number</em>)</b><br>
<em>Category: General meta server functions</em><br>
<em>File: meta-server.functions</em><br>
  Check if card is not for sale any more and remove price entry if not.
</p>

<a name="CheckSealedCharacter:meta-server.functions">
<p class=func>
  <b class=functitle>def CheckSealedCharacter(<em>mode name</em>)</b><br>
<em>Category: General meta server functions</em><br>
<em>File: meta-server.functions</em><br>
  Check existence of sealed character and create if necessary.
</p>

<a name="Command:meta-server.functions">
<p class=func>
  <b class=functitle>def Command(<em>string</em>)</b><br>
<em>Category: General meta server functions</em><br>
<em>File: meta-server.functions</em><br>
  Handle special commands.
</p>

<a name="CommandAddproduct:meta-server.functions">
<p class=func>
  <b class=functitle>def CommandAddproduct()</b><br>
<em>Category: General meta server functions</em><br>
<em>File: meta-server.functions</em><br>
  Implementation of the command /addproduct.
</p>

<a name="CommandBan:meta-server.functions">
<p class=func>
  <b class=functitle>def CommandBan()</b><br>
<em>Category: General meta server functions</em><br>
<em>File: meta-server.functions</em><br>
  Implementation of the command /ban.
</p>

<a name="CommandBans:meta-server.functions">
<p class=func>
  <b class=functitle>def CommandBans()</b><br>
<em>Category: General meta server functions</em><br>
<em>File: meta-server.functions</em><br>
  Implementation of the command /bans.
</p>

<a name="CommandDebug:meta-server.functions">
<p class=func>
  <b class=functitle>def CommandDebug()</b><br>
<em>Category: General meta server functions</em><br>
<em>File: meta-server.functions</em><br>
  Implementation of the command /debug.
</p>

<a name="CommandDelproduct:meta-server.functions">
<p class=func>
  <b class=functitle>def CommandDelproduct()</b><br>
<em>Category: General meta server functions</em><br>
<em>File: meta-server.functions</em><br>
  Implementation of the command /delproduct.
</p>

<a name="CommandFaq:meta-server.functions">
<p class=func>
  <b class=functitle>def CommandFaq()</b><br>
<em>Category: General meta server functions</em><br>
<em>File: meta-server.functions</em><br>
  Implementation of the command /faq.
</p>

<a name="CommandFaqclear:meta-server.functions">
<p class=func>
  <b class=functitle>def CommandFaqclear()</b><br>
<em>Category: General meta server functions</em><br>
<em>File: meta-server.functions</em><br>
  Implementation of the command /faqclear.
</p>

<a name="CommandGiveticket:meta-server.functions">
<p class=func>
  <b class=functitle>def CommandGiveticket()</b><br>
<em>Category: General meta server functions</em><br>
<em>File: meta-server.functions</em><br>
  Implementation of the command /giveticket.
</p>

<a name="CommandGrant:meta-server.functions">
<p class=func>
  <b class=functitle>def CommandGrant()</b><br>
<em>Category: General meta server functions</em><br>
<em>File: meta-server.functions</em><br>
  Implementation of the command /grant.
</p>

<a name="CommandHave:meta-server.functions">
<p class=func>
  <b class=functitle>def CommandHave()</b><br>
<em>Category: General meta server functions</em><br>
<em>File: meta-server.functions</em><br>
  Implementation of the command /have.
</p>

<a name="CommandKick:meta-server.functions">
<p class=func>
  <b class=functitle>def CommandKick(<em>user</em>)</b><br>
<em>Category: General meta server functions</em><br>
<em>File: meta-server.functions</em><br>
  Implementation of the command /kick.
</p>

<a name="CommandKicktable:meta-server.functions">
<p class=func>
  <b class=functitle>def CommandKicktable()</b><br>
<em>Category: General meta server functions</em><br>
<em>File: meta-server.functions</em><br>
  Implementation of the command /kicktable.
</p>

<a name="CommandPayall:meta-server.functions">
<p class=func>
  <b class=functitle>def CommandPayall()</b><br>
<em>Category: General meta server functions</em><br>
<em>File: meta-server.functions</em><br>
  Implementation of the command /payall.
</p>

<a name="CommandProducts:meta-server.functions">
<p class=func>
  <b class=functitle>def CommandProducts()</b><br>
<em>Category: General meta server functions</em><br>
<em>File: meta-server.functions</em><br>
  Implementation of the command /products.
</p>

<a name="CommandReboot:meta-server.functions">
<p class=func>
  <b class=functitle>def CommandReboot()</b><br>
<em>Category: General meta server functions</em><br>
<em>File: meta-server.functions</em><br>
  Implementation of the command /reboot.
</p>

<a name="CommandRegister:meta-server.functions">
<p class=func>
  <b class=functitle>def CommandRegister()</b><br>
<em>Category: General meta server functions</em><br>
<em>File: meta-server.functions</em><br>
  Implementation of the command /register.
</p>

<a name="CommandReload:meta-server.functions">
<p class=func>
  <b class=functitle>def CommandReload()</b><br>
<em>Category: General meta server functions</em><br>
<em>File: meta-server.functions</em><br>
  Implementation of the command /reload.
</p>

<a name="CommandRemoveuser:meta-server.functions">
<p class=func>
  <b class=functitle>def CommandRemoveuser()</b><br>
<em>Category: General meta server functions</em><br>
<em>File: meta-server.functions</em><br>
  Implementation of the command /removeuser.
</p>

<a name="CommandReproduce:meta-server.functions">
<p class=func>
  <b class=functitle>def CommandReproduce()</b><br>
<em>Category: General meta server functions</em><br>
<em>File: meta-server.functions</em><br>
  Implementation of the command /reproduce.
</p>

<a name="CommandRestrict:meta-server.functions">
<p class=func>
  <b class=functitle>def CommandRestrict()</b><br>
<em>Category: General meta server functions</em><br>
<em>File: meta-server.functions</em><br>
  Implementation of the command /restrict.
</p>

<a name="CommandRo:meta-server.functions">
<p class=func>
  <b class=functitle>def CommandRo()</b><br>
<em>Category: General meta server functions</em><br>
<em>File: meta-server.functions</em><br>
  Implementation of the command /ro.
</p>

<a name="CommandRtfm:meta-server.functions">
<p class=func>
  <b class=functitle>def CommandRtfm()</b><br>
<em>Category: General meta server functions</em><br>
<em>File: meta-server.functions</em><br>
  Implementation of the command /debug.
</p>

<a name="CommandSave:meta-server.functions">
<p class=func>
  <b class=functitle>def CommandSave()</b><br>
<em>Category: General meta server functions</em><br>
<em>File: meta-server.functions</em><br>
  Implementation of the command /save.
</p>

<a name="CommandUnban:meta-server.functions">
<p class=func>
  <b class=functitle>def CommandUnban()</b><br>
<em>Category: General meta server functions</em><br>
<em>File: meta-server.functions</em><br>
  Implementation of the command /unban.
</p>

<a name="CommandUnrestrict:meta-server.functions">
<p class=func>
  <b class=functitle>def CommandUnrestrict()</b><br>
<em>Category: General meta server functions</em><br>
<em>File: meta-server.functions</em><br>
  Implementation of the command /unrestrict.
</p>

<a name="CommandUsers:meta-server.functions">
<p class=func>
  <b class=functitle>def CommandUsers()</b><br>
<em>Category: General meta server functions</em><br>
<em>File: meta-server.functions</em><br>
  Implementation of the command /users.
</p>

<a name="CommandWant:meta-server.functions">
<p class=func>
  <b class=functitle>def CommandWant()</b><br>
<em>Category: General meta server functions</em><br>
<em>File: meta-server.functions</em><br>
  Implementation of the command /want.
</p>

<a name="CommandWhois:meta-server.functions">
<p class=func>
  <b class=functitle>def CommandWhois()</b><br>
<em>Category: General meta server functions</em><br>
<em>File: meta-server.functions</em><br>
  Implementation of the command /whois.
</p>

<a name="CommandYell:meta-server.functions">
<p class=func>
  <b class=functitle>def CommandYell()</b><br>
<em>Category: General meta server functions</em><br>
<em>File: meta-server.functions</em><br>
  Implementation of the command /yell.
</p>

<a name="Con:meta-server.functions">
<p class=func>
  <b class=functitle>def Con(<em>user name</em>)</b><br>
<em>Category: General meta server functions</em><br>
<em>File: meta-server.functions</em><br>
  Return connection number of the player or -1 if not connected.
</p>

<a name="DeckCheck:meta-server.functions">
<p class=func>
  <b class=functitle>def DeckCheck(<em>username</em>, <em>card list</em>, <em>original deck</em>)</b><br>
<em>Category: General meta server functions</em><br>
<em>File: meta-server.functions</em><br>
  Check a card list having entries of form (nmb. of cards,card number) if user has them. Return a quadruple (username, nmb.of proxies,registered flag,orginal form flag).
</p>

<a name="DelCard:meta-server.functions">
<p class=func>
  <b class=functitle>def DelCard(<em>player name</em>, <em>card number</em>)</b><br>
<em>Category: General meta server functions</em><br>
<em>File: meta-server.functions</em><br>
  Delete a card from player's collection.
</p>

<a name="DelCards:meta-server.functions">
<p class=func>
  <b class=functitle>def DelCards(<em>player name</em>, <em>card number</em>, <em>count</em>)</b><br>
<em>Category: General meta server functions</em><br>
<em>File: meta-server.functions</em><br>
  Delete cards from player's collection.
</p>

<a name="DisconnectPlayer:meta-server.functions">
<p class=func>
  <b class=functitle>def DisconnectPlayer()</b><br>
<em>Category: General meta server functions</em><br>
<em>File: meta-server.functions</em><br>
  Called when player disconnects.
</p>

<a name="DisconnectServer:meta-server.functions">
<p class=func>
  <b class=functitle>def DisconnectServer()</b><br>
<em>Category: General meta server functions</em><br>
<em>File: meta-server.functions</em><br>
  Called when game server disconnects.
</p>

<a name="EndGame:meta-server.functions">
<p class=func>
  <b class=functitle>def EndGame(<em>player name who declared</em>, <em>result</em>, <em>result options</em>)</b><br>
<em>Category: General meta server functions</em><br>
<em>File: meta-server.functions</em><br>
  Game ended by game server. If the result is undecided, then argument is NULL.
</p>

<a name="EnsurePriceUpdate:meta-server.functions">
<p class=func>
  <b class=functitle>def EnsurePriceUpdate(<em>card number</em>, <em>old</em>, <em>new</em>)</b><br>
<em>Category: General meta server functions</em><br>
<em>File: meta-server.functions</em><br>
  Check if new (seller list,price) pair differs from old and send update if they do.
</p>

<a name="Give:meta-server.functions">
<p class=func>
  <b class=functitle>def Give(<em>"username amount"</em>)</b><br>
<em>Category: General meta server functions</em><br>
<em>File: meta-server.functions</em><br>
  Give money.
</p>

<a name="GiveCard:meta-server.functions">
<p class=func>
  <b class=functitle>def GiveCard(<em>user name</em>, <em>card number</em>)</b><br>
<em>Category: General meta server functions</em><br>
<em>File: meta-server.functions</em><br>
  Give a card.
</p>

<a name="GiveMoney:meta-server.functions">
<p class=func>
  <b class=functitle>def GiveMoney(<em>user name</em>, <em>amount</em>)</b><br>
<em>Category: General meta server functions</em><br>
<em>File: meta-server.functions</em><br>
  Give or remove money.
</p>

<a name="IsRestricted:meta-server.functions">
<p class=func>
  <b class=functitle>def IsRestricted(<em>domain</em>, <em>ip</em>)</b><br>
<em>Category: General meta server functions</em><br>
<em>File: meta-server.functions</em><br>
  Return 1 if access from the given domain/ip is restricted.
</p>

<a name="IsServer:meta-server.functions">
<p class=func>
  <b class=functitle>def IsServer()</b><br>
<em>Category: General meta server functions</em><br>
<em>File: meta-server.functions</em><br>
  Return 1 if current message is received from server.
</p>

<a name="IsTableBanned:meta-server.functions">
<p class=func>
  <b class=functitle>def IsTableBanned(<em>domain</em>, <em>ip</em>)</b><br>
<em>Category: General meta server functions</em><br>
<em>File: meta-server.functions</em><br>
  Return 1 if access from the given domain/ip is restricted.
</p>

<a name="JoinTable:meta-server.functions">
<p class=func>
  <b class=functitle>def JoinTable(<em>table number</em>)</b><br>
<em>Category: General meta server functions</em><br>
<em>File: meta-server.functions</em><br>
  Player joins a table.
</p>

<a name="LeaveTable:meta-server.functions">
<p class=func>
  <b class=functitle>def LeaveTable()</b><br>
<em>Category: General meta server functions</em><br>
<em>File: meta-server.functions</em><br>
  Leave the table where player is sitting if any.
</p>

<a name="Log:meta-server.functions">
<p class=func>
  <b class=functitle>def Log()</b><br>
<em>Category: General meta server functions</em><br>
<em>File: meta-server.functions</em><br>
  Write arguments to log.
</p>

<a name="Mode:meta-server.functions">
<p class=func>
  <b class=functitle>def Mode(<em>[name]</em>)</b><br>
<em>Category: General meta server functions</em><br>
<em>File: meta-server.functions</em><br>
  current special mode ("sealed",etc.) of the current or specified player or "" if not in any mode.
</p>

<a name="NewUser:meta-server.functions">
<p class=func>
  <b class=functitle>def NewUser(<em>password</em>)</b><br>
<em>Category: General meta server functions</em><br>
<em>File: meta-server.functions</em><br>
  Create new user.
</p>

<a name="Null:meta-server.functions">
<p class=func>
  <b class=functitle>def Null()</b><br>
<em>Category: General meta server functions</em><br>
<em>File: meta-server.functions</em><br>
  Null command for TCP/IP keepalive.
</p>

<a name="PrizeForDraw:meta-server.functions">
<p class=func>
  <b class=functitle>def PrizeForDraw(<em>nmb. of players</em>, <em> bet</em>)</b><br>
<em>Category: General meta server functions</em><br>
<em>File: meta-server.functions</em><br>
  Calcluate prize for draw.
</p>

<a name="PrizeForLoss:meta-server.functions">
<p class=func>
  <b class=functitle>def PrizeForLoss(<em>nmb. of players</em>, <em> bet</em>)</b><br>
<em>Category: General meta server functions</em><br>
<em>File: meta-server.functions</em><br>
  Calcluate prize for loser.
</p>

<a name="PrizeForWin:meta-server.functions">
<p class=func>
  <b class=functitle>def PrizeForWin(<em>nmb. of players</em>, <em> bet</em>)</b><br>
<em>Category: General meta server functions</em><br>
<em>File: meta-server.functions</em><br>
  Calcluate prize for winner.
</p>

<a name="ReceiveData:meta-server.functions">
<p class=func>
  <b class=functitle>def ReceiveData(<em>e</em>, <em>d</em>)</b><br>
<em>Category: General meta server functions</em><br>
<em>File: meta-server.functions</em><br>
  Called when network event (e,d) was received.
</p>

<a name="Refresh:meta-server.functions">
<p class=func>
  <b class=functitle>def Refresh(<em>list of cards</em>)</b><br>
<em>Category: General meta server functions</em><br>
<em>File: meta-server.functions</em><br>
  Send an update for cards.
</p>

<a name="RefreshChatRoom:meta-server.functions">
<p class=func>
  <b class=functitle>def RefreshChatRoom()</b><br>
<em>Category: General meta server functions</em><br>
<em>File: meta-server.functions</em><br>
  Called when client asks for chat room update after the game.
</p>

<a name="RegisterDeck:meta-server.functions">
<p class=func>
  <b class=functitle>def RegisterDeck(<em>registration id</em>, <em>pres1</em>, <em>pres2</em>)</b><br>
<em>Category: General meta server functions</em><br>
<em>File: meta-server.functions</em><br>
  Store a deck info for tournament purposes. The deck presentation pres1 is a list of pairs (nmb.of cards, card number). The second presentation deck2 is in original client-side deck format.
</p>

<a name="RegisterGameResult:meta-server.functions">
<p class=func>
  <b class=functitle>def RegisterGameResult(<em>nmb. of players</em>, <em>player names</em>, <em>player name who declared</em>, <em>result type</em>)</b><br>
<em>Category: General meta server functions</em><br>
<em>File: meta-server.functions</em><br>
  Update player stats.
</p>

<a name="RegisterPlayer:meta-server.functions">
<p class=func>
  <b class=functitle>def RegisterPlayer(<em>user</em>, <em>version</em>, <em>number of known cards</em>, <em>game name</em>, <em>password</em>, <em>system</em>, <em>serial</em>)</b><br>
<em>Category: General meta server functions</em><br>
<em>File: meta-server.functions</em><br>
  Store player info.
</p>

<a name="RegisterServer:meta-server.functions">
<p class=func>
  <b class=functitle>def RegisterServer(<em>port number</em>, <em>players</em>, <em>bet</em>, <em>cookie</em>, <em>list of rules</em>, <em>description</em>, <em>version</em>)</b><br>
<em>Category: General meta server functions</em><br>
<em>File: meta-server.functions</em><br>
  Add server to server cluster.
</p>

<a name="RemoveObsoletePrices:meta-server.functions">
<p class=func>
  <b class=functitle>def RemoveObsoletePrices()</b><br>
<em>Category: General meta server functions</em><br>
<em>File: meta-server.functions</em><br>
  Helper function to be called once after transition from older server to the caching server. Using God account, this can be done by issuing /debug RemoveObsoletePrices().
</p>

<a name="Reply:meta-server.functions">
<p class=func>
  <b class=functitle>def Reply(<em>m</em>)</b><br>
<em>Category: General meta server functions</em><br>
<em>File: meta-server.functions</em><br>
  Send message 'm' to current player.
</p>

<a name="ReRegisterPlayer:meta-server.functions">
<p class=func>
  <b class=functitle>def ReRegisterPlayer(<em>new user</em>, <em>version</em>, <em>number of known cards</em>, <em>game name</em>, <em>password</em>, <em>system</em>, <em>serial</em>)</b><br>
<em>Category: General meta server functions</em><br>
<em>File: meta-server.functions</em><br>
  Relogin.
</p>

<a name="Roll:meta-server.functions">
<p class=func>
  <b class=functitle>def Roll(<em>d</em>)</b><br>
<em>Category: General meta server functions</em><br>
<em>File: meta-server.functions</em><br>
  Roll dice 'd' which is a string i.e. "2d6".
</p>

<a name="SaveAll:meta-server.functions">
<p class=func>
  <b class=functitle>def SaveAll()</b><br>
<em>Category: General meta server functions</em><br>
<em>File: meta-server.functions</em><br>
  Save all server variables.
</p>

<a name="Say:meta-server.functions">
<p class=func>
  <b class=functitle>def Say(<em>s</em>)</b><br>
<em>Category: General meta server functions</em><br>
<em>File: meta-server.functions</em><br>
  Player says 's'.
</p>

<a name="Sealed:meta-server.functions">
<p class=func>
  <b class=functitle>def Sealed(<em>mode name</em>, <em>command</em>, <em>arg</em>, <em>option dictionary</em>)</b><br>
<em>Category: General meta server functions</em><br>
<em>File: meta-server.functions</em><br>
  Handle sealed commands: ("start",&lt;amount>) ("end",NULL) ("on",NULL) ("off",NULL).
</p>

<a name="SealedEnd:meta-server.functions">
<p class=func>
  <b class=functitle>def SealedEnd()</b><br>
<em>Category: General meta server functions</em><br>
<em>File: meta-server.functions</em><br>
  Transfer cards and money, then end sealed session.
</p>

<a name="SealedOff:meta-server.functions">
<p class=func>
  <b class=functitle>def SealedOff(<em>mode name</em>, <em>NULL</em>, <em>options</em>)</b><br>
<em>Category: General meta server functions</em><br>
<em>File: meta-server.functions</em><br>
  Return from sealed session.
</p>

<a name="SealedOn:meta-server.functions">
<p class=func>
  <b class=functitle>def SealedOn(<em>mode name</em>, <em>NULL</em>, <em>options</em>)</b><br>
<em>Category: General meta server functions</em><br>
<em>File: meta-server.functions</em><br>
  Switch to sealed session.
</p>

<a name="SealedStart:meta-server.functions">
<p class=func>
  <b class=functitle>def SealedStart(<em>mode name</em>, <em>money</em>, <em>options</em>)</b><br>
<em>Category: General meta server functions</em><br>
<em>File: meta-server.functions</em><br>
  Start sealed deck session.
</p>

<a name="Send:meta-server.functions">
<p class=func>
  <b class=functitle>def Send(<em>connection</em>, <em> command</em>)</b><br>
<em>Category: General meta server functions</em><br>
<em>File: meta-server.functions</em><br>
  Send a command to client if still online.
</p>

<a name="SendAll:meta-server.functions">
<p class=func>
  <b class=functitle>def SendAll(<em>command</em>)</b><br>
<em>Category: General meta server functions</em><br>
<em>File: meta-server.functions</em><br>
  Send command to all players who are not playing.
</p>

<a name="SendAllNP:meta-server.functions">
<p class=func>
  <b class=functitle>def SendAllNP(<em>command</em>)</b><br>
<em>Category: General meta server functions</em><br>
<em>File: meta-server.functions</em><br>
  Send command to all players who are not playing.
</p>

<a name="SendOther:meta-server.functions">
<p class=func>
  <b class=functitle>def SendOther(<em>p</em>, <em>command</em>)</b><br>
<em>Category: General meta server functions</em><br>
<em>File: meta-server.functions</em><br>
  Send command to all (non-playing) players except player 'p'.
</p>

<a name="Set:meta-server.functions">
<p class=func>
  <b class=functitle>def Set(<em>variable</em>, <em>value</em>)</b><br>
<em>Category: General meta server functions</em><br>
<em>File: meta-server.functions</em><br>
  Set an user variable for the current user.
</p>

<a name="SetForsale:meta-server.functions">
<p class=func>
  <b class=functitle>def SetForsale(<em>card number</em>, <em>amount</em>)</b><br>
<em>Category: General meta server functions</em><br>
<em>File: meta-server.functions</em><br>
  set number of cards for sale.
</p>

<a name="SetOfCard:meta-server.functions">
<p class=func>
  <b class=functitle>def SetOfCard(<em>card number</em>)</b><br>
<em>Category: General meta server functions</em><br>
<em>File: meta-server.functions</em><br>
  return set abbreviation of the card or NULL if none.
</p>

<a name="SetPrice:meta-server.functions">
<p class=func>
  <b class=functitle>def SetPrice(<em>card number</em>, <em>price</em>)</b><br>
<em>Category: General meta server functions</em><br>
<em>File: meta-server.functions</em><br>
  Set selling price for a card.
</p>

<a name="StartGame:meta-server.functions">
<p class=func>
  <b class=functitle>def StartGame(<em>table number</em>)</b><br>
<em>Category: General meta server functions</em><br>
<em>File: meta-server.functions</em><br>
  Initiate a game.
</p>

<a name="Tickets:meta-server.functions">
<p class=func>
  <b class=functitle>def Tickets(<em>user name</em>)</b><br>
<em>Category: General meta server functions</em><br>
<em>File: meta-server.functions</em><br>
  Dictionary of all tickets the user have.
</p>

<a name="TicketsList:meta-server.functions">
<p class=func>
  <b class=functitle>def TicketsList(<em>user name</em>)</b><br>
<em>Category: General meta server functions</em><br>
<em>File: meta-server.functions</em><br>
  Return a list of tickets user have as text or "" if none.
</p>

<a name="TicketsOf:meta-server.functions">
<p class=func>
  <b class=functitle>def TicketsOf(<em>user name</em>, <em>product</em>)</b><br>
<em>Category: General meta server functions</em><br>
<em>File: meta-server.functions</em><br>
  Return number of tickets user have for product.
</p>

<a name="ToggleJoinGame:meta-server.functions">
<p class=func>
  <b class=functitle>def ToggleJoinGame(<em>force leave if 1</em>)</b><br>
<em>Category: General meta server functions</em><br>
<em>File: meta-server.functions</em><br>
  Player joins or leaves game in the current table.
</p>

<a name="TransferMoney:meta-server.functions">
<p class=func>
  <b class=functitle>def TransferMoney(<em>player name</em>, <em> change</em>)</b><br>
<em>Category: General meta server functions</em><br>
<em>File: meta-server.functions</em><br>
  Add or substract money from the player.
</p>

<a name="UpdateCard:meta-server.functions">
<p class=func>
  <b class=functitle>def UpdateCard(<em>card number</em>)</b><br>
<em>Category: General meta server functions</em><br>
<em>File: meta-server.functions</em><br>
  Update current players card data for one card.
</p>

<a name="User:meta-server.functions">
<p class=func>
  <b class=functitle>def User(<em>[con]</em>)</b><br>
<em>Category: General meta server functions</em><br>
<em>File: meta-server.functions</em><br>
  Username of the player causing an event or user name of the player with the connection con.
</p>

<a name="UserWithoutMode:meta-server.functions">
<p class=func>
  <b class=functitle>def UserWithoutMode(<em>[user]</em>)</b><br>
<em>Category: General meta server functions</em><br>
<em>File: meta-server.functions</em><br>
  Username minus mode string of the current player or the player specified.
</p>

<a name="WeStartedGame:meta-server.functions">
<p class=func>
  <b class=functitle>def WeStartedGame()</b><br>
<em>Category: General meta server functions</em><br>
<em>File: meta-server.functions</em><br>
  called when game server announces successful game start.
</p>

<h2>General server functions (C++)</h2>
<a name="add_to_collection:server.cpp">
<p class=func>
  <b class=functitle>def add_to_collection(<em>user</em>, <em>list of cards</em>)</b><br>
<em>Category: General server functions (C++)</em><br>
<em>File: server.cpp</em><br>
  Add a list of cards to collection (variable 'users') of the given user. Note: there is no error chcekcing for card numbers.
</p>

<a name="check_card:server.cpp">
<p class=func>
  <b class=functitle>def check_card(<em>user name</em>, <em>card number</em>)</b><br>
<em>Category: General server functions (C++)</em><br>
<em>File: server.cpp</em><br>
  Check existense of a user and a card and create new empty card to collection if not already exist.
</p>

<a name="count_cards:server.cpp">
<p class=func>
  <b class=functitle>def count_cards(<em>user</em>)</b><br>
<em>Category: General server functions (C++)</em><br>
<em>File: server.cpp</em><br>
  Return triplet (# cards owned,# cards for sale,# cards wanted) for user.
</p>

<a name="del_prices:server.cpp">
<p class=func>
  <b class=functitle>def del_prices(<em>user name</em>)</b><br>
<em>Category: General server functions (C++)</em><br>
<em>File: server.cpp</em><br>
  Delete all prices from 'prices' variable set by the given player. Return 1 if succesful.
</p>

<a name="get_card_data:server.cpp">
<p class=func>
  <b class=functitle>def get_card_data(<em>user</em>, <em>card list</em>)</b><br>
<em>Category: General server functions (C++)</em><br>
<em>File: server.cpp</em><br>
  Return a list of full update entries for cards given. check the validity of all arguments and return NULL if some of the arguments  are not valid.
</p>

<a name="have_list:server.cpp">
<p class=func>
  <b class=functitle>def have_list(<em>user asking</em>, <em> user target</em>)</b><br>
<em>Category: General server functions (C++)</em><br>
<em>File: server.cpp</em><br>
  Return a list of cards which target user has more than his trade<sub>l</sub>imit or has at least one for sale; and asking user has in his want list.
</p>

<a name="is_user:server.cpp">
<p class=func>
  <b class=functitle>def is_user(<em>user name</em>)</b><br>
<em>Category: General server functions (C++)</em><br>
<em>File: server.cpp</em><br>
  Return 1 if user exist.
</p>

<a name="min_price:server.cpp">
<p class=func>
  <b class=functitle>def min_price(<em>card number</em>)</b><br>
<em>Category: General server functions (C++)</em><br>
<em>File: server.cpp</em><br>
  Find the cheapest offer for sale. Return (list of sellers,price) pair or NULL if there are 0 cards for sale.
</p>

<a name="price_list:server.cpp">
<p class=func>
  <b class=functitle>def price_list(<em>list of card numbers or single card number</em>)</b><br>
<em>Category: General server functions (C++)</em><br>
<em>File: server.cpp</em><br>
  With  single card number argument, return the best offer for the card in format (card numer,(seller,price)). If there are not any cards for sale, return NULL. If a list of card numbers is given, return list of the prices for those cards. Without any arguments, return the full list of all prices. NULLs are removed when returning a list.
</p>

<a name="remove_obsolete_prices:server.cpp">
<p class=func>
  <b class=functitle>def remove_obsolete_prices(<em>card numbers</em>)</b><br>
<em>Category: General server functions (C++)</em><br>
<em>File: server.cpp</em><br>
  Helper function to make transition from older server to the caching server easier. Clean obsolete entries from 'prices' variable. Return number of removed entries.
</p>

<a name="set_error_trigger:server.cpp">
<p class=func>
  <b class=functitle>def set_error_trigger(<em>key1</em>, <em>key2</em>)</b><br>
<em>Category: General server functions (C++)</em><br>
<em>File: server.cpp</em><br>
  Set hook to call when error occurrs during script.
</p>

<a name="set_forsale:server.cpp">
<p class=func>
  <b class=functitle>def set_forsale(<em>user</em>, <em> card</em>, <em> how many</em>)</b><br>
<em>Category: General server functions (C++)</em><br>
<em>File: server.cpp</em><br>
  Set the number of cards for sale (or wanted if &lt; 0). Return NULL if fails, 1 if success and 2 if success and clients may need price refresh.
</p>

<a name="set_price:server.cpp">
<p class=func>
  <b class=functitle>def set_price(<em>user</em>, <em> card</em>, <em> price</em>)</b><br>
<em>Category: General server functions (C++)</em><br>
<em>File: server.cpp</em><br>
  Set the price for a card. Return NULL if fails, 1 if success.
</p>

<a name="user_has_cards:server.cpp">
<p class=func>
  <b class=functitle>def user_has_cards(<em>user</em>, <em> card list</em>)</b><br>
<em>Category: General server functions (C++)</em><br>
<em>File: server.cpp</em><br>
  Return number of missing cards in card list (nmb. of cards,card number).
</p>

<a name="want_list:server.cpp">
<p class=func>
  <b class=functitle>def want_list(<em>user asking</em>, <em> user target</em>)</b><br>
<em>Category: General server functions (C++)</em><br>
<em>File: server.cpp</em><br>
  Return a list of cards which target wants.
</p>

<h2>Lotr specific client functions</h2>
<a name="BidHook:Lotr.include">
<p class=func>
  <b class=functitle>def BidHook(<em>results</em>)</b><br>
<em>Category: Lotr specific client functions</em><br>
<em>File: Lotr.include</em><br>
  This hook is called when bidding results are received. The results are presented as a dictionary mapping player numbers to bids.
</p>

<a name="CompanySize:Lotr.include">
<p class=func>
  <b class=functitle>def CompanySize()</b><br>
<em>Category: Lotr specific client functions</em><br>
<em>File: Lotr.include</em><br>
  Return size of the my company.
</p>

<a name="EndOfTurnHook:Lotr.include">
<p class=func>
  <b class=functitle>def EndOfTurnHook()</b><br>
<em>Category: Lotr specific client functions</em><br>
<em>File: Lotr.include</em><br>
  Called after end of turn is announced.
</p>

<a name="InitializeGame:Lotr.include">
<p class=func>
  <b class=functitle>def InitializeGame()</b><br>
<em>Category: Lotr specific client functions</em><br>
<em>File: Lotr.include</em><br>
  Game specific initialization of game variables.
</p>

<a name="InitializeLocationTables:Lotr.include">
<p class=func>
  <b class=functitle>def InitializeLocationTables()</b><br>
<em>Category: Lotr specific client functions</em><br>
<em>File: Lotr.include</em><br>
  Fill tables for location algorithm (See Mtg.include for details).
</p>

<a name="InputHook:Lotr.include">
<p class=func>
  <b class=functitle>def InputHook(<em>input</em>)</b><br>
<em>Category: Lotr specific client functions</em><br>
<em>File: Lotr.include</em><br>
  This hook is called when the enter key is pressed and the current input line is not going to be a pricing command. This hook should return 1, if it handles the input or 0, if default handler should be used instead.
</p>

<a name="MouseLeftClickActiveSet:Lotr.include">
<p class=func>
  <b class=functitle>def MouseLeftClickActiveSet()</b><br>
<em>Category: Lotr specific client functions</em><br>
<em>File: Lotr.include</em><br>
  Play a card.
</p>

<a name="MouseLeftClickSiteCard:Lotr.include">
<p class=func>
  <b class=functitle>def MouseLeftClickSiteCard()</b><br>
<em>Category: Lotr specific client functions</em><br>
<em>File: Lotr.include</em><br>
  Move to the next site.
</p>

<a name="MouseLeftClickSites:Lotr.include">
<p class=func>
  <b class=functitle>def MouseLeftClickSites()</b><br>
<em>Category: Lotr specific client functions</em><br>
<em>File: Lotr.include</em><br>
  Play next site.
</p>

<a name="MouseLeftClickSitesSearchBoxHook:Lotr.include">
<p class=func>
  <b class=functitle>def MouseLeftClickSitesSearchBoxHook()</b><br>
<em>Category: Lotr specific client functions</em><br>
<em>File: Lotr.include</em><br>
  Play a site.
</p>

<a name="MouseLeftClickTwilightPool:Lotr.include">
<p class=func>
  <b class=functitle>def MouseLeftClickTwilightPool()</b><br>
<em>Category: Lotr specific client functions</em><br>
<em>File: Lotr.include</em><br>
  Add one twilight counter.
</p>

<a name="MouseMiddleClickTwilightPool:Lotr.include">
<p class=func>
  <b class=functitle>def MouseMiddleClickTwilightPool()</b><br>
<em>Category: Lotr specific client functions</em><br>
<em>File: Lotr.include</em><br>
  Delete one twilight counter.
</p>

<a name="MyFrodo:Lotr.include">
<p class=func>
  <b class=functitle>def MyFrodo()</b><br>
<em>Category: Lotr specific client functions</em><br>
<em>File: Lotr.include</em><br>
  Return object number of my Frodo or NULL if not found.
</p>

<a name="NewDeck:Lotr.include">
<p class=func>
  <b class=functitle>def NewDeck()</b><br>
<em>Category: Lotr specific client functions</em><br>
<em>File: Lotr.include</em><br>
  Game specific creation of empty deck structure.
</p>

<a name="NextSiteNumber:Lotr.include">
<p class=func>
  <b class=functitle>def NextSiteNumber()</b><br>
<em>Category: Lotr specific client functions</em><br>
<em>File: Lotr.include</em><br>
  Calculate the smallest site number not yet in table.
</p>

<a name="PlayEvent:Lotr.include">
<p class=func>
  <b class=functitle>def PlayEvent(<em>card number</em>, <em>is face down?</em>)</b><br>
<em>Category: Lotr specific client functions</em><br>
<em>File: Lotr.include</em><br>
  Play an event card.
</p>

<a name="PlayKeyControlKeyA:Lotr.include">
<p class=func>
  <b class=functitle>def PlayKeyControlKeyA()</b><br>
<em>Category: Lotr specific client functions</em><br>
<em>File: Lotr.include</em><br>
  Handler for key Control+A in play mode.
</p>

<a name="PlayKeyControlKeyD:Lotr.include">
<p class=func>
  <b class=functitle>def PlayKeyControlKeyD()</b><br>
<em>Category: Lotr specific client functions</em><br>
<em>File: Lotr.include</em><br>
  Handler for key Control+D in play mode.
</p>

<a name="PlayKeyControlKeyDelete:Lotr.include">
<p class=func>
  <b class=functitle>def PlayKeyControlKeyDelete()</b><br>
<em>Category: Lotr specific client functions</em><br>
<em>File: Lotr.include</em><br>
  Handler for key Control+Delete in play mode.
</p>

<a name="PlayKeyControlKeyU:Lotr.include">
<p class=func>
  <b class=functitle>def PlayKeyControlKeyU()</b><br>
<em>Category: Lotr specific client functions</em><br>
<em>File: Lotr.include</em><br>
  Delete all tokens from Twilight pool.
</p>

<a name="PlaySite:Lotr.include">
<p class=func>
  <b class=functitle>def PlaySite(<em>card number</em>, <em>is face down?</em>)</b><br>
<em>Category: Lotr specific client functions</em><br>
<em>File: Lotr.include</em><br>
  Play a site card.
</p>

<a name="PlaySitesMenu:Lotr.include">
<p class=func>
  <b class=functitle>def PlaySitesMenu()</b><br>
<em>Category: Lotr specific client functions</em><br>
<em>File: Lotr.include</em><br>
  Generate menu for sites.
</p>

<a name="PlayTwilightPoolMenu:Lotr.include">
<p class=func>
  <b class=functitle>def PlayTwilightPoolMenu()</b><br>
<em>Category: Lotr specific client functions</em><br>
<em>File: Lotr.include</em><br>
  Generate menu for Twilight Pool.
</p>

<a name="PutTableHook:Lotr.include">
<p class=func>
  <b class=functitle>def PutTableHook(<em>n</em>, <em>x</em>, <em>y</em>, <em>o</em>, <em>c</em>, <em>p</em>)</b><br>
<em>Category: Lotr specific client functions</em><br>
<em>File: Lotr.include</em><br>
  Put a card number 'c' owned by 'p' using object number 'n' to the table centered at (x,y) oriented 'o' degrees clockwise.
</p>

<a name="SearchStartingCards:Lotr.include">
<p class=func>
  <b class=functitle>def SearchStartingCards()</b><br>
<em>Category: Lotr specific client functions</em><br>
<em>File: Lotr.include</em><br>
  Search all potential starting cards from the deck and set aside.
</p>

<a name="StartGame:Lotr.include">
<p class=func>
  <b class=functitle>def StartGame()</b><br>
<em>Category: Lotr specific client functions</em><br>
<em>File: Lotr.include</em><br>
  What to do when game begins.
</p>

<a name="TryTransferHook:Lotr.include">
<p class=func>
  <b class=functitle>def TryTransferHook(<em>dest</em>)</b><br>
<em>Category: Lotr specific client functions</em><br>
<em>File: Lotr.include</em><br>
  Called before applying relevant transfer function. This function may modify target when needed.
</p>

<a name="TwilightPool:Lotr.include">
<p class=func>
  <b class=functitle>def TwilightPool()</b><br>
<em>Category: Lotr specific client functions</em><br>
<em>File: Lotr.include</em><br>
  Return object number of the twilight pool or NULL if not found.
</p>

<a name="TwilightTokens:Lotr.include">
<p class=func>
  <b class=functitle>def TwilightTokens()</b><br>
<em>Category: Lotr specific client functions</em><br>
<em>File: Lotr.include</em><br>
  Count number of twilight tokens.
</p>

<h2>Lotr specific factory server functions</h2>
<a name="InitDistributions:Lotr-factory-server.include">
<p class=func>
  <b class=functitle>def InitDistributions()</b><br>
<em>Category: Lotr specific factory server functions</em><br>
<em>File: Lotr-factory-server.include</em><br>
  Initialize product distribution data.
</p>

<h2>Lotr specific game server functions</h2>
<a name="InitialScore:Lotr-server.include">
<p class=func>
  <b class=functitle>def InitialScore(<em>p</em>)</b><br>
<em>Category: Lotr specific game server functions</em><br>
<em>File: Lotr-server.include</em><br>
  Return a structure representing initial score for a player 'p'.
</p>

<a name="InitServerHook:Lotr-server.include">
<p class=func>
  <b class=functitle>def InitServerHook(<em>nmb.of players</em>)</b><br>
<em>Category: Lotr specific game server functions</em><br>
<em>File: Lotr-server.include</em><br>
  Called during server initialization.
</p>

<a name="SetUpPlayer:Lotr-server.include">
<p class=func>
  <b class=functitle>def SetUpPlayer(<em>p</em>)</b><br>
<em>Category: Lotr specific game server functions</em><br>
<em>File: Lotr-server.include</em><br>
  Create necessary strucrures for player 'p'.
</p>

<h2>Metw specific client functions</h2>
<a name="AddSideboardFwCards:Metw.include">
<p class=func>
  <b class=functitle>def AddSideboardFwCards()</b><br>
<em>Category: Metw specific client functions</em><br>
<em>File: Metw.include</em><br>
  Add anti fw cards to sideboard.
</p>

<a name="AdjustScore:Metw.include">
<p class=func>
  <b class=functitle>def AdjustScore(<em>object</em>, <em>amount</em>)</b><br>
<em>Category: Metw specific client functions</em><br>
<em>File: Metw.include</em><br>
  Set score adjustment for a card.
</p>

<a name="ChatMapMenu:Metw.include">
<p class=func>
  <b class=functitle>def ChatMapMenu()</b><br>
<em>Category: Metw specific client functions</em><br>
<em>File: Metw.include</em><br>
  Generate menu for map.
</p>

<a name="CreateDeckHook:Metw.include">
<p class=func>
  <b class=functitle>def CreateDeckHook(<em>object num</em>, <em>owner player</em>, <em>name</em>, <em>(x</em>, <em>y)</em>)</b><br>
<em>Category: Metw specific client functions</em><br>
<em>File: Metw.include</em><br>
  This hook is called after creation of a deck.
</p>

<a name="CurrentDeckAddHavens:Metw.include">
<p class=func>
  <b class=functitle>def CurrentDeckAddHavens()</b><br>
<em>Category: Metw specific client functions</em><br>
<em>File: Metw.include</em><br>
  Check site types already in deck and add havens of that type.
</p>

<a name="CurrentDeckAddSites:Metw.include">
<p class=func>
  <b class=functitle>def CurrentDeckAddSites(<em>site type</em>)</b><br>
<em>Category: Metw specific client functions</em><br>
<em>File: Metw.include</em><br>
  Add one card of each site with the given type.
</p>

<a name="CurrentDeckRemoveSites:Metw.include">
<p class=func>
  <b class=functitle>def CurrentDeckRemoveSites()</b><br>
<em>Category: Metw specific client functions</em><br>
<em>File: Metw.include</em><br>
  Delete all cards from 'sites' section.
</p>

<a name="CurrentDeckRemoveUnownedSites:Metw.include">
<p class=func>
  <b class=functitle>def CurrentDeckRemoveUnownedSites()</b><br>
<em>Category: Metw specific client functions</em><br>
<em>File: Metw.include</em><br>
  Remove sites that player does not have.
</p>

<a name="DelDeckHook:Metw.include">
<p class=func>
  <b class=functitle>def DelDeckHook(<em>object number</em>, <em>deck name</em>, <em> card number</em>, <em> index</em>)</b><br>
<em>Category: Metw specific client functions</em><br>
<em>File: Metw.include</em><br>
  Called before removing a card from the deck.
</p>

<a name="DelTableHook:Metw.include">
<p class=func>
  <b class=functitle>def DelTableHook(<em>object number</em>)</b><br>
<em>Category: Metw specific client functions</em><br>
<em>File: Metw.include</em><br>
  Del a card 'object number' from the table.
</p>

<a name="EditAddSideboard:Metw.include">
<p class=func>
  <b class=functitle>def EditAddSideboard()</b><br>
<em>Category: Metw specific client functions</em><br>
<em>File: Metw.include</em><br>
  Add sideboard vs. fw to the current deck.
</p>

<a name="EditRemoveSideboard:Metw.include">
<p class=func>
  <b class=functitle>def EditRemoveSideboard()</b><br>
<em>Category: Metw specific client functions</em><br>
<em>File: Metw.include</em><br>
  Remove sideboard vs. fw from the current deck if exist.
</p>

<a name="InitializeGame:Metw.include">
<p class=func>
  <b class=functitle>def InitializeGame()</b><br>
<em>Category: Metw specific client functions</em><br>
<em>File: Metw.include</em><br>
  Game specific initialization of game variables.
</p>

<a name="InitializeLocationTables:Metw.include">
<p class=func>
  <b class=functitle>def InitializeLocationTables()</b><br>
<em>Category: Metw specific client functions</em><br>
<em>File: Metw.include</em><br>
  Fill tables for location algorithm (See Mtg.include for details).
</p>

<a name="KeyControlKeyM:Metw.include">
<p class=func>
  <b class=functitle>def KeyControlKeyM()</b><br>
<em>Category: Metw specific client functions</em><br>
<em>File: Metw.include</em><br>
  Toggle map.
</p>

<a name="KeyEscapeHook:Metw.include">
<p class=func>
  <b class=functitle>def KeyEscapeHook(<em>current list of objects</em>)</b><br>
<em>Category: Metw specific client functions</em><br>
<em>File: Metw.include</em><br>
  Modify list of objects potentially hided by key Esc.
</p>

<a name="KeyShiftAltKeyB:Metw.include">
<p class=func>
  <b class=functitle>def KeyShiftAltKeyB()</b><br>
<em>Category: Metw specific client functions</em><br>
<em>File: Metw.include</em><br>
  Produce {B}.
</p>

<a name="KeyShiftAltKeyD:Metw.include">
<p class=func>
  <b class=functitle>def KeyShiftAltKeyD()</b><br>
<em>Category: Metw specific client functions</em><br>
<em>File: Metw.include</em><br>
  Produce {D}.
</p>

<a name="KeyShiftAltKeyF:Metw.include">
<p class=func>
  <b class=functitle>def KeyShiftAltKeyF()</b><br>
<em>Category: Metw specific client functions</em><br>
<em>File: Metw.include</em><br>
  Produce {F}.
</p>

<a name="KeyShiftAltKeyH:Metw.include">
<p class=func>
  <b class=functitle>def KeyShiftAltKeyH()</b><br>
<em>Category: Metw specific client functions</em><br>
<em>File: Metw.include</em><br>
  Produce {H}.
</p>

<a name="KeyShiftAltKeyR:Metw.include">
<p class=func>
  <b class=functitle>def KeyShiftAltKeyR()</b><br>
<em>Category: Metw specific client functions</em><br>
<em>File: Metw.include</em><br>
  Produce {R}.
</p>

<a name="KeyShiftAltKeyS:Metw.include">
<p class=func>
  <b class=functitle>def KeyShiftAltKeyS()</b><br>
<em>Category: Metw specific client functions</em><br>
<em>File: Metw.include</em><br>
  Produce {S}.
</p>

<a name="KeyShiftControlKeyB:Metw.include">
<p class=func>
  <b class=functitle>def KeyShiftControlKeyB()</b><br>
<em>Category: Metw specific client functions</em><br>
<em>File: Metw.include</em><br>
  Produce {b}.
</p>

<a name="KeyShiftControlKeyC:Metw.include">
<p class=func>
  <b class=functitle>def KeyShiftControlKeyC()</b><br>
<em>Category: Metw specific client functions</em><br>
<em>File: Metw.include</em><br>
  Produce {c}.
</p>

<a name="KeyShiftControlKeyD:Metw.include">
<p class=func>
  <b class=functitle>def KeyShiftControlKeyD()</b><br>
<em>Category: Metw specific client functions</em><br>
<em>File: Metw.include</em><br>
  Produce {d}.
</p>

<a name="KeyShiftControlKeyF:Metw.include">
<p class=func>
  <b class=functitle>def KeyShiftControlKeyF()</b><br>
<em>Category: Metw specific client functions</em><br>
<em>File: Metw.include</em><br>
  Produce {f}.
</p>

<a name="KeyShiftControlKeyS:Metw.include">
<p class=func>
  <b class=functitle>def KeyShiftControlKeyS()</b><br>
<em>Category: Metw specific client functions</em><br>
<em>File: Metw.include</em><br>
  Produce {s}.
</p>

<a name="KeyShiftControlKeyW:Metw.include">
<p class=func>
  <b class=functitle>def KeyShiftControlKeyW()</b><br>
<em>Category: Metw specific client functions</em><br>
<em>File: Metw.include</em><br>
  Produce {w}.
</p>

<a name="MouseControlMiddleClickMap:Metw.include">
<p class=func>
  <b class=functitle>def MouseControlMiddleClickMap()</b><br>
<em>Category: Metw specific client functions</em><br>
<em>File: Metw.include</em><br>
  Add region name and type to the chat.
</p>

<a name="MouseLeftClickActiveSet:Metw.include">
<p class=func>
  <b class=functitle>def MouseLeftClickActiveSet()</b><br>
<em>Category: Metw specific client functions</em><br>
<em>File: Metw.include</em><br>
  Play a card.
</p>

<a name="MouseLeftClickDiscardPile:Metw.include">
<p class=func>
  <b class=functitle>def MouseLeftClickDiscardPile()</b><br>
<em>Category: Metw specific client functions</em><br>
<em>File: Metw.include</em><br>
  Look at discard.
</p>

<a name="MouseLeftClickDiscardPileSearchBoxHook:Metw.include">
<p class=func>
  <b class=functitle>def MouseLeftClickDiscardPileSearchBoxHook()</b><br>
<em>Category: Metw specific client functions</em><br>
<em>File: Metw.include</em><br>
  Shuffle a card to the deck revealing type.
</p>

<a name="MouseLeftClickMap:Metw.include">
<p class=func>
  <b class=functitle>def MouseLeftClickMap()</b><br>
<em>Category: Metw specific client functions</em><br>
<em>File: Metw.include</em><br>
  Search sites of the clicked region.
</p>

<a name="MouseLeftClickPool:Metw.include">
<p class=func>
  <b class=functitle>def MouseLeftClickPool()</b><br>
<em>Category: Metw specific client functions</em><br>
<em>File: Metw.include</em><br>
  Look at pool.
</p>

<a name="MouseLeftClickPoolSearchBoxHook:Metw.include">
<p class=func>
  <b class=functitle>def MouseLeftClickPoolSearchBoxHook()</b><br>
<em>Category: Metw specific client functions</em><br>
<em>File: Metw.include</em><br>
  Play a card face up from pool.
</p>

<a name="MouseLeftClickSideboard:Metw.include">
<p class=func>
  <b class=functitle>def MouseLeftClickSideboard()</b><br>
<em>Category: Metw specific client functions</em><br>
<em>File: Metw.include</em><br>
  Look at sideboard.
</p>

<a name="MouseLeftClickSideboardSearchBoxHook:Metw.include">
<p class=func>
  <b class=functitle>def MouseLeftClickSideboardSearchBoxHook()</b><br>
<em>Category: Metw specific client functions</em><br>
<em>File: Metw.include</em><br>
  Shuffle a card to the deck and reveal type.
</p>

<a name="MouseLeftClickSites:Metw.include">
<p class=func>
  <b class=functitle>def MouseLeftClickSites()</b><br>
<em>Category: Metw specific client functions</em><br>
<em>File: Metw.include</em><br>
  Look at sites.
</p>

<a name="MouseLeftClickSitesSearchBoxHook:Metw.include">
<p class=func>
  <b class=functitle>def MouseLeftClickSitesSearchBoxHook()</b><br>
<em>Category: Metw specific client functions</em><br>
<em>File: Metw.include</em><br>
  Play a site face down or face up if the first site.
</p>

<a name="MouseMiddleClickHand:Metw.include">
<p class=func>
  <b class=functitle>def MouseMiddleClickHand()</b><br>
<em>Category: Metw specific client functions</em><br>
<em>File: Metw.include</em><br>
  Play card face down.
</p>

<a name="MouseMiddleClickMap:Metw.include">
<p class=func>
  <b class=functitle>def MouseMiddleClickMap()</b><br>
<em>Category: Metw specific client functions</em><br>
<em>File: Metw.include</em><br>
  Toggle map off.
</p>

<a name="MouseMiddleClickPoolSearchBoxHook:Metw.include">
<p class=func>
  <b class=functitle>def MouseMiddleClickPoolSearchBoxHook()</b><br>
<em>Category: Metw specific client functions</em><br>
<em>File: Metw.include</em><br>
  Play a card face down from pool.
</p>

<a name="MouseMiddleClickSites:Metw.include">
<p class=func>
  <b class=functitle>def MouseMiddleClickSites()</b><br>
<em>Category: Metw specific client functions</em><br>
<em>File: Metw.include</em><br>
  Show a map.
</p>

<a name="NewDeck:Metw.include">
<p class=func>
  <b class=functitle>def NewDeck()</b><br>
<em>Category: Metw specific client functions</em><br>
<em>File: Metw.include</em><br>
  Game specific creation of empty deck structure.
</p>

<a name="PlayFromSelectionHook:Metw.include">
<p class=func>
  <b class=functitle>def PlayFromSelectionHook(<em>NULL</em>)</b><br>
<em>Category: Metw specific client functions</em><br>
<em>File: Metw.include</em><br>
  Called after transfering a card directly from the selection. Hides the map.
</p>

<a name="PlayKeyControlKeyMinus:Metw.include">
<p class=func>
  <b class=functitle>def PlayKeyControlKeyMinus()</b><br>
<em>Category: Metw specific client functions</em><br>
<em>File: Metw.include</em><br>
  Decrease score for a card.
</p>

<a name="PlayKeyControlKeyPlus:Metw.include">
<p class=func>
  <b class=functitle>def PlayKeyControlKeyPlus()</b><br>
<em>Category: Metw specific client functions</em><br>
<em>File: Metw.include</em><br>
  Increase score for a card.
</p>

<a name="PlayKeyEnter:Metw.include">
<p class=func>
  <b class=functitle>def PlayKeyEnter()</b><br>
<em>Category: Metw specific client functions</em><br>
<em>File: Metw.include</em><br>
  Enter to the site.
</p>

<a name="PlayMapMenu:Metw.include">
<p class=func>
  <b class=functitle>def PlayMapMenu()</b><br>
<em>Category: Metw specific client functions</em><br>
<em>File: Metw.include</em><br>
  Generate menu for map.
</p>

<a name="PlayPoolMenu:Metw.include">
<p class=func>
  <b class=functitle>def PlayPoolMenu()</b><br>
<em>Category: Metw specific client functions</em><br>
<em>File: Metw.include</em><br>
  Generate menu for pool.
</p>

<a name="PlaySideboardMenu:Metw.include">
<p class=func>
  <b class=functitle>def PlaySideboardMenu()</b><br>
<em>Category: Metw specific client functions</em><br>
<em>File: Metw.include</em><br>
  Generate menu for sideboard.
</p>

<a name="PlaySiteFromSelection:Metw.include">
<p class=func>
  <b class=functitle>def PlaySiteFromSelection(<em>card number</em>)</b><br>
<em>Category: Metw specific client functions</em><br>
<em>File: Metw.include</em><br>
  Play site from selector.
</p>

<a name="PlaySitesMenu:Metw.include">
<p class=func>
  <b class=functitle>def PlaySitesMenu()</b><br>
<em>Category: Metw specific client functions</em><br>
<em>File: Metw.include</em><br>
  Generate menu for sites.
</p>

<a name="PoolSearchBoxMenuHook:Metw.include">
<p class=func>
  <b class=functitle>def PoolSearchBoxMenuHook()</b><br>
<em>Category: Metw specific client functions</em><br>
<em>File: Metw.include</em><br>
  Generate menu for a character pool.
</p>

<a name="PutDeckHook:Metw.include">
<p class=func>
  <b class=functitle>def PutDeckHook(<em>object number</em>, <em>deck name</em>, <em> card number(s)</em>)</b><br>
<em>Category: Metw specific client functions</em><br>
<em>File: Metw.include</em><br>
  Called after adding cards to the deck.
</p>

<a name="PutTableHook:Metw.include">
<p class=func>
  <b class=functitle>def PutTableHook(<em>n</em>, <em>x</em>, <em>y</em>, <em>o</em>, <em>c</em>, <em>p</em>)</b><br>
<em>Category: Metw specific client functions</em><br>
<em>File: Metw.include</em><br>
  Put a card number 'c' owned by 'p' using object number 'n' to the table centered at (x,y) oriented 'o' degrees clockwise.
</p>

<a name="RecalculateScores:Metw.include">
<p class=func>
  <b class=functitle>def RecalculateScores()</b><br>
<em>Category: Metw specific client functions</em><br>
<em>File: Metw.include</em><br>
  Compute and update scores on server.
</p>

<a name="ReplaceTableHook:Metw.include">
<p class=func>
  <b class=functitle>def ReplaceTableHook(<em>object</em>, <em>card</em>, <em>old card</em>)</b><br>
<em>Category: Metw specific client functions</em><br>
<em>File: Metw.include</em><br>
  Replace card on table with new card image.
</p>

<a name="ScoreAdjustment:Metw.include">
<p class=func>
  <b class=functitle>def ScoreAdjustment(<em>object</em>)</b><br>
<em>Category: Metw specific client functions</em><br>
<em>File: Metw.include</em><br>
  Return current adjustment to score for the object.
</p>

<a name="ScoreToText:Metw.include">
<p class=func>
  <b class=functitle>def ScoreToText(<em>score structure</em>)</b><br>
<em>Category: Metw specific client functions</em><br>
<em>File: Metw.include</em><br>
  Convert a score structure to string.
</p>

<a name="SideboardSearchBoxMenuHook:Metw.include">
<p class=func>
  <b class=functitle>def SideboardSearchBoxMenuHook()</b><br>
<em>Category: Metw specific client functions</em><br>
<em>File: Metw.include</em><br>
  Generate menu for sideboard search box.
</p>

<a name="SingleCardMenuHook:Metw.include">
<p class=func>
  <b class=functitle>def SingleCardMenuHook(<em>context</em>)</b><br>
<em>Category: Metw specific client functions</em><br>
<em>File: Metw.include</em><br>
  added to menu for a single card.
</p>

<a name="SitesOfRegion:Metw.include">
<p class=func>
  <b class=functitle>def SitesOfRegion(<em>region name</em>)</b><br>
<em>Category: Metw specific client functions</em><br>
<em>File: Metw.include</em><br>
  Return list of sites currently in location deck that are accessible from the region.
</p>

<a name="SortSites:Metw.include">
<p class=func>
  <b class=functitle>def SortSites()</b><br>
<em>Category: Metw specific client functions</em><br>
<em>File: Metw.include</em><br>
  Sort sites of the cuttent deck to order used during game.
</p>

<a name="SpecialEventAdjustScore:Metw.include">
<p class=func>
  <b class=functitle>def SpecialEventAdjustScore(<em>object number</em>, <em>change</em>)</b><br>
<em>Category: Metw specific client functions</em><br>
<em>File: Metw.include</em><br>
  Hande special event AdjustScore.
</p>

<a name="StartGame:Metw.include">
<p class=func>
  <b class=functitle>def StartGame()</b><br>
<em>Category: Metw specific client functions</em><br>
<em>File: Metw.include</em><br>
  What to do when game begins.
</p>

<a name="TryTransferHook:Metw.include">
<p class=func>
  <b class=functitle>def TryTransferHook(<em>dest</em>)</b><br>
<em>Category: Metw specific client functions</em><br>
<em>File: Metw.include</em><br>
  called before applying relevant transfer function.
</p>

<a name="UntapHook:Metw.include">
<p class=func>
  <b class=functitle>def UntapHook(<em>object number</em>)</b><br>
<em>Category: Metw specific client functions</em><br>
<em>File: Metw.include</em><br>
  Return 1 if card shoud be untapped using Ctrl+U.
</p>

<h2>Metw specific common client and server functions</h2>
<a name="RuleAgentMindTotal:Metw-common.include">
<p class=func>
  <b class=functitle>def RuleAgentMindTotal(<em>list of card numbers</em>)</b><br>
<em>Category: Metw specific common client and server functions</em><br>
<em>File: Metw-common.include</em><br>
  Check that total mind of agents are not exceeded.
</p>

<a name="RuleBothHeroAndMinionUnique:Metw-common.include">
<p class=func>
  <b class=functitle>def RuleBothHeroAndMinionUnique(<em>cards</em>)</b><br>
<em>Category: Metw specific common client and server functions</em><br>
<em>File: Metw-common.include</em><br>
  Return 1 if there are no unique cards as both hero and minion version.
</p>

<a name="RuleCheckWizards:Metw-common.include">
<p class=func>
  <b class=functitle>def RuleCheckWizards(<em>card list</em>, <em>"deck"/"total"</em>, <em>"H"/"M"/"F"/"B"</em>)</b><br>
<em>Category: Metw specific common client and server functions</em><br>
<em>File: Metw-common.include</em><br>
  Check that the number of wizards comply rules in deck or in total.
</p>

<a name="RuleCountCreatures:Metw-common.include">
<p class=func>
  <b class=functitle>def RuleCountCreatures(<em>list of card numbers</em>, <em>"H"/"M"/"F"/"B"</em>)</b><br>
<em>Category: Metw specific common client and server functions</em><br>
<em>File: Metw-common.include</em><br>
  Return number of creatures.
</p>

<a name="RuleHazardResourceBalance:Metw-common.include">
<p class=func>
  <b class=functitle>def RuleHazardResourceBalance(<em>card list</em>, <em>"H"/"M"/"F"/"B"</em>)</b><br>
<em>Category: Metw specific common client and server functions</em><br>
<em>File: Metw-common.include</em><br>
  Check that there is as many hazards as resources.
</p>

<a name="RuleNonUniqueStageCards:Metw-common.include">
<p class=func>
  <b class=functitle>def RuleNonUniqueStageCards(<em>cards</em>)</b><br>
<em>Category: Metw specific common client and server functions</em><br>
<em>File: Metw-common.include</em><br>
  Count number of non-unique stage cards.
</p>

<a name="RuleSpecific:Metw-common.include">
<p class=func>
  <b class=functitle>def RuleSpecific(<em>cards</em>)</b><br>
<em>Category: Metw specific common client and server functions</em><br>
<em>File: Metw-common.include</em><br>
  Return number of "specifics" in deck.
</p>

<a name="RuleStagepoints:Metw-common.include">
<p class=func>
  <b class=functitle>def RuleStagepoints(<em>cards</em>)</b><br>
<em>Category: Metw specific common client and server functions</em><br>
<em>File: Metw-common.include</em><br>
  Count number of stage points.
</p>

<h2>Metw specific factory server functions</h2>
<a name="InitDistributions:Metw-factory-server.include">
<p class=func>
  <b class=functitle>def InitDistributions()</b><br>
<em>Category: Metw specific factory server functions</em><br>
<em>File: Metw-factory-server.include</em><br>
  Initialize product distribution data.
</p>

<a name="ProduceLE_Starter:Metw-factory-server.include">
<p class=func>
  <b class=functitle>def ProduceLE_Starter()</b><br>
<em>Category: Metw specific factory server functions</em><br>
<em>File: Metw-factory-server.include</em><br>
  Produce The Lidless Eye starter.
</p>

<a name="ProduceTW_Starter:Metw-factory-server.include">
<p class=func>
  <b class=functitle>def ProduceTW_Starter()</b><br>
<em>Category: Metw specific factory server functions</em><br>
<em>File: Metw-factory-server.include</em><br>
  Produce The Wizards starter.
</p>

<h2>Metw specific game server functions</h2>
<a name="InitialScore:Metw-server.include">
<p class=func>
  <b class=functitle>def InitialScore(<em>p</em>)</b><br>
<em>Category: Metw specific game server functions</em><br>
<em>File: Metw-server.include</em><br>
  Return a structure representing initial score for a player 'p'.
</p>

<a name="InitServerHook:Metw-server.include">
<p class=func>
  <b class=functitle>def InitServerHook(<em>nmb.of players</em>)</b><br>
<em>Category: Metw specific game server functions</em><br>
<em>File: Metw-server.include</em><br>
  Called during server initialization.
</p>

<a name="LoadgameHook:Metw-server.include">
<p class=func>
  <b class=functitle>def LoadgameHook(<em>special</em>)</b><br>
<em>Category: Metw specific game server functions</em><br>
<em>File: Metw-server.include</em><br>
  Called after the game is restored but before objects are sent to players. Argument  is the same as returned by SavegameHook().
</p>

<a name="SavegameHook:Metw-server.include">
<p class=func>
  <b class=functitle>def SavegameHook()</b><br>
<em>Category: Metw specific game server functions</em><br>
<em>File: Metw-server.include</em><br>
  Return game specific stuff to save.
</p>

<a name="SendFullGameStatusHook:Metw-server.include">
<p class=func>
  <b class=functitle>def SendFullGameStatusHook(<em>player</em>)</b><br>
<em>Category: Metw specific game server functions</em><br>
<em>File: Metw-server.include</em><br>
  Called when full game status is sent to the player/watcher.
</p>

<a name="SetUpPlayer:Metw-server.include">
<p class=func>
  <b class=functitle>def SetUpPlayer(<em>p</em>)</b><br>
<em>Category: Metw specific game server functions</em><br>
<em>File: Metw-server.include</em><br>
  Create necessary strucrures for player 'p'.
</p>

<a name="SpecialHook:Metw-server.include">
<p class=func>
  <b class=functitle>def SpecialHook(<em>command</em>, <em>object number</em>, <em>adjust</em>)</b><br>
<em>Category: Metw specific game server functions</em><br>
<em>File: Metw-server.include</em><br>
  Adjust score.
</p>

<h2>Metw specific meta server functions</h2>
<a name="EndGameHook:Metw-meta-server.include">
<p class=func>
  <b class=functitle>def EndGameHook(<em>player name who declared</em>, <em>result</em>, <em>result options</em>, <em>player numbers</em>, <em>player names</em>, <em>bet</em>)</b><br>
<em>Category: Metw specific meta server functions</em><br>
<em>File: Metw-meta-server.include</em><br>
  This hook is called at the beginning of the game result prosessing. Note: this hook is not called for undecided results.
</p>

<a name="SealedEndHook:Metw-meta-server.include">
<p class=func>
  <b class=functitle>def SealedEndHook()</b><br>
<em>Category: Metw specific meta server functions</em><br>
<em>File: Metw-meta-server.include</em><br>
  This hook is called before ending sealed mode. Current user is sealed mode player.
</p>

<a name="SealedStartHook:Metw-meta-server.include">
<p class=func>
  <b class=functitle>def SealedStartHook(<em>sealed player name</em>, <em>mode name</em>, <em>money</em>, <em>options</em>)</b><br>
<em>Category: Metw specific meta server functions</em><br>
<em>File: Metw-meta-server.include</em><br>
  This hook is called after initialization of sealed mode is complete. Current user is a player entering in the sealed mode. Note: This hook can be called more often than end hook.
</p>

<h2>Mtg specific client functions</h2>
<a name="AddInputHook:Mtg.include">
<p class=func>
  <b class=functitle>def AddInputHook(<em>left input</em>, <em>right input</em>, <em>string</em>)</b><br>
<em>Category: Mtg specific client functions</em><br>
<em>File: Mtg.include</em><br>
  Called when a string is about to be added to the input line. This hook must add a string to the current input line and return the whole input line.
</p>

<a name="CreateDeckHook:Mtg.include">
<p class=func>
  <b class=functitle>def CreateDeckHook(<em>object num</em>, <em>owner player</em>, <em>name</em>, <em>(x</em>, <em>y)</em>)</b><br>
<em>Category: Mtg specific client functions</em><br>
<em>File: Mtg.include</em><br>
  This hook is called after creation of a deck.
</p>

<a name="EditAddSideboard:Mtg.include">
<p class=func>
  <b class=functitle>def EditAddSideboard()</b><br>
<em>Category: Mtg specific client functions</em><br>
<em>File: Mtg.include</em><br>
  Add sideboard to the current deck.
</p>

<a name="EditRemoveSideboard:Mtg.include">
<p class=func>
  <b class=functitle>def EditRemoveSideboard()</b><br>
<em>Category: Mtg specific client functions</em><br>
<em>File: Mtg.include</em><br>
  Remove sideboard from the current deck if exist.
</p>

<a name="EndGame:Mtg.include">
<p class=func>
  <b class=functitle>def EndGame()</b><br>
<em>Category: Mtg specific client functions</em><br>
<em>File: Mtg.include</em><br>
  Game over.
</p>

<a name="filter_mana:Mtg.include">
<p class=func>
  <b class=functitle>def filter_mana(<em>card number</em>)</b><br>
<em>Category: Mtg specific client functions</em><br>
<em>File: Mtg.include</em><br>
  Return converted mana cost of the card.
</p>

<a name="InitializeGame:Mtg.include">
<p class=func>
  <b class=functitle>def InitializeGame()</b><br>
<em>Category: Mtg specific client functions</em><br>
<em>File: Mtg.include</em><br>
  Game specific initialization of game variables.
</p>

<a name="InitializeLocationTables:Mtg.include">
<p class=func>
  <b class=functitle>def InitializeLocationTables()</b><br>
<em>Category: Mtg specific client functions</em><br>
<em>File: Mtg.include</em><br>
  Fill tables for location algorithm.
</p>

<a name="InputHook:Mtg.include">
<p class=func>
  <b class=functitle>def InputHook(<em>input</em>)</b><br>
<em>Category: Mtg specific client functions</em><br>
<em>File: Mtg.include</em><br>
  This hook is called when the enter key is pressed and the current input line is not going to be a pricing command. This hook should return 1, if it handles the input or 0, if default handler should be used instead.
</p>

<a name="KeyShiftControlKey0:Mtg.include">
<p class=func>
  <b class=functitle>def KeyShiftControlKey0()</b><br>
<em>Category: Mtg specific client functions</em><br>
<em>File: Mtg.include</em><br>
  Produce {0}.
</p>

<a name="KeyShiftControlKeyB:Mtg.include">
<p class=func>
  <b class=functitle>def KeyShiftControlKeyB()</b><br>
<em>Category: Mtg specific client functions</em><br>
<em>File: Mtg.include</em><br>
  Produce {B}.
</p>

<a name="KeyShiftControlKeyC:Mtg.include">
<p class=func>
  <b class=functitle>def KeyShiftControlKeyC()</b><br>
<em>Category: Mtg specific client functions</em><br>
<em>File: Mtg.include</em><br>
  Produce {1}.
</p>

<a name="KeyShiftControlKeyG:Mtg.include">
<p class=func>
  <b class=functitle>def KeyShiftControlKeyG()</b><br>
<em>Category: Mtg specific client functions</em><br>
<em>File: Mtg.include</em><br>
  Produce {G}.
</p>

<a name="KeyShiftControlKeyR:Mtg.include">
<p class=func>
  <b class=functitle>def KeyShiftControlKeyR()</b><br>
<em>Category: Mtg specific client functions</em><br>
<em>File: Mtg.include</em><br>
  Produce {R}.
</p>

<a name="KeyShiftControlKeyT:Mtg.include">
<p class=func>
  <b class=functitle>def KeyShiftControlKeyT()</b><br>
<em>Category: Mtg specific client functions</em><br>
<em>File: Mtg.include</em><br>
  Produce {T}.
</p>

<a name="KeyShiftControlKeyU:Mtg.include">
<p class=func>
  <b class=functitle>def KeyShiftControlKeyU()</b><br>
<em>Category: Mtg specific client functions</em><br>
<em>File: Mtg.include</em><br>
  Produce {U}.
</p>

<a name="KeyShiftControlKeyW:Mtg.include">
<p class=func>
  <b class=functitle>def KeyShiftControlKeyW()</b><br>
<em>Category: Mtg specific client functions</em><br>
<em>File: Mtg.include</em><br>
  Produce {W}.
</p>

<a name="KeyShiftControlKeyX:Mtg.include">
<p class=func>
  <b class=functitle>def KeyShiftControlKeyX()</b><br>
<em>Category: Mtg specific client functions</em><br>
<em>File: Mtg.include</em><br>
  Produce {X}.
</p>

<a name="KeyShiftControlKeyY:Mtg.include">
<p class=func>
  <b class=functitle>def KeyShiftControlKeyY()</b><br>
<em>Category: Mtg specific client functions</em><br>
<em>File: Mtg.include</em><br>
  Produce {Y}.
</p>

<a name="mana:Mtg.include">
<p class=func>
  <b class=functitle>def mana(<em>cost string</em>)</b><br>
<em>Category: Mtg specific client functions</em><br>
<em>File: Mtg.include</em><br>
  Helper function to filter<sub>m</sub>ana(). Return the converted mana cost for a single cost string.
</p>

<a name="MessageHook:Mtg.include">
<p class=func>
  <b class=functitle>def MessageHook(<em>string</em>)</b><br>
<em>Category: Mtg specific client functions</em><br>
<em>File: Mtg.include</em><br>
  Called before output when a message is received. This hook should return the modified message.
</p>

<a name="MouseLeftClickSideboard:Mtg.include">
<p class=func>
  <b class=functitle>def MouseLeftClickSideboard()</b><br>
<em>Category: Mtg specific client functions</em><br>
<em>File: Mtg.include</em><br>
  Look at sideboard.
</p>

<a name="NewDeck:Mtg.include">
<p class=func>
  <b class=functitle>def NewDeck()</b><br>
<em>Category: Mtg specific client functions</em><br>
<em>File: Mtg.include</em><br>
  Game specific creation of empty deck structure.
</p>

<a name="PlayInstant:Mtg.include">
<p class=func>
  <b class=functitle>def PlayInstant(<em>card number</em>, <em>is face down?</em>)</b><br>
<em>Category: Mtg specific client functions</em><br>
<em>File: Mtg.include</em><br>
  Play an instant card.
</p>

<a name="PlayInterrupt:Mtg.include">
<p class=func>
  <b class=functitle>def PlayInterrupt(<em>card number</em>, <em>is face down?</em>)</b><br>
<em>Category: Mtg specific client functions</em><br>
<em>File: Mtg.include</em><br>
  Play an interrupt card.
</p>

<a name="PlayKeyControlKeyI:Mtg.include">
<p class=func>
  <b class=functitle>def PlayKeyControlKeyI()</b><br>
<em>Category: Mtg specific client functions</em><br>
<em>File: Mtg.include</em><br>
  Imprint.
</p>

<a name="PlaySideboardMenu:Mtg.include">
<p class=func>
  <b class=functitle>def PlaySideboardMenu()</b><br>
<em>Category: Mtg specific client functions</em><br>
<em>File: Mtg.include</em><br>
  Generate menu for sideboard.
</p>

<a name="PlaySorcery:Mtg.include">
<p class=func>
  <b class=functitle>def PlaySorcery(<em>card number</em>, <em>is face down?</em>)</b><br>
<em>Category: Mtg specific client functions</em><br>
<em>File: Mtg.include</em><br>
  Play a sorcery card.
</p>

<a name="PutTableHook:Mtg.include">
<p class=func>
  <b class=functitle>def PutTableHook()</b><br>
<em>Category: Mtg specific client functions</em><br>
<em>File: Mtg.include</em><br>
  Clear imprint flag.
</p>

<a name="ShowGameSpecificHelp:Mtg.include">
<p class=func>
  <b class=functitle>def ShowGameSpecificHelp()</b><br>
<em>Category: Mtg specific client functions</em><br>
<em>File: Mtg.include</em><br>
  Additional help text.
</p>

<a name="SingleCardMenuHook:Mtg.include">
<p class=func>
  <b class=functitle>def SingleCardMenuHook(<em>context</em>)</b><br>
<em>Category: Mtg specific client functions</em><br>
<em>File: Mtg.include</em><br>
  added to menu for a single card.
</p>

<a name="StartGame:Mtg.include">
<p class=func>
  <b class=functitle>def StartGame()</b><br>
<em>Category: Mtg specific client functions</em><br>
<em>File: Mtg.include</em><br>
  What to do when game begins.
</p>

<a name="TokenSubmenu:Mtg.include">
<p class=func>
  <b class=functitle>def TokenSubmenu()</b><br>
<em>Category: Mtg specific client functions</em><br>
<em>File: Mtg.include</em><br>
  Create a submenu of token options.
</p>

<a name="UntapHook:Mtg.include">
<p class=func>
  <b class=functitle>def UntapHook(<em>object number</em>)</b><br>
<em>Category: Mtg specific client functions</em><br>
<em>File: Mtg.include</em><br>
  Return 1 if card shoud be untapped using Ctrl+U.
</p>

<h2>Mtg specific common client and server functions</h2>
<a name="CreateTypeLegalTable:Mtg-common.include">
<p class=func>
  <b class=functitle>def CreateTypeLegalTable(<em>type</em>)</b><br>
<em>Category: Mtg specific common client and server functions</em><br>
<em>File: Mtg-common.include</em><br>
  Fill table TYPE<sub>L</sub>EGAL, if not already filled.
</p>

<a name="RuleCountBiggestPopulation:Mtg-common.include">
<p class=func>
  <b class=functitle>def RuleCountBiggestPopulation(<em>list of card numbers</em>)</b><br>
<em>Category: Mtg specific common client and server functions</em><br>
<em>File: Mtg-common.include</em><br>
  Count the biggest number of creatures having the same type.
</p>

<a name="RuleCountColors:Mtg-common.include">
<p class=func>
  <b class=functitle>def RuleCountColors(<em>list of card numbers</em>)</b><br>
<em>Category: Mtg specific common client and server functions</em><br>
<em>File: Mtg-common.include</em><br>
  Return the list of total numbers of each color (black,blue,green,red,white).
</p>

<a name="TribalLegal:Mtg-common.include">
<p class=func>
  <b class=functitle>def TribalLegal(<em>card number</em>)</b><br>
<em>Category: Mtg specific common client and server functions</em><br>
<em>File: Mtg-common.include</em><br>
  Return 1 if card is a tribal legal creature.
</p>

<a name="TypeLegal:Mtg-common.include">
<p class=func>
  <b class=functitle>def TypeLegal(<em>rule set</em>, <em>card number</em>)</b><br>
<em>Category: Mtg specific common client and server functions</em><br>
<em>File: Mtg-common.include</em><br>
  Return 1 if a card is a legal in the type.
</p>

<a name="TypeRestricted:Mtg-common.include">
<p class=func>
  <b class=functitle>def TypeRestricted(<em>rule set</em>, <em>card number</em>)</b><br>
<em>Category: Mtg specific common client and server functions</em><br>
<em>File: Mtg-common.include</em><br>
  Return 1 if a card is limited to one in the type.
</p>

<h2>Mtg specific factory server functions</h2>
<a name="InitDistributions:Mtg-factory-server.include">
<p class=func>
  <b class=functitle>def InitDistributions()</b><br>
<em>Category: Mtg specific factory server functions</em><br>
<em>File: Mtg-factory-server.include</em><br>
  Initialize product distribution data.
</p>

<a name="ProduceBE_Booster:Mtg-factory-server.include">
<p class=func>
  <b class=functitle>def ProduceBE_Booster()</b><br>
<em>Category: Mtg specific factory server functions</em><br>
<em>File: Mtg-factory-server.include</em><br>
  Produce beta booster.
</p>

<a name="ProduceBE_Starter:Mtg-factory-server.include">
<p class=func>
  <b class=functitle>def ProduceBE_Starter()</b><br>
<em>Category: Mtg specific factory server functions</em><br>
<em>File: Mtg-factory-server.include</em><br>
  Produce beta starter.
</p>

<h2>Mtg specific game server functions</h2>
<a name="InitialScore:Mtg-server.include">
<p class=func>
  <b class=functitle>def InitialScore(<em>p</em>)</b><br>
<em>Category: Mtg specific game server functions</em><br>
<em>File: Mtg-server.include</em><br>
  Return a structure representing initial score for a player 'p'.
</p>

<a name="SetUpPlayer:Mtg-server.include">
<p class=func>
  <b class=functitle>def SetUpPlayer(<em>p</em>)</b><br>
<em>Category: Mtg specific game server functions</em><br>
<em>File: Mtg-server.include</em><br>
  Create necessary strucrures for player 'p'.
</p>

<h2>Mtg specific meta server functions</h2>
<a name="EndGameHook:Mtg-meta-server.include">
<p class=func>
  <b class=functitle>def EndGameHook(<em>player name who declared</em>, <em>result</em>, <em>result options</em>, <em>player numbers</em>, <em>player names</em>, <em>bet</em>)</b><br>
<em>Category: Mtg specific meta server functions</em><br>
<em>File: Mtg-meta-server.include</em><br>
  This hook is called at the beginning of the game result prosessing. Note: this hook is not called for undecided results.
</p>

<a name="SealedEndHook:Mtg-meta-server.include">
<p class=func>
  <b class=functitle>def SealedEndHook()</b><br>
<em>Category: Mtg specific meta server functions</em><br>
<em>File: Mtg-meta-server.include</em><br>
  This hook is called before ending sealed mode. Current user is sealed mode player.
</p>

<a name="SealedStartHook:Mtg-meta-server.include">
<p class=func>
  <b class=functitle>def SealedStartHook(<em>sealed player name</em>, <em>mode name</em>, <em>money</em>, <em>options</em>)</b><br>
<em>Category: Mtg specific meta server functions</em><br>
<em>File: Mtg-meta-server.include</em><br>
  This hook is called after initialization of sealed mode is complete. Current user is a player entering in the sealed mode. Note: This hook can be called more often than end hook.
</p>

<h2>Net library (C++)</h2>
<a name="net_client_ip:parser_libnet.cpp">
<p class=func>
  <b class=functitle>def net_client_ip(<em>c</em>)</b><br>
<em>Category: Net library (C++)</em><br>
<em>File: parser_libnet.cpp</em><br>
  Return IP of the client <em>c</em> as a string.
</p>

<a name="net_client_name:parser_libnet.cpp">
<p class=func>
  <b class=functitle>def net_client_name(<em>c</em>)</b><br>
<em>Category: Net library (C++)</em><br>
<em>File: parser_libnet.cpp</em><br>
  Return canonical hostname of the client, which uses server connetion number <em>c</em>.
</p>

<a name="net_close:parser_libnet.cpp">
<p class=func>
  <b class=functitle>def net_close(<em>n</em>)</b><br>
<em>Category: Net library (C++)</em><br>
<em>File: parser_libnet.cpp</em><br>
  Close clients's connection number <em>n</em>.
</p>

<a name="net_connect:parser_libnet.cpp">
<p class=func>
  <b class=functitle>def net_connect(<em>s</em>, <em>p</em>)</b><br>
<em>Category: Net library (C++)</em><br>
<em>File: parser_libnet.cpp</em><br>
  Connect to the port <em>p</em> of server named <em>s</em>. Return a client connection number or <tt>NULL</tt> if socket creation fails. Other network errors throws an exception.
</p>

<a name="net_create_server:parser_libnet.cpp">
<p class=func>
  <b class=functitle>def net_create_server(<em>p</em>)</b><br>
<em>Category: Net library (C++)</em><br>
<em>File: parser_libnet.cpp</em><br>
  Initialize server on TCP-port <em>p</em>. Throw <tt>Parser::LangErr</tt> if socket initialization fails.
</p>

<a name="net_get:parser_libnet.cpp">
<p class=func>
  <b class=functitle>def net_get()</b><br>
<em>Category: Net library (C++)</em><br>
<em>File: parser_libnet.cpp</em><br>
  Check if there are data available in some client connection.  Return <tt>NULL</tt>, if not. Otherwise, return a pair <em>(n,s)</em>, where n is the number of the client connection that originates data and s is the data itself. Function returns <tt>("close",n)</tt> if server closed connection <em>n</em>.
</p>

<a name="net_isopen:parser_libnet.cpp">
<p class=func>
  <b class=functitle>def net_isopen(<em>n</em>)</b><br>
<em>Category: Net library (C++)</em><br>
<em>File: parser_libnet.cpp</em><br>
  Check if connection number <em>n</em> is open.
</p>

<a name="net_send:parser_libnet.cpp">
<p class=func>
  <b class=functitle>def net_send(<em>n</em>, <em>e</em>)</b><br>
<em>Category: Net library (C++)</em><br>
<em>File: parser_libnet.cpp</em><br>
  Send the value of expression <em>e</em> as a newline terminated string using the client connection number <em>n</em>. Return 1 if successful and 0 on SIGPIPE.
</p>

<a name="net_server_close:parser_libnet.cpp">
<p class=func>
  <b class=functitle>def net_server_close(<em>n</em>)</b><br>
<em>Category: Net library (C++)</em><br>
<em>File: parser_libnet.cpp</em><br>
  Close server's connection number <em>n</em>.
</p>

<a name="net_server_get:parser_libnet.cpp">
<p class=func>
  <b class=functitle>def net_server_get(<em>t</em>)</b><br>
<em>Category: Net library (C++)</em><br>
<em>File: parser_libnet.cpp</em><br>
  Wait for network events. If a client connects to the server, return a pair {\tt("open",<em>n</em>)} where n is is a client number. Whenever a client disconnects, return a pair <tt>("close",n)</tt> respectively. Special event <tt>("quit",NULL)</tt> is returned when the server process is interrupted by the signal. If the client number n sends data, return a pair (n,s) where s is a string containing data sent. Throw an exception if network error occurs. Parameter t defines time out for listening process. If t is <tt>NULL</tt>, then the function does not return until there is an event available. If <em>t</em> is positive integer, process waits for <em>t</em>ms and returns <tt>NULL</tt> if there are no events available.
</p>

<a name="net_server_isopen:parser_libnet.cpp">
<p class=func>
  <b class=functitle>def net_server_isopen(<em>n</em>)</b><br>
<em>Category: Net library (C++)</em><br>
<em>File: parser_libnet.cpp</em><br>
  Check if server's connection number <em>n</em> is open.
</p>

<a name="net_server_send:parser_libnet.cpp">
<p class=func>
  <b class=functitle>def net_server_send(<em>n</em>, <em>s</em>)</b><br>
<em>Category: Net library (C++)</em><br>
<em>File: parser_libnet.cpp</em><br>
  Send a string <em>s</em> to the client number <em>n</em>. Return 1 if successful and 0 on SIGPIPE.
</p>

<a name="net_server_send_all:parser_libnet.cpp">
<p class=func>
  <b class=functitle>def net_server_send_all(<em>s</em>)</b><br>
<em>Category: Net library (C++)</em><br>
<em>File: parser_libnet.cpp</em><br>
  Send a string <em>s</em> to all clients.
</p>

<h2>Pokemon specific client functions</h2>
<a name="InitializeGame:Pokemon.include">
<p class=func>
  <b class=functitle>def InitializeGame()</b><br>
<em>Category: Pokemon specific client functions</em><br>
<em>File: Pokemon.include</em><br>
  Game specific initialization of game variables.
</p>

<a name="InitializeLocationTables:Pokemon.include">
<p class=func>
  <b class=functitle>def InitializeLocationTables()</b><br>
<em>Category: Pokemon specific client functions</em><br>
<em>File: Pokemon.include</em><br>
  Fill tables for location algorithm (See Mtg.include for details).
</p>

<a name="KeyControlKey0:Pokemon.include">
<p class=func>
  <b class=functitle>def KeyControlKey0()</b><br>
<em>Category: Pokemon specific client functions</em><br>
<em>File: Pokemon.include</em><br>
  Use pokemon power on a card.
</p>

<a name="KeyControlKey1:Pokemon.include">
<p class=func>
  <b class=functitle>def KeyControlKey1()</b><br>
<em>Category: Pokemon specific client functions</em><br>
<em>File: Pokemon.include</em><br>
  Use first attack on a card.
</p>

<a name="KeyControlKey2:Pokemon.include">
<p class=func>
  <b class=functitle>def KeyControlKey2()</b><br>
<em>Category: Pokemon specific client functions</em><br>
<em>File: Pokemon.include</em><br>
  Use second attack on a card.
</p>

<a name="KeyControlKey3:Pokemon.include">
<p class=func>
  <b class=functitle>def KeyControlKey3()</b><br>
<em>Category: Pokemon specific client functions</em><br>
<em>File: Pokemon.include</em><br>
  Use third attack on a card.
</p>

<a name="KeyControlKey4:Pokemon.include">
<p class=func>
  <b class=functitle>def KeyControlKey4()</b><br>
<em>Category: Pokemon specific client functions</em><br>
<em>File: Pokemon.include</em><br>
  Use 4th attack on a card.
</p>

<a name="KeyControlKey5:Pokemon.include">
<p class=func>
  <b class=functitle>def KeyControlKey5()</b><br>
<em>Category: Pokemon specific client functions</em><br>
<em>File: Pokemon.include</em><br>
  Use 5th attack on a card.
</p>

<a name="KeyShiftControlKeyC:Pokemon.include">
<p class=func>
  <b class=functitle>def KeyShiftControlKeyC()</b><br>
<em>Category: Pokemon specific client functions</em><br>
<em>File: Pokemon.include</em><br>
  Produce {c}.
</p>

<a name="KeyShiftControlKeyF:Pokemon.include">
<p class=func>
  <b class=functitle>def KeyShiftControlKeyF()</b><br>
<em>Category: Pokemon specific client functions</em><br>
<em>File: Pokemon.include</em><br>
  Produce {f}.
</p>

<a name="KeyShiftControlKeyG:Pokemon.include">
<p class=func>
  <b class=functitle>def KeyShiftControlKeyG()</b><br>
<em>Category: Pokemon specific client functions</em><br>
<em>File: Pokemon.include</em><br>
  Produce {g}.
</p>

<a name="KeyShiftControlKeyL:Pokemon.include">
<p class=func>
  <b class=functitle>def KeyShiftControlKeyL()</b><br>
<em>Category: Pokemon specific client functions</em><br>
<em>File: Pokemon.include</em><br>
  Produce {l}.
</p>

<a name="KeyShiftControlKeyP:Pokemon.include">
<p class=func>
  <b class=functitle>def KeyShiftControlKeyP()</b><br>
<em>Category: Pokemon specific client functions</em><br>
<em>File: Pokemon.include</em><br>
  Produce {p}.
</p>

<a name="KeyShiftControlKeyR:Pokemon.include">
<p class=func>
  <b class=functitle>def KeyShiftControlKeyR()</b><br>
<em>Category: Pokemon specific client functions</em><br>
<em>File: Pokemon.include</em><br>
  Produce {r}.
</p>

<a name="KeyShiftControlKeyW:Pokemon.include">
<p class=func>
  <b class=functitle>def KeyShiftControlKeyW()</b><br>
<em>Category: Pokemon specific client functions</em><br>
<em>File: Pokemon.include</em><br>
  Produce {w}.
</p>

<a name="MouseLeftClickPrizes:Pokemon.include">
<p class=func>
  <b class=functitle>def MouseLeftClickPrizes()</b><br>
<em>Category: Pokemon specific client functions</em><br>
<em>File: Pokemon.include</em><br>
  Draw a card from prizes.
</p>

<a name="MouseMiddleClickCard:Pokemon.include">
<p class=func>
  <b class=functitle>def MouseMiddleClickCard()</b><br>
<em>Category: Pokemon specific client functions</em><br>
<em>File: Pokemon.include</em><br>
  Untap and remove poison counter.
</p>

<a name="NewDeck:Pokemon.include">
<p class=func>
  <b class=functitle>def NewDeck()</b><br>
<em>Category: Pokemon specific client functions</em><br>
<em>File: Pokemon.include</em><br>
  Game specific creation of empty deck structure.
</p>

<a name="OpponentPrizesMenu:Pokemon.include">
<p class=func>
  <b class=functitle>def OpponentPrizesMenu()</b><br>
<em>Category: Pokemon specific client functions</em><br>
<em>File: Pokemon.include</em><br>
  Generate menu for opponent's prize pile.
</p>

<a name="PlayTrainer:Pokemon.include">
<p class=func>
  <b class=functitle>def PlayTrainer(<em>card number</em>, <em>is face down?</em>)</b><br>
<em>Category: Pokemon specific client functions</em><br>
<em>File: Pokemon.include</em><br>
  Play a trainer card.
</p>

<a name="PrizesMenu:Pokemon.include">
<p class=func>
  <b class=functitle>def PrizesMenu()</b><br>
<em>Category: Pokemon specific client functions</em><br>
<em>File: Pokemon.include</em><br>
  Generate menu for prize pile.
</p>

<a name="ScoreToText:Pokemon.include">
<p class=func>
  <b class=functitle>def ScoreToText(<em>score structure</em>)</b><br>
<em>Category: Pokemon specific client functions</em><br>
<em>File: Pokemon.include</em><br>
  Convert a score structure to string.
</p>

<a name="ShowGameSpecificHelp:Pokemon.include">
<p class=func>
  <b class=functitle>def ShowGameSpecificHelp()</b><br>
<em>Category: Pokemon specific client functions</em><br>
<em>File: Pokemon.include</em><br>
  Additional help text.
</p>

<a name="StartGame:Pokemon.include">
<p class=func>
  <b class=functitle>def StartGame()</b><br>
<em>Category: Pokemon specific client functions</em><br>
<em>File: Pokemon.include</em><br>
  What to do when game begins.
</p>

<h2>Pokemon specific factory server functions</h2>
<a name="InitDistributions:Pokemon-factory-server.include">
<p class=func>
  <b class=functitle>def InitDistributions()</b><br>
<em>Category: Pokemon specific factory server functions</em><br>
<em>File: Pokemon-factory-server.include</em><br>
  Initialize product distribution data.
</p>

<a name="ProduceBooster:Pokemon-factory-server.include">
<p class=func>
  <b class=functitle>def ProduceBooster(<em>set</em>)</b><br>
<em>Category: Pokemon specific factory server functions</em><br>
<em>File: Pokemon-factory-server.include</em><br>
  Return random booster.
</p>

<h2>Pokemon specific game server functions</h2>
<a name="InitialScore:Pokemon-server.include">
<p class=func>
  <b class=functitle>def InitialScore(<em>p</em>)</b><br>
<em>Category: Pokemon specific game server functions</em><br>
<em>File: Pokemon-server.include</em><br>
  Return a structure representing initial score for a player 'p'.
</p>

<a name="InitServerHook:Pokemon-server.include">
<p class=func>
  <b class=functitle>def InitServerHook(<em>nmb.of players</em>)</b><br>
<em>Category: Pokemon specific game server functions</em><br>
<em>File: Pokemon-server.include</em><br>
  Called during server initialization.
</p>

<a name="SetUpPlayer:Pokemon-server.include">
<p class=func>
  <b class=functitle>def SetUpPlayer(<em>p</em>)</b><br>
<em>Category: Pokemon specific game server functions</em><br>
<em>File: Pokemon-server.include</em><br>
  Create necessary strucrures for player 'p'.
</p>

  </body>
</html>
