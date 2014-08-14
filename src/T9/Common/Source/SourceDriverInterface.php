<?php

namespace T9\Common\Source;

interface SourceDriverInterface {
    /**
     * @return array
     */
    function getRawSource();
}