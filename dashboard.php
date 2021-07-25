<?php
    include("init.php");
    
    $no_of_classes=mysqli_fetch_array(mysqli_query($conn,"SELECT COUNT(*) FROM `class`"));
    $no_of_students=mysqli_fetch_array(mysqli_query($conn,"SELECT COUNT(*) FROM `students`"));
    $no_of_result=mysqli_fetch_array(mysqli_query($conn,"SELECT COUNT(*) FROM `result`"));
?>
        
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
   
    <link rel="stylesheet" href="normalize.css">
    <title>Dashboard</title>
    <style>
        .main{
            border-radius: 10px;
            border-width: 5px;
            border-style: solid;
            border:5px solid red;
            padding: 20px;
            margin: 7% 20% 0 20%;
           
        }
        @keyframes mymove {
    from {
        background-color: black;
    }
    to {
        background-color: rgb(43, 37, 37);
    }
}
body {
 
  background: red;
  animation: mymove 5s infinite;
}
.heading {
    font-size: 40px;
    font-family: cursive;
    color:yellow;
}

    </style>
</head>
<body  >
        
    <div class="title">
       <a href="dashboard.php"> <img style="border-radius:34px;height:70px" src="college1.jpg" alt=""></a>
        <span class="heading">Dashboard</span>
        <a href="logout.php" style="color: white; font-family:cursive;font-size:23px;"><span class="fa fa-sign-out fa-3x">Logout</span></a>
    </div>
<hr>
    <div class="nav">
        <ul>
        <li><a href="homepage.html">HOME</a></a>
            </li>
            <li class="dropdown" onclick="toggleDisplay('1')">
                <a href="" class="dropbtn">Classes &nbsp
                    <span class="fa fa-angle-down"></span>
                </a>
                <div class="dropdown-content" id="1">
                    <a href="addclasses.php">Add Class</a>
                    <a href="manageclass.php">Manage Class</a>
                </div>
            </li>
            <li class="dropdown" onclick="toggleDisplay('2')">
                <a href="#" class="dropbtn">Students &nbsp
                    <span class="fa fa-angle-down"></span>
                </a>
                <div class="dropdown-content" id="2">
                    <a href="addstudent.php">Add Students</a>
                    <a href="managestudent.php">Manage Students</a>
                </div>
            </li>
            <li class="dropdown" onclick="toggleDisplay('3')">
                <a href="#" class="dropbtn">Results &nbsp
                    <span class="fa fa-angle-down"></span>
                </a>
                <div class="dropdown-content" id="3">
                    <a href="addresult.php">Add Results</a>
                    <a href="manageresult.php">Manage Results</a>
                </div>
            </li>
        </ul>
    </div>
    <hr>

    <div class="main">
        <?php
            echo '<p>Number of classes:'.$no_of_classes[0].'</p>';
            echo '<p>Number of students:'.$no_of_students[0].'</p>';
            echo '<p>Number of results:'.$no_of_result[0].'</p>';
        ?>
    </div>
<footer style="background-color:gray;color:white;margin:100px 0px 0px 0px;text-align:center;height:36px;padding:30px">


   <div>
       <p>Designed By - VIPUL KUMAR <br>LetsGrowMore</p>
   </div> 
  
</footer>
   
</body>
</html>

<?php
   include('session.php');
?>