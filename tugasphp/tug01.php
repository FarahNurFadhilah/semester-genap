  <h1>ZODIAK</h1>
  <form action="" method="get">
  <input type="number" name="bulan"   placeholder="Masukkan bulan">
  <input type="number" name="tanggal" placeholder="Masukkan tanggal">
  <input type="submit" name="tombol" value="Hasil">
  </form>
<?php 
  
  if(isset($_GET["tanggal"]) && isset($_GET["bulan"])) {

  $tanggal =(int)$_GET["tanggal"];
  $bulan = (int)$_GET["bulan"];

  $zodiak = "belum ditentukan";
  if($bulan >0 || $bulan <12 || $tanggal >0 || $tanggal <32){
    $zodiak = "tanggal atau bulan tidak valid";
  }
 

  if($bulan==1){
    if($tanggal>0 && $tanggal<18){
        $zodiak = "Capicorn";
    }
    if ($tanggal>17 && $tanggal<31){
        $zodiak = "Aquarius";
    }
  }

  if($bulan==2){
    if($tanggal>0 && $tanggal<17){
      $zodiak = "Pisces";
    }
    if($tanggal>16 && $tanggal<30){
      $zodiak = "Aries";
    }
  }

  if($bulan==3){
    if($tanggal>0 && $tanggal<19){
      $zodiak = "Taurus";
    }
    if($tanggal>18 && $tanggal<29){
      $zodiak = "Cancer";
    }
  }

  if($bulan==4){
    if($tanggal>0 && $tanggal<17){
      $zodiak = "Leo";
    }
    if($tanggal>16 && $tanggal<30){
      $zodiak = "Virgo";
    }
  }

  if($bulan==5){
    if($tanggal>0 && $tanggal<18){
      $zodiak = "Libra";
    }
    if($tanggal>17 && $tanggal<31){
      $zodiak = "Scorpio";
    }
  }

  if($bulan==6){
    if($tanggal>0 && $tanggal<16){
      $zodiak = "Sagitarius";
    }
    if($tanggal>15 && $tanggal<29){
      $zodiak = "Januari";
    }
  }

  if($bulan==7){
    if($tanggal>0 && $tanggal<17){
      $zodiak = "Februari";
    }
    if($tanggal>16 && $tanggal<30){
      $zodiak = "Maret";
    }
  }

  if($bulan==8){
    if($tanggal>0 && $tanggal<16){
      $zodiak = "April";
    }
    if($tanggal>15 && $tanggal<31){
      $zodiak = "Mei";
    }
  }

  if($bulan==9){
    if($tanggal>0 && $tanggal<15){
      $zodiak = "Juni";
    }
    if($tanggal>14 && $tanggal<30){
      $zodiak = "Juli";
    }
  }

  if($bulan==10){
    if($tanggal>0 && $tanggal<16){
      $zodiak = "Agustus";
    }
    if($tanggal>15 && $tanggal<31){
      $zodiak = "September";
    }
  }

  if($bulan==11){
    if($tanggal>0 && $tanggal<17){
      $zodiak = "Oktober";
    }
    if($tanggal>16 && $tanggal<32){
      $zodiak = "November";
    }
  }

  if($bulan==12){
    if($tanggal>0 && $tanggal<18){
      $zodiak = "Desember";
    }
    if($tanggal>17 && $tanggal<31){
      $zodiak = "Muharram";
    }
  }

  echo $zodiak;

}




?>