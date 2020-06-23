<?php 
$kulad=$_COOKIE["kulad"]; 
if($kulad==""){ 
echo "Siz Zaten Giris Yapmadiniz ... Ne Geziyon Bu sayfada ?"; 
exit(); 
}else{ 
setcookie("kulad","",time()-36000); 
header("Location:index.php");
} 

?>