<?php 

    if (isset($_GET['total'])) {
       $total=$_GET['total'];

       echo $total;

       echo '<br>';

       echo idorder();

       echo '<br>';

       insertOrder(idorder().$_SESSION['idpelanggan'].'2020-11-32',$total);


    }

    function idorder(){
        global $db;
        $sql = "SELECT idorder FROM tblorder ORDER BY idorder DESC";
        $jumlah = $db->rowCount($sql);
        if ($jumlah == 0) {
            $id = 1;
        }else{
            $item = $db->getItem($sql);
            $id= $item['idorder']+1;
        }
        return $id;
    }

    function insertOrder($idorder, $idpelanggan, $tglorder, $total){
        global $db;

        $sql = "INSERT INTO tblorder VALUES ($idorder,$idpelanggan,'$tglorder',$total,0,0,0)";

        // echo $sql;

        $db->runSql($sql);
    }
?>