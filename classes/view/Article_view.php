<?php 
$path = "C:\laragon\www\web-oop";
require_once $path."/classes/view/Template.php";

class Article_view extends Template {
    function show_main(){
        echo '<main id="main">';
        $this->show_article($this->id);
        $this->show_sidebar();
        echo '</main>';
      }
    
      function show_article($id){
        echo'<div id="content" class="content">';
        $article = $this->articles[$id];
        echo '<article class="card" id="'.$article['id'].'">';
        echo '<h2 class="article-title">'.$article['judul'].'</h2>';
        echo '<p><img src="'.$article['gambar'].'" alt="'.$article['judul'].'">';
        echo $article['isi']. '</article>';
        echo '</div>';
      }
}
?>