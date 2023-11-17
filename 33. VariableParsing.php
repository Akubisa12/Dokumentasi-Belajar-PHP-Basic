<?php
  // khusus string menggunakan double quote atau heredoc, kita bisa menggunakan karakter $ untuk mengakses variabel
  // ini memudahkan ketika kita ingin menggabungkan string dengan variabel
  // cara penggunaannya adalah menggunakan karakter $ lalu diikuti dengan nama variabelnya.
  $name = "Jessen";
  echo "Hello $name, Selamat Belajar" . PHP_EOL;
?>