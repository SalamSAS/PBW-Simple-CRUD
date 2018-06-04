<?php
$host = "localhost";
$user = "root";
$pass = "";
$name = "abalabal";
$database = mysql_connect ($host, $user, $pass) or die ("Koneksi Ke Database Gagal");
mysql_select_db ($name, $database) or die ("Tidak ada database yang dipilih");
?>