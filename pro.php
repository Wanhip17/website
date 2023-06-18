<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name=" viewport" content="width=device-width,
initial-scale=1.0">
    <title>Skills | Jutamanee C. </title>
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
            <a href="skills.php">Skills</a>
            <a href="contact.php">Contact</a>
            <button class="btnLogin-popup">Login</button>
        </div>
        </div>
        </div>
    </header>
   
    <section class="pro">
        <div class="pic active">
        <img src="p/pic1.jpg" height="100%" width="100%">
        </div>
        <div class="pic">
        <img src="p/pic2.jpg" height="100%" width="100%">
        </div>
        <div class="pic">
        <img src="p/pic3.jpg" height="100%" width="100%">
        </div>
        <div class="pic">
        <img src="p/pic4.jpg" height="100%" width="100%">
        </div>
        <div class="sliders-navigation">
            <div class="nav-btn"></div>
            <div class="nav-btn"></div>
            <div class="nav-btn"></div>
            <div class="nav-btn"></div>
        </div>
        <div class="bbclicktrans">
        <h4><a href="profile.php" style color="#ff6347;">Back to Profile Page</a></h4>
        </div>
        
        <div class="imfo">
            <h6>This page is dedicated to sale positions<br></h6>
            <h6><br></h6>
            <h6>Weight: 46kg</h6>
            <h6>Height: 158cm</h6>
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

    //slider navigation
    const btns =document.querySelectorAll(".nav-btn");
    const slides =document.querySelectorAll(".pic");

    var sliderNav =function(manual){
        btns.forEach((btn) => {
            btn.classList.remove("active");
        });

        slides.forEach((slide) => {
            slide.classList.remove("active");
        });

        btns[manual].classList.add("active");
        slides[manual].classList.add("active");
    }

    btns.forEach((btn, i) => {
        btn.addEventListener("click", () => {
            sliderNav(i);
        });
    });
    </script>

</body>
</html>