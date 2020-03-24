# A simple Nova info card

## Installation
```shell
composer require pdmfc/nova-info-card
```

## Usage
```php

use Pdmfc\InfoCard;

//...

public function cards()
{
    return [
        (new InfoCard())
            ->info('Some info message')
    ];
}

```

## Available methods
```php
->info($message)
```


```php
->success($message)
```


```php
->warning($message)
```


```php
->danger($message)
```

![Example](https://github.com/pdmfc/nova-info-card/images/example.png)
