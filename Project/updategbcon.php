<?
  $username="";
  $password="";
  $database="sunshine";
  
  $name=$_POST['name'];
  $email=$_POST['FROM'];
  $add=$_POST['address'];
  $city=$_POST['city'];
  $state=$_POST['state'];
  $country=$_POST['country'];
  $zip=$_POST['zip']; 
  $phone=$_POST['phone'];
  
  mysql_connect("localhost","root","");
  @mysql_select_db($database) or die("UNABLE TO SELECT DATABASE");
  $query="INSERT INTO guest VALUES('$name','$email','$add','$city','$state','$country','$zip','$phone')";
  $result=mysql_query($query);
  mysql_close();
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
        <td align="left" valign="top"><table width="741" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="153" align="left" valign="middle">&nbsp;</td>
            <td width="15" rowspan="2" align="left" valign="top">&nbsp;</td>
            <td height="65" align="right" valign="middle">&nbsp;<p>&nbsp;</p>
            <p><font face="Vladimir Script" size="6">
            <a href="mailto:abc@yoursite.com" style="text-decoration: none">
            <span style="color: #C9232D; font-weight: 700">Welcome to Hotel Sun 
            Shine</span></a></font></p>
            <p>&nbsp;</td>
          </tr>
          <tr>
            <td align="left" valign="top"><table width="153" border="0" cellpadding="0" cellspacing="0" class="menu_table">
              <tr>
                <td height="27" align="left" valign="middle">
                <font size="2" color="#78462F"><b><a href="index.html" class="left_link">Home</b></font></a></td>
              </tr>
              <tr>
                <td height="27" align="left" valign="middle">
                <font size="2" color="#78462F"><b><a href="location.html" class="left_link">Location</b></font></a></td>
              </tr>
              <tr>
                <td height="27" align="left" valign="middle">
                <font size="2" color="#78462F"><b><a href="accom.html" class="left_link">
                Accommodation</b></font></a></td>
              </tr>
              <tr>
                <td height="27" align="left" valign="middle">
                <font size="2" color="#78462F"><b><a href="gallery.html" class="left_link">Photo Gallery</b></font></a></td>
              </tr>
              <tr>
		     <td height="27" align="left" valign="middle">
               <font size="2" color="#78462F"><b><a href="guest.html" class="left_link">Guest Book</b></font></a></td>
              </tr>
        
              <tr>
                <td height="27" align="left" valign="middle"><a href="contacts.html" class="left_link">Contacts</a></td>
              </tr>
              <tr>
                <td height="27" align="left" valign="middle">
                <font size="2" color="#78462F"><b><a href="aboutus.html" class="left_link">About Us</b></font></a></td>
              </tr>
            </table></td>
            <td width="573" align="left" valign="top" class="header_image">
            <p>
            <img border="0" src="header_bg.jpg" width="573" height="175"></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="168" align="left" valign="top"><a href="#offer.html">
            <img src="offer_box.jpg" alt="Special Offer" width="104" height="107" border="0" class="offer_box" /></a></td>
            <td align="left" valign="top">&nbsp;<table width="573" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td height="26" colspan="2" align="left" valign="top"><i>
                <font face="Times New Roman Special G1" size="5" color="#78462F">
                Thank You</font></i></td>
              </tr>
              <tr>
                <td width="76" height="16" align="center" valign="middle" bgcolor="#5B3524" style="font-size:10px; color:#FFF;">&nbsp;</td>
                <td align="left" valign="top">&nbsp;</td>
              </tr>
              <tr>
                <td colspan="2" align="left" valign="top">&nbsp;<P align=center>
                <i>
                <font face="Times New Roman Special G1" size="4" color="#78462F">Thank you for signing our guest book.
                </font></i> </P>
      <P align=center>
      <font face="Times New Roman Special G1" size="4" color="#78462F"><i>Your 
      entry has been updated in the Guest Book of The Sun Shine.</i>
      </font> </P>
                <p>&nbsp;</p>
                <p><i><font face="Times New Roman Special G1">
                <font size="4" color="#78462f">The Sun Shine Hotel Opp. to 
                S.G.G.S College Vishnupuri Nanded<br>
                </font><font size="4">
                <a class="testobox" style="text-decoration: none" href="mailto:reservations@michelangelohotel.com">
                <font color="#78462f">reservations@sunshinehotel.com</font></a></font></font></i></p>
                <p><i>
                <font color="#78462f" size="4" face="Times New Roman Special G1">
                <br>
                Main Phone (02462)223417</font><font size="4"> </font>
                <font face="Times New Roman Special G1" color="#78462f" size="4">
                <nobr><strong style="font-weight: 400">Reservations</strong> 
                +91-9822425704 or +91-9822777587</nobr><br>
                Main Fax (02462)222210<br>
                <strong style="font-weight: 400">Sales Fax</strong> 
                (02462)220020</font></i></p>
                <p>&nbsp;</td>
              </tr>
              <tr>
                <td colspan="2" align="left" valign="top" style="text-align:justify;">
                <p>&nbsp;</td>
              </tr>
              <tr>
                <td colspan="2" align="left" valign="top" class="border_bottom">&nbsp;</td>
              </tr>
              <tr>
                <td colspan="2" align="left" valign="top">&nbsp;</td>
              </tr>
              <tr>
                <td colspan="2" align="left" valign="top" style="text-align:justify;">&nbsp;</td>
              </tr>
              <tr>
                <td colspan="2" align="left" valign="top">&nbsp;</td>
              </tr>
            </table></td>
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