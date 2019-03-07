<?php

namespace above\libs;

class Functions
{
    /**
     * @param $arr
     */
    public static function debugger($arr)
    {
        echo '<pre style="background: #263238;color: #fff;font-size: 16px">' . print_r($arr, true) . '</pre>';
    }
}
