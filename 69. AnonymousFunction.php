<?php
/*
  Anonymous function adalah function tanpa nama, di PHP disebut juga dengan Closure
  Anonymous function biasanya digunakan sebagai argument atau sebagai value di variable
  Anonymous function membuat kita bisa mengirim function sebagai argument di function lainnya
 */

 /*
  Bagian anonymous function pada kode tersebut adalah pada baris 1, yaitu pada deklarasi fungsi   sayHello(). Fungsi sayHello() adalah fungsi anonim, karena tidak memiliki nama. Fungsi ini hanya  memiliki satu argumen variabel $name, yang harus berupa string. */
  $sayHello = function (string $name){
    echo "Hello $name".PHP_EOL;
  };
  
  $sayHello("JESSEN","strtolower");
  $sayHello("joni","strtoupper");
?>