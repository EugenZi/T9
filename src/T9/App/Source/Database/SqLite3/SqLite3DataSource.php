<?php
/**
 * Created by PhpStorm.
 * User: ezi
 * Date: 14.08.14
 * Time: 3:12
 */

namespace T9\App\Source\Database\SqLite3;

use T9\App\Source\Database\SqLite3\Driver\SqLite3Driver;
use T9\Common\Source\SourceDriverInterface;
use T9\Common\Source\SourceInterface;
use Traversable;

class SqLite3DataSource implements SourceInterface {

    private $_dataSource = null;

    public function __construct(SqLite3Driver $driver) {
        $this->_dataSourceDriver = $driver->getSource();
    }

    /**
     * (PHP 5 &gt;= 5.0.0)<br/>
     * Retrieve an external iterator
     * @link http://php.net/manual/en/iteratoraggregate.getiterator.php
     * @return Traversable An instance of an object implementing <b>Iterator</b> or
     * <b>Traversable</b>
     */
    public function getIterator()
    {
        return $this;
    }

    /**
     * (PHP 5 &gt;= 5.0.0)<br/>
     * Whether a offset exists
     * @link http://php.net/manual/en/arrayaccess.offsetexists.php
     * @param mixed $offset <p>
     * An offset to check for.
     * </p>
     * @return boolean true on success or false on failure.
     * </p>
     * <p>
     * The return value will be casted to boolean if non-boolean was returned.
     */
    public function offsetExists($offset)
    {
        // TODO: Implement offsetExists() method.
    }

    /**
     * (PHP 5 &gt;= 5.0.0)<br/>
     * Offset to retrieve
     * @link http://php.net/manual/en/arrayaccess.offsetget.php
     * @param mixed $offset <p>
     * The offset to retrieve.
     * </p>
     * @return mixed Can return all value types.
     */
    public function offsetGet($offset)
    {
        // TODO: Implement offsetGet() method.
    }

    /**
     * (PHP 5 &gt;= 5.0.0)<br/>
     * Offset to set
     * @link http://php.net/manual/en/arrayaccess.offsetset.php
     * @param mixed $offset <p>
     * The offset to assign the value to.
     * </p>
     * @param mixed $value <p>
     * The value to set.
     * </p>
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        // TODO: Implement offsetSet() method.
    }

    /**
     * (PHP 5 &gt;= 5.0.0)<br/>
     * Offset to unset
     * @link http://php.net/manual/en/arrayaccess.offsetunset.php
     * @param mixed $offset <p>
     * The offset to unset.
     * </p>
     * @return void
     */
    public function offsetUnset($offset)
    {
        // TODO: Implement offsetUnset() method.
    }

    public function getData()
    {
        // TODO: Implement getData() method.
    }

    public function getDataSource()
    {
        // TODO: Implement getDataSource() method.
    }

    public function filter()
    {
        // TODO: Implement filter() method.
    }

    function setSourceDriver(SourceDriverInterface $sourceDriverInterface)
    {
        // TODO: Implement setSourceDriver() method.
    }

    /**
     * @return SourceDriverInterface
     */
    function getSourceDriver()
    {
        // TODO: Implement getSourceDriver() method.
    }
}