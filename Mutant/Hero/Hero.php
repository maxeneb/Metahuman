<?php

namespace Metahuman\Mutant\Hero;
use Metahuman\Mutant\Mutant;

class Hero extends Mutant {
    public $isEvil;

    public function __construct($hp, $str, $int, $agi, $ability, $name, $mutationType) {
        parent::__construct($hp, $str, $int, $agi, $ability, $name, $mutationType);
        $this->isEvil = false; 
    }

    public function getIsEvil() {
        return $this->isEvil;
    }

    public function setIsEvil($isEvil) {
        $this->isEvil = $isEvil;
    }

    public function dialog() {
        return "Hi, I am a mutant hero. My name is {$this->name}, my ability is {$this->ability}, my mutation type is {$this->mutationType}, and I am " . ($this->isEvil ? "evil" : "not evil") . ".";
    }
}
