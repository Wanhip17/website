<?php 
 session_start();

 if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: register.php');
 }

 if (isset($_GET['logout'])) {
  session_destroy();
    unset($_SESSION['username']);
    header('location: register.php');
 }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name=" viewport" content="width=device-width,
initial-scale=1.0">
    <title>Welcome | Jutamanee C. </title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">
    <link rel ="stylesheet" href="style.css">
    
</head>
<body>
    <header>
        <h2 class="logo">Jutamanee Chaladtoi</h2>
        <div class="menu-btn"></div>
        <div class="navigation">
        <div class="navigation-items">
            <a href="home.php">Home</a>
            <a href="profile.php">Profile</a>
            <a href="experiance.php">Experiance</a>
            <a href="activities.php">Activities</a>
            <a href="skills.php">Skills</a>
            <a href="contact.php">Contact</a>
            <button class="btnLogin-popup">Login</button>
        </div>
        </div>
        </div>
    </header>
  
    <section class="ind">
    <div class="firstheader">
       <h1><a href="home.php">RESUME</a></h1>
    
    <div class="firstcontent">
        <!-- notification message -->
        <?php if (isset($_SESSION['success'])) : ?>
            <div class="success">
                <h3>
                    <?php
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                    ?>
                </h3>    
            </div>
        <?php endif ?>

        <!-- logged in user information -->
        <?php if (isset($_SESSION['username'])) :?>
        <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
        <p><a href="index.php?logout='1'" style = "color: red;">Logout</a></p>
        <?php endif ?> 
            </div>
    </div>
        </section>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
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