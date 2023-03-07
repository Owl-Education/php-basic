<?php
include "LOLChampion.php";


// Concrete class representing a Mage champion
abstract class Mage extends LOLChampion
{
    // Properties specific to Mage
    protected $baseMana;

    protected $manaCost;

    // Constructor to set specific champion's properties
    public function __construct()
    {
        $this->setName("Mage");
        $this->setRole("Mage");
        $this->setAttackDamage(50);
        $this->setAbilityPower(90);
        $this->setHealthPoints(490);
        $this->setManaPoints(480);
        $this->baseMana = 200;
    }

    public function getManaCost()
    {
        return $this->manaCost;
    }

    // Method to perform Mage's spell-casting logic
    public function castSpell($target)
    {
        $target->setHealthPoints($target->getHealthPoints() - $target->getHealthPoints() * 0.7);
    }

}