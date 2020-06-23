<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Yönetim Paneli</title>
<link rel="stylesheet" href="css/style.default.css" type="text/css" />

<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="js/jquery-migrate-1.1.1.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.10.3.min.js"></script>
<script type="text/javascript" src="js/modernizr.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.cookie.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery('#login').submit(function(){
            var u = jQuery('#username').val();
            var p = jQuery('#password').val();
            if(u == '' && p == '') {
                jQuery('.login-alert').fadeIn();
                return false;
            }
        });
    });
</script>

<? if ($_GET["m"]=="0"){ ?>
<script type="text/javascript">
    jQuery(document).ready(function(){
	jQuery('.login-alert').fadeIn();
	return false;
    });
</script>
<? }?>
</head>

<body class="loginpage">

<div class="loginpanel">
    <div class="loginpanelinner">
        <div class="logo animate0 bounceIn"><img src="" alt="" /></div>
        <form id="login" action="giris.php" method="post">
            <div class="inputwrapper login-alert">
                <div class="alert alert-error">Geçersiz kullanıcı adı veya şifre</div>
            </div>
            <div class="inputwrapper animated bounceIn">
                <input type="text" name="kulad" id="username" placeholder="Kullanıcı Adı" />
            </div>
            <div class="inputwrapper animate2 bounceIn">
                <input type="password" name="kulsif" id="password" placeholder="Parola" />
            </div>
            <div class="inputwrapper animate3 bounceIn">
                <button name="submit">GİRİŞ YAP</button>
            </div>
            <div class="inputwrapper animate4 bounceIn">
 &nbsp;            </div>
            
        </form>
    </div><!--loginpanelinner-->
</div><!--loginpanel-->

<div class="loginfooter animated">
  <p>&copy; Tüm hakları saklıdır.</p>
</div>

</body>
</html>
