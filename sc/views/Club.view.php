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
class ClubView{
    public function render($data){
    $no = 1;
    $dataClub = null;
    foreach($data as $val){
        list($id, $nama, $tahun_dibuat) = $val;
        $dataClub .= "<tr>
                <td>" . $no++ . "</td>
                <td>" . $nama . "</td>
                <td>" . $tahun_dibuat . "</td>
                <td>
                <a href='club.php?id_hapus=" . $id . "' class='btn btn-danger''>Hapus</a>
                <a href='./templates/editClub.php?id=" . $id . "&nama=" . $nama . "&tahun_dibuat=" . $tahun_dibuat . "' class='btn btn-success''>Ubah</a>
                </td>
                </tr>";
        }
        $tpl = new Template("templates/club.html");
        $tpl->replace("DATA_TABEL", $dataClub);
        $tpl->write();
    }
}