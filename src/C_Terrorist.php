<?php

class C_Terrorist extends Player
{
    protected $name;
    protected $damage = 50;
    protected $vest;

    public function __construct($name, Vest $vest = null)
    {
        parent::__construct($name);
        $this->vest = $vest;
    }

    public function TakeDamage($damage)
    {
        if ($this->vest) {
            $damage = $this->vest->AbsorbDamage($damage);
        }
        parent::TakeDamage($damage);
    }

    public function Attack(Player $opponent)
    {
        Show("{$this->GetName()} Dispara a : {$opponent->GetName()}");
        $opponent->TakeDamage($this->damage);
    }   
}