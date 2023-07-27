<?php
	session_start();
    	if($_SESSION[login]!=1)
        		header("Location:index.php");
	
	$session_user=$_SESSION[usr];
	$session_password=$_SESSION[pwd];
?>

<html>

<head>
	<title>My Profile(update)</title>

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

	<?php
		include_once("Config.php");
		$gid=$session_user;
		
		$qry=mysql_query("select * from profile");
		for($mm=1;$mm<=mysql_num_rows($qry);$mm++)
		{
			$data=mysql_fetch_array($qry);
			if($gid==$data['id'])
			{
				$tage=$data['age'];
				$tid=$data[id];
				$tfullnm=$data[fullname];
				$teid=$data[emailid];
				$trel=$data[religion];
				$tcoun=$data[country];
				$tgen=$data[gender];
				$tbday=$data[birthday];
				$tbmonth=$data[birthmonth];
				$tbyear=$data[birthyear];
				$tprocreate=$data[profilecreator];
				$tmstatus=$data[meritalstatus];
				$thchild=$data[havechildren];
				$theight=$data[height];
				$tbtype=$data[bodytype];
				$tcompl=$data[complexion];
				$tspcases=$data[specialcases];
				$tmtong=$data[mothertongue];
				$tcaste=$data[caste];
				$tsubcaste=$data[subcaste];
				$tmanglik=$data[manglik];
				$tfamilyvalues=$data[familyvalues];
				$tedu=$data[education];
				$tpro=$data[profession];
				$tdiet=$data[diet];
				$tsmoke=$data[smoke];
				$tdrink=$data[drink];
				$tstate=$data[state];
				$tcity=$data[city];
				$trest=$data[residencystatus];
				$tconnumber=$data[contactnumber];
				$tmore=$data[more];
			}
		}	
	?>
		
