<?php
$data = [1,2,3,4,5,6,7,8,9,10];
// array_map untuk mengubah semua data array dengan callback
var_dump(array_map(fn($data)=>$data*2,$data));
// rsort() digunakan untuk mengurutkan array terbalik
rsort($data);
var_dump($data);
// array_keys digunakan untuk mengambil keys milik array
var_dump(array_keys($data));
// array_values digunakan untuk mengambil semua values milik array
var_dump(array_values($data));
?>