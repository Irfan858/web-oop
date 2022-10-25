<?php
class Halaman{
  protected $menu;
  public $header;
  public $articles;
  public $sidebar;
  public $footer;
  protected $id;

  function show_menu(){
    echo '<nav>
          <ul>';
         
          foreach($this->menu as $item){
            
            echo '<li><a href="'.$item['link'].'">'.$item['text'].'</a></li>';
          }
    echo '</ul>
        </nav>';    
  }

  function show_header(){
    echo '<header>';
     $this->show_menu(); 
    echo '<div class="jumbotron">
        <h1>Planet & Bulan</h1>
        <p>Hiasi gelap malam bersama bintang di langit</p>
      </div>
    </header>';
  }

  function show_main(){
    echo '<main id="main">';
    if ($this->id == '' || $this->id >= count($this->articles)) {
      $this->show_articles();
    }
    else {
      $this->show_article($this->id);
    }
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

  function show_article($id){
    echo'<div id="content" class="content">';
    $article = $this->articles[$id];
    echo '<article class="card" id="'.$article['id'].'">';
    echo '<h2 class="article-title">'.$article['judul'].'</h2>';
    echo '<p><img src="'.$article['gambar'].'" alt="'.$article['judul'].'">';
    echo $article['isi']. '</article>';
    echo '</div>';
  }

  function show_sidebar(){
    echo '<aside>
    <article>
      <h3>About</h3>
      <img src="assets/html.png" alt="pasfoto">
      <div class="aside-text">
        <p>Dibuat Menggunakan HTML</p>
        <p>dibantu oleh : CSS</p>
        <p>Topik Kegiatan: Object Oriented PHP</p>
      </div>
    </article>
    </aside>
    <a id="tblTop" href="#top" title="Scroll ke atas">
    <svg class="arrow up" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
      viewBox="5 0 50 80" xml:space="preserve">
      <polyline fill="none" stroke="#FFFFFF" stroke-width="8" stroke-linecap="round" stroke-linejoin="round" points="
          0.375, 35.375 28.375, 0.375 58.67, 35.375 " />
    </svg>
  </a>';
  }

  function show_footer(){
    echo '<footer>Praktikum Pemrograman Web Lanjutan&#169; 2022, Universitas Dharmas Indonesia</footer>';
  }

  function show_body(){
    echo '<!DOCTYPE html>
    <html lang="en">
    
    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Praktikum OOP PHP</title>
      <link rel="stylesheet" href="assets/style.css">
      <script src="assets/script.js" type="text/javascript" defer></script>
    </head>
    
    <body id="top">';
        $this->show_header();
        $this->show_main();
        $this->show_footer();        
    echo '</body>

    </html>';
  }

  function set_menu($menu){
    $this->menu = $menu;
  }

  function set_articles($articles){
    $this->articles = $articles;
  }

  public function set_id_article($id)
  {
    $this->id = $id;
  }
}