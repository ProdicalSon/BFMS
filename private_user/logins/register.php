<?php 



//take form data and use prepared statements
if($_SERVER['REQUEST_METHOD'] === 'POST'){

    date_default_timezone_set("Africa/Nairobi");
    $date = date("M-d-Y h:i A", strtotime("+0 HOURS"));

    if(isset($_POST['register'])){
        $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
        $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $id_number = filter_var($_POST['id_number'], FILTER_SANITIZE_NUMBER_INT);
        $employee_number = mysqli_real_escape_string($conn, $_POST['employee_number']);
        $email = mysqli_real_escape_string($conn, $_POST["email"]);
        $passwordd = mysqli_real_escape_string($conn, $_POST["passwordd"]);
        $hashed_passwordd = password_hash($passwordd, PASSWORD_DEFAULT);

   // Check if email already exists
   $query = mysqli_query($conn, "SELECT * FROM register WHERE email = '$email'") or die(mysqli_error($conn));
   $counter = mysqli_num_rows($query);


   if ($counter > 0) {
    echo "<script type='text/javascript'>alert('Email already exists. Please try again with a different email!');
    document.location='../user_register.html'</script>";
} else {
    // Insert new user data into the database
    $sql = "INSERT INTO register (firstname, lastname, username, id_number, employee_number, email, passwordd) VALUES ('$firstname', '$lastname', '$username', '$id_number', '$employee_number', '$email', '$passwordd')";

    if ($conn->query($sql) === TRUE) {
        echo "<script type='text/javascript'>alert('Registration successful!');
        document.location='../user_login.html'</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
}
}
?>