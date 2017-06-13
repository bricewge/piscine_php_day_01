#!/usr/bin/php
<?PHP

if (count($argv) != 4) {
    echo "Incorrect Parameters\n";
}
else {
    $nb1 = trim($argv[1]);
    $op = trim($argv[2]);
    $nb2 = trim($argv[3]);
    if ($op == "+")
        echo $nb1 + $nb2."\n";
    else if ($op == '-')
        echo $nb1 - $nb2."\n";
    else if ($op == '*')
        echo $nb1 * $nb2."\n";
    else if ($op == '/')
        echo $nb1 / $nb2."\n";
    else if ($op == '%')
        echo $nb1 % $nb2."\n";
}
?>