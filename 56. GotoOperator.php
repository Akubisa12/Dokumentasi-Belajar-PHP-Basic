<?php
  /*
  Salah satu fitur yang sebenarnya jarang sekali digunakan di PHP adalah goto operator
  Kenapa jarang digunakan karena jika terlalu banyak menggunakan goto operator, kode program aplikasinya akan mudah membingungkan yang membaca kode nya
  goto adalah fitur dimana kita bisa loncat ke kode program sesuai dengan keinginan kita
  Agar goto bisa loncat ke kode program, kita harus membuat label di php dengan menggunakan nama label lalu diakhiri : (colon)
  */
  goto a;
  a :
  echo "Hello A".PHP_EOL;
?>