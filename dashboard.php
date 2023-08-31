<?php

// Check if the user is authenticated
session_start();
if (!isset($_SESSION['username'])) {
   header("Location: login.php");
   exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="dashboard.css">
    <link rel="shortcut icon" href="img/fact.png" type="image/x-icon">

</head>

<body>
    <!-- ------header------- -->
  
    <div class="container">
        <aside class="sidebar">
            <ul class="sidebar-menu">
                <li><a href="dashboard.php"><img src="img/home2.png" alt="Icon 1" title="Home"></a></li>
                <li><a href="facts.php"><img src="img/fact.png" alt="Icon 3" title="facts"></a></li>
                <li><a href="https://bestlifeonline.com/world-facts/"><img src="img/category.png" alt="Icon 4" title="Visit Bestlife Facts"></a></li> 
                <li><a href="contacts.php"><img src="img/telephone.png" alt="Icon 3" title="Contacts"></a></li>   
                <li><a href="mailto:benardcobbah@gmail.com"><img src="img/gmail.png" alt="mail" title="Send me a mail"></i></a></li>
                <li><a href="logout.php"><img src="img/signin.png" alt="Icon 4" title="Logout"></a></li>
            </ul>
        </aside>
<header>
    <div class="menu-btn"></div>
    <div class="profile">
        <img src="img/profile.png" alt="Profile Picture">Welcome,  <?php echo $_SESSION['username']; ?>! </div>
    <div class="navigation">
        <div class="navigation-items">
            <a href="dashboard.php">Home</a>
            <a href="facts.php">Facts</a>
            <a href="contacts.php">Contacts</a>
            <a href="https://bestlifeonline.com/world-facts/">more</a>
        </div>
    </div>
</header>
        
        <section class="home">
            <video class="video-slide active" src="img/food.mp4" autoplay muted loop></video>
            <video class="video-slide" src="img/seasand.mp4" autoplay muted loop></video>
            <video class="video-slide" src="img/science.mp4" autoplay muted loop></video>
            
            <div class="content active">
                <h1>Welcome to my website of amazing facts and trivia.<br>ENJOY!</h1>
                <p>Passionately having an intrest in jawbreaking facts and trivia, I tend to make fact lovers intriuged to
                    their peak about their intrest in facts and trivia too!.</p>
                <a href="https://bestlifeonline.com/world-facts/"> See more</a>

            </div>

            <div class="content">
                <h1>Did you know??..No you did'nt.<br>And that's why you're here!</h1>
                <p>Get ready to be surprised with various amazing amazing facts...
                    Did you know that the Earth is 4.5 billion years old? It's pretty amazing to think about it
                </p>
                <a href="https://bestlifeonline.com/world-facts/"> See more</a>

            </div>
            <div class="content">
                <h1>Mindblowing facts to keep you updated about many more intresting topics<br>and contents.</h1>
                <p>The truth will set you free...Stay curious and seek knowledge! knowledge is power. Through this website,
                    grab the chance to boost your brain power by learning new facts everyday
                </p>
                <a href="https://bestlifeonline.com/world-facts/"> See more</a>

            </div>



            <div class="media-icons">

                <a href=""><img src="img/facebook.png" alt=""></i></a> <!--Add your facebook link in the href="" -->
                <a href="mailto:benardcobbah@gmail.com"><img src="img/gmail.png" alt=""></i></a>
                <a href="logout.php"><img src="img/signin.png" alt=""></i></a>
            </div>
            <div class="slider-navigation">
                <div class="nav-btn active"></div>
                <div class="nav-btn"></div>
                <div class="nav-btn"></div>
            </div>
        </section>






        <script>

            const menuBtn = document.querySelector(".menu-btn");
            const navigation = document.querySelector(".navigation");

            menuBtn.addEventListener("click", () => {
                menuBtn.classList.toggle("active");
                navigation.classList.toggle("active");
            });



            //Script for video slider navigation
            const btns = document.querySelectorAll(".nav-btn");
            const slides = document.querySelectorAll(".video-slide");
            const contents = document.querySelectorAll(".content");

            var sliderNav = function (manual) {
                btns.forEach((btn) => {
                    btn.classList.remove("active");
                });


                slides.forEach((slide) => {
                    slide.classList.remove("active");
                });

                contents.forEach((content) => {
                    content.classList.remove("active");
                });

                btns[manual].classList.add("active");
                slides[manual].classList.add("active");
                contents[manual].classList.add("active");
            }

            btns.forEach((btn, i) => {
                btn.addEventListener("click", () => {
                    sliderNav(i);
                });
            })


            function nextSlide() {
                    const activeIndex = Array.from(slides).findIndex(slide => slide.classList.contains("active"));
                    let nextIndex = activeIndex + 1;

                    if (nextIndex >= slides.length) {
                        nextIndex = 0;
                    }

                    sliderNav(nextIndex);
                }

                // Set an interval to switch the slide every 5 seconds
                const slideInterval = setInterval(nextSlide, 5000);

                // Pause the interval when the user interacts with the navigation buttons
                btns.forEach(btn => {
                    btn.addEventListener("click", () => {
                        clearInterval(slideInterval);
                    });
                });
        </script>

</body>

</html>