<h1>Belajar PHP</h1>
<form action="" method="get">
nama:
<input type="text" name="nama" placeholder="masukkan nama">
<input type="submit" name="tombol" value="kirim">
</form>

<a href="?coba=rpl">Klik</a>

<?php
if(isset($_GET["nama"])){
    $isi=$_GET["nama"];
    echo'<h2>'.$isi.'</h2>';
}

//var_dump($isi);
echo '<br>';
echo "luas persegi= ".persegi(10)."<br>";
echo "luas lingkaran= ".lingkaran(10)."<br>";
echo "luas segitiga= ".segitiga(10,10)."<br>";
echo "luas tabung= ".tabung(10,10)."<br>";

function persegi($s){
    $sisi=$s*$s;
    return $sisi;
}

function lingkaran($r){
    $luas=3.14*$r*$r;
    return $luas;
}

function segitiga($a,$t){
    $ls=0.5*$a*$t;
    return $ls;
}

function tabung($jr,$h){
    $lt=3.14*$jr*$h;
    return $lt;
}

?>

<p>BELAJAR PHP</p>