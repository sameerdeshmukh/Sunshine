<?
        $database="sunshine";
        session_start();
        $to1=$_SESSION['user'];  
       // echo "$to1";
         mysql_connect("localhost","root","");
        @mysql_select_db($database) or die("UNABLE TO SELECT DATABASE");
        $query="SELECT * FROM email1 WHERE to1='$to1' ";
        $result=mysql_query($query);
        
        include("inbox_yes.php");  
                  
?>
