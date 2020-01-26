<?php

require_once 'Conversion.php';


class Muldolar extends Conversion{

    public function muldolar(){
       return ($this ->getNumero1() * 3.365);
    }

}

?>