<?php 
  /*
  Secara default, function itu tidak menghasilkan value apapun, namun jika kita ingin, kita bisa membuat sebuah function mengembalikan nilai
  Dan di dalam block function, untuk menghasilkan nilai tersebut, kita harus menggunakan kata kunci  return, lalu diikuti dengan data yang ingin dihasilkan
  Kita hanya bisa menghasilkan 1 data di sebuah function, tidak bisa lebih dari satu
   */
  function sum(int $first, int $second){
    return $first + $second;
  }

  $total = sum(10,10);
  var_dump($total);
  
  $total = sum(20,20);
  var_dump($total);
?>