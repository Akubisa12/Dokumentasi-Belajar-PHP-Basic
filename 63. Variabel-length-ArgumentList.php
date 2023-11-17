<?php
  /*
  Variable-length argument list merupakan kemampuan dimana kita bisa membuat sebuah parameter yang menerima banyak value
  Variable-length argument list secara otomatis akan membuat argument tersebut menjadi array, namun kita tidak perlu manual mengirim array ke functionnya
  Variable-length argument list hanya bisa dilakukan di argument posisi terakhir
  Untuk membuat variable-length argument list, kita bisa menggunakan tanda … (titik tiga kali) sebelum nama argument
   */

  //  Mendeklarasikan fungsi sumAll() dengan satu argumen variabel $values. Argumen ini dapat menerima nilai variabel jumlah variabel.
  function sumAll(...$values){

    // Inisialisasi variabel $total dengan nilai 0. Variabel ini akan digunakan untuk menyimpan hasil penjumlahan semua nilai.
    $total = 0;

    /* Perulangan foreach() untuk mengulangi setiap nilai dalam argumen $values.
      Setiap kali perulangan, nilai variabel $value akan disimpan dalam variabel $value.
      Variabel $total kemudian akan ditambahkan dengan nilai variabel $value.*/
    foreach($values as $value){
      $total += $value;
    }

    /*Menampilkan hasil penjumlahan semua nilai.
    Hasil penjumlahan akan ditampilkan dalam format "Total [daftar nilai] = [hasil penjumlahan]". */
    echo "Total".implode(" + ",$values)."=$total".PHP_EOL;
  }

  /*
  Memanggil fungsi sumAll() dengan dua argumen variabel.
  Argumen pertama adalah daftar nilai numerik.
  Argumen kedua adalah array numerik.
   */
  sumAll(10,20,30,40,50,60,70,80,90,100);
  sumAll(...[80,90,100]);
?>