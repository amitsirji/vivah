<?php
	$page=$_POST['hdn'];
	$ggen=$_POST['gender'];
	$gage1=$_POST['age1'];
	$gage2=$_POST['age2'];	
?>
		
<html>
	<head>
		<title>Simply Search</title>

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

<table border=0 width=75%  align="center" cellspacing=1% cellpadding=0%>

<tr><td>
	<script src="header.js">
	</script>
	<div align="left"><a href='index.php'><font size="+2"><b><font color="#660033">Home</a></div>
		<table border=0% width=100% height=80% bgcolor="white" bordercolor="#F4F4F4" align="center" cellspacing=2% cellpadding=0%>
		<tr>
			<td align="center">
				<br>
				<?php
					include_once("Config.php");
					$qry=mysql_query("select * from profile");
		
					$tmp=1;
					echo "<table border=0 width=100% height=80% bgcolor='white' align='center' cellspacing=2% cellpadding=0%>";
					$arr=array();
					$count=0;
					$chk=false;
					
					if($page=="index")
					{
						for($mm=1;$mm<=mysql_num_rows($qry);$mm++)
						{
							$data=mysql_fetch_array($qry);
							if($tmp==30)
							{
								$tmp=1;
							}
							if($ggen==$data['gender'] && $gage1<=$data['age'] && $gage2>=$data['age'])
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
									echo "<font id='a' color='#cc0000'>";
										echo "&nbsp;&nbsp;&nbsp;<b><u>Information</u></b><br><br></font>";
										echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font id='a' color='#660033'>Age :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color='darkred'>".$data['age']."</font><br>";
										echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gender :&nbsp;&nbsp;&nbsp;&nbsp;<font color='darkred'>".$data['gender']."</font><br>";
										echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Religion :&nbsp;&nbsp;&nbsp;<font color='darkred'>".$data['religion']."</font><br>";
										echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;EmailId :&nbsp;&nbsp;&nbsp;&nbsp;<font color='darkred'>".$data['emailid']."</font><br>";
										echo "<br>";
									echo "</font>";
								echo "</td>";
								echo "</tr>";
							
								echo "<tr>";
									echo "<td bgcolor='lightpink' width=400>";
										echo "<font id='c'>";
											echo "<div align='right'><b>Profile Id :</b>&nbsp;".$data['id']."&nbsp;&nbsp;</div>";
										echo "</font>";
									echo "</td>";
									echo "<td align='center' valign='center' bgcolor='#660000' width=100>";
											echo "&nbsp;";
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
							echo "window.location.replace('index.php')";
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