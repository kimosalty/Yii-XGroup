<?php


namespace app\commands;


class Utils
{
    public static function fix_url($url, $def = false, $prefix = false)
    {
        $url = trim($url);
        if (empty($url)) {
            return $def;
        }

        if (count(explode('://', $url)) > 1) {
            return $url;
        } else {
            return $prefix === false ? 'http://' . $url : $prefix . $url;
        }
    }

    public static function fix_str_length($str, $length, $after = "......")
    {
        return mb_strlen($str) > $length ? mb_substr($str, 0, $length) . $after : $str;
    }
}