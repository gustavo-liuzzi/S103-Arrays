<?php

$x = array (10, 20, 30, 40, 50,60);
var_dump($x);
unset($x[3]);
array_values($x);
var_dump($x);

?>