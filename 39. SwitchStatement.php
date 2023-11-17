<?php
  $nilai = "A";
  switch($nilai){
    case "A":
      echo "Anda lolos dengan baik".PHP_EOL;
    break;
    case "B":
    case "C":
      echo "Anda lulus".PHP_EOL;
    case "D":
      echo "Anda tidak lulus".PHP_EOL;
    case "E":
      echo "Anda harus mengulangi".PHP_EOL;
    default:
      echo "Anda Salah Jurusan" . PHP_EOL;
  }
?>