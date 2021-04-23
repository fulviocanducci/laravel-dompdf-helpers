# Laravel Dompdf Helpers

[![Version](https://img.shields.io/packagist/v/canducci/laravel-dompdf-helpers.svg?label=version)](https://packagist.org/packages/canducci/laravel-dompdf-helpers)
[![Downloads](https://img.shields.io/packagist/dt/canducci/laravel-dompdf-helpers.svg?style=flat)](https://packagist.org/packages/canducci/laravel-dompdf-helpers)
[![PHP Composer](https://github.com/fulviocanducci/laravel-dompdf-helpers/actions/workflows/php.yml/badge.svg)](https://github.com/fulviocanducci/laravel-dompdf-helpers/actions/workflows/php.yml)
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

## Report View Laravel blade

### Example 1

```php
$instance = report_view($view, $data);
$instance->stream(); // or $instance->download();
```

### Example 2

```php
return report_view_stream($view, $data); // or report_view_download($view, $data);
```

## Report File

### Example 1

```php
$instance = report_file($path);
$instance->stream(); // or $instance->download();
```

### Example 2

```php
return report_file_stream($path); // or report_file_download($path);
```

## Report HTML

### Example 1

```php
$instance = report_html($path);
$instance->stream(); // or $instance->download();
```

### Example 2

```php
return report_html_stream($path); // or report_html_download($path);
```