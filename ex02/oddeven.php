#!/usr/bin/php
<?PHP

while (42) {
    echo "Enter a number: ";
    $input = fgets(STDIN);
    if (strlen($input) == 0) {
        echo "^D\n";
        exit;
    }
    $input = trim($input);

    if (is_numeric($input)) {
        $number = substr($input, -1);
        $number = intval($number);
        if ($number % 2 == 0) {
            echo "The number $input is even\n";
        }
        else {
            echo "The number $input is odd\n";
        }
    }
    else
        echo "'$input' is not a number\n";
}

?>