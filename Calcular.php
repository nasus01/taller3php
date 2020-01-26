<?php

require_once 'Mulpeso.php';
require_once 'Muldolar.php';

sleep(1);

$objmuldolar = new Muldolar();
$objmulpeso = new Mulpeso();

$numero1=$_POST["txtnumero1"];


if (isset($_POST["btnmuldolar"])){
    $objmuldolar->setNumero1($numero1);
    echo $objmuldolar->muldolar();
}

if (isset($_POST["btnmulpeso"])){
    $objmulpeso->setNumero1($numero1);
    echo $objmulpeso->mulpeso();
}



?>