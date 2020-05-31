<?php

class Basic_Vest implements Vest
{
    public function AbsorbDamage($damage)
    {
        return $damage / 2;
    }
}
