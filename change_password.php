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
				<!--<input type="text" name="proid" value="ID" size=25> -->
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
			<td align="center" bgcolor="lightpink" id="m3"><a href="change_password.php"><font id="a"><b><font color="black">Change Password</b></font></a></td>
			<td align="center" bgcolor="white" onMouseOver="this.bgColor='lightpink'" onMouseOut="this.bgColor='white'" id="m4"><a href="smart_search.php"><font id="a"><b><font color="black">Search</b></font></a></td>
			<td align="center" bgcolor="white" onMouseOver="this.bgColor='lightpink'" onMouseOut="this.bgColor='white'" id="m5"><a href="contectus.php"><font id="a"><b><font color="black">Contect Us</b></font></a></td>
			<td align="center" bgcolor="white" onMouseOver="this.bgColor='lightpink'" onMouseOut="this.bgColor='white'" id="m5"><a href="feedback.php"><font id="a"><b><font color="black">Feedback</b></font></a></td>			
          <td align="center" bgcolor="white"><font face="sans-serif" size="+2" color="#CC0000"><-Go</font></td>
		</tr>				
	</table>


	<table border=0% width=100% height=600 bgcolor="" align="center" cellspacing=2% cellpadding=0% bordercolor="white">
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
							<font face="Comic sans ms" size=5>
					<center>
                    	<strong><b>Change Password:</strong><font face="Comic sans ms" size=4 color="darkgreen"><b>Suppose You Want To Change Password Of Your Account...<b>!</b></font> 
                    </center>
							<hr size=6 width=100% color="#660033">
						</td>
					</tr>
					
					<tr>	
						<td width=100% align="left" valign="top" height=100%>
							<table border=0% width=100% height=100% bgcolor="white" bordercolor="darkpink" align="center" cellspacing=0% cellpadding=0%>
								<tr>
									<td valign="center" align="center" width=30% height=100%>
										<img src="pictures/rse.jpg" width=100% height=100%></img>
									</td>
									<td align="left" bgcolor="white" width=40% valign="center">
										<center><h2><font  color="darkred" face="Comic Sans MS"><u>Change Password</u></font></h2></center>
									<form name="f1" method="POST" action="change_password.php">
										&nbsp;&nbsp;&nbsp;<b>Profile Id: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b><?php echo $session_user; ?></b><br><br>
										&nbsp;&nbsp;&nbsp;Current Password:&nbsp;&nbsp;&nbsp;<input type="password" size=15 name="oldpwd" value=""><br><br>
										&nbsp;&nbsp;&nbsp;New Password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" size=15 name="new"><br><br>
										&nbsp;&nbsp;&nbsp;Confirm Password:&nbsp;&nbsp;<input type="password" size=15 name="confirm"><br><br>
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="submitpwd" value="&nbsp;&nbsp;Save&nbsp;&nbsp;">
		                            							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            									<input type="reset" name="reset" value="&nbsp;&nbsp;Reset&nbsp;&nbsp;">
									</form>
									
								

									</td>
									<td align="center" width=30% valign="center"><br><br><br><br>
										<img src="pictures/hnd.jpg" width=90% height=50%></img>
									</td>
								</tr>
								<tr>
									<td colspan=3 bgcolor="lightpink">
									<?php
										$msg="Change Your Password By Filling Above Fields Properally !";
										if(isset($_POST['submitpwd']))
										{
											include_once("config.php");
											
											$usr=$session_user;
											$pwd=$session_password;
											
											$oldpwd=$_POST['oldpwd'];
											$new=$_POST['new'];
											$confirm=$_POST['confirm'];	
											
											if($pwd!=$oldpwd)
											{
												$msg="";
												$msg="Please Check Your Current Password,Because It's Wrong !";
											}        
											else
					 						{
												if($new!=$confirm)
												{
													$msg="";
													$msg="New Password & Confirmation Doesn't match Please Check It";
												}
												else
												{
													$qry=mysql_query("select * from register");
													for($ii=1;$ii<=mysql_num_rows($qry);$ii++)
													{
														$data=mysql_fetch_array($qry);
														if($data['id']==$usr)
														{
															$gid=$data['id'];
															$gpassword=$data['password'];
															$gconfirm=$data['confirm'];
																
															$sql="UPDATE register SET password='$new' WHERE id='$usr'";
															
															if(mysql_query($sql))
															{ 
																$msg="";
																$msg="Password has been Changed";
																$_SESSION[pwd]=$new;
																$session_password=$_SESSION[pwd];
															}	
															else
		 													{
																$msg="";
																$msg="Password doesn't changed";
															}
														}
													}
												}
											}
										}
										echo "<font size=4 color='#660000'><center><b>".$msg."</b></center></font>";
										
										if(isset($_POST['reset']))
										{
											echo "<script language='javascript'>";
												echo "document.getElementByName('oldpwd').value=''";
												echo "document.getElementByName('newpwd').value=''";
												echo "document.getElementByName('confirmpwd').value=''";
											echo "</script>";
										}
									?>
									</td>
								</tr>
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

</body>
</html>