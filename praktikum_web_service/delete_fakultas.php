<?php

header('Content-Type: application/json; charset=utf-8');

require_once('db.php');

$id_fakultas = $_POST['id_fakultas'];

$sql = "DELETE FROM fakultas WHERE id_fakultas = '$id_fakultas'";

$result = $DB->query($sql);
if($result){
    echo json_encode('Sukses Menghapus Fakultas');
}else{
    echo json_encode($DB->error);
}