

<?php
session_start();
if(!empty($_SESSION['aid']))
{


  header("refresh:1; url=adminlogin.php");
  
}

?>




<html>
       <head>
	<title>
	Admin login
	</title>
	     </head>

	     <body>
		
			<form action="adminform_destination.php" method="POST">
            
           <table><tr>
                <td>id:</td>
                <td><input type="password" name="id" placeholder="enter id" </td>
            </tr>
                <tr>
              	<td>Password:</td>
              	<td><input type="password" name="password" placeholder="enter password" </td>
              </tr>
              
              <tr><td><input type="submit" name="submit" value="submit"></td></tr>
        
              
			</form>
			
		</table>
	</body>
</html>

