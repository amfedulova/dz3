<?php
$url="https://en.wikipedia.org/w/api.php?action=query&titles=Main%20Page&prop=revisions&rvprop=content&format=json";
$curl=curl_init();
    curl_setopt($curl, CURLOPT_HEADER, 0);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
    $response=curl_exec($curl);
    curl_close($curl);
preg_match('#("title":)".*?\"#', $response, $title);
echo "$title[0]<p>";
preg_match('#("pageid":)[\d]+#', $response, $pageid);
echo "$pageid[0]<p>";
/*echo $response;*/
/**
 * Created by PhpStorm.
 * User: Анна
 * Date: 23.08.2016
 * Time: 20:58
 */