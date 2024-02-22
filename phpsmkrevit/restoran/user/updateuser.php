<?php 
    if (isset($_GET['id'])) {
       $id = $_GET['id'];

       $sql= "SELECT * FROM tbluser WHERE iduser=$id";
        $row = $db->getItem($sql);

       
    }


?>

<h3>Update User</h3>
<div class="form-group">
    <form action="" method="post">
        <div class="form-group w-50" >
            <label for="">Nama user</label>
            <input type="text" name="user" required value="<?php echo $row['user'] ?>" class="form-control">

        </div>
        <div class="form-group w-50" >
            <label for="">Email</label>
            <input type="text" name="email" required value="<?php echo $row['email'] ?>" class="form-control">

        </div>
        <div class="form-group w-50" >
            <label for="">Password</label>
            <input type="text" name="password" required value="<?php echo $row['password'] ?>" class="form-control">

        </div>
        <div class="form-group w-50" >
            <label for="">Konfirmasi Password</label>
            <input type="text" name="konfirmasi" required value="<?php echo $row['password'] ?>" class="form-control">

        </div>
        <div class="form-group w-50" >
            <label for="">Level</label><br>
            <select name="level" id="">

                <option value="aktor" <?php if($row['level']==="aktor") echo "selected" ?>>aktor</option>
                <option value="penyanyi" <?php if($row['level']==="penyanyi") echo "selected" ?>>penyanyi</option>
                <option value="pengusaha" <?php if($row['level']==="pengusaha") echo "selected" ?>>pengusaha</option>

            </select>

        </div>

        <div>

            <input type="submit" name="simpan" value="simpan" class="btn btn-primary mt-4">



        </div>
    </form>
</div>

<?php 

    if(isset($_POST['simpan'])){
        $user = $_POST['user'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $konfirmasi = $_POST['konfirmasi'];
        $level = $_POST['level'];

        if ($password === $konfirmasi) {
        $sql = "UPDATE  tbluser SET user='$user', email='$email', password='$password', level='$level' WHERE iduser=$id";
        
        $db ->runSql($sql);
        header("location:?f=user&m=select");

        }else{
            echo "<h2>PASSWORD TIDAK VALID</h2>";
        }
       
    }

?>
