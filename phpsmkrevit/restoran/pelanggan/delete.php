<h1>Delete Pelanggan</h1>

<?php 

if(isset($_GET['id'])){
    $id=$_GET['id'];

    $sql = "DELETE FROM tblpelanggan WHERE idpelanggan=$id";

    $db->runSql($sql);
    header("location:?f=pelanggan&m=select");
}


?>