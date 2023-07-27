<!-- <html>session_start();
    	if($_SESSION[login]!=1)
        		header("Location:index.php");
	
	$session_user=$_SESSION[usr];
	$session_password=$_SESSION[pwd];</html> -->
<?php
      
		 
 		
	$page=$_POST['hdn'];
	$ggen=$_POST['gender'];
	$gage1=$_POST['age1'];
	$gage2=$_POST['age2'];	
	$gmstatus=$_POST['maritalstatus'];
	$gchildren=$_POST['children'];
	$greligion=$_POST['religion'];
	$gcountry=$_POST['country'];
	$gstate=$_POST['state'];
	$gcity=$_POST['city'];
	$gheight1=$_POST['height1'];
	$gheight2=$_POST['height2'];
	$gcomplexion=$_POST['complexion'];
	$gfamilyvalues=$_POST['familyvalues'];
	$gprofession=$_POST['profession'];
	$gdiet=$_POST['diet'];
	$gsmoke=$_POST['smoke'];
	$gdrink=$_POST['drink'];
	$geducation=$_POST['education'];
?>
		
<html>
	<head>
		<title>Information</title>

	<style type="text/css">
		#a{
			font-family:"Bookman Old Style";
		}

		#b{
			font-family:"Bodoni MT";
		}

		#c{
			font-family:"Baskerville Old Face";
		}
	</style>

