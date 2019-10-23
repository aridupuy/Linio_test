<?php
include_once "loader.php";

print_r("<h3>Validadores</h3><br/>");
$validador35 = new Validador_multiplos_tres_cinco();
$validador3 = new Validador_multiplos_tres();
$validador5 = new Validador_multiplos_cinco();
$respuesta35=$validador35->procesarDato(15,array()); //valor esperado Array ( [multiplo_3_5] => 1 [multiplo_5] => 1 [multiplo_3] => 1 ) ;
print_r("15=>");
print_r($respuesta35);
print_r("<br/>");
$respuesta5=$validador5->procesarDato(5,array()); //valor esperado Array ([multiplo_5] => 1 [multiplo_3] => 1 ) ;
print_r("5=>");
print_r($respuesta5);
print_r("<br/>");
$respuesta3=$validador3->procesarDato(3,array()); //valor esperado Array ([multiplo_3] => 1 ) ;
print_r("3=>");
print_r($respuesta3);
print_r("<br/>");

$respuesta3=$validador3->procesarDato(1,array());//valor esperado Array ([multiplo_3] => 0 ) ;
print_r("1=>");
print_r($respuesta3);
print_r("<br/>");

$respuesta5=$validador5->procesarDato(1,array()); //valor esperado Array ([multiplo_5] => 0 [multiplo_3] => 0 ) ;
print_r("5=>");
print_r($respuesta5);
print_r("<br/>");

$respuesta35=$validador35->procesarDato(1,array()); //valor esperado Array ( [multiplo_3_5] => 0 [multiplo_5] => 0 [multiplo_3] => 0 ) ;
print_r("1=>");
print_r($respuesta35);
print_r("<br/>");

print_r("<h3>Lista</h3><br/>");
print_r("<h5>Lista validada</h5><br/>");

$lista = new Lista();
$lista->add(1);
$lista->add(2);
$lista->add(3);
$lista->add(5);
$lista->add(10);
$lista->add(12);
$lista->add(15);
$lista->add(30);
$lista->add(45);
$lista->add(60);
$lista->add(70);
print_r("<pre/>");
print_r($lista->get_lista());
print_r("<br/>");
print_r("<h5>Procesamiento de la lista</h5><br/>");
$res=$lista->procesarLista();
print_r("<pre/>");
print_r($res->get_respuesta());
print_r("<br/>");
print_r("<h5>Respuesta segun lista</h5><br/>");
print_r("<pre/>");
print_r($res->to_string());
print_r("<br/>");
?>
