<?php
echo "Nama Lengkap: ".$_POST['nama']."<br>";
echo "Jenis Kelamin: ".($_POST['gender']='l'?'Laki-Laki':'Perempuan')."<br>";
if($_POST['kota']=='1'){
    echo "Kota Asal: Kota Bandung";
}else
if($_POST['kota']=='2'){
    echo "Kota Asal: Kabupaten Bandung";
}else
if($_POST['kota']=='3'){
    echo "Kota Asal: Kabupaten Bandung Barat";
}else
if($_POST['kota']=='4'){
    echo "Kota Asal: Kota Cimahi";
}else
{
    echo "Kota Asal: Tidak Ditemukan";
}
echo "<br>";
echo "Alamat Domisili: ".$_POST['alamat']."<br>";
?>