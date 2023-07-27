<?php
    session_start();
?>

<html>
	<head>
	<title>Home</title>	
	<body><br>
	<table border=0% width=75% id="table" align="center" cellspacing=1% cellpadding=0%>
	<tr><td bgcolor="red">
	<script src="header.js">
	</script>

	<table border=0% width=100% height=100% bgcolor="red" bordercolorlight="#FF99FF" align="center" cellspacing=2% cellpadding=0%>
		
		<tr>
			<td width=399 height=200 align="center"><form name="f1" method="POST" action="index.php">
				<img src="Pictures/kkk.jpg"></img>			</td>
			
          <td colspan=2 bgcolor="white" align="left" valign="top"><p><br>
              </p>
            <p><br>
                <center><a href="register.php"><img src="Pictures/r1.gif" border="white"></img></a> 
              <br>
              <br>
              <br>
              <b><font color="darkred" size=6 face="Courier New"><strong>Login Now,</strong></font></b><br><font face="Courier New" color="darkred"><br><b>
              User Name&nbsp;
              <!--<input type="text" value="username" size=15 name="username"> -->
			  <input type="text" id="username" size="15" value="Username" name="username" onBlur="if(this.value=='') this.value='Username';" onFocus="if(this.value=='Username') this.value='';">
              &nbsp;<br>
              <br>
              <b>Password&nbsp;&nbsp;
              <!--<input  type="password" value="Password" size=15 name="password"> -->
			 <input type="Password" id="Password" size="15" name="password" value="Password" onBlur="if(this.value=='') this.value='Password';" onFocus="if(this.value=='Password')
			 this.value='';">
              &nbsp;<br>
              <br>&nbsp;&nbsp;
              <input type="submit" value="Sign In" name="submit1">
              &nbsp;&nbsp;&nbsp; 
              <input type="button" value="Cancel" onClick="document.f1.username.value='username';document.f1.password.value='Password'">
              &nbsp;&nbsp;&nbsp;</b>
			  </font>
			  </form>
			</p>
            <?php
					$msg='Enter Your Username And Password To Login';
					if(isset($_POST['submit1']))
					{					
						$count=false;
						$usr=$_POST['username'];
						$pas=$_POST['password'];
					 
						include_once("config.php");
						$qry=mysql_query("select * from register");						
						for ($i=1;$i<=mysql_num_rows($qry);$i++)
						{	
							$result=mysql_fetch_array($qry);
							$user=$result["id"];
							$psd=$result["password"];
							
							if($usr==$user && $pas==$psd)
							{
								$count=true;
								$_SESSION['login']=1;
								$_SESSION['usr']=$usr;
								$_SESSION['pas']=$pas;
							}
						}
						if($count==true)
						{
							echo"<script language='javascript'>window.location.assign('smart_search.php');</script>";
						}
						{
							$msg=" ";
							echo "<center><font color='red' size=4>Invalid Username Or Password</font><font color='red'  size=4>,Check it ! and Try Again.</font></center>";
						}
					}
				?>												
		  </td>
			<td width=440 align="left" valign="top">
				<form name="frm1" action="index_search.php" method="POST">
				<table border="0" align="center"><tr><td><img src="pictures/for.gif"></img></td></tr></table>
				<center><b><font size=4 color="darkred" face="Book Antiqua">Simply Metrimonial Search</font></b></center>
					<hr size=4 color="gray" width=80% align="center"><br><font size=2><b> 
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gender: &nbsp;&nbsp;&nbsp;&nbsp; 
              <select name="gender">
					<option>Male</option>
					<option>Female</option>
				</select><br><br>

				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Age:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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
				</select>

				<input type="hidden" name="hdn" value="index">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Search" name="sub"><br><br><hr size=4 color="gray" width=80% align="center">
				</form><br>
				<center><marquee>
						<img src="pictures/g1.jpg" width=360 height=130></img>
						<img src="pictures/g2.jpg" width=360 height=130></img>
						<img src="pictures/g3.jpg" width=360 height=130></img>
						<img src="pictures/g4.jpg" width=360 height=130></img>
						<img src="pictures/g5.jpg" width=360 height=130></img>
						<img src="pictures/g6.jpg" width=360 height=130></img>
						<img src="pictures/g7.jpg" width=360 height=130></img>
						<img src="pictures/g8.jpg" width=360 height=130></img>
				</marquee></center>
				<br><br>
		  </td>
		</tr>
	</table>
	<script src="footer.js">
	</script>
	<!--<div align="right"><font color="maroon"><a href="adminlogin.php"><b>Administrator Login&nbsp;&nbsp;</a></font></div>--!>
	
</td></tr>
</table>

</head>	
<body bgcolor="orange">

</body>

</html>
