<?php

$xmlPath = './data.xml';
$xml = simplexml_load_file($xmlPath);
foreach ($xml as $info) {
    echo  $info->Country .'<br> '.$info ->City .' - '. $info->State.', '. $info-> Zip .'<br>'.$info->Street.'<br>'.$info->Name.'<br/><br>';
}