<?php
if(isset($_POST['SignUp'])){
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
   $MatNO = $_REQUEST['MatricNo'];
   $Fname = $_REQUEST['First'];
   $Lname = $_REQUEST['Last'];
   $Department = $_REQUEST['department'];
   $level = $_REQUEST['level'];
   $dob = $_REQUEST['dob'];
   $residence = $_REQUEST['residence'];
   $password = $_REQUEST['password'];
   $gender = $_REQUEST['gender'];
   $app_id = $_REQUEST['app_id'];

   $sql = "INSERT INTO student VALUES ('','$MatNO','$Fname','$Lname',' $level','$dob','$residence','$password','$gender','$Department','$app_id')";

   if (mysqli_query($conn, $sql)) {
     echo '<script>alert("Successfully signed up");
     window.location.replace("login.html");
     </script>';
     } else {
       echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     }
   }
?>



<?php
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

          $sql = "SELECT department_name FROM department";

          $result = $conn->query($sql);
          if($result->num_rows> 0){
            $options= mysqli_fetch_all($result, MYSQLI_ASSOC);
          }

         
  ?>