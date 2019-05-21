<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 2019/4/28
 * Time: 下午4:51
 */

namespace thl\enum;


use MyCLabs\Enum\Enum;

class ResultEnum extends Enum
{
    const NO_LOGIN_CODE_CODE = "1";
    const NO_LOGIN_CODE_MSG = "未登录";

    //配置文件相关
    const PARAM_CONFIG_TYPE_OUT_ERROR_CODE = "101";
    const PARAM_CONFIG_TYPE_OUT_ERROR_MSG = "配置文件类型溢出";

    const PARAM_CONFIG_FORMAT_ERROR_CODE = "102";
    const PARAM_CONFIG_FORMAT_ERROR_MSG = "配置文件格式错误:必须以parameters开始";

    const PARAM_PARSE_ERROR_CODE = "103";
    const PARAM_PARSE_ERROR_MSG = "配置文件解析错误";

    //系统提示语
    const SUCCESS_CODE = "0";
    const SUCCESS_MSG = "操作成功";

    const ERROR_CODE = "1";
    const ERROR_MSG = "操作失败";


    //微信相关
    const WECHART_NO_ACCESS_TOKEN_CODE = "201";
    const WECHART_NO_ACCESS_TOKEN_MSG = "access_token未获取";



    public function __construct($value)
    {
        parent::__construct($value);
    }

}