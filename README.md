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

-   **Clone the repository**

    ```bash
    git clone https://github.com/monroenikko/weather-api.git
    cd weather-api

    ```

-   **Copy the .env.example using this command**

    ```bash
    cp .env.example .env

    ```

-   **Copy the key and URL of the OPENWEATHERMAP and GEOAPIFY to your .env**

    ```bash
    OPEN_WEATHER_API_KEY='fa2e56ce722ba85790a248c8b0cc07a4'
    OPEN_WEATHER_API_URL='https://api.openweathermap.org/data/2.5/weather/'

    GEO_API_KEY='4ecdff0df87d4eaab894ef92efd7f41a'
    GEO_API_URL='https://api.geoapify.com/v1/geocode/search/'
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
