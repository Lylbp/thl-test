<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 2019/5/21
 * Time: 下午2:30
 */

namespace thl\third\weChat\abstracts;


abstract class WeChatConfigAbstract
{
    public abstract function getWechatAppId();
    public abstract function getWechatAppSecret();
    public abstract function getWechatMerchantKey();
    public abstract function getWechatMerchantId();
}