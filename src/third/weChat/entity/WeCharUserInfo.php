<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * DateTime: 18-9-7上午11:55
 */

namespace thl\third\weChat\auth\entity;


class WeCharUserInfo
{
    /**
     * @var string
     */
    private $openid;

    /**
     * @var string
     */
    private $nickname;

    /**
     * @var string
     */
    private $sex;

    /**
     * @var string
     */
    private $language;

    /**
     * @var string
     */
    private $city;

    /**
     * @var string
     */
    private $province;

    /**
     * @var string
     */
    private $country;

    /**
     * @var string
     */
    private $headimgurl;

    /**
     * @var array
     */
    private $privilege;

    /**
     * @var string
     */
    private $unionid;

    /**
     * @return string
     */
    public function getUnionid()
    {
        return $this->unionid;
    }

    /**
     * @param string $unionid
     */
    public function setUnionid($unionid)
    {
        $this->unionid = $unionid;
    }

    /**
     * @return string
     */
    public function getOpenid()
    {
        return $this->openid;
    }

    /**
     * @param string $openid
     */
    public function setOpenid($openid)
    {
        $this->openid = $openid;
    }

    /**
     * @return string
     */
    public function getNickname()
    {
        return $this->nickname;
    }

    /**
     * @param string $nickname
     */
    public function setNickname($nickname)
    {
        $this->nickname = $nickname;
    }

    /**
     * @return string
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * @param string $sex
     */
    public function setSex($sex)
    {
        $this->sex = $sex;
    }

    /**
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * @param string $language
     */
    public function setLanguage($language)
    {
        $this->language = $language;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @return string
     */
    public function getProvince()
    {
        return $this->province;
    }

    /**
     * @param string $province
     */
    public function setProvince($province)
    {
        $this->province = $province;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param string $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

    /**
     * @return string
     */
    public function getHeadimgurl()
    {
        return $this->headimgurl;
    }

    /**
     * @param string $headimgurl
     */
    public function setHeadimgurl($headimgurl)
    {
        $this->headimgurl = $headimgurl;
    }

    /**
     * @return array
     */
    public function getPrivilege()
    {
        return $this->privilege;
    }

    /**
     * @param array $privilege
     */
    public function setPrivilege($privilege)
    {
        $this->privilege = $privilege;
    }

}