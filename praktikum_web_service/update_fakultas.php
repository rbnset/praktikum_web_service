<?php

header('Content-Type: application/json; charset=utf-8');

require_once('db.php');

$id_fakultas = $_POST['id_fakultas'];
$nama_fakultas = $_POST['nama_fakultas'];

$sql = "UPDATE fakultas SET
            nama_fakultas = 'nama_fakultas'
        WHERE
            id_fakultas = 'id_fakultas'
            ";
$result = $DB->query($sql);
if($result){
    echo json_encode('Sukses Mengubah Fakultas');
}else{
    echo json_encode($DB->error);
}