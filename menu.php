
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="./"><?  $site = $db->select('*')->from('kullanicik')->get(); ?> <?=$site->adi?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="./"><b>KANALLAR</b></a>
            </li>
<? 
$Menu = $db->select('*')->from('kategori')->orderBy('sira', 'asc')->getAll();
    

foreach ($Menu as $ob) {
?>
								
            <li class="nav-item">
              <a class="nav-link" href="kat-<?=seo($ob->adi)?>_<?=$ob->id?>"><b><?=yazibuyuk($ob->adi)?></b></a>
            </li>
			
<? } ?>
            <li class="nav-item">
              <a class="nav-link" href="iletisim"><b>İLETİŞİM</b></a>
            </li>
          </ul>
		  <form action="arama" method="post"><input type="text" name="kelime" placeholder=""></form>
        </div>
      </div>
    </nav>