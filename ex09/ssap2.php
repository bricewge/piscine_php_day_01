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

function strange_sort($a, $b) {
    $order = "abcdefghijklmnopqrstuvwxyz0123456789 !\"#$%&'()*+,-./:;<=>?@[\]^_`{|}~";
    $len = max(strlen($a), strlen($b));
    $i = -1;
    while (++$i < $len) {
        if ($a[$i] == NULL)
            return -1;
        elseif ($b[$i] == NULL)
            return 1;
        $a_pos = stripos($order, $a[$i]);
        $b_pos = stripos($order, $b[$i]);
        if ($a_pos != $b_pos) {
            return ($a_pos < $b_pos ? -1 : 1);
        }
    }
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

usort($result, "strange_sort");
foreach($result as $word)
    echo $word."\n";

?>