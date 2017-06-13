#!/usr/bin/php
<?PHP

if ($argv[1] != NULL)
{
    $chars = str_split(trim($argv[1]));
    $spaced = 1;
    foreach ($chars as $char) {
        if ($char == " ") {
            if ($spaced == 0)
                $result = $result." ";
            $spaced = 1;
        }
        else {
            $result = $result.$char;
            $spaced = 0;
        }
    }
    if (strlen($result) != 0)
        $result = $result."\n";
    echo $result;
}

?>
