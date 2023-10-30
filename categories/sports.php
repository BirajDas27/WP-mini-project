<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
            
        <div class="container">

        
        <form id="Form1">
            <h3><u>Sports Survey</u></h3>
            <li>Name : <br><input type="text" name="" id="" placeholder="Name" required></li>
            <li>School/College : <br><input type="text" name="" id="" placeholder="School/College" required></li>
            <li>Email : <br><input type="text" name="" id="" placeholder="Email" required></li>
            <li>Phone no. : <br><input type="text" name="" id="" placeholder="00000 00000" required></li>
            <li>Address : <br><input type="text" name="" id="" placeholder="Address, Address, ...." required></li><br>
            <div class="btn-box">
                <button type="button" id="Next1">Next</button>
            </div>
        </form>

        <form id="Form2">
            <li>1. What is your favorite sport to watch or play?<br>
                <input type="text" name="" id="" placeholder="Answer">
            </li>
            <li>2. How often do you engage in physical activities or sports (e.g., daily, weekly, monthly, rarely, never)?<br>
                <input type="text" name="" id="" placeholder="Answer">
            </li>
            <li>3. Do you prefer team sports or individual sports?<br>
                <input type="text" name="" id="" placeholder="Answer">
            </li>
            <li>4. Which sports events or tournaments do you follow regularly (e.g., the Olympics, Super Bowl, World Cup)?<br><br>
                <input type="text" name="" id="" placeholder="Answer">
            </li><br>
            <div class="btn-box">
                <button type="button" id="Back1">Back</button>
                <button type="button" id="Next2">Next</button>
            </div>
        </form>


        <form id="Form3">
            <li>5. What motivates you to participate in sports or physical activities (e.g., health, competition)? <br>
                <input type="text" name="" id="" placeholder="Answer">
            </li>
            <li>6. Have you ever attended a live sporting event? <br>
                <input type="text" name="" id="" placeholder="Answer">
            </li>
            <li>7. Do you think sports play a significant role in promoting physical fitness and well-being? <br><br>
                <input type="radio" name="Live" id="">Yes
                <input type="radio" name="Live" id="">No
            </li>
            <li>8. How important is sportsmanship in sports, in your opinion?<br>
                <input type="text" name="" id="" placeholder="Answer">
            </li><br>
            <div class="btn-box">
                <button type="button" id="Back2">Back</button>
                <button type="button" id="Next3">Next</button>
            </div>
        </form>

        <form id="Form4">
            <li>9. What is your preferred method of staying updated on sports news and scores ? <br>
                <input type="text" name="" id="" placeholder="Answer">
            </li>
            <li>10. Have you ever played organized sports or been part of a sports team? <br><br>
                <input type="radio" name="Live" id="">Yes
                <input type="radio" name="Live" id="">No
            </li>
            <li>11. Do you think sports have a positive impact on society and culture?<br>
                <input type="text" name="" id="" placeholder="Answer">
            </li>
            <li>12. Are there any rule changes or innovations in sports that you would like to see or that you believe would improve the game? <br>
                <input type="text" name="" id="" placeholder="Answer">
            </li><br>
            <div class="btn-box">
                <button type="button" id="Back3">Back</button>
                <button type="button" onClick="parent.location='thankyou.php'" value="Submit">Submit</button>
            </div>
        </form>

        <div class="step-row">
            <div id="progress"></div>
            <div class="step_col"><small></small></div>
            <div class="step_col"><small></small></div>
            <div class="step_col"><small></small></div>
        </div>

        <script src="index.js"></script>

        </div>
        <nav id="lapNav">
                <img class="lapLogo" src="/miniProject/assets/triangles.png" alt="logo" width="45px" eight="45px">
                
                <label class="lapCom">surveyJunkie</label>
                
                <input type="button" align="center" class="lapHome" onClick="parent.location='/miniProject/homepage.php'" value="Home"></input>
                <input type="button" align="center" class="lapAbout" onClick="parent.location='/miniProject/about.php'" value="About"></input>
                <a class="out" href="/miniProject/logout.php">LogOut</a>
                <div class="lapIcons">
                    <div class="icon"><img src="/miniProject/assets/icons/instagram.png" onClick='window.open("https://www.instagram.com/p/BgSlRglAKBn/?hl=en")' width="35px"></div>
                    <div class="icon"><img src="/miniProject/assets/icons/facebook.png" onClick='window.open("https://shorturl.at/rsCHO")' width="35px" target="_blank"></div>
                    <div class="icon"><img src="/miniProject/assets/icons/youtube.png" onClick='window.open("https://www.youtube.com/watch?v=iik25wqIuFo")' width="35px"></div>
                    <div class="icon"><img src="/miniProject/assets/icons/twitter.png" onClick='window.open("https://twitter.com/?lang=en")' width="35px"></div>
                </div>
        </nav>
</body>

</html>