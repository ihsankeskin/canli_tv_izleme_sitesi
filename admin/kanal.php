<!DOCTYPE html>
<?php
 require_once('ayarr.php'); 
 ?>
<?php
$a = $_GET["a"];


$idcik = intval($_GET["id"]);

$bolum = $_GET["bolum"];

$post = "kanalpost.php";

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
<title>Kanallar</title>
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



function indirimli(){
jQuery('#indirimvar').show(1000);
}

function indirimyok(){
jQuery('#indirimvar').hide(1000);
}

</script>
</head>

<body>

<div class="mainwrapper">
    
<?php require_once('menu.php');?>

        <div class="pageheader">

            <div class="pageicon"><span class="iconfa-list"></span></div>
            <div class="pagetitle">
                <h1>Kanallar</h1>
<a href="?bolum=ekle" class="btn btn-primary btn-rounded"> <i class="iconfa-plus-sign"></i> &nbsp;Yeni Ekle</a> 
<a href="javascript:window.history.back();" class="btn btn-default btn-rounded"> <i class="iconfa-step-backward"></i> &nbsp;Geri</a> 
            </div>
        </div><!--pageheader-->
        
        <div class="maincontent">
            <div class="maincontentinner">
            
            
<!--------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
<?php if ($bolum==""){ ?>            
<!--------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
<br>
  
 <h4 class="widgettitle">Kanallar</h4>

<table id="dyntable" class="table table-bordered responsive">
                    <colgroup>
                        <col class="con1" style="align: center; width: 4%" />
                        <col class="con0" />
                        <col class="con1" />
                        <col class="con0" />
                        <col class="con1" />
                        <col class="con0" />
                    </colgroup>
                    <thead>
                        <tr>
                          	<th class="head1">&nbsp;</th>
                            <th class="head0">#ID</th>
                            <th class="head1">ADI</th>
                            <th class="head1">KATEGORİ</th>
                            <th class="head0">İŞLEM</th>
                        </tr>
                    </thead>
                    <tbody>
                    
                    
<?php
 $urunler = $db->select('*')->from('kanal')->orderby('id','DESC')->getAll();
 foreach ($urunler as $urun) {
 $kat = $db->select('id,adi')->from('kategori')->where('id',$urun->grup)->get();


?>

                        <tr>
                          <td class="aligncenter">#
                          </td>
                            <td>#<?=$urun->id?></td>
                            <td><?=$urun->adi?></td>
                            <td> <?=$kat->adi;?></td>
                            <td class="center">
                            <a href="?bolum=duzenle&id=<?=$urun->id?>" class="btn btn-primary btn-rounded"> <i class="iconfa-pencil"></i> &nbsp;Düzenle</a> 
                            <a href="<?=$post?>?bb=sil&id=<?=$urun->id?>" class="btn btn-danger btn-rounded" onClick="return confirm('Silmek istediğinize emin misiniz?')" style="color:#FFF;"><i class="icon-remove icon-white"></i> &nbsp;Sil</a></td>
                        </tr>
<?php
   }
?>                         
                    </tbody>
                </table>
                
                <br /><br />
                
<!--------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
    <?php }
	elseif ($bolum=="duzenle") {
	 ?>                    
<!--------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
     
<?php

 $kate = $db->select('*')->from('kanal')->where('id', $idcik)->get();

?>     
     
     
        <div class="widgetbox box-inverse">
                <h4 class="widgettitle">Düzenleme Formu</h4>
                <div class="widgetcontent nopadding">
<form class="stdform stdform2" action="<?=$post?>?bb=duzenle&id=<?=$idcik?>" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?=$idcik?>">
<p><label>Kanal Adı</label>
<span class="field"><input type="text" name="adi" class="input-xxlarge" value="<?=$kate->adi;?>" /></span>
</p>
<p><label>video</label>
<span class="field"><input type="text" name="video" class="input-xxlarge" value='<?=$kate->video;?>' /></span>
</p>

                            <p>
                                <label>Sıra</label>
<span class="field"><input type="number" name="sira" class="input-small" value="<?=$kate->sira;?>" /></span>
                            </p>

                        <p>
                            <label>Kategori</label>
                            <span class="field">
<select data-placeholder="Seçim Yapınız..." style="width:450px" class="chzn-select" name="grup" tabindex="2">
    <?php  
    $ustcuk = $db->select('*')->from('kategori')->getAll();
 foreach ($ustcuk as $us) {
    $uid = $us->id;
    ?>
<option value='<?=$us->id;?>' <? if ($us->id==$kate->grup) {?> selected="selected"<? }?>><?=$us->adi;?></option>
    <? } ?>
                                </select>
                            </span>
                        </p>

                            <p>
                                 <label>Resmi : </label>
                                <span class="field"><input type="file" name="resim1" id="file1" /></span>
                              
                            </p>

                            <p>
    <label>Detaylar <small>Tüm ofis uygulamarıyla uyumludur. Kopyala yapıştır yapabilirsiniz. Sağ alt köşedeki ikonu çekerek istediğiniz boyutta kullanabilirsiniz.</small></label>
                                <span class="field"><textarea name="aciklama" rows="15" class="input-block-level"><?=$kate->aciklama;?></textarea></span>
                            </p>
                            

                            <p class="stdformbutton">
                                <button class="btn btn-primary" type="submit"> &nbsp;  &nbsp;  &nbsp; Düzenle &nbsp;  &nbsp;  &nbsp; </button>
                            </p>
                    </form>
                </div><!--1-->
            </div><!--2-->
                        

                        
                        
<!--------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
    <?php }
	elseif ($bolum=="ekle") {
	 ?> 
<!--------------------------------------------------------------------------------------------------------------------------------------------------------------- -->


        <div class="widgetbox box-inverse">
                <h4 class="widgettitle">Ekleme Formu</h4>
                <div class="widgetcontent nopadding">
<form class="stdform stdform2" action="<?=$post?>?bb=ekle&id=<?=$idcik?>" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?=$idcik?>">
<p><label>Adı</label>
<span class="field"><input type="text" name="adi" class="input-xxlarge" /></span>
</p>
<p><label>Video</label>
<span class="field"><input type="text" name="video" class="input-xxlarge" /></span>
</p>

                            <p>
                                <label>Sıra</label>
<span class="field"><input type="number" name="sira" class="input-small" value="9999" /></span>
                            </p>

                        <p>
                            <label>Kategori</label>
                            <span class="field">
<select data-placeholder="Seçim Yapınız..." style="width:450px" class="chzn-select" name="grup" tabindex="2">
    <?php  
    $ustcuk = $db->select('*')->from('kategori')->getAll();
 foreach ($ustcuk as $us) {
    $uid = $us->id;
    ?>
<option value='<?=$us->id;?>'><?=$us->adi;?></option>
    <? } ?>
                                </select>
                            </span>
                        </p>

                            <p>
                                 <label>Resmi : </label>
                                <span class="field"><input type="file" name="resim1" id="file1" /></span>
                              
                            </p>
  
                            <p>
    <label>Detaylar <small>Tüm ofis uygulamarıyla uyumludur. Kopyala yapıştır yapabilirsiniz. Sağ alt köşedeki ikonu çekerek istediğiniz boyutta kullanabilirsiniz.</small></label>
                                <span class="field"><textarea name="aciklama" rows="15" class="input-block-level"></textarea></span>
                            </p>
                            

                            <p class="stdformbutton">
                                <button class="btn btn-primary" type="submit"> &nbsp;  &nbsp;  &nbsp; Ekle &nbsp;  &nbsp;  &nbsp; </button>
                            </p>
                    </form>
                </div><!--1-->
            </div><!--2-->

 <!--------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
   <?php } ?> 
 <!--------------------------------------------------------------------------------------------------------------------------------------------------------------- -->

<?php require_once('alt.php');?>
                
            </div><!--maincontentinner-->
        </div><!--maincontent-->
        
    </div><!--rightpanel-->
    
</div><!--mainwrapper-->

</body>
</html>
