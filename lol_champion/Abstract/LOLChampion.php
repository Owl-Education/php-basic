<?php

include __DIR__ . '/../Interface/LOLChampionInterface.php';


// Abstract class implementing the interface
abstract class LOLChampion implements LOLChampionInterface
{
    // Properties
    protected $name;
    protected $role;
    protected $attackDamage;
    protected $abilityPower;
    protected $healthPoints;
    protected $manaPoints;

    // Method to set the champion's name
    public function setName($name)
    {
        $this->name = $name;
    }

    // Method to set the champion's name
    public function getName()
    {
        return $this->name;
    }

    // Method to set the champion's role
    public function setRole($role)
    {
        $this->role = $role;
    }

    // Method to set the champion's attack damage
    public function setAttackDamage($attackDamage)
    {
        $this->attackDamage = $attackDamage;
    }

    public function getAttackDamage()
    {
        return $this->attackDamage;
    }

    // Method to set the champion's ability power
    public function setAbilityPower($abilityPower)
    {
        $this->abilityPower = $abilityPower;
    }

    // Method to set the champion's health points
    public function setHealthPoints($healthPoints)
    {
        $this->healthPoints = $healthPoints;
    }

    public function getHealthPoints()
    {
        return $this->healthPoints;
    }

    // Method to set the champion's mana points
    public function setManaPoints($manaPoints)
    {
        $this->manaPoints = $manaPoints;
    }

    // Method to display a champion's stats
    public function displayStats()
    {
        echo "Champion name: " . $this->name . "<br>";
        echo "Champion role: " . $this->role . "<br>";
        echo "Attack damage: " . $this->attackDamage . "<br>";
        echo "Ability power: " . $this->abilityPower . "<br>";
        echo "Health points: " . $this->healthPoints . "<br>";
        echo "Mana points: " . $this->manaPoints . "<br>";
    }

    // Abstract method to perform a champion's ultimate ability
    abstract public function takeDamage($damage);

    // Method to perform Mage's attack logic
    abstract public function attack($target);

    // Abstract method to perform a champion's ultimate ability
    abstract public function ultimateAbility();
}