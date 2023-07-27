<?php
		session_start();
    	if($_SESSION[login]!=1)
        		header("Location:index.php");
	
	$session_user=$_SESSION[usr];
	$session_password=$_SESSION[pwd];
?>

<html>

<head>
	<title>Change Password</title>
    <body background="Pictures/changpass.jpg">

	<style type="text/css">
		#a{
			font-family:"Bookman Old Style";
			font-size:20;
		}
		
		#b{
			font-family:"Bodoni MT";
			font-size:13;
		}
		
		#c{
			font-family:"Baskerville Old Face";
			font-size:16;
		}
	</style>

	<script language="JavaScript">
		function chgmncolor()
		{
			document.getElementById("m1").bgColor="white"
			document.getElementById("m2").bgColor="white"
			document.getElementById("m3").bgColor="hardgray"
			document.getElementById("m4").bgColor="white"
			document.getElementById("m5").bgColor="white"
		}
	</script>

<table border=0 width=75%  align="center" cellspacing=1% cellpadding=0% bordercolor="red">
<tr><td align="right"><a href="logout.php"><font color="#000000" size="+2" face="Arial, Helvetica, sans-serif">Logout</font></a>&nbsp;&nbsp;&nbsp;<b><?php echo $session_user; ?></b>&nbsp;&nbsp;</font></td></tr>
<tr><td bgcolor="white">
	<script src="header.js">
	</script>
	<table border=0% width=100% height=100% bgcolor="lightgray" bordercolor="#F4F4F4" align="center" cellspacing=0% cellpadding=0%>	
		<tr>
			<form name="idpass" method="POST" action="searchinformation2.php">
			<td colspan=3 bgcolor="#FFCCCC" align="right">
			 <input type="text" size="25" value="ID" name="proid" onBlur="if(this.value=='') this.value='ID';" onFocus="if(this.value=='ID') this.value='';"> 
              &nbsp;&nbsp;&nbsp;<input type="submit" name="idsubmit" value="Search">
				&nbsp;&nbsp;&nbsp;&nbsp;<input type="hidden" value="change_password" name="pg">
			</td>
			</form>
		</tr>	
		<tr>
			<td bgcolor="white" align="center" width=25% height=25% id="mr">
					<marquee behavior="alternate" direction="right" id="mr" scrollamount=6 onMouseOver="this.scrollAmount=0" onMouseOut="this.scrollAmount=6" >
						<img src="pictures/cpl1.jpg" height=150 width=300></img>
						<img src="pictures/cpl2.jpg" height=150 width=300></img>
						<img src="pictures/cpl3.jpg" height=150 width=300></img>
						<img src="pictures/cpl4.jpg" height=150 width=300></img>
					</marquee><br>
			</td>
						<td bgcolor="white" align="center" width=25% height=25% id="mr">
					<marquee behavior="alternate"  direction="left" id="mr" scrollamount=6 onMouseOver="this.scrollAmount=0" onMouseOut="this.scrollAmount=6" >
						<img src="pictures/cpl4.jpg" height=150 width=300></img>
						<img src="pictures/cpl3.jpg" height=150 width=300></img>
						<img src="pictures/cpl2.jpg" height=150 width=300></img>
						<img src="pictures/cpl1.jpg" height=150 width=300></img>
					</marquee>
				<br>
			</td>
			<td bgcolor="white" align="center">
				<b><font size=5 color="darkred" face="Comic Sans MS">UnderStanding Your Soon<br>To Be Better<br>Half</font></b>
			</td>
		</tr>
	</table>
	
	<table border=0% width=100% height=0% bgcolor="white" bordercolor="black" align="center" cellspacing=3% cellpadding=3%>
		<tr>
			<td height="37" align="center" bgcolor="white"><font face="sans-serif" size="+2" color="#CC0000">Go-></font></td>
			<td align="center" height="40" bgcolor="white" onMouseOver="this.bgColor='lightpink'" onMouseOut="this.bgColor='white'" id="m1"><a href="index.php"><font id="a"><b><font color="black">Home</b></font></a></td>
			<td align="center" bgcolor="white" onMouseOver="this.bgColor='lightpink'" onMouseOut="this.bgColor='white'" id="m2"><a href="howdoilook.php"><font id="a"><b><font color="black">Profile</b></font></a></td>
			<td align="center"  bgcolor="white" onMouseOver="this.bgColor='lightpink'" onMouseOut="this.bgColor='white'" id="m3"><a href="change_password.php"><font id="a"><b><font color="black">Change Password</b></font></a></td>
			<td align="center" bgcolor="white" onMouseOver="this.bgColor='lightpink'" onMouseOut="this.bgColor='white'" id="m4"><a href="smart_search.php"><font id="a"><b><font color="black">Search</b></font></a></td>
			<td align="center" bgcolor="lightpink"   id="m5"><a href="contactus.php"><font id="a"><b><font color="black">Contact Us</b></font></a></td>
			<td align="center" bgcolor="white" onMouseOver="this.bgColor='lightpink'" onMouseOut="this.bgColor='white'" id="m5"><a href="feedback.php"><font id="a"><b><font color="black">Feedback</b></font></a></td>						
          <td align="center" bgcolor="red"><font face="sans-serif" size="+2" color="#CC0000"><-Go</font></td>
		</tr>				
	</table>


	<table border=0% width=100% height=100% bgcolor="" align="center" cellspacing=2% cellpadding=0% bordercolor="white">
		<tr>
			<td valign="top" height=100% width=20%>
				<table border=1% width=100% height=100% bgcolor="white" bordercolor="#660033" align="center" cellspacing=0% cellpadding=0%>
					<tr>
						<td align="center" valign="center">
						<b><br>
							<img src="pictures/hrt.gif"></img><br>
							<font face="Baskerville Old Face" color="lightwhite" size=3>Links For Searches </fonts><br>
							<hr width=90% size=1 color=darkblue></b>
						<font face="Baskerville Old Face" color="blue" size=3><br>
							<a href="state_search.php">State Search</a><br><br>
							<a href="city_search.php">City Search</a><br><br>
							<a href="smart_search.php">Smart Search</a><br><br>
							<a href="profession_search.php">Profession Search</a><br><br>
						</font>
						</td>
					</tr>
				</table>
			</td>
			
			<td align="right">
				<table border=0% width=100% height=100% align="center" cellspacing=0% cellpadding=0%>
					<tr>
						<td colspan=3 bgcolor="#FFFFFF">
							<hr size=6 width=100% color="#660033">
							<font face="Comic sans ms" size=6>
					<center>
                    	<strong><b>Contect Us:</strong><font face="Comic sans ms" size=5 color="darkgreen"><b>To Contact Us Please,Try Here...<b>!</b></font> 
                    </center>
							<hr size=6 width=100% color="#660033">
						</td>
					</tr>
					
					<tr>	
						<td width=100% align="left" valign="top" height=100%>
							<table border=0% width=100% height=100% bgcolor="white" bordercolor="darkpink" align="center" cellspacing=0% cellpadding=0%>
								<tr>
									<td valign="center" align="center" width=30% height=100%><br><br>
										<img src="pictures/cp2.jpg" width=100% height=100%></img>  
									
									</td>
									<td align="left" bgcolor="white" width=40% valign="center">
										<center>
										  <h2><font  color="darkred" face="Comic Sans MS"><u>Contact Us</u></font></h2>
										
     
      
		       <table border="3" bordercolor="#990000" align="center" width=80%>
			   <tr><td align="center">
		<font color="darkgreen" style="sans comic ms" size="+1"><u><font color="#660000">BHATT YOGI J.</font></u>
		<p align="justify">Address:-&nbsp;&nbsp;"OM",
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ramdevpir Chowk
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; opp.Om Party Plot
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Rajkot<br>
		Mobile:-&nbsp;&nbsp;&nbsp; 9033842578<br>
		E-mail:-&nbsp;&nbsp;&nbsp; bhattyogi11@yahoo.com</p>
              </td></tr>
	   <tr><td align="center">
		<font color="darkgreen" style="sans comic ms" size="+1"><u><font color="#660000">SHETH DHAVAL H.</font></u>
<p align="justify">Address:-&nbsp;&nbsp;"Prabhuvilla",
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ashapura Society,
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Near Patel Boarding,
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; opp.Party Plot
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Gondal-360311<br>
		Mobile:-&nbsp;&nbsp;&nbsp; 9824152024 <br>
		E-mail:-&nbsp;&nbsp;&nbsp; Dhavalsheth111s
@gmail.com</p>
              </td></tr>

								</table>
								<tr>
									<td colspan=3 align="center" valign="center">
										<br>
										<font face="Comic Sans MS" size=5 color="darkred">The secret of a happy marriage remains a secret.</font>
										<br>
									</td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td colspan=6 height=150>
							<img src="pictures/nat4.jpg" height=100% width=100%></img>
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
</td></tr>
</table>	
</head>
<body bgcolor="orange">
</body>
</html>