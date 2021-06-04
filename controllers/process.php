<?php
include '../models/database.php';
$db = new database();

$action = $_GET['action'];
if($action == "tambah"){
    $db->input($_POST['nama'],$_POST['usia'],$_POST['email']);
    header("location:../views/dashboard/index.php");
}elseif($action == "delete"){
    $db->hapus($_GET['id']);
    header("location:../views/dashboard/index.php");
}elseif($action == "update"){
    $db->input($_POST['nama'],$_POST['usia'],$_POST['email']);
    header("location:../views/dashboard/index.php");
}
