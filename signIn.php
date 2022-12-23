<!DOCTYPE html>
    <html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=>, initial-scale=1.0">
        <title>student login</title>
        <link rel="stylesheet" href="card.css">
    </head>
    
    <body style = "background-color:grey;">
<?php
if(isset($_POST['SignIn'])){
   
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
    $Matric_no = $_REQUEST['MatricNo'];
    
    
    $sql="SELECT * FROM student WHERE Matric_no = '".$Matric_no."'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);
    
    if (mysqli_num_rows($result) > 0) {
       echo'<script> window.location.replace("validate.html"); </script>';
    } else {
    echo "No such user found";
    }
    
    mysqli_close($conn);
}
        
        ?>
    </body>
    </html>
    