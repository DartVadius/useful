Распарсить url и получить гет параметры
```php
parse_str(parse_url($url, PHP_URL_QUERY), $parameters);
print_r($parameters);
```
Или если гет параметры уже находятся в отдельной переменной, например пришли аяксом
```php
parse_str($post, $param);
print_r($param);
```
_____________________________
