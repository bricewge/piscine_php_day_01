#!/usr/bin/php
<?PHP

function ft_split($string)
{
    $words = split(" ", $string);

    foreach ($words as $i=>$word){
        if (strlen($word) == 0)
            unset($words[$i]);
    }
    sort($words);
    return ($words);
}
?>