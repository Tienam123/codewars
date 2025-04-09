<?php

function getDivisors(int $num):array | string
{
    $flag = false;
    $divisors = [];
    if ($num <= 1) {
        return 'Число простое';
    }

    for ($i = 2; $i < $num; $i++) {
        if ($num % $i == 0) {
            $divisors[] = $i;
            $flag = true;
        }
    }
    if ($flag) {
        return $divisors;
    } else {
        return "$num is not prime";
    }
}


var_dump(getDivisors(13));