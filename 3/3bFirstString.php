<?php

function findFirstStringInBracket($str)
{
    $response = "";
    if (strlen($str) > 3) {
        preg_match('#\((.*?)\)#', $str, $match);
        $stringOutsideBracked = $match[1];
        $array    = explode(" ", $stringOutsideBracked);
        $response = reset($array);
    }

    return json_encode($response);
}

echo findFirstStringInBracket("o(nly) get data in bracket");
