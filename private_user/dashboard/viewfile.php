<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Files</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="..\layout\components.css">
    <link rel="stylesheet" href="dashComponents.css">
    <link rel="icon" href="private_user\dashboard\dash_Images\bgm_county_logo.jpg">
    <link rel="stylesheet" href="..\layout\Layout.css">
    <link rel="stylesheet" href="components.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 1200px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h3 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        .styled-table {
            width: 100%;
            border-collapse: collapse;
        }

        .styled-table thead tr {
            background-color: #007bff;
            color: #ffffff;
            text-align: left;
        }

        .styled-table th, .styled-table td {
            padding: 12px 15px;
            border: 1px solid #ddd;
        }

        .styled-table tbody tr {
            border-bottom: 1px solid #dddddd;
        }

        .styled-table tbody tr:nth-of-type(even) {
            background-color: #f3f3f3;
        }

        .styled-table tbody tr:last-of-type {
            border-bottom: 2px solid #007bff;
        }

        .styled-table tbody tr.active-row {
            font-weight: bold;
            color: #007bff;
        }
    </style>
</head>
<body>
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
</body>
</html>
