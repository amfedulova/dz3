<?php
$xml=simplexml_load_file("data.xml");
echo "Purchase oder №: " .$xml[PurchaseOrderNumber]."</p>";
echo "Oder date: " .$xml[OrderDate]."</p>";
foreach ($xml->Address as $address){
    echo "Billing/Shipping: " .$address[Type]."</p>" ;
    echo "Client name: " .$address->Name."</p>" ;
    echo "Street: " .$address->Street."</p>" ;
    echo "City: " .$address->City."</p>" ;
    echo "State: " .$address->State."</p>" ;
    echo "Zip: " .$address->Zip."</p>" ;
    echo "Country: " .$address->Country."</p>" ;
}
foreach ($xml->Items->Item as $item){
    echo "Part №: " .$item[PartNumber]."</p>" ;
    echo "Product: " .$item->ProductName."</p>" ;
    echo "Quantity: " .$item->Quantity."</p>" ;
    echo "Price: " .$item->USPrice."</p>" ;
    echo "Comment: " .$item->Comment."</p>" ;
    echo "Ship date: " .$item->ShipDate."</p>" ;
}
echo $xml->DeliveryNotes;
/*echo "<pre>";
print_r($xml);*/

/**
 * Created by PhpStorm.
 * User: Анна
 * Date: 23.08.2016
 * Time: 13:15
 */