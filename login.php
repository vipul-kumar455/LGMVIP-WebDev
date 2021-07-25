



<!DOCTYPE html>    
<html>    
<head>    
    <title>Login Form</title>    
    <link rel="stylesheet" type="text/css" href="login.css">    
</head>    
<body>    
    <h1>Login Page</h1><br>    
    <div class="login">   
    <form id="login" method="post" action="login.php">    
        <label><b>User Name     
        </b>   
        <br> 
        </label>    
        <input type="text" name="userid" id="Uname" placeholder="Username">    
        <br><br>   
        <br>
        <label><b>Password     
        </b>    
        <br>
        </label>    
        <input type="Password" name="password" id="Pass" placeholder="Password">    
        <br><br>  
        
        <br>  
        <input type="submit" name="log" id="log" value="Log In ">       
        <br><br>    
        <input type="checkbox" id="check">    
        <span>Remember me</span>    
        <br><br>    
        Forgot <a href="#">Password</a>    
    </form>





 
    
    





</div>    
</body>    
</html>  
<?php
   include("init.php");
    session_start();

    if (isset($_POST["userid"],$_POST["password"]))
    {
        $username=$_POST["userid"];
        $password=$_POST["password"];
        $sql = "SELECT userid FROM admin_login WHERE userid='$username' and password = '$password'";
        $result=mysqli_query($conn,$sql);

        // $row=mysqli_fetch_array($result);
        $count=mysqli_num_rows($result);
        
        if($count==1) {
            $_SESSION['login_user']=$username;
            header("Location: dashboard.php");
        }else {
            echo '<script language="javascript">';
            echo 'alert("Invalid Username or Password")';
            echo '</script>';
        }
        
    }
?>
