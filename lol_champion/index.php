<?php

include "Lux.php";
include "Spell.php";
include "Garen.php";

/* LUX - Mage */
// Create a new Lux champion object
$lux = new Lux();
$lux->displayStats();
echo "<br />";

$garen = new Garen();
$garen->displayStats();
echo "<br />";



// Have Lux cast the spell
echo "<br />";

//$lux->castSpell($lucentSingularity);
//$lux->castSpell($prismaticBarrier);
//$lux->castSpell($finalSpark);


/* GAREN - Tank */

// Create a new Garen champion
echo "<br /> <br /> <br />";


// Test Garen's methods
$garen->attack($lux);
echo "<br />";

// Create a new spell object
$lightBinding = new Spell("Light Binding", 50, 80);
/*$lucentSingularity = new Spell("Lucent Singularity", 70, 100);
$prismaticBarrier = new Spell("Prismatic Barrier", 80, 0);
$finalSpark = new Spell("Final Spark", 1200, 400);*/
$lux->castSpell($lightBinding);
$lux->attack($garen);
echo "<br />";

$lucentSingularity = new Spell("Lucent Singularity", 70, 350);
$lux->castSpell($lucentSingularity);
$lux->attack($garen);
echo "<br />";


$garen->tank(150);
$garen->regenerate();
$garen->tank(850);

