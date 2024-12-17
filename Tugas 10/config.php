<?php

$server = '127.0.0.1';
$port = '3306';
$username = 'root';
$db_name = 'pweb12';
$password = '';

$db_connection = mysqli_connect($server, $username, $password, $db_name, $port);

if (!$db_connection) {
    die('Koneksi gagal: ' . mysqli_connect_error());
}
