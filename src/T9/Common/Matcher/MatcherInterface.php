<?php
/**
 * User: ezi
 * Date: 14.08.14
 * Time: 2:27
 */

namespace T9\Common\Matcher;

use T9\Common\Source\SourceInterface;

interface MatcherInterface {

    function searchData();

    function matchWords();

    function setDataSource(SourceInterface $sourceInterface);

} 