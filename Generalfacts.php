<?php

// Check if the user is authenticated
session_start();
if (!isset($_SESSION['username'])) {
   header("Location: login.php");
   exit();
}
?>

<!DOCTYPE html>
<html>
    <title>More general facts</title>
    <head>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="facts.css">
    <style>
        body{
            background-color: #0a5ee04c;
            animation: none;  
            text-align: justify;

        }
        h1{
            margin-top: 85px;
            text-align: center;

        }
    #typing{
            display:none;
        }
        #list{
            line-height: 22px;
            font-size: 18px;
            list-style-type: disc;
        }
        li{
            line-height: 22px;
            font-size: 18px;
            margin-bottom: 7px;
            margin-left: 24px;
        }
        marquee{
            padding: 20px;
            background-color: #2696E9;
        }
    </style>
</head>

<body>
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
<div class="typing-container">
<h1 id= "typing">General facts!</h1>
<h1 id= "typing-text"></h1>
                </div>
        <ul id= "list">
        <li>There are more possible iterations of a game of chess than there are atoms in the known universe.</li>
        <li>The shortest war in history was between Britain and Zanzibar on August 27, 1896; it lasted 38 minutes.</li>
        <li>Bananas are berries, while strawberries are not.</li>
        <li>The world's oldest known recipe is for beer, dating back to ancient Sumeria.</li>
        <li>Wombat poop is cube-shaped, which helps prevent it from rolling away and marking its territory.</li>
        <li>The longest time between two twins being born is 87 days.</li>
        <li>The average person will spend about six months of their life waiting for red lights to turn green.</li>
        <li>The unicorn is the national animal of Scotland.</li>
        <li>The human brain is more active at night than during the day.</li>
        <li>A single strand of spaghetti is called a "spaghetto."</li>
        <li>The Eiffel Tower can grow up to 6 inches taller during the summer due to the expansion of iron in the heat.</li>
        <li>The blue whale's heart is so large that a human could swim through its arteries.</li>
        <li>There are more possible iterations of a shuffled deck of cards than there are atoms on Earth.</li>
        <li>The world's oldest known living tree is a 5,000-year-old Bristlecone pine in California.</li>
        <li>Honeybees can recognize human faces.</li>
        <li>A group of flamingos is called a "flamboyance."</li>
        <li>A day on Venus (its rotation) is longer than a year on Venus (its orbit around the sun).</li>
        <li>The word "nerd" was first coined by Dr. Seuss in his book "If I Ran the Zoo."</li>
        <li>The total weight of all the ants on Earth is roughly equal to the weight of all the humans.</li>
        <li>The electric chair was invented by a dentist.</li>
        <li>The dot over the letter "i" is called a "tittle."</li>
        <li>A "jiffy" is an actual unit of time; it's 1/100th of a second.</li>
        <li>The first recorded game of baseball was played in 1846 in Hoboken, New Jersey.</li>
        <li>There are more possible iterations of a Go game (a complex board game) than there are atoms in the observable universe.</li>
        <li>The longest time between two twins being born is 87 days.</li>
        <li>A day on Pluto is longer than a year on Pluto.</li>
        <li>The longest word in the English language without a vowel is "rhythms."</li>
        <li>The sun is about 93 million miles away from Earth.</li>
        <li>Honey never spoils; archaeologists have found edible honey in ancient Egyptian tombs.</li>
        <li>The longest recorded flight of a chicken is 13 seconds.</li>
        <li>The "sixth sick sheik's sixth sheep's sick" is a famously difficult tongue twister.</li>
        <li>Some cats are allergic to humans.</li>
        <li>The smallest bone in the human body is the stapes bone in the ear.</li>
        <li>The word "alphabet" comes from the first two letters of the Greek alphabet: alpha and beta.</li>
        <li>Cows have best friends and can become stressed when separated from them.</li>
        <li>The world's largest desert is Antarctica, even though it's covered in ice.</li>
        <li>The number of possible iterations of a Rubik's Cube is over 43 quintillion.</li>
        <li>The longest recorded flight of a paper airplane is 27.6 seconds.</li>
        <li>The average person will spend about six months of their life waiting for red lights to turn green.</li>
        <li>Wombat poop is cube-shaped, which helps prevent it from rolling away and marking its territory.</li>
        <li>The Great Wall of China is not visible from space with the naked eye.</li>
        <li>The tongue is the strongest muscle in the human body relative to its size.</li>
        <li>Bananas are berries, while strawberries are not.</li>
        <li>The oldest known recipe in the world is for beer, found in ancient Sumeria.</li>
        <li>Some frogs can freeze during winter months and thaw out in the spring.</li>
        <li>The shortest war in history was between Britain and Zanzibar on August 27, 1896; it lasted 38 minutes.</li>
        <li>A group of crows is called a "murder."</li>
        <li>Honeybees can recognize human faces.</li>
        <li>The unicorn is the national animal of Scotland.</li>
        </ul>
        <marquee>Hope you enjoy!!!</marquee>

<script src="facts.js"></script>

</body>
</html>
