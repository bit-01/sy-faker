<?php

use Bit\SyFaker;

use Bit\SyFaker\SyFaker as arFaker;

if (!function_exists('syFaker')) {
    function syFaker(){
        return new arFaker();
    }
}
