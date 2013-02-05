<?php
session_start();
$user=$_POST['username'];
$pass=$_POST['password'];
if($_SESSION['loggedin']!=True){
$sql = "SELECT * FROM Users WHERE username = '$user' and password = '$pass'";
	try{
		$dbh=new PDO("sqlite:account.db");
   	$stmt=$dbh->query($sql);
   	if(!$stmt) {
    		throw new Exception('SQL query failed');
    	}
      $row=$stmt->fetchAll();
		$count=count($row);
   	if($count==1){
   		$_SESSION['username']=$user;
   		$_SESSION['loggedin']=True;
    		header("location:index.php");
    	}
		else{
					
			echo
#				<font color="red">Invalid credential!</font>
				'<form action="login.php" method="post">
				<table border="0">
				<caption><h3>Enter your credentials:</h3></caption>
					<tr><td>Username:</td><td><span class="tt"><label><input type="text" name="username" size="30"/></label></span></td></tr>
					<tr><td>Password:</td><td><span class="tt"><label><input type="password" name="password" size="30"/></label></span></td></tr>
					<tr><td colspan="2" align="center"><input type="submit" name="submit" value="Submit"/></td></tr>
				</table>
				</form>';
		}
	} 
	catch(Exception $e){
		echo $e->getMessage();
	}	}
	else{
    		header("location:login.php");
	}

?>
