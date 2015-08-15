#!/usr/bin/php
<?php
//print "$argc arguments were passed. In order: \n";
//for ($i = 0; $i <= $argc -1; ++$i) {
//    print "$i: $argv[$i]\n";
//}

$skimLinksId = "123X456";
$linksArray = file("./links.txt");

echo "url | encoded url | skimlink" . PHP_EOL;
foreach($linksArray as $link) {
    $url = "http://go.redirectingat.com/?id=" . $skimLinksId . "&url=" . urlencode($link);
    curlThis($url);
}
    // http://go.redirectingat.com/?id=123X456&url=http%3A%2F%2Famazon.com%2F


function curlThis($url) {
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    $result = curl_exec($ch);
    $info = curl_getinfo($ch);
    echo $url . " | " . $info['url'] . " | " . $info['http_code'] . PHP_EOL;
    curl_close($ch);
}

?>