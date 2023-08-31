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
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="facts.css">
    <link rel="shortcut icon" href="img/fact.png" type="image/x-icon">
    <title>Intriguing Facts</title>
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
    <section>

    
    <table class="facts-table">
        <thead>
            <tr>
                <th>Fact</th>
                <th>Type</th>
            </tr>
        </thead>
         <tbody>
            <tr>
                <td>The Earth is approximately 4.5 billion years old.</td>
                <td>Science</td>
            </tr>
            <tr>
                <td>In a group of 23 people, there's a 50% chance that two people share the same birthday.</td>
                <td>Math</td>
            </tr>
            <tr>
                <td>The honeybee is the only insect that produces food eaten by humans.</td>
                <td>Food</td>
            </tr>
            <tr>
                <td>Octopuses have three hearts.</td>
                <td>Science</td>
            </tr>
            <tr>
                <td>Bananas are berries, but strawberries are not.</td>
                <td>Food</td>
            </tr>
            <tr>
                <td>The average person will spend six months of their life waiting for red lights to turn green.</td>
                <td>Fun</td>
            </tr>
            <tr>
                <td>Cows have best friends and can become stressed when separated from them.</td>
                <td>Science</td>
            </tr>
            <tr>
                <td>A group of flamingos is called a 'flamboyance'.</td>
                <td>Animal</td>
            </tr>
            <tr>
                <td>Honey never spoils. Archaeologists have found pots of honey in ancient Egyptian tombs that are over
                    3,000 years old.</td>
                <td>Food</td>
            </tr>
            <tr>
                <td>There are more possible iterations of a game of chess than there are atoms in the known universe.
                </td>
                <td>Education</td>
            </tr>
            <!-- Add more facts here... -->
        </tbody>
        </table>
        
    
    <div class="majorbtns">
        <a href="Healthfacts.php"><div class = "factsbtns">More Health Facts</div></a>
        <a href="Animalfacts.php"><div class = "factsbtns">More Animal Facts</div></a>
        <a href="Historyfacts.php"><div class = "factsbtns">More History Facts</div></a>
        <a href="Generalfacts.php"><div class = "factsbtns">More General Facts</div></a>

    </div>

    </section>

</body>

</html>