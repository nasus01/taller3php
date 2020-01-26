<?php

require_once 'Conversion.php';


class Mulpeso extends Conversion{

    public function mulpeso(){
        return ($this->getNumero1()* 0.00030);
    }

}

?>