# Nova Info Card

This package provides an easy-and-simple way to add notification cards to a Laravel Nova Resource.

## Installation

```shell
composer require pdmfc/nova-info-card
```

## Usage

```php

use Pdmfc\InfoCard\InfoCard;

//...

public function cards()
{
    return [
        (new InfoCard())
            ->info('Some info message')
    ];
}

```

### Choosing theme

```php
->info($message)

->success($message)

->warning($message)

->danger($message)
```

```php
->message($message, $level)
// accepted values for $level => ['info', 'success' , 'warning', 'danger']
```

![Example](images/example.png)

---

### Defining a header

```php
public function cards()
{
    return [
        (new InfoCard())
            ->info('Some info message')
            ->heading('Quick info')
    ];
}
```

![Heading screenshot](images/heading_example.png)

---

## How to contribute

- clone the repo
- on `composer.json` of a laravel nova application add the following:

```
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
