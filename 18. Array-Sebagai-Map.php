<?php
  // Pada baris pertama, kita membuat array bernama $novi dengan tiga elemen yang masing-masing memiliki kunci dan nilai:
  // "id" => "novi89"
  // "name" => "Novi"
  // "age" => 33
  $novi = array(
    "id" => "novi89",
    "name" => "Novi",
    "age" => 33
  );
  // Di baris berikutnya, kita membuat array lain yang disebut $joko dengan tiga elemen yang serupa dengan $novi:
  // "id" => "joko23"
  // "name" => "Joko"
  // "age" => 22
  $joko = array(
    "id" => "joko23",
    "name" => "Joko",
    "age" => 22
  );
  // Kemudian, kita menggunakan var_dump($novi); untuk mencetak isi array $novi, yaitu informasi tentang orang bernama "Novi" dengan ID "novi89" dan usia 33.
  var_dump($novi);
  // Selanjutnya, kita menggunakan var_dump($joko); untuk mencetak isi array $joko, yang berisi informasi tentang orang bernama "Joko" dengan ID "joko23" dan usia 22.
  var_dump($joko);
?>