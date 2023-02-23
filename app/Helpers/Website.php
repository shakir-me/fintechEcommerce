<?php
use App\Models\Admin\Social;
use App\Models\WebSite;



 function socials()
{
    return Social::all();
}


if (!function_exists('setting')) {
    /**
     * Get setting value by key
     *
     * @param string $name
     * @param mixed $default
     * @return mixed
     */
    function setting($name, $default = null)
    {
       return \App\Models\Admin\Setting::all();
    }



}








