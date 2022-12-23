<!DOCTYPE html>
    <html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=>, initial-scale=1.0">
        <title>Validation</title>
        <!--<link rel="stylesheet" href="card.css">-->
        <style>
            *{
    margin: 0;
    padding: 0;
}
body{
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
    box-sizing: border-box;
    flex-direction: row;
}
.container{
    height: 500px;
    width: 350px;
    margin:65px auto;
   perspective: 800px;
}
.front, .back{
    color:black;
    text-transform:uppercase;
    height: 100%;
    width: 100%;
    border-radius: 2rem;
    background:url(image/id-card.png);
    box-shadow:0px 0px 5px 2px;
    position:absolute;
    backface-visibility: hidden;
}

.back {
  transform: rotateY(180deg);
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}
.back .back-name{
    font-size:30px;
}
.back .back-text{
    margin:0px 20px 0px 40px;
    text-align:center;
}
.card{
    height: 100%;
    width: 100%;
    position: relative;
    background-repeat: no-repeat;
    transition: transform 1500ms;
  transform-style: preserve-3d;
    
}
.container:hover > .card{
    cursor:pointer;
    transform:rotateY(180deg);
}
.firstName{
    margin-left:130px;
    font-size: 25px;
}
.top img{
    margin:10px 0px 15px 65px;
    border: 10px solid rgba(225,225,225,.4);
}
.ename{
    margin:2px 0px 0px 25px;
    font-size: 25px;
}
.details{
    margin:25px 0px 0px 20px;
    text-transform: capitalize;
    font-size: 20px;
}
.log-out{
    text-align:center;
    color:black;
    text-decoration:none;
    border:2px solid black;
    padding:10px;  
}
.log-out a{
    color:black;
    text-decoration:none;
    font-size:24px;
    
}
        </style>
    </head>
    
    <body>
<?php
if(isset($_POST['Validate'])){
   
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "sims";
    
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }
    $app_id = $_REQUEST['app_id'];
    
    
    $sql="SELECT * FROM student WHERE app_id = '".$app_id."'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);
    
    if (mysqli_num_rows($result) > 0) {
        echo"
            <div class='container'>
                <div class='card'>
                    <div class='front'>
                        <div class='firstName'><br>
                            <span class='tab'>HEXSIDE UNIVERSITY</span>
                        </div>
                        <div class='top'>
                            <img src='image/placeholder.jpg'>
                        </div>
                        <div>
                            <div class='ename'>
                                <p class='p1'><b>".$row['First_name']." ".$row['Last_name']."</b></p>
                            </div>
                            <div class='details'>
                                <p><b>Department: ".$row['department']."</b></p><br>
                                <p><b>Matric No: ".$row['Matric_no']."</b></p><br>
                                <p><b>Date of birth: ".$row['DOB']."</b></p><br>
                            </div>
                        </div>
                   </div>
                        <div class='back'>
                        <p>This card remains property of</p><br>
                        <center>
                        <h1 class='back-name'>Hexside University</h1>
                        </center>
                        <br>
                        <p class='back-text'>If found please return to the office of the registrar</p><br>
                        <p>Phone: 08163513389</p><br>
                        <p> Email: registrar@hexside.edu.ng</p><br>
                            <img src='image/qr1.jpg'>
                        </div>
                </div>
                <div class='log-out'><p><a href='login.html'>Log-out</a></p></div>
            </div>
            ";
    
    } else {
    echo "No such user found";
    }
    
    mysqli_close($conn);
}
        
        ?>
    </body>
    </html>
