<?php 

// Penarikan Data
$path = "C:\laragon\www\web-oop";
// Load Model
require_once $path."/classes/model/Articles.php"; 
$articles = new Articles();

// Menampilkan Data
$berita = $articles->get_articles();
$menu = $articles->get_menu();
// Load View
require_once $path."/classes/view/Main_view.php";

$halaman = new Main_view();
$halaman->set_articles($berita);
$halaman->set_menu($menu);
$halaman->show_body();
?>