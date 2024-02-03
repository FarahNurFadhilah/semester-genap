<?php 
$host="127.0.0.1";
$user="root";
$password="";
$db="dbtoko";

$id=0;
$namabarang="";
$harga=0;
$stok=0;

$koneksi=new mysqli($host,$user,$password,$db);

if(isset($_GET["ubah"])){
    $id=$_GET["ubah"];
    $sql="SELECT * FROM barang WHERE id=".$id;
    $hasil=mysqli_query($koneksi,$sql);

    if(mysqli_num_rows($hasil)>0){
        $row=mysqli_fetch_array($hasil);
        $id=$row[0];
        $namabarang=$row[1];
        $harga=$row[2];
        $stok=$row[3];
    }
}
?>

<form action="" method="post">
    barang:
    <input type="text" name="namabarang" placeholder="namabarang" value="<?php echo $namabarang ?>">
    <br>
    harga:
    <input type="number" name="harga" placeholder="hargabarang" value="<?php echo $harga ?>">
    <br>
    stok:
    <input type="number" name="stok" placeholder="stokbarang" value="<?php echo $stok ?>">
    <br>
    <input type="submit" name="simpan" value="simpan">
    <input type="hidden" name="id" value="<?php echo $id ?>">
</form>

<?php 
    $namabarang=$_POST["namabarang"]?? null;
    $harga=$_POST["harga"]?? null;
    $stok=$_POST["stok"]?? null;

if(isset($_POST["id"])){
    $id=$_POST["id"];
    if($id==0){
        $sql= "INSERT INTO barang (namabarang,harga,stok) VALUES ('$namabarang',$harga,$stok)";
        $hasil=mysqli_query($koneksi,$sql);
    }else{
        $sql="UPDATE barang SET namabarang='$namabarang',harga=$harga,stok=$stok WHERE id=".$id;
        $hasil=mysqli_query($koneksi,$sql);
        //header("location:http://localhost/semester-genap/tugasphp/tug02(barang).php")
    }

}

if(isset($_GET["hapus"])){
    $id=$_GET["hapus"];
    $sql="DELETE FROM barang WHERE id=".$id;
    $hasil=mysqli_query($koneksi,$sql);
}

$sql="SELECT*FROM barang";
$hasil=mysqli_query($koneksi,$sql);

echo "<table border=2px>
    <thead>
        <tr>
            <th>
                BARANG
            </th>
            <th>
                HARGA
            </th>
            <th>
                STOCK
            </th>
            <th>
                HAPUS
            </th>
            <th>
                UBAH
            </th>
        </tr>
    </thead>
<tbody>";

while($row=mysqli_fetch_array($hasil)){
    echo "<tr>";
    echo "<td>".$row[1]."</td>";
    echo "<td>".$row[2]."</td>";
    echo "<td>".$row[3]."</td>";
    echo "<td>"."<a href='?hapus=".$row[0]."'>hapus</a>"."</td>";
    echo "<td>"."<a href='?ubah=".$row[0]."'>ubah</a>"."</td>";
    echo "</tr>";
}
echo "</tbody>
</table>";

?>