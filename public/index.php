<?php
$id = $_GET['id'];

if($id == '') {
  $halaman = 'Main';
} else {
  $halaman = 'Article';
}

// $controller = "../classes/controller/".$halaman.".php";
// echo $controller;

require_once "../classes/controller/".$halaman.".php";