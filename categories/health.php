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
            <h3><u>Health Survey</u></h3>
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
            <li>1. How often do you engage in physical activity or exercise each week?<br>
                <input type="text" name="" id="" placeholder="Answer">
            </li>
            <li>2. Do you consume a balanced diet that includes a variety of fruits and vegetables?<br>
                <input type="text" name="" id="" placeholder="Answer">
            </li>
            <li>3. Have you ever received a flu shot or other vaccinations in the past year?<br>
                <input type="text" name="" id="" placeholder="Answer">
            </li>
            <li>4. Do you have a family history of any significant health conditions (e.g., heart disease, diabetes,
                cancer)? <br><br>
                <input type="radio" name="Live" id="">Yes
                <input type="radio" name="Live" id="">No
            </li><br>
            <div class="btn-box">
                <button type="button" id="Back1">Back</button>
                <button type="button" id="Next2">Next</button>
            </div>
        </form>


        <form id="Form3">
            <li>5. How many hours of sleep do you typically get each night? <br>
                <input type="text" name="" id="" placeholder="Answer">
            </li>
            <li>6. Have you ever been diagnosed with a mental health condition, such as anxiety or depression? <br>
                <input type="text" name="" id="" placeholder="Answer">
            </li>
            <li>7. Are you familiar with basic first-aid procedures, such as CPR or using an AED? <br>
                <input type="text" name="" id="" placeholder="Answer">
            </li>
            <li>8. How would you rate your overall health on a scale of 1 to 10, with 1 being very poor and 10 being
                excellent? <br>
                <input type="text" name="" id="" placeholder="Answer">
            </li><br>
            <div class="btn-box">
                <button type="button" id="Back2">Back</button>
                <button type="button" id="Next3">Next</button>
            </div>
        </form>

        <form id="Form4">
            <li>9. Have you ever participated in a physical fitness assessment or taken part in a structured exercise
                program? <br>
                <input type="text" name="" id="" placeholder="Answer">
            </li>
            <li>10. How often do you eat fast food or processed foods in a typical week? <br>
                <input type="text" name="" id="" placeholder="Answer">
            </li>
            <li>11. Are you aware of the importance of maintaining a healthy body mass index (BMI)? <br>
                <input type="text" name="" id="" placeholder="Answer">
            </li>
            <li>12. Have you ever had a bone or joint injury or surgery? If so, please specify. <br>
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