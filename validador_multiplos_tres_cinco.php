<?php
class Validador_multiplos_tres_cinco extends validador{
    public function __construct(){
        $this->siguienteValidador=new Validador_multiplos_cinco();
    }
    public function procesarDato($dato,$array)
    {
        $array["multiplo_3_5"]=(int)(!($dato%3) AND !($dato % 5)); // casteo a entero el boleano;
        return  $this->siguienteValidador->procesarDato($dato,$array);
    }
}
?>