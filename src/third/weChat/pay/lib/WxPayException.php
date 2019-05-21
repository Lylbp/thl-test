<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 2019/5/5
 * Time: 上午11:42
 */

namespace thl\third\weChat\pay\lib;


/**
 *
 * 微信支付API异常类
 * @author widyhu
 *
 */
class WxPayException extends \Exception {
    public function errorMessage()
    {
        return $this->getMessage();
    }
}