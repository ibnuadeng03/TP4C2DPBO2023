# DESAIN DAN PEMROGRAMAN BERORIENTASI OBJEK 
```
Mata Kuliah Pemrograman Berorientasi Objek (IK290).
Mata Kuliah Wajib Kurikulum (MKWK) Semester Genap.
Fakultas Pendidikan Matematika dan Ilmu Pengetahuan Alam.
Departement Of Computer Science Education. 
Program Studi Ilmu Komputer.

(2658) ROSA ARIANI SUKAMTO, S.T., M.T.
       NIP. 19810918 200912 2 003
       Penata III/c
       Lektor
```
> IBNU ADENG KURNIA - 2101769 - KOM4C2 - © 2023 Univ. Pendidikan Indonesia

## Pert-10. *Software Architectural Pattern: MVC - Model View Controller*
*Repositori ini dibuat sebagai dokumentasi fortofolio pengerjaan Tugas Praktikum 4 (TP4), kemudian setelah selesai pengerjaan ini mahasiswa diharapkan :*
```
a. Mahasiswa mampu memahami konsep Object Oriented Programming (OOP) digunakan untuk penyelesaian permasalahan-permasalahan yang ada.
b. Mahasiswa mampu memahami perbedaan antara Class dan object, implementasi class dan object, method dalam berbagai bahasa (C++, java, PHP, pyhton) serta type data nya.
c. Kasus-kasus MVC (Model View Controller) dengan menggunakan bahasa PHP. 
d. Mahasiswa mampu memahami konsep MVC (Model View Controller) dalam Pemrograman Berorientasi Objek.
e. Mahasiswa mampu memahami dan mengimplementasikan MVC (Model View Controller) dengan menggunakan bahasa pemrograman PHP.
```

> Saya Ibnu Adeng Kurnia NIM 2101769 mengerjakan Tugas Praktikum 4 (TP4) dalam mata kuliah Desain dan Pemrograman Berorientasi Objek C2 2023
	untuk keberkahan-Nya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. 
	Aamiin.

*Design ini disusun dan/atau digunakan hanya untuk lingkungan sendiri.
	Tidak untuk menjadi konsumsi/kepentingan umum.
	Hanya untuk melengkapi tugas DPBO 2023.*


