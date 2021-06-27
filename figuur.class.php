<?php
class figuur {
    public $width = 5;
    public $height = 5;
    public $pi = 3.14159265359;
    public $h = 10;
    public $r = 3;
    // public $diameter = 0;

    
    // public function __construct($width, $height) {
    //     $this->width = $width;
    //     $this->height = $height;

    // }
}

class Vierkant extends figuur {
public function getVierkant() {
    return ($this->width * $this->$height);

    // $Vierkant = new figuur(5,5);
    // var_dump($Vierkant);
}

}

class Cilinder extends figuur {
    public function getCilinder() {
        return (2 * ($this->pi * $this->$r * $this->$r));
    
        // $Vierkant = new figuur(5,5);
        // var_dump($Vierkant);
    }
    
    }
    


// var_dump($vierkant);

?>