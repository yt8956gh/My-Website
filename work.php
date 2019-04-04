<?php
/**
 * Created by PhpStorm.
 * User: 毛胤年
 * Date: 2019/4/3
 * Time: 下午 02:54
 */?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Nian's Website</title>
    <link rel="stylesheet" href="css/work.css"/>
    <link rel="stylesheet" href="css/general.css"/>
    <link href="https://fonts.googleapis.com/css?family=Croissant+One|Lora|Pacifico|Source+Sans+Pro:400" rel="stylesheet">
</head>
<body>
<?php include_once('./navbar.php');?>

<header class="header-container flex-container-row">
    <div class="header-text">My Works</div>
</header>
<div class="article flex-container-row" id="carbout-container">
    <div>
        <div class="heading">Carbout</div>
        <div class='sub-heading'><b>An APP calculating and recording users’ daily carbon footprint.</b></div>
        <div class="text ">
            <ul>
                <li>
                    <div class="highlight">
                        <a href="https://climatechange.tw/Climate/CreativityContest">&nbsp;Honorable Mention Award&nbsp;</a>
                    </div>
                    - Climate Change Creativity Contest
                </li>
                <li>Scan QR-code of invoice in Taiwan to get carbon footprint</li>
                <li>Analyze user's carbon footprint</li>
                <li>Calculate average carbon footprint with price when riding public transport</li>
            </ul>
        </div>
    </div>
    <div id = "APP-img"></div>
</div>

<div class="fixed-img" id="img-1"></div>

<div class="article flex-container-row" id="IFS-container">
    <div>
        <div class="heading">Intelligent Factory System (IFS)</div>
        <div class='sub-heading'>An IOT system collects and analyzes data from factory with <br>Raspberry Pi and ESP-8266.</div>
        <div class="text">
            <ul>
                <li>
                    <div class="highlight">
                        <a href="https://energy.nstm.gov.tw/energy_2018/cs_share_article_detail.php?aid=aqujhgomcmkg&cid=23&dtype=c&sub=L">&nbsp;Honorable Mention Award&nbsp;</a>
                    </div>
                    - Taiwan Clean Energy Creativity Contest
                </li>
                <li>Collect data with different sensors(e.g. electric current,temperature)</li>
                <li>3D Printed IFS-Box</li>
                <li>GUI with C++ Qt5</li>
                <li>Wireless communication with Wi-Fi</li>
                <li>Analyze data with Python</li>
            </ul>
        </div>
    </div>
    <div id = "IFS-img"></div>
</div>

<div class="fixed-img" id="img-2"></div>
<!--

<div class="article">
    <div class="heading">Personality</div>
    Pooh Bear resides in the Hundred Acre Wood, an imaginative world inhabited by anthropomorphic stuffed toys and
    animals that Christopher Robin frequents. Pooh is stuffed with fluff, and therefor impervious to pain. Due to his
    obesity, his seams burst open on occasion, but Pooh has become so accustomed to this that he can tie it back
    together in seconds. Pooh's tree house—which is under the name Sanders—is mostly filled with jars and jars of honey,
    which he harvests from bee hives throughout the day.

</div>

<div class="fixed-img" id="img-2"></div>


<div class="article">
    <div class="heading">Origin</div>
    "Winnie-the-Pooh," as he was originally called, first appeared in a story written by A.A. Milne, who based the
    characters off his young owner Christopher Robin Milne and the boy's stuffed animals. The original toy bear was
    named after Winnie (short for "Winnipeg"), a bear that had been adopted as a cub by a Canadian soldier during World
    War I, who was a popular attraction at the London Zoo. The stories were popular in the Disney household, motivating
    Walt to start production on a series of featurettes starring the honey-obsessed bear and his collection of friends.
</div>

<div class="fixed-img" id="img-3"></div>


<div class="article">
    <div class="heading">Legacy</div>
    <ul>
        <li>One of the best known characters in British children's literature, a 2011 poll saw Winnie the Pooh voted
            onto the list of icons of England.
        </li>
        <li>Forbes magazine ranked Pooh the most valuable fictional character in 2002, with merchandising products alone
            generating more than $5.9 billion that year.
        </li>
        <li>In 2005, Pooh generated $6 billion, a figure surpassed by only Mickey Mouse.</li>
        <li>In 2006, Pooh received a star on the Hollywood Walk of Fame, marking the 80th birthday of Milne's
            creation.
        </li>
        <li>The bear is such a popular character in Poland that a Warsaw street is named for him, Ulica Kubusia
            Puchatka. There is also a street named after him in Budapest (Micimackó utca).
        </li>
    </ul>
</div>



<div class="fixed-img" id="img-4"></div>

<div class="thanks-for-watching flex-container-column">
    <img class="profile-in-thanks" src="images/cute-profile.jpg" alt="cute-profile.jpg">
    <div>Thank you for watching</div>
</div>

<div class="fixed-img flex-container-row" id="img-5">
    The End
</div>-->

<footer>
    <div class="flex-container-column copyright">
        <div id="contact-background">
            <div id="contact-container">
                <span>©2019 designed by Mao,Yin-Nian CCU-CSIE 405410010. All rights reserved.</span>
                <span>Email: yt8956789@csie.io</span>
            </div>
        </div>
    </div>
</footer>

</body>
</html>


