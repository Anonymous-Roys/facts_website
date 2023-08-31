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
    <title>Contacts</title>
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="contact.css">
    <link rel="shortcut icon" href="img/fact.png" type="image/x-icon">
  
</head>
<body>
    <header>
        <div class="menu-btn"></div>
        <div class="profile">
            <img src="img/profile.png" alt="Profile Picture">Welcome,
            <?php echo $_SESSION['username']; ?>!
        </div>
        <div class="navigation">
            <div class="navigation-items">
                <a href="dashboard.php">Home</a>
                <a href="facts.php">Facts</a>
                <a href="contacts.php">Contacts</a>
                <a href="https://bestlifeonline.com/world-facts/">more</a>
            </div>
        </div>
    </header>
    <form action="contact_process.php" method="POST">

    
    <div id="content">
        <div class="container">
            <div class="row">
                <div class="contact-left">
                    <h1 class="subtitle">Contact Me</h1>
                    <p>
                        <img src="img/wifi.jpg" alt="wifi">
                        benedictcobbah@gmail.com
                    </p>
                    <p>
                        <img src="img/telephone.png" alt="telephone" style="background-color: aqua;">
                        0256798179  <!-- Add your number here-->
                    </p>
                    <div class="info">
                        <a><img src="img/insta.png" alt="instagram"></a>
                        <a><img src="img/facebook.png" alt="facebook"></a>
                        <a><img src="img/whatsapp.png" alt="whatsapp"></a>
                    </div>
                <div class="typing-container">
                    <p id="typing-text"></p>
                </div>
                </div>
                <div class="contact-right">
                    <form action="">
                        <input type="text" name="username" placeholder="Your Name" required>
                        <input type="email" name="email" placeholder="Your Email" required>
                        <textarea rows="6" name="message" placeholder="Your Message"></textarea>
                        <button type="submit" class="btn">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        </form>
        <div class="copy">
            <p>Copyright @ BENEDICT.</p>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>