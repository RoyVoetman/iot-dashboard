# IOT dashboard
[![MIT Licensed](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE)

## Introduction
A Realtime IOT dashboard build with Laravel which communicates with the [iot-base](https://github.com/RoyVoetman/iot-base) via [Pusher](https://pusher.com/).

![](https://www.royvoetman.nl/iot/dashboard.jpg)

## About this project
This application is part of my **IOT dashboard suite**. For more information about what this suite of projects entails a reference is made to [IOT dashboard suite](https://github.com/RoyVoetman/iot-base/blob/master/docs/IOT%20dashboard%20suite.md).

## Prerequisites
- PHP >= 7.1
    - [Install macOS](http://php.net/manual/en/install.macosx.php)
    - [Install windows](http://php.net/manual/en/install.windows.php)
- Composer
    - [Install composer](https://getcomposer.org/download/)
- Npm
    - [Install npm](https://www.npmjs.com/get-npm)

## Getting started

```bash
composer install
cp ./.env.example ./.env
php artisan key:generate
php artisan migrate
php artisan db:seed
npm install && npm run dev
```

## Setting up IDE helper
* Laravel IDE helper
    * [docs](https://github.com/barryvdh/laravel-ide-helper)
    * Automatic phpDoc generation for Laravel Facades
        * `php artisan ide-helper:generate`
        
## License
The MIT License (MIT). Please see [License File](LICENSE) for more information.


## Authors
* [Roy Voetman](https://www.royvoetman.nl)
