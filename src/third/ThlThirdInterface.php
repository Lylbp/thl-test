<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 2019/4/28
 * Time: 上午9:02
 */

namespace thl\third;


interface ThlThirdInterface
{
    /**
     * 重写返回值
     *
     * @param $result
     * @return mixed
     */
    function returnRewrite($result);
}