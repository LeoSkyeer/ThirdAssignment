<?php

$xmlPath = './data.xml';
$xml = simplexml_load_file($xmlPath);
$attrs = $xml->attributes();
echo "Номер заказа ".$attrs['PurchaseOrderNumber'] .", ". "Дата заказа". $attrs['OrderDate'].'<br/><br/>';
foreach ($xml as $info) {
    echo $info->Address.'<br'. $info->Country .'<br> '.$info ->City .' - '. $info->State.', '. $info-> Zip .'<br>'.$info->Street.'<br>'.$info->Name.'<br/><br>';
}