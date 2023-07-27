<?php
	session_start();
    	if($_SESSION[admin_login]!=1)
        		header("Location:adminlogin.php");
?>
	
<html>
	
<head>
	<title>Administrator Work</title>

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
<br><br>
<table border=0 width=80%  align="center" cellspacing=0% cellpadding=0%>
<tr><td> 
	<table border=0 width=100% height=0 bgcolor="white" bordercolor="black" align="center" cellspacing=3% cellpadding=3%>
		<tr><td align="right"><a href="admin_logout.php"><font color="#990000" size="+2" face="Arial, Helvetica, sans-serif">Logout</font></a>&nbsp;&nbsp;&nbsp;<b><?php echo $session_user; ?></b>&nbsp;&nbsp;</font></td></tr>
		<tr>
			<td>
				<script src="header.js">
				</script>
			</td>
		</tr>
		<tr>
			<td align="center" bgcolor="white">
			<div align="left"><a href='admin_table.php'><font id="a"><b><font color="#660033">User Detail</a></font></div>
				<center><b><font color="maroon" size=5><u> <img src="pictures\6.gif" width="116" height="99" align="middle"></img> User Feedback</u></font></b></center><br>
				<?php
					include_once("config.php");
					$qry=mysql_query("select * from feedback");
					echo "<table border=1 width=100% bgcolor='white' bordercolor='black' align='center' cellspacing=0% cellpadding=0%>"; 
						echo "<tr>";
							echo "<td align='center'><font color='darkred'><b>Id</b></font></td>";
							echo "<td align='center'><font color='darkred'><b>Address</b></font></td>";
							echo "<td align='center'><font color='darkred'><b>Gender</b></font></td>";
							echo "<td align='center'><font color='darkred'><b>Email Id</b></font></td>";
							echo "<td align='center'><font color='darkred'><b>City</b></font></td>";
							echo "<td align='center'><font color='darkred'><b>State</b></font></td>";
							echo "<td align='center'><font color='darkred'><b>Comment</b></font></td>";
						echo "</tr>";
					for($ii=1;$ii<=mysql_num_rows($qry);$ii++)
					{
						$data=mysql_fetch_array($qry);
						echo "<tr>";
							echo "<td align='center'>".$data['id']."</td>";
							echo "<td align='center'>".$data['address']."</td>";
							echo "<td align='center'>".$data['gender']."</td>";
							echo "<td align='center'>".$data['emailid']."</td>";
							echo "<td align='center'>".$data['city']."</td>";
							echo "<td align='center'>".$data['state']."</td>";
							echo "<td align='center'>".$data['comment']."</td>";
						echo "</tr>";	
					}
			
					echo "</table>";
					echo "<br>";
					echo "<form name='ff12' action='admin_feedback.php' method='POST'>";
					echo "<div align='right'";
						echo "<b><h3><font color='maroon'>Delete Feedback:~&nbsp;&nbsp;&nbsp;&nbsp;</b>";
						echo "Enter Id : <input type='text' name='id'>&nbsp;&nbsp;&nbsp;";
						echo "<input type='submit' name='submit' value='Delete'>&nbsp;&nbsp;&nbsp;";
					echo "</div";
					echo "</form>";

					if(isset($_POST['submit']))
					{
						$bool=false;
						$gid=$_POST['id'];
						include_once("config.php");
						
						if($gid=="")
						{
							echo "<script language='javascript'>";
								echo "alert('First Input A User Id To Delete Feedback')";
							echo "</script>";
						}
						else
						{
							$qry=mysql_query("select * from feedback");
							for ($ch=1;$ch<=mysql_num_rows($qry);$ch++)
							{
								$data=mysql_fetch_array($qry);
								if($gid==$data['id'])
								{
									$bool=true;
								}
							}
							if($bool==true)
							{
								$sql2= "DELETE FROM feedback WHERE id='$gid'";
					
								if(mysql_query($sql2))
								{
									echo "<script language='javascript'>";
										echo "alert('Feedback Deleted')";
									echo "</script>";
									echo "<script language='javascript'>";
										echo "window.location.replace('admin_feedback.php')";
									echo "</script>";
								}
							}
							else
							{
								echo "<script language='javascript'>";
									echo "alert('Feedback Does not Exist')";
								echo "</script>";
							}
						}
					}
				?>				
			</td>
		</tr>
		<tr>
			<td>
				<script src="footer.js">
				</script>
			</td>
		</tr>			
	</table>
	
	

</td></tr>
</table>	
</head>
<body VLINK="0000AA" onunload="chgmncolor()" bgcolor="orange">
</body>
</html>