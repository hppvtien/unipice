<?php
if (!function_exists('pare_url_file')) {
    
    function pare_url_file($image, $folder = 'storage/uploads')
    {
        if (!$image) {
            return '/images/default.jpg';
        }
        $explode = explode('__', $image);

        if (isset($explode[0])) {
            $time = str_replace('_', '/', $explode[0]);
            return '/' . $folder . '/' . $image;
        }
    }
}
if (!function_exists('pare_url_file_product')) {
    function pare_url_file_product($image, $folder = 'storage/uploads_Product')
    {
        if (!$image) {
            return '/images/default.jpg';
        }
        $explode = explode('__', $image);

        if (isset($explode[0])) {
            $time = str_replace('_', '/', $explode[0]);
            return '/' . $folder . '/' . $image;
        }
    }
}
if (!function_exists('pare_url_file_video')) {
    function pare_url_file_video($image, $folder = 'storage/uploads_video')
    {
        if (!$image) {
            return '/images/default.jpg';
        }
        $explode = explode('__', $image);

        if (isset($explode[0])) {
            $time = str_replace('_', '/', $explode[0]);
            return '/' . $folder . '/' . $image;
        }
    }
}