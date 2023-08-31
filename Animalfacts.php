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
    <title>More animal facts</title>
    <head>
       
    <link rel="stylesheet" href="dashboard.css">

    <style>
        body{
            background-color: #0a5dd04c;
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
<div>
<div class="typing-container">
<h1 id= "typing">Animal facts!</h1>
<h1 id= "typing-text"></h1>
                </div>

        <ul id= "list">
        <li>Elephants can recognize themselves in a mirror, showing self-awareness.</li>
        <li>Cows have best friends and can become stressed when separated from them.</li>
        <li>Octopuses have three hearts: two pump blood to the gills, and one pumps it to the rest of the body.</li>
        <li>Cheetahs can accelerate from 0 to 60 mph (97 km/h) in just a few seconds.</li>
        <li>Some birds, like pigeons, can recognize themselves in reflective surfaces.</li>
        <li>Dolphins use complex vocalizations to communicate with each other and even have signature whistles.</li>
        <li>The mimic octopus can imitate the appearance and behavior of various marine animals.</li>
        <li>Honeybees perform a "waggle dance" to communicate the direction and distance of food sources.</li>
        <li>The tongue of a blue whale can weigh as much as an elephant.</li>
        <li>A group of flamingos is called a "flamboyance."</li>
        <li>Humpback whales sing complex songs that can last for hours and are unique to each population.</li>
        <li>The archerfish can shoot jets of water to knock insects off branches and into the water.</li>
        <li>A kangaroo's tail acts as a fifth limb, aiding in balance and movement.</li>
        <li>The quokka, a marsupial from Australia, is known as the "world's happiest animal" due to its cheerful appearance.</li>
        <li>Polar bears have black skin to absorb and retain heat from the sun.</li>
        <li>Sloths can rotate their heads almost 270 degrees.</li>
        <li>A newborn kangaroo is about the size of a lima bean.</li>
        <li>The tongue of a chameleon can be longer than its body.</li>
        <li>Orcas, or killer whales, are actually the largest species of dolphin.</li>
        <li>Crows are known for their intelligence and problem-solving abilities.</li>
        <li>Female hyenas have pseudo-penises that are larger than male hyenas' actual penises.</li>
        <li>The male seahorse carries and gives birth to the babies.</li>
        <li>A group of owls is called a "parliament."</li>
        <li>The lyrebird is a master of mimicry, imitating various sounds including chainsaws and camera shutters.</li>
        <li>Giraffes have the same number of neck vertebrae as humans (7), just much larger.</li>
        <li>Axolotls are salamanders that retain their aquatic juvenile features throughout their entire lives.</li>
        <li>Some frogs can freeze during winter months and thaw out in the spring.</li>
        <li>The bumblebee bat is one of the world's smallest mammals, weighing about as much as a penny.</li>
        <li>Seahorses form monogamous pairs and "dance" together during courtship.</li>
        <li>Male Emperor penguins keep eggs warm on their feet for two months without eating.</li>
        <li>The hissing cockroach produces a hissing sound by expelling air through tiny openings in its abdomen.</li>
        <li>The blue-footed booby's name comes from the Spanish word "bobo," meaning foolish or clownish.</li>
        <li>The pistol shrimp's claw snaps shut so fast that it creates a cavitation bubble, producing a loud "pop."</li>
        <li>A platypus lays eggs and produces milk, making it one of the few mammals to do both.</li>
        <li>Camels have three eyelids and can close their nostrils to protect against sandstorms.</li>
        <li>The axolotl can regenerate entire limbs, including the spinal cord and brain.</li>
        <li>The eyes of a chameleon can move independently of each other, allowing it to look in two directions at once.</li>
        <li>The pangolin is the only mammal with protective keratin scales covering its body.</li>
        <li>Raccoons can remember solutions to tasks for up to three years.</li>
        <li>African elephants can distinguish between different human languages and react differently based on the threat level.</li>
        <li>The male seahorse's brood pouch acts like a womb, providing nutrients and protection to the developing embryos.</li>
        <li>Some ants "farm" aphids for their sweet secretions, protecting and "milking" them for food.</li>
        <li>The fennec fox has large ears that help dissipate heat in the desert.</li>
        <li>The tapetum lucidum, a layer in some animals' eyes, enhances night vision by reflecting light back through the retina.</li>
        <li>Archerfish have been observed using jets of water to "shoot down" insects above the water's surface.</li>
        <li>Bats are the only mammals capable of sustained flight.</li>
        <li>The tongue of a blue whale can weigh as much as an elephant.</li>
        <li>Male seahorses give birth after carrying their young in a special pouch.</li>
        <li>The yeti crab is a deep-sea crab that grows bacteria on its hairy claws to feed on.</li>
        <li>Some species of frogs can "freeze" during cold weather and thaw out when it gets warmer.</li>
        </ul>
</div>
<marquee>Hope you enjoy!!!</marquee>
<script src="facts.js"></script>
</body>
</html>
