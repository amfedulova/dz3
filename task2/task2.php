<?php
unlink("output.json");
unlink("output2.json");
$f=fopen("output.json","w");
$goods=array(
    "brand"=>array(
        "CK"=>"jeans",
        "Lacoste"=>"polo",
        "Furla"=>"handbag"),
    "categories"=>array(
        "accessories"=>"ring",
        "shoes"=>"low shoe")
);
fwrite($f,$jsonString=json_encode($goods, JSON_UNESCAPED_UNICODE));
    $jsonPath="./output.json";
    $jsonFile=file_get_contents($jsonPath);
    $jsonArray=json_decode($jsonFile, JSON_UNESCAPED_UNICODE);
$a=rand(1,2);
echo $a;
if ($a==1){
    $f2=fopen("output2.json","w");
            $jsonArray[sizes]=array(
            "xs"=>"very small",
            "s"=>"small",
            "M"=>"middle",
            "l"=>"large");
    fwrite($f2,$jsonArray=json_encode($jsonArray, JSON_UNESCAPED_UNICODE));
}
else {
    $f2=fopen("output2.json","w");
    fwrite($f2,$jsonArray=json_encode($jsonArray, JSON_UNESCAPED_UNICODE));
};
$jsonArray1=json_decode(file_get_contents("./output.json"), JSON_UNESCAPED_UNICODE);
$jsonArray2=json_decode(file_get_contents("./output2.json"), JSON_UNESCAPED_UNICODE);
$result=array_diff_assoc($jsonArray2,$jsonArray1);
echo "<pre>";
print_r($result);
/**
 * Created by PhpStorm.
 * User: Анна
 * Date: 23.08.2016
 * Time: 15:51
 */