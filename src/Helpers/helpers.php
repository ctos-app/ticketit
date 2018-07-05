<?php

use Kordy\Ticketit\Models\Setting;

if (!function_exists('getNamedRouteFromSetting')) {

    /**
     * @param        $slug
     * @param string $method
     *
     * @return mixed|string
     */
    function getNamedRouteFromSetting($slug, $append = '', $method = '')
    {
        $value = Setting::grab($slug);
        if ($append) {
            $value .= "-" . $append;
        }

        return $method ? "{$value}.{$method}" : $value;
    }
}

