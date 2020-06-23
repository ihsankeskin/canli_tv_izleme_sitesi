
<div class="header">
        <div class="logo">
            <a href="anasayfa.php"><img src="" alt="" /></a>
        </div>
        <div class="headerinner">
            <ul class="headmenu">

                <li class="right">
                    <div class="userloggedinfo">
                        <img src="images/photos/thumb1.png" alt="" />
                        <div class="userinfo">
                            <h5> <?=$_COOKIE['adi'];?> <small>- <?=$_COOKIE['kulad'];?> </small></h5>
                            <ul>
                                <li><a href="kullanici.php?bolum=duzenle&id=<?=$_COOKIE['kulid'];?>">GENEL AYARLAR </a></li>
                                <li><a href="logout.php">Çıkış Yap </a></li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul><!--headmenu-->
        </div>
    </div>
    
    <div class="leftpanel">
        
        <div class="leftmenu">        
            <ul class="nav nav-tabs nav-stacked">
            	<li class="nav-header">MENÜ</li>
                <li class="active"><a href="anasayfa.php"><span class="iconfa-laptop"></span> Anasayfa</a></li>
               

                 <li><a href="kanal.php"><span class="iconfa-th-list"></span> Kanallar</a></li>
                 <li><a href="urungrup.php"><span class="iconfa-th-list"></span> Kategoriler </a></li>
                 <li><a href="siparis.php"><span class="iconfa-th-list"></span> İletişim </a></li>
                 <li><a href="kullanici.php?bolum=duzenle&id=<?=$_COOKIE['kulid'];?>"><span class="iconfa-lock"></span> Genel Ayarlar</a></li>
                 <li><a href="logout.php"><span class="iconfa-minus"></span> Çıkış Yap</a></li>

            </ul>
        </div><!--leftmenu-->
        
    </div><!-- leftpanel -->
    
    <div class="rightpanel">
        
        <ul class="breadcrumbs">
            <li><a href=""><i class="iconfa-home"></i></a> <span class="separator"></span></li>
            <li>Anasayfa</li>
            <li class="right">
                    <a href="" data-toggle="dropdown" class="dropdown-toggle"><i class="icon-tint"></i> Renk Seçenekleri</a>
                    <ul class="dropdown-menu pull-right skin-color">
                        <li><a href="default">Mavi</a></li>
                        <li><a href="navyblue">Hafif Mavi</a></li>
                        <li><a href="palegreen">Koyu Yeşil</a></li>
                        <li><a href="red">Kırmızı</a></li>
                        <li><a href="green">Yeşil</a></li>
                        <li><a href="brown">Kahverengi</a></li>
                    </ul>
            </li>
        </ul>        
