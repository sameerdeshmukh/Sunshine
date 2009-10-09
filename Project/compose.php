<?  
  session_start();
  $database="sunshine";
  $to1=$_POST['to'];
  $message=$_POST['message'];
  $from1=$_SESSION['user'];
  mysql_connect("localhost","root","");
  @mysql_select_db($database) or die("UNABLE TO SELECT DATABASE");
  $query="SELECT * FROM account where USER='$to1'";
  $result=mysql_query($query);
  if(mysql_fetch_array($result))
  {
  	$query="INSERT INTO email1 VALUES('$from1','$to1','$message')";
  	$result=mysql_query($query);
	include("compose_yes.php");
  }	
  else
  	include("compose_no.php");
  mysql_close();
?>