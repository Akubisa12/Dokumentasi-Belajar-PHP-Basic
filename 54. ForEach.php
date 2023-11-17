<?php 
  /*
  Kadang kita biasa mengakses data array menggunakann perulangan
  Mengakses data array menggunakan perulangan sangat bertele-tele, kita harus membuat counter, lalu mengakses array menggunakan counter yang kita buat
  Namun untungnya, di PHP terdapat perulangan for each, yang bisa digunakan untuk mengakses seluruh data di Array secara otomatis
  */
  $names = ["Andi","Jojo","Joko"];
  // $names as name -> memisalkan setiap item yang berada didalam names. 
  foreach($names as $name){
    echo "Hello $name" . PHP_EOL;
  }
  $buah = ["Apel","Mangga","Jeruk"];
  foreach($buah as $a){
    echo "Nama Buah : $a".PHP_EOL;
  }
  $binatang = ["kambing","sapi","kakatua"];
  foreach($binatang as $kucing){
    echo "Nama buah : $kucing".PHP_EOL;
  }
?>