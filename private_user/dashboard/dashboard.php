
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..\layout\components.css">
    <link rel="stylesheet" href="dashComponents.css">
    <link rel="icon" href="private_user\dashboard\dash_Images\bgm_county_logo.jpg">
    <link rel="stylesheet" href="..\layout\Layout.css">
    <link rel="stylesheet" href="components.css">
    
    <!-- <link rel="stylesheet" href="Layout.css"> -->
    
    <!-- <link rel="stylesheet" href="components.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<script src="/includes/node_modules/chart.js/dist/chart.umd.js"></script>
<title>Dashboard</title>

</head>
<body>
    <div class="skeleton">
        <div class="upper">
            <div class="back"><i class="material-icons">chevron_left</i></div>
            <div class="title"> <h1>Manage Your Files</h1></div>
            <div class="greetings">
                <h2>Good morning User</h2> 
                <a href="user_login.html" style="margin-left: 120px;
                text-decoration: none; color: white; font-size: 18px; font-weight: 700;">Logout</a>
            </div>
            <div class="iconElements">
                <div class="upper_notification ">
                    <i class="material-icons" style="font-size: 30px;">notifications</i>
                </div>
                <div class="upper_profile">
                    <i class="material-icons" style="font-size: 30px;">person</i> 
                </div>
                
            </div>
        </div>
        <div class="lower">
            <div class="left">
                <div class="logo_left"><img src="..\layout\img\layout_img\bgm_county_logo-r.png" alt="logo_left" srcset="" style="height: 2cm; width: 2cm;"></div>
                <section class="options"><div class="icon"><i class="material-icons">bar_chart</i></div><div class="optName"><a href="dashboard.php" style="text-decoration: none; color:white;">Dashboard</a></div></section>
                <section class="options"><div class="icon"><i class="material-icons">folder_open</i></div><div class="optName"><a href="viewfiles.php" style="text-decoration: none; color:white;"> Vew Files</a></div></section>
                <section class="options"><div class="icon"><i class="material-icons">person</i></div><div class="optName"><a href="settings.html" style="text-decoration: none; color:white;">My Account</div></a></section>
                <section class="options"><div class="icon"><i class="material-icons">cloud_upload</i></div><div class="optName"><a href="upload.html" style="text-decoration: none; color:white;">Upload</a></div></section>
                <!-- <section class="options"><div class="icon"><i class="material-icons">settings</i></div><div class="optName">settings</div></section> -->
                <div class="userProfile">
                    <div class="account">
                        <div class="profilepic"><img src="..\layout\img\layout_img\blankfaceblue.jpeg" alt="profile pic"></div>
                        <div class="profilename"><p>UserName</p></div>
                        <div class="profiledescription"><p>I am a senior accountant</p></div>
                    </div>
                </div>
                <div class="copy">&copy; @2024 ICT Attachees</div>
            </div>
            <div class="right">
                <div class="r_left">
                    <div class="headings" style="font-size: 17px; font-weight: 600;"><p>Check on your options</p></div>
                    <div class="userOptions">
                        <section class="menuOptions" id="view">
                            <div class="menuOptionIcon">
                                <div class="contents" id="c2">
                                    <p><section> View<p>Get to view all of Your files here</p>
                                    <button><a href="viewfile.php">check it out</a></button></section></p>
                                </div>
                            </div>
                            <!-- <div class="menuOptionName"><p>view</p></div> -->
                        </section>
                        <section class="menuOptions" id="upload">
                            <div class="menuOptionIcon">
                                <div class="contents" id="c2">
                                    <p><section> Account<p>Modify your account details to suit you😊</p>
                                    <button><a href="../settings/settings.html">check it out</a></button></section></p>
                                </div>
                            </div>
                            
                        </section>
                        <section class="menuOptions" id="account">
                            <div class="menuOptionIcon">
                                <div class="contents" id="c2">
                                    <p><section>Upload<p>You can also upload your files from here</p>
                                    <button><a href="upload.html">check it out</a></button></section></p>
                                </div>
                            </div>
                            
                        </section>
                        <section class="menuOptions" id="notification">
                            <div class="menuOptionIcon">
                                <div class="contents" id="c2">
                                    <p><section>Statistics<p>Want to view Your Statistics? </p>
                                    <button><a href="#">check it out</a></button></section></p>
                                </div>
                            </div>
                           
                        </section>
                    </div>
                    <div class="message">
                        <p>
                        Hello User <br>
                        Welcome To Bungoma File Management System. 
                        Explore  the Options on the left  to get started. <br>
                        Want to Chat with other users on the system.
                        <div class="chatApp">
                        <button><a href="http://localhost/ChatApp/index.php">Click here to open ChatApp</a></button>
                        </div>
                        
                        </p>
                        
                    </div>
                </div>
                <div class="r_mid">
                    <div class="headings" style="font-size: 17px; font-weight: 600;"><p>Be updated all the time</p></div>
                    <div class="r_mid_components">
                        <div class="calender">
                            
                                You have 
                                <section style="font-size: 40px; font-weight: 600; "> 
                                    122
                                </section>
                                Files
                            
                        </div>
                        <div class="graph">
                            
                            <!-- <div class="chart" style="width: 900px; height: 400px; background-color: antiquewhite;"> -->
        
                                <canvas class="myChart">
                        
                                </canvas>
                        
                    </div>
                    </div>
                    <div class="table">
                        <div class="files_tbl">
                            <h3>Your Files Appear Here </h3>
                            <br>
                            <table class="styled-table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>fileName</th>
                                        <th>date Received</th>
                                        <th>File Type</th>
                                        <th>Category</th>
                                        <th>Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>example1.txt</td>
                                        <td>john@example.com</td>
                                        <td>2024-05-23</td>
                                        <td>10:00 AM</td>
                                        <td>Sent</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>example1.txt</td>
                                        <td>john@example.com</td>
                                        <td>2024-05-23</td>
                                        <td>10:00 AM</td>
                                        <td>Pending</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>example1.txt</td>
                                        <td>john@example.com</td>
                                        <td>2024-05-23</td>
                                        <td>10:00 AM</td>
                                        <td>Canceled</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>example1.txt</td>
                                        <td>john@example.com</td>
                                        <td>2024-05-23</td>
                                        <td>10:00 AM</td>
                                        <td>Sent</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>example1.txt</td>
                                        <td>john@example.com</td>
                                        <td>2024-05-23</td>
                                        <td>10:00 AM</td>
                                        <td>Sent</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="r_right">
                    <div class="headings" style="font-size: 17px; font-weight: 600; color:rgb(136, 136, 136);"><p>Notifications</p></div>
                    <div class="msgstats">
                        <div class="msg">
                            <p style="font-size: 12px;">Total</p>
                            <p style="font-size: 17px; font-weight:600;">10</p>
                        </div>
                        <div class="msg">
                            <p style="font-size: 12px;">Read</p>
                            <p style="font-size: 17px; font-weight:600;">8</p>
                        </div>
                        <div class="msg">
                            <p style="font-size: 12px;">Unread</p>
                            <p style="font-size: 17px; font-weight:600;">2</p>
                        </div>
                    </div>
                    <div class="notifications">
                        <div class="messageContainer" >
                            <div class="from">From: <p>System</p></div>
                            <div class="messageBody" ><p>Hello User This message shows that you've successfully registered with the system . feel free to explore your options</p></div>
                            <div class="messageTime">yesterday 12:00pm</div>
                        </div>
                        <div class="messageContainer" >
                            <div class="from">From: <p>Admin</p></div>
                            <div class="messageBody" ><p>Hello User Please Update your profile . </p></div>
                            <div class="messageTime">wednesday 12th 2024</div>
                        </div>
                        <div class="messageContainer" >
                            <div class="from">From: <p>Admin</p></div>
                            <div class="messageBody" ><p>Hello welcome to the system . </p></div>
                            <div class="messageTime">12/2/2024</div>
                        </div>
                        <div class="messageContainer" >
                            <div class="from">From: <p>Supervisor</p></div>
                            <div class="messageBody" ><p>I expect you to upload all files each week and also 
                                                        ensure that the files uploaded have been verified before uploading and sending them forward to the department </p></div>
                            <div class="messageTime">wednesday 12th 2024</div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <script src="/includes/charts/charts.js"></script>
    <script src="/private_user/dashboard/viewfiles.js"></script>
</body>
</html>