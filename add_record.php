<?php
require('connection.php');

// Record insertion and verification
if(isset($_POST['submit'])){
    $name = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check if the email already exists
    $check_email = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $check_email);
    if(mysqli_num_rows($result) > 0){
        echo "Email already exists. Please use a different email.";
        exit;
    }

    // Hash the password before saving it
    $hashed_password = password_hash($password, PASSWORD_BCRYPT);

    // Insert the new user into the database
    $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$hashed_password')";
    if(mysqli_query($conn, $sql)){
        echo "<script>alert('New record created successfully');</script>";

        // Now verify login after registration
        $login_sql = "SELECT * FROM users WHERE email='$email'";
        $login_result = mysqli_query($conn, $login_sql);
        if(mysqli_num_rows($login_result) == 1){
            $user = mysqli_fetch_assoc($login_result);

            // Verify the password
            if(password_verify($password, $user['password'])){
                // Login success
                session_start();
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['name'];
                header("refresh:1; url=login.php"); // Redirect to index.php after successful login
                exit();
            } else {
                  echo "<script>alert('Invalid password');</script>";
            }
        } else {
              echo "<script>alert('User not found');</script>";
        }
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>