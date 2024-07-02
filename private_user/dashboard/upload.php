<?php
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

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $category = $_POST['category'];
    $targetDir = "uploads/";

    if (!file_exists($targetDir)) {
        mkdir($targetDir, 0777, true);
    }

    $fileData = [];

    foreach ($_FILES['files']['tmp_name'] as $key => $tmp_name) {
        $fileName = basename($_FILES['files']['name'][$key]);
        $targetFilePath = $targetDir . $fileName;
        $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
        $fileSize = $_FILES['files']['size'][$key];

        if (move_uploaded_file($tmp_name, $targetFilePath)) {
            $fileData[] = [
                'filename' => $fileName,
                'originalname' => $fileName,
                'category' => $category,
                'path' => $targetFilePath,
                'mimetype' => $fileType,
                'size' => $fileSize
            ];
        }
    }

    if (!empty($fileData)) {
        $stmt = $conn->prepare("INSERT INTO files (filename, originalname, category, path, mimetype, size) VALUES (?, ?, ?, ?, ?, ?)");

        foreach ($fileData as $file) {
            $stmt->bind_param("sssssi", $file['filename'], $file['originalname'], $file['category'], $file['path'], $file['mimetype'], $file['size']);
            $stmt->execute();
        }

        $stmt->close();
        echo json_encode(['message' => 'Files uploaded successfully.', 'data' => $fileData]);
    } else {
        echo json_encode(['message' => 'File upload failed, please try again.']);
    }
}

$conn->close();
?>
