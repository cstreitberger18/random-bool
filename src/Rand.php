<?php
namespace Cstreitberger\RandomBool;

class Rand
{
    public function getBool() : bool
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