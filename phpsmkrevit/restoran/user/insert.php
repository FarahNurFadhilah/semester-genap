<h3>Insert User</h3>
<div class="form-group">
    <form action="" method="post">
        <div class="form-group w-50" >
            <label for="">Nama user</label>
            <input type="text" name="user" required placeholder="isi user" class="form-control">

        </div>
        <div class="form-group w-50" >
            <label for="">Email</label>
            <input type="text" name="email" required placeholder="isi email" class="form-control">

        </div>
        <div class="form-group w-50" >
            <label for="">Password</label>
            <input type="text" name="password" required placeholder="isi password" class="form-control">

        </div>
        <div class="form-group w-50" >
            <label for="">Konfirmasi Passwors</label>
            <input type="text" name="konfirmasi" required placeholder="isi password" class="form-control">

        </div>
        <div class="form-group w-50" >
            <label for="">Level</label><br>
            <select name="level" id="">

                <option value="aktor">aktor</option>
                <option value="penyanyi">penyanyi</option>
                <option value="pengusaha">pengusaha</option>

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
        $sql = "INSERT INTO tbluser VALUES ('','$user','$email','$password','$level',1)";
        $db ->runSql($sql);
        header("location:?f=user&m=select");

        }else{
            echo "<h2>PASSWORD TIDAK VALID</h2>";
        }
       
    }

?>
