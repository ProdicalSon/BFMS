<?php
    session_start();

    include("db.php");

    date_default_timezone_set("Africa/Nairobi");
    $date = date("M-d-Y h:i A", strtotime("+0 HOURS"));

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $username = $_POST['username'];
        $id_number = $_POST['id_number'];
        $hash_password = $_POST['passwordd'];

        if(!empty($email) && !empty($passwordd) && !is_numeric($email)){
            $query = "select * from register where username = '$username' limit 1"; 
             $result = mysqli_query($conn, $query);

             if($result)
             {
                if($result && mysqli_num_rows($result) >0)
                {
                    $user_data = mysqli_fetch_assoc($result);

                    if($user_data['passwordd'] == $passwordd)
                    {
                        header("location: dashboard.html");
                        die;
                    }
                }
             }
             echo "<script type'text/javascript'> alert('Wrong Username or Password')";
        }
        else
        {
            echo "<script type'text/javascript'> alert('Wrong Username or Password')";
        }
    }

        
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>User Login</title>
    <link rel="stylesheet" href="user_login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="components.css">

   
</head>
<body>
    <div class="container">
       <div class="header">
        <!-- <div class="headerA"> <i class="material-icons">chevron_left</i></div> -->

        <div class="headerB"><h1>Bungoma County Filling System</h1></div>
       
        
       </div>
        

            <form class="login-form" method="POST">
                <img src="..\layout\img\layout_img\bgm_county_logo-r.png" alt="logo_left" srcset="" style="height: 3cm; width: 3cm;">

                <div class="login-anchor"><a href="">Log In</a></div>
                
                <label for="username">username</label>
                <input type="text" id="username" name="username" required>
                
                <label for="id_number">id_number</label>
                <input type="text" id="id_number" name="id_number" required>
                
                <label for="password">Password</label>
                <input type="password" id="password" name="passwordd" required>
                
                <button type="submit">Login</button>
                
                <div class="forgot-password">
                    <a href="">Forgot Password</a>
                    
                </div>
                    <br>
                    <div class="register-here">
                        <a href="user_register.php">Don't have account? Register Here!!</a>
                    </div>
                    
              
               
        
        


                  
    </div>
    <div class="copy">&copy; @2024 ICT Attachees</div>
</body>
</html>