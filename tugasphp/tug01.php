  <h1>ZODIAK</h1>
  <form action="" method="get">
  <input type="number" name="bulan"   placeholder="Masukkan bulan">
  <input type="number" name="tanggal" placeholder="Masukkan tanggal">
  <input type="submit" name="tombol" value="Hasil">
  </form>
<?php 
  
   echo "<br>";

  $bulan=$_GET["bulan"];
  $tanggal=$_GET["tanggal"];
  

  if($bulan==1){
    if($tanggal>0 && $tanggal<18){
        echo "Capicorn";
    }
    if ($tanggal>17 && $tanggal<31){
        echo "Aquarius";
    }
  }

  if($bulan==2){
    if($tanggal>0 && $tanggal<17){
      echo "Pisces";
    }
    if($tanggal>16 && $tanggal<30){
      echo "Aries";
    }
  }

  if($bulan==3){
    if($tanggal>0 && $tanggal<19){
      echo "Taurus";
    }
    if($tanggal>18 && $tanggal<29){
      echo "Cancer";
    }
  }

  if($bulan==4){
    if($tanggal>0 && $tanggal<17){
      echo "Leo";
    }
    if($tanggal>16 && $tanggal<30){
      echo "Virgo";
    }
  }

  if($bulan==5){
    if($tanggal>0 && $tanggal<18){
      echo "Libra";
    }
    if($tanggal>17 && $tanggal<31){
      echo "Scorpio";
    }
  }

  if($bulan==6){
    if($tanggal>0 && $tanggal<16){
      echo "Sagitarius";
    }
    if($tanggal>15 && $tanggal<29){
      echo "Januari";
    }
  }

  if($bulan==7){
    if($tanggal>0 && $tanggal<17){
      echo "Februari";
    }
    if($tanggal>16 && $tanggal<30){
      echo "Maret";
    }
  }

  if($bulan==8){
    if($tanggal>0 && $tanggal<16){
      echo "April";
    }
    if($tanggal>15 && $tanggal<31){
      echo "Mei";
    }
  }

  if($bulan==9){
    if($tanggal>0 && $tanggal<15){
      echo "Juni";
    }
    if($tanggal>14 && $tanggal<30){
      echo "Juli";
    }
  }

  if($bulan==10){
    if($tanggal>0 && $tanggal<16){
      echo "Agustus";
    }
    if($tanggal>15 && $tanggal<31){
      echo "September";
    }
  }

  if($bulan==11){
    if($tanggal>0 && $tanggal<17){
      echo "Oktober";
    }
    if($tanggal>16 && $tanggal<32){
      echo "November";
    }
  }

  if($bulan==12){
    if($tanggal>0 && $tanggal<18){
      echo "Desember";
    }
    if($tanggal>17 && $tanggal<31){
      echo "Muharram";
    }
  }






?>