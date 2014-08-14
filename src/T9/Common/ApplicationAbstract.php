<?php
/**
 * Created by PhpStorm.
 * User: ezi
 * Date: 14.08.14
 * Time: 5:39
 */

namespace T9\Common;


abstract class ApplicationAbstract {



    abstract protected function execute();
    abstract public function run();
    abstract public function sendResult();
}