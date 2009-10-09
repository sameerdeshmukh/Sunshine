<?
  session_start();
  $database="sunshine";
  $name=$_POST['username'];
  $_SESSION['user']=$name;  
  $password1=$_POST['password'];
  mysql_connect("localhost","root","");
  @mysql_select_db($database) or die("UNABLE TO SELECT DATABASE");
  $query="SELECT * FROM ACCOUNT WHERE USER='$name' AND PASSWORD='$password1'";
  $result=mysql_query($query);
  if(mysql_fetch_array($result))
             {
	include("email_yes.php");
             }  
    else
           {
  	 include("email_no.php");
          }
      mysql_close();
?>