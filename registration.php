<?php
    session_start();

    include("regConnection.php");

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        //something was posted
        $user_name = $_POST['user_name'];
        $mail = $_POST['mail'];
        $gender = $_POST['gender'];
        $password = $_POST['password'];
        $password1 = $_POST['password1'];

        if(!empty($user_name) && !empty($mail) && !empty($gender) && !empty($password) && !is_numeric($user_name)){
            if($password != $password1){
                echo '<script type="text/javascript"> alert("Confirmation password is not matching.")</script>';
            }
            else{
                //save to database
                $query = "insert into users(username,email,gender,password) values ('$user_name','$mail','$gender','$password')";

                mysqli_query($con,$query);

                header("Location: login.php");
                die;
            }
        }else{
            echo '<script type="text/javascript"> alert("You left some fields unfilled or invalid type.")</script>';
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="RegLogStyle.css">
    <title>registration</title>
</head>
<body>
 
    <div class="lapMain">
        <div class="container">
            <div id="half">
                <div id="lapSymbol">
                    <img id="lapLogo" src="assets/triangles.png" alt="logo" width="270px" >
                    <div id="logoName">
                        surveyJunkie
                    </div>
                </div>
            </div>
            <div id="otherHalf">
                <div class="lapMid">
                    <div id="lapReg">
                        Registration
                    </div>
                    <div class="lapInp">
                        <form method="post">
                            <div>
                                <input class="lapRegCusIn" type="text" placeholder="Username" name="user_name">
                            </div>
            
                            <div>
                                <br><input class="lapRegCusIn" type="text" placeholder="Email" name="mail">
                            </div>
            
                            <div>
                                <br><select class="lapRegCusIn" name="gender"><option value="M">MALE</option><option value="F">FEMALE</option></select>
                            </div>
                            <div>
                                <br><input class="lapRegCusIn" type="password" placeholder="Password" name="password">
                            </div>
                            <div>
                                <br><input class="lapRegCusIn" type="password" placeholder="Confirm password" name="password1">
                            </div>
                            <div>
                                <input type="submit" id="lapRegBut" value="REGISTER"></input>
                            </div>
                        </form>
                    </div>
        
                    <div class="lapToLogIn">
                        Already a member? <a href="login.php">Sign in!</a>
                    </div>
        
                    
                </div>
            </div>
        </div>
    </div>

</body>
</html>