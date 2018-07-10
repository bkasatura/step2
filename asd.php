<?php
$db= new PDO("mysql:host=localhost;dbname=deneme",'root','');
$guncelle = $db->prepare("update deneme set deger=? where id=1");
$ıslem = $guncelle->execute(array("18"));

foreach ($db->query("SELECT * FROM deneme") as $yaz) {
	echo $yaz['deger']; echo "<br>";
}
?>