<?php

namespace Metahuman\Mutant;

use Metahuman\Metahuman;
class Mutant extends Metahuman {
    
    public $mutationType;

    public function __construct($hp, $str, $int, $agi, $ability, $name, $mutationType) {
        parent::__construct($hp, $str, $int, $agi, $ability, $name);
        $this->mutationType = $mutationType;
    }

    public function describe() {
        return "I am a mutant with the mutation type of {$this->mutationType}.";
    }

    public function dialog() {
        return "Hi, I am a mutant. My name is {$this->name} and my ability is {$this->ability}. My mutation type is {$this->mutationType}.";
    }

    public function set_mutation_type($mutationType) {
        $this->mutationType = $mutationType;
    }

    public function get_mutation_type() {
        return $this->mutationType;
    }
}

?>
