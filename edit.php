<?php
// Memanggil file koneksi.php
include_once("koneksi.php");

// Perkondisian untuk mengecek apakah tombol submit sudah ditekan.
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $email = $_POST['email'];
    $nama = $_POST['nama'];
    $institusi = $_POST['institusi'];
    $country = $_POST['country'];
    $addres = $_POST['addres'];

    // Syntax untuk mengupdate data user berdasarkan id
    $result = mysqli_query($con, "update registration set email = '$email', nama = '$nama', institusi = '$institusi', country = '$country', addres = '$addres' where id =$id");

    // Redirect ke index.php
    header("Location: daftarPeserta.php");
}
?>
<?php
// Menampilkan data berdasarkan data yang kita pilih.

// Mengambil id dari url
$id = $_GET['id'];

// Syntax untuk mengambil data berdasarkan id
$result = mysqli_query($con, "SELECT * FROM registration WHERE id='$id'");
while ($user_data = mysqli_fetch_array($result)) {
    $email = $user_data['email'];
    $nama = $user_data['nama'];
    $institusi = $user_data['institusi'];
    $country = $user_data['country'];
    $addres = $user_data['addres'];
}
?>
<html>

<head>
    <title>Edit Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class ="row justify-content-center">
            <div class="col-md-6">
                <h1 class="text-center">Edit Data</h1>
                <form name="update_peserta" method="post" action="edit.php">
                    <label for="email1" class="form-label">Email</label>
                    <input type="email" id="email1" class="form-control" name="email" value=<?php echo $email; ?>>
    
                    <label for="nama1" class="form-label">Nama</label>
                    <input type="text" id="nama1" class="form-control" name="nama" value=<?php echo $nama; ?>>
    
                    <label for="institusi1" class="form-label">Institusi</label>
                    <input type="text" id="institusi1" class="form-control" name="institusi" value=<?php echo $institusi; ?>>
    
                    <label for="kota1" class="form-label">Kota</label>
                    <input type="text" id="kota1" class="form-control" name="country" value=<?php echo $country; ?>>
    
                    <label for="alamat1" class="form-label">Alamat</label>
                    <input type="text" id="alamat1" class="form-control" name="addres" value=<?php echo $addres; ?>>
    
                    <td><input type="hidden" name="id" value=<?php echo $id ?>>
                    <br>
                    <input type="submit" class="btn btn-danger" name="update" value="Update"> <a href="daftarPeserta.php" class="btn btn-danger">Kembali</a>
                </form>
            </div>
        </div>
    </div>
</body>

</html>