## Petunjuk Pengerjaan Soal.
Buatlah program menggunakan konserp MVC yang diimplementasikan kedalam bahasa pemrograman PHP dengan spesifikasi sebagai berikut:
- Download Kode PHP pada link berikut ini [Disini](https://drive.google.com/file/d/1nBMAyhAOgDJvvMYqLhJ9qZRo14nN9XLM/view)
- Buatlah database berdasarkan kode tersebut
- Ubah arsitektur project tersebut menggunakan MVC
- Tambahkan tabel baru (1 - 2) yang berelasi dengan tabel yang sudah ada (Tabel dan Relasinya dibebaskan)
- Buat CRUD dari tabel  baru tersebut
- Masukkan kode yang telah Anda buat pada repository GitHub milik Anda masing-masing dengan nama repository **"TP4...DPBO2023"** (..., diisi sesuai kelas C1/C2) yang diset Public, kemudian kumpulkan tautan/link repository GitHub tersebut [Disini](https://forms.gle/rvb1hKxbQVuYNbhKA) 
- Hanya program pada branch main yang akan diperiksa.
- Tidak perlu menggunakan UML selama desain dan penamaan file masih jelas serta mengikuti contoh kode yang diberikan.
- Jika waktu pengumpulan sudah habis dan Anda ingin mengupdate kode program, update pada branch lain karena mengupdate branch Main setelah waktu pengumpulan berakhir maka program tidak akan diperiksa.
- File README berisi desain program, penjelasan alur, dan dokumentasi saat program dijalankan (screenshot/screen record).
- Anda dapat mengumpulkan hingga batas waktu terakhir yakni pada hari **Jumat, 02 Juni 2023 M / 13 Dzulkaidah 1444 H Pukul 23.59 WIB** (Extended).

## Bahasa Pemrograman Yang Dipakai :
- [X] [*Hypertext Preprocessor* atau PHP](https://www.hostinger.co.id/tutorial/apa-itu-php/) : bahasa penulisan skrip *open-source* yang banyak digunakan dalam pemrograman atau pengembangan website *(web development)*. Bahasa ini umumnya dijalankan dalam komunikasi sisi server, dan saat ini didukung oleh hampir semua sistem.

## Selayang Pandang *Model View Controller (MVC)* :
![Grafis_3-1024x538](https://github.com/ibnuadeng03/TP4C2DPBO2023/assets/100753882/189a9257-2e50-4216-a78f-281ecdb42116)
Model View Controller atau yang dapat disingkat MVC adalah sebuah pola arsitektur dalam membuat sebuah aplikasi dengan cara memisahkan kode menjadi tiga bagian yang terdiri dari:
| *Bagian* | *Deskripsi* |
| --- | --- |
| Model | Bagian yang bertugas untuk menyiapkan, mengatur, memanipulasi, dan mengorganisasikan data yang ada di database.|
| View | Bagian yang bertugas untuk menampilkan informasi dalam bentuk *Graphical User Interface (GUI)*.|
| Controller | Bagian yang bertugas untuk menghubungkan serta mengatur model dan view agar dapat saling terhubung.|

Dalam memproses program yang dirancang, MVC memiliki alur kerja (workflow) sebagai berikut:
| *Tahap* | *Deskripsi* |
| --- | --- |
| 1 | Pada awalnya, view akan melakukan request data untuk ditampilkan pada interface pengguna |
| 2 | Request tersebut akan diterima oleh controller untuk diteruskan kepada model untuk diproses lebih lanjut |
| 3 | Model akan mencari data sesuai dengan request dari view pada database yang terhubung dengan aplikasi |
| 4 | Setelah data ditemukan dan diolah, model akan memberikan data tersebut terhadap controller |
| 5 | Controller mengambil data hasil pengolahan model dan mengaturnya di bagian view untuk ditampilkan pada interface pengguna |

Selain itu diperoleh manfaat dari MVC diantaranya: 
| *Manfaat* |
| --- |
| Proses pengembangan website lebih efisien |
| Testing jadi lebih mudah |
| Bug lebih cepat dan mudah ditangani |
| Maintenance lebih mudah |

Selengkapnya Anda dapat mengetahui lebih jelas dan detail terkait MVC [disini](https://www.dicoding.com/blog/apa-itu-mvc-pahami-konsepnya/)


## Tools :
| *Tools* | *Deskripsi* |
| --- | --- |
| [*Visual Studio Code/Sublime*/Notepad++](https://www.gramedia.com/best-seller/text-editor-terbaik-programmer/) | Sebuah code editor gratis yang bisa dijalankan di perangkat desktop berbasis Windows, Linux, dan MacOS. |
| [XAMPP](https://www.jogjahost.co.id/blog/xampp-adalah/)  | Sebuah software yang menjalankan peran sebagai *local web server/localhost*. XAMPP dikembangkan oleh *Apache Friends*. *Apache Friends* sendiri merupakan proyek nirlaba yang bertujuan untuk mempromosikan server web *Apache*. Selain dari itu terdapat juga di dalamnya MariaDB, PHP, Perl, dan lainnya. |
| [*Graphical User Interface* (GUI)](https://bakai.uma.ac.id/2022/09/12/apa-itu-graphical-user-interface-bagaimana-cara-kerjanya/) | *Graphical User Interface* (GUI) adalah komponen sistem visual interaktif untuk aplikasi personal komputer. Menurut **Computer Hope**, GUI menampilkan objek yang mampu memunculkan isu serta merepresentasikan aksi asal pengguna. Menggunakan adanya GUI, kita bisa mengetahui bahwa apa yang kita input telah diterima dan responnya ditampilkan secara visual. GUI dapat terlihat dari perubahan rona, ukuran, visibilitas, serta sejenisnya saat terjadi sebuah hubungan. |
| [Google Chrome](https://dianisa.com/pengertian-google-chrome/) | Browser web lintas *platform* yang dikembangkan oleh Google. *Chrome* pertama kali dirilis pada tanggal 2 September 2008. Namun pada awal perilisan Google Chrome, *Software* ini hanya dapat digunakan untuk sistem operasi Microsoft Windows serta kemudian porting ke Linux, macOS, iOS, dan juga Android. |

## Requirements : 
+ XAMPP (diharapkan versi yang terbaru, disarankan 7 keatas)
+ Web Browser

## Desain dan Alur Program :
Program ini dibuat idenya berangkat dari sebuah organisasi dimasyarakat desa kampung halaman tempat saya lahir yakni Majalaya. Sehingga saya jadikan tema untuk tugas ini. Tentunya sekaligus untuk memperkenalkan kepada luar bahwa tentunya ada yang menjadi ciri khas dari setiap desa khusunya desa Majakerta, Majalaya atau disebuah wilayah atau perwilayahan.
- User dapat melihat `Data Peserta Keanggotaan Organisasi Masyarakat` pada halaman `Home` dan tentunya pada halaman tersebut dapat melakukan : 
  + Create/Tambah Data : Nama, Surel, No.Telp dan Organisasi Masyarakat, Klik Kirim sebagai Terminasi
  + Read : Membaca Data
  + Update : Melakukan perubahan terhadap data Nama, Surel, No.Telp dan Organisasi Masyarakat, Klik Ubah sebagai Terminasi
  + Delete : Hapus Data
- User dapat melihat `Data Organisasi Masyarakat` pada halaman `Organisasi` dan tentunya pada halaman tersebut dapat melakukan :
  + Create/Tambah Data : Nama Organisasi, Tahun Didirikan, Klik Kirim sebagai Terminasi
  + Read : Membaca Data
  + Update : Melakukan perubahan terhadap data Nama Organisasi, Tahun Didirikan, Klik Ubah sebagai Terminasi
  + Delete : Hapus Data
 
## Dokumentasi Running Program
### a. Tampilan Menu Home (Data Peserta Keanggotaan Organisasi Masyarakat)
| Menu | Foto Tangkapan Layar |
| --- | --- |
| `Home` | ![AP](/ss/1.png "1") |
|        | ![AP](/ss/2.png "2") |

### b. Tampilan Menu Organisasi (Data Organisasi Masyarakat)
| Menu | Foto Tangkapan Layar |
| --- | --- |
| `Organisasi` | ![AP](/ss/3.png "3") |
|              | ![AP](/ss/4.png "4") |

### Video Selengkapnya :
https://github.com/ibnuadeng03/TP4C2DPBO2023/assets/100753882/006ff092-60ec-4a6d-8a88-38e4267b52ad




### **Catatan**
*Jika terjadi hal kesalahan teknis/program error atau lainnya, dengan hormat mohon untuk melakukan validasi kepada saya, karena tentunya hal tersebut dimungkinkan terjadi diluar prakiraan/dugaan. Demikian, harap untuk menjadi maklum. Atas Perhatian dan Kerjasamanya diucapkan terima kasih*

Barakallahu Fiikum.

**Hatur Nuhun.**

**Majalaya, 20 Mei 2023 M / 29 Syawal 1444 H.**

#### [Copyright © 2023. IBNU ADENG KURNIA.](https://me-qr.com/id/entry/vcard/MjuIan4)
###### Univ. Pendidikan Indonesia.
###### All Rights Reserved.




![creativecommands-](https://github.com/ibnuadeng03/TP3C2DPBO2023/assets/100753882/496f7f8e-4888-4bb2-8cd5-11f70c2425c8)

Ciptaan disebarluaskan di bawah [Lisensi Creative Commons Atribusi-NonKomersial-TanpaTurunan 4.0 Internasional.](http://creativecommons.org/licenses/by-nc-nd/4.0/)
