<?php

include "Abstract/Tank.php";

// Concrete class representing a specific LOL champion: Garen
class Garen extends Tank
{
    // Properties specific to Garen
    protected $armor = 36;

    private $baseMana;

    // Constructor to set specific champion's properties
    public function __construct()
    {
        parent::__construct();
        $this->setName("Garen");
        $this->baseMana = 0;
    }

    // Method to perform Garen's attack logic
    public function attack($target)
    {
        echo $this->getName() . " attacks " . $target->getName() . " with his sword! with " . $this->getAttackDamage() . " Damage <br />";
        $target->takeDamage($this->getAttackDamage());

        echo $target->getName() . " health points effect - " . $this->getAttackDamage() . "<br >";
        echo $target->getName() . " health points is " . $target->getHealthPoints() . "<br >";
    }

    // Method to perform Garen's tank logic
    public function tank($damage)
    {
        // Override the parent tank method to add Garen-specific behavior
        if ($damage > $this->getHealthPoints()) {
            // If the damage would kill Garen, activate his passive ability
            $this->regenerate();
        } else {
            parent::tank($damage);
        }
    }

    // Method to perform Garen's passive ability
    public function regenerate()
    {
        echo $this->getName() . " activates his passive ability: Perseverance!<br>";
        $this->setHealthPoints($this->getHealthPoints());
        echo $this->getName() . " current health points is: " . $this->getHealthPoints() . "<br />";
    }

    public function ultimateAbility()
    {
        // TODO: Implement ultimateAbility() method.
    }

    public function takeDamage($damage)
    {
        $this->tank($damage);
    }
}
