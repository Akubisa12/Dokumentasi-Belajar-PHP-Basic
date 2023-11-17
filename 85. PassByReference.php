<?php
// Selanjutnya yang bisa dilakukan di PHP adalah, mengirim data ke function dengan reference
    function increment(int $value){
        $value ++;
    }
    $counter = 1;
    increment($counter);
    echo $counter .PHP_EOL;
?>