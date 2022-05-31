<?php 
    //proses yang dapat terjadi
    //mengambil data dari parameter input halaman  biodata
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $no_hp = $_POST['no_hp'];
    $alamat= $_POST['alamat'];
    //menampilkan data 
    echo "Nama = $nama"."<br>";
    echo "Jenis Kelamin = $jenis_kelamin" . "<br>";
    echo "No HP = $no_hp" . "<br>";
    echo "Alamat = $alamat";
    //disini ditulis proses lain yang dapat dilakukan seperti
    
    //insert ke database
    //update delete data
?>