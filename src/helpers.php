<?php

use Barryvdh\DomPDF\PDF;

if (!function_exists('printer'))
{
    function printer(array $options = [], $paper = 'a4', $orientation = 'portrait') : PDF
    {
        if (function_exists('app')) {
            $instance = app('dompdf.wrapper');
            if (is_array($options) && count($options) > 0)
            {
                $instance->setOptions($options);
            }
            if (empty($paper) === false && empty($orientation) === false)
            {
                $instance->setPaper($paper, $orientation);
            }
            return $instance;
        }
        throw new \Exception("Helper app() does not exist", 500);
    }
}

if (!function_exists('printer_view')) 
{
    function printer_view($view, array $data, array $options = [], $paper = 'a4', $orientation = 'portrait') : PDF
    {
        return printer($options, $paper, $orientation)->loadView($view, $data);
    }
}

if (!function_exists('printer_view_stream')) 
{
    function printer_view_stream($view, array $data, array $options = [], $paper = 'a4', $orientation = 'portrait', $filename = 'document.pdf') 
    {
        return printer_view($view, $data, $options, $paper, $orientation)->stream($filename);
    }
}

if (!function_exists('printer_view_download')) 
{
    function printer_view_download($view, array $data, array $options = [], $paper = 'a4', $orientation = 'portrait', $filename = 'document.pdf') 
    {
        return printer_view($view, $data, $options, $paper, $orientation)->download($filename);
    }
}

if (!function_exists('printer_file')) 
{
    function printer_file($path, array $options = [], $paper = 'a4', $orientation = 'portrait') : PDF 
    {
        if (file_exists($path)) {
            return printer($options, $paper, $orientation)->loadFile($path);
        }
        throw new \Exception("File not found", 500);
    }
}

if (!function_exists('printer_file_stream')) 
{
    function printer_file_stream($path, array $options = [], $paper = 'a4', $orientation = 'portrait', $filename = 'document.pdf') 
    {
       return printer_file($path, $options, $paper, $orientation)->stream($filename);
    }
}

if (!function_exists('printer_file_download')) 
{
    function printer_file_download($path, array $options = [], $paper = 'a4', $orientation = 'portrait', $filename = 'document.pdf') 
    {
       return printer_file($path, $options, $paper, $orientation)->download($filename);
    }
}

if (!function_exists('printer_html')) 
{
    function printer_html($html, array $options = [], $paper = 'a4', $orientation = 'portrait'): PDF
    {
        return printer($options, $paper, $orientation)->loadHTML($html);
    }
}

if (!function_exists('printer_html_stream')) 
{
    function printer_html_stream($html, array $options = [], $paper = 'a4', $orientation = 'portrait', $filename = 'document.pdf') 
    {
        return printer_html($html, $options, $paper, $orientation)->stream($filename);
    }
}

if (!function_exists('printer_html_download')) 
{
    function printer_html_download($html, array $options = [], $paper = 'a4', $orientation = 'portrait', $filename = 'document.pdf') 
    {
        return printer_html($html, $options, $paper, $orientation)->download($filename);
    }
}