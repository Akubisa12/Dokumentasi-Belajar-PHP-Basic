<?php
// Deklarasi Fungsi factorialLoop
// Fungsi ini bernama factorialLoop dan menerima satu parameter, yaitu $value, yang merupakan nilai untuk menghitung faktorial. Fungsi ini mengembalikan nilai integer.
function factorialLoop(int $value):int{
    // Inisialisasi Variabel $total
    // Variabel $total diinisialisasi dengan nilai 1. Ini akan digunakan untuk menyimpan hasil perhitungan faktorial.
    $total = 1;

    // Perulangan For untuk Menghitung Faktorial
    for($i=1;$i<=$value;$i++){
        // Dalam perulangan for, variabel $i dimulai dari 1 dan diinkrementasi hingga mencapai nilai $value. Setiap kali perulangan dilakukan, nilai $i dikalikan dengan $total. Ini adalah langkah-langkah untuk menghitung faktorial.
        $total *= $i;
    }
    // Pengembalian Hasil Faktorial
    // Setelah perulangan selesai, hasil faktorial disimpan dalam variabel $total, dan nilai tersebut dikembalikan dari fungsi.
    return $total;
}
// Panggilan fungsi factorialLoop dengan argumen 6, dan hasilnya di-cetak menggunakan var_dump. var_dump digunakan untuk mencetak informasi tentang tipe dan nilai dari variabel atau ekspresi.
var_dump(factorialLoop(6))
?>