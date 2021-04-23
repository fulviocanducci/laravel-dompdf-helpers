<?php

if (!function_exists('report'))
{
    function report(array $options = []) 
    {
        if (function_exists('app')) {
            $instance = app('dompdf.wrapper');
            if (is_array($options) && count($options) > 0)
            {
                $instance->setOptions($options);
            }
            return $instance;
        }
        throw new \Exception("Helper app() does not exist", 500);
    }
    
    function report_view($view, array $data, array $options = []) 
    {
        return report($options)->loadView($view, $data);
    }

    function report_view_stream($view, array $data, array $options = [], $filename = 'document.pdf') 
    {
        return report_view($view, $data, $options)->stream($filename);
    }

    function report_view_download($view, array $data, array $options = [], $filename = 'document.pdf') 
    {
        return report_view($view, $data, $options)->download($filename);
    }

    function report_file($path, array $options = []) 
    {
        if (file_exists($path)) {
            return report($options)->loadFile($path);
        }
        throw new \Exception("Path inválid", 500);
    }

    function report_file_stream($path, array $options = [], $filename = 'document.pdf') 
    {
       return report_file($path, $options)->stream($filename);
    }

    function report_file_download($path, array $options = [], $filename = 'document.pdf') 
    {
       return report_file($path, $options)->download($filename);
    }

    function report_html($html, array $options = []) 
    {
        return report($options)->loadHTML($html);
    }

    function report_html_stream($html, array $options = [], $filename = 'document.pdf') 
    {
        return report_html($html, $options)->stream($filename);
    }

    function report_html_download($html, array $options = [], $filename = 'document.pdf') 
    {
        return report_html($html, $options)->stream($filename);
    }
}