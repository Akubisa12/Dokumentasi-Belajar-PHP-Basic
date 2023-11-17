<?php
/*
Callback adalah sebuah mekanisme sebuah function memanggil function lainnya sesuai dengan yang diberikan di argument
Hal ini sebenarnya sudah kita lakukan di materi Variable Function dan Anonymous Function
Namun di PHP ada cara lain untuk implementasi callback, yaitu menggunakan tipe data callable
Dan untuk memanggil callback function tersebut, kita bisa menggunakan function call_user_func(callable, arguments)
*/

// Deklarasi Fungsi sayHello:
/*
Fungsi ini mengambil dua parameter. Parameter pertama adalah string $name, yang merupakan nama yang akan disapa. Parameter kedua adalah callable $filter, yang merupakan fungsi atau metode yang akan digunakan untuk memanipulasi nama sebelum disapa.
*/
function sayHello(string $name, 
callable $filter){
    // call_user_func adalah fungsi PHP yang digunakan untuk memanggil fungsi atau metode dengan menggunakan nama fungsi yang disimpan dalam variabel atau array.
    // $filter adalah parameter yang mewakili fungsi atau metode yang akan dipanggil.
    // $name adalah parameter yang akan diteruskan ke fungsi atau metode yang dipanggil.
    $finalName = call_user_func($filter,$name);
    echo "Hello $finalName".PHP_EOL;
}
// Panggilan fungsi pertama menggunakan anonymous function (fungsi tanpa nama) yang akan mengubah nama menjadi huruf besar menggunakan fungsi strtoupper.
sayHello("jessen",function($name)
{return strtoupper($name);});

// Panggilan fungsi kedua menggunakan sintaksis pendek untuk anonymous function (dikenal sebagai arrow function) untuk melakukan hal yang sama, yaitu mengubah nama menjadi huruf besar.
sayHello("jessen",fn($name)=>strtoupper($name));

// Panggilan fungsi ketiga menggunakan nama fungsi string "strtoupper" langsung sebagai argumen $filter. Ini akan bekerja karena strtoupper adalah fungsi yang dapat dipanggil (callable).
sayHello("jessen","strtoupper");

// Panggilan fungsi keempat menggunakan nama fungsi string "strtolower" sebagai argumen $filter. Ini akan mengubah nama menjadi huruf kecil.
sayHello("JESSEN","strtolower");
?>