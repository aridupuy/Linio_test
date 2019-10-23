<?php
class Application{
    public $max=100;
    public function run(){
        $lista = new Lista();
        for($i=1;$i<=$this->max;$i++){
            $lista->add($i);
        }
        $respuesta=$lista->procesarLista();
        return $respuesta;
    }
    public function setMaximo($max=1)
    {
        $this->max=$max;
        return $this;
    }

}

?>