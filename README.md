# Laravel Content Parser

## Install

```shell
composer require laravel-content-parser
```

## Usage

```php
use AwStudio\ContentParser\Content;

class Site extends Model
{
    protected $casts = [
        'content' => Content::class,
    ];
}
```

## Using Relationships

Setup the related query:

```php
class Site extends Model
{
    // ...

    public function authorQuery()
    {
        return User::query();
    }
}
```

One relation:

```json
[
    {
        "type": "author",
        "value": "relation://author@1"
    }
]
```

Many relation:

```json
[
    {
        "type": "author",
        "value": "relation://author@1,2"
    }
]
```
