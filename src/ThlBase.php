<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 2019/4/19
 * Time: 下午4:55
 */

namespace thl;

//use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Yaml\Exception\ParseException;
use Symfony\Component\Yaml\Yaml;
use thl\enum\ParamterTypeEnum;
use thl\enum\ResultEnum;
use thl\Exception\ThlResultException;

class ThlBase
{
    /**
     * @var ObjectManager
     */
    protected $entityManager;

    protected $conn;

    protected $parameters;

    protected $urlParameters;

    /**
     * ThlBase constructor.
     * @throws ThlResultException
     */
    public function __construct()
    {
        //数据库相关
        require_once  dirname(__DIR__) . '/app/bootstrap.php';
//        $this->entityManager = $entityManager;

        //yml文件相关
        try {
            $this->parameters = Yaml::parse(dirname(__DIR__).'/config/thlConfig.yml');
        } catch (ParseException $exception) {
            throw new ThlResultException(ResultEnum::PARAM_PARSE_ERROR_CODE,ResultEnum::PARAM_PARSE_ERROR_MSG);
        }

        try {
            $this->urlParameters = Yaml::parse(dirname(__DIR__).'/config/thlUrlConfig.yml');
        } catch (ParseException $exception) {
            throw new ThlResultException(ResultEnum::PARAM_PARSE_ERROR_CODE,ResultEnum::PARAM_PARSE_ERROR_MSG);
        }
    }

    /**
     * @param $key
     * @param int $type
     * @return string
     * @throws ThlResultException
     */
    public function getParameters($key,$type = ParamterTypeEnum::THIRD_CONFIG_PARAM_TYPE){
        $parameters = null;
        switch ($type){
            case ParamterTypeEnum::THIRD_CONFIG_PARAM_TYPE:
                $parameters = $this->parameters;
                break;
            case ParamterTypeEnum::THIRD_API_URL_PARAM_TYPE:
                $parameters = $this->urlParameters;
                break;

            default:
                throw new ThlResultException(ResultEnum::PARAM_CONFIG_TYPE_OUT_ERROR_CODE,ResultEnum::PARAM_CONFIG_TYPE_OUT_ERROR_MSG);

        }


        if (!array_key_exists("parameters",$parameters)){
            throw new ThlResultException(ResultEnum::PARAM_CONFIG_FORMAT_ERROR_CODE,ResultEnum::PARAM_CONFIG_FORMAT_ERROR_MSG);
        }

        $values =$parameters['parameters'];
        if (!array_key_exists($key,$values)){
            return "";
        }

        return $values[$key];
    }

    /**
     * @param $key
     * @return string
     * @throws ThlResultException
     */
    public function getUrlParameters($key){
        if (!array_key_exists("parameters",$this->parameters)){
            throw new ThlResultException(ResultEnum::PARAM_CONFIG_FORMAT_ERROR_CODE,ResultEnum::PARAM_CONFIG_FORMAT_ERROR_MSG);
        }
        $values = $this->urlParameters['parameters'];

        if (!array_key_exists($key,$values)){
            return "";
        }

        return $values[$key];
    }

}