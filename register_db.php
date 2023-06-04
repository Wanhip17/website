<?php
    session_start();
    include('sever.php');

    $errors = array();

    if (isset($_POST['reg_user'])) {
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $email= mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
    
        $user_check_query = "SELECT * FROM user WHERE username = '$username' OR email ='$email'";
        $query = mysqli_query($conn, $user_check_query);
        $result = mysqli_fetch_assoc($query);

        if ($result) { //if user exists
            if ($result['username']=== $username) {
                array_push($errors, "Username already exists");
            }
            if ($result['email']=== $email) {
                array_push($errors, "Email already exists");
            }
        }
  
        if (count($errors) == 0) {
        $password = md5($password);

        $sql = "INSERT INTO user (username, email, password) VALUES ('$username', '$email', '$password')";
        mysqli_query($conn, $sql);

        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now logged in";
        header('location: index.php');
        } else {
            array_push($errors, "Username or Email already exists");
            $_SESSION['error']="Username or Email already exists";
            header("location: index.php");
        }
    }
?>