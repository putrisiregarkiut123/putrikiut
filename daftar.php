<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Perpustakaan Putri</title>
</head>
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
                 <a class="nav-link active" aria-current="page" href="daftar.html">DAFTAR</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link active" aria-current="page" href="login.html">LOGIN</a>
                     </li>
            </ul>
         </div>
      </nav>
      <form action="" method="post">
 <label>nama:</label>
 <input type="text" name="username"><br><br>
 <label>Password:</label>
 <input type="password" name="password"><br><br>
 <label>Email:</label>
 <input type="email" name="email"><br><br>
 <label>Jurusan:</label>
 <input type="jurusan" name="jurusan"><br><br>
 <label>Alamat</label>
 <input type="alamat" name="alamat"><br><br>
 <input type="submit" name="daftar" value="Daftar">
</form>
      <?php

if (isset($_POST['daftar'])) {
 $username = $_POST['username'];
 $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
 $email = $_POST['email'];
 $nama = $_POST['nama'];

 $query = "INSERT INTO users (username, password, email, nama) VALUES ('$username', '$password', '$email', '$nama')";
 $result = $conn->query($query);

 if ($result) {
  echo "Pendaftaran berhasil!";
 } else {
  echo "Pendaftaran gagal!";
 }
}
?>


    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>