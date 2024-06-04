<?php

class RandomBool
{
    public function GetRandomBool() : bool
    {
        $gen = rand(0, 1);

        if ($gen == 1) {
            return true;
        }
        else
        {
            return false;
        }
    }
}