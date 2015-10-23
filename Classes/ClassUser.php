<?php

/**
 * Created by PhpStorm.
 * User: wsan
 * Date: 23.10.2015
 * Time: 00:35
 */
class ClassUser
{

    private $ad;
    private $soyad;
    private $cinsiyet;
    private $adres;


    // function __construct()
    // {
    // $this->ad=NULL;
    // $this->soyad=NULL;
    // }
//
    //fonksiyonlar aşırı yüklenemez...
    function __construct($ad, $soyad, $cinsiyet, $adres)
    {
        $this->setAd($ad);
        $this->setSoyad($soyad);
        $this->setCinsiyet($cinsiyet);
        $this->setAdres($adres);
    }

    /**
     * @param mixed $adres
     */
    public function setAdres($adres)
    {
        $this->adres = $adres;
    }

    /**
     * @return mixed
     */
    public function getAdres()
    {
        return $this->adres;
    }

    /**
     * @param mixed $ad
     */
    public function setAd($ad)
    {
        $this->ad = $ad;
    }

    /**
     * @return mixed
     */
    public function getAd()
    {
        return $this->ad;
    }

    /**
     * @param mixed $cinsiyet
     */
    public function setCinsiyet($cinsiyet)
    {
        $this->cinsiyet = $cinsiyet;
    }

    /**
     * @return mixed
     */
    public function getCinsiyet()
    {
        return $this->cinsiyet;
    }

    /**
     * @param mixed $soyad
     */
    public function setSoyad($soyad)
    {
        $this->soyad = $soyad;
    }

    /**
     * @return mixed
     */
    public function getSoyad()
    {
        return $this->soyad;
    }





    public function kisiListele()
    {
        //echo "$this->ad.$this->soyad";

        return "{$this->getAd()}"."{$this->getSoyad()}";
    }


}