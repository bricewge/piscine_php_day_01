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

foreach($argv as $i => $arg) {
    if ($i != 0) {
        $split = ft_split($arg);
        foreach($split as $j => $word){
            if (strlen ($word) == 0) {
                unset($arg[$j]);
                echo $word." ";
            }
            $result[] = $word;
        }
    }
}
sort($result);
foreach($result as $word)
    echo $word."\n";
?>