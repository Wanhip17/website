<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name=" viewport" content="width=device-width,
initial-scale=1.0">
    <title>Profile | Jutamanee C. </title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">
    <link rel ="stylesheet" href="style.css">
    
</head>
<body>
    <header>
        <h2 class="logo">JUTAMANEE CHALADTOI</h2>
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
   
    <section class="profile">
    <div class="Previous">
        <a href="home.php" style color="#ff6347;">Previous Page</a>
        </div>
        <div class="Next">
        <a href="experiance.php" style color="#ff6347;">Next Page</a>
        </div>
        <div class="clicktrans">
            <h4><a href="free.php" style color="#ff6347;">Click to view the transcript.
            </a></h4>
        </div>
        <div class="clickpro">
            <h4><a href="pro.php" style color="#ff6347;">Click to browse additional profile pictures for sales positions.
            </a></h4>
        </div>
        <div class="proo">
        <img src="profile.jpg" height="100%" width="100%">
        </div>
        <div class="back">
            <h3>PERSONAL BACKGROUND<br></h3>
            <h6>----------------------------------------------------------</h6>
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
        <div class="edu">
            <h3>EDUCATION<br></h3>
            <h6>----------------------------</h6>
            <h4>King Mongkut's Institute of Technology Ladkrabang(KMITL)</h4> 
            <h4><span class="icon">
            <ion-icon name="stop-circle-outline"></ion-icon>
            </span>Bachelor of Engineering in Telecommunication Engineering <p>   (2018-2021)</h4> 
        </div>
        <div class="career">
            <h3>CAREER OBJECTIVE<br></h3>
            <h6>----------------------------------------------</h6>
            <h4>I am actively pursuing a stimulating role within a renowned organization, aiming to utilize 
                my knowledge, managerial acumen, and technical skills to propel the growth and performance of 
                the organization. I am committed to consistently adapting to emerging technologies to ensure 
                continuous improvement.</h4> 
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