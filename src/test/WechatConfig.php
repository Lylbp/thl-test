<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 2019/5/21
 * Time: 下午2:49
 */

namespace thl\test;


use thl\third\weChat\abstracts\WeChatConfigAbstract;

class WechatConfig extends WeChatConfigAbstract
{

    public function getWechatAppId()
    {
        return "1";
    }

    public function getWechatAppSecret()
    {
        return "2";
    }

    public function getWechatMerchantKey()
    {
        return "3";
    }

    public function getWechatMerchantId()
    {
        return "4";
    }
}