<?php

header('Content-Type: application/json; charset=utf-8');

require_once('db.php');

$sql = "SELECT * FROM prodi 
            JOIN fakultas ON prodi.id_fakultas = fakultas.id_fakultas";
$result = $DB->query($sql);

$data = [];
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        array_push($data,[
            'id_prodi' => $row['id_prodi'],
            'id_fakultas' => $row['id_fakultas'],
            'nama_fakultas' => $row['nama_fakultas'],
            'nama_prodi' => $row['nama_prodi'],
        ]);
    }
}
echo json_encode($data);
$DB->close();