<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currentaffairs Survey</title>
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
            <h3><u>Currentaffairs Survey</u></h3>
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
                <li>1. What is the current global population as of 2023?<br>
                    <input type="text" name="sp1" id="" placeholder="Answer">
                </li>
                <li>2. What major international event took place recently that had significant global impact?<br>
                    <input type="text" name="sp2" id="" placeholder="Answer">
                </li>
                <li>3.What is the significance of the Great Wall of China, both historically and in the present day?<br>
                    <input type="text" name="sp3" id="" placeholder="Answer">
                </li>
                <li>4 Is your country currently experiencing an economic recession?
                    <br>
                    <input type="text" name="sp4" id="" placeholder="Answer">
                </li>
                <li>5.What is the most recent major legislation or policy change in your country?<br>
                    <input type="text" name="sp5" id="" placeholder="Answer">
                </li>
                <li>6. Which international organization is currently working on peacekeeping efforts in a conflict zone?
                    <br>
                    <input type="text" name="sp6" id="" placeholder="Answer">
                </li>
                <li>7. What recent technological innovation has made headlines in your country? <br>
                    <input type="text" name="sp7" id="" placeholder="Answer">
                </li>
                <li>8. What major cultural event or festival is scheduled to take place in your country soon? <br>
                    <input type="text" name="sp8" id="" placeholder="Answer">
                </li>
                <li>9. What is the current global inflation rate, and how is it affecting your household budget?
                    <br><br>
                    <input type="text" name="sp9" id="" placeholder="Answer">
                </li>
                <li>10. Who are the notable figures in the entertainment industry making headlines? <br><br>
                    <input type="text" name="sp10" id="" placeholder="Answer">
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
    $f = isset($_POST["sp1"]) ? $_POST["sp1"] : "";
    $g = isset($_POST["sp2"]) ? $_POST["sp2"] : "";
    $h = isset($_POST["sp3"]) ? $_POST["sp3"] : "";
    $i = isset($_POST["sp4"]) ? $_POST["sp4"] : "";
    $j = isset($_POST["sp5"]) ? $_POST["sp5"] : "";
    $k = isset($_POST["sp6"]) ? $_POST["sp6"] : "";
    $l = isset($_POST["sp7"]) ? $_POST["sp7"] : "";
    $m = isset($_POST["sp8"]) ? $_POST["sp8"] : "";
    $n = isset($_POST["sp9"]) ? $_POST["sp9"] : "";
    $o = isset($_POST["sp10"]) ? $_POST["sp10"] : "";

    $query = "insert into currentdata(name,age,school,eemail,phno,address,sp1,sp2,sp3,sp4,sp5,sp6,sp7,sp8,sp9,sp10) values('$p','$q','$r','$s','$t','$u','$f','$g','$h','$i','$j','$k','$l','$m','$n','$o')";
    mysqli_query($con, $query);
    ?>


</body>

</html>