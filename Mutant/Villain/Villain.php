<?php

namespace Metahuman\Mutant\Villain;
use Metahuman\Mutant\Mutant;

class Villain extends Mutant {
    public $isEvil;

    public function __construct($hp, $str, $int, $agi, $ability, $name, $mutationType) {
        parent::__construct($hp, $str, $int, $agi, $ability, $name, $mutationType);
        $this->isEvil = true; 
    }

    public function getIsEvil() {
        return $this->isEvil;
    }

    public function setIsEvil($isEvil) {
        $this->isEvil = $isEvil;
    }

    public function dialog() {
        return "Hi, I am a mutant villain. My name is {$this->name}, my ability is {$this->ability}, my mutation type is {$this->mutationType}, and I am " . ($this->isEvil ? "evil" : "not evil") . ".";
    }
}
