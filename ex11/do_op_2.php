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
        if (strpos($nbs, $str[$i]) !== FALSE) {
            if ($op == NULL)
                $nb1 = $nb1.$str[$i];
            else
                $nb2 = $nb2.$str[$i];
        }
        elseif (($str[$i] == '-' or $str[$i] == '+')
                and $nb1 == NULL and $op == NULL)
            $nb1 = $str[$i];
        elseif ($op == NULL and strpos($ops, $str[$i]) !== FALSE)
            $op = $str[$i];
        elseif (($str[$i] == '-' or $str[$i] == '+')
                and $nb2 == NULL and $op != NULL)
            $nb2 = $str[$i];
        elseif ($str[$i] == " ")
            continue;
        else
            exit("Syntax Error\n");
    }
    if (strlen($nb1) <= 0 or strlen($nb2) <= 0 or strlen($op) != 1
        or ($nb2 === "0" and ($op == "/" or $op == "%")))
        exit("Syntax Error\n");
    if ($op == "+")
        echo $nb1 + $nb2."\n";
    else if ($op == "-")
        echo $nb1 - $nb2."\n";
    else if ($op == "*")
        echo $nb1 * $nb2."\n";
    else if ($op == "/")
        echo $nb1 / $nb2."\n";
    else if ($op == "%")
        echo $nb1 % $nb2."\n";
}

?>