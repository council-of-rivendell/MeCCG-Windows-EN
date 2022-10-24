DOCSRC=../parser.h ../parser_lib.cpp ../parser_libcards.cpp  ../parser_libnet.cpp ../server.cpp\
	../interpreter.cpp ../scripts/client.functions ../scripts/common.include \
	../scripts/factory-server.functions ../scripts/meta-server.functions \
	../scripts/server.functions \
	../scripts/Mtg.include ../scripts/Metw.include ../scripts/Pokemon.include ../scripts/Lotr.include \
	../scripts/Mtg-factory-server.include ../scripts/Metw-factory-server.include ../scripts/Pokemon-factory-server.include ../scripts/Lotr-factory-server.include \
	../scripts/Mtg-meta-server.include ../scripts/Metw-meta-server.include ../scripts/Pokemon-meta-server.include ../scripts/Lotr-meta-server.include \
	../scripts/Mtg-server.include ../scripts/Metw-server.include ../scripts/Pokemon-server.include ../scripts/Lotr-server.include \
	../scripts/Mtg-common.include ../scripts/Metw-common.include ../scripts/Pokemon-common.include ../scripts/Lotr-common.include \

all:
	@echo This Makefile needs update.

manual/ref_commands.php: ../scripts/client.functions ../perl/docify.pl
	../perl/docify.pl --skip-functions ../scripts/client.functions > manual/ref_commands.php

manual/ref_functions.php: Makefile $(DOCSRC) ../perl/docify.pl
	../perl/docify.pl --skip-commands --reference $(DOCSRC) > manual/ref_functions.php

manual/function_index.php: Makefile $(DOCSRC) ../perl/docify.pl
	../perl/docify.pl --skip-commands --index $(DOCSRC) > manual/function_index.php
