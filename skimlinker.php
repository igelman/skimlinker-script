#!/usr/bin/php
<?php
print "$argc arguments were passed. In order: \n";
for ($i = 0; $i <= $argc -1; ++$i) {
    print "$i: $argv[$i]\n";
}
$linksArray = file("./links.txt");

foreach($linksArray as $link) {
    print $link;
    // http://go.redirectingat.com/?id=123X456&xs=1&url=http%3A%2F%2Famazon.com%2F&xcust=my_user|value5&sref=http%3A%2F%2Fyoursite.com%2Fsomepage.html

    // curl
}

?>