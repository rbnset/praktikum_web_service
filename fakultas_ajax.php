<?php
include "db.php";
$query = "SELECT * FROM fakultas";
$result = mysqli_query($DB, $query);
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Fakultas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
</head>

<body>
    <div class="container mb-5">
        <div class="row">
            <div class="col-12">
                <a href="fakultas.html">Fakultas</a>
                <a href="prodi.html">Prodi</a>
                <a href="mahasiswa.html">Mahasiswa</a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-4">
                <div class="card">
                    <div class="card-header">
                        <h3>Form Fakultas</h3>
                    </div>
                </div>
                <div class="card-body">
                    <form id="form-fakultas">
                        <div class="mb-3">
                            <label class="form-label">ID Fakultas</label>
                            <input name="fakultas_id" class="form-control" required />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nama Fakultas</label>
                            <input name="nama_fakultas" class="form-control" required />
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-8">
                <div class="card">
                    <div class="card-header">
                        <h3>Tabel Fakultas</h3>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID Fakultas</th>
                                    <th>Nama Fakultas</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody id="table-fakultas"></tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script type="text/javascript">
        //ketik dibawah ini
        //request web service menggunakan ajax

        //fungsi untuk menampilkan data fakultas
        function showFakultas() {
            $.ajax({
                url: "fakultas_ajax.php",
                type: "GET",
                success: function(data) {
                    var data = JSON.parse(data);
                    var html = "";
                    for (var i = 0; i < data.length; i++) {
                        html += "<tr>";
                        html += "<td>" + data[i].fakultas_id + "</td>";
                        html += "<td>" + data[i].nama_fakultas + "</td>";
                        html += "<td><button class='btn btn-danger' onclick='deleteFakultas(" + data[i].fakultas_id + ")'>Delete</button></td>";
                        html += "</tr>";
                    }
                    $("#table-fakultas").html(html);
                }
            });
        }
    </script>
</body>

</html>