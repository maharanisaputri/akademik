<?php
require 'koneksi.php';

//INSERT 
if (isset($_POST['simpan'])) {

    $nim        = $_POST['nim'];
    $nama       = $_POST['nama_mhs'];
    $tgl        = $_POST['tgl_lahir'];
    $alamat     = $_POST['alamat'];
    $prodi_id   = $_POST['prodi_id'];

    $query = "
        INSERT INTO mahasiswa
        (nim, nama_mhs, tgl_lahir, alamat, prodi_id)
        VALUES
        ('$nim','$nama','$tgl','$alamat','$prodi_id')
    ";

    if ($koneksi->query($query)) {
        header("Location:index.php?page=datamahasiswa");
        exit;
    } else {
        echo "Gagal menyimpan data!";
    }
}


// UPDATE MAHASISWA

if (isset($_POST['ubah'])) {

    $nim_lama   = $_POST['nim_lama'];
    $nim        = $_POST['nim'];
    $nama       = $_POST['nama_mhs'];
    $tgl        = $_POST['tgl_lahir'];
    $alamat     = $_POST['alamat'];
    $prodi_id   = $_POST['prodi_id'];

    $query = "
        UPDATE mahasiswa SET
        nim='$nim',
        nama_mhs='$nama',
        tgl_lahir='$tgl',
        alamat='$alamat',
        prodi_id='$prodi_id'
        WHERE nim='$nim_lama'
    ";

    if ($koneksi->query($query)) {
        header("Location:index.php?page=datamahasiswa");
        exit;
    } else {
        echo "Gagal mengubah data";
    }
}

//DELETE MAHASISWA
if (isset($_GET['nim'])) {

    $nim = $_GET['nim'];

    $query = "DELETE FROM mahasiswa WHERE nim='$nim'";
    $koneksi->query($query);

    header("Location:index.php?page=datamahasiswa");
    exit;
}
?>
