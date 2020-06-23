<?php require_once('ayarr2.php');?>
<?php
$bb=$_GET['bb'];
$id=$_GET['id'];

if ($bb=="ekle"){


$sql = "INSERT INTO kullanicik (adi,kulad,kulsif) VALUES (:adi,:kulad,:kulsif)";
$query = $db->prepare($sql);
$sonuc = $query->execute(array(
	':adi'=>$_POST['adi'],
	':kulad'=>$_POST['kulad'],
	':kulsif'=>$_POST['kulsif']
	));
echo "<script>window.location.href='kullanici.php?a=eklendi';</script>";




} elseif ($bb=="duzenle"){



$sql = "UPDATE kullanicik SET adi=?, kulad=?, kulsif=?, reklam=? WHERE id=?";
$query = $db->prepare($sql);
$sonuc = $query->execute(array(
	$_POST['adi'],
	$_POST['kulad'],
	$_POST['kulsif'],
	$_POST['reklam'],
	$_POST['id']));
echo "<script>window.location.href='kullanici.php?a=duzenlendi';</script>";




} elseif ($bb=="sil"){


$sql = "DELETE FROM kullanicik WHERE id=?";
$query = $db->prepare($sql);
$sonuc = $query->execute(array($id));
echo "<script>window.location.href='kullanici.php?a=silindi';</script>";


}

exit();

?>