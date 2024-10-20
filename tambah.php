<?php
// Memanggil file koneksi.php
include_once("koneksi.php");
session_start();

// Perkondisian untuk mengecek apakah tombol submit sudah ditekan.
if (isset($_POST['Submit'])) {
    // Variable untuk menampung data $_POST yang dikirimkan melalui form.
    $email = $_POST['email'];
    $nama = $_POST['nama'];
    $institusi = $_POST['institusi'];
    $country = $_POST['country'];
    $addres = $_POST['addres'];

    // Syntax untuk menambahkan data ke table mahasiswa
    $result = mysqli_query($con, "insert into registration(email,nama,institusi,country,addres) values ('$email','$nama','$institusi','$country','$addres')");

    // Menampilkan pesan jika data berhasil disimpan.
    //echo "Data berhasil disimpan. <a href='index.php'>View Users</a>";
    if ($result) {
        if($_SESSION['username']==""){
            header("Location: berhasil.php");
            exit();
        }
        else if($_SESSION['username']=="admin"){
            header("Location: daftarPeserta.php");
            exit();
        }
    } else {
        echo "Gagal menyimpan data.";
    }
    exit();
}
?>
<html>

<head>
    <title>Tambah data peserta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f8f9fa;
        }   
        .card {
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .form-control {
            margin-bottom: 20px;
            padding: 10px;
            border-radius: 10px;
            border: 1px solid;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class ="row justify-content-center">
            <div class ="col-md-6">
                <div class ="card">
                    <h1 class="text-center">Pendaftaran Seminar</h1>
                    <form action="tambah.php" method="post" name="form1">
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nama</label>
                            <input type="text" name="nama" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Institusi</label>
                            <input type="text" name="institusi" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Kota</label>
                            <input type="text" name="country" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Alamat</label>
                            <input type="text" name="addres" class="form-control" required>
                        </div>
                        <div class="d-grip gap-2">
                            <input type="submit" class="btn btn-primary" name="Submit" value="Daftar">
                        </div>
                    </form>
                </div>
                </div>
        </div>
    </div>
</body>

</html>
