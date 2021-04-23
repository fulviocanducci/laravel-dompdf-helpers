# Laravel Dompdf Helpers

[![Version](https://img.shields.io/packagist/v/canducci/laravel-dompdf-helpers.svg?label=version)](https://packagist.org/packages/canducci/laravel-dompdf-helpers)
[![Downloads](https://img.shields.io/packagist/dt/canducci/laravel-dompdf-helpers.svg?style=flat)](https://packagist.org/packages/canducci/laravel-dompdf-helpers)
[![PHP Composer](https://github.com/canducci/laravel-dompdf-helpers/workflows/PHP%20Composer/badge.svg)](https://packagist.org/packages/canducci/laravel-dompdf-helpers)
[![License](https://img.shields.io/packagist/l/canducci/laravel-dompdf-helpers.svg)](https://packagist.org/packages/canducci/laravel-dompdf-helpers)

## Installation

```sh
composer require canducci/laravel-dompdf-helpers
```

## Use Helpers

```php
$instance = report();
$instance->loadView($view, $data);
$instance->download(); // or $instance->stream();
```