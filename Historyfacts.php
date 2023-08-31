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
    <title>More history facts</title>
    <head>
        
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="facts.css">
    <style>
        body{
            background-color: #0a7dd04c;
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
<h1 id= "typing">History Facts!</h1>
<h1 id= "typing-text"></h1>
                </div>
<ul id= "list">
        <li>Cleopatra lived closer in time to the invention of the iPhone than to the construction of the Great Pyramid of Giza.</li>
        <li>The Great Wall of China was built over several centuries and is not visible from space with the naked eye.</li>
        <li>The Greek philosopher Socrates never wrote anything down; his teachings were recorded by his student Plato.</li>
        <li>The Aztecs founded their capital, Tenochtitlan (modern-day Mexico City), on a lake and created artificial islands called chinampas for agriculture.</li>
        <li>The Library of Alexandria in ancient Egypt was one of the most famous libraries in history, but it was destroyed over time and its exact location remains a mystery.</li>
        <li>The ancient city of Rome was founded in 753 BC.</li>
        <li>Leonardo da Vinci's notebook sketches included designs for helicopters and parachutes, centuries before their actual invention.</li>
        <li>The Black Death (Bubonic Plague) in the 14th century killed an estimated 75–200 million people, significantly impacting Europe's population.</li>
        <li>The Magna Carta, signed in 1215, laid the groundwork for modern concepts of democracy and individual rights.</li>
        <li>The Taj Mahal in India was built as a mausoleum by Emperor Shah Jahan in memory of his wife Mumtaz Mahal.</li>
        <li>The eruption of Mount Vesuvius in 79 AD buried the Roman cities of Pompeii and Herculaneum under ash and debris, preserving them for centuries.</li>
        <li>The Silk Road was a network of trade routes that connected the East and West, facilitating the exchange of goods, cultures, and ideas.</li>
        <li>The Industrial Revolution brought about significant technological and economic changes, leading to urbanization and shifts in labor patterns.</li>
        <li>The Wright brothers achieved the first powered flight in 1903, flying their aircraft for about 12 seconds.</li>
        <li>The Statue of Liberty was a gift from France to the United States and was dedicated in 1886.</li>
        <li>The Apollo 11 mission, in 1969, successfully landed humans on the moon for the first time.</li>
        <li>The ancient Egyptian pyramids were built as tombs for pharaohs and were constructed over a span of centuries.</li>
        <li>Joan of Arc, a young French peasant girl, played a crucial role in the Hundred Years' War by inspiring French forces against the English.</li>
        <li>The French Revolution (1789-1799) resulted in the overthrow of the monarchy and significant political and social change in France.</li>
        <li>The Battle of Gettysburg (1863) was a turning point in the American Civil War and marked the largest battle ever fought in North America.</li>
        <li>The Berlin Wall, which divided East and West Berlin, fell in 1989, leading to the reunification of Germany.</li>
        <li>The Declaration of Independence was adopted by the Continental Congress on July 4, 1776, marking the birth of the United States.</li>
        <li>The Spanish Inquisition, established in 1478, aimed to maintain Catholic orthodoxy and suppress heresy.</li>
        <li>The Renaissance period (14th to 17th century) marked a cultural revival in Europe, with advancements in art, science, and philosophy.</li>
        <li>The RMS Titanic, a luxury passenger liner, famously sank on its maiden voyage in 1912 after hitting an iceberg.</li>
        <li>The Enlightenment era emphasized reason, science, and individual rights, influencing the development of modern political thought.</li>
        <li>The ancient Greeks introduced the concept of democracy in the city-state of Athens.</li>
        <li>The Opium Wars (1839-1842, 1856-1860) involved conflicts between China and foreign powers over trade and territorial control.</li>
        <li>The Rosetta Stone, discovered in 1799, contained inscriptions in three scripts and played a crucial role in deciphering Egyptian hieroglyphs.</li>
        <li>The American Revolution (1775-1783) led to the Thirteen Colonies gaining independence from British rule.</li>
        <li>The Cold War (1947-1991) was a geopolitical tension between the United States and the Soviet Union and their respective allies.</li>
        <li>The Renaissance artist Michelangelo sculpted the famous statue David and painted the ceiling of the Sistine Chapel.</li>
        <li>The Battle of Stalingrad (1942-1943) was a major turning point in World War II and marked a significant defeat for Nazi Germany.</li>
        <li>The Gutenberg Bible, printed by Johannes Gutenberg in the mid-15th century, was one of the first major books printed using movable type.</li>
        <li>The Salem witch trials in colonial Massachusetts (1692-1693) resulted in the execution of 20 people accused of witchcraft.</li>
        <li>The Vietnam War (1955-1975) was a conflict between communist North Vietnam and anti-communist South Vietnam, with involvement from the United States.</li>
        <li>The Renaissance scientist Galileo Galilei made significant contributions to astronomy and challenged prevailing views about the cosmos.</li>
        <li>The Treaty of Versailles, signed in 1919, ended World War I and imposed reparations and territorial changes on Germany.</li>
        <li>The Code of Hammurabi, one of the earliest known legal codes, was established in ancient Mesopotamia around 1754 BC.</li>
        <li>The Great Fire of London in 1666 destroyed much of the city, leading to urban planning reforms and the introduction of brick buildings.</li>
        <li>The Inca civilization, centered in the Andes of South America, built an extensive network of roads and impressive stone structures like Machu Picchu.</li>
        <li>The Panama Canal, completed in 1914, connects the Atlantic and Pacific Oceans and facilitates global maritime trade.</li>
        <li>The French military leader Napoleon Bonaparte rose to power in the late 18th century, becoming Emperor and leading military campaigns across Europe.</li>
        <li>The Mayan civilization, known for its advanced mathematics, astronomy, and architecture, thrived in Mesoamerica from about 2000 BC to the 16th century AD.</li>
        <li>The Transatlantic Slave Trade forcibly transported millions of African people to the Americas between the 16th and 19th centuries.</li>
        <li>The assassination of Archduke Franz Ferdinand of Austria in 1914 triggered World War I.</li>
        <li>The Roman Colosseum, completed in 80 AD, could hold up to 80,000 spectators and was used for gladiator contests and other public spectacles.</li>
        <li>The Age of Exploration (15th to 17th century) saw European explorers travel to previously unknown lands, leading to global trade and colonization.</li>
        <li>The ancient Mesopotamians developed the world's first known system of writing using cuneiform script.</li>
        <li>The Declaration of the Rights of Man and of the Citizen, adopted during the French Revolution, emphasized individual rights and influenced subsequent declarations of human rights.</li>
        </ul>
        <marquee>Hope you enjoy!!!</marquee>
<script src="facts.js"></script>

</body>
</html>
