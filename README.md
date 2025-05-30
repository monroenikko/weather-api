<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About the App

This application is built with Laravel framework and integrated from the 3rd party application to get the real-time weather and location of the user.

-   I ran this command ./vendor/bin/pint --preset psr12 to make sure that I follow the coding standard and best practices.
-   I applied the SOLID principle for this simple app.

### Third party application

-   **[Open Weather](https://openweathermap.org/)**
-   **[Geoapify](https://www.geoapify.com/)**

### Prerequisites

-   PHP >= 8.2
-   Composer

## Setup

-   **Copy the .env.example using this command**

    ```bash
    cp .env.example .env

    ```

-   **Install Dependencies**

    ```bash
    composer install

    ```

-   **Generate a key using this command**

    ```bash
    php artisan key:generate

    ```

-   **Run the application**

    ```bash
    php artisan serve

    ```

-   The API keys that I used that we need to paste into env is to follow from the email.
