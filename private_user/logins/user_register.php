<?php 
session_start();
include ('../../connection.php');
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
        .register-form {
            display: flex;
            flex-direction: column;
            max-width: 400px;
            max-height: auto;
            margin: 0 auto;
            padding: 1em;
            border: 2px solid #ccc;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .register-form label {
            margin-top: 1em;
            margin-left: -190px;
            color: white;
            align-items: center;
            justify-content: center;
        }
        .register-form input
        {
            margin-top: 0.5em;
            width: 60%;
            padding: 0.5em;
            font-size: 1em;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
         
        .register-form textarea {
            margin-top: 0.5em;        
            padding: 0.5em;
            font-size: 1em;
            border: 1px solid #ccc;
            border-radius: 4px;
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
    
       
        
        <form class="register-form" method="post" action="registration_handler.php">
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
    
            <button type="submit">Register</button>
        </form>
                    <div id="content"></div>
       
    <div class="copy">&copy; @2024 ICT Attachees</div>
</body>
</html>

<?php 
// Enable error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


//take form data and use prepared statements
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if(isset($_POST['register'])){
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $username = $_POST['username'];
        $id_number = $_POST['id_number'];
        $employ_number = $_POST['employ_number'];
        $email = $_POST['email'];
        $passwordd = $_POST['passwordd'];
       

           //check if user is allready registered
    $get_data = "SELECT * FROM user WHERE email='$email' OR id_number='$id_number' OR passwordd='$passwordd';";
    $result = mysqli_query($conn,$get_data);
    if($result->num_rows>0){
        echo "<p class='error'>You are already registered! please contact the admin</p>";
    }else{

    //prepared_statements
    $sql = "INSERT INTO user(firstname,lastname,username,id_number,employ_number,email,passwordd) VALUES(?,?,?,?,?,?,?);";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "sssssss", $firstname,$lastname,$username,$id_number,$employ_number,$email,$passwordd);

    //execute prepared stements
    if(mysqli_stmt_execute($stmt)){
        echo 'User registered successfully';
    }else{
        echo "failed to upload data";
    }

    //close prepared statements and database connection
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
}
}
?>