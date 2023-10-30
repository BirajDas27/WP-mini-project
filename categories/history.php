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
            <h3><u>History Survey</u></h3>
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
            <li>1. How interested are you in the study of history, on a scale of 1 to 5, with 1 being least interested
                and 5 being most interested?<br>
                <input type="text" name="" id="" placeholder="Answer">
            </li>
            <li>2. Which historical period or event do you find most intriguing or significant, and why?<br>
                <input type="text" name="" id="" placeholder="Answer">
            </li>
            <li>3. How do you typically learn about history? (e.g., books, documentaries)<br>
                <input type="text" name="" id="" placeholder="Answer">
            </li>
            <li>4. Do you believe that understanding history is important for individuals and societies? <br><br>
                <input type="radio" name="Live" id="">Yes
                <input type="radio" name="Live" id="">No
            </li><br>
            <div class="btn-box">
                <button type="button" id="Back1">Back</button>
                <button type="button" id="Next2">Next</button>
            </div>
        </form>


        <form id="Form3">
            <li>5. Have you ever visited historical landmarks or museums related to history? If so, which ones? <br>
                <input type="text" name="" id="" placeholder="Answer">
            </li>
            <li>6. Are there any historical figures or leaders you admire or find particularly inspiring? <br>
                <input type="text" name="" id="" placeholder="Answer">
            </li>
            <li>7. What's the most significant historical event in your opinion? <br>
                <input type="text" name="" id="" placeholder="Answer">
            </li>
            <li>8. Have you ever participated in reenactments or historical events? <br>
                <input type="text" name="" id="" placeholder="Answer">
            </li><br><br>
            <div class="btn-box">
                <button type="button" id="Back2">Back</button>
                <button type="button" id="Next3">Next</button>
            </div>
        </form>

        <form id="Form4">
            <li>9. Do you think history repeats itself? <br><br>
                <input type="radio" name="Live" id="">Yes
                <input type="radio" name="Live" id="">No
            </li>
            <li>10. How do you feel about preserving historical sites and artifacts? <br>
                <input type="text" name="" id="" placeholder="Answer">
            </li>
            <li>11. Is there a historical event you wish you knew more about? <br>
                <input type="text" name="" id="" placeholder="Answer">
            </li>
            <li>12. What's your favorite history-related book or movie? <br>
                <input type="text" name="" id="" placeholder="Answer">
            </li><br><br><br>
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