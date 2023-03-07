<?php

include "Abstract/Mage.php";

// Concrete class representing a specific LOL champion: Lux
class Lux extends Mage
{
    // Properties specific to Lux
    protected $baseMana;

    // Constructor to set specific champion's properties
    public function __construct()
    {
        parent::__construct();
        $this->setName("Lux");
        $this->baseMana = 480;
    }

    // Method to perform Mage's castSpell logic
    public function castSpell($target)
    {
        $manaCost = $this->getManaCost();
        if ($this->manaPoints >= $manaCost) {
            echo $this->name . " castSpell " . $target->getName() . "!<br>";
            $this->setAttackDamage($target->getDamage());
            $this->manaPoints -= $manaCost;
        } else {
            $this->manaPoints -= $manaCost;
            echo $this->name . " does not have enough mana to cast " . $target->getName() . ".<br>";
        }
    }


    // Method to perform Lux's attack logic
    public function attack($target)
    {
        echo $this->getName() . " attacks " . $target->getName() . " a beam of light! " . $this->getAttackDamage() . " Damage <br />";

        $target->takeDamage($this->getAttackDamage());

        echo $target->getName() . " health points effect - " . $this->getAttackDamage() . "<br >";
        echo $target->getName() . " health points is <strong> " . $target->getHealthPoints() . "</strong><br >";
    }

    // Method to display a champion's stats
    public function displayStats()
    {
        parent::displayStats();
        echo "Base mana: " . $this->baseMana . "<br>";
    }

    public function ultimateAbility()
    {
        // TODO: Implement ultimateAbility() method.
    }

    public function takeDamage($damage)
    {
        $this->setHealthPoints($this->getHealthPoints() - $damage);
    }
}