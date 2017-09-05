<?php
mysql_connect('localhost','root','');
$con=mysql_select_db('ArticlePortal');
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
.greentext{
	background-color: #ccccb3;
}
.button{
	border-radius: 5	px;
	 border: 2px solid grey;
	 box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19); 
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
}

.button:hover {
    background-color: #4CAF50; /* Green */
    color: white;
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}
.text{
	font-size:20px;
	 }
</style>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Submit Article</title>
		<meta name="description" content="Submit Article for Wikia">
		<link rel="stylesheet" href="main.css">
	</head>
	<body class="greentext">
		<h2 class="text">Write your own article here:</h2>
		<br>
		<form action="SubmitArticle.php" method="post">
		<h4 class="text">Enter Article Title:</h4>
		<textarea rows="1" cols="50" name="contents" placeholder="Enter the title of your article">
			
		</textarea>
		<br>
		<h4 class="text">Enter contents here:</h4>
		<textarea rows="12" cols="80" name="contents">
			
		</textarea>
		<br>
		<br>
		<input class="button" type="submit" name="submit" value="Submit">
		</form>

		<?php
	if(isset($_POST['submit']))
	{
		if(!(isset($_POST['title']) && isset($_POST['contents'])))
		{
			die('Both the fields should be filled up');
		}
		
		$title=$_POST['title'];
		$contents=$_POST['contents'];

		session_start();
		$username=$_SESSION['name'];
		if($username=='')
		{
			die('You are not logged in.');
		}
		echo $username;
		
		$query="SELECT T2ID FROM table2 WHERE UserName='{$username}'";
		$queryresult=mysql_query($query);
		$queryresult2=mysql_fetch_assoc($queryresult);
		$T3ID=$queryresult2['T2ID'];
		$upvotes=0;
		$query="INSERT INTO table3 VALUES('','{$T3ID}','{$title}','{$contents}','{$upvotes}')";
		mysql_query($query);
	}
		?>
	</body>
</html>
