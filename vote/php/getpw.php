<?php 
if(!empty($_POST['passw'])){
$orig = addslashes($_POST['passw']);
//With Salt
$salt = "th1s1sasaltstr1ng123456789";
$tmpSlt = $orig.$salt;
$passwordSalt = md5($tmpSlt);
echo "<!DOCTYPE html>\n<head>\n</head>\n<body>\n<b>L&ouml;senord att l&auml;gga in i databasen:</b><br>".$passwordSalt."\n</body>\n</html>";
}
else{
?>
<!DOCTYPE html>
<head>
</head>
<body>
<form method="post" action="getpw.php">
  L&ouml;senord:<br/>
  <input type="text" name="passw" size="35" /><br>
	<br>
	<input type="submit" value="Skapa krypterat &amp; saltat l&ouml;senord" />
</form>
</body>
</html>
<?php } ?>
