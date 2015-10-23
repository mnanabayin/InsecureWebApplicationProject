<?php
//echo "ClassVeritabaniMysqli" ;

require_once(__DIR__.'/../Configuration/DatabaseCredentials.php');

/**
 * Class Veritabani
 */

class Veritabani //implements VeritabaniArayuz
{
    private $veritabani;

    /**
     * @var :oluşan nesneyi gösterir (tutar). nesne oluşturmadan önce buraya bakacağımız için
     *(nesne zaten oluşturulmuş mu diye) static olması gerekir.
     */
    public static $instance;
    /**
     * @return mysqli
     */
    public function getVeritabani()
    {
        return $this ->veritabani;
    }

    /**
     *Dışarıda nesne oluşturulamasın diye private ya da protected yapılır.
     * getInstance fonksiyonu nesne oluşturabilir.
     */
    private function __construct()
    {
        global $sunucu, $kullaniciAdi, $sifre, $veritabani;

        try
        {
            $this->veritabani= mysqli_connect($sunucu, $kullaniciAdi, $sifre, $veritabani);
            // Bağlantiyi doğrula
            if (mysqli_connect_errno())
            {
                echo "bağlantı başarısız... " . mysqli_connect_error();
            }
            mysqli_set_charset($this->veritabani,"utf8");

        } catch ( Exception $e ){
            print $e->getMessage();
        }


    }

    /**
     *Nesne kopyalanmaya çalışılırsa (clone) bu fonksiyon private olduğu için hata verecek ve engellenecektir
     */
    private function __clone() {}

    //used static function so that, this can be called from other classes

    /**
     * @return Veritabani
     */
    public static function getInstance(){

        if( !(self::$instance instanceof self) ){

            self::$instance = new self();

        }
        return self::$instance;
    }

    /**
     *
     */
    public function __destruct()
    {

       $this->veritabani=null;

    }

}
