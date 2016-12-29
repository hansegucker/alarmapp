<!DOCTYPE html>
<html>
<head>
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"> 
<meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height, target-densitydpi=device-dpi" />
	<title>Alarm App</title>
	<meta charset="utf-8">
	<style>
	body{
		color: white;
		font-family: 'Open Sans', sans-serif;
		font-size: 2em;

	<?php
// Lesen der Datei

if(isset($_GET["alarm"])){
if($_GET["alarm"]=="yes"){
$handle = fopen ("alarm.txt", "w");
fwrite ($handle, "1");
fclose ($handle);
$handle = fopen ("lastalarm.txt", "w");
fwrite ($handle, date("d.m.Y H:i:s"));
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
$dateiname = "lastalarm.txt";
$handle = fopen ($dateiname, "r");
$inhalt = fread ($handle, filesize ($dateiname));
fclose ($handle);



?>
}
</style>
	<meta http-equiv="refresh" content="1; URL=http://desktop-0qlh2oe:81/alarmapp/online.php">
	</head>
<body>
<?php
echo "letzer Alarm: ".$inhalt;
?>
</body>
</html>