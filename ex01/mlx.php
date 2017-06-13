#!/usr/bin/php
<?PHP

$limit=80;
$times=1000;
$char="X";

while ($times > 0) {
    if ($times > $limit) {
        $nb_char = $limit;
    } else {
        $nb_char = $times;
    }
    echo str_repeat($char, $nb_char)."\n";
    $times = $times - $nb_char;
}
?>