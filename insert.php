<?php

// connect database
include "connect.php";

// tampung data dari form input
$data = json_decode(file_get_contents('php://input'));

// cek jika var data tidak kosong
if($data) {

// insert database
$sql = $db->prepare("INSERT INTO kota VALUES('', :nama_kota)");
$sql->bindParam(':nama_kota', $data->nama_kota);
$sql->execute();

}