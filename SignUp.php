<?php
mysql_connect('localhost','root','');
$con=mysql_select_db('IWPProject');
if($con)
{

}
else
{
	die('Unable to connect');
}
?>

<!DOCTYPE html>
<html>
<style>
.bg{
	background-color:#b9ccb3;
}
	.header{
    background-color: ;

}
.button{
	border-radius: 2px;
	 border: 2px solid grey;
	 box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19); 
}

.button:hover {
    background-color: #248f24; /* Green */
    color: white;
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}
</style>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Sign Up</title>
		<meta name="description" content="Sign Up for Wikia">
		<link rel="stylesheet" href="main.css">
	</head>
	<body class="header">
	<center>
		<h1> Sign Up for ArticleMate </h1>
		<h4> Here you can submit your own articles and read articles written by others. </h4></center>
		<form action="SignUp.php" method="POST">
		<fieldset class="bg">
			<b>Name:</b><br>
			<input type="text" name="name" placeholder="John Smith" required><br>
			<b>Username:</b><br>
			<input type="text" name="username" placeholder="john1" required><br>
			<b>Password:</b><br>
			<input type="password" name="password" placeholder="password" required><br>
			<b>Confirm Password:</b><br>
			<input type="password" name="password1" placeholder="password" required><br>
			<br>
			<input class="button" type="submit" name="submit" value="Submit">
		</fieldset>
		</form>

	</body>
</html>
<?php
if(isset($_POST['submit']))
{		
if(isset($_POST['name']) && isset($_POST['username']) && isset($_POST['password']) && isset($_POST['password1']))
{
	$name=htmlentities($_POST['name']);
	$username=htmlentities($_POST['username']);
	$password=htmlentities($_POST['password']);
	$password1=htmlentities($_POST['password1']);
	
	if(!($password1===$password))
	{
		die('Passwords do not match');
	}
	else
	{
		$password=md5($password);
		$password1=md5($password1);
	}
}
else
{
	echo ('*Required fields.');
}

$query="INSERT INTO table1 VALUES('','{$name}')";
$queryresult=mysql_query($query);
if($queryresult){
	header('Location: index.php');
}
echo $queryresult;
$query="INSERT INTO table2 VALUES('','{$username}','{$password}')";
$queryresult=mysql_query($query);
echo $queryresult;
}
?>