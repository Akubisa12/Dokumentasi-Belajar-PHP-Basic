<?php
  /* 
  PHP sangat flexible dalam pembuatan function
  Di PHP kita bebas membuat function dimanapun, bisa di dalam if statement, di dalam function, dan sebagainya
  Namun perlu diingat, jika kode function yang belum dieksekusi oleh PHP, maka function tersebut tidak akan bisa digunakan
  Tidak seperti pada bahasa pemrograman lain yang harus ada aturan lokasi dimana membuat function
  */
  $a = false;
  if($a){
    function hello(){
      echo "Hello".PHP_EOL;
    }
  }
  hello(); //tidak akan menghasilkan apapun karena $a bernilai false kecuali kita ganti $a dengan nilai true
?>