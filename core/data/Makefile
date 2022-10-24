all:
	@echo "Usage: make poker-rules"


poker-rules:
	@if [ -d ../xml/Poker ]; then for f in Poker/Poker*.rules; do echo "Converting $$f"; echo "  ../perl/definition2rules.pl $$f > ../scripts/"`basename $$f`; ../perl/definition2rules.pl $$f > ../scripts/`basename $$f`; done; fi
