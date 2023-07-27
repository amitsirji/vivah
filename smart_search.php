<?php
	session_start();
    	if($_SESSION[login]!=1)
        		header("Location:index.php");
	
	$session_user=$_SESSION[usr];
	$session_password=$_SESSION[pwd];	
?>

<html>
	
<head>
	<title>Smart Search</title>

	
	<style type="text/css">
		#a{
			font-family:"Bookman Old Style";
			font-size:20;
			font-color:"blue";
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
			document.getElementById("m3").bgColor="white"
			document.getElementById("m4").bgColor="hardgray"
			document.getElementById("m5").bgColor="white"
		}

	</script>

<table border=0 width=75% align="center" cellspacing=1% cellpadding=0%>
<tr><td align="right"><a href="logout.php"><font color="#000000" size="+2" face="Arial, Helvetica, sans-serif">Logout</font></a>&nbsp;&nbsp;&nbsp;<b><?php echo $session_user; ?></b>&nbsp;&nbsp;</font></td></tr>
<tr><td >
	<script src="header.js">
	</script>
	
	<table border=0% width=100% height=100%  align="center" cellspacing=0% cellpadding=0%>	
		<tr>
			<form name="idpass" method="POST" action="searchinformation2.php">
<td colspan=3 bgcolor="#FFCCCC" align="right">
				<!--<input type="text" name="proid" value="ID" size=25> -->
				<input type="text" size="25" value="ID" name="proid" onBlur="if(this.value=='') this.value='ID';" onFocus="if(this.value=='ID') this.value='';">
				&nbsp;&nbsp;&nbsp;<input type="submit" name="idsubmit" value="Search">
				&nbsp;&nbsp;&nbsp;&nbsp;<input type="hidden" value="change_password" name="pg">
			</td>			</form>
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
	
	<table border=0 width=100% height=0% bgcolor="white" bordercolor="black" align="center" cellspacing=3% cellpadding=3%>
		<tr>
			<td height="37" align="center" bgcolor="white"><font face="sans-serif" size="+2" color="#CC0000">Go-></font></td>
			<td align="center" height="40" bgcolor="white" onMouseOver="this.bgColor='lightpink'" onMouseOut="this.bgColor='white'" id="m1"><a href="index.php"><font id="a"><b><font color="black">Home</b></font></a></td>
			<td align="center" bgcolor="white" onMouseOver="this.bgColor='lightpink'" onMouseOut="this.bgColor='white'" id="m2"><a href="howdoilook.php"><font id="a"><b><font color="black">Profile</b></font></a></td>
			<td align="center"  bgcolor="white" onMouseOver="this.bgColor='lightpink'" onMouseOut="this.bgColor='white'" id="m3"><a href="change_password.php"><font id="a"><b><font color="black">Change Password</b></font></a></td>
			<td align="center"  bgcolor="lightpink" id="m4"><a href="smart_search.php"><font id="a"><b><font color="black">Search</b></font></a></td>
			<td align="center" bgcolor="white" onMouseOver="this.bgColor='lightpink'" onMouseOut="this.bgColor='white'" id="m5"><a href="contectus.php"><font id="a"><b><font color="black">Contect Us</b></font></a></td>
			<td align="center" bgcolor="white" onMouseOver="this.bgColor='lightpink'" onMouseOut="this.bgColor='white'" id="m5"><a href="feedback.php"><font id="a"><b><font color="black">Feedback</b></font></a></td>									
          <td align="center" bgcolor="magento"><font face="sans-serif" size="+2" color="#CC0000"><-Go</font></td>
		</tr>				
	</table>				
	</table>


	<table border=0 width=75% height=100%  align="center" cellspacing=0% cellpadding=0%>
		<tr>
			<td align="right">
				<table border=0 width=75%  align="center" cellspacing=0% cellpadding=0%>
					<tr>
						<td colspan=3>
							<hr size=2 width=97% color="darkred">
							<font face="Baskerville Old Face" size=6>
								<center><strong>&nbsp;&nbsp;Smart Search:</strong></font>&nbsp;&nbsp;<font face="Baskerville Old Face" size=4 color="darkgreen"><b>To Find Your Life partner By Matching with full details...!</font></center>
							<hr size=2 width=97% color="darkred">
						</td>
					</tr>
					<tr>
						<td align="center" colspan=3>
							<a href="state_search.php">State Search</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<a href="city_search.php">City Search</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<a href="smart_search.php"><font color="darkgreen">Smart Search</font></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<a href="profession_search.php">Profession Search</a>&nbsp;&nbsp;&nbsp;
						</td>
					</tr>
					<tr>
						<td width=60% align="left" valign="top" height=100%>
							<form name="ff3" action="searchinformation1.php" method="POST">
							<br>&nbsp;&nbsp;<h3 align="justify"><img src="pictures/bull.gif"></img>&nbsp;Basic Information:<br>&nbsp;&nbsp;&nbsp;-------------------------<br>
							<font id="b">
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sex:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<select name="gender">
										<option>Male</option>
										<option>Female</option>
									</select><br><br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Age:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<select name="age1">
					<script language="javascript">
						for(k=15;k<=60;k++)
							document.write("<option>" + k + "</option>")
					</script>
				</select>
				To
				<select name="age2">
					<script language="javascript">
						for(k=18;k<=60;k++)
							document.write("<option>" + k + "</option>")
					</script>
				</select><br><br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Marital Status:&nbsp;&nbsp;&nbsp;
									<select name='maritalstatus'>
                           						<option>Never Married</option>
									            <option>Divorced</option>
                            					<option>Widowed</option>
                            					<option>Separated</option>
                            					<option>Annulled</option>
                          			</select><br><br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Children:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<select name="children">
										<option>No</option>
                           									<option>Yes,Living together</option>
                            									<option>Yes,Not living together</option>
                          								</select><br><br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Height:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<select name="height1">
                            									<script language="JavaScript">
											for(hh=150;hh<=220;hh++)
											{
												document.write("<option>" + hh +" cm</option>");	
											}
										</script>
									</select>	
									&nbsp;&nbsp;&nbsp;To&nbsp;&nbsp;&nbsp;
									<select name="height2">
                            									<script language="JavaScript">
											for(hh=150;hh<=220;hh++)
											{
												document.write("<option>" + hh +" cm</option>");	
											}
										</script>
									</select><br><br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Country:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<select name="country">
										<option>India</option>
                            								</select><br><br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<select name="state">
										<option>Uttar Pradesh</option>
                      									<option>Maharastra</option>
                      									<option>Bihar</option>
										<option>West Bengal</option>
                      									<option>Andhra Pradesh</option>
										<option>Tamil Nadu</option>
                      									<option>Madya Pradesh</option>
										<option>Rajasthan</option>
                      									<option>Karnataka</option>
										<option>Gujarat</option>
                      									<option>Orissa</option>
										<option>Kerala</option>
                      									<option>Jharkhand</option>
										<option>Assam</option>
                      									<option>Punjab</option>
										<option>Hariyana</option>
                      									<option>Chhattisgarh</option>
										<option>Jammu & Kashmir</option>
                      									<option>Tripura</option>
										<option>Manipur</option>
                      									<option>Meghalaya</option>
										<option>Nagaland</option>
                      									<option>Goa</option>
										<option>Arunachal Pradesh</option>
                      									<option>Mizoram</option>
										<option>Sikkim</option>
                            								</select><br><br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Complexion:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<select name="complexion">
										<option>Very Fair</option>
                            									<option>Fair</option>
                            									<option>Wheatish</option>
                            									<option>Wheatish Medium</option>
                            									<option>Wheatish Brown</option>
                           									<option>Dark</option>
                          								</select><br><br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Religion:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<select name="religion">
										<option>Bangali</option>
									                <option>Bhojpuri</option>
                            									<option>Chattisgarhi</option>
                            									<option>English</option>
                            									<option>Gujrati</option>
                            									<option>Hindi</option>
                            									<option>Kashmiri</option>
                            									<option>Magahi</option>
                           									<option>Malayalam</option>
                            									<option>Manipuri</option>
                            									<option>Marathi</option>
                            									<option>Marwadi</option>
                            									<option>Punjabi</option>
                            									<option>Rajasthani</option>
                            									<option>Sanskrit</option>
                            									<option>Sindhi</option>
                            									<option>Tamil</option>
                            									<option>Telugu</option>
                            									<option>Urdu</option>
										<option>Other</option>
                          								</select><br><br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Family Value:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<select name="familyvalues">
										<option>Moderate</option>
                            									<option>Traditional</option>
								                </select><br><br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Profession:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<select name="profession">
										<option>Computer Professional</option>
										<option>Science Professional</option>
										<option>Commerce Professional</option>
										<option>Arts Professional</option>
										<option>Other</option>
                          								</select><br><br>

								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Diet:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<select name="diet">
										<option>Veg</option>
                            									<option>Non-vag</option>
                          								</select><br><br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Smoke:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<select name="smoke">
										<option>Yes</option>
                            									<option>No</option>
                          								</select><br><br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Drink:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<select name="drink">
										<option>Yes</option>
                            									<option>No</option>
                          								</select><br><br>
								
								<input type="hidden" name='hdn' value="smart_search">
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Submit">
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								
							</form>
						</td>

						<td background="pictures/desg3.jpg" width=100% colspan=2>&nbsp;
							
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
<body VLINK="0000AA" ALINK="red" onUnload="chgmncolor()" bgcolor="orange">

</body>
</html>