<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="home.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
     <link rel="stylesheet" type='text/css' href="manage.css">
    <title>Dashboard</title>
    <style>
    .heading {
    font-size: 40px;
    font-family: cursive;
    color:yellow;
}
</style>
</head>
<body>
        
    <div class="title">
    <a href="dashboard.php"> <img style="border-radius:34px;height:70px" src="college1.jpg" alt="logo"></a>
        <span class="heading">Dashboard</span>
        <a href="logout.php" style="color: white"><span class="fa fa-sign-out fa-2x">Logout</span></a>
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
                    <a href="manageclasse.php">Manage Class</a>
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
            include('init.php');
            include('session.php');

            $sql = "SELECT `name`, `rno`, `class_name` FROM `students`";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
               echo "<table>
                <caption>Manage Students</caption>
                <tr>
                <th>NAME</th>
                <th>ROLL NO</th>
                <th>CLASS</th>
                </tr>";

                while($row = mysqli_fetch_array($result))
                  {
                    echo "<tr>";
                    echo "<td>" . $row['name'] . "</td>";
                    echo "<td>" . $row['rno'] . "</td>";
                    echo "<td>" . $row['class_name'] . "</td>";
                    echo "</tr>";
                  }

                echo "</table>";
            } else {
                echo "0 Students";
            }
        ?>

  


      
    </div>

    <footer style="background-color:gray;color:white;margin:100px 0px 0px 0px;text-align:center;height:36px;padding:30px">


<div>
    <p>Designed By - VIPUL KUMAR <br>LetsGrowMore</p>
</div> 

</footer>
</body>
</html>
