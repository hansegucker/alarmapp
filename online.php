<!DOCTYPE html>
<html>
<head>
	<title>Alarm App</title>
	<meta charset="utf-8">
	<style>
	body{
		color: white;

	<?php
// Lesen der Datei

if(isset($_GET["alarm"])){
if($_GET["alarm"]=="yes"){
$handle = fopen ("alarm.txt", "w");
fwrite ($handle, "1");
fclose ($handle);

}else{
$handle = fopen ("alarm.txt", "w");
fwrite ($handle, "0");
fclose ($handle);
}}
$dateiname = "alarm.txt";
$handle = fopen ($dateiname, "r");
$inhalt = fread ($handle, filesize ($dateiname));
fclose ($handle);
if($inhalt=="0"){
	echo "background-color: green;";
}else{
	echo "background-color: red;";
}


?>
}
</style>
	<meta http-equiv="refresh" content="1; URL=http://desktop-0qlh2oe:81/alarmapp/online.php">
	</head>
<body>
<?php
echo "!".$inhalt."!";
?>
</body>
</html>