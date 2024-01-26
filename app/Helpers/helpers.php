<?php
    if (! function_exists('formatPrice')) {
        /**
         * formatPrice 
         * 
         * @param mixed $str
         * @return void
         */
        function formatPrice($str) {
            return 'Rp. '.number_format($str,'0','','.');
        }
    }
?>
<!-- 
    di dalam function frmatPrice kita menggunakan fungsi bawaan dari PHP yaitu number_format 
    dimana d dalam fungsi tersebut memiliki 4 parameter kurang leih seperti berikut :
    number_format(angka, angka_dibelakang_koma, pemisah_desimal, pemisah_ribuan);
 -->
<!--
    dari penambahan kode helpers diatas kita menambahkan functino yang bernama formatPrice
    Fungsinya akan dignakan untuk mengubah sebuah nilai integer atau angka menjadi format mata uang yang dipisahkan
    berdasarkan satua menggunakan notasi .
    Dan menambahkan kata Rp. di depannya .Contohnya, jika kita ingin mem-format angka 10000 maka hasilnya akan menjadi Rp. 10000  
-->


<?php
$angka = 10000;
$hasil = formatPrice($angka);
echo $hasil ;
?>
<!--
    number_format(angka, angka_dibelakang_koma, pemisah_desimal, pemisah_ribuan);

    angka > merupakan parameter pertama, parameter ini berisi nilai angka yang akan di format
    angka_dibelakang_koma > parameter ini bersifat opsional dan digunakan untuk meneentukan jumlah angka desimal(angka dibelakang koma)yang dibutuhkan,apabila tidak diisi dianggap sebagai 0
    pemisah_desimal > parameter ini akan berisi tanda untuk dijadikan pemisah angka dsimal, disini bisa kita kosongkan saja 
    pemisah_ribuan > parameter ini yang akan digunakan untuk memisahkan ribuan dengan menggunakan notasi
 -->

 