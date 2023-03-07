<?php

// Interface defining methods for a LOL champion
interface LOLChampionInterface {
    public function setName($name);
    public function setRole($role);
    public function setAttackDamage($attackDamage);
    public function setAbilityPower($abilityPower);
    public function setHealthPoints($healthPoints);
    public function setManaPoints($manaPoints);
    public function displayStats();
    public function ultimateAbility();
}