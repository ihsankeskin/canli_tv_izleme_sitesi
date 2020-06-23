<?php
require_once('ayarr.php');

$giris = $db->select('*')->from('kullanicik')->where('kulad',$_POST['kulad'])->where('kulsif', $_POST['kulsif'])->get();

if ($giris){

setcookie("kulad","$giris->kulad",time() + (60*60*24)); 
setcookie("kulid","$giris->id",time() + (60*60*24)); 
setcookie('adi',"$giris->adi",time() + (60*60*24)); 

	echo "<script>window.location.href ='anasayfa.php';</script>";

} else {

	echo "<script>window.location.href ='index.php?m=0';</script>";
}


?>