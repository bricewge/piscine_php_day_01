#!/usr/bin/php
<?PHP

function ft_is_sort($array) {
    $unsorted = $array;
    sort($array);
    $diff = array_diff_assoc($unsorted, $array);
    if (count($diff) == 0) {
        return TRUE;
    }
    else
        return FALSE;
}

?>