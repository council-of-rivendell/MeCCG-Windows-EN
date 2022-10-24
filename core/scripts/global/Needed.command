# Needed - see stats about missing cards from a set or deck
# and how much Gccg-money it would cost to fill it in
#
# Copyright (C) 2011 Russell Jones <questiondesk@gmail.com>;
# original script by Neil Moore <neil@s-z.org>.  Distributed 
# with NO WARRANTY under the terms of the GPL, version 2 (only).
#

if(msg.box != NULL) {
	Msg("Loading {gold}Needed.command");
}

# setcount(set code)
# Returns (number of cards unowned from set, total set size).
#
def setcount {
	push(c);
	push(nn);

	c = select("set_of(#)==ARG", book.filter{"default"});
	nn = select("(book_entry(card.book, #))[0] < 1", c);

	return(length(nn),length(c));

	nn = pop();
	c = pop();
}

# setcount4(set code)
# Returns (number of cards missing from 4x set, 4 * total set size).
#
def setcount4 {
	push(l);
	push(nn);
	push(c);

	nn = 0;

	l = select("set_of(#)==ARG", book.filter{"default"});

	for(c)(select("(book_entry(card.book, #))[0] < 4", l)) {
		nn = nn + 4 - (book_entry(card.book,c))[0];
	}

	return(nn,4*length(l));

	c = pop();
	nn = pop();
	l = pop();
}

# cashneeded4(set code)
# Returns (money to complete 4x set, number of cards missing from 4x set,
#                  number of missing cards not for sale, 4 * total set size).
#
def cashneeded4 {
	push(l);
	push(nn);
	push(nc);
	push(nfs);
	push(n);
	push(c);

	nn = 0;
	nc = 0;
	nfs = 0;

	l = select("set_of(#)==ARG", book.filter{"default"});

	for(c)(select("(book_entry(card.book, #))[0] < 4", l)) {
		n = 4 - (book_entry(card.book,c))[0];
		nn = nn + n;
		nc = nc + n * (book_entry(card.book,c))[1];
#		price 0 = not for sale
		if ((book_entry(card.book,c))[1] == 0.0) nfs = nfs + n;
	}

	return(nc, nn, nfs, 4*length(l));

	c = pop();
	n = pop();
	nfs = pop();
	nc = pop();
	nn = pop();
	l = pop();
}

# cashneeded1(set code)
# Returns (money to complete set, number of cards missing from set,
#                  number of missing cards not for sale, total set size).
#
def cashneeded1 {
	push(l);
	push(nn);
	push(nc);
	push(nfs);
	push(c);

	nn = 0;
	nc = 0;
	nfs = 0;

	l = select("set_of(#)==ARG", book.filter{"default"});

	for(c)(select("(book_entry(card.book, #))[0] < 1", l)) {
		nn = nn + 1;
		nc = nc + (book_entry(card.book,c))[1];
#		price 0 = not for sale
		if ((book_entry(card.book,c))[1] == 0.0) nfs = nfs + 1;
	}

	return(nc, nn, nfs, length(l));

	c = pop();
	nfs = pop();
	nc = pop();
	nn = pop();
	l = pop();	
}

# deckcount()
# Returns (number of cards missing from deck, total deck size).
# Requires support for $cards_missing$ (and for the C++ $listbox_set_deck$ to return a value).
#
def deckcount {
	return(sum(flatten(values(cards_missing))), length(flatten(values(decks{deck.name}))));
}

# deckcash()
# Returns (money needed to complete deck, number of cards missing from deck,
#                  number of missing cards not for sale, total deck size,
#                  maximum single-card shortfall).
# Requires support for $cards_missing$ (and for the C++ $listbox_set_deck$ to return a value).
#
def deckcash {
	push(nn);
	push(nc);
	push(nfs);
	push(c);
	push(p);

	nn = 0;
	nc = 0;
	nfs = 0;
	
	for(c)(cards_missing)
	{
	  nn = nn + c[1];
	  p = (book_entry(card.book,(images(c[0]))[0]))[1];
	  nc = nc + c[1] * p;
#	  price 0 = not for sale
	  if (p == 0.0) nfs = nfs + c[1];
	}
	
	return(nc, nn, nfs, length(flatten(values(decks{deck.name}))), max(flatten(values(cards_missing))));
	
	p = pop();
	c = pop();
	nfs = pop();
	nc = pop();
	nn = pop();
}

def CommandNeeded {
	push(set);
	push(counts);
	push(str);
	push(sets);
	push(skip);

	str = "";

	if(length(ARG) == 0) {
		sets = sets();
		skip = 1;
	} else {
		sets = ARG;
		skip = 0;
	}

	for(set)(sets) {
		counts = setcount(uc(set));
		if(counts[1] == 0 || (counts[0] == 0 && skip)) {
		} else {
			str = str + "{yellow}" + uc(set) + "{white}: " 
			    + (counts[0]) + "/{cyan}" + counts[1]
			    + " {gold}(" + (counts[0]*100)/counts[1] + "%)  ";
		}
	}

	Msg(str);

	skip=pop();
	sets=pop();
	str=pop();
	counts=pop();
	set=pop();
}

