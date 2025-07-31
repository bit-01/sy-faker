<?php

use Bit\ArabFaker;

use Bit\ArabFaker\ArabFaker as arFaker;

if (!function_exists('arabFaker')) {
    function arabFaker(){
        return new arFaker();
    }
}
