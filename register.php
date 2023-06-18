<?php 
    session_start();
    include('sever.php'); 
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name=" viewport" content="width=device-width,
initial-scale=1.0">
    <title>Register Page| Jutamanee C. </title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">
    <link rel ="stylesheet" href="style.css">
    
</head>

    <header>
        <h2 class="logo">Jutamanee C.</h2>
        <div class="menu-btn"></div>
        <div class="navigation">
        <div class="navigation-items">
            <a href="#">Home</a>
            <a href="#">Personal Profile</a>
            <a href="#">Experiance</a>
            <a href="#">Activities</a>
            <a href="#">Skills</a>
            <a href="#">Contact</a>
            <button class="btnLogin-popup">Login</button>
        </div>
        </div>
</div>
    </header>

    <body>
    <div class="firstpage">
       <h3><br><a style="color :#211c25 ;">Please login to see my Resume.</a> </h3>

    <div class="wrapper">
        <span class="icon-close">
            <ion-icon name="close"></ion-icon>
        </span>
        <div class="form-box login">
            <h2>Login</h2>
            <form action ="login_db.php" method="post"> 
                <?php if (isset($_SESSION['error'])) : ?>
                    <div class="error">
                        <h3>
                            <?php
                              echo $_SESSION['error'];
                              unset($_SESSION['error']);
                            ?>
                        </h3>    
                    </div>
                <?php endif ?>
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="mail"></ion-icon>
                    </span>
                    <input type="text" name="username" required>
                     <label for="username">Username</label>
                </div>
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="lock-closed"></ion-icon>
                    </span>
                     <input type="password" name="password" required>
                     <label for="password">Password</label>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox">
                        Remember me</label>
                    <a href="#">Forgot Password?</a>
                </div>
                <button type="submit" name="login_user" class="btn">Login</button>
                <div class="login-register">
                    <p>Don't have an account? <a href="#" class="register-link">Register</a>
                    </p>
                </div>
            </form>
        </div>

        <div class="form-box register">
            <h2>Registration</h2>
            <form action ="register_db.php" method="post"> 
            <?php if (isset($_SESSION['error'])) : ?>
                    <div class="error">
                        <h3>
                            <?php
                              echo $_SESSION['error'];
                              unset($_SESSION['error']);
                            ?>
                        </h3>    
                    </div>
                <?php endif ?>
            <div class="input-box">
                    <span class="icon">
                        <ion-icon name="person"></ion-icon>
                    </span>
                    <input type="text" name="username" required>
                    <label for="username">Username</label>
                </div>
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="mail"></ion-icon>
                    </span>
                    <input type="email" name="email" required>
                    <label for="email">Email</label>
                </div>
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="lock-closed"></ion-icon>
                    </span>
                     <input type="password" name="password" required>
                     <label for="password">Password</label>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox">
                        I agree to the terms & conditions</label>
                </div>
                <button type="submit" name="reg_user" class="btn">Register</button>
                <div class="login-register">
                    <p>Already have an account? <a href="#" class="login-link">Login</a>
                    </p>
                </div>
            </form>
        </div>
</div>
    </form>

        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script>
        const wrapper = document.querySelector('.wrapper');
        const loginLink = document.querySelector('.login-link');
        const registerLink = document.querySelector('.register-link');
        const btnPopup = document.querySelector('.btnLogin-popup');
        const iconClose = document.querySelector('.icon-close');

        registerLink.addEventListener('click', () => {
            wrapper.classList.add('active');
        });

        loginLink.addEventListener('click', () => {
            wrapper.classList.remove('active');
        });

        btnPopup.addEventListener('click', () => {
            wrapper.classList.add('active-popup');
        });

        iconClose.addEventListener('click', () => {
            wrapper.classList.remove('active-popup');
        });
    </script>

    <script>
         const menuBtn = document.querySelector('.menu-btn');
  const navigation = document.querySelector('.navigation');
  menuBtn.addEventListener('click', () => {
    menuBtn.classList.toggle('active');
    navigation.classList.toggle('active');
  });
        </script>
    </body>
</html>