def CommandNeedcash {
	push(set);
	push(counts);
	push(end);
	push(str);
	push(sets);
	push(skip);
	push(cashtot);

	str = "";

	if(length(ARG) == 0) {
		sets = sets();
		skip = 1;
	} else {
		sets = ARG;
		skip = 0;
	}
	cashtot = 0.0;

	for(set)(sets) {
		counts = cashneeded1(uc(set));
		
		end = ")  ";
		if (counts[2]) end = ", plus " + counts[2] + " not for sale)  ";
		if (counts[3] == 0 || (counts[1]==0 && skip)) {
		} else {
			str = str + "{yellow}" + uc(set) + "{white}: " 
			    + counts[1] + "/{cyan}" + counts[3]
			    + " {gold}($" + format("%.2f", counts[0]) + end;
		}
		cashtot = cashtot + counts[0];
	}

	Msg(str);
	if(length(sets)>1)
		Msg("{cyan}Total cash required: {gold}$" + format("%.2f", cashtot));

	cashtot=pop();
	skip=pop();
	sets=pop();
	str=pop();
	end=pop();
	counts=pop();
	set=pop();
}

def CommandNeedcash4 {
	push(set);
	push(counts);
	push(end);
	push(str);
	push(sets);
	push(skip);
	push(cashtot);

	str = "";

	if(length(ARG) == 0) {
		sets = sets();
		skip = 1;
	} else {
		sets = ARG;
		skip = 0;
	}
	cashtot = 0.0;

	for(set)(sets) {
		counts = cashneeded4(uc(set));
		
		end = ")  ";
		if (counts[2]) end = ", plus at least " + counts[2] + " not for sale)  ";
		
		if(counts[3] == 0 || (counts[1]==0 && skip)) {
		} else {
			str = str + "{yellow}" + uc(set) + "{white}: {white}" 
			    + counts[1] + "/{cyan}" + counts[3]
			    + " {gold}($" + format("%.2f", counts[0]) + end;
		}
		cashtot = cashtot + counts[0];
	}

	Msg(str);
	Msg("{cyan}Total cash required: {gold}$" + format("%.2f", cashtot));

	cashtot=pop();
	skip=pop();
	sets=pop();
	str=pop();
	end=pop();
	counts=pop();
	set=pop();
}

def CommandNeeded4 {
	push(set);
	push(counts);
	push(str);
	push(sets);
	push(skip);

	str = "";

	if(length(ARG) == 0) {
		sets = sets();
		skip = 1;
	} else {
		sets = ARG;
		skip = 0;
	}

	for(set)(sets) {
		counts = setcount4(uc(set));
		if(counts[1] == 0 || (counts[0]==0 && skip)) {
		} else {
			str = str + "{yellow}" + uc(set) + "{white}: {white}" 
			    + counts[0] + "/{cyan}" + counts[1]
			    + " {gold}(" + (counts[0]*100)/counts[1] + "%)  ";
		}
	}

	Msg(str);

	skip=pop();
	sets=pop();
	str=pop();
	counts=pop();
	set=pop();
}

def CommandNeeddeck {
	if(cards_missing == NULL)
	  Msg("{red}This client version cannot read the missing cards in the deck.");
	else if(deck.name == NULL)
	  Msg("{red}No deck selected.");
	else
	{
	  push(counts);
	  
	  counts = deckcount();
	  Msg("{yellow}Deck '" + deck.name + "': {white}" + counts[0] + "/{cyan}" + counts[1]
	    + " {gold}(" + (counts[0]*100)/counts[1] + "%)");
	  
	  counts = pop();
	}
}

def CommandDeckcash {
	if(cards_missing == NULL)
	  Msg("{red}This client version cannot read the missing cards in the deck.");
	else if(deck.name == NULL)
	  Msg("{red}No deck selected.");
	else
	{
	  push(counts);
	  push(str);
	  
	  counts = deckcash();
	  str = ")";
	  if(counts[2] && counts[4] > 1)
	    str = ", plus at least " + counts[2] + " not for sale)";
	  else if(counts[2])
	    str = ", plus " + counts[2] + " not for sale)";
	    
	  Msg("{yellow}Deck '" + deck.name + "': {white}" + counts[1] + "/{cyan}" + counts[3]
	    + " {gold}($" + format("%.2f", counts[0]) + str);
	  
	  str = pop();
	  counts = pop();
	}
}

HELP{"chat"}{"needed"}=("[set1],[set2],...","count cards needed for set",NULL,
"For each listed set, list the number of unowned cards in that set.  If no sets are specified, all sets are listed, but sets with no unowned cards are omitted.");
HELP{"chat"}{"needed4"}=("[set1],[set2],...","count cards needed for 4x set",NULL,
"For each listed set, list the number of cards needed to own 4 copies of every card in that set.  If no sets are specified, all sets are listed, but sets you already own 4 of are omitted.");
HELP{"chat"}{"needcash"}=("[set1],[set2],...","count cards and money needed for set",NULL,
"For each listed set, list the number of unowned cards in that set, the amount of money it would take to buy those cards, and the number of missing cards that aren't offered for sale.  If no sets are specified, all sets are listed, but sets with no unowned cards are omitted.");
HELP{"chat"}{"needcash4"}=("[set1],[set2],...","count cards and money needed for 4x set",NULL,
"For each listed set, list the number of cards needed to own 4 copies of every card in the set, the amount of money it would take to buy those cards at current prices, and the number of missing cards that aren't offered for sale.  If no sets are specified, all sets are listed, but sets you already own 4 of are omitted.");
HELP{"chat"}{"needdeck"}=("","count cards needed for current deck",NULL,
"Count the number of unowned cards in the current deck, before you can make it proxy-free.");
HELP{"chat"}{"deckcash"}=("","count cards and money needed for current deck",NULL,
"Count the number of unowned cards in the current deck, the amount of money it would take to buy those cards at current prices, and the number of missing cards that aren't offered for sale.");
