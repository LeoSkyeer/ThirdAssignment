<?php
$movies = [
    [
        "title" => "Rear Window",
        "director" => "Alfred Hitchcock",
        "year" => 1954],
    [
        "title" => "Full Metal Jacket",
        "director" => "Stanley Kubrick",
        "year" => 1987],
    [
        "title" => "Mean Streets",
        "director" => "Martin Scorsese",
        "year" => 1973]
];

function into_json($movies){
    $fp =fopen("output.json", "w");
    fwrite($fp, json_encode($movies));
    fclose($fp);
}

into_json($movies);

function change_json(){
    $arr = json_decode(file_get_contents('output.json'));
    foreach ($arr as &$arr2) {
        foreach ($arr2 as &$value) {
            if (is_numeric($value)) {
                $value += 13;
            }
        }
    }

    $fp = fopen('output2.json', 'w');
    fwrite($fp, json_encode($arr));
    fclose($fp);
}

change_json($movies);

function different_json()
{
    $json1 = json_decode(file_get_contents('output.json'), true);
    $json2 = json_decode(file_get_contents('output2.json'), true);

    echo "Изменения: ",'<br>';
    echo "В массиве №1 в файле output1.json: ";
    print_r(array_diff($json1['0'], $json2['0']));
    echo '<br>';
    echo "В массиве №1 в файле output2.json: ";
    print_r(array_diff($json2['0'], $json1['0']));
    echo '<br><br>';
    echo "В массиве №2 в файле output1.json: ";
    print_r(array_diff($json1['1'], $json2['1']));
    echo '<br>';
    echo "В массиве №2 в файле output2.json: ";
    print_r(array_diff($json2['1'], $json1['1']));
    echo '<br><br>';
    echo "В массиве №3 в файле output1.json: ";
    print_r(array_diff($json1['2'], $json2['2']));
    echo '<br>';
    echo "В массиве №3 в файле output2.json: ";
    print_r(array_diff($json2['2'], $json1['2']));
    echo '<br><br>';
}
different_json();