<?php

require_once 'autoloader.php';

use Metahuman\Mutant\Hero\Hero as MutantHero;
use Metahuman\Mutant\Villain\Villain as MutantVillain;

use Metahuman\NonMutant\Hero\Hero as NonMutantHero;
use Metahuman\NonMutant\Villain\Villain as NonMutantVillain;

echo "<br><br>=== MUTANT HERO ===<br>";

$mutant_hero = new MutantHero(100, 10, 10, 10, "Telepathy", "Professor X", "Telepath");
echo $mutant_hero->dialog();
echo $mutant_hero->show_stats();

echo "<br><br>=== MUTANT VILLAIN ===<br>";

$mutant_villain = new MutantVillain(100, 10, 10, 10, "Magnetism", "Magneto", "Magnetic");
echo $mutant_villain->dialog();
echo $mutant_hero->show_stats();

echo "<br><br>=== NONMUTANT HERO ===<br>";

$nonmutant_hero = new NonMutantHero(100, 10, 10, 10, "Super Strength", "Superman", "Kryptonian");
echo $nonmutant_hero->dialog();
echo $nonmutant_hero->show_stats();

echo "<br><br>=== NONMUTANT VILLAIN ===<br>";

$nonmutant_villain = new NonMutantVillain(100, 10, 10, 10, "Mind Control", "Lex Luthor", "Human");
echo $nonmutant_villain->dialog();
echo $nonmutant_villain->show_stats();