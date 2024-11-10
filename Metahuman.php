<?php

namespace Metahuman;

class Metahuman {
    public $hp; // health points
    public $str; // strength
    public $int; // intelligence
    public $agi; // agility
    public $ability; // special ability
    public $name; // name

    public function __construct($hp, $str, $int, $agi, $ability, $name) {
        $this->hp = $hp;
        $this->str = $str;
        $this->int = $int;
        $this->agi = $agi;
        $this->ability = $ability;
        $this->name = $name;
    }

    public function dialog() {
        return "Hi, I am a metahuman. My name is {$this->name} and my ability is {$this->ability}.";
    }

    public function set_name($name) {
        $this->name = $name;
    }

    public function get_name() {
        return $this->name;
    }

    public function set_ability($ability) {
        $this->ability = $ability;
    }

    public function get_ability() {
        return $this->ability;
    }

    public function show_stats() {
        return "<br>HP: {$this->hp}, STR: {$this->str}, INT: {$this->int}, AGI: {$this->agi}";
    }

}
