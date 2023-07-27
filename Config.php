<?php
     $link=mysql_connect("localhost","root","");
	 if(!$link)
	   { 
	       echo"server is not found".mysql_error();
       }		   
	 $db=mysql_select_db("vivah",$link);
	 if(!$db)
	   { 
	       echo"database is not found".mysql_error();
       }		   
	  
	   ?>
