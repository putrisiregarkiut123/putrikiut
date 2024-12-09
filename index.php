
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Perpustakaan Putri</title>
</head>
<style>
    body {
               background-color: #d6eaf8; /* Warna hijau muda */
               color: black; /* Warna teks default */
               font-family: "Times New Roman", Times, serif; /* Mengatur font menjadi Times New Roman */
           }
           h1, h2, h3, h4, h6, h7 {
               color: black; /* Warna teks untuk heading */
               font-family: Times New Roman, Times, serif; /* Mengatur font heading */
           }
           a {
               color: blue; /* Warna tautan */
           }
           table {
               border-collapse: collapse;
               width: 100%;
           }
           table, th, td {
               border: 1px solid black;
           }
           th, td {
               padding: 8px;
               text-align: center;
               font-family: Times New Roman, Times, serif; /* Mengatur font di tabel */
           }
           button, input[type="submit"] {
               background-color: #28a745; /* Warna hijau tombol */
               color: white;
               border: none;
               padding: 10px 20px;
               cursor: pointer;
               font-family: Times New Roman, Times, serif; /* Mengatur font pada tombol */
           }
           button:hover, input[type="submit"]:hover {
               background-color: #218838; /* Warna hijau tombol saat hover */
           }
           img {
               max-width: 100%; /* Agar gambar tidak melebihi lebar container */
               height: auto; /* Mempertahankan rasio aspek gambar */
           }
           iframe {
               display: block;
               margin: 0 auto; /* Memusatkan iframe */
           }
           /* tambahkan CSS untuk dropdown */
           .dropdown {
               position: relative;
               display: inline-block;
           }
           .dropdown-content {
               display: none;
               position: absolute;
               background-color: #f9f9f9;
               min-width: 160px;
               box-shadow: 0px 8px 16px 0px rgba(37, 231, 205, 0.2);
               z-index: 1;
           }
           .dropdown-content a {
               color: black;
               padding: 12px 16px;
               text-decoration: none;
               display: block;
           }
           .dropdown-content a:hover {background-color: #1093bb}
           .dropdown:hover .dropdown-content {
               display: block;
           }
           .dropdown:hover .dropbtn {
               background-color: #3e8e41;
           }
           .dropbtn {
               background-color: #4CAF50;
               color: rgb(3, 63, 45);
               padding: 16px;
               font-size: 16px;
               border: none;
               cursor: pointer;
           }
           .dropbtn:hover {
               background-color: #3e8e41;
           }
       
   
           body {
               background-color: #d6eaf8; /* Warna hijau muda */
               color: black; /* Warna teks default */
               font-family: "Times New Roman", Times, serif; /* Mengatur font menjadi Times New Roman */
           }
           h1, h2, h3, h4, h6, h7 {
               color: black; /* Warna teks untuk heading */
               font-family: Times New Roman, Times, serif; /* Mengatur font heading */
           }
           body {
               font-family: 'Arial', sans-serif;
               background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
               margin: 0;
               padding: 0;
               min-height: 100vh;
           }
   
           h1 {
               text-align: center;
               color: #2c3e50;
               padding: 30px 0;
               background-color: rgba(255, 255, 255, 0.8);
               box-shadow: 0 2px 4px rgba(0,0,0,0.1);
               margin: 0 0 40px 0;
               font-size: 2.5em;
               text-transform: uppercase;
               letter-spacing: 2px;
           }
           a {
               color: blue; /* Warna tautan */
           }
           table {
               border-collapse: collapse;
               width: 100%;
           }
           table, th, td {
               border: 1px solid black;
           }
           th, td {
               padding: 8px;
               text-align: center;
               font-family: Times New Roman, Times, serif; /* Mengatur font di tabel */
           }
           button, input[type="submit"] {
               background-color: #28a745; /* Warna hijau tombol */
               color: white;
               border: none;
               padding: 10px 20px;
               cursor: pointer;
               font-family: Times New Roman, Times, serif; /* Mengatur font pada tombol */
           }
           button:hover, input[type="submit"]:hover {
               background-color: #218838; /* Warna hijau tombol saat hover */
           }
           img {
               max-width: 100%; /* Agar gambar tidak melebihi lebar container */
               height: auto; /* Mempertahankan rasio aspek gambar */
           }
           iframe {
               display: block;
               margin: 0 auto; /* Memusatkan iframe */
           }
           /* tambahkan CSS untuk dropdown */
           .dropdown {
               position: relative;
               display: inline-block;
           }
           .dropdown-content {
               display: none;
               position: absolute;
               background-color: #f9f9f9;
               min-width: 160px;
               box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
               z-index: 1;
           }
           .dropdown-content a {
               color: black;
               padding: 12px 16px;
               text-decoration: none;
               display: block;
           }
           .dropdown-content a:hover {background-color: #f1f1f1}
           .dropdown:hover .dropdown-content {
               display: block;
           }
           .dropdown:hover .dropbtn {
               background-color: #3e8e41;
           }
           .dropbtn {
               background-color: #4CAF50;
               color: white;
               padding: 16px;
               font-size: 16px;
               border: none;
               cursor: pointer;
           }
           .dropbtn:hover {
               background-color: #3e8e41;
           }
           @media (min-width: 992px) {
               .dropdown:hover .dropdown-menu {
                   display: block;
                   margin-top: 0;
               }
           }
           .custom-navbar {
               background-color: #ffffff;
               box-shadow: 0 2px 10px rgba(0,0,0,0.1);
               padding: 10px 0;
           }
   
           .navbar-brand {
               font-weight: bold;
               font-size: 1.5rem;
               color: #333;
           }
   
           .navbar-nav .nav-link {
               color: #555;
               font-weight: 500;
               padding: 0.5rem 1rem;
               transition: color 0.3s ease;
           }
   
           .navbar-nav .nav-link:hover,
           .navbar-nav .nav-link:focus {
               color: #28a745;
           }
   
           .navbar-nav .active > .nav-link {
               color: #28a745;
           }
   
           .dropdown-menu {
               border: none;
               box-shadow: 0 8px 24px rgba(0,0,0,0.12);
               border-radius: 8px;
               padding: 0.5rem 0;
               min-width: 200px;
               animation: fadeIn 0.3s ease;
           }
   
           @keyframes fadeIn {
               from { opacity: 0; transform: translateY(-10px); }
               to { opacity: 1; transform: translateY(0); }
           }
   
           .dropdown-item {
               padding: 10px 20px;
               color: #555;
               transition: all 0.3s ease;
               position: relative;
           }
   
           .dropdown-item:hover,
           .dropdown-item:focus {
               background-color: #f8f9fa;
               color: #28a745;
               padding-left: 25px;
           }
   
           .dropdown-item:hover::before {
               content: '•';
               position: absolute;
               left: 10px;
               color: #28a745;
           }
   
           .dropdown-divider {
               margin: 0.5rem 0;
               border-top: 1px solid #e9ecef;
           }
   
           .form-control {
               border-radius: 20px;
               border: 1px solid #ced4da;
               padding: 0.375rem 1rem;
           }
   
           .btn-outline-success {
               border-radius: 20px;
               padding: 0.375rem 1rem;
               transition: all 0.3s ease;
           }
   
           .btn-outline-success:hover {
               background-color: #28a745;
               border-color: #28a745;
               color: #ffffff;
           }
   
           @media (min-width: 992px) {
               .dropdown:hover .dropdown-menu {
                   display: block;
                   margin-top: 0;
               }
           }
   
           @media (max-width: 991.98px) {
               .navbar-nav {
                   padding-top: 1rem;
               }
               .navbar-nav .nav-item {
                   margin-bottom: 0.5rem;
               }
               .dropdown-menu {
                   border: none;
                   box-shadow: none;
                   padding-left: 1rem;
               }
           }
           @media (max-width: 768px) {
            .navbar-brand {
                font-size: 1.2rem;
            }
            .container-fluid {
                padding: 10px;
            }
            h1 {
                font-size: 1.8em;
                padding: 20px 0;
            }
            iframe {
                width: 100%;
                height: auto;
            }
            .dropdown-item {
                font-size: 0.9rem;
            }
        }
        /* Additional responsive styling */
        @media (max-width: 576px) {
            h1 {
                font-size: 1.5em;
            }
            h3, .dropdown-item {
                font-size: 0.8em;
            }
            .dropdown-menu {
                min-width: 150px;
            }
        }
       </style>
   </style>
   <body>
       <nav class="navbar navbar-expand-lg navbar-light bg-light">
           <div class="container-fluid">
             <a class="navbar-brand" href="index.html">UNSYIAH</a>
             <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
             </button>
             <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                 <li class="nav-item">
                   <a class="nav-link active" aria-current="page" href="index.html">HOME</a>
                 </li>
                 <li class="nav-item dropdown">
                   <a class="nav-link dropdown-toggle" href="/layanan" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                     TUGAS
                   </a>
                   <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                     <li><a class="dropdown-item" href="modul1.html">Modul 1</a></li>
                     <li><a class="dropdown-item" href="modul2.html">Modul 2</a></li>
                     <li><a class="dropdown-item" href="modul3.html">Modul 3</a></li>
                     <li><a class="dropdown-item" href="modul4.html">Modul 4</a></li>
                     <li><a class="dropdown-item" href="modul5.html">Modul 5</a></li>
                     <li><a class="dropdown-item" href="modul6.html">Modul 6</a></li>
                     <li><a class="dropdown-item" href="modul7.html">Modul 7</a></li>
                     <li><a class="dropdown-item" href="modul8.html">Modul 8</a></li>
                     <li><hr class="dropdown-divider"></li>
                   </ul>
                 </li>
                 <li class="nav-item dropdown">
                   <a class="nav-link dropdown-toggle" href="/layanan" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                     LAYANAN
                   </a>
                   <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                     <li><a class="dropdown-item" href="formuliranggota.html">Formulir Anggota</a></li>
                     <li><a class="dropdown-item" href="peminjaman.html">Peminjaman Buku</a></li>
                     <li><a class="dropdown-item" href="perpanjangan.html">Perpanjangan Pengembalian</a></li>
                   </ul>
                 </li>
               <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="pameran buku.html">PAMERAN BUKU</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="daftar.php">DAFTAR</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="login.php">LOGIN</a>
                    </li>
               </ul>
            </div>
         </nav>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
   <head>
      <body>
        <p class="text-gray-600">
            Welcome To My Website Putri 
            <style type="text/css">
               li{color:rgb(18, 18, 20)}
               li{margin-left: 20px;}
           </style>
           <div class="container">
            <h1 id="welcome" class="text-center my-4">PERPUSTAKAAN UNIVERSITAS SYIAH KUALA</h1>
            <div class="grid-cols-2">
                <img src="https://d3listrik.usk.ac.id/wp-content/uploads/2023/02/UPT_Perpustakaan_Unsyiah.jpg" alt="Library Image" class="img-fluid">
            <div class="col-md-6"></div>
               <p>Perpustakaan Universitas Syiah Kuala (USK) didirikan pada tahun 1970, pada saat itu masih menggunakan gedung fakultas Ekonomi. Perpustakaan berstatus sebagai Unit Pelayanan Teknis (UPT) pada tahun 1980. Pada tahun 1994 gedung perpustakaan memiliki gedung sendiri yang didirikan berdampingan dengan Kantor Pusat Administrasi (KPA) USK. Sejak April 1994, dengan Surat Keputusan Rektor No. 060 tahun 1994, pendayagunaan UPT Perpustakaan USK ditingkatkan, yaitu dengan menyatukan semua perpustakaan yang ada di lingkungan USK di dalam satu wadah UPT Perpustakaan.Saat ini, terhitung Januari 2022 Perpustakaan Universitas Syiah Kuala memiliki koleksi sebanyak 75.114 judul atau 122.339 eksemplar. Koleksi tersebut tersebar dalam berbagai jenis, meliputi buku teks, terbitan berkala (jurnal), laporan akhir, skripsi, tesis, disertasi, majalah, buku referensi, laporan penelitian, CD-ROM dan dokumentasi. Koleksi pada perpustakaan juga tidak hanya terbatas pada koleksi tercetak saja, namun perpustakaan juga memiliki koleksi yang elektronik, perpustakaan juga telah melanggan e-book dan e-journal pada beberapa penerbit internasional.</p>
            </div>
               <h3 class="mt-4">VISI:</h3>
                   <p>Menjadi pusat informasi ilmiah yang menginspirasi dan memotivasi pencapaian visi dan misi Perpustakaan Universitas Siyah Kuala</p>
   
                   <div class="grid grid-cols-2 gap-2 mb-2">
                       <h3 class="mt-4">MISI:</h3>
                       <ol>
                           <li style="color: rgb(14, 13, 13);margin-left: 20px;">Menjaga Relevansi Koleksi dengan Kebutuhan Pemustaka</li>
                           <li style="color: rgb(17, 16, 16);margin-left: 20px;">Menciptakan Loyalitas Pemustaka dengan Layanan Prima</li>
                           <li style="color: rgb(17, 16, 16);margin-left: 20px;">Menumbuhakan motivasi dan inspirasi pemustaka untuk berinovasi dan berkreatifitas dengan fasilitas dan kegiatan dalam bidang literasi informasi</li>
                           <li style="color: rgb(17, 16, 16);margin-left: 20px;">Mengembangkan repository lokal konten yang open akses</li>
                           <li style="color: rgb(17, 16, 16);margin-left: 20px;">Mengembangkan kompetensi sumber daya manusia yang bersertifikasi</li>
                           <li style="color: rgb(17, 16, 16);margin-left: 20px;">MMengembangkan aplikasi teknologi informasi perpustakaan sesuai standar</li>
                           <li style="color: rgb(17, 16, 16);margin-left: 20px;">Tata kelola manajemen perpustakaa sesuai standar menjalin kerjasama dengan institusi lain dalam pengembangan layanan dan operasional perpustakaan serta tanggung jawab sosial kepada masyarakat dalam bidang literasi informasi</li>
                       </ol>
                   </div>
               </div>
           </p>
           <p><h-6 style="color:black;"><center>Berikut adalah Video Profil Perpustakaan Universitas Syiah Kuala</center></h6></p>
           
           <iframe width="560" height="315" src="https://www.youtube.com/embed/ZufYAQL9HOo?si=Vaw3iOjLWFdKTDmH" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
           
           <p style="margin-bottom: 50px">
               
           <p><h-7 style="color:black;"><center> Berikut adalah lagu Di akhir Perang-Nadin Amizah</center></h-7></p>
           <center><audio controls></audio></center>
           <source src="music/Nadin Amizah - Di Akhir Perang (Official Music Video).mp3" alt="audio/mpeg">
           </audio>
      </body>

<script src="main.js"></script>
</body>
</html>
