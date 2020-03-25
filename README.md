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

---

## How to contribute

- clone the repo
- on `composer.json` of a laravel nova application add the following:

```json
{
    //...

    "require" {
        "pdmfc/nova-info-card: "*"
    },

    //...
    "repositories": [
        {
            "type": "path",
            "url": "../path_to_your_package_folder"
        }
    ],
}
```

- run `composer update pdmfc/nova-info-card`

You're now ready to start contributing!
