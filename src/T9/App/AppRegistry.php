<?php
/**
 * User: ezi
 * Date: 14.08.14
 * Time: 5:57
 */

namespace T9\App;


final class AppRegistry
{

    /**
     * @var array
     */
    private static $_registry = array();

    private function __construct() {}

    private function __clone() {}

    public static function get($index)
    {
        $item = (array_key_exists($index, self::$_registry) ? self::$_registry[$index] : null);

        if ((float)PHP_VERSION > 5.4 && $item instanceof \Closure) {
            return  $item();
        }
        return $item;
    }

    public static function set($index, $obj)
    {
        if ((float)PHP_VERSION > 5.4) {
            self::$_registry[$index] = function() use ($obj) {
                return $obj;
            };
        } else {
            self::$_registry[$index] = $obj;
        }
    }
}