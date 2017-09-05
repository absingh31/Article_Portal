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

if(isset($_POST['username'])&&isset($_POST['password']))
    {

        $username=htmlentities($_POST['username']);
        $password=htmlentities($_POST['password']);
        $password=md5($password);
        
        $query="SELECT Password FROM table2 WHERE UserName='{$username}'";
        $queryresult=mysql_query($query);
        $queryresult2=mysql_fetch_assoc($queryresult);
        if($queryresult2['Password']===$password)
        {
            session_start();
            $_SESSION['name']=$username;         
        }
        else
        {
            echo "<br>";
            echo 'Wrong Password';
        }
    

    
        if(isset($_POST['logout']))
        { 
            echo $_SESSION['name'];
            session_destroy();
            echo 'You are logged out.';
        }
    }
?>
<?php
if(isset($_POST['buttonone']))
{
	header('Location: signup.php');
}
?>
<!DOCTYPE html>
<html>
<style>

.body{
	background-color: #ccccb3;
}
.green{
	margin-left:6px; 
}
.button{
	border-radius: 2px;
	 border: 2px solid grey;
	 box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19); 
}

.button:hover {
    background-color: #4CAF50; /* Green */
    color: white;
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}
.box{	padding-right: 20px;

}

.fontstyle{
	font-style: Monospace;
	font-size: 35px;
}
.upload{
    border-radius: 5    px;
     border: 2px solid grey;
     box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19); 
    padding: 5px 10px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
}

.upload:hover {
    background-color: #4CAF50; /* Green */
    color: white;
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}


</style>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Page 1</title>
        <meta name="description" content="This is the main page that contains all the articles and search boxes and aother options.">
        <link rel="stylesheet" href="main.css">
    </head>
    <body class="body">

    <center class="fontstyle">ArticleMate</center><br>
        
        </div>
        <br>
        <form action="index.php" method="post" name="form2">
          <center>  <input type="text" name="search" size="75" placeholder="Search for articles"><br>
            <input type="submit" class="button" name="searchs" value="Search">
          </center>
        </form>
        <br>
        <div>
        <form method="post" action="submitarticle.php">
        <button class="upload" type="submit" name="submitarticle">Upload article</button>
        </form>
        </div>

<?php
if(isset($_POST['submitarticle']))
{
    header('Location: SubmitArticle.php');
}
?>
<?php
        if(isset($_POST['up']))
            {
                $id=$_POST['sno'];
                $query1="SELECT Upvotes FROM table3 WHERE SNo='{$id}'";
                $result=mysql_query($query1);
                $result1=mysql_fetch_assoc($result);
                $upvotes=$result1['Upvotes'];
                $upvotes=$upvotes+1;
                $query="UPDATE table3 SET Upvotes='{$upvotes}' WHERE SNo='{$id}'";
                mysql_query($query);
            }  
            
?>    
        <?php
            if(isset($_POST['searcht'])&&isset($_POST['searchs']))
            {
                $title=$_POST['searcht'];
                $query="SELECT * FROM table3 WHERE Title='{$title}'";
                $queryresult=mysql_query($query);
                $queryresult2=mysql_fetch_assoc($queryresult);
                if($queryresult2['Article']=='')
                {
                    die('Article not found');
                }
                echo '<h1>'.$title.'</h1>
                <form method="post" action="index.php">
                <input type="text" name="sno" value="'.$queryresult2['SNo'].'" hidden>
                '.$queryresult2['Upvotes'].'<br>
                <button type="submit" class="button" name="up">Upvote</button>
                </form>
                <hr>';
                echo '<b>'.$queryresult2['Article'].'</b>';
            }

            $query1="SELECT COUNT(SNo) FROM table3";
            $result=mysql_query($query1);
            $result1=mysql_fetch_assoc($result);
            $result2=$result1['COUNT(SNo)'];
        for($i=$result2;$i>$result2-5;$i--)
        {
            $query="SELECT * FROM table3 WHERE SNo=$i";
            $queryresult=mysql_query($query);
            $queryresult2=mysql_fetch_assoc($queryresult);

            $title=$queryresult2['Title'];
            $article=$queryresult2['Article'];
            $upvotes=$queryresult2['Upvotes'];
            echo '<h2>'.$title.'</h2>
            <form method="post" action="index.php">
            <input type="text" name="sno" value="'.$queryresult2['SNo'].'" hidden>
            '.$queryresult2['Upvotes'].'<br>
            <button type="submit" class="button" name="up">Upvote</button>
            </form>
            <hr>';
            echo $article.'<br>';
        }
         
            
        ?>

        
        <br>
        <br>
         <form method="post" action="index.php">
        <center>
        <input class="loginbutton" type="submit" name="logout" value="Log Out">
        </center>
        </form>

    </body>
</html>
