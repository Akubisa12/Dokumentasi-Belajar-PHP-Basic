<?php
 /*
  Sama seperti pada argument, pada return value pun kita bisa mendeklarasikan tipe datanya
  Hal ini selain mempermudah kita ketika membaca tipe data kembalian function, bisa juga digunakan untuk menjaga jangan sampai kita mengembalikan tipe data yang salah di function
  Untuk mendeklarasikan tipe data kembalian function, setelah kurung () kita bisa tambahkan : diikuti tipe data kembaliannya
  */

  function sum(int $first, int $second):int{
    return $first + $second;
  }

  function getFinalValue(int $value){
    if($value >= 80){
      return "A";
    }else if($value >= 70){
      return "B";
    }else if($value >= 60){
      return "C";
    }else if($value >=58){
      return "D";
    }else{
      return "E";
    }
  }
  echo getFinalValue(88);
?>