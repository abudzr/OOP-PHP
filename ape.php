<?php
include('frog.php');
class Ape extends Frog{
    
    public $yell;
    public function yell($yell="auo" ){
        $this->yell=$yell;
        $a = "{$this->name} | {$this->legs} | {$this->cold_blooded} | {$this->yell}";
        return $a;
    }
}


?>
