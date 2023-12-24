<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>History Survey</title>
    <link rel="stylesheet" href="style.css">
    <script src="submit.js"></script>
</head>
<div class="lapMain">
    <nav id="lapNav">
        <img class="lapLogo" src="/assets/triangles.png" alt="logo" width="45px" eight="45px">
        <label class="lapCom">surveyJunkie</label>
        <input type="button" align="center" class="lapHome" onClick="parent.location='/homepage.php'"
            value="Home"></input>
        <input type="button" align="center" class="lapAbout" onClick="parent.location='/about.html'"
            value="About"></input>
        <a class="out" href="/logout.php">LogOut</a>
        <div class="lapIcons">
            <div class="icon"><img src="/assets/icons/instagram.png"
                    onClick='window.open("https://www.instagram.com/p/BgSlRglAKBn/?hl=en")' width="35px"></div>
            <div class="icon"><img src="/assets/icons/facebook.png"
                    onClick='window.open("https://shorturl.at/rsCHO")' width="35px" target="_blank"></div>
            <div class="icon"><img src="/assets/icons/youtube.png"
                    onClick='window.open("https://www.youtube.com/watch?v=iik25wqIuFo")' width="35px"></div>
            <div class="icon"><img src="/assets/icons/twitter.png"
                    onClick='window.open("https://twitter.com/?lang=en")' width="35px"></div>
        </div>
    </nav>
</div>

<body>
    <div class="container">
        <form method="post">
            <h3><u>History Survey</u></h3>
            <div class="personal">
                <h4><u>Personal Details</u></h4>
                <li>Name : <br>
                    <input type="text" name="name" id="" placeholder="Name" required>
                </li>
                <li>Age : <br>
                    <input type="text" name="age" id="" placeholder="Age" required>
                </li>
                <li>School/College : <br>
                    <input type="text" name="school" id="" placeholder="School/College" required>
                </li>
                <li>Email : <br>
                    <input type="text" name="eemail" id="" placeholder="Email" required>
                </li>
                <li>Phone no. : <br>
                    <input type="text" name="phno" id="" placeholder="00000 00000" required>
                </li>
                <li>Address : <br>
                    <input type="text" name="address" id="" placeholder="Address, Address, ...." required>
                </li>
                <br>
            </div>
            <div class="question">
                <h4><u>Questions</u></h4>
                <li>1. How interested are you in the study of history, on a scale of 1 to 5, with 1 being least
                    interested
                    and 5 being most interested?<br>
                    <input type="text" name="hs1" id="" placeholder="Answer">
                </li>
                <li>2. Which historical period or event do you find most intriguing or significant, and why?<br>
                    <input type="text" name="hs2" id="" placeholder="Answer">
                </li>
                <li>3. How do you typically learn about history? (e.g., books, documentaries)<br>
                    <input type="text" name="hs3" id="" placeholder="Answer">
                </li>
                <li>4. Do you believe that understanding history is important for individuals and societies? <br>
                    <input type="text" name="hs4" id="" placeholder="Answer">
                </li>
                <li>5. Have you ever visited historical landmarks or museums related to history? If so, which ones? <br>
                    <input type="text" name="hs5" id="" placeholder="Answer">
                </li>
                <li>6. Are there any historical figures or leaders you admire or find particularly inspiring? <br>
                    <input type="text" name="hs6" id="" placeholder="Answer">
                </li>
                <li>7. What's the most significant historical event in your opinion? <br>
                    <input type="text" name="hs7" id="" placeholder="Answer">
                </li>
                <li>8. Have you ever participated in reenactments or historical events? <br>
                    <input type="text" name="hs8" id="" placeholder="Answer">
                </li>
                <li>9. Do you think history repeats itself? <br>
                    <input type="text" name="hs8" id="" placeholder="Answer">
                </li>
                <li>10. How do you feel about preserving historical sites and artifacts? <br>
                    <input type="text" name="hs10" id="" placeholder="Answer">
                </li><br><br>
                <button type="submit" value="Submit" onClick="submission()">Submit</button>
            </div>
        </form>
    </div>
    <div class="img">
        <img src="/assets/triangles.png" alt="Image" class="tri-image">
    </div>

    <?php
    $con = mysqli_connect('localhost', 'root');
    if ($con) {
        echo "";
    } else {
        echo "connection failed";
    }
    mysqli_select_db($con, 'survey');

    $p = isset($_POST["name"]) ? $_POST["name"] : "";
    $q = isset($_POST["age"]) ? $_POST["age"] : "";
    $r = isset($_POST["school"]) ? $_POST["school"] : "";
    $s = isset($_POST["eemail"]) ? $_POST["eemail"] : "";
    $t = isset($_POST["phno"]) ? $_POST["phno"] : "";
    $u = isset($_POST["address"]) ? $_POST["address"] : "";
    $f = isset($_POST["hs1"]) ? $_POST["hs1"] : "";
    $g = isset($_POST["hs2"]) ? $_POST["hs2"] : "";
    $h = isset($_POST["hs3"]) ? $_POST["hs3"] : "";
    $i = isset($_POST["hs4"]) ? $_POST["hs4"] : "";
    $j = isset($_POST["hs5"]) ? $_POST["hs5"] : "";
    $k = isset($_POST["hs6"]) ? $_POST["hs6"] : "";
    $l = isset($_POST["hs7"]) ? $_POST["hs7"] : "";
    $m = isset($_POST["hs8"]) ? $_POST["hs8"] : "";
    $n = isset($_POST["hs9"]) ? $_POST["hs9"] : "";
    $o = isset($_POST["hs10"]) ? $_POST["hs10"] : "";

    $query = "insert into hsdata(name,age,school,eemail,phno,address,hs1,hs2,hs3,hs4,hs5,hs6,hs7,hs8,hs9,hs10) values('$p','$q','$r','$s','$t','$u','$f','$g','$h','$i','$j','$k','$l','$m','$n','$o')";
    mysqli_query($con, $query);
    ?>


</body>

</html>