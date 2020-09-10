Laravel-GAMP Package
=====================
[![Join PHP Chat][ico-phpchat]][link-phpchat]
[![Chat on Telegram][ico-telegram]][link-telegram]
[![Laravel & Lumen Package][ico-package]][link-repo]
[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]][link-license]
[![SensioLabsInsight][ico-sensiolabs]][link-sensiolabs]
[![Total Downloads][ico-downloads]][link-downloads]

> Laravel GAMP: Google Analytics Measurement Protocol Package for Laravel & Lumen.
>
> Send data to Google Analytics from Laravel/Lumen. Supports all GA Measurement Protocol API methods.

[![Laravel GAMP][cover-img]][link-author]


## Quick start

### Install

#### Step 1: Install Through Composer

```bash
$ composer require irazasyed/laravel-gamp
```

#### (Lumen) Add the Service Provider

Open `bootstrap/app.php` and register the service provider by adding:

```php
$app->register(Irazasyed\LaravelGAMP\LaravelGAMPServiceProvider::class);
```

#### Step 2: Publish Config

Open your terminal window and fire the following command to publish config file to your config directory:

``` bash
$ php artisan vendor:publish --provider="Irazasyed\LaravelGAMP\LaravelGAMPServiceProvider"
```

## Usage

Open config file `config/gamp.php` and set the `tracking_id` with your Google Analytics tracking / web property ID.
Refer the config file for other default configuration settings.

This Package adds Laravel Support to [GA Measurement Protocol][link-lib] PHP Library by THE ICONIC.
It's simply a wrapper around the library with default config for easier usage with Laravel.
So all the methods listed [here][link-docs] are available and will work seamlessly.

### Example Usage

Send a Page view hit:

``` php
use Irazasyed\LaravelGAMP\Facades\GAMP;

$gamp = GAMP::setClientId( '123456' );
$gamp->setDocumentPath( '/page' );
$gamp->sendPageview();
```

Send an Event:

``` php
use Irazasyed\LaravelGAMP\Facades\GAMP;

$gamp = GAMP::setClientId( '123456' );
$gamp->setEventCategory('Blog Post')
->setEventAction('Create')
->setEventLabel('Using GAMP In Laravel')
->sendEvent();
```

### Config Overview

Open the config file for detailed comments for each option.

Set your Google Analytics Tracking / Web Property ID in `tracking_id` key **[REQUIRED]**

``` php
'tracking_id' => 'UA-XXXX-Y',
```

All other configuration options are optional, use as per your requirements.

To send data over SSL, set `is_ssl` to true.

``` php
'is_ssl' => true,
```

To disable library in Staging/Dev env (Prevents the library from sending any hits to GA), set `is_disabled` to true.

``` php
'is_disabled' => true,
```

To Anonymize IP, set `anonymize_ip` to true.

``` php
'anonymize_ip' => true,
```

To Make Async Requests, set `async_requests` to true.

``` php
'async_requests'  => true,
```

...

Refer the library's [documentation][link-docs] for other remaining methods and examples, they all work.

> **Note:** You don't have to use the protocol version, tracking id, anonymize ip and async request (non-blocking) methods from the original library as they're automatically set in Service Provider when the package is initialized based on the config file. As long as you update the config file with correct settings, it should work just fine.

## Additional information

Any issues, please [report here][link-issues]

## Credits

- [Syed Irfaq R.][link-author] - For Laravel and Lumen Bridge.
- [THE ICONIC][link-lib] - For GA Measurement Protocol PHP Library.
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File][link-license] for more information.

[cover-img]: https://cloud.githubusercontent.com/assets/1915268/8476296/b49f74ac-20dd-11e5-8698-aa23b2f7e6fd.png
[ico-phpchat]: https://img.shields.io/badge/Slack-PHP%20Chat-5c6aaa.svg?style=flat-square&logo=slack&labelColor=4A154B
[ico-telegram]: https://img.shields.io/badge/@PHPChatCo-2CA5E0.svg?style=flat-square&logo=telegram&label=Telegram
[ico-version]: https://img.shields.io/packagist/v/irazasyed/laravel-gamp.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/irazasyed/laravel-gamp.svg?style=flat-square
[ico-sensiolabs]: https://insight.sensiolabs.com/projects/880d79a9-7bab-4872-ab98-76b2e53429e9/mini.png
[ico-package]: https://img.shields.io/badge/Laravel-5~8-FF2D20.svg?style=flat-square&logo=laravel&labelColor=black&logoColor=white

[link-phpchat]: https://phpchat.co/?ref=laravel-gamp
[link-telegram]: https://t.me/PHPChatCo
[link-author]: https://github.com/irazasyed
[link-repo]: https://github.com/irazasyed/laravel-gamp
[link-license]: LICENSE.md
[link-issues]: ../../issues
[link-contributors]: ../../contributors
[link-lib]: https://github.com/theiconic/php-ga-measurement-protocol
[link-docs]: https://github.com/theiconic/php-ga-measurement-protocol#usage
[link-packagist]: https://packagist.org/packages/irazasyed/laravel-gamp
[link-downloads]: https://packagist.org/packages/irazasyed/laravel-gamp/stats
[link-sensiolabs]: https://insight.sensiolabs.com/projects/880d79a9-7bab-4872-ab98-76b2e53429e9


[![FOSSA Status](https://app.fossa.io/api/projects/git%2Bgithub.com%2Firazasyed%2Flaravel-gamp.svg?type=large)](https://app.fossa.io/projects/git%2Bgithub.com%2Firazasyed%2Flaravel-gamp?ref=badge_large)
