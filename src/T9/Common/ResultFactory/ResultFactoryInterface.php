<?php
/**
 * User: ezi
 * Date: 14.08.14
 * Time: 3:22
 */
namespace T9\Common\ResultFactory;


use T9\Common\Matcher\MatcherInterface;

interface ResultFactoryInterface {

    const RESULT_ARRAY  = 1;
    const RESULT_JSON   = 2;
    const RESULT_OBJECT = 3;

    function setMather(MatcherInterface $matcherInterface);

    function match();

    /**
     * @param $type
     * @return mixed
     */
    function factoryResult($type);

} 