<?php
session_start();

include('db.php');

// Handle file uploads
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["files"])) {
    $category = $_POST['category'];
    $uploader_user_id = 1; // Replace with actual user ID

    // Loop through uploaded files
    foreach ($_FILES["files"]["error"] as $key => $error) {
        if ($error == UPLOAD_ERR_OK) {
            $tmp_name = $_FILES["files"]["tmp_name"][$key];
            $name = basename($_FILES["files"]["name"][$key]);
            $size = $_FILES["files"]["size"][$key];
            $type = mime_content_type($tmp_name); // Get MIME type

            // Insert into database
            $sql = "INSERT INTO files_upload (file_name, file_type, file_format, file_size, file_category_id, uploader_user_id, date_of_upload)
                    VALUES (?, ?, ?, ?, ?, ?, NOW())";
            $stmt = $conn->prepare($sql);
            $null = NULL;
            $stmt->bind_param("sssdii", $name, $type, pathinfo($name, PATHINFO_EXTENSION), $size, $category, $uploader_user_id);
            $stmt->send_long_data(0, file_get_contents($tmp_name));
            $stmt->execute();
            $stmt->close();
        }
    }

    // Send response
    echo json_encode(['status' => 'success']);
    exit;
}

// Handle other cases (e.g., invalid requests)
http_response_code(400);
echo json_encode(['status' => 'error', 'message' => 'Invalid request']);
exit;
?>
