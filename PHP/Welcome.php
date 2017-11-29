<?php

/*ACCESS DATABASE FOR FILLING DATALIST / SELECT*/
$db = new PDO("mysql:host=localhost;port=3306;dbname=Jeopardy", "root", "Newdivide1");
$results = $db->query("SELECT DISTINCT(Category) FROM new ORDER BY Category");
$randy = $db->query("SELECT Category FROM new ORDER BY RAND() LIMIT 6");
foreach($results as $row) {
	$categories[] = $row['Category'];
}
foreach($randy as $row) {
	$rand[] = $row['Category'];
	$a = count($rand)-1;
	$temp = $rand[$a];
	$rand[$a] = str_replace("'","&apos",$temp);
}

?>