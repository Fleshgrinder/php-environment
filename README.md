# PHP Environment
This library provides an object-oriented way to access the system’s surrounding environment. The provided class contains
 read-only access to the environment only and is therefore best suited for library code that do not require any writing
 of environment variables. PHP’s default functions to interact with the environment is extended with a default parameter
 to return in case the environment variable is not set and a helper method to check if an environment variable exists.

## Installation
Open a terminal, enter your project directory and execute the following command to add this package to your
 dependencies:

```bash
$ composer require fleshgrinder/environment
```

This command requires you to have Composer installed globally, as explained in the
 [installation chapter](https://getcomposer.org/doc/00-intro.md) of the Composer documentation.

## License
[![MIT License](https://upload.wikimedia.org/wikipedia/commons/thumb/c/c3/License_icon-mit.svg/48px-License_icon-mit.svg.png)](https://opensource.org/licenses/MIT)
