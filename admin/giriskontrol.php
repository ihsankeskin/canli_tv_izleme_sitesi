<?php 

  $giris_yapilmis = false;
  $uye = false;

  if( !empty($_SESSION["login"]) && !empty($_SESSION["kulad"]) ){
  
    # kulanici bilgisini alalim
      $sorgu = mysql_query("select * from kullanicik where kulad='".$_SESSION["kulad"]."'");
      if( mysql_num_rows($sorgu) == 1 ){
      
        $uye = mysql_fetch_assoc($sorgu);
        # anahtar kontrol
          if( $_SESSION["login"]  == md5( $uye["sifre"])){
            $giris_yapilmis = true;
          }else{
            # giris yanlis. $uye'yi silelim
            $uye = false;
          }
      }
  }
?>