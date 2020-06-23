<!DOCTYPE html>
<?php 
include('ayarr.php');
 $p = intval($_GET['p']);

 $kanal = $db->select('*')->from('kanal')->where('id' ,$p)->get();
 
 $site = $db->select('*')->from('kullanicik')->get();

 $kat = $db->select('*')->from('kategori')->where('id' ,$kanal->grup)->get();

 ?>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> <?=$kanal->adi;?> - CANLI TV</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/thumbnail-gallery.css" rel="stylesheet">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/clappr/latest/clappr.min.js">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/clappr-stats/dist/clappr-stats.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/clappr-nerd-stats/dist/clappr-nerd-stats.min.js"></script>

    </script>
  </head>

  <body>
<? include_once 'menu.php'; ?>
    <div class="container">

      <h1 class="my-4 text-center text-lg-left"> <?=$kanal->adi;?></h1>

      <div class="row text-center text-lg-left">

        <div class="col-lg-9 col-md-9 col-xs-12">
			<div class="row">
				<div class="col-md-12">
          
          <div id="player"></div>
  <script>
    var player = new Clappr.Player({source: "<?=$kanal->video;?>",
      height: "460px", 
      width: "100%px", 
      autoPlay: "true", 
      parentId: "#player" , 
      mediacontrol: {seekbar: "#00ffb2", buttons: "#66B2FF"},
      poster: 'images/canli.jpg',
      gaAccount: 'UA-111662230-6',
      gaTrackerName: 'hdcanlitvplayer',
      watermark: "images/hdcanlitv.png", position: 'top-right',
      playbackNotSupportedMessage: "adresi destekleyemedim ayarını kontrol et -888-",
      actualLiveTime: "true",
      actualLiveServerTime:"true",
      isDvrEnabled: "true",
      isDvrInUse: "true"
  });
  </script>
				</div>
				<div class="col-md-12">
					<div class="container">
						<div class="jumbotron";>

							<p><?=$kanal->aciklama;?></p>
						</div>
					</div>
				</div>
			</div>
        </div>
        <div class="col-lg-3 col-md-3 col-xs-12 col-md-offset-1">
        <p><?=$site->reklam?></p>
        </div>
       	<div class="clearfix"></div>
      </div>

    </div>
<? include_once ('alt.php') ?>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  </body>

</html>
