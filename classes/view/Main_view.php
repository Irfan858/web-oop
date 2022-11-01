<?php 
$path = "C:\laragon\www\web-oop";
require_once $path."/classes/view/Template.php";
class Main_view extends Template {
    function show_main(){
        echo '<main id="main">';
        $this->show_articles();
        $this->show_sidebar();
        echo '</main>';
      }
    
      function show_articles(){
        echo'<div id="content" class="content">';
        $i = 0;
        foreach($this->articles as $article){
          echo '<article class="card" id="'.$article['id'].'">';
          echo '<h2 class="article-title">'.$article['judul'].'</h2>';
          echo '<p><img src="'.$article['gambar'].'" alt="'.$article['judul'].'">';
          echo $article['isi']. '<a href="?id='.$i.'" class="readmore">selengkapnya...</a>
          </article>';
          $i++;
        }
        echo '</div>';
    
      }
}
?>