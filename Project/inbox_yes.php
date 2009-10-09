<?
        
     //   echo"$rows";
       // mysql_close();             
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome to Website</title>
<link href="stylesheet.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="center" valign="top"><table width="741" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td align="left" valign="top">
        <table width="741" border="0" cellspacing="0" cellpadding="0" height="295">
          <tr>
            <td width="153" align="left" valign="middle" height="113">&nbsp;</td>
            <td width="15" rowspan="2" align="left" valign="top" height="295">&nbsp;</td>
            <td height="113" align="right" valign="middle">&nbsp;<p>&nbsp;</p>
            <p><font face="Vladimir Script" size="6">
            <a href="mailto:abc@yoursite.com" style="text-decoration: none">
            <span style="color: #C9232D; font-weight: 700">Welcome to Hotel Sun 
            Shine</span></a></font></p>
            <p>&nbsp;</td>
          </tr>
          <tr>
            <td align="left" valign="top" height="182">&nbsp;</td>
            <td width="573" align="left" valign="top" class="header_image" height="182">
            <p>
            <img border="0" src="header_bg.jpg" width="573" height="175"></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td align="left" valign="top">
        <table width="741" border="0" cellspacing="0" cellpadding="0" height="217">
          <tr>
                <td height="27" align="left" valign="middle" width="167">
                &nbsp;</td>
              </tr>
          <tr>
                <td height="27" align="center" valign="middle" width="167">
                <font size="2" color="#78462F"><b>
                <a class="left_link" href="compose.html">
                <u><font face="Viner Hand ITC" size="3" color="#C9232D">Compose Mail</font></u></a></b></font></td>
              </tr>
          <tr>
                <td height="27" align="center" valign="middle" width="167">
                <font size="2" color="#78462F"><b>
                <a class="left_link" href="inbox.php">
                <u><font face="Viner Hand ITC" size="3" color="#C9232D">Check Mail</font></u></a></b></font></td>
              </tr>
          <tr>
                <td height="27" align="center" valign="middle" width="167">
                <font size="2" color="#78462F">
                <b><a class="left_link" href="signout.html"><u>
                <font face="Viner Hand ITC" size="3" color="#C9232D">Sign Out</font></u></a></b></font></td>
              </tr>
          <tr>
            <td width="167" align="left" valign="top" height="22">&nbsp;</td>
            <td align="left" valign="top" width="574" height="22" colspan="2">
                &nbsp;<p>
            <font face="Times New Roman Special G1" size="4" color="#78462F">
                <p align="center"><b>
            <i>

                <font face="Viner Hand ITC" size="5" color="#78462F">
                Inbox</font></i></b></p>
                </font>
            <p class="MsoNormal"><font color="#78462F"></i></b>
            </font>
            <p class="MsoNormal">
            <p class="MsoNormal">
            <p class="MsoNormal">
            <p class="MsoNormal"></td>
          </tr>
          

	<br>
            
            	<table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber1">
             	<td width=24% height=34>
                <p align=center><font color=#78462F face=Viner Hand ITC>FROM</font></td>

		<td width=76% height=34>
                <p align=center><font face=Viner Hand ITC color=#78462F>MESSAGE</font></td>
              <?

		$database="sunshine";
        	$to1=$_SESSION['user'];  
	        mysql_connect("localhost","root","");
        	@mysql_select_db($database) or die("UNABLE TO SELECT DATABASE");
	        $query="SELECT * FROM email1 WHERE to1='$to1'";
        	$result=mysql_query($query);
	        $rows=mysql_num_rows($result);
        	$i=0;
               	
               	while($i<$rows)
                {
                  $name=mysql_result($result,$i,"from1");
               	$message=mysql_result($result,$i,"message");
                echo"<tr>
  		 
		<td width=24% height=34>
                <p align=center><font color=#78462F face=Viner Hand ITC>$name</font></td>

		<td width=76% height=34>
                <p align=center><font face=Viner Hand ITC color=#78462F>$message</font></td>
		
              	</tr>";
                    $i++;               
                }
		mysql_close();
		
               ?>  
          </table>

          <tr>
            <td width="167" align="left" valign="top" height="14"></td>
            <td align="left" valign="top" width="574" height="14" colspan="2"></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td align="left" valign="top"><table width="741" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td style="border-top:2px solid #78462F; padding-left:15px;">&nbsp;</td>
<!--
We request you retain the full web design copyright notice below including the link to http://www.sarkis-webdesign.com
This not only gives respect to the large amount of time given freely by the designer but also helps build interest, traffic and use of template. If you cannot (for good reason) retain the full design copyright we request you at least leave in place the image Web designer - Sarkis, with linked to http://www.sarkis-webdesign.com. Good luck!

Web designer Sarkis: 2006
// -->
            <td width="117">&nbsp;</td>
          </tr>
        </table>          </td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>