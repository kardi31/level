.PHONY: all
default: all;

analysis:
	vendor/bin/phpstan analyse -c phpstan.neon -l 7 \
	    src/Level/

standards:
	vendor/bin/phpcs --colors --standard=cs-ruleset.xml src/Level/

unit:
	vendor/bin/phpunit --no-coverage src/

all: analysis standards unit
