<?
  $username="";
  $password="";
  $database="sggsiet";
  $i=0;
  $name=$_POST['username'];
  $password1=$_POST['password'];
  
  mysql_connect("localhost","root","");
  @mysql_select_db($database) or die("UNABLE TO SELECT DATABASE");
  $query="SELECT * FROM ACCOUNT WHERE USER='$name' AND PASSWORD='$password1'";
  $result=mysql_query($query);
  if(mysql_fetch_array($result))
  	echo "SUCCESS";
  else
  	echo "FAIL";
  
  /*$num=mysql_num_rows($result);
  while($row = mysql_fetch_array($result))
  {
    echo $row['USER'] . " " . $row['PASSWORD'];
    echo"<br>";
   }
    //echo"$row['USER']<BR>$row['PASSWORD']";
    if(strcmp($row['USER'],$name)==0 && strcmp($row['PASSWORD'],$password1)==0)
     {
       $i++;
       //include("verify_yes.php");
       break;
     }*/     
   //if($i==0){ echo"UNSUCCESSFUL"; }
  //else echo"SUCCESSFUL";  
    mysql_close();
?>