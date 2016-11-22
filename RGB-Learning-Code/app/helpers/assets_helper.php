<?php

/**
 * Helper-file to help navigating to assets
 *
 * @author Florian Dahlitz
 *
 */

if (! function_exists('asset_url')) {

    function asset_url()
    {
        return base_url('assets', null, false) . '/';
    }
}

/**
 * CSS-navigation
 *
 */

if (! function_exists('css_url')) {

    function css_url()
    {
        return asset_url() . 'css/';
    }
}


if (! function_exists('css_file')) {

    function css_file($filename)
    {
        return css_url() . $filename . '.css';
    }
}

/**
 * JS-navigation
 *
 */

if (! function_exists('js_url')) {

    function js_url()
    {
        return asset_url() . 'js/';
    }
}


if (! function_exists('js_file')) {

    function js_file($filename)
    {
        return js_url() . $filename . '.js';
    }
}

/**
 * PICS-navigation
 *
 */

if (! function_exists('pics_url')) {

    function pics_url($filename = null)
    {
        if ($filename != null)
            return asset_url() . 'pics/' . $filename;
        else
            return asset_url() . 'pics/';
    }
}

if (! function_exists('pic_jpg')) {

    function pic_jpg($filename)
    {
        return pics_url() . $filename . '.jpg';
    }
}

if (! function_exists('pic_JPEG')) {

    function pic_JPEG($filename)
    {
        return pics_url() . $filename . '.JPG';
    }
}

if (! function_exists('pic_png')) {

    function pic_png($filename)
    {
        return pics_url() . $filename . '.png';
    }
}
