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
            header('Location: after_login.php');        
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
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Page 1</title>
        <meta name="description" content="This is the main page that contains all the articles and search boxes and aother options.">
        <link rel="stylesheet" href="main.css">
    </head>
    <body class="body">

    <center class="fontstyle"><b>ArticleMate</b></center><br>
        <div class="header">
<center>
            <form class="box" action="index.php" method="post"> 
            	UserName:
            <input type="text" name="username"><br>
            Password:
            <input class="green" type="password" name="password"><br><br>
            <button class="loginbutton" type="submit" name="button">Log In</button>
            <br><br>
            <button class="loginbutton" type="submit" name="buttonone">Sign Up</button><br>
            </form>
</center>
        </div>
        <br>
        <form action="index.php" method="post" name="form2">
          <center>  <input type="text" name="search" size="75" style="width: 700px; height: 35px" placeholder="Search for articles"><br>
            <input type="submit" class="searchbutton" name="searchs" value="Search">
          </center>
        </form>

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
            echo '<h2><div                  >'.$title.'</div></h2>
            <form method="post" action="index.php">
            <input type="text" name="sno" value="'.$queryresult2['SNo'].'" hidden>
            '.$queryresult2['Upvotes'].'<br>
            <button type="submit" class="button" name="up">Upvote</button>
            </form>
            <hr>
            <div >'.$article.'<br> </div>';
        }
         
            
        ?>

        
        <br>
        <br>


    </body>
</html>
