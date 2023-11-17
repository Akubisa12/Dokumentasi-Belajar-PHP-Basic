<?php
  // Dalam PHP If adalah salah satu kunci yang digunakan untuk percabangan
  // Percabangan artinya kita bisa mengeksekusi kode program tertentu ketik suau kondisi terpenuhi 
  // Hampir di semua bahasa pemrograman mendukung if expresssion
  $nilai = 70;
  $absen = 98;
  if($nilai >= 75 && $absen >= 75 ){ // false & false = false 
    // kedua kondisi harus bernilai true
    echo "Anda Lulus!!!". PHP_EOL;
  }
?>