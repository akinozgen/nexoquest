<?php

if (!function_exists('str_slug'))
{
    function str_slug($title, $separator = '-')
    {
        $title = strtolower($title);
        $title = preg_replace('/[^a-z0-9]/', $separator, $title);
        $title = preg_replace('/' . $separator . '{2,}/', $separator, $title);
        $title = trim($title, $separator);

        return $title;
    }
}
