<?php

header('Content-Type: application/json; charset=utf-8');

require_once('db.php');

$id_prodi = $_POST['id_prodi'];
$id_fakultas = $_POST['id_fakultas'];
$nama_prodi = $_POST['nama_prodi'];

$sql = "INSERT INTO prodi SET
            id_prodi = '$id_prodi',
            id_fakultas = '$id_fakultas',
            nama_prodi = '$nama_prodi'
            ";
$result = $DB->query($sql);
if($result){
    echo json_encode('Sukses Menambahkan Prodi');
}else{
    echo json_encode($DB->error);
}