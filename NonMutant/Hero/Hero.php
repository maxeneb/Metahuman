<?php

namespace Metahuman\NonMutant\Hero;
use Metahuman\NonMutant\NonMutant;

class Hero extends NonMutant {
    public $isEvil;

    public function __construct($hp, $str, $int, $agi, $ability, $name, $phenotype) {
        parent::__construct($hp, $str, $int, $agi, $ability, $name, $phenotype);
        $this->isEvil = false; 
    }

    public function getIsEvil() {
        return $this->isEvil;
    }

    public function setIsEvil($isEvil) {
        $this->isEvil = $isEvil;
    }

    public function dialog() {
        return "Hi, I am a nonmutant hero. My name is {$this->name}, my ability is {$this->ability}, my mutation type is {$this->phenotype}, and I am " . ($this->isEvil ? "evil" : "not evil") . ".";
    }
}
