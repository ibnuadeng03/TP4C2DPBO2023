<!-- /*  
	Saya Ibnu Adeng Kurnia NIM 2101769 mengerjakan Tugas Praktikum 4 (TP4)
	dalam mata kuliah desain dan pemrograman berorientasi objek C2 2023
	untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. 
	Aamiin.
*/

/*  Design ini disusun dan/atau digunakan hanya untuk lingkungan sendiri.
	Tidak untuk menjadi konsumsi/kepentingan umum.
	Hanya untuk melengkapi tugas DPBO 2023.
*/  -->

<?php
include_once("conf.php");
include_once("models/Club.class.php");
include_once("views/Club.view.php");

class ClubController {
  private $club;

  function __construct(){
    $this->club = new Club(Conf::$db_host, Conf::$db_user, Conf::$db_pass, Conf::$db_name);
  }

  public function index() {
    $this->club->open();
    $this->club->getClub();
    $data = array();
    while($row = $this->club->getResult()){
      array_push($data, $row);
    }

    $this->club->close();

    $view = new ClubView();
    $view->render($data);
  }

  
  function add($data){
    $this->club->open();
    $this->club->add($data);
    $this->club->close();
    
    header("location:club.php");
  }

  function edit($id){
    $this->club->open();
    $this->club->edit($id);
    $this->club->close();
    
    header("location:club.php");
  }

  function delete($id){
    $this->club->open();
    $this->club->delete($id);
    $this->club->close();
    
    header("location:club.php");
  }


}