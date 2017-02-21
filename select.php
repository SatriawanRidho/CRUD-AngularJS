<?php

// connect database
include "connect.php";

$id = isset($_GET['id']) ? $db->quote($_GET['id']) : "";

if($id) {
    
// query sql
$sql = $db->prepare("SELECT * FROM kota WHERE id = $id");
$sql->execute();

// fetch
$murid = $sql->fetch(PDO::FETCH_ASSOC);

// encode to json
print json_encode($murid);
    
} else {

// query sql
$sql = $db->prepare("SELECT * FROM kota");
$sql->execute();

// fetch
$murid = $sql->fetchAll(PDO::FETCH_ASSOC);

// encode to json
print json_encode($murid);
       
}