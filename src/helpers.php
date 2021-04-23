<?php

use Barryvdh\DomPDF\PDF;

if (!function_exists('report'))
{
    function report(array $options = [], $paper = 'a4', $orientation = 'portrait') : PDF
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

if (!function_exists('report_view')) 
{
    function report_view($view, array $data, array $options = [], $paper = 'a4', $orientation = 'portrait') : PDF
    {
        return report($options, $paper, $orientation)->loadView($view, $data);
    }
}

if (!function_exists('report_view_stream')) 
{
    function report_view_stream($view, array $data, array $options = [], $paper = 'a4', $orientation = 'portrait', $filename = 'document.pdf') 
    {
        return report_view($view, $data, $options, $paper, $orientation)->stream($filename);
    }
}

if (!function_exists('report_view_download')) 
{
    function report_view_download($view, array $data, array $options = [], $paper = 'a4', $orientation = 'portrait', $filename = 'document.pdf') 
    {
        return report_view($view, $data, $options, $paper, $orientation)->download($filename);
    }
}

if (!function_exists('report_file')) 
{
    function report_file($path, array $options = [], $paper = 'a4', $orientation = 'portrait') : PDF 
    {
        if (file_exists($path)) {
            return report($options, $paper, $orientation)->loadFile($path);
        }
        throw new \Exception("File not found", 500);
    }
}

if (!function_exists('report_file_stream')) 
{
    function report_file_stream($path, array $options = [], $paper = 'a4', $orientation = 'portrait', $filename = 'document.pdf') 
    {
       return report_file($path, $options, $paper, $orientation)->stream($filename);
    }
}

if (!function_exists('report_file_download')) 
{
    function report_file_download($path, array $options = [], $paper = 'a4', $orientation = 'portrait', $filename = 'document.pdf') 
    {
       return report_file($path, $options, $paper, $orientation)->download($filename);
    }
}

if (!function_exists('report_html')) 
{
    function report_html($html, array $options = [], $paper = 'a4', $orientation = 'portrait'): PDF
    {
        return report($options, $paper, $orientation)->loadHTML($html);
    }
}

if (!function_exists('report_html_stream')) 
{
    function report_html_stream($html, array $options = [], $paper = 'a4', $orientation = 'portrait', $filename = 'document.pdf') 
    {
        return report_html($html, $options, $paper, $orientation)->stream($filename);
    }
}

if (!function_exists('report_html_download')) 
{
    function report_html_download($html, array $options = [], $paper = 'a4', $orientation = 'portrait', $filename = 'document.pdf') 
    {
        return report_html($html, $options, $paper, $orientation)->download($filename);
    }
}