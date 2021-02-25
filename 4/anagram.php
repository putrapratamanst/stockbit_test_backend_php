<?php

function getAnagram()
{
    $map = [];
    $data = ['kita', 'atik', 'tika', 'aku', 'kia', 'makan', 'kua'];
    foreach ($data as $key => $value) {
        $strSplit = str_split($value);
        sort($strSplit);
        $strSplit         = implode("", $strSplit);
        $map[$strSplit][] = $value;
    }

    return json_encode(array_values($map));
}

echo getAnagram();
