
<?php 

    session_start();
    require_once "dbcontroller.php";
    $db = new DB;

    $sql= "SELECT * FROM tblkategori ORDER BY kategori";

    $row = $db->getAll($sql);

    
   


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RESTORAN NUSANTARA  | Aplikasi Restoran SMK</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body>
    <div class="container">
       <div class="row">
        <div class="col-md-3">
            <h2>RESTORAN NUSANTARA</h2>
        </div>

        <div class= "col-md-9">
            <div class="float-end mt-4 ">logout</div>
            <div class="float-end mt-4 me-4 ">login</div>
            <div class="float-end mt-4 me-4">Pelanggan</div>
            <div class="float-end mt-4 me-4">Daftar</div>
           
        </div>
       </div>
       
       <div class="row mt-5">
        <div class="col-md-3">
            <h3>Kategori</h3>
            <hr>
            <?php if(!empty($row)) {?>
            <ul class="nav flex-column">
            
            <?php  foreach($row as $r):?>
                <li class="nav-item"><a class="nav-link" href="#"><?php echo $r['kategori'] ?></a></li>
            <?php endforeach ?>
            </ul>
            <?php } ?>
        </div>
        <div class="col-md-9">
            <?php 
                
                echo "<h1>DAFTAR MENU</h1>";
            
            ?>
        </div>
       </div>
       <div class="row mt-5">
        <div class="col">
            <p class="text-center">2024- copyright@www.assalamualaikum</p>
        </div>

       </div>
    </div>
    
</body>
</html>