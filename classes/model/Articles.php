<?php 
class Articles {

    protected $articles;
    protected $menu;

    public function __construct()
    {
        $this->menu = [
            // ['link'=>'#top','text'=>'Home'],
            // ['link'=>'#mars','text'=>'Mars'],
            // ['link'=>'#moon','text'=>'Moon'],
            // ['link'=>'#saturn','text'=>'Saturn']
        ];
    }

    public function get_articles($con) {
      $berita = array();
      $data = $con->query('SELECT id, title as judul, content as isi, image as gambar FROM article');
      while($row = $data->fetch_assoc()) {
        $berita[] = $row;
      }

      return $berita;    
    }

    public function get_article($id) {
        return $this->articles[$id];
    }

    public function get_menu() {
        return $this->menu;
    }
}
