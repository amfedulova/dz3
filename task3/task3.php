<?php
for($i=0; $i<50; $i++) {
    $array[$i] = rand(0,100);
}
echo "<pre>";
print_r($array);
$filecsv=fopen("massiv.csv","w");
    fputcsv($filecsv,$array);
    fclose($filecsv);
    echo "File has been successfully written";
$csvFile=fopen("massiv.csv","r");
if ($csvFile) {
    $res = array();
    while (($csvData = fgetcsv($csvFile, 500, ",")) !== false) {
        $res= $csvData;
    }
}
print_r($res);
foreach ($res as $key => $value)
{
    if ($key % 2 == 0)
    $even[]=$value;
    else
    $odd[]=$value;
}
echo array_sum($even);
/**
 * Created by PhpStorm.
 * User: Анна
 * Date: 23.08.2016
 * Time: 18:21
 */