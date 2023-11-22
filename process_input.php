<?php
$db = mysqli_connect("localhost", "root", "", "2106128_fikri_faisal_akbar");
if (!$db) {
    echo "<script>
                alert('database tidak terhubung')    
    </script>";
};

$nama = $_POST['nama'];
$tangal_lahir = $_POST['tanggal_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$no_hp = $_POST['no_hp'];
$keahlian = $_POST['keahlian'];


$query = "INSERT INTO pendaftaran VALUES (NUll,'$nama','$tanggal_lahir','$jenis_kelamain','$alamat','$email', '$no_hp', '$keahlian')";
mysqli_query($db, $query);
echo "<script>alert('Peserta berhasil ditambahkan')</script>";
echo "<script> window.location='./index.php'</script>";
?>