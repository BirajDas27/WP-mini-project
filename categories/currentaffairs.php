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
            <h3><u>Current Affairs Survey</u></h3>
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
            <li>1. What is the current global population as of 2023?<br>
                <input type="text" name="" id="" placeholder="Answer">
            </li>
            <li>2. What major international event took place recently that had significant global impact?<br>
                <input type="text" name="" id="" placeholder="Answer">
            </li>
            <li>3. What is the most pressing environmental issue facing the world today?<br>
                <input type="text" name="" id="" placeholder="Answer">
            </li>
            <li>4. Is your country currently experiencing an economic recession? <br><br>
                <input type="radio" name="Live" id="">Yes
                <input type="radio" name="Live" id="">No
            </li><br><br>
            <div class="btn-box">
                <button type="button" id="Back1">Back</button>
                <button type="button" id="Next2">Next</button>
            </div>
        </form>


        <form id="Form3">
            <li>5. What is the most recent major legislation or policy change in your country? <br>
                <input type="text" name="" id="" placeholder="Answer">
            </li>
            <li>6. Which international organization is currently working on peacekeeping efforts in a conflict zone? <br>
                <input type="text" name="" id="" placeholder="Answer">
            </li>
            <li>7. What recent technological innovation has made headlines in your country? <br>
                <input type="text" name="" id="" placeholder="Answer">
            </li>
            <li>8. What major cultural event or festival is scheduled to take place in your country soon? <br>
                <input type="text" name="" id="" placeholder="Answer">
            </li><br><br>
            <div class="btn-box">
                <button type="button" id="Back2">Back</button>
                <button type="button" id="Next3">Next</button>
            </div>
        </form>

        <form id="Form4">
            <li>9. What is the current global inflation rate, and how is it affecting your household budget? <br><br>
                <input type="text" name="" id="" placeholder="Answer">
            </li>
            <li>10. Who are the notable figures in the entertainment industry making headlines? <br>
                <input type="text" name="" id="" placeholder="Answer">
            </li>
            <li>11. What are the latest developments in space exploration and their significance? <br>
                <input type="text" name="" id="" placeholder="Answer">
            </li>
            <li>12. What major social movements or protests have gained attention, and what are their demands or goals? <br>
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