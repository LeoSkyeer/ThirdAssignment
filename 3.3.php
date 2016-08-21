<?php

function write(){
    $array = array();
    for ($x = 1; $x <= 51; $x++) {
        array_push($array, rand(0,100));
    }
    $fp = fopen('file.csv', 'w');
    fputcsv($fp, $array);
    fclose($fp);
}
write();


function culc(){
    $handle = fopen('file.csv', 'r');
    $data = fgetcsv($handle, 200, ",");
    $a = array_sum($data);
    echo $a;
    fclose($handle);
}
culc();
