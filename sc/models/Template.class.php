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
class Template
{
    var $filename = '';
    var $content = '';

    function __construct($filename='')
    {
        $this->filename = $filename;

        $this->content = implode('', @file($filename));
    }

    function clear()
    {
        $this->content = preg_replace("/DATA_[A-Z|_|0-9]+/", "", $this->content);
    }

    function write()
    {
        $this->clear();
        print $this->content;
    }

    function getContent()
    {
        $this->clear();
        return $this->content;
    }

    function replace($old = '', $new = '')
    {
        if (is_int($new)) {
            $value = sprintf("%d", $new);
        }
        elseif (is_float($new)) {
            $value = sprintf("%f", $new);
        }
        elseif (is_array($new)) {
            $value = '';

            foreach ($new as $item) {
                $value .= $item. ' ';
            }
        }
        else {
            $value = $new;
        }
        $this->content = preg_replace("/$old/", $value, $this->content);
    }
}
?>