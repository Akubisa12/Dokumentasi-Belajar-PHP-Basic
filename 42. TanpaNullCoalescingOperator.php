<?php
  // sebelumnya kita tahu bahwa data kosong direpresentasikan dengan data NULL di PHP
  // Dan hal yang paling repot di PHP adalah mengecek apakah sebuah data ada atau tidak dan juga apakah data tersebut isinya NULL atau bukan
  // Biasanya untuk melakukan itu, kita perlu menggunakan pengecekan if statement dengan function isset($variabel)
  // Namun untungnya di PHP ada Null Coalescing Operator menggunakan tanda ??
  $data = [];
  if(isset($data['action'])){
    $action = $data['action'];
  }else{
    $action = 'Nothing';
  }
  echo $action;
?>