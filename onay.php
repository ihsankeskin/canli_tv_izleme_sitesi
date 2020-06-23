<!DOCTYPE html>
<?php 
include('ayarr.php');
	$adi = $_POST['adi'];
	$soyadi = $_POST['soyadi'];
	$eposta = $_POST['eposta'];
	$tel = $_POST['tel'];
	$mesaj = $_POST['mesaj'];
	
$sql = "INSERT INTO iletisim (adi,soyadi,eposta,tel,mesaj) VALUES 
('$adi', '$soyadi', '$eposta', '$tel', '$mesaj')";
$query = $db->query($sql);
if ($query){ };

 ?>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="canlı tv, canli tv, canli televizyon, canlı televizyon, televizyon izle, canlı yayın izle">
    <meta name="author" content="b81media">
	<title>CANLI TV İZLE</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.1.1/sketchy/bootstrap.min.css" rel="stylesheet">

    <link href="css/thumbnail-gallery.css" rel="stylesheet">

  </head>

  <body>

<?php 
include('menu.php');
 ?>
 
    <div class="container">

      <h1 class="my-4 text-center text-lg-left"><center>Mesaj gönderildi! Talebiniz kısa süre içerisinde e-posta yolu ile cevaplanacaktır.</center></h1>

      <div class="row text-center text-lg-left">
<p> <center></center> </p>
      </div>

    </div>

<? include('alt.php') ?>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
