#!/usr/bin/php
<?PHP

if ($argc != 2) {
    exit("Incorrect Parameters\n");
}
else {
    $str = $argv[1];
    $nbs = "0123456789";
    $ops = "+-*/%";
    for ($i = 0; $i < strlen($str); $i++) {
        if (strpos($nbs, $str[$i])) {
            if ($op == NULL)
                $nb1 = $nb1.$str[$i];
            else
                $nb2 = $nb2.$str[$i];
        }
        elseif (strpos($ops, $str[$i]))
            $op = $str[$i];
        elseif ($str[$i] == " ")
            continue;
        else
            exit("Syntax Error\n");
    }
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