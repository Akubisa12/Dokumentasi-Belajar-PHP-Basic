<?php
  $orang = [
    "First" => "Devon",
    "Second" => "Jessen",
    "Third" => "Kafka"
  ];
  foreach($orang as $key => $value){
    echo "$key : $value".PHP_EOL;
  }
  $buah = [
    "buah1" => "Mangga",
    "buah2" => "Apel",
    "buah3" => "Semangka"
  ];
  foreach($buah as $a => $macamBuah) {
    echo "$a : $macamBuah".PHP_EOL;
  }
?>