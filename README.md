# Invade

Invade is a utility library shamelessly stolen from [Livewire for Laravel](https://github.com/livewire/livewire). Using `invade()`, you can easily access all private and protected properties and methods of a class. This is nothing revolutionary or complicated, but it is *terribly* convenient. I created this as its own package for two reasons:

1. I wanted to be able to require this function as a dev dependency, since I don't love the idea of this function being available in non-dev installations
1. I wanted to use it in non-Laravel codebases

## Installation

```sh
composer require --dev johnpbloch/invade
```

## Usage

```php
# supposing there is a class like this:
class StateManager {
    private $dataYouAreDebugging = [];
    /* ... */
}

# and supposing you have an instance of StateManager and you need to see that data:
/** @var StateManager $instance */
\var_dump(\invade($instance)->dataYouAreDebugging);
```

`invade()` will also give you the ability to set non-public properties and to call non-public methods.
