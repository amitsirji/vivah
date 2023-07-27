<?php
    session_start();
?>

<html>
	<head>
	<title>Home</title>	
	<body background="Pictures/index1.jpg" width=75%><br>
	<table border=0 width=75% id="table" align="center" cellspacing=1% cellpadding=0%>
	<tr><td bgcolor="white">
	<script src="header.js">
	</script>
<div align="left"><a href='index.php'><font id="a" size="+2"><b><font color="#660033">Home</a></div>
	<table border=0 width=75% align="center" cellspacing=2% cellpadding=0%>
	<tr>
	<td width=40% align="left" valign="top">
	
            <img src="pictures/28.gif"></img> </td>
			   <td align="center" bgcolor="white"  width=40% valign="middle"><br><br><br>
				<form name="f1" method="POST" action="adminlogin.php">
					<b><font color="maroon" style="courier" size=4>&nbsp;&nbsp;<u>Administrator Login</u></font></b><br><br>
					<font face="Courier New" size=3 color="darkred">
						&nbsp;UserName:&nbsp;<!--<input type="text" value="username" size=15 name="username"> -->&nbsp;
						<input type="text" id="username" size="15" value="Username" name="username" onBlur="if(this.value=='') this.value='Username';" onFocus="if(this.value=='Username') this.value='';"><br><br>
						&nbsp;Password:&nbsp;<!--<input  type="password" value="Password" size=15 name="password"> -->&nbsp;
						<input type="Password" id="Password" size="15" name="password" value="Password" onBlur="if(this.value=='') this.value='Password';" onFocus="if(this.value=='Password')
			 this.value='';"><br><br>
				        &nbsp;&nbsp;<input type="submit" value="Sign In" name="submit1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="button" value="Cancel" onClick="document.f1.username.value='username';document.f1.password.value='Password'">
              &nbsp;&nbsp;&nbsp; </font> 
            </form>

				<?php
					$msg="<h3 align='center'>Enter Username and Password to Login</h4>";
					if(isset($_POST['submit1']))
					{
						$count=false;
						$usr=$_POST['username'];
						$pwd=$_POST['password'];			
			
						include_once("config.php");
						$qry=mysql_query("select * from admin_login");						
						for ($i=1;$i<=mysql_num_rows($qry);$i++)
						{	
							$data=mysql_fetch_array($qry);
							$user=$data["name"];
							$psd=$data["passwd"];
								
							if ($user==$usr && $psd==$pwd)
	   						{
								$count=true;
								$_SESSION[admin_login]=1;
								$_SESSION[admin_user]=$user;
								$_SESSION[admin_password]=$psd;
							}
						}
						if($count==true)
						{	
							$msg=" ";
							echo "<script language='javascript'>";
								echo "window.location.replace('admin_table.php')";
							echo "</script>";
						}
						else
						{
							$msg=" ";
							echo "<center><b>Username <font color='red' size=4> Or</font> Password <font color='red'  size=4> are not Correct Please! Try Again.</font></b></center>";

						}
					}
					echo "<font size=4 color='darkred'><center><b>".$msg."</b></center></font>";
				?>
				
			</td>
			<td width=40% align="right" valign="top"><br><br><br><br>
			<img src="pictures\mgcp.jpg" height="150"></img>
		  </td>
		</tr>
	</table>
	<script src="footer.js">
	</script>
	
	
</td></tr>
</table>

</head>	


</body>

</html>
