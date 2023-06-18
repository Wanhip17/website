<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name=" viewport" content="width=device-width,
initial-scale=1.0">
    <title>Contact | Jutamanee C. </title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">
    <link rel ="stylesheet" href="style.css">
    
</head>
<body>
    <header>
        <h2 class="logo">Jutamanee C.</h2>
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
   
    <section class="contact">
        <div class="contentcon">
            <h1>CONTACT<br></h1>
            <h6><br></h6>
            <h4><span class="icon">
            <ion-icon name="call-outline"></ion-icon>
            </span>Mobile Phone: (+66)82-1505326</h4> 
            <h4><span class="icon">
            <ion-icon name="mail-outline"></ion-icon>
            </span>E-mail: Jutamaneewan9@gmail.com</h4>
            <h4><span class="icon">
            <ion-icon name="location-outline"></ion-icon>
            </span>74/9 Village No.10, Soi MorRuay, Bangphai Sub-district, 
            Muang District, Chachoengsao 24000</h4>  
        </div>
        <video autoplay loop muted>
    <source src="mm.mp4" type="video/mp4">
    Your browser does not support the video tag.
  </video>
        <div class="media-icon">
            <br><br><br><br><br><br><br><br><br>
            <a href="https://line.me/ti/p/n7NZGpHhum"target="_blank">
            <img src="line.png" alt="Line" width="40" height="40">
            </a>
            <a href="https://www.facebook.com/wan.jutamanee/" target="_blank">
            <img src="face.png" alt="Facebook" width="42" height="42">
            </a>
            <a href="https://instagram.com/wanhip17?igshid=MmIzYWVlNDQ5Yg==" target="_blank">
            <img src="ins.png" alt="Instagram" width="40" height="40">
            </a>
        </div>

        <div class="thank">
            <h6>I appreciate you taking the time and I look forward to hearing from you.</h6>
        </div>
        <div class="Previous">
        <a href="skills.php" style color="#ff6347;">Previous Page</a>
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

    window.addEventListener('DOMContentLoaded', function() {
  var video = document.querySelector('.home video');
  var video = document.getElementById('fullscreen-video');
  video.play();
});
    </script>
    
</script>
</body>
</html>