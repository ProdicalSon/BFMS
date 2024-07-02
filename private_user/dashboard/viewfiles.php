
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
                <section class="options"><div class="icon"><i class="material-icons">folder_open</i></div><div class="optName"><a href="viewfile.php" style="text-decoration: none; color:white;"> Vew Files</a></div></section>
                <section class="options"><div class="icon"><i class="material-icons">person</i></div><div class="optName"><a href="../settings/settings.html" style="text-decoration: none; color:white;">My Account</div></a></section>
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
            <div class="container">
        <h3>View your Files</h3>
        <table class="styled-table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>File Name</th>
                    <th>Date Received</th>
                    <th>File Type</th>
                    <th>Category</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Database connection
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "bfms";

                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);

                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // Fetch files data
                $sql = "SELECT id, filename, uploaded_at, mimetype, category, description FROM files";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // Output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["id"] . "</td>";
                        echo "<td>" . $row["filename"] . "</td>";
                        echo "<td>" . $row["uploaded_at"] . "</td>";
                        echo "<td>" . $row["mimetype"] . "</td>";
                        echo "<td>" . $row["category"] . "</td>";
                        echo "<td>" . $row["description"] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='6'>No files found</td></tr>";
                }

                $conn->close();
                ?>
            </tbody>
        </table>
    </div>
            </div>
        </div>
    </div>
    <script src="/includes/charts/charts.js"></script>
    <script src="/private_user/dashboard/viewfiles.js"></script>
</body>
</html>