<?php
	require_once("phpFlickr.php");
	$f = new phpFlickr("tu key");
	$f->enableCache("fs", "cache");  	
	$nsid = "tu ID";
	$info_set = $f->photosets_getInfo($photoset_id=$_GET["set"]);
	echo "<h2>".utf8_decode($info_set["title"])."</h2>";
	echo "<p><a title=\"Regresar a Galerias\" href=\"sets.php\">&laquo; Regresar a galerias</a></p>";
	$photos_of_sets = $f->photosets_getPhotos($photoset_id=$_GET["set"],$per_page=20);
	
	foreach($photos_of_sets["photoset"]["photo"] as $photo)
	{
		echo "<a href=\"photo.php?id=$photo[id]&set=".$_GET["set"]."\" title=\"View ".utf8_decode($photo["title"])."\">";  
		echo "<img src=\"" . $f->buildPhotoURL($photo, "Square") .  "\" width=\"75\" height=\"75\" alt=\"".utf8_decode($photo["title"])."\" />";  
		echo "</a>";  
	}
?>
