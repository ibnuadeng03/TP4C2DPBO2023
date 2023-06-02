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

include_once("models/Template.class.php");
include_once("models/DB.class.php");
include_once("controllers/Club.controller.php");

$club = new ClubController();

if (isset($_POST['add'])) {
    //memanggil add
    $club->add($_POST);
}
//mengecek apakah ada id_hapus, jika ada maka memanggil fungsi delete
else if (!empty($_GET['id_hapus'])) {
    //memanggil add
    $id = $_GET['id_hapus'];
    $club->delete($id);
}
else if (isset($_POST['edit'])) {
    $club->edit($_POST);
}
else{
    $club->index();
}

