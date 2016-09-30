<?php
require_once("phpFlickr.php");
$f = new phpFlickr("tu key");
$f->enableCache("fs", "cache");  
$nsid = "tu ID";
$sets = $f->photosets_getList($user_id=$nsid);
for($i=0;$i<=sizeof($sets);$i++)
{
	echo "<a title=\"".utf8_decode($sets["photoset"][$i]["title"])."\" href=\"photos-set.php?set=".$sets["photoset"][$i]["id"]."\">".utf8_decode($sets["photoset"][$i]["title"])."</a> (".$sets["photoset"][$i]["photos"].")<br>";
}
?>
