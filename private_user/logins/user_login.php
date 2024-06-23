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
        <div class="headerA"> <i class="material-icons">chevron_left</i></div>

        <div class="headerB"><h1>Bungoma County Filling System</h1></div>
       
        
       </div>
        

            <form class="login-form" method="POST">
                <img src="..\layout\img\layout_img\bgm_county_logo-r.png" alt="logo_left" srcset="" style="height: 3cm; width: 3cm;">

                <div class="login-anchor"><a href="">Log In</a></div>
                
                <label for="id_number">ID_Number</label>
                <input type="text" id="id_number" name="id_number" required>
                
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
                
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
                
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