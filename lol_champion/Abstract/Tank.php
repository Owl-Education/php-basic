<?php

// Concrete class representing a Tank champion
abstract class Tank extends LOLChampion
{
    // Properties specific to Tank
    protected $armor;

    // Constructor to set specific champion's properties
    public function __construct()
    {
        $this->setName("Tank");
        $this->setRole("Tank");
        $this->setAttackDamage(80);
        $this->setAbilityPower(0);
        $this->setHealthPoints(800);
        $this->setManaPoints(0);
        $this->armor = 100;
    }

    // Method to perform Tank's tank logic
    public function tank($damage)
    {
        echo $this->name . " tanks " . $damage . " points of damage!<br>";
        $damageReduced = $damage - $this->armor;
        if ($damageReduced < 0) {
            $damageReduced = 0;
            echo $this->name . " have amour " . $this->armor . " !!!, NO DAMAGE<br>";
            $this->setHealthPoints($this->healthPoints);
        } else {
            $this->setHealthPoints($this->healthPoints -  $damageReduced);
        }

    }
}