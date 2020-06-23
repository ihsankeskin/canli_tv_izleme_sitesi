<?php require_once('ayarr2.php');?>
<?php
include("imageUpFunction.php");

$bb=$_GET['bb'];
$id=$_GET['id'];
$grup=$_GET['grup'];

/**************************************************************************************/
if ($bb=="ekle"){
/**************************************************************************************/

//////////////////////////////////////////////////////////////////////
if (!empty($_FILES['resim1']['name'])){

	$kaynak         = $_FILES["resim1"]["tmp_name"];
    $resim          = $_FILES["resim1"]["name"]; 
    $rtipi         = $_FILES["resim1"]["type"];
    $rboyut         = $_FILES["resim1"]["size"];
    $ruzanti     = substr($resim, -4);
    $yeniad         = substr(uniqid(md5(rand())), 0,35);
    $yeniresim      = $yeniad.$ruzanti;
    $hedef          = "../images/kanal/";
    
    

        if($kaynak==""){
                
                echo"RESİM DOSYASI BOŞ";
                
        }elseif($rboyut > 50000){
        
                        echo"DOSYA BÜYÜK";

        }elseif(($rtipi!="image/pjpeg") && ($rtipi!="image/gif") && ($rtipi!="image/x-png") && ($rtipi!="image/png")){
        
        
                echo"DOSYA UZANTISI FARKLI";
        }else{
        
                if(@move_uploaded_file($kaynak,$hedef.'/'.$yeniresim))
            
                        {
                

                            echo"DOSYA YÜKLENDİ";

                        }
                    else{
            
            
                            echo"RESİM YÜKLENMEDİ !!!!!!";
                        }
                        
            }                    
} else {
$yeniresim = NULL;
}

////////////////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////////////
if (!empty($_FILES['resim2']['name'])){

$kaynak		=$_FILES["resim2"]["tmp_name"]; // Yüklenen Dosyanın Adı;
$klasor		="../images/kanal/"; // Hedef Klasor
$adi		=$_FILES["resim2"]["name"]; // Dosyanın PCdeki Adı
$tipi		=$_FILES["resim2"]["type"]; // Dosyanın Tipi
$uzanti		=substr($adi,-4); // Dosya Uzantısı
$rnd		=substr(uniqid(md5(rand())), 0,10); // Dosyayı Yeden İsimlendiriyoruz.
$yeniisim	="$rnd$uzanti";
$yukle		=$klasor.basename($adi);

	if(move_uploaded_file($kaynak,$yukle)){

	$imgg1a=resimYukle($klasor,$adi,$tipi,900,1,"b-".$yeniisim);
	
	$imgg2a=resimYukle($klasor,$adi,$tipi,350,1,"k-".$yeniisim);
	
	unlink("".$klasor."$adi"); // Yüklemiş Olduğumuz Resmi Siliyoruz
}else{
		echo "Resim Yükleme Hatası";
	}
} else {
$imgg1a = NULL;
$imgg2a = NULL;
}

////////////////////////////////////////////////////////////////////////
		$sql = "INSERT INTO kanal (adi,resim,grup,video,aciklama,sira) VALUES (:adi, :resim, :grup, :video, :aciklama, :sira)";
		$query = $db->prepare($sql);
		$sonuc = $query->execute(array(
		':adi'=>$_POST['adi'],
		':grup'=>$_POST['grup'],
		':video'=>$_POST['video'],
		':aciklama'=>$_POST['aciklama'],
		':sira'=>$_POST['sira'],
		':resim'=>$yeniresim,
	));
 echo "<script>window.location.href='kanal.php?a=eklendi';</script>";








/**************************************************************************************/
} elseif ($bb=="duzenle"){
/**************************************************************************************/


//////////////////////////////////////////////////////////////////////
if (!empty($_FILES['resim1']['name'])){

$kaynak		=$_FILES["resim1"]["tmp_name"]; // Yüklenen Dosyanın Adı;
$klasor		="../images/kanal/"; // Hedef Klasor
$adi		=$_FILES["resim1"]["name"]; // Dosyanın PCdeki Adı
$tipi		=$_FILES["resim1"]["type"]; // Dosyanın Tipi
$uzanti		=substr($adi,-4); // Dosya Uzantısı
$rnd		=substr(uniqid(md5(rand())), 0,10); // Dosyayı Yeden İsimlendiriyoruz.
$yeniisim	="$rnd$uzanti";
$yukle		=$klasor.basename($adi);

	if(move_uploaded_file($kaynak,$yukle)){

	$imgg1=resimYukle($klasor,$adi,$tipi,900,900,"b-".$yeniisim);
	
	
	unlink("".$klasor."$adi"); // Yüklemiş Olduğumuz Resmi Siliyoruz
}else{
		echo "Resim Yükleme Hatası";
	}

$sql = "UPDATE kanal SET resim=? WHERE id=?";
$query = $db->prepare($sql);
$sonuc = $query->execute(array(
	$imgg1,
	$_POST['id']));


} else {
$imgg1 = NULL;
$imgg2 = NULL;
}

////////////////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////////////

////////////////////////////////////////////////////////////////////////
$sql = "UPDATE kanal SET adi=? , grup=? ,video=? ,aciklama=? ,sira=?  WHERE id=?";
$query = $db->prepare($sql);
$sonuc = $query->execute(array(
	$_POST['adi'],
	$_POST['grup'],
	$_POST['video'],
	$_POST['aciklama'],
	$_POST['sira'],
	$_POST['id']));
echo "<script>window.location.href='kanal.php?a=duzenlendi';</script>";



/**************************************************************************************/
} elseif ($bb=="sil"){
/**************************************************************************************/
$query = $db->query("SELECT id,resim FROM kanal WHERE id = '{$id}'")->fetch(PDO::FETCH_ASSOC);
if ( $query ){
if (!empty($query['kanal'])){
	$resim = $query['kanal'];
    unlink("../images/kanal/$resim");
}

}

$sql = "DELETE FROM kanal WHERE id=?";
$query = $db->prepare($sql);
$sonuc = $query->execute(array($id));
echo "<script>window.location.href='kanal.php?a=silindi';</script>";


/**************************************************************************************/
} 
/**************************************************************************************/

exit();

?>