<?php
 class Lista{
    public $lista = array();
    public $validador;
    public $respuesta="";
    public static $PREFIJO="PRE";
    function __construct(){
        $this->validador= new Validador_multiplos_tres_cinco();
    }
    public function add($clave){
        //$temp=array("numero"=>$clave);
        $temp=array();
        $temp=$this->validador->procesarDato($clave,$temp);
        $this->lista[$clave]=$temp;
    }
    public function get($posicion){
        return $this->lista[$posicion];
    }
    public function get_lista(){
        return $this->lista;
    }
     public function get_respuesta(){
        return $this->respuesta;
    }
    public function procesarLista(){
        array_walk($this->lista,function ($array,$clave){
             //busco dentro del subarray los valores en 1 que significa cual de los multiplos fue detectado esto me retorna el valor de la clave del array la que segun el caso reemplazo por el texto final 
             //del ejercicio planteado, agrego un prefijo a todo ya que cuando array_search no encuentra nada da false y false casteado a string es "" y "" no se puede reemplazar con str_replace.
             //el array de la respuesta contiene los valores numericos o el texto en la posicion donde el numero es multiplo.
                $this->respuesta[$clave]=str_replace(self::$PREFIJO,$clave,
                                         str_replace(self::$PREFIJO."multiplo_3","Linio",
                                         str_replace(self::$PREFIJO."multiplo_5","IT",
                                         str_replace(self::$PREFIJO."multiplo_3_5","Linianos",self::$PREFIJO.(string)array_search("1",$array)))));
            });
            return $this;
    }
    public function to_string(){
        return implode($this->respuesta);
    }
    
}
?>