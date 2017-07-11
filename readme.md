# Codestyle

Rules for the codestyle can be found in ruleset.xml

## Using PHPCS for codestyle checking
```
./vendor/bin/phpcs --standard=ruleset.xml -p app
```
or
```
./phpcs.sh
```

## Using PHPCBF for codestyle fixing
```
./vendor/bin/phpcbf --standard=ruleset.xml -p app
```
or
```
./phpcbf.sh
```
