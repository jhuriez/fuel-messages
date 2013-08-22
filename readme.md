# FuelPHP Messages Package

This Messages package work like a flash message containers, and it's copied from fuel-depot ( https://github.com/fuel/depot/blob/1.0/develop/fuel/app/classes/messages.php ) for package it.

## Installation

1. Clone or download this repository
2. Move it in fuel/packages/
3. Add 'messages' to the 'always_load/packages' array in app/config/config.php (or call \Package::load('messages'); whenever you want to use it).


## Usage

In your controller for example :

```php
// Add success message
\Messages::success('Registration done!');

// Add warning message
\Messages::warning('You must specify your name!');

// Add error message
\Messages::error('An error has occured!');

// Add info message
\Messages::info('Hello!');
```

In your view :

```php
<?php if (\Messages::any()): ?>
    <br/>
    <?php foreach (array('success', 'info', 'warning', 'error') as $type): ?>

        <?php foreach (\Messages::instance()->get($type) as $message): ?>
            <div class="alert alert-<?= $message['type']; ?>"><?= $message['body']; ?></div>\n
        <?php endforeach; ?>

    <?php endforeach; ?>
    \Messages::reset();
<?php endif; ?>
```

# Twig

This package contains a Twig extension, if you want to install it, read the readme.
