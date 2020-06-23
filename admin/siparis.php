<!DOCTYPE html>
<?php
 require_once('ayarr.php'); 
 ?>
<?php
$a = $_GET["a"];


$id = intval($_GET["id"]);

$bolum = $_GET["bolum"];

$post = "siparispost.php";

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
<title>İletişim Formu</title>
<link rel="stylesheet" href="css/style.default.css" type="text/css" />
<link rel="stylesheet" href="css/responsive-tables.css">
<style>
.table td 
{ 
 vertical-align:middle;
}

.table tr:hover { background:#E0E0E0;}

</style>
<script type="text/javascript" src="js/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript">
	tinyMCE.init({
		// General options
		mode : "textareas",
		theme : "advanced",
		plugins : "autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,wordcount,advlist,autosave,visualblocks",

		// Theme options
		theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
		theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
		theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
		theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak,restoredraft,visualblocks",
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		theme_advanced_statusbar_location : "bottom",
		theme_advanced_resizing : true,

		// Drop lists for link/image/media/template dialogs
		template_external_list_url : "lists/template_list.js",
		external_link_list_url : "lists/link_list.js",
		external_image_list_url : "lists/image_list.js",
		media_external_list_url : "lists/media_list.js",


		// Replace values for the plugin
		template_replace_values : {
			username : "Orbyyy",
			staffid : "991234"
		}
	});
	
	
	
</script>

<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="js/jquery-migrate-1.1.1.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.9.2.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.uniform.min.js"></script>
<script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="js/jquery.cookie.js"></script>
<script type="text/javascript" src="js/responsive-tables.js"></script>
<script type="text/javascript" src="js/chosen.jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.cookie.js"></script>
<script type="text/javascript" src="js/modernizr.min.js"></script>
<script type="text/javascript" src="js/jquery.alerts.js"></script>

<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function(){
        // dynamic table
        jQuery('#dyntable').dataTable({
            "sPaginationType": "full_numbers",
            "aaSortingFixed": [[0,'asc']],
            "fnDrawCallback": function(oSettings) {
                jQuery.uniform.update();
            }
        });
        
        jQuery('#dyntable2').dataTable({
            "sPaginationType": "full_numbers",
            "aaSortingFixed": [[0,'asc']],
            "fnDrawCallback": function(oSettings) {
                jQuery.uniform.update();
            }
        });
        
        jQuery('#dyntable3').dataTable({
            "sPaginationType": "full_numbers",
            "aaSortingFixed": [[0,'asc']],
            "fnDrawCallback": function(oSettings) {
                jQuery.uniform.update();
            }
        });
        
		jQuery(".chzn-select").chosen();
		
		
		


	
    });
</script>

<?php if ($a=="eklendi") { ?>
<script>
			jQuery(document).ready(function(){
                        jQuery.alerts.dialogClass = 'alert-success';
			jAlert('Başarıyla Eklendi.', 'Eklendi', function(){
                           jQuery.alerts.dialogClass = null; // reset to default
                        });
		});

</script>
<?php } elseif ($a=="duzenlendi") { ?>
<script>
			jQuery(document).ready(function(){
                        jQuery.alerts.dialogClass = 'alert-warning';
			jAlert('Başarıyla Düzenlendi.', 'Düzenleme Başarılı', function(){
                           jQuery.alerts.dialogClass = null; // reset to default
                        });
		});

</script>
<?php } elseif ($a=="silindi") {?>
<script>
			jQuery(document).ready(function(){
                        jQuery.alerts.dialogClass = 'alert-danger';
			jAlert('Başarıyla Silindi. Silinen bilgiler geri getirilemez.', 'Silindi', function(){
                           jQuery.alerts.dialogClass = null; // reset to default
                        });
		});

</script>
<?php } ?>

</head>

<body>

<div class="mainwrapper">
    
<?php require_once('menu.php');?>

        <div class="pageheader">

            <div class="pageicon"><span class="iconfa-list"></span></div>
            <div class="pagetitle">
                <h1>İletişim</h1>
            </div>
        </div><!--pageheader-->
        
        <div class="maincontent">
            <div class="maincontentinner">
            
            
<!--------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
<?php if ($bolum==""){ ?>            
<!--------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
<br>
  
 <h4 class="widgettitle">İletişim</h4>

<table id="dyntable" class="table table-bordered responsive">

                    <colgroup>
                        <col class="con0" style="align: center; width: 4%" />
                        <col class="con1" />
                        <col class="con0" />
                        <col class="con1" />
                        <col class="con0" />
                        <col class="con1" />
                    </colgroup>
                    <thead>
                        <tr>
                          	<th class="head1">&nbsp;</th>
                            <th class="head0">#ID</th>
                            <th class="head0">AD SOYAD</th>
                            <th class="head0">Eposta</th>
                            <th class="head0">TEL </th>
                            <th class="head0">MESAJ </th>
                            <th class="head0">SİL </th>
                        </tr>
                    </thead>
                    <tbody>
                    
                    
<?php
 $kullanici = $db->select('*')->from('iletisim')->Orderby('id', 'desc')->getAll();
 foreach ($kullanici as $kul) {
 
?>

                        <tr>
                          <td class="aligncenter">#
                          </td>
                            <td>#<?=$kul->id?></td>
                            <td><?=$kul->adi?> <?=$kul->soyadi?></td>
                            <td><?=$kul->eposta?></td>
							<td><?=$kul->tel?></td>
							<td><?=$kul->mesaj?></td>							
                            <td><a href="<?=$post?>?bb=sil&id=<?=$kul->id?>" class="btn btn-danger btn-rounded" onClick="return confirm('Silmek istediğinize emin misiniz?')" style="color:#FFF;"><i class="icon-remove icon-white"></i> &nbsp;Sil</a></td>
                        </tr>
<?php
   }
?>                         
                    </tbody>
                </table>
                
                <br /><br />
                
<!--------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
    <?php }	 ?>                    
<!--------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
 
<?php require_once('alt.php');?>
                
            </div><!--maincontentinner-->
        </div><!--maincontent-->
        
    </div><!--rightpanel-->
    
</div><!--mainwrapper-->

</body>
</html>
