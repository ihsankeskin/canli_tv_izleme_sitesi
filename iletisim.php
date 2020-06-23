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

      <h1 class="my-4 text-center text-lg-left">Nasıl yardımcı olabiliriz?</h1>

      <div class="row text-center text-lg-left">
	  <center>
<form method="post" action="onay" role="form">

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_name">Ad *</label>
                    <input type="text" name="adi" class="form-control" placeholder="Lütfen adınızı yazın *" required="required" data-error="Adınız gerekli.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_lastname">Soyad *</label>
                    <input type="text" name="soyadi" class="form-control" placeholder="Lütfen soyadınızı yazın *" required="required" data-error="Soyadınız gerekli.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_email">E-Posta *</label>
                    <input type="email" name="eposta" class="form-control" placeholder="E-Posta adresi giriniz. *" required="required" data-error="Geçerli bir E-Posta gerekli.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_phone">Telefon *</label>
                    <input type="tel" name="tel" class="form-control" placeholder="Telefon numarası giriniz. *">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="form_message">Mesajınız *</label>
                    <textarea name="mesaj" class="form-control" placeholder="Lütfen mesajınızı yazın *" rows="4" required="required" data-error="Lütfen mesajınızı yazın."></textarea>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-12">
                <input type="submit" class="btn btn-success btn-send" value="Mesajı Gönder">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p class="text-muted"><strong>*</strong> Bu alanlar gereklidir.</p>
            </div>
        </div>
</form>
</center>
      </div>

    </div>

<? include('alt.php') ?>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
