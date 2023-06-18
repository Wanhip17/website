<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name=" viewport" content="width=device-width,
initial-scale=1.0">
    <title>Transcript | Jutamanee C. </title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">
    <link rel ="stylesheet" href="style.css">
    
</head>
<body>
    <header>
        <h2 class="logo">Transcript</h2>
        <div class="menu-btn"></div>
        <div class="navigation">
        <div class="navigation-items">
            <a href="home.php">Home</a>
            <a href="profile.php">Profile</a>
            <a href="experiance.php">Experiance</a>
            <a href="skills.php">Skills</a>
            <a href="contact.php">Contact</a>
            <button class="btnLogin-popup">Login</button>
        </div>
        </div>
        </div>
    </header>
   
    <section class="free">
        <div class="bclicktrans">
        <h4><a href="profile.php" style color="#ff6347;">Back to Profile Page</a></h4>
        </div>
        <div class="tran1">
        <img src="T/T1.jpg" height="100%" width="100%">
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
    
</script>
</body>
</html>