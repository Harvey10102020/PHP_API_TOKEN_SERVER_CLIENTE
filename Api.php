<?php
include("servive_Token.php");
if(isset($_SERVER["HTTP_CLASS"])){
    if(servive_Token::getInstance()->Paquetes($_SERVER["HTTP_CLASS"])[0]){
        include(servive_Token::getInstance()->Paquetes($_SERVER["HTTP_CLASS"])[1]);
        try {
            var_dump(Service_Validar::getInstance()->Acesso($_SERVER["HTTP_TOKEN_SERVER"]));
        } catch (\Throwable $th) {
            echo "\n";
        }
    }
}
?>