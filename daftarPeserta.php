<?php
// Memanggil file koneksi.php
include_once("koneksi.php");

// Syntax untuk mengambil semua data dari table mahasiswa
$result = mysqli_query($con, "select * from registration where is_deleted='0'");
?>
<html>

<head>
    <title>Halaman Utama</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<body>
    <div class="container my-4">
        <h1 class="text-center">Daftar Peserta</h1>
        <table class="table table-hover">
            <thead class="bg-secondary">
                <tr>
                    <th>Email</th>
                    <th>Name</th>
                    <th>Institusi</th>
                    <th>Kota</th>
                    <th>Alamat</th>
                    <th>Update</th>
                </tr>
            </thead>
            <?php
            while ($user_data = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" . $user_data['email'] . "</td>";
                echo "<td>" . $user_data['nama'] . "</td>";
                echo "<td>" . $user_data['institusi'] . "</td>";
                echo "<td>" . $user_data['country'] . "</td>";
                echo "<td>" . $user_data['addres'] . "</td>";
                echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=
                $user_data[id]'>Delete</a></td></tr>";
            }
            ?>
        </table>
        <a href="tambah.php" class="btn btn-danger">Tambah Data Baru</a>
        <a href="logout.php" class="btn btn-danger">Kembali</a><br /><br />

    </div>
</body>

</html>