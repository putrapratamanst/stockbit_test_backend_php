<?php

function findFirstStringInBracket($str)
{
    $response = "";

    preg_match('#\((.*?)\)#', $str, $match);
    if(strlen($str) > 3 || $match != NULL) {
        $stringOutsideBracked = $match[1];
        $array    = explode(" ", $stringOutsideBracked);
        $response = reset($array);
    }

    return $response;
}

echo findFirstStringInBracket("()");
