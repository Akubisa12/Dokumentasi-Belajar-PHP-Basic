<?php 
  // Blok if akan dieksekusi ketika kondisi if bernilai true
  // kadang kita ingin melakukan ekseskusi tertentu jika kondisi if bernilai false
  // Hal ini bisa dilakkan menggunakan else statement
  $nilai = 70;
  $absen = 89;
  if($nilai >= 75 && $absen >= 75){
    echo "Anda Lulus!!!".PHP_EOL;
  }else{
    echo "Anda Tidak Lulus".PHP_EOL;
  }
?>