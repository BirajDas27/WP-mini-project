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
            <h3><u>Geography Survey</u></h3>
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
            <li>1. What continent are you from?<br>
                <input type="text" name="" id="" placeholder="Answer">
            </li>
            <li>2. What is the largest freshwater lake in the world, and where is it located? <br>
                <input type="text" name="" id="" placeholder="Answer">
            </li>
            <li>3. What is the significance of the Great Wall of China, both historically and in the present day?<br>
                <input type="text" name="" id="" placeholder="Answer">
            </li>
            <li>4. Do you believe that climate change is causing more frequent and severe natural disasters? (Yes/No)
                <br><br>
                <input type="radio" name="Live" id="">Yes
                <input type="radio" name="Live" id="">No
            </li><br>
            <div class="btn-box">
                <button type="button" id="Back1">Back</button>
                <button type="button" id="Next2">Next</button>
            </div>
        </form>


        <form id="Form3">
            <li>5. Do you prefer living in urban or rural areas, and why? <br>
                <input type="text" name="" id="" placeholder="Answer">
            </li>
            <li>6. Name one valuable natural resource that is found in the Arctic region. <br>
                <input type="text" name="" id="" placeholder="Answer">
            </li>
            <li>7. What do you think the world population will be in the year 2050, and which continent do you believe
                will have the highest population by then? <br>
                <input type="text" name="" id="" placeholder="Answer">
            </li>
            <li>8. Name one major river in South America. <br>
                <input type="text" name="" id="" placeholder="Answer">
            </li><br><br>
            <div class="btn-box">
                <button type="button" id="Back2">Back</button>
                <button type="button" id="Next3">Next</button>
            </div>
        </form>

        <form id="Form4">
            <li>9. When planning a vacation, do you prefer destinations with beaches, mountains, or cities? <br>
                <input type="text" name="" id="" placeholder="Answer">
            </li>
            <li>10. What types of landforms can you find in your local area (e.g., hills, rivers, forests)? <br>
                <input type="text" name="" id="" placeholder="Answer">
            </li>
            <li>11. Which of the following countries is the largest by land area?<br><br>
                <input type="radio" name="Live" id="">Russia &nbsp;&nbsp;
                <input type="radio" name="Live" id="">Canada &nbsp;&nbsp;
                <input type="radio" name="Live" id="">China &nbsp;&nbsp;
                <input type="radio" name="Live" id="">Brazil
            </li>
            <li>12. Name three neighboring countries of the India. <br>
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