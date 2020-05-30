<?php

abstract class Player
{
    protected $name;
    protected $hp = 100;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function GetName()
    {
        return $this->name;
    }

    public function SetHP($points)
    {
        $this->hp = $points;
        Show("El Jugador {$this->GetName()} tiene {$this->GetHp()} Puntos de Vida");
    }

    public function GetHp()
    {
        return $this->hp;
    }

    public function TakeDamage($damage)
    {
        $this->SetHP($this->GetHp() - $damage);

        if ($this->GetHp() <= 0 ) {
            $this->EndGame();
        }
    }

    abstract public function Attack(Player $opponent);

    public function EndGame()
    {
        Show("{$this->GetName()} Esta Muerto pal Coño");
        exit();
    }
}
