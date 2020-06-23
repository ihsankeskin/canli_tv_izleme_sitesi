<? function resimYukle($klasor,$adi,$tipi,$genislik,$yukseklik,$yeniisim){ 
     
$dosya="".$klasor."".$adi; 
if(($tipi=='image/jpg') || ($tipi=='image/jpeg') || ($tipi=='image/pjpeg') ){ 
$resim=imagecreatefromjpeg($dosya); // Yklenen resimden oluacak yeni bir JPEG resmi oluturuyoruz.. 
}elseif($tipi=='image/gif'){ 
$resim=imagecreatefromgif($dosya); // Yklenen resimden oluacak yeni bir JPEG resmi oluturuyoruz.. 
     
} 
$boyutlar=getimagesize($dosya); // Resmimizin boyutlarn reniyoruz. 
if($boyutlar[0]<$genislik){ 
    $genislik=$boyutlar[0]; 
} 
if($boyutlar[1]<$yukseklik){ 
    $yukseklik=$boyutlar[1]; 
    } 
$yeniresim=imagecreatetruecolor($genislik,$yukseklik); // Oluturulan bo resmi istediimiz boyutlara getiriyoruz.. 
imagecopyresampled($yeniresim, $resim, 0, 0, 0, 0, $genislik, $yukseklik, $boyutlar[0], $boyutlar[1]); 
$hedefdosya="".$klasor."".$yeniisim.""; // Yeni resimin kaydedilecei konumu belirtiyoruz.. 
if(($tipi=='image/jpg') || ($tipi=='image/jpeg') || ($tipi=='image/pjpeg') ){ 
imagejpeg($yeniresim,$hedefdosya,100); // Ve resmi istediimiz konuma kaydediyoruz.. 
}elseif($tipi=='image/gif'){ 
imagegif($yeniresim,$hedefdosya,100); // Ve resmi istediimiz konuma kaydediyoruz.. 
}elseif($tipi=='image/png'){
imagepng($yeniresim,$hedefdosya,100); // Ve resmi istediimiz konuma kaydediyoruz..
}
return $yeniisim; 
} 
## Sef Link Function ## 
function sef_link($s){ 
    $tr = array('ş','Ş','ı','İ','ğ','Ğ','ü','Ü','ö','Ö','ç','Ç'); 
    $en = array('s','s','i','i','g','g','u','u','o','o','c','c'); 
    $s = str_replace($tr,$en,$s); 
    $s = strtolower($s); 
    $s = preg_replace('/&amp;amp;amp;amp;amp;amp;amp;amp;+?;/', '-', $s); 
    $s = preg_replace('/[^%a-z0-9 _-]/', '-', $s); 
    $s = preg_replace('/\s+/', '-', $s); 
    $s = preg_replace('|-+|', '-', $s); 
    $s = str_replace("--","-",$s); 
    $s = trim($s, '-'); 
    return $s; 
}  
$kaynak        =$_FILES["resim"]["tmp_name"]; // Yüklenen Dosyanın Adı; 
$klasor        ="hfoto/"; // Hedef Klasor 
$adi        =$_FILES["resim"]["name"]; // Dosyanın PCdeki Adı 
$tipi        =$_FILES['resim']['type']; // Dosyanın Tipi 
$uzanti        =substr($adi,-4); // Dosya Uzantısı 
$rnd        =substr(uniqid(md5(rand())), 0,9); // Dosyayı Yeden İsimlendiriyoruz. 
$fotoisim        = sef_link(substr($adi,0,20)); 
$yeniisim    ="$fotoisim$rnd$uzanti"; 
$yukle        =$klasor.basename($adi); 
    if(move_uploaded_file($kaynak,$yukle)){ 
    $imgg1=resimYukle($klasor,$adi,$tipi,660,300,"660X300-".$yeniisim); 
     
    $imgg2=resimYukle($klasor,$adi,$tipi,100,80,"100X80-".$yeniisim); 
     
    } 
?>