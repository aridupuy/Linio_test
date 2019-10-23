<?php
class Validador_multiplos_tres extends validador{
    
    public function procesarDato($dato,$array)
    {
        $array["multiplo_3"]=(int)!($dato%3); // casteo a entero el boleano;
        return $array;
    }
}
?>