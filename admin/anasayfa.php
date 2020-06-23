<!DOCTYPE html>
<?php
 require_once('ayarr.php'); 
 ?>

<?php 
if($_COOKIE["kulad"]==""){ 
header("Location:index.php");
exit();
 }
?> 

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Yönetim Paneli</title>
<link rel="stylesheet" href="css/style.default.css" type="text/css" />

<link rel="stylesheet" href="css/responsive-tables.css">
<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="js/jquery-migrate-1.1.1.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.9.2.min.js"></script>
<script type="text/javascript" src="js/modernizr.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.cookie.js"></script>
<script type="text/javascript" src="js/jquery.uniform.min.js"></script>
<script type="text/javascript" src="js/flot/jquery.flot.min.js"></script>
<script type="text/javascript" src="js/flot/jquery.flot.resize.min.js"></script>
<script type="text/javascript" src="js/responsive-tables.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/excanvas.min.js"></script><![endif]-->
</head>

<body>

<div class="mainwrapper" id="mainwrapper">
<?php require_once('menu.php');?>
        <div class="pageheader">
            <div class="pageicon"><span class="iconfa-laptop"></span></div>
            <div class="pagetitle">
                <h1>Anasayfa</h1>
            </div>
        </div><!--pageheader-->
        
        <div class="maincontent">
            <div class="maincontentinner">
                <div class="row-fluid">
                    <div id="dashboard-left" class="span8">

                        <h5 class="subtitle">GRUPLAR</h5>
                        <ul class="shortcuts">

                            
<li class="archive">
<a href="kanal.php">
<span class="shortcuts-icon"></span>
<span class="shortcuts-label" style="margin-top:-10px">Tüm Kanallar</span>
</a>
</li>
<li class="archive">
<a href="siparis.php">
<span class="shortcuts-icon"></span>
<span class="shortcuts-label" style="margin-top:-10px">İletişim</span>
</a>
</li>
<li class="archive">
<a href="urungrup.php">
<span class="shortcuts-icon"></span>
<span class="shortcuts-label" style="margin-top:-10px">Kategoriler</span>
</a>
</li>

                        </ul>
                        
                        <div class="divider30"></div>
                        
                    </div><!--span8-->
                    
                    <div id="dashboard-right" class="span4">
                        
                        <h5 class="subtitle">Duyuru</h5>
                        
                        <div class="divider15"></div>
                        
                        <div class="alert alert-block">
                              <button data-dismiss="alert" class="close" type="button">&times;</button>
                              <h4>Uyarı!</h4>
                              <p style="margin: 8px 0">Silinen ve değiştirilen bilgiler geri getirilemezler.</p>
                        </div><!--alert-->
                        
                        <br />
                        
                        
                        
                        <h4 class="widgettitle">Takvim</h4>
                        <div class="widgetcontent nopadding">
                            <div id="datepicker"></div>
                        </div>

                                                
                    </div><!--span4-->
                </div><!--row-fluid-->
                
<?php require_once('alt.php'); ?>

                
            </div><!--maincontentinner-->
        </div><!--maincontent-->
        
    </div><!--rightpanel-->
    
</div><!--mainwrapper-->
<script type="text/javascript">
    jQuery(document).ready(function() {
        
      // simple chart
		var flash = [[0, 11], [1, 9], [2,12], [3, 8], [4, 7], [5, 3], [6, 1]];
		var html5 = [[0, 5], [1, 4], [2,4], [3, 1], [4, 9], [5, 10], [6, 13]];
      var css3 = [[0, 6], [1, 1], [2,9], [3, 12], [4, 10], [5, 12], [6, 11]];
			
		function showTooltip(x, y, contents) {
			jQuery('<div id="tooltip" class="tooltipflot">' + contents + '</div>').css( {
				position: 'absolute',
				display: 'none',
				top: y + 5,
				left: x + 5
			}).appendTo("body").fadeIn(200);
		}
        
        //datepicker
        jQuery('#datepicker').datepicker();
        
        // tabbed widget
        jQuery('.tabbedwidget').tabs();
        
        
    
    });
</script>
</body>
</html>
