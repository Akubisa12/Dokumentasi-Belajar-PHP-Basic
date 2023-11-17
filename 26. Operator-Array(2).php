<?php
  $a = [
    "first_name" => "Allouisius",
    "last_name" => "Jessen"
  ];
  $b = [
    "last_name" => "Jessen",
    "first_name" => "Allouisius"
  ];

  var_dump($a == $b); // true jika $a dan $b memiliki value yang sama
  var_dump($a === $b); // true jika $a dan $b memiliki value sama dan posisi sama
?>