<?php

namespace Metahuman\NonMutant\Villain;
use Metahuman\NonMutant\NonMutant;

class Villain extends NonMutant {
    public $isEvil;

    public function __construct($hp, $str, $int, $agi, $ability, $name, $phenotype) {
        parent::__construct($hp, $str, $int, $agi, $ability, $name, $phenotype);
        $this->isEvil = true; 
    }

    public function getIsEvil() {
        return $this->isEvil;
    }

    public function setIsEvil($isEvil) {
        $this->isEvil = $isEvil;
    }

    public function dialog() {
        return "Hi, I am a nonmutant villaon. My name is {$this->name}, my ability is {$this->ability}, my mutation type is {$this->phenotype}, and I am " . ($this->isEvil ? "evil" : "not evil") . ".";
    }
}
