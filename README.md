# IOT dashboard
[![MIT Licensed](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE)

## Introduction
A Realtime IOT dashboard build with Laravel which communicates with the [iot-base](https://github.com/RoyVoetman/iot-base) via [Pusher](https://pusher.com/).

## About this project
This application is part of my **IOT dashboard suite**. For more information about what this suite of projects entails a reference is made to the [IOT dashboard suite](https://github.com/RoyVoetman/iot-base/blob/master/IOT%20dashboard%20suite.md) file.

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
php -r "file_exists('.env') || copy('.env.example', '.env');"
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

## Authors
* [Roy Voetman](https://www.royvoetman.nl)
