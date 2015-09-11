# Randomizr

String randomizer

## API

```php
$rand = new Randomizr;
```

Use `number()` to get random string containing only 0 to 9:
```php
$result = $rand->number(10);
```

Use `alphabet()` to get random string containing only a to z (both uppercase and lowercase):
```php
$result = $rand->alphabet(10);
```

Use `alphanumeric()` to get random string containing only a to z (both uppercase and lowercase) and 0 to 9:
```php
$result = $rand->alphanumeric(10);
```

Use `hexadecimal()` to get random string containing only hexadecimal number (0 to f):
```php
$result = $rand->hexadecimal(10);
```

Use `rand()` to random a string with arbitary character set and length:
```php
$result = $rand->rand("abc", 10);  // this will return a string containing either a or b or c with length of 10
```
