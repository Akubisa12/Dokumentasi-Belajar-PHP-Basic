<?php
/*
PHP mendukung konsep yang bernama variable function
Variable function adalah kemampuan memanggil sebuah function dari value yang terdapat di sebuah variable
Untuk menggunakan variable function, kita bisa secara langsung memanggil $namaVariable(), jika ingin menambahkan argument, kita bisa menggunakan $namaVariable(argument)
 */
function foo(){
  echo "FOO".PHP_EOL;
}
function bar(){
  echo "BAR".PHP_EOL;
}

$functionName = "foo";
$functionName();

$functionName = "bar";
$functionName();
?>