#!/usr/bin/php
<?PHP

if ($argc > 1) {
    $value = $argv[1];
    foreach ($argv as $i => $arg) {
        if ($i > 1) {
            $array = explode(":", $arg);
            if (count($array) == 2)
            $dict[$array[0]] = $array[1];
        }
    }
}
    echo $dict[$value]."\n";
?>