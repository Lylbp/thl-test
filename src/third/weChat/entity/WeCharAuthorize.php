<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * DateTime: 18-9-7上午11:35
 */

namespace thl\third\weChat\entity;


class WeCharAuthorize
{
    /**
     * @var string
     */
    private $code;

    /**
     * @var string
     */
    private $AccessToken;

    /**
     * @var string
     */
    private $AuthorizationRoute;

    /**
     * @var string
     */
    private $state;

    /**
     * @var string
     */
    private $openId;

    /**
     * @return string
     */
    public function getOpenId()
    {
        return $this->openId;
    }

    /**
     * @param string $openId
     */
    public function setOpenId($openId)
    {
        $this->openId = $openId;
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param string $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * @return string
     */
    public function getAccessToken()
    {
        return $this->AccessToken;
    }

    /**
     * @param string $AccessToken
     */
    public function setAccessToken($AccessToken)
    {
        $this->AccessToken = $AccessToken;
    }

    /**
     * @return string
     */
    public function getAuthorizationRoute()
    {
        return $this->AuthorizationRoute;
    }

    /**
     * @param string $AuthorizationRoute
     */
    public function setAuthorizationRoute($AuthorizationRoute)
    {
        $this->AuthorizationRoute = $AuthorizationRoute;
    }

    /**
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param string $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }


}