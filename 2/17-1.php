<pre>
<?php

$i = PHP_INT_MAX;
var_dump($i);
$i ++;
var_dump($i); // 型がfloatになる
echo "\n";
//
$i = PHP_INT_MAX * -1;
var_dump($i);
$i --;
var_dump($i);
$i --;
var_dump($i); // 型がfloatになる
