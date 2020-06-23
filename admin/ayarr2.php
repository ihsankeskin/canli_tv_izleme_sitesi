<?PHP

try {
     $db = new PDO("mysql:host=localhost;dbname=ihsanke1_tv;charset=utf8", "ihsanke1_tv", "Aq2T9WK05g6B");
} catch ( PDOException $e ){
     print $e->getMessage();
}
$db->query("SET CHARACTER SET uf8");


function yazikucuk($metin) {
    return mb_strtolower($metin, 'utf-8');
}

function yazibuyuk($str)
{
$str = str_replace(array('i', 'ı', 'ü', 'ğ', 'ş', 'ö', 'ç'), array('İ', 'I', 'Ü', 'Ğ', 'Ş', 'Ö', 'Ç'), $str);
return strtoupper($str);
}

 
function seo($url)
{
 
$url = trim($url);
$find = array('<b>', '</b>');
$url = str_replace ($find, '', $url);
$url = preg_replace('/<(\/{0,1})img(.*?)(\/{0,1})\>/', 'image', $url);
$find = array(' ', '&amp;amp;amp;quot;', '&amp;amp;amp;amp;', '&amp;amp;amp;', '\r\n', '\n', '/', '\\', '+', '<', '>');
$url = str_replace ($find, '-', $url);
$find = array('é', 'è', 'ë', 'ê', 'É', 'È', 'Ë', 'Ê');
$url = str_replace ($find, 'e', $url);
$find = array('í', 'ý', 'ì', 'î', 'ï', 'I', 'Ý', 'Í', 'Ì', 'Î', 'Ï','İ','ı');
$url = str_replace ($find, 'i', $url);
$find = array('ó', 'ö', 'Ö', 'ò', 'ô', 'Ó', 'Ò', 'Ô');
$url = str_replace ($find, 'o', $url);
$find = array('á', 'ä', 'â', 'à', 'â', 'Ä', 'Â', 'Á', 'À', 'Â');
$url = str_replace ($find, 'a', $url);
$find = array('ú', 'ü', 'Ü', 'ù', 'û', 'Ú', 'Ù', 'Û');
$url = str_replace ($find, 'u', $url);
$find = array('ç', 'Ç');
$url = str_replace ($find, 'c', $url);
$find = array('þ', 'Þ','ş','Ş');
$url = str_replace ($find, 's', $url);
$find = array('ð', 'Ð','ğ','Ğ');
$url = str_replace ($find, 'g', $url);
$find = array('/[^A-Za-z0-9\-<>]/', '/[\-]+/', '/<&#91;^>]*>/');
$repl = array('', '-', '');
$url = preg_replace ($find, $repl, $url);
$url = str_replace ('--', '-', $url);
$url = strtolower($url);
return $url;
}


function rmdirr($klasor) {
if($objs = glob($klasor."/*")){
foreach($objs as $obj) {
is_dir($obj)? rmdirr($obj) : unlink($obj);
}
}
rmdir($klasor);
} 
?>