<?php
// is string digunakan untuk mengecek apakah variabel tersebut bertipe data string
// is bool digunakan untuk mengecek apakah variabel tersebut bertipe data boolean
// is int digunakan untuk mengecek apakah variabel tersebut bertipe data integer
// is float digunakan untuk mengecek apakah variabel tersebut bertipe data floating point
// is array digunakan untuk mengecek apakah variabel tersebut bertipe data array
// is callable() digunakan untuk mengecek apakah variabel tersebut bertipe data callable
$data = "sample";
var_dump(is_bool($data));
var_dump(is_int($data));
var_dump(is_float($data));
var_dump(is_array($data));
var_dump(is_string($data));
?>