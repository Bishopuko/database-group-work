<!DOCTYPE html>
<html lang="en">
<?php
include("signUp.php");
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=>, initial-scale=1.0">
    <title>Admin login</title>
    <link rel="stylesheet" href="style.css">
</head>

<style>
    .main{
        display: inline-block;
    }
</style>

<body>
    <div class="login-box" style="margin-top: 200px;">
        <h2>SIGN UP</h2>
        <form action="signUp.php" method="post">
            
            <div class="main">
               
                    <div class="user-box">
                        <input type="text" name="MatricNo" required>
                        <label>Matric Number</label>
                    </div>
                    <div class="user-box">
                        <input type="text" name="First" required>
                        <label>First name</label>
                    </div>
                    <div class="user-box">
                        <input type="text" name="Last" required>
                        <label>Last name</label>
                    </div>
                    
                    <div class="user-box">
                        <input type="number" name="level" required>
                        <label>Phone NO.</label>
                    </div>
                    <div class="user-box">
                        <input type="text" name="level" required>
                        <label>Level</label>
                    </div>
            
                    <select id="name" name="department">
                        <option>Select Department</option>
                        <?php 
                        foreach ($options as $option) {
                        ?>
                            <option><?php echo $option['department_name']; ?> </option>
                            <?php 
                            }
                        ?>
                </select>
                <div class="user-box">
                    <p>D.O.B</p>
                    <input type="date" name="dob" required>
                </div>
                <div class="user-box">
                    <input type="text" name="residence" required>
                    <label>Residence</label>
                </div>
                <div class="user-box">
                    <input type="Password" name="password" required>
                    <label>Password</label>
                </div>


                <div>
                <select id="gender" name="gender">
                    <option>Male</option>
                    <option>Female</option>
                </select>
                </div><br><br>

                <div class="user-box">
                    <input type="text" name="app_id" id="app_id" disables>
                    <label>Application ID</label>
                </div>
                <p style="color: red;">Take note of your generated ID!!</p>
                <input type="submit" class="submit" value="Sign Up" name="SignUp">
            </div>
        </form>
        <p>Already Registered? Click <a href="login.html">here</a> to Login</p>
    </div>

</body>
<script>
     var code = Math.random().toString().substring(2,8);
    document.getElementById('app_id').value = code;
</script>
</html>