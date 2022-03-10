<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## To-do List

Personal project made in Laravel. For UX, I used TailwindCSS.
Originally started because I wanted to get a *feel* for the framework itself, while also wanting a really simplistic way to keep track of my tasks.

- After cloning, ``php artisan serve`` will serve the app locally.

- You might want to install TailwindCSS *if any problems occur* (the second step of this guide; although I did not change any settings):
https://tailwindcss.com/docs/guides/laravel

- I used XAMPP to test my database, please check the .env provided by Laravel, to change your database settings.
I've also provided a migration file for the database schema, for use with ``php artisan migrate`` of course.

## After adding some tasks, it should look something like this:

![image](https://user-images.githubusercontent.com/80174357/157541366-23fc9e38-8e9f-41fe-b45b-8062e54dc960.png)

Usage is self explanatory; enter a task you're planning on doing, then give it a deadline. 

The deadline always starts at one week from the current date.

Upon adding a task, it will get added to the database, and then appear on the list. 

To mark a task done, simply click its green button, which will update the task in the database.

## Things planned
- Task remove button
