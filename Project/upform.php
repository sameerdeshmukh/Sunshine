<?
  $username="";
  $password="";
  $database="sunshine";
  $name=$_POST['name'];
  $phone=$_POST['phone'];
  mysql_connect("localhost","root","");
  @mysql_select_db($database) or die("UNABLE TO SELECT DATABASE");
  $query="SELECT * FROM guest WHERE name='$name' and phone='$phone'";
  $result=mysql_query($query);
  if(mysql_fetch_array($result))
  {
  	$email=mysql_result($result,0,"email");
  	$add=mysql_result($result,0,"address");
  $city=mysql_result($result,0,"city");
  $state=mysql_result($result,0,"state");
  $country=mysql_result($result,0,"country");
  $zip=mysql_result($result,0,"zip");
  $phone=mysql_result($result,0,"phone");
  $query="DELETE FROM guest WHERE name='$name' and phone='$phone'";
  $result=mysql_query($query);
	include("upform_yes.php");
  }
  else
  {
	include("upform_no.php");
  }
  mysql_close();
?>



