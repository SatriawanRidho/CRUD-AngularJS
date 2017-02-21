<?php

// connect database
include "connect.php";

// tampung id dari url
$id = isset($_GET['id']) ? $_GET['id'] : NULL;

// cek jika var id tidak kosong
if($id) {

// delete
$sql = $db->prepare("DELETE FROM kota WHERE id = :id");
$sql->bindParam(':id', $id);
$sql->execute();

}
