Flash Notifications
===================

Laravel 5 flash notifications, originally developed after the Laracasts video tutorial : [Elegant Flash Messaging](https://laracasts.com/series/build-project-flyer-with-me/episodes/9) which uses [SweetAlert](http://t4t5.github.io/sweetalert/).

Quick Installation
------------------
Run the following command to install the package through Composer.
```
composer require srmklive/flash-notifications
```

or in your composer.json file, add `"srmklive/flash-notifications": ">=0.1"` then run
```
composer update
```

Once this operation is complete, simply add both the service provider and facade classes to your project's `config/app.php` file:

#### Service Provider
```php
'Srmklive\FlashAlert\FlashAlertServiceProvider',  // Laravel 5.0
Srmklive\FlashAlert\FlashAlertServiceProvider::class, // Laravel 5.1 or greater
```

#### Facade
```php
'FlashAlert' => 'Srmklive\FlashAlert\Facades\FlashAlert', // Laravel 5.0
'FlashAlert' => Srmklive\FlashAlert\Facades\FlashAlert::class,  // Laravel 5.1 or greater
```

#### Publish Configuration & Views
```
php artisan vendor:publish
```

Usage
-----
Simply call on `FlashAlert` to set your desired flash notification. There are a number of methods to assign different levels of priority (info, success, warning, and error).

#### Success

```php
FlashAlert::success('Success', 'This is a success message.');
```

#### Info

```php
FlashAlert::info('Info', 'This is an info message.');
```

#### Warning

```php
FlashAlert::warning('Warning', 'This is a warning message.');
```

#### Error

```php
FlashAlert::error('Error', 'This is an error message.');
```

### Rendering
To render your flash notifications in your view, simply include the view partial in your master layout. Also add **@yield('styles')** & **yield('scripts')** in your master layout:

```php
@include('flashalert::alert')
```
