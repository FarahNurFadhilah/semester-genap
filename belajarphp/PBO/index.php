<?php 

    require_once "database.php";

    $usedb=new Database;
    echo $usedb ->insertData();
    echo '<br>';
    echo $usedb ->db;
    echo '<br>';
    echo $usedb ->ambil();
    echo '<br>';
    echo $usedb->selectData();
    echo '<br>';
    echo Database::selectData();
    echo '<br>';
    $usepenjualan=new Penjualan;
    echo $usepenjualan->barang();
    echo '<br>';
    echo $usepenjualan->pelanggan();
    echo '<br>';
    echo Penjualan::pelanggan();



?>