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
class Club extends DB
{
    function getClub()
    {
        $query = "SELECT * FROM club";
        return $this->execute($query);
    }

    function add($data)
    {
        $nama = $data['tnama'];
        $tahun_dibuat = $data['ttahun_dibuat'];

        $query = " INSERT INTO `club`(`nama`, `tahun_dibuat`) VALUES ('$nama', '$tahun_dibuat')";

        // Mengeksekusi query
        return $this->execute($query);
    }

    function delete($id)
    {

        $query = "delete FROM club WHERE id = '$id'";

        // Mengeksekusi query
        return $this->execute($query);
    }

    function edit($data)
    {
        $nama = $data["tnama"];
        $tahun_dibuat = $data["ttahun_dibuat"];
        $id = $data["id_edit"];

        $query = "update club set nama='$nama', tahun_dibuat='$tahun_dibuat' where id='$id'";

        // Mengeksekusi query
        return $this->execute($query);
    }
}
