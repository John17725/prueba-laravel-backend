<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel Project

- Laravel v8.83.15

You needed to install
- MySQL 
- Composer version 2.2.9
- PHP @ 7.4.29
- node @ v16.14.2

## In S.O Windows
- Recommended use laragon this app integrate php and mysql

## Installation `Linux` / `Windows`
In windows open Laragon and download this repository in directory root folder of laragon then open terminal and continue with commands

Clone this repository in your computer after download, run command
```bash 
composer install
``` 
after installing run command 
```bash
npm install
```
then install dependencies compile project with
```bash
npm run dev
```


## Configuration

### Configuration environment file
Open with your preferred code editor this project and set your username and password in db_username and db_password

### Configuration your MySQL
Only your needed create database with this name `backendchallenge` and that is all for launching project

### Creating tables in your database

To create tables in database run the next command

```bash
php artisan migrate:fresh
```
This command create tables and relationships in database

## Launch project

### Linux
Run command `php artisan serve` and open your browser and get this url `http://127.0.0.1:8000`

### Windows
Open your laragon app and clicl button `Start all` after, click menu and select option www and select name "prueba-laravel-backend" and wait load your browser

## After open your browser create an account in system then login with keys and use system