<?php

$xmlPath = './data.xml';
$xml = simplexml_load_file($xmlPath);



$attrs = $xml->attributes();
echo "Номер заказа: ".$attrs['PurchaseOrderNumber'] ."<br> ". "Дата заказа: ". $attrs['OrderDate'].'<br/><br/>';




foreach ($xml->Address as $info) {
    echo "Доставка: ".$info[source].'<br>'."Доставка(доп): ".$info[Type]."<br>"."Имя: ".$info->Name. "<br>"."Улица: ".$info->Street."<br>"."Город: ".$info->City."<br>"."Штат: ".$info->State."<br>"."Индекс: ".$info->Zip."<br>"."Улица: ".$info->Country."<br><br>";
}

echo "Дополнительные просьбы: ".$xml->DeliveryNotes.'<br><br>';

foreach ($xml->Items->Item as $info) {
    echo "Номер: ".$info[PartNumber]."<br>"."Название продукта : ".$info->ProductName."<br>"."Количество: " .$info->Quantity."<br>"."Цена: ".$info->USPrice."$".'<br>'."Коментарий: ".$info->Comment."<br>"."Дата доставки: ".$info->ShipDate ."<br>";
    echo "<br>";
}
