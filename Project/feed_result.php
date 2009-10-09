<?
  $username="";
  $password="";
  $database="sggsiet";
  
  $name=$_POST['username'];
  $email=$_POST['email'];
  $college=$_POST['college'];
  $comments=$_POST['comments'];
  
  mysql_connect("localhost","root","");
  @mysql_select_db($database) or die("UNABLE TO SELECT DATABASE");
  $query="INSERT INTO FEEDBACK VALUES('$_POST[username]','$_POST[email]','$_POST[college]','$_POST[comments]')";
  $result=mysql_query($query);
  mysql_close();
?>
<HTML><HEAD><TITLE>project</TITLE>
<META content=GLOBAL name=DISTRIBUTION>
<META content=project name=AUTHOR>
<META content=Copyright (c) by project name=COPYRIGHT>
<META 
content=student 
name=KEYWORDS>
<META 
content=student 
name=DESCRIPTION>
<META content=INDEX, FOLLOW name=ROBOTS>
<META content=1 DAYS name=REVISIT-AFTER>
<META content=GENERAL name=RATING>
<!-- tinyMCE -->
<SCRIPT language=javascript 
src=project/tiny_mce.js
type=text/javascript></SCRIPT>

<SCRIPT language=javascript type=text/javascript>
	   	tinyMCE.init({
      		mode : "textareas",
			theme : "default",
			language : "english",
			editor_css : "themes/V-BlueBaby/style/editor.css",
			force_p_newlines: "false",
			force_br_newlines: "true"
	   	});
		</SCRIPT>
