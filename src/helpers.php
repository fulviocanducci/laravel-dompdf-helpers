<?php

if (!function_exists('report'))
{
    function report($view, array $data) {
        if (function_exists('app')) {
            $instance = app('dompdf.wrapper');
        }
        return $instance->loadView($view, $data);
    }
}