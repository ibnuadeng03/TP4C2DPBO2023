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
include_once("controllers/Members.controller.php");

$members = new MembersController();


if (isset($_POST['add'])) {
    //memanggil add
    $members->add($_POST);
} else if (!empty($_GET['addForm'])) {
    $members->addForm();
} else if (!empty($_GET['editForm'])) {
    $members->editForm($_GET['editForm']);
} else if (!empty($_GET['id_hapus'])) {
    //memanggil add
    $id = $_GET['id_hapus'];
    $members->delete($id);
} else if (isset($_POST['edit'])) {
    //memanggil add
    $members->edit($_POST);
} else {
    $members->index();
}
