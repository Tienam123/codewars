<?php

function disemvowel(string $str):string
{
    $listStringToReplace = ['a','e','i','o','u','A','E','I','O','U'];
   return str_replace($listStringToReplace,'',$str);
}

var_dump(disemvowel('This website is for losers LOL!'));