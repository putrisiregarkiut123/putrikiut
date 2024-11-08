alert("Selamat datang di Perpustakaan Universitas Syiah Kuala!");

document.getElementById("welcome").innerHTML="PERPUSTAKAAN UNIVERSITAS SYIAH KUALA"

console.log(document); 


var totalBuku = 5;
var bukuDipinjam = 2;
var bukuTersedia = totalBuku - bukuDipinjam;

// Tampilkan hasil perhitungan operator di elemen dengan id 'hasil-perhitungan'
document.getElementById("hasil-perhitungan").innerHTML = 
    "Total buku: " + totalBuku + "<br>" +
    "Buku yang dipinjam: " + bukuDipinjam + "<br>" +
    "Buku yang tersedia: " + bukuTersedia;

    // Implementasi Struktur Kondisi
    if (bukuTersedia > 5) {
        document.getElementById("hasil-kondisi").innerHTML = 
            "buku tersedia sisa 3.";
    } else if (bukuTersedia > 2) {
        document.getElementById("hasil-kondisi").innerHTML = 
            "Stok buku mulai menipis.";
    } else {
        document.getElementById("hasil-kondisi").innerHTML = 
            "Tidak ada buku yang tersedia.";
    }
    // Implementasi Struktur Perulangan
    var daftarBuku = ["Berbagai teknik mengupload Web", "The rainbow and women in love", "10 menit panduan microsoft exchange 5.0"];
    var daftarTeks = "<ul>";
    for (var i = 0; i < daftarBuku.length; i++) {
        daftarTeks += "<li>" + daftarBuku[i] + "</li>";
    }
    daftarTeks += "</ul>";

    // Tampilkan daftar buku hasil perulangan
    document.getElementById("hasil-perulangan").innerHTML = daftarTeks;

    document.getElementById('show-books-btn').addEventListener('click', function() {
        var bookTable = document.getElementById('book-table-container');
        if (bookTable.style.display === 'none') {
            bookTable.style.display = 'block'; // Menampilkan tabel buku
        } else {
            bookTable.style.display = 'none'; // Menyembunyikan tabel buku jika sudah ditampilkan
        }
    });
    
    