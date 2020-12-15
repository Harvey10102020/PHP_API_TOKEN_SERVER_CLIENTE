<?php
class servive_Token{
    public static $servicio_token;
    private $token_validar = array(
        "Service_Validar.php" => "bb989335b1866cfe9c4660a4027c63b4e4b519fd",
        "Service_Saludar.php" => "123"
    );
    public function __construct(){
    }
    public static function getInstance() {
        if ( !(self::$servicio_token instanceof self) ) {
            self::$servicio_token = new self();
        }
        return self::$servicio_token;
    }
    public function Paquetes($arg){
        $let = array_search($arg, $this->token_validar, true);
        return (!$let) ? array(false, $let) : array(true, $let);
    }
}

?>