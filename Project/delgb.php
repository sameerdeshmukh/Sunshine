
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
	$query="DELETE FROM guest WHERE name='$name' and phone='$phone'";
	$result=mysql_query($query);
	include("delgb_yes.php");
  }

  else
  {
	include("delgb_no.php");
  }

     
  mysql_close();
?>

