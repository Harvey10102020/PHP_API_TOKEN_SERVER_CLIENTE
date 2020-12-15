<?php
// Gota de agua : 1607130976
// Gota de Validar:  1607132119
class Service_Validar{
    private $gota = "1607130976";
    public static $service_validar;
    public function __construct(){

    }
    public static function getInstance() {
        if ( !(self::$service_validar instanceof self) ) {
            self::$service_validar = new self();
        }
        return self::$service_validar;
    }
    public function Acesso($arg){
        return (sha1($this->gota) == $arg) ?  true : false;
    }
}

?>