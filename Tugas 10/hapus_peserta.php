<?php

include 'config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM calon_siswa WHERE id=$id";
    $query = mysqli_query($db_connection, $sql);

    if ($query) {
        header('Location: ../list-siswa.php?status=sukses');
    } else {
        exit('Location: ../list-siswa.php?status=gagal');
    }
} else {
    exit('akses dilarang...');
}
