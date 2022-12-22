<?php

header('Content-Type: application/json; charset=utf-8');

require_once('db.php');

$id_prodi = $_POST['id_prodi'];

$sql = "DELETE FROM prodi WHERE id_prodi = '$id_prodi'";

$result = $DB->query($sql);
if($result){
    echo json_encode('Sukses Menghapus Prodi');
}else{
    echo json_encode($DB->error);
}