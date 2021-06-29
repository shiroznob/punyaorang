<?php
    // Membuat Koneksi.
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $koneksi = mysqli_connect($host, $user, $pass);

    if(!$koneksi) {
        die ("Gagal menyambungkan koneksi: ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
    }

    // Membuat Database.
    // $db = "CREATE DATABASE pengunjung";
    // $sql = mysqli_query($koneksi, $db);
    // if(!$sql) {
    //     die("Query error: ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
    // }

    //memilih database pengunjung
    $result = mysqli_select_db($koneksi, "pengunjung");
    if(!$result){
        die ("Gagal memilih database: ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
    }

    //Membuat tabel pembelian
    // $query = "CREATE TABLE pembelian(
    //     ID INT(3) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    //     Nama VARCHAR(20) NOT NULL,
    //     Jumlah INT(100) NOT NULL
    // )";
    // $sql = mysqli_query($koneksi, $query);
    // if(!$sql) {
    //     die("Tabel pembelian gagal dibuat: ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
    // } else {
    //     echo "Tabel Berhasil dibuat";
    // }
?>