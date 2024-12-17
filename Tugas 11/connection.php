<?php

$host = 'localhost';
$port = '3306';
$username = 'root';
$password = '';
$database = 'pweb';

$connect = mysqli_connect($host, $username, $password, $database, $port);
if (!$connect) {
    exit('Koneksi gagal: '.mysqli_connect_error());
}
