<?php

class Spell
{
    private $name;
    private $manaCost;
    private $damage;

    public function __construct($name, $manaCost, $damage)
    {
        $this->name = $name;
        $this->manaCost = $manaCost;
        $this->damage = $damage;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getManaCost()
    {
        return $this->manaCost;
    }

    public function getDamage()
    {
        return $this->damage;
    }

    public function cast($caster)
    {
        $caster->dealDamage($this->damage);
    }


}