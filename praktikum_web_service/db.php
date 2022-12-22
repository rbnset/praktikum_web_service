<?php

$servername = "localhost"; //koneksi
$username = "root"; //user mysql
$password = ""; //password mysql
$database = "db_universitass";

$DB = new mysqli($servername, $username, $password, $database);

if ($DB->connect_error) {
  die("Connection failed: " . $DB->connect_error);
}