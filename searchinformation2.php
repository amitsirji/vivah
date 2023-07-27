<?php
	session_start();
    	if($_SESSION[login]!=1)
        		header("Location:index.php");
	
	$session_user=$_SESSION[usr];
	$session_password=$_SESSION[pwd];
	$page=$_POST['pg'];
	$searchid=$_POST['proid'];
?>

<script language="javascript">
	function back()
	{
		history.back()
	}
</script>
	
<html>
	<head>
		<title>More Information</title>

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

	<?php
		include_once("Config.php");
		$qry=mysql_query("select * from profile");
		if(isset($searchid))
		{	
			$bool=false;
			$gid=$searchid;
			
			for ($ch=1;$ch<=mysql_num_rows($qry);$ch++)
			{
				$dt=mysql_fetch_array($qry);
				if($gid==$dt['id'])
				{
					$bool=true;	
				}
			}
			if($bool==false)
			{
				if($page=="state_search")
				{
					echo "<script language='javascript'>";
						echo "window.location.replace('state_search.php')";
					echo "</script>";
				}
				if($page=="smart_search")
				{
					echo "<script language='javascript'>";
						echo "window.location.replace('smart_search.php')";
					echo "</script>";
				}
				if($page=="addphoto")
				{
					echo "<script language='javascript'>";
						echo "window.location.replace('addphoto.php')";
					echo "</script>";
				}
				if($page=="change_password")
				{
					echo "<script language='javascript'>";
						echo "window.location.replace('change_password.php')";
					echo "</script>";
				}
				if($page=="city_search")
				{
					echo "<script language='javascript'>";
						echo "window.location.replace('city_search.php')";
					echo "</script>";
				}
				if($page=="profession_search")
				{
					echo "<script language='javascript'>";
						echo "window.location.replace('profession_search.php')";
					echo "</script>";
				}
				
			}
		}
		else
		{
			$gid=$_POST['hdn'];
		}
		$qry=mysql_query("select * from profile");
		for($mm=1;$mm<=mysql_num_rows($qry);$mm++)
		{
			$data=mysql_fetch_array($qry);
			if($gid==$data['id'])
			{
				$tid=$data[id];
				$tfullnm=$data[fullname];
				$trel=$data[religion];
				$tcoun=$data[country];
				$teid=$data[emailid];
				$tbday=$data[birthday];
				$tbmonth=$data[birthmonth];
				$tbyear=$data[birthyear];
				$tmstatus=$data[meritalstatus];
				$thchild=$data[havechildren];
				$theight=$data[height];
				$tbtype=$data[bodytype];
				$tcompl=$data[complexion];
				$tspcases=$data[specialcases];
				$tcaste=$data[caste];
				$tsubcaste=$data[subcaste];
				$tmanglik=$data[manglik];
				$tfamilyvalues=$data[familyvalues];
				$tedu=$data[education];
				$tedufield=$data[educationfield];
				$tpro=$data[profession];
				$tdiet=$data[diet];
				$tsmoke=$data[smoke];
				$tdrink=$data[drink];
				$tcity=$data[city];
				$tconnumber=$data[contactnumber];
			}
		}	
	?>
	<table border=0 width=75% bgcolor='#FFFFFF'" align="center" cellspacing=1% cellpadding=0%>
	<tr><td align="right"><a href="logout.php"><font color="#000000" size="+2" face="Arial, Helvetica, sans-serif">Logout</font></a>&nbsp;&nbsp;&nbsp;<b><?php echo $session_user; ?></b>&nbsp;&nbsp;</font></td></tr>
	<tr><td>
		<script src="header.js">
		</script>
		
		<table border=0% width=100% height=80% bgcolor="white" bordercolor="#F4F4F4" align="center" cellspacing=0% cellpadding=0%>
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
					<table border=0% width=100% height=80% bgcolor='white' align='center' cellspacing=2% cellpadding=0%>
						<tr>
							<td align='center' valign='center' width=3%>&nbsp;
								
							</td>
							<td align='left' width=60% bgcolor='darkgray'>
							<font id='c'>
								<br><center>&nbsp;&nbsp;&nbsp;<b><u>Information</u></b></center><br>
								<hr width=90% size=1 color='white'>				
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Profile Id :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $tid; ?></b><br>
								<hr width=90% size=1 color='white'>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Full Name :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $tfullnm; ?></b><br>
								<hr width=90% size=1 color='white'>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Religion :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $trel; ?></b><br>
								<hr width=90% size=1 color='white'>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Country :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $tcoun; ?></b><br>
								<hr width=90% size=1 color='white'>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;EmailId :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $teid; ?></b><br>
								<hr width=90% size=1 color='white'>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Date Of Birthdate :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $tbday."-".$tbmonth."-".$tbyear; ?></b><br>
								<hr width=90% size=1 color='white'>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Marital Status :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $tmstatus; ?></b><br>
								<hr width=90% size=1 color='white'>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Have Children :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $thchild; ?></b><br>
								<hr width=90% size=1 color='white'>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Height :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $theight; ?></b><br>
								<hr width=90% size=1 color='white'>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Body Type :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $tbtype; ?></b><br>
								<hr width=90% size=1 color='white'>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Complexion :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $tcompl; ?></b><br>
								<hr width=90% size=1 color='white'>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Special Cases :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $tspcases; ?></b><br>
								<hr width=90% size=1 color='white'>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Caste :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $tcaste; ?></b><br>
								<hr width=90% size=1 color='white'>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sub Caste :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $tsubcaste; ?></b><br>
								<hr width=90% size=1 color='white'>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Manglik :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $tmanglik; ?></b><br>
								<hr width=90% size=1 color='white'>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Family Values :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $tfamilyvalues; ?></b><br>
								<hr width=90% size=1 color='white'>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Education :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $tedu." in ".$tedufield; ?></b><br>
								<hr width=90% size=1 color='white'>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Profession :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $tpro; ?></b><br>
								<hr width=90% size=1 color='white'>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Diet :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $tdiet; ?></b><br>
								<hr width=90% size=1 color='white'>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Smoke :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $tsmoke; ?></b><br>
								<hr width=90% size=1 color='white'>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Drink :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $tdrink; ?></b><br>
								<hr width=90% size=1 color='white'>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;City :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $tcity; ?></b><br>
								<hr width=90% size=1 color='white'>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Contact Number :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $tconnumber; ?></b><br>
								<hr width=90% size=1 color='white'>
								<br>
							</font>
							</td>
							<td align='center' valign='center' width=20%>
								<br>
								<?php
									echo "<img src='userimages/p2.gif' height=400 width=350 alt='Image Can not be load Because Of Some Proble'></img>";		
								?>
							</td>
						</tr>
				
						<tr>
							<td colspan=2 bgcolor='white'>&nbsp;
								
							</td>
						</tr>
					</table>
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