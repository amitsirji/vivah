<?php
		session_start();
    	if($_SESSION[login]!=1)
        		header("Location:index.php");
	
	$session_user=$_SESSION[usr];
	$session_password=$_SESSION[pwd];
?>
<html>

<head>
	<title>Feedback</title>
    <body background="Pictures/changpass.jpg">
	
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
				<br>			</td>
			<td bgcolor="white" align="center">
				<b><font size=5 color="darkred" face="Comic Sans MS">UnderStanding Your Soon<br>To Be Better<br>Half</font></b>			</td>
		</tr>
	</table>
	
	<table border=0% width=100% height=0% bgcolor="white" bordercolor="black" align="center" cellspacing=3% cellpadding=3%>
		<tr>
			<td height="37" align="center" bgcolor="white"><font face="sans-serif" size="+2" color="#CC0000">Go-></font></td>
			<td align="center" height="40" bgcolor="white" onMouseOver="this.bgColor='lightpink'" onMouseOut="this.bgColor='white'" id="m1"><a href="index.php"><font id="a"><b><font color="black">Home</b></font></a></td>
			<td align="center" bgcolor="white" onMouseOver="this.bgColor='lightpink'" onMouseOut="this.bgColor='white'" id="m2"><a href="howdoilook.php"><font id="a"><b><font color="black">Profile</b></font></a></td>
			<td align="center" bgcolor="white" onMouseOver="this.bgColor='lightpink'" onMouseOut="this.bgColor='white'" id="m3"><a href="change_password.php"><font id="a"><b><font color="black">Change Password</b></font></a></td>
			<td align="center" bgcolor="white" onMouseOver="this.bgColor='lightpink'" onMouseOut="this.bgColor='white'" id="m4"><a href="smart_search.php"><font id="a"><b><font color="black">Search</b></font></a></td>
			<td align="center" bgcolor="white" onMouseOver="this.bgColor='lightpink'" onMouseOut="this.bgColor='white'" id="m5"><a href="contectus.php"><font id="a"><b><font color="black">Contect Us</b></font></a></td>
			<td align="center" bgcolor="lightpink" id="m5"><a href="feedback.php"><font id="a"><b><font color="black">Feedback</b></font></a></td>						
          <td align="center" bgcolor="white"><font face="sans-serif" size="+2" color="#CC0000"><-Go</font></td>
		</tr>				
	</table>
	</tr></td>
	
	
	<tr>
			<td>
			<hr color="darkred" size=5 width=100% align="left">
				<center><font face="comic sans ms" size=6 color="#330000"><b>Enter Your FeedBack To Us,Thank You....!</font></div></center>
				<hr color="darkred" size=5 width=100% align="left">
			</td>
		</tr>
	<tr>
	<td>

	<table border=0% width=100% bgcolor="white" bordercolor="#F4F4F4" align="center" cellspacing=2% cellpadding=0%>
		<tr>
			<td width="50%" align="left" valign="top" colspan=2><br>
			<hr color="darkred" size=1 width=100% align="center">
				<div align="center"><font face="Verdana, Arial, Helvetica, sans-serif" size=5 color="#660000">FeedBack</font></div>
				<hr color="darkred" size=1 width=100% align="center"><br><br>
			     <form name="f1" method="POST" action="feedback.php">
				
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><font color="#880000">Name:-</font><font color="#880000">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="text" size=15 name="name"><br><br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Address:-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<textarea cols="25" rows="5" name="address"></textarea><br><br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Gender:-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;				
					<select name="gender">
                      <option>Male</option>
                      <option>Female</option>
                    </select>
					<br><br>
					
					
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="text" size=25 name="emailid"><br><br>
					
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;City:-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="text" name="city">
						<br><br>

					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State:-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="state">
					<br><br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Comment:-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<textarea cols="25" rows="5" name="comment"></textarea><br><br><br>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="submit" value="Submit" name="submit1" onClick="return chk_email();"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<input type="reset" value="Reset">
						
				</font></b>
			     </form>
				<?php
					if(isset($_POST['submit1']))
					{					
						if($_POST['name']!="" && $_POST['address']!="" && $_POST['gender']!="" && $_POST['emailid']!="" && $_POST['city']!="" && $_POST['state']!="" && $_POST['comment']!="")
						{						
							$a=$_POST['name'];
							$b=$_POST['address'];
							$c=$_POST['gender'];
							$d=$_POST['emailid'];
							$e=$_POST['city'];
							$f=$_POST['state'];
							$g=$_POST['comment'];
						include_once("config.php");
						$sql=mysql_query("insert into feedback values('$a','$b','$c','$d','$e','$f','$g')");	
																		
						}
						else
						{		
								echo "<script language='javascript'>";
								echo "alert('All Fields Must Be A Compalsory, Please Fillup All Fields')";
								echo "</script>";
							
						}
						
					}
				?>		  </td>
			<td valign="right"><br><br><br><br><br><br>
				<img src="pictures/b12.jpg" align="center">			</td>	
		</tr>
		<tr>
			<td colspan=6 height=150>
				<img src="pictures/nat4.jpg" height=100% width=100%></img>			</td>
		</tr>
	</table>
	</td></tr></table>
	</html>
	

