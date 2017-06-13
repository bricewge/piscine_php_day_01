#!/usr/bin/php
<?PHP

if ($argv[1] != NULL) {
    $words = split(" ", $argv[1]);

    foreach ($words as $i => $word){
        if (strlen($word) == 0)
            unset($words[$i]);
    }
    $words = array_values($words);
    $words_count = count($words);
    if ($words_count > 0) {
        $first = array_shift($words);
        $words[] = $first;
        foreach($words as $i => $word) {
            if ($i == $words_count -1)
                echo $word."\n";
            else
                echo $word." ";
        }
    }
}
?>