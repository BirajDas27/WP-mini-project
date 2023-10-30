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

        </form>
        <form id="Form1">
            <h3><u>Travel Survey</u></h3>
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
            <li>1. Where are you traveling to?<br>
                <input type="text" name="" id="" placeholder="Answer">
            </li>
            <li>2. What's your preferred method for managing your finances while traveling (e.g., cash, credit cards,
                travel money card)?<br>
                <input type="text" name="" id="" placeholder="Answer">
            </li>
            <li>3. How do you plan to document your trip (e.g., photography, journaling, vlogging)?<br>
                <input type="text" name="" id="" placeholder="Answer">
            </li>
            <li>4. What mode of transportation are you using to get there?<br>
                <input type="text" name="" id="" placeholder="Answer">
            </li><br><br><br>
            <div class="btn-box">
                <button type="button" id="Back1">Back</button>
                <button type="button" id="Next2">Next</button>
            </div>
        </form>


        <form id="Form3">
            <li>5. Are there any specific foods or local dishes you're eager to try? <br>
                <input type="text" name="" id="" placeholder="Answer">
            </li>
            <li>6. What is the most exciting activity or attraction you plan to experience during your trip? <br>
                <input type="text" name="" id="" placeholder="Answer">
            </li>
            <li>7. Have you made any special preparations, such as vaccinations or visa applications, for this trip?
                <br>
                <input type="text" name="" id="" placeholder="Answer">
            </li>
            <li>8. Have you visited this destination before? <br>
                <input type="text" name="" id="" placeholder="Answer">
            </li><br><br>
            <div class="btn-box">
                <button type="button" id="Back2">Back</button>
                <button type="button" id="Next3">Next</button>
            </div>
        </form>

        <form id="Form4">
            <li>9. What type of accommodations are you staying in? <br>
                <input type="text" name="" id="" placeholder="Answer">
            </li>
            <li>10. What's one thing you hope to bring back from your travels as a memory or souvenir? <br>
                <input type="text" name="" id="" placeholder="Answer">
            </li>
            <li>11. How do you plan to stay connected during your trip (e.g., mobile data, Wi-Fi)? <br>
                <input type="text" name="" id="" placeholder="Answer">
            </li>
            <li>12. What's your go-to method for getting local recommendations (e.g., asking locals, online
                reviews)?<br>
                <input type="text" name="" id="" placeholder="Answer">
            </li><br><br>
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