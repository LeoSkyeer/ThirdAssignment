<?php

function curl_curl($main_url) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $main_url);
    $data = curl_exec($ch);
    curl_close($ch);
    return $data;
}

$main_url = curl_curl("https://en.wikipedia.org/w/api.php?action=query&titles=Main%20Page&prop=revisions&rvprop=content&format=json");

$pattern_1 = '("title":"([^"]*)")';
$pattern_2 ='("pageid":(\d*))';
preg_match($pattern_1, $main_url, $result_1);
preg_match($pattern_2, $main_url, $result_2);

print_r($result_1[0]);
echo '<br>';
print_r($result_2[0]);
