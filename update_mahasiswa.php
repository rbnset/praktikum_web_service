<?php

header('content-type: application/json; charset=utf-8');
require_once 'db.php';

$nim = $_POST['nim'];
$id_prodi = $_POST['id_prodi'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$telp = $_POST['telp'];

$sql = "UPDATE mahasiswa SET
            id_prodi = '$id_prodi',
            nama = '$nama',
            alamat = '$alamat',
            telp = '$telp'
        WHERE
            nim = '$nim'
        ";
$result = $DB->query($sql);
if ($result) {
    echo json_encode("Sukses Mengubah mahasiswa");
} else {
    echo json_encode($DB->error);
}
?>
