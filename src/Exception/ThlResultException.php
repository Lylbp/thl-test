<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 2019/4/29
 * Time: 下午4:21
 */

namespace thl\Exception;



class ThlResultException extends \Exception
{
    public function __construct($code,$message)
    {
        parent::__construct($message, $code, null);
    }
}