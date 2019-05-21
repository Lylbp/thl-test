<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 2019/4/19
 * Time: 下午4:54
 */

namespace thl;


class BaseService extends ThlBase
{
    public function test() {
        echo dirname(__DIR__).'/vendor/autoload.php';
    }
}