<?php require_once('ayarr2.php');?>
<?php
$bb=$_GET['bb'];
$id=$_GET['id'];

if ($bb=="ekle"){


$sql = "INSERT INTO kategori (adi,sira,ust) VALUES (:adi,:sira,:ust)";
$query = $db->prepare($sql);
$sonuc = $query->execute(array(
	':adi'=>$_POST['adi'],
	':sira'=>$_POST['sira'],
	':ust'=>$_POST['ust']
	));
echo "<script>window.location.href='urungrup.php?a=eklendi';</script>";




} elseif ($bb=="duzenle"){



$sql = "UPDATE kategori SET adi=?, sira=?, ust=? WHERE id=?";
$query = $db->prepare($sql);
$sonuc = $query->execute(array(
	$_POST['adi'],
	$_POST['sira'],
	$_POST['ust'],
	$_POST['id']));
echo "<script>window.location.href='urungrup.php?a=duzenlendi';</script>";




} elseif ($bb=="sil"){


$sql = "DELETE FROM kategori WHERE id=?";
$query = $db->prepare($sql);
$sonuc = $query->execute(array($id));
echo "<script>window.location.href='urungrup.php?a=silindi';</script>";


}

exit();

?>