<!-- /tinyMCE --><LINK title=RSS href="backend.php" type=application/rss+xml 
rel=alternate><LINK href="project/style.css" 
type=text/css rel=StyleSheet>
<SCRIPT language=JavaScript>
<!--
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}
function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_preloadImages() { //v3.0
 var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
   var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
   if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

//-->
</SCRIPT>
</HEAD>
<BODY text=#333333 bgColor=#f7f9fb leftMargin=0 topMargin=0 marginheight="0" 
marginwidth="0">
<TABLE cellSpacing=0 cellPadding=0 width="100%" border=0 height="139"><!--DWLayoutTable--><!-- fwtable fwsrc="header.png" fwbase="header.jpg" fwstyle="Generic" fwdocid = "742308039" fwnested="0" -->
  <TBODY>
  <TR>
    <TD height="1"><IMG height=1 alt="" 
      src="project/spacer.gif" width=468 
border=0></TD>
    <TD width="100%" height="1"><IMG height=1 alt="" 
      src="project/spacer.gif" width=23 border=0></TD>
    <TD height="1"><IMG height=1 alt="" 
      src="project/spacer.gif" width=264 
border=0></TD>
    <TD height="1"><IMG height=1 alt="" 
      src="project/spacer.gif" width=1 
  border=0></TD></TR>
  <TR>
    <TD background="project/header1.gif" height="24">
    <img id="header1" alt src="project/spacer.gif" border="0" name="header1" width="1" height="1"> 
    &nbsp;<font face="Verdana">An Autonomous Institute</font></TD>
    <TD background="project/header2.gif" height="24"><!--DWLayoutEmptyCell-->&nbsp;</TD>
    <TD height="24"><IMG id=header3 height=24 alt="" 
      src="project/header3.gif" width=264 border=0 
      name=header3></TD>
    <TD bgColor=#bec2c5 height="24"><IMG height=24 alt="" 
      src="project/spacer.gif" width=1 
  border=0></TD></TR>
  <TR>
    <TD height="64"><IMG id=header4 height=64 alt="" 
      src="project/header4.jpg" width=468 border=0 
      name=header4></TD>
    <TD background="project/header5.gif" height="64"><!--DWLayoutEmptyCell-->&nbsp;</TD>
    <TD height="64"><IMG id=header6 height=64 alt="" 
      src="project/header6.jpg" width=264 border=0 
      name=header6></TD>
    <TD bgColor=#bec2c5 height="64"><IMG height=64 alt="" 
      src="project/spacer.gif" width=1 
  border=0></TD></TR>
  <TR>
    <TD background="project/header7.gif" 
      colSpan=3 height="32"><TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
        <TBODY>
        <TR>
          <TD vAlign=bottom>
            <DIV class=navcontainer>
            <UL id=navlist>
              <LI><A href="index.html">HOME</A> 
              <LI><A href="how to reach.html">HOW TO REACH?</A> 
              <LI><A title=Feedback 
              href="feedback.html">FEEDBACK</A> 

              <LI><A href="directors word.html">DIRECTOR'S 
              WORD</A> 
              </LI></UL></DIV></TD>
          <TD align=right>
            <SCRIPT type=text/javascript>
<!--   // Array ofmonth Names
var monthNames = new Array( "January","February","March","April","May","June","July","August","September","October","November","December");
var now = new Date();
thisYear = now.getYear();
if(thisYear < 1900) {thisYear += 1900}; // corrections if Y2K display problem
document.write(monthNames[now.getMonth()] + " " + now.getDate() + ", " + thisYear);
// -->
            </SCRIPT>
            &nbsp; </TD></TR></TBODY></TABLE></TD>
    <TD background="project/header7.gif" height="32"><IMG 
      height=30 alt="" src="project/spacer.gif" 
      width=1 border=0></TD></TR>
  <TR>
    <TD background="project/header8.gif" 
      colSpan=3 height="18"><IMG id=header8 height=1 alt="" 
      src="project/spacer.gif" width=1 border=0 
      name=header8></TD>
    <TD background="project/header8.gif" height="18"><IMG 
      height=20 alt="" src="project/spacer.gif" 
      width=1 border=0></TD></TR></TBODY></TABLE>
<TABLE cellSpacing=0 cellPadding=0 width="934" border=0>
  <TBODY>
  <TR vAlign=top>
    <TD bgColor=#f7f9fb width="8"><IMG height=1 alt="" src="" width=5 border=0></TD>
    <TD vAlign=top width=155 bgColor=#f7f9fb>
      <TABLE cellSpacing=0 cellPadding=0 width=155 bgColor=#f7f9fb border=0>
        <TBODY>
        <TR>
          <TD><IMG height=13 alt="" 
            src="project/box_r1_c1.gif" width=12 
            border=0 name=box_r1_c1></TD>
          <TD width="100%" 
          background="project/box_r1_c2.gif"><IMG 
            height=1 alt="" src="project/spacer.gif" 
            width=1 border=0 name=box_r1_c2></TD>
          <TD><IMG height=13 alt="" 
            src="project/box_r1_c3.gif" width=12 
            border=0 name=box_r1_c3></TD></TR>
        <TR>
          <TD 
            background="project/box_r2_c1.gif"><IMG 
            height=1 alt="" src="project/spacer.gif" 
            width=1 border=0 name=box_r2_c1></TD>
          <TD vAlign=top bgColor=#ffffff align="justify">
          <p align="left"><SPAN class=leftcontent>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <IMG 
            src="project/Modules.gif" width="89" height="13"></SPAN></p>
          <p align="center"><SPAN class=leftcontent>
          &nbsp; <a href="cwm.html">CIVIL &amp; WATER &nbsp;&nbsp;MANAGEMENT 
          ENGG.</a></SPAN></p>
          <p align="center"><SPAN class=leftcontent>
          <A 
            href="cse.html">COMPUTER 
          SCIENCE &amp; ENGG.</A></SPAN></p>
          <p align="center"><SPAN class=leftcontent>
          &nbsp;<A 
            href="extc.html">ELECTRONICS 
          &amp; TELE-COMMUNICATION ENGG.</A></SPAN></p>
          <p align="center"><SPAN class=leftcontent>
          &nbsp;<a href="it.html">INFORMATION 
          TECHNOLOGY</a></SPAN></p>
          <p align="center"><SPAN class=leftcontent>
          &nbsp;<a href="instru.html">INSTRUMENTATION 
          ENGG.</a></SPAN></p>
          <p align="center"><SPAN class=leftcontent>
          &nbsp;<a href="prod.html">PRODUCTION 
          ENGG.</a></SPAN></p>
          <p align="center"><SPAN class=leftcontent>
          &nbsp;<a href="textile.html">TEXTILE 
          TECHNOLOGY</a></SPAN></p>
          <p align="center"><SPAN class=leftcontent>
          &nbsp;<a href="sugar.html">SUGAR 
          TECHNOLOGY</a></SPAN></TD>
          <TD 
            background="project/box_r2_c3.gif" align="justify"><IMG 
            height=1 alt="" src="project/spacer.gif" 
            width=1 border=0 name=box_r2_c3></TD></TR>
        <TR>
          <TD><IMG height=13 alt="" 
            src="project/box_r3_c1.gif" width=12 
            border=0 name=box_r3_c1></TD>
          <TD 
            background="project/box_r3_c2.gif"><IMG 
            height=1 alt="" src="project/spacer.gif" 
            width=1 border=0 name=box_r3_c2></TD>
          <TD><IMG height=13 alt="" 
            src="project/box_r3_c3.gif" width=12 
            border=0 name=box_r3_c3></TD></TR></TBODY></TABLE><BR>
    <TD bgColor=#f7f9fb width="62"><IMG height=1 alt="" src="" width=10 border=0></TD>
    <TD vAlign=top align=middle width="459" bgColor=#f7f9fb cellpadding="0" 
    cellspacing="1" border="0">
      <TABLE cellSpacing=0 cellPadding=0 width="465" bgColor=#f7f9fb 
        border=0 height="140"><TBODY>
        <TR>
          <TD width="12" height="13"><IMG height=13 alt="" 
            src="project/box_r1_c1.gif" width=12 
            border=0 name=box_r1_c1></TD>
          <TD width="441" 
          background="project/box_r1_c2.gif" height="13"><IMG 
            height=1 alt="" src="project/spacer.gif" 
            width=1 border=0 name=box_r1_c2></TD>
          <TD width="12" height="13"><IMG height=13 alt="" 
            src="project/box_r1_c3.gif" width=12 
            border=0 name=box_r1_c3></TD></TR>
        <TR>
          <TD 
            background="project/box_r2_c1.gif" width="12" height="114"><IMG 
            height=1 alt="" src="project/spacer.gif" 
            width=1 border=0 name=box_r2_c1></TD>
          <TD vAlign=top bgColor=#ffffff width="441" height="114">
            <IMG height=17 
                        src="project/feedback_title.gif" 
                        width=95>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            <p><b>THANKS FOR YOUR VIEWS. WE HOPE TO SEE YOU IN FUTURE.</b></p>
    




         <TABLE cellSpacing=0 cellPadding=0 width="441" 
border=0 height="136">
                          <TR>
                            <TD class=name vAlign=middle width="96" 
                              height=31>
                            <p align="left"><span class="leftcontent">Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            </span>
            <span class="boldtitles"><b>
            <span style="font-size: 7.5pt; font-family: Verdana; color: red">&nbsp;</span></b></span></TD>
                            <TD width="345" height=31>
                            <?echo"$name"?>
                            </TD>
                            </TR>
                          <TR>
                            <TD class=style5 vAlign=middle height="30" width="96">
                            <span class="leftcontent">Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            </span>
                            </TD>
                            <TD height=30 width="345">
                            <?echo"$email";?></TD></TR>
                          <TR>
                            <TD class=style5 vAlign=middle height="36" width="96">
                            <span class="leftcontent">College</span></TD>
                            <TD height=36 width="345">
                            <?echo"$college";?></TD></TR>
                          <TR>
                            <TD class=style5 vAlign=middle height=39 width="96"><span class="leftcontent">
                            Comments&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            </span>
                            </TD>
                            <TD vAlign=top height=21 width="345">
                              <SPAN class=leftcontent>
                            <FONT class=content>
                              
                              
                              
                              
                             
            <?echo"$comments";?></FONT></SPAN></TD></TR>
                          </TABLE></FORM>
            </TD>
          <TD 
            background="project/box_r2_c3.gif" width="12" height="114"><IMG 
            height=1 alt="" src="project/spacer.gif" 
            width=1 border=0 name=box_r2_c3></TD></TR>
        <TR>
          <TD width="12" height="13"><IMG height=13 alt="" 
            src="project/box_r3_c1.gif" width=12 
            border=0 name=box_r3_c1></TD>
          <TD 
            background="project/box_r3_c2.gif" width="441" height="13"><IMG 
            height=1 alt="" src="project/spacer.gif" 
            width=1 border=0 name=box_r3_c2></TD>
          <TD width="12" height="13"><IMG height=13 alt="" 
            src="project/box_r3_c3.gif" width=12 
            border=0 name=box_r3_c3></TD></TR></TBODY></TABLE><BR>
      
       
    <TD bgColor=#f7f9fb width="66"><IMG height=1 alt="" src="" width=10 border=0></TD>
    <TD vAlign=top width=169 bgColor=#f7f9fb>
      
      <TABLE cellSpacing=0 cellPadding=0 width=155 bgColor=#f7f9fb border=0>
        <TBODY>
        <TR>
          <TD><IMG height=13 alt="" 
            src="project/box_r1_c1.gif" width=12 
            border=0 name=box_r1_c1></TD>
          <TD width="100%" 
          background="project/box_r1_c2.gif"><IMG 
            height=1 alt="" src="project/spacer.gif" 
            width=1 border=0 name=box_r1_c2></TD>
          <TD><IMG height=13 alt="" 
            src="project/box_r1_c3.gif" width=12 
            border=0 name=box_r1_c3></TD></TR>
        <TR>
          <TD 
            background="project/box_r2_c1.gif"><IMG 
            height=1 alt="" src="project/spacer.gif" 
            width=1 border=0 name=box_r2_c1></TD>
          <TD vAlign=top bgColor=#ffffff><SPAN class=leftcontent>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <IMG 
            src="project/Login.gif" width="100" height="19"><BR>
            <FORM action=modules.php?name=Your_Account method=post>
            <CENTER><FONT class=content>User Id<BR><INPUT maxLength=25 size=15 
            name=username><BR>Password<BR><INPUT type=password maxLength=20 
            size=15 name=user_password><BR><INPUT type=hidden value=897161 
            name=random_num><INPUT type=hidden name=gfx_check><INPUT type=hidden 
            value=login 
            name=op><INPUT type=submit value=Login></FONT></CENTER></FORM>
            <CENTER><FONT class=content>Forgot Password?&nbsp; <A 
            href="forgot password.php">
            <U>CLICK HERE</U></A></FONT><p><FONT class=content>&nbsp;NOTE: Only 
            authorized faculty members can enter the 
            institute's account. </FONT></p>
          </CENTER></SPAN></TD>
          <TD 
            background="project/box_r2_c3.gif"><IMG 
            height=1 alt="" src="project/spacer.gif" 
            width=1 border=0 name=box_r2_c3></TD></TR>
        <TR>
          <TD><IMG height=13 alt="" 
            src="project/box_r3_c1.gif" width=12 
            border=0 name=box_r3_c1></TD>
          <TD 
            background="project/box_r3_c2.gif"><IMG 
            height=1 alt="" src="project/spacer.gif" 
            width=1 border=0 name=box_r3_c2></TD>
          <TD><IMG height=13 alt="" 
            src="project/box_r3_c3.gif" width=12 
            border=0 name=box_r3_c3></TD></TR></TBODY></TABLE><BR>

      
    <TD bgColor=#f7f9fb width="7"><IMG height=1 alt="" src="" width=5 border=0> 
    <TD bgColor=#f7f9fb width="8"><IMG height=1 alt="" src="" width=1 
  border=0></TD></TD></TR></TBODY></TABLE>
<TABLE cellSpacing=0 cellPadding=0 width="100%" border=0><!--DWLayoutTable--><!-- fwtable fwsrc="footer.png" fwbase="footer.jpg" fwstyle="Generic" fwdocid = "742308039" fwnested="0" -->
  <TBODY>
  <TR>
    <TD width="100%"><IMG height=1 alt="" 
      src="project/spacer.gif" width=755 
border=0></TD>
    <TD><IMG height=1 alt="" 
      src="project/spacer.gif" width=1 
  border=0></TD></TR>
  <TR>
    <TD background="project/footer1.gif">&nbsp;</TD>
    <TD background="project/footer1.gif"><IMG 
      height=35 alt="" src="project/spacer.gif" 
      width=1 border=0></TD></TR>
  <TR>
    <TD align=middle><BR><SPAN class=slogan>site developed and maintained by 
    department of Information Technology&nbsp;</SPAN> <BR><FONT class=footmsg><SPAN class=footmsg>
    This site is not an official website of the institute. We are not 
    responsible for any discrepancy in the data given in this site.</SPAN><BR>&nbsp;</FONT></TD>
    <TD><IMG height=14 alt="" 
      src="project/spacer.gif" width=1 
  border=0></TD></TR>
  <TR>
    <TD 
    background="project/footer3.gif" height=14>
    <p align="center">
    <a href="contacts.html">
    Contact Us</a></TD>
    <TD background="project/footer3.gif"><IMG 
      height=14 alt="" src="project/spacer.gif" 
      width=1 border=0></TD></TR></TBODY></TABLE></BODY></HTML>