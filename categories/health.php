<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health Survey</title>
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
            <h3><u>Health Survey</u></h3>
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
                    <input type="text" name="address" id="" placeholder="Address...." required>
                </li>
                <br>
            </div>
            <div class="question">
                <h4><u>Questions</u></h4>
                <li>1. How often do you engage in physical activity or exercise each week?<br>
                    <input type="text" name="he1" id="" placeholder="Answer">
                </li>
                <li>2. Do you consume a balanced diet that includes a variety of fruits and vegetables?<br>
                    <input type="text" name="he2" id="" placeholder="Answer">
                </li>
                <li>3. Have you ever received a flu shot or other vaccinations in the past year?<br>
                    <input type="text" name="he3" id="" placeholder="Answer">
                </li>
                <li>4. Do you have a family history of any significant health conditions (e.g., heart disease, diabetes,
                    cancer)?<br>
                    <input type="text" name="he4" id="" placeholder="Answer">
                </li>
                <li>5. How many hours of sleep do you typically get each night? <br>
                    <input type="text" name="he5" id="" placeholder="Answer">
                </li>
                <li>6. Have you ever been diagnosed with a mental health condition, such as anxiety or depression? <br>
                    <input type="text" name="he6" id="" placeholder="Answer">
                </li>
                <li>7. Are you familiar with basic first-aid procedures, such as CPR or using an AED? <br>
                    <input type="text" name="he7" id="" placeholder="Answer">
                </li>
                <li>8.How would you rate your overall health on a scale of 1 to 10, with 1 being very poor and 10 being
                    excellent? <br>
                    <input type="text" name="he8" id="" placeholder="Answer">
                </li>
                <li>9. Have you ever participated in a physical fitness assessment or taken part in a structured
                    exercise program? <br>
                    <input type="text" name="he9" id="q9" placeholder="Answer">
                </li>
                <li>10. How often do you eat fast food or processed foods in a typical week? <br>
                    <input type="text" name="he10" id="" placeholder="Answer">
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
    $f = isset($_POST["he1"]) ? $_POST["he1"] : "";
    $g = isset($_POST["he2"]) ? $_POST["he2"] : "";
    $h = isset($_POST["he3"]) ? $_POST["he3"] : "";
    $i = isset($_POST["he4"]) ? $_POST["he4"] : "";
    $j = isset($_POST["he5"]) ? $_POST["he5"] : "";
    $k = isset($_POST["he6"]) ? $_POST["he6"] : "";
    $l = isset($_POST["he7"]) ? $_POST["he7"] : "";
    $m = isset($_POST["he8"]) ? $_POST["he8"] : "";
    $n = isset($_POST["he9"]) ? $_POST["he9"] : "";
    $o = isset($_POST["he10"]) ? $_POST["he10"] : "";

    $query = "insert into healthdata(name,age,school,eemail,phno,address,he1,he2,he3,he4,he5,he6,he7,he8,he9,he10) values('$p','$q','$r','$s','$t','$u','$f','$g','$h','$i','$j','$k','$l','$m','$n','$o')";
    mysqli_query($con, $query);
    ?>


</body>

</html>