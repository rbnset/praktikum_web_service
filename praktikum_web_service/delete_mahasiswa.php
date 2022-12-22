<?php

header('Content-Type: application/json; charset=utf-8');

require_once('db.php');

$nim = $_POST['nim'];

$sql = "DELETE FROM mahasiswa WHERE nim = '$nim'";

$result = $DB->query($sql);
if($result){
    echo json_encode('Sukses Menghapus Mahasiswa');
}else{
    echo json_encode($DB->error);
}