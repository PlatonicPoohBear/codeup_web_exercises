<?php

class Input
{
    /**
     * Check if a given value was passed in the request
     *
     * @param string $key index to look for in request
     * @return boolean whether value exists in $_POST or $_GET
     */
    public static function has($key)
    {
        return isset($_REQUEST[$key]);
    }

    /**
     * Get a requested value from either $_POST or $_GET
     *
     * @param string $key index to look for in index
     * @param mixed $default default value to return if key not found
     * @return mixed value passed in request
     */
    public static function get($key, $default = null)
    {
        if (self::has($key)) {
        return $_REQUEST[$key];
        } else {
        return null;
        }
    }

    public static function getString($key) {
        
        $temp = self::get($key);

        if ($temp == '') {
            return $temp;
        } elseif (!is_string($temp) || is_numeric($temp)) {
            throw new Exception("Value for key '{$key}' is {$temp}, not a valid string");
        } else {
            return $temp;
        }

    }


    public static function getNumber($key) {
        
        $temp = self::get($key);

        if ($temp == '') {
            return $temp;
        } elseif (is_numeric($temp)) {
            return floatval($temp);
        } else {
            throw new Exception("Value for key {$key} is {$temp}, not a valid numeric value.");
        }
    }

    ///////////////////////////////////////////////////////////////////////////
    //                      DO NOT EDIT ANYTHING BELOW!!                     //
    // The Input class should not ever be instantiated, so we prevent the    //
    // constructor method from being called. We will be covering private     //
    // later in the curriculum.                                              //
    ///////////////////////////////////////////////////////////////////////////
    private function __construct() {}
}
