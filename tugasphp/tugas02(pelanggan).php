<?php 
$host="127.0.0.1";
$user="root";
$password="";
$db="dbtoko";

$id=0;
$namapelanggan="";
$alamat=0;
$telepon=0;

$koneksi=new mysqli($host,$user,$password,$db);

if(isset($_GET["ubah"])){
    $id=$_GET["ubah"];
    $sql="SELECT*FROM pelanggan WHERE id=".$id;
    $hasil=mysqli_query($koneksi,$sql);

    if(mysqli_num_rows($hasil)>0){
        $row=mysqli_fetch_array($hasil);
        $id=$row[0];
        $namapelanggan=$row[1];
        $alamat=$row[2];
        $telepon=$row[3];
    }
}
?>


<form action="" method="post">
    pelanggan:
    <input type="text" name="namapelanggan" placeholder=" Nama Pelanggan" value="<?php echo $namapelanggan?>">
    <br>
    alamat:
    <input type="text" name="alamat" placeholder="Alamat" value="<?php echo $alamat ?>">
    <br>
    telepon:
    <input type="number" name="telepon" placeholder="Nomer Telepon" value="<?php echo $telepon ?>">
    <br>
    <input type="submit" name="simpan" value="simpan">
    <input type="hidden" name="id" value="<?php echo $id ?>">
</form>

<?php 
$namapelanggan=$_POST["namapelanggan"]?? null;
$alamat=$_POST["alamat"]?? null;
$telepon=$_POST["telepon"]?? null;


if(isset($_POST["id"])){
    $id=$_POST["id"];
    if($id==0){
        $sql="INSERT INTO pelanggan(namapelanggan,alamat,notelepon) VALUES ('$namapelanggan','$alamat',$telepon)";
        $hasil=mysqli_query($koneksi,$sql);
    }else{
        $sql="UPDATE pelanggan SET namapelanggan='$namapelanggan',alamat='$alamat',notelepon=$telepon WHERE id=".$id;
        $hasil=mysqli_query($koneksi,$sql);
        //header("location:http://localhost/semester-genap/tugasphp/tug02(pelanggan).php");
    }
}
if(isset($_GET["hapus"])){
    $id=$_GET["hapus"];
    $sql="DELETE FROM pelanggan WHERE id=".$id;
    $hasil=mysqli_query($koneksi,$sql);
}

$sql="SELECT*FROM pelanggan";
$hasil=mysqli_query($koneksi,$sql);


echo "<table border=2px>
<thead>
    <tr>
        <th>
            NAMA PELANGGAN
        </th>
        <th>
            ALAMAT
        </th>
        <th>
            TELEPON
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