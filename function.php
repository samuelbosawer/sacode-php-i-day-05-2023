<?php
$servername = "localhost";
$username = "root";
$password = "";

// Koneks Database 
$koneksi = mysqli_connect($servername, $username, $password);

if(!$koneksi)
{
    echo "<br>Koneksi Database Gagal";
}



// $query = "CREATE database db_05_01";
// error_reporting(0);
// if(mysqli_query($koneksi, $query)){
//     echo "Buat Database berhasil";
// }else{

//     echo "Buat Database Gagal". mysqli_error($koneksi)
// ;    }

// echo "<br>Koneksi berhasil";