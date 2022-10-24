# Command for Gccg to check deck legality.
#
# Copyright (C) 2005 Neil Moore <neil@s-z.org>.  Distributed with NO WARRANTY
# under the terms of the GPL, version 2 (only).

if(msg.box != NULL) {
	Msg("Loading {gold}Islegal.command");
}

def showlegalities
{
	push(s);
	s = "";
	for(k)(keys(deck_rules)) {
		if(s != "") {
			s = s + ", ";
		}
		s = s + "{orange}" + k + "{white}";
	}
	Msg(s);
	s = pop();
}

def CommandIslegal
{
	push(legalities);
	push(legality);
	push(l);
	push(k);
	push(s);

	if(length(ARG) == 0) {
		Msg("{red}Must specify a legality.  Valid options are: ");
		showlegalities();
	} else {
		for(legality)(split(join(ARG, " "), "+")) {
			for(l)(deck_rules) {
				if(uc(l[0]) == uc(trim(legality))) {
					legality = l[0];
				}
			}

			if(has_entry(legality,deck_rules)) {
				MakeLegalityCheck(legality);
			} else {
				Msg("{red}No such legality: {gold}" + legality
				    + "{red}.  Valid options are: ");
				showlegalities();
			}
		}
	}

	s = pop();
	k = pop();
	l = pop();
	legality = pop();
	legalities = pop();
}

HELP{"any"}{"islegal"}=("rules","check a card for legality",NULL,
"Check the current deck for legality according to {yellow}<rules>{white}.  Multiple rules may be given by separating them with {cyan}+{white}.");

