<?php 
session_start();
include ("db.php");

date_default_timezone_set("Africa/Nairobi");
    $date = date("M-d-Y h:i A", strtotime("+0 HOURS"));

if($_SERVER['REQUEST_METHOD' == "POST"])
    {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $username = $_POST['username'];
        $id_number = $_POST['id_number'];
        $employee_number = $_POST['employee_number'];
        $email = $_POST['email'];
        $hash_password = $_POST['passwordd'];
        
        if(!empty($email) && !empty($passwordd) && !is_numeric($email)){
            $query = "insert into register(firstname, lastname, username, id_number, employee_number, email, passwordd) 
            values('$firstname', '$lastname', '$'username', '$id_number', '$employee_number', '$email', '$passwordd')";

            mysqli_query($conn, $query);

            echo "<script type='text/javascript'> alert('Succefully Register')</script>";

        }
        else
        {
            echo "<script type='text/javascript'> alert('Please enter valid details')</script>";
        }

    }

// // Enable error reporting
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="user_login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="components.css">
<style>
    body{
        background-color: rgb(119, 7, 73);
        
    }
.container{
    text-align: center;
    background-color: white;
    width: 80%;
    height: 90vh;
    margin-top: 20px;
    border-radius: 8px;
    margin-left: 90px;
}
#content {
            margin-top: 20px;
            
        }
        .button {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
            color: #fff;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
        }
      
        .header {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            /* background-color: red; */
        }
        .headerA {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            background-color: white;
            margin-top: 10px;
            border: 8px solid white;
            
        }
        .register-form {
            /* background-color: red; */
            display: flex;
            flex-direction: column;
            max-width: 800px;         
            flex: 1 0 140px;
            max-height: auto;
            margin: 0 auto;
            padding: 1em;
            font-family: Geist Mono;
            border: 2px solid #ccc;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .register-form label {
            margin-top: 1em; 
            font-family: geist mono;
            margin-left: -190px;
            margin-right: 400px;
            color: white;
            align-items: center;
            justify-content: center;
        }
        .register-form input
        {
            width: 50%;
            padding: 0.5em;
            font-size: 1em;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-family: geist mono;
        }
        .register-form button {
            margin-top: 1em;
            padding: 0.7em;
            font-size: 1em;
            color: #fff;
            background-color: #007BFF;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .register-form button:hover {
            background-color: #0056b3;
        }
        .register-anchor {
            margin-top: 250px;
            text-align: center;
        }
        .register-anchor a {
            text-decoration: none;
            color: #007BFF;
        }
        .register-anchor a:hover {
            text-decoration: none;
        }
    </style>

   
</head>
<body>
    <div class="header">
            <div class="headerA"> <img src="..\layout\img\layout_img\bgm_county_logo-r.png" alt="logo_left" srcset="" style="height: 3cm; width: 3cm;"></div>

            <div class="headerB"><h1>Bungoma County Filling System</h1></div>
       
        
        </div>
   
        <form action="" class="register-form" method="POST" >
            <div class="register-anchor">
                <a href="#">Register Now</a>
            </div>
    
            <label for="firstname">Firstname</label>
            <input type="text" id="firstname" name="firstname" required>
    
            <label for="lastname">Lastname</label>
            <input type="text" id="lastname" name="lastname" required>
            
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>
    
            <label for="id_number">ID Number</label>
            <input type="text" id="id_number" name="id_number" required>
    
            <label for="employee_number">Employee Number</label>
            <input type="text" id="employee_number" name="employee_number" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
    
            <label for="password">Password</label>
            <input type="password" id="password" name="passwordd" required>
    
            <button type="submit" name="register">
                <!-- <a href="user_login.php">Register</a> -->
            </button>
        </form>
                    <div id="content"></div>
       
    <div class="copy">&copy; @2024 ICT Attachees</div>
</body>
</html>

