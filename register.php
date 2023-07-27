<html>

<head>
	<title>Registration Page</title>
	<body background="Pictures/register1.jpg" bgcolor="orange">

	<script language="javascript">
		
		function chk_email() // check email address.
		{
			if(window.document.f1.emailid.value!="")
			{	
				pass=window.document.f1.emailid.value.indexOf('@',0);
				pass1=window.document.f1.emailid.value.indexOf('.',0);
		
				if((pass==-1) || (pass1==-1))
				{
					alert("Please, Enter A Valid Email Address");
					window.document.f1.emailid.focus();	
					return false;	
				} 		
		
	   		 }
		}
	
		function verify() // check if any field is remain empty or not.
		{
	   		for(i=0;i<=document.f1.elements.length;i++)
	    		{
           	 			if(window.document.f1.elements[i].value=="")
				{
					alert("First, fill Up the "+window.document.f1.elements[i].name+" field");
					window.document.f1.elements[i].focus();
					return false;
				}
			}
			return true;
		}
	</script>

	<style type="text/css">
		#a{
			color:"darkred"; 
			font-size:13;
			font-family:"Bookman Old Style";
		}
	</style><br>
<table border=0% width=75% bgcolor="red" bordercolor="red" align="center" cellspacing=1% cellpadding=0%>
<tr><td>
	<script src="header.js">
	</script>
	<table border=0% width=100% height=80% bgcolor="white"  align="center" cellspacing=2% cellpadding=0%>
		
		<tr>
			<td valign="center" align="left" width=403>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><i><font size=6 color="darkred" face="Bastard">Why Register...?</font><br></i></b></center>
				<hr color="darkred" size=3 width=65% align="left">
				<ul type=square>
					<li><font size=4 color="#c06000"><b><i>View Unlimeted Profiles</i></b></font></li>
					<li><font size=4 color="#c06000"><b><i> Express Interest in members</i></b></font></li>
					<li><font size=4 color="#c06000"><b><i>Get Contacted Directely</i></b></font></li>				
				</ul>
				<hr color="darkred" size=3 width=65% align="left"><br>							
			</td>

			<td width="404" height=100>
				<div align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="pictures/ii.gif"></img><b><font face="comic Sans MS" size=5>Already Registered ? </font></b><font face="Helvetica" size=5 color="#0000FF"><a href="index.php"><b>Login</a></font></div><br>
				<img src="pictures/h.jpg" width=100% height=100%></img><br><br>
			</td>
		</tr>
		<tr>
			<td bgcolor="#CCCCCC" colspan=2>
				<div align="left"><font face="comic sans ms" size=5 color="#001100"><b>Enter Your Details For FREE Registration..!</font></div>
				<hr color="darkred" size=5 width=44% align="left">
			</td>
		</tr>
	</table>

	<table border=0% width=100% height=100% bgcolor="red" bordercolor="#F4F4F4" align="center" cellspacing=2% cellpadding=0%>
		<tr>
			<td valign="top" align="left"><br>
			<hr color="darkred" size=1 width=100% align="center">
				<div align="center"><font face="Bookman Old Style" size=3 color="darkred"><b>All Fields Are Compulsory,This Information Must Be Compulsory For Successfull Account Creation........</font></div>
				<hr color="darkred" size=1 width=100% align="center"><br><br>
			     <form name="f1" method="POST" action="register.php">
				
				<font id="a">
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><font color="#880000">Profile Id:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" size=15 name="id"><br><br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" size=15 name="password"><br><br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Confirm Password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" size=15 name="confirm"><br><br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" size=25 name="emailid"><br><br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gender:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						 <select name="gender">
					<option>Male</option>
					<option>Female</option>
				</select>
				<br><br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Birth Date (D-M-Y) :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<select name="birthday">
							<script language="javascript">
								for(i=1;i<=31;i++)
								{
									document.write("<option>" + i + "</option>")
								}
							</script>
						</select>
						<select name="birthmonth">
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
							<script language="javascript">
								for(i=1975;i<=2000;i++)
								{
									document.write("<option>" + i + "</option>")
								}
							</script>
						</select><br><br>
					
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Religion / Community:&nbsp;&nbsp;
						
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

					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Residence Country :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<select name="country">
							<option>India</option>
						</select><br><br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Residence State :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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
						</select><br><br><br>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="submit" value="Submit" name="submit1" onClick="return chk_email();"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<input type="reset" value="Reset">
						
				</font></b>
			     </form>

				<?php
					
					if(isset($_POST['submit1']))
					{
						$chk=false;
						$gid=$_POST['id'];
						$gpwd=$_POST['password'];
						$gconfpwd=$_POST['confirm'];
			
						include_once("config.php");
						$qry=mysql_query("select * from register");						
						for ($i=1;$i<=mysql_num_rows($qry);$i++)
						{	
							$data=mysql_fetch_array($qry);
							$tid=$data["id"];
							$tpwd=$data["password"];
							$tconfpwd=$data["confirm"];
								
							if ($gid==$tid)
	   						{
								$chk=true;
								echo "<script language='javascript'>";
									echo "alert('User Id which you enter is already exist')";
								echo "</script>";
								break;
							}	
						}
						if($chk==false && $_POST['id']!="" && $_POST['password']!="" && $_POST['confirm']!="" && $_POST['emailid']!="" )
						{	
							$id=$_POST['id'];
							$password=$_POST['password'];
							$confirm=$_POST['confirm'];
							$emailid=$_POST['emailid'];
							$gender=$_POST['gender'];
							$birthday=$_POST['birthday'];
							$birthmonth=$_POST['birthmonth'];
							$birthyear=$_POST['birthyear'];
							$religion=$_POST['religion'];
							$country=$_POST['country'];
							$state=$_POST['state'];

							if($password==$confirm)
							{
								$sql1="INSERT INTO register (id, password,emailid, gender, birthday, birthmonth, birthyear, religion, country,state) VALUES ('$id','$password','$emailid','$gender','$birthday','$birthmonth','$birthyear','$religion','$country','$state')";
								$sql2="INSERT INTO profile (id) VALUES ('$id')";

								if(mysql_query($sql1) && mysql_query($sql2))
								{ 
									echo "<script language='javascript'>";
										echo "alert('Registeration Completed ')";
									echo "</script>";
								}	
								else
		 						{
									echo "<script language='javascript'>";
										echo "alert('Error In The Registeration')";
									echo "</script>";
								}
							}
							else
							{
								echo "<script language='javascript'>";
									echo "alert('Please enter a same values in Password & Confirmation fields')";
								echo "</script>";
							}
							
						}
						else
						{
							echo "<script language='javascript'>";
								echo "alert('All Fields Must Be A Compalsory, Please Fillup All Fields')";
							echo "</script>";
						}
					  }	
					
				?>
			</td>
			<td width=50% align="center">
				<img src="pictures/b12.jpg" height=100% width=100% align="center">	
			</td>	
		</tr>
		<tr>
			<td colspan=6 height=150>
				<img src="pictures/nat4.jpg" height=100% width=100%></img>
			</td>
		</tr>
	</table>
</td></tr>
</table>
</head>

</body>

</html>