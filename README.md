<h1 align="center">
  <a href="https://laravel.com/"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="200"></a>
  <br>
  Innotive
  <br>
</h1>

<h3 align="center">Innotive app. Built using <a href="https://laravel.com" target="_blank">Laravel</a>.</h3><br/>

<p align="center">
<img src="https://img.shields.io/badge/laravel-v8.0+-red.svg" alt="Laravel">
<img src="https://img.shields.io/badge/mysql-v8.0.23-blue.svg" alt="Mysql">
<img src="https://img.shields.io/badge/tailwindcss-v2.0.3-lightblue.svg" alt="Tailwind">
</p>

<h3>
<p align="center">
  <a href="#about">About</a> •
  <a href="#Installation">Installation</a> •
  <a href="#how-to-use">How To Use</a> •
</p>
</h3>

## Kelompok
<h1>Ahitsa Dawang R (V3922002) <br>
Amaliya Razyan Nur H (V3922005) <br>
Fauzi Ihsan Ansori (V3922021) <br>
Laila Ainur Rahma (V3922026)
</h1>
## Installation

```bash
# Clone this repository
$ git clone https://github.com/laainra/Innotive-Project

# Go into the repository
$ cd Innotive-Project

# Install dependencies
$ composer install

# Copy .env.example to .env or rename it to .env
$ cp .env.example .env

# Generate application key
$ php artisan key:generate

```

## How To Use

To use/run, you need to configure mysql database and add database details to the .env file.
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=innotive
DB_USERNAME=<your database username>
DB_PASSWORD=<your database password>
```
Import database
innotive.sql to your database : https://github.com/laainra/Innotive-Project/blob/main/innotive.sql

Once this is complete you can start the app by-
```bash


# Install npm dependencies
$ npm install
$ npm run dev

# Run the app
$ php artisan serve
```

The application should start on [localhost:8000](http://127.0.0.1:8000/)

To upload image, configure storage link in `filesystem.php` and run-
```bash
$ php artisan storage:link
```


