<?php
    session_start();

    include("regConnection.php");
    include("functions.php");
    
    $user_data = check_login($con);
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="homeStyle.css">
    <title>Homepage</title>
</head>
<body>
    <div class="lapMain">
        <div class="blur">
            <nav id="lapNav">
                <img class="lapLogo" src="assets/triangles.png" alt="logo" width="45px" eight="45px">
                
                <label class="lapCom">surveyJunkie</label>
                
                <input type="button" align="center" class="lapHome" onClick="parent.location='homepage.php'" value="Home"></input>
                <input type="button" align="center" class="lapAbout" onClick="parent.location='about.html'" value="About"></input>
                <a class="out" href="logout.php">LogOut</a>
                <div class="lapIcons">
                    <div class="icon"><img src="assets/icons/instagram.png" onClick='window.open("https://www.instagram.com/p/BgSlRglAKBn/?hl=en")' width="35px"></div>
                    <div class="icon"><img src="assets/icons/facebook.png" onClick='window.open("https://shorturl.at/rsCHO")' width="35px" target="_blank"></div>
                    <div class="icon"><img src="assets/icons/youtube.png" onClick='window.open("https://www.youtube.com/watch?v=iik25wqIuFo")' width="35px"></div>
                    <div class="icon"><img src="assets/icons/twitter.png" onClick='window.open("https://twitter.com/?lang=en")' width="35px"></div>
                </div>
            </nav>
        
        
            <div id="lapCateMain" align="center">
                <div id="helloUser">Hello, <?php echo $user_data['username'];?></div>
                <input type="button" align="center" class="lapCate" onClick="parent.location='sports.html'" value="SPORTS"></input>
                <input type="button" align="center" class="lapCate" onClick="parent.location=''" value="HISTORY"></input>
                <input type="button" align="center" class="lapCate" onClick="parent.location=''" value="GEOGRAPHY"></input><br>
                <input type="button" align="center" class="lapCate" onClick="parent.location=''" value="CURRENT AFFAIRS"></input>
                <input type="button" align="center" class="lapCate" onClick="parent.location=''" value="HEALTH"></input>
                <input type="button" align="center" class="lapCate" onClick="parent.location=''" value="TRAVEL"></input>
            </div>
        </div>
    </div>
</body>
</html>