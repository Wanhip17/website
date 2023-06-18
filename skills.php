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
            <a href="activities.php">Activities</a>
            <a href="skills.php">Skills</a>
            <a href="contact.php">Contact</a>
            <button class="btnLogin-popup">Login</button>
        </div>
        </div>
        </div>
    </header>
   
    <section class="skills">
        <div class="cer active">
        <img src="cer1.png" height="100%" width="100%">
        </div>
        <div class="cer">
        <img src="cer2.jpg" height="100%" width="100%">
        </div>
        <div class="cer">
        <img src="cer3.jpg" height="100%" width="100%">
        </div>
        <div class="cer">
        <img src="cer4.jpg" height="100%" width="100%">
        </div>
        <div class="slider-navigation">
            <div class="nav-btn"></div>
            <div class="nav-btn"></div>
            <div class="nav-btn"></div>
            <div class="nav-btn"></div>
        </div>

    <div class="Previous">
        <a href="experiance.php" style color="#ff6347;">Previous Page</a>
        </div>
        <div class="Next">
        <a href="contact.php" style color="#ff6347;">Next Page</a>
        </div>
        <div class="scer">
            <h3>CERTIFICATIONS<br></h3>
            <h6>-------------------------------------</h6>
            <h5><span class="icon">
            <ion-icon name="logo-html5"></ion-icon>
            </span> Fundamental Web Dev with HTML5 & CSS3, borntoDev School</h5> 
            <h5><span class="icon">
            <ion-icon name="podium-outline"></ion-icon>
            </span> Excel for Everyone, borntoDev School</h5>
            <h5><span class="icon">
            <ion-icon name="analytics-outline"></ion-icon>
            </span> Notion Database for Everyone, borntoDev School</h5>
            <h5><span class="icon">
            <ion-icon name="albums-outline"></ion-icon>
            </span> Essential SQL for Everyone, borntoDev School</h5>    
        </div>
        <div class="gather">
            <h3>MISCELLANEOUS</h3>
            <h6>---------------------------------------</h6>
          <ul><h4>Computer skills</h4>
        <h5><li>Programming Languages : Python, C/C++, JavaScript</li>
        <li>Web Development           : HTML, CSS, PHP</li>
        <li>Database Management       : SQL, Notion</li>
        <li>Data Analysis             : Excel, DB Browser</li>
        <li>Engineering Software      : Proteus, Arduino IDE, Emulation software, SDRSharp, MATLAB, Simulink</li>
        <li>Networking                : Putty, WinSCP, Wireshark, Azerqos, Cellular-Z, G-Net Track Lite, nPerf</li>
        <li>Engineering Design        : GstarCAD, SolidWorks, Altium Designer, 3D Builder, AutoCAD</li></h5>
        <h6><br></h6>
        <h5>Languages  : Thai(Native), English(Intermediate)</h5>
    </ul>
        </div>
        <div class="gathers">
       <ul> <h4>Personal skills</h4>
        <h5><li>Teamwork and collaboration, Learning and adaptability, Problem-solving, Responsibility, Effective communication,
             ability to work under pressure, Critical thinking, Attention to detail, Negotiation skills</li>
        <li>Interest : Marketing, Finance, Investments, Technology, Fashion, IT and IoT</li></h5>
    </ul>
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
    const slides =document.querySelectorAll(".cer");

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