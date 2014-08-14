<?php

namespace T9\Common\Source;

interface SourceInterface extends \ArrayAccess, \IteratorAggregate {
	
	function getData();

	function getDataSource();

    function filter();

    function setSourceDriver(SourceDriverInterface $sourceDriverInterface);

    /**
     * @return SourceDriverInterface
     */
    function getSourceDriver();
}