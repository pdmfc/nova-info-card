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

```php
->message($message, $level)
// accepted values for $level => ['info', 'success' , 'warning', 'danger']
```

![Example](images/example.png)
