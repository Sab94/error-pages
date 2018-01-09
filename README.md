## Error Pages

# Installation

Run this command from the root of your project folder. This will download the package.

```php
composer require "asab/error-pages"
```


After updating composer, add the ServiceProvider to the providers array in `config/app.php`

```php
Sab94\ErrorPages\ErrorPagesServiceProvider::class
```

To publish the config settings and views in Laravel 5 use:

```php
php artisan vendor:publish
```

This will add an `error-pages.php` config file to your config folder and error pages at `views/errors` .

# Usage
This package offers an `error-pages.php` config file to your config folder.

You can change your error page background-color and contact email from there.



For more configurations please refer to the `error-pages.php` file

# Support

Support only through Github. Please don't mail about issues, make a Github issue instead.

# License

This package is licensed under MIT. You are free to use it in personal and commercial projects. The code can be forked and modified, but the original copyright author should always be included!
