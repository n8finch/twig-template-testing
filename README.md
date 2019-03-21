# [WIP] Templating in PHP 👨‍💻

An example to go along with a guest lecture at Madison Area Technical College's Advanced PHP class.

Comparing standard PHP templating practices to Twig.

## Setup 🤓

1. Make sure composer is installed globally or for this project.
2. Run `composer install` to install dependencies.
3. In terminal run `php -S localhost:8080` to create a local PHP server (or whatever port you like).
4. The [home](http://localhost:8080) page will give you the twig version and [this](http://localhost:8080/templates) will give you the vanilla PHP version (which currently simulates a scripting "attack" 🙀😱).

## The Point of This Execise

>To show folks some of the differences and baked-in goodies one gets when using something like twig for templating.

This is using the standard "todo app" concept as a starting point.

## Maybe some Resources 🤷‍:

- [PHP.net](http://php.net/manual/en/function.echo.php)
- [Twig](https://twig.symfony.com/)
- [Twig for Template Designers](https://twig.symfony.com/doc/2.x/templates.html)
- [Smashing Mag Article](https://www.smashingmagazine.com/2011/10/getting-started-with-php-templating/)

## Additions for the [WIP]

- Add in a couple other templating options (e.g. blade, handlebars, etc.) to explore the similarities and differences.
- Hook templates up to an API, database, or todo app to show how to work with an API or database.