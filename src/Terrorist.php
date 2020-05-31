<?php

class Terrorist extends Player
{
    protected $name;
    protected $damage = 50;

    public function __construct($name)
    {
        parent::__construct($name);
    }

    public function TakeDamage($damage)
    {
        parent::TakeDamage($damage);
    }

    public function Attack(Player $opponent)
    {
        Show("{$this->GetName()} Dispara a : {$opponent->GetName()}");
        $opponent->TakeDamage($this->damage);
    }
}
