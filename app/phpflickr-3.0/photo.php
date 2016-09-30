<?php
$id = isset($_GET['id']) ? $_GET['id'] : NULL;  
require_once('phpFlickr.php');  
$f = new phpFlickr("tu key");  
$f->enableCache("fs", "cache");  
$photo = $f->photos_getInfo("$id", $secret = NULL);
$photosize = $f->photos_getSizes("$id", $secret = NULL);
$size = $photosize[3];
$context = $f->photos_getContext("$id");
$photoUrl = $f->buildPhotoURL($photo, "Medium");
?>
<!DOCTYPE html  PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php echo utf8_decode($photo["title"]); ?>
</title>
</head>
<body>
<?php
echo "<h2>".utf8_decode($photo["title"])."</h2>";
echo "<img src=\"$photoUrl\" width=\"$size[width]\" height=\"$size[height]\" alt=\"".utf8_decode($photo["title"])."\" />";
echo "<p>".utf8_decode($photo["description"])."</p>";
?>
<div id="context">
<?php
if($context['prevphoto']['id'])
{
	echo"<a href=\"?id=".$context['prevphoto']['id']."&set=".$_GET["set"]."\" title=\"Anterior:  ".utf8_decode($context['prevphoto']['title'])."\"><img  src=\"".$context['prevphoto']['thumb']."\" width=\"75\" height=\"75\"  /></a>";
}
else
{
	echo"<img src=\"noimg.jpg\" width=\"75\" height=\"75\" alt=\"No photo\" />";
}

if($context['nextphoto']['id'])
{
	echo "<a  href=\"?id=".$context['nextphoto']['id']."&set=".$_GET["set"]."\" title=\"Siguiente:  ".utf8_decode($context['nextphoto']['title'])."\"><img  src=\"".$context['nextphoto']['thumb']."\" width=\"75\" height=\"75\"  /></a>";
}
else
{
	echo"<img src=\"noimg.jpg\" width=\"75\" height=\"75\" alt=\"No photo\" />";
};
echo"</div>";

echo"<p>";
if($context['prevphoto']['id'])
{
	echo"<a  href=\"?id=".$context['prevphoto']['id']."&set=".$_GET["set"]."\" title=\"Anterior:  ".utf8_decode($context['prevphoto']['title'])."\">&laquo; Anterior</a>";
}
else
{
	echo"&laquo; Anterior";
}
echo" | ";
if($context['nextphoto']['id'])
{
	echo "<a  href=\"?id=".$context['nextphoto']['id']."&set=".$_GET["set"]."\" title=\"Siguiente:  ".utf8_decode($context['nextphoto']['title'])."\">Siguiente  &raquo;</a>";
}
else
{
	echo"Next &raquo;";
}
echo"</p>";
?>
</div><!-- end context -->
<p>&laquo; <a href="photos-set.php?set=<?php echo $_GET["set"]?>">Regresa a Galeria</a></p>

<p>Esta foto galeria usa el Api de Flickr pero no tiene certificacion por Flickr.</p>

</body>
</html>