<table border=0% width=75%  align="center" cellspacing=1% cellpadding=0%>
<tr><td align="right"><a href="logout.php"><font color="#000000" size="+2" face="Arial, Helvetica, sans-serif">Logout</font></a>&nbsp;&nbsp;&nbsp;<b><?php echo $session_user; ?></b>&nbsp;&nbsp;</font></td></tr>
<tr><td>
	<script src="header.js">
	</script>
	
	<table border=0% width=100% height=100%  align="center" cellspacing=0% cellpadding=0%>
		<tr>
			 <td align="left" > <font id="a" size="+2" color="#660000">&nbsp;<b>Go-></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='index.php'><font id="a" size="+1"><b><font color="black">Home</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='smart_search.php'><font id="a"><b><font color="black">Search</a></font> 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='howdoilook.php'><font color="black">My 
            Profile</font></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='updateprofile.php'><font color="black">Edit 
            Profile</a> 
            <hr size=5 width=100% color="#cc0000" align="left">
		</tr>

		<tr>
			<td bgcolor="white" background="pictures/12.jpg" valign="top" align="left">
				<form name="f1" method="POST" action="updateprofile.php">
				<b><font id="c"><br>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Profile Id:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <font id='c' color='#FF2200'><?php echo $tid; ?></font><br><br>

						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Full Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="text" name="fullname" size=38 value="<?php echo $tfullnm; ?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br>
				 	
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email Id:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="text" name="emailid" size=25 value="<?php echo $teid; ?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br>
					
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Religion:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<select name="religion">
                      						<option><?php echo $trel; ?></option>
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
                    					</select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br>

						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Country:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<select name="country">
                      						<option><?php echo $tcoun; ?></option>
							<option>India</option>
                    					</select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br>
					<hr size=5 width=100%><font size=4 color="#660000" face="LatinoPal5"><b><div align="left"><u>&nbsp;&nbsp;Basic Info.:-</u></div></b></font><hr size=5 width=100%>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gender:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<select name="gender">
                      						<option><?php echo $tgen; ?></option>
                      						<option>Male</option>
                      						<option>Female</option>
                    					</select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br>
					
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;age:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp
						<select name="age">
						<script language="javascript">
						for(k=15;k<=60;k++)
							document.write("<option>" + k + "</option>")
					</script>
						<!-- <option> </option>
							<script language="javascript">
							 for(a=15;a<=60;a++)
								{
									 document.write("<option>" + a + "</option>")
								} 	
							</script> -->
					</select><br><br>
					
					
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Date of Birth:&nbsp;
						<select name="birthday">
                      						<option><?php echo $tbday; ?></option>
                      					                    <script language="JavaScript">
							for(i=1;i<=31;i++)
								document.write("<option>"+i+"</option>");
							</script>
                    					</select>
						<select name="birthmonth">
                      						<option><?php echo $tbmonth; ?></option>
                      						<option>Jan</option>
                      						<option>Fab</option>
                      						<option>Mar</option>
                      						<option>Apr</option>
                      						<option>May</option>
                      						<option>Jun</option>
                      						<option>Jul</option>
                      						<option>Aug</option>
                      						<option>Sep</option>
                      						<option>Oct</option>
                      						<option>Nov</option>
                      						<option>Dec</option>
                    					</select>
						<select name="birthyear">
							<option><?php echo $tbyear; ?></option>
                      						<script language="JavaScript">
								for(i=2008;i>=1940;i--)
									document.write("<option>"+i+"</option>");
							</script>
						</select>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br>

						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Profile Owner:
						<select name="profilecreator">
                      						<option><?php echo $tprocreate; ?></option>
							<option>self</option>
                      						<option>Parent/Guardian</option>
                      						<option>Sibling</option>
                      						<option>Friend</option>
                      						<option>Other</option>
                    					</select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br>
					
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Marital status:
						<select name="maritalstatus">
						                    <option><?php echo $tmstatus; ?></option>
							<option>Never Married</option>
                      						<option>Divorced</option>
                      						<option>Widowed</option>
                      						<option>Separated</option>
                      						<option>Annulled</option>
						</select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br>
					
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Have Children:
						<select name="havechildren">
							<option><?php echo $thchild; ?></option>
						               	<option>No</option>
                           						<option>Yes,Living together</option>
                            						<option>Yes,Not living together</option>
                    					</select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br>

					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Height:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<select name="height">
                            						<script language="JavaScript">
								for(hh=150;hh<=220;hh++)
								{
									document.write("<option>" + hh +" cm</option>");	
								}
							</script>
                    					</select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br>

					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Body Type:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<select name="bodytype">
                      						<option><?php echo $tbtype; ?></option>
							<option>Slim</option>
                      						<option>Average</option>
                      						<option>Athletic</option>
                      						<option>Heavy</option>
                    					</select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br>

					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Complexion:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						 <select name="complexion">
                      						<option><?php echo $tcompl; ?></option>
                      						<option>Very Fair</option>
                            						<option>Fair</option>
                            						<option>Wheatish</option>
                            						<option>Wheatish Medium</option>
                            						<option>Wheatish Brown</option>
                           						<option>Dark</option>
                    					</select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br>

					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Special Cases:&nbsp;&nbsp;
						<select name="specialcases">
							<option><?php echo $tspcases; ?></option>
                      						<option>None</option>
                      						<option>Physically challenged from birth</option>
                      						<option>Physically challenged due to accident</option>
                      						<option>Mentally challenged from birth</option>
                      						<option>mentally challenged due to accident</option>
                      						<option>Physically abnormality affecting only looks</option>
                      						<option>Physically abnormality affecting bodily functions</option>
                      						<option>Physically and mentally challenved</option>
                      						<option>HIV positive</option>
						</select>&nbsp;&nbsp;&nbsp;&nbsp;<br><br>

					<hr size=5 width=100%><font size=4 color="#660000" face="LatinoPal5"><b><div align="left"><u>&nbsp;&nbsp;Social Background:-</u></div></b></font><hr size=5 width=100%>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mother Tongue:
						<select name="mothertongue">
                      						<option><?php echo $tmtong; ?></option>
                      						<option>Arunachail</option>
                      						<option>Assamese</option>
                      						<option>Bangali</option>
                      						<option>Bhojpuri</option>
                      						<option>Brij</option>
                     						<option>Chattisgarhi</option>
                      						<option>Chinese</option>
                      						<option>English</option>
                      						<option>French</option>
                      						<option>Gujrati</option>
                      						<option>Haryanavi</option>
                      						<option>Himachali/Pahari</option>
                      						<option>Hindi</option>
                      						<option>Hindko</option>
                      						<option>Kannada</option>
                      						<option>Kashmiri</option>
                      						<option>Khandesi</option>
                      						<option>Konkani</option>
                      						<option>Kutchi</option>
                      						<option>Magahi</option>
                      						<option>Malay</option>
                      						<option>Malayalam</option>
                      						<option>Manipuri</option>
                      						<option>Marathi</option>
                      						<option>Marwadi</option>
                      						<option>Nepali</option>
                      						<option>Oriya</option>
                      						<option>Pashto</option>
                      						<option>Persian</option>
                      						<option>Punjabi</option>
                      						<option>Rajasthani</option>
                      						<option>Russian</option>
                      						<option>Sanskrit</option>
                      						<option>Santnali</option>
                      						<option>Sindhi</option>
                      						<option>Sinhala</option>
                      						<option>Spanish</option>
                      						<option>Swedish</option>
                      						<option>Tagalog</option>
                      						<option>Tamil</option>
                      						<option>Telugu</option>
                     						<option>Tulu</option>
						                <option>Urdu</option>
							<option>Other</option>
                    					</select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br>

					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Caste:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<select name="caste">
                      						<option><?php echo $tcaste; ?></option>
                      						<option>Agarwal</option>
                      						<option>Agri</option>
                      						<option>Ambalavasi</option>
                      						<option>Arya Vysya</option>
                      						<option>Aryasamaj</option>
                      						<option>Bahi</option>
                      						<option>Baniya</option>
                      						<option>Barujibi</option>
                      						<option>Besta</option>
                      						<option>Bhandari</option>
                      						<option>Billava</option>
                      						<option>Boyer</option>
                      						<option>Brahmin</option>
                      						<option>Brahmin - Anavil</option>
                      						<option>Brahmin - Bengali</option>
                      						<option>Brahmin - Bhumihar</option>
                      						<option>Brahmin - Devadnya</option>
                      						<option>Brahmin - Dhiman</option>
                      						<option>Brahmin - Garhwali</option>
                      						<option>Brahmin - Goswami</option>
                      						<option>Brahmin - Gour</option>
                      						<option>Brahmin - Gurukkal</option>
                      						<option>Brahmin - Nagar</option>
                      						<option>Brahmin - Punjabi</option>
                      						<option>Brahmin - Sanadya</option>
                      						<option>Brahmin - Telugu</option>
                     						<option>Brahmin - Tyagi</option>
                      						<option>Brahmin - Vaidiki</option>
                      						<option>Brahmin - Viswa</option>
                      						<option>Chambhar</option>
                      						<option>Chaursia</option>
                      						<option>Chettiar</option>
                      						<option>Chetri</option>
                      						<option>Devanga</option>
                     						<option>Dhobi</option>
                      						<option>Digambar</option>
                      						<option>Gandla</option>
                      						<option>Ganiga</option>
                      						<option>Goswami</option>
                     						<option>Gounder</option>
                      						<option>Gujrati</option>
                      						<option>Jaiswal</option>
                      						<option>Jat</option>
                      						<option>Khatri</option>
                      						<option>Kori</option>
                      						<option>Kumawat</option>
                      						<option>Kumbar</option>
                      						<option>Khumar</option>
                      						<option>Kunbi</option>
                      						<option>Kurmi</option>
                      						<option>Lambani</option>
                      						<option>Leva Patil</option>
                      						<option>Lohana </option>
                      						<option>Lubana</option>
                      						<option>Maharashwari</option>
							<option>other</option>
					                    </select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br>

					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gothra:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="text" name="subcaste" size=25 value="<?php echo $tsubcaste; ?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br>

					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Manglik:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<select name="manglik">
                      						<option><?php echo $tmanglik; ?></option>
                      						<option>Don't Know</option>
                      						<option>Yes</option>
                      						<option>No</option>
                    					</select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br>

					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Family Values:&nbsp;&nbsp;
						<select name="familyvalues">
						                <option><?php echo $tfamilyvalues; ?></option>
                      						<option>Moderate</option>
                      						<option>Traditional</option>
                    					</select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br>
					<hr size=5 width=100%><font size=4 color="#660000" face="LatinoPal5"><b><div align="left"><u>&nbsp;&nbsp;Eduacation:-</u></div></b></font><hr size=5 width=100%>

					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Education:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<select name="education">
                      						<option><?php echo $tedu; ?></option>
                      						<option>Bachelors</option>
							<option>Master</option>
                   					</select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br>

					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Profession:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<select name="profession">
						                <option><?php echo $tpro; ?></option>
                      						<option>Computer Professional</option>
							<option>Science Professional</option>
							<option>Commerce Professional</option>
							<option>Arts Professional</option>
							<option>Other Professional</option>
						</select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br>
					<hr size=5 width=100%><font size=4 color="#660000" face="LatinoPal5"><b><div align="left"><u>&nbsp;&nbsp;Life Style:-</u></div></b></font><hr size=5 width=100%>

					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Diet:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<select name="diet">
                      						<option><?php echo $tdiet; ?></option>
                      						<option>Veg</option>
                      						<option>Non-vag</option>
                   						</select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br>

					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Smoke:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<select name="smoke">
                      						<option><?php echo $tsmoke; ?></option>
                      						<option>Yes</option>
                      						<option>No</option>
                    					</select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br>

					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Drink:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<select name="drink">
                      						<option><?php echo $tdrink; ?></option>
                      						<option>Yes</option>
                      						<option>No</option>
                    					</select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br>
					<hr size=5 width=100%><font size=4 color="#660000" face="LatinoPal5"><b><div align="left"><u>&nbsp;&nbsp;Location:-</u></div></b></font><hr size=5 width=100%>

										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<select name="state">
							<option><?php echo $tstate; ?></option>
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
                            					</select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br>

										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;City:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<select name="city">
                      						<option><?php echo $tcity; ?></option>
                      						<option>Ahmedabad</option>
							<option>Ajanta</option>
							<option>Ajmer</option>
							<option>Aurangabad</option>
							<option>Baroda</option>
							<option>Bhavnagar</option>
							<option>Bhuj</option>
							<option>Bundi</option>
							<option>Chittorgath</option>
							<option>Gondal</option>
							<option>Jaipur</option>
							<option>Jodhpur</option>
							<option>Kota</option>
							<option>Mount-Abu</option>
							<option>Mumbai</option>
							<option>Ranakpur</option>
							<option>Surat</option>
							<option>Udaipur</option>
							<option>Rajkot</option>
							<option>Agra</option>
							<option>Delhi</option>
							<option>Dehradun</option>
							<option>Lucknow</option>
							<option>Manali</option>
							<option>Sarnath</option>
							<option>Varanasi</option>
							<option>Nainital</option>
							<option>Chennai</option>
							<option>Hyderabad</option>
							<option>Kanykumari</option>
							<option>Kovalam</option>
							<option>Mahabalipuram</option>
							<option>Varkala</option>
							<option>Bhopal</option>
							<option>Gwalior</option>
							<option>Indore</option>
							<option>Jabalpur</option>
							<option>Kanha</option>
							<option>Umaria</option>
							<option>Bhubaneshwar</option>
							<option>Bodhgaya</option>
							<option>Gangtok</option>
							<option>Kalimpong</option>
							<option>Kolkata</option>
							<option>Nalanda</option>
							<option>Puri</option>
							<option>Vaishali</option>
							<option>Others</option>
                    					</select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br>

										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Residency Status:
						<select name="residencystatus">
                     						<option><?php echo $trest; ?></option>
                      						<option>Citizen</option>
                      						<option>student Visa</option>
                    					</select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br>
					<hr size=5 width=100%><font size=4 color="#660000" face="LatinoPal5"><b><div align="left"><u>&nbsp;&nbsp;Contact Detail & More About You:-</u></div></b></font><hr size=5 width=100%>

					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Contact Number:
						<input type="text" size=25 name="contactnumber" value="<?php echo $tconnumber; ?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br>
					
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;More About You:
											<textarea name="more" rows=3 cols=33 name="moreaboutyou"><?php echo $tmore; ?>
						</textarea>
				</font>
			
				
					<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="sub1" value="&nbsp;&nbsp;&nbsp;&nbsp;Save&nbsp;&nbsp;&nbsp;&nbsp;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="reset" value="&nbsp;&nbsp;&nbsp;&nbsp;Reset&nbsp;&nbsp;&nbsp;&nbsp;"><br><br>
				</div>
				</form>
				</div>
				<?php
					if(isset($_POST['sub1']))
					{
						$chk=false;
						$gid=$session_user;
						$gpwd=$session_password;
						$gfullnm=$_POST['fullname'];
						$geid=$_POST['emailid'];
						$grel=$_POST['religion'];
						$coun=$_POST['country'];
						$gen=$_POST['gender'];
						$bday=$_POST['birthday'];
						$bmonth=$_POST['birthmonth'];
						$byear=$_POST['birthyear'];
						$pcreate=$_POST['profilecreator'];
						$mstatus=$_POST['maritalstatus'];
						$hchild=$_POST['havechildren'];
						$height=$_POST['height'];
						$btype=$_POST['bodytype'];
						$compl=$_POST['complexion'];
						$spcases=$_POST['specialcases'];
						$motongue=$_POST['mothertongue'];
						$caste=$_POST['caste'];
						$subcaste=$_POST['subcaste'];
						$manglik=$_POST['manglik'];
						$familyvalues=$_POST['familyvalues'];
						$edu=$_POST['education'];
						$pro=$_POST['profession'];
						$diet=$_POST['diet'];
						$smoke=$_POST['smoke'];
						$drink=$_POST['drink'];
						$state=$_POST['state'];
						$city=$_POST['city'];
						$restatus=$_POST['residencystatus'];
						$connumber=$_POST['contactnumber'];
						$age=$_POST['age'];
						$more=$_POST['more'];
	
			
						include_once("config.php");
						
						$qry=mysql_query("select * from profile");
						for ($ij=1;$ij<=mysql_num_rows($qry);$ij++)
						{
							$data=mysql_fetch_array($qry);
							if($gid==$data["id"])
							{
								$sql1="UPDATE profile SET id='$gid',fullname='$gfullnm',emailid='$geid',religion='$grel',country='$coun',gender='$gen',birthday='$bday',birthmonth='$bmonth',birthyear='$byear',profilecreator='$pcreate',meritalstatus='$mstatus',havechildren='$hchild',height='$height',bodytype='$btype',complexion='$compl',specialcases='$spcases',mothertongue='$motongue',caste='$caste',subcaste='$subcaste',manglik='$manglik',familyvalues='$familyvalues',education='$edu',profession='$pro',diet='$diet',smoke='$smoke',drink='$drink',state='$state',city='$city',residencystatus='$restatus',contactnumber='$connumber',more='$more',age='$age' WHERE id='$gid'";
							}	
						}
						
						if(mysql_query($sql1))
						{ 
							echo "<script language='javascript'>";
								echo "alert('Profile has been Saved')";
							echo "</script>";
						}	
						else
						{
							echo "<script language='javascript'>";
								echo "alert('Profile does not Save')";
							echo "</script>";
						}
					}
				?>
			</td>
		</tr>
		
	</table>
</td></tr>
</table>	
</head>
<body VLINK="0000AA">
</body>
</html>