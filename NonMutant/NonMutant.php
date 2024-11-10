<?php

namespace Metahuman\NonMutant;

use Metahuman\Metahuman;

class NonMutant extends Metahuman {
    public $phenotype;

    public function __construct($hp, $str, $int, $agi, $ability, $name, $phenotype) {
        parent::__construct($hp, $str, $int, $agi, $ability, $name);
        $this->phenotype = $phenotype;
    }

    public function describe() {
        return "I am a nonmutant with the phenotype of {$this->phenotype}.";
    }

    public function dialog() {
        return "Hi, I am a nonmutant. My name is {$this->name} and my ability is {$this->ability}. My phenotype is {$this->phenotype}.";
    }

    public function set_name($name) {
        $this->name = $name;
    }

    public function get_name() {
        return $this->name;
    }

    public function set_phenotype($phenotype) {
        $this->phenotype = $phenotype;
    }

    public function get_phenotype() {
        return $this->phenotype;
    }
}

?>
