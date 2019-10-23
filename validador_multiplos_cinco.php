<?php
class Validador_multiplos_cinco extends validador{
    public function __construct(){
        $this->siguienteValidador=new Validador_multiplos_tres();
    }
    public function procesarDato($dato,$array)
    {
        
         $array["multiplo_5"]=(int)!($dato%5); // casteo a entero el boleano;
        return  $this->siguienteValidador->procesarDato($dato,$array);
    }
}
?>