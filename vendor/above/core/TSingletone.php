<?php

namespace above;

trait TSingletone
{
    private static $instance;

    /**
     * @return TSingletone
     */
    public static function instance()
    {
        if (self::$instance === null) {
            self::$instance = new self;
        }

        return self::$instance;
    }
}
