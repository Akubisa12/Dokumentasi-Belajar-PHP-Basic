<?php 
  // Di baris pertama, kita mendefinisikan sebuah array bernama $names yang berisi tiga elemen string: "Jessen", "Kurniawan", dan "Desi".
  $names = ["Jessen", "Kurniawan", "Desi"];
  // Kemudian, kita menggunakan var_dump($names[0]); untuk mencetak isi elemen pertama dari array $names, yaitu "Jessen".
  var_dump($names[0]);

  // Di baris berikutnya, kita mengganti nilai elemen pertama dari array $names dari "Jessen" menjadi "Joko" dengan pernyataan $names[0] = "Joko";.
  $names[0]="Joko";
  // Kemudian, kita menggunakan var_dump($names[1]); untuk mencetak isi elemen kedua dari array $names, yang sekarang adalah "Kurniawan".
  var_dump($names[1]);

  // Di baris selanjutnya, kita menggunakan unset($names[1]); untuk menghapus elemen kedua dari array $names, yang awalnya berisi "Kurniawan".
  unset($names[1]);
  // Setelah itu, kita menggunakan var_dump($names); untuk mencetak isi array $names tanpa elemen kedua, sehingga hanya berisi "Joko" dan "Desi".
  var_dump($names);

  // Pada baris terakhir, kita menggunakan $naems[] = "Banu"; yang seharusnya $names[] = "Banu"; (terdapat kesalahan penulisan variabel) untuk menambahkan elemen baru "Banu" ke dalam array $names.
  $names[] = "Banu";
  // Selanjutnya, kita mencetak isi array $names setelah penambahan "Banu" menggunakan var_dump($names);.
  var_dump($names);
  // Terakhir, kita menggunakan var_dump(count($names)); untuk mencetak jumlah elemen dalam array $names, yang sekarang adalah 3 (Joko, Desi, dan Banu).
  var_dump(count($names));
?>