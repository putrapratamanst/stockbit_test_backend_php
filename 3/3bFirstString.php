<?php

function findFirstStringInBracket($str)
{
    preg_match('#\((.*?)\)#', $str, $match);
    if(strlen($str) < 3 || $match == NULL)
        return json_encode("");

    $stringOutsideBracked = $match[1];
    $array    = explode(" ", $stringOutsideBracked);
    return json_encode(reset($array));
}

echo findFirstStringInBracket("asfasd(ssd sd )");
