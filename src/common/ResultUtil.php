<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 2019/4/29
 * Time: 下午9:21
 */

namespace thl\common;


use thl\entity\ThlResult;
use thl\enum\ResultEnum;

class ResultUtil
{
//    public function __construct()
//    {
//        $args = func_get_args();
//        $i = count($args);
//        $function_name='__construct'.$i;
//        if (method_exists($this,$function_name)) {
//            call_user_func_array(array($this,$function_name),$args);
//        }
//    }
//
//    function __construct2($a1,$a2)
//    {
//        dump("22222");
//    }
//
//    function __construct3($a1,$a2,$sa3)
//    {
//        dump("33333");
//    }

//    public function __call($name, $arguments)
//    {
//        $i = count($arguments);
//        //参数个数是否为1
//        if ($i == 1){
//            $argument = $arguments[0];
//            if ($name == "success"){//调用函数名为success
//                if (gettype($argument) == "array" && method_exists($this,$function_name = "successByArray")){
//                    call_user_func_array(array($this,$function_name),$argument);
//                }
//            }elseif ($name == "error"){//调用函数名为error
//                if (gettype($argument) == "array" && method_exists($this,$function_name = "errorByArray")){
//                    call_user_func_array(array($this,$function_name),$argument);
//                }
//            }
//        }elseif($i == 2){
//
//        }elseif ($i == 3){
//            if ($name == "result"){
//
//            }
//        }
//    }

    public static function success($data = array()){
        return new ThlResult(ResultEnum::SUCCESS_MSG, ResultEnum::SUCCESS_CODE, $data);
    }

    public static function error($data = array()){
        return new ThlResult(ResultEnum::ERROR_MSG, ResultEnum::ERROR_CODE, $data);
    }
}