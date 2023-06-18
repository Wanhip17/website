<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name=" viewport" content="width=device-width,
initial-scale=1.0">
    <title>Activities | Jutamanee C. </title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">
    <link rel ="stylesheet" href="style.css">
    
</head>
<body>
    <header>
        <h2 class="logo">ACTIVITIES</h2>
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
   
    <section class="ac">
    <div class="Previous">
        <a href="experiance.php" style color="#ff6347;">Previous Page</a>
        </div>
        <div class="Next">
        <a href="skills.php" style color="#ff6347;">Next Page</a>
        </div>
        <div class="acti">
            <h3>ACTIVITIES AND WORK EXPERIENCE</h3>
            <h6>---------------------------------------------------------------------------------</h6>
            <ul>
        <h6><li>In 2023, Participated in the Youth Volunteer Camp organized of Telecommunications and 
            Networks at Ban Klong Klon Resort, Samut Songkhram</li>
        <li>In 2022, Joined the Pre-Telecom Camp held at the Faculty of Engineering KMITL.</li>
        <li>In 2020, Participated in a balloon launch activity with LoRa IoT devices utilizing the LEO frequency 
            band at the Radar Center, Takhli District, Nakhon Sawan.</li>
        <li>In 2020, Assumed the role of the heroine and wrote the script for the short film "Change You to Love".</li>
        <li>In 2020, Attended a private meeting with the Thaicom star control station to discuss the topic of Satellite Tracker.</li>
        <li>In 2020, Participated in the Mentoring Camp for Junior Students in the Department of Telecommunications 
            at Khlong Khlon Resort, Samut Songkhram.</li>
        <li>In 2019, Constructed an almshouse and donated items to the Baan Dek Chaiyaphruek Foundation in Nakhon Nayok.</li>
        <li>In 2019, Served as a reception staff member for the Faculty of Engineering at Chuen Warin Resort, Rayong.</li>
        <li>In 2019, Worked as an activity staff member at the Pre-Telecom camp 5 held at the Faculty of Engineering, KMITL.</li>
        <li>In 2019, Served as a camp staff member for the Pre-Engineering camp at the Faculty of Engineering, KMITL.</li>
        <li>In 2018, Participated in the welcome camp for students from the Faculty of Engineering at Chuen Warin Resort, Rayong.</li>
        <li>In 2018, Participated in the Pre-Telecom Camp 4 organized by the Faculty of Engineering, KMITL.</li>
        <li>In 2018, Participated in the Pre-Engineering program at the Faculty of Engineering, KMITL.</li>
        <li>In 2018, Organized the Good Bye senior Party, hosted by Telecommunications, KMITL. </li>
    </ul></h6>
        </div>
        <div class="git active">
        <img src="jec/6.jpg" height="100%" width="100%">
        </div>
        <div class="git">
        <img src="jec/8.jpg" height="100%" width="100%">
        </div>
        <div class="git">
        <img src="jec/12.jpg" height="100%" width="100%">
        </div>
        <div class="git">
        <img src="jec/9.jpg" height="100%" width="100%">
        </div>
        <div class="slider1-navigation">
            <div class="nav-btn"></div>
            <div class="nav-btn"></div>
            <div class="nav-btn"></div>
            <div class="nav-btn"></div>
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
    const slides =document.querySelectorAll(".git");

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