<table border=0% width=75%  align="center" cellspacing=1% cellpadding=0%>
<tr><td align="right"><a href="logout.php"><font color="#000000" size="+2" face="Arial, Helvetica, sans-serif">Logout</font></a>&nbsp;&nbsp;&nbsp;<b><?php echo $session_user; ?></b>&nbsp;&nbsp;</font></td></tr>
<tr><td>
	<script src="header.js">
	</script>
	
	<table border=0% width=100% height=80% bgcolor="white" bordercolor="#F4F4F4" align="center" cellspacing=2% cellpadding=0%>
		<tr>
			<td align="center" bgcolor=''>
				<font id="a" size="+2" color="#660000">&nbsp;<b>Go-></b></font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='index.php'><font id="a" size="+1"><b><font color="black">Home</a>&nbsp;&nbsp;&nbsp;<a href='smart_search.php'><font id="a"><b><font color="black">Search</a></font>
			        &nbsp;&nbsp;<a href='change_password.php'><font id="a"><b><font color="black">Change Password</a>&nbsp;&nbsp;&nbsp;<a href='contectus.php'><font id="a"><b><font color="black">Contect Us</a></font>
					&nbsp;&nbsp;&nbsp;<a href='feedback.php'><font id="a"><b><font color="black">Feedback</a></font>&nbsp;&nbsp;&nbsp;<font id="a" size="+2" color="#660000">&nbsp;<b><-Go</b></font>
				<hr size=5 width=100% color="#cc0000" align="left">
			</td>
		</tr>

		<tr>
			<td align="center">
				<br>
				<?php
					include_once("Config.php");
					$qry=mysql_query("select * from profile");
		
					$tmp=1;
					echo "<table border=0% width=100% height=80% bgcolor='white' align='center' cellspacing=2% cellpadding=0%>";
					$arr=array();
					$count=0;
					$chk=false;
					
					if($page=="state_search")
					{
						for($mm=1;$mm<=mysql_num_rows($qry);$mm++)
						{
							$data=mysql_fetch_array($qry);
							if($tmp==30)
							{
								$tmp=1;
							}
							if($ggen==$data['gender'] && $gmstatus==$data['meritalstatus'] && $gchildren==$data['havechildren'] && $greligion==$data['religion'] && $gstate==$data['state'])
							{
								echo "<tr>";
								echo "<td align='center' width=30% rowspan=2>";
									echo "<font id='a'>";
										echo "<img src='photos/";
										echo $tmp;
										echo ".gif' height=150 width=80%></img>";
										$tmp++;
									echo "<font id='a'>";
								echo "</td>";
								echo "<td align='left' width=60% bgcolor='white' colspan=2>";
									echo "<font id='a'>";
										echo "&nbsp;&nbsp;&nbsp;<b><u>Information</u></b><br><br>";
										echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Age :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color='darkred'>".$data['age']."</font><br>";
																				echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gender :&nbsp;&nbsp;&nbsp;&nbsp;<font color='darkred'>".$data['gender']."</font><br>";
										echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Religion :&nbsp;&nbsp;&nbsp;<font color='darkred'>".$data['religion']."</font><br>";
										echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;EmailId :&nbsp;&nbsp;&nbsp;&nbsp;<font color='darkred'>".$data['emailid']."</font><br>";
										echo "<br>";
									echo "</font>";
								echo "</td>";
								echo "</tr>";
							
								echo "<tr>";
									echo "<td bgcolor='lightpink' width=300>";
										echo "<font id='c'>";
											echo "<div align='right'><b>Profile Id :</b>&nbsp;".$data['id']."&nbsp;&nbsp;</div>";
										echo "</font>";
									echo "</td>";
									echo "<td align='center' valign='center' bgcolor='#660000' width=100>";
											echo "<form name='f1' action='searchinformation2.php' method='POST'>";
												echo "<input type='hidden' name='hdn' value='".$data['id']."'><br>";
												echo "<input type='submit' value='More' name=".$arr[$count].">";
											echo "</form>";
									echo "</td>";
								echo "</tr>";

								echo "<tr>";
									echo "<td colspan=2 bgcolor='white'>";
									echo "&nbsp;";
									echo "</td>";
								echo "</tr>";
								$count=$count+1;
								$chk=true;
							}	
						}
						if($chk==false)
						{
							echo "<script language='javascript'>";
							echo "window.location.replace('state_search.php')";
							echo "</script>";
						}
					}
					if($page=="city_search")
					{
						for($mm=1;$mm<=mysql_num_rows($qry);$mm++)
						{
							$data=mysql_fetch_array($qry);
							if($tmp==30)
							{
								$tmp=1;
							}
							if($ggen==$data['gender'] && $gmstatus==$data['meritalstatus'] && $gchildren==$data['havechildren'] && $greligion==$data['religion'] && $gstate==$data['state'] && $gcity==$data['city'])
							{
								echo "<tr>";
								echo "<td align='center' width=30% rowspan=2>";
									echo "<font id='a'>";
										echo "<img src='photos/";
										echo $tmp;
										echo ".gif' height=150 width=80%></img>";
										$tmp++;
									echo "<font id='a'>";
								echo "</td>";
								echo "<td align='left' width=60% bgcolor='white' colspan=2>";
									echo "<font id='a'>";
										echo "&nbsp;&nbsp;&nbsp;<b><u>Information</u></b><br><br>";
										echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Age :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color='darkred'>".$data['age']."</font><br>";
										echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gender :&nbsp;&nbsp;&nbsp;&nbsp;<font color='darkred'>".$data['gender']."</font><br>";
										echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Religion :&nbsp;&nbsp;&nbsp;<font color='darkred'>".$data['religion']."</font><br>";
										echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;EmailId :&nbsp;&nbsp;&nbsp;&nbsp;<font color='darkred'>".$data['emailid']."</font><br>";
										echo "<br>";
									echo "</font>";
								echo "</td>";
								echo "</tr>";
							
								echo "<tr>";
									echo "<td bgcolor='darkgray' width=400>";
										echo "<font id='c'>";
											echo "<div align='right'><b>Profile Id :</b>&nbsp;".$data['id']."&nbsp;&nbsp;</div>";
										echo "</font>";
									echo "</td>";
									echo "<td align='center' valign='center' bgcolor='lightgray' width=100>";
											echo "<form name='f1' action='searchinformation2.php' method='POST'>";
												echo "<input type='hidden' name='hdn' value='".$data['id']."'><br>";
												echo "<input type='submit' value='More' name=".$arr[$count].">";
											echo "</form>";
									echo "</td>";
								echo "</tr>";

								echo "<tr>";
									echo "<td colspan=2 bgcolor='white'>";
									echo "&nbsp;";
									echo "</td>";
								echo "</tr>";
								$count=$count+1;
								$chk=true;
							}	
						}
						if($chk==false)
						{
							echo "<script language='javascript'>";
							echo "window.location.replace('city_search.php')";
							echo "</script>";
						}
					}
					if($page=="smart_search")
					{
						for($mm=1;$mm<=mysql_num_rows($qry);$mm++)
						{
							$data=mysql_fetch_array($qry);
							if($tmp==30)
							{
								$tmp=1;
							}
							if($ggen==$data['gender'] && $gmstatus==$data['meritalstatus'] && $gchildren==$data['havechildren'] && $greligion==$data['religion'] && $gstate==$data['state'] && $gcomplexion==$data['complexion'] && $gprofession==$data['profession'] && $gfamilyvalues==$data['familyvalues'] && $gdiet==$data['diet'] && $gsmoke==$data['smoke'] && $gdrink==$data['drink'])
							{
								echo "<tr>";
								echo "<td align='center' width=30% rowspan=2>";
									echo "<font id='a'>";
										echo "<img src='photos/";
										echo $tmp;
										echo ".gif' height=150 width=80%></img>";
										$tmp++;
									echo "<font id='a'>";
								echo "</td>";
								echo "<td align='left' width=60% bgcolor='white' colspan=2>";
									echo "<font id='a'>";
										echo "&nbsp;&nbsp;&nbsp;<b><u>Information</u></b><br><br>";
										echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Age :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color='darkred'>".$data['age']."</font><br>";
										echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gender :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color='darkred'>".$data['gender']."</font><br>";
										echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Religion :&nbsp;&nbsp;&nbsp;<font color='darkred'>".$data['religion']."</font><br>";
										echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;EmailId :&nbsp;&nbsp;&nbsp;&nbsp;<font color='darkred'>".$data['emailid']."</font><br>";
										echo "<br>";
									echo "</font>";
								echo "</td>";
								echo "</tr>";
							
								echo "<tr>";
									echo "<td bgcolor='darkgray' width=400>";
										echo "<font id='c'>";
											echo "<div align='right'><b>Profile Id :</b>&nbsp;".$data['id']."&nbsp;&nbsp;</div>";
										echo "</font>";
									echo "</td>";
									echo "<td align='center' valign='center' bgcolor='lightgray' width=100>";
											echo "<form name='f1' action='searchinformation2.php' method='POST'>";
												echo "<input type='hidden' name='hdn' value='".$data['id']."'><br>";
												echo "<input type='submit' value='More' name=".$arr[$count].">";
											echo "</form>";
									echo "</td>";
								echo "</tr>";

								echo "<tr>";
									echo "<td colspan=2 bgcolor='white'>";
									echo "&nbsp;";
									echo "</td>";
								echo "</tr>";
								$count=$count+1;
								$chk=true;
							}	
						}
						if($chk==false)
						{
							echo "<script language='javascript'>";
							echo "window.location.replace('smart_search.php')";
							echo "</script>";
						}
					}
					if($page=="profession_search")
					{
						for($mm=1;$mm<=mysql_num_rows($qry);$mm++)
						{
							$data=mysql_fetch_array($qry);
							if($tmp==30)
							{
								$tmp=1;
							}
							if($ggen==$data['gender'] && $gmstatus==$data['meritalstatus'] && $gchildren==$data['havechildren'] && $greligion==$data['religion'] && $gprofession==$data['profession'] && $gfamilyvalues==$data['familyvalues'] && $geducation==$data['education'])
							{
								echo "<tr>";
								echo "<td align='center' width=30% rowspan=2>";
									echo "<font id='a'>";
										echo "<img src='photos/";
										echo $tmp;
										echo ".gif' height=150 width=80%></img>";
										$tmp++;
									echo "<font id='a'>";
								echo "</td>";
								echo "<td align='left' width=60% bgcolor='white' colspan=2>";
									echo "<font id='a'>";
										echo "&nbsp;&nbsp;&nbsp;<b><u>Information</u></b><br><br>";
										echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Age :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color='darkred'>".$data['age']."</font><br>";
										echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gender :&nbsp;&nbsp;&nbsp;&nbsp;<font color='darkred'>".$data['gender']."</font><br>";										
										echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Religion :&nbsp;&nbsp;&nbsp;<font color='darkred'>".$data['religion']."</font><br>";
										echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;EmailId :&nbsp;&nbsp;&nbsp;&nbsp;<font color='darkred'>".$data['emailid']."</font><br>";
										echo "<br>";
									echo "</font>";
								echo "</td>";
								echo "</tr>";
							
								echo "<tr>";
									echo "<td bgcolor='darkgray' width=400>";
										echo "<font id='c'>";
											echo "<div align='right'><b>Profile Id :</b>&nbsp;".$data['id']."&nbsp;&nbsp;</div>";
										echo "</font>";
									echo "</td>";
									echo "<td align='center' valign='center' bgcolor='lightgray' width=100>";
											echo "<form name='f1' action='searchinformation2.php' method='POST'>";
												echo "<input type='hidden' name='hdn' value='".$data['id']."'><br>";
												echo "<input type='submit' value='More' name=".$arr[$count].">";
											echo "</form>";
									echo "</td>";
								echo "</tr>";

								echo "<tr>";
									echo "<td colspan=2 bgcolor='white'>";
									echo "&nbsp;";
									echo "</td>";
								echo "</tr>";
								$count=$count+1;
								$chk=true;
							}	
						}
						if($chk==false)
						{
							echo "<script language='javascript'>";
							echo "window.location.replace('profession_search.php')";
							echo "</script>";
						}
					}
					echo "</table>";
				?>
			</td>
		</tr>
	</table>

	<script src="footer.js">
	</script>

</td></tr>
</table>

</head>
	
<body VLINK="0000AA">
</body>

</html>