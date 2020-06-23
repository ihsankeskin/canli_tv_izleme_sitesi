<!DOCTYPE html>
<?php 
include('ayarr.php');
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

      <h1 class="my-4 text-center text-lg-left"><center> TÜM KANALLAR </center></h1>

      <div class="row text-center text-lg-left">
<? $kanallar = $db->select('*')->from('kanal')->orderBy('sira', 'asc')->getAll(); ?>

<? foreach ($kanallar as $kanal) { ?>

        <div class="col-lg-3 col-md-4 col-xs-6">
          <a href="kanal-<?=seo($kanal->adi);?>_<?=$kanal->id;?>" class="d-block mb-4 h-100">
            <center><img class="img-fluid img-thumbnail" src="images/kanal/<?=$kanal->resim;?>" alt="<?=$kanal->adi;?>"></center>
			<center><h4> <?=$kanal->adi;?> </h4></center>
		  </a>
        </div>
<? } ?>
      </div>

    </div>

<? include('alt.php') ?>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
