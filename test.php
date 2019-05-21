<?php
require 'vendor/autoload.php';

/**
 * @var \thl\ThlBase
 */
//(new \thl\third\weChat\pay\pay\JsApiPay())->testJsApi();

//$data = array(1,13,7,19,3);

//冒泡
//for ($i = 0; $i < count($data)-1; $i++){
//    for ($j = 0; $j < count($data)-1; $j++){
//        if ($data[$j] > $data[$j+1]){
//            $temp = $data[$j];
//            $data[$j] = $data[$j+1];
//            $data[$j+1] = $temp;
//        }
//    }
//}


//选择
//for ($i = 0; $i < count($data)-1; $i++){
//    for ($j = $i+1; $j < count($data); $j++){
//        if ($data[$i] > $data[$j]){
//            $temp = $data[$i];
//            $data[$i] = $data[$j];
//            $data[$j] = $temp;
//        }
//    }
//}

//二分查找
//function binary($needle,$arr){
//    $max = count($arr);
//    $min = 0;
//
//    while ($min <= $max){
//        $mid = (int)floor(($max+$min)/2);
//        if ($needle == $arr[$mid]){
//            return $mid;
//        }
//
//        if ($needle < $arr[$mid]){
//            $max = $mid-1;
//        }
//
//        if ($needle > $arr[$mid]){
//            $min = $mid+1;
//        }
//    }
//
//    return -1;
//}
//$data = array(1,3,7,13,19,20);
//dump(binary(19,$data));

$config = new \thl\test\WechatConfig();
$share = new \thl\third\weChat\share\ThlWechatShare($config);
dump($share->shareParameter("123"));exit();

