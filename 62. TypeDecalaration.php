<?php
  /* 
  Sama seperti variable, argument di PHP bisa kita masukkan data yang dinamis
  Secara default PHP akan melakukan percobaan konversi tipe data secara otomatis, misal jika kita menggunakan tipe int, tapi kita mengirim string, maka PHP akan otomatis mengkonversi string tersebut menjadi int
  Kadang terlalu dinamis juga menyulitkan jika ternyata kita hanya ingin membuat function yang menggunakan argument dengan tipe data tertentu
  Untungnya di PHP, kita bisa menambahkan type data di argument, sehingga PHP akan melakukan pengecekan ketika kita mengirim value ke function tersebut
  Jika tipe data value tidak sesuai, maka akan terjadi error
  */
  function sum(int $first,int $last){
    $balance = $first + $last;
    echo "Total $first + $last = $balance".PHP_EOL;
  }
  sum("100","100");
  sum(100,100);
  sum(true,false);
  // sum([],[]); //error karena tipe data nya berbeda
?>