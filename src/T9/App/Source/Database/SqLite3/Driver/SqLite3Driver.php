<?php
/**
 * User: ezi
 * Date: 14.08.14
 * Time: 2:16
 */

namespace T9\App\Source\Database\SqLite3\Driver;

use T9\Common\Source\SourceDriverInterface;

final class SqLite3Driver implements SourceDriverInterface {

    /**
     * @var SqLite3Driver|null
     */
    private static $_instance  = null;
    /**
     * @var \PDO|null
     */
    private static $_pdo       = null;

    /**
     * @var string|null
     */
    private static $_table     = null;

    /**
     * @var string|null
     */
    private static $_column    = null;


    private static $_rawSource = null;

    private function __construct($path, $table, $column)
    {
        self::$_pdo   = new \PDO(
            'sqlite:' . $path,
            null,
            null,
            array(
                \PDO::ATTR_ERRMODE => \PDO::ERRMODE_SILENT
            )
        );
        self::$_table  = $table;
        self::$_column = $column;

        $query            = self::$_pdo->prepare('SELECT ' . self::$_column . ' FROM ' . self::$_table);
        self::$_rawSource = $query->execute();
    }

    private function __clone() {}

    public static function getInstance($path, $table, $column)
    {
        if (!(self::$_pdo instanceof self)) {
            self::$_instance = new self($path, $table, $column);
        }

        return self::$_instance;
    }

    public function getRawSource()
    {
        return self::$_rawSource;
    }
}