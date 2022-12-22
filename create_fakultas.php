<?php

use LDAP\Result;

header('content-type: application/json; charset=utf-8');

require_once 'db.php';

// $sql = "SELECT * FROM fakultas";
// $result = $DB->query($sql);

// $data = [];
// if ($result->num_rows > 0) {
//     while ($row = $result->fetch_assoc()) {
//         array_push($data, [
//             'id_fakultas' => $row['id_fakultas'],
//             'nama_fakultas' => $row['nama_fakultas'],
//         ]);
//     }
// }

// echo json_encode($data);
// $DB->close();


$id_fakultas = $_POST['id_fakultas'];
$nama_fakultas = $_POST['nama_fakultas'];

$sql = "INSERT INTO fakultas SET
        id_fakultas = '$id_fakultas',
        nama_fakultas = '$nama_fakultas'
    ";
$result = $DB->query($sql);
if ($result) {
    echo json_encode("Sukses Menambahkan fakultas");
} else {
    echo json_encode($DB->error);
}
$DB->close();

?>