<?php
    session_start();

    include("regConnection.php");
    include("functions.php");

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        
        $user = $_POST['user_name'];
        $password = $_POST['password'];

        if(!empty($user) && !empty($password)){
            $query = "select * from users where username = '$user' limit 1";

            $result = mysqli_query($con,$query);
            if($result){
                if($result && mysqli_num_rows($result) > 0){
                    $user_data = mysqli_fetch_assoc($result);
                                
                    if($user_data['password'] === $password){
                        $_SESSION['user_id'] = $user_data['username'];
                                    
                        header("Location: homepage.php");
                        die;
                    }
                    echo '<script type=text/javascript> alert("Wrong password entered.")</script>';
                                
                }
            }
        }
        else{
            echo '<script type=text/javascript> alert("Empty field.")</script>';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="RegLogStyle.css">
    <title>login</title>
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
                <div class="lapMidLog">
                    <div id="lapReg">
                        Log In
                    </div>
                    <div class="lapInp">
                        <form method="post">
                            <div>
                                <input class="lapRegCusIn" type="text" placeholder="Username" name="user_name">
                            </div>

                            <div>
                                <br><input class="lapRegCusIn" type="password" placeholder="Password" name="password">
                            </div>

                            <div>
                                <input type="submit" id="lapLogBut" value="LOGIN"></input>
                            </div>
                        </form>

                    </div>
        
                    
        
                    <div class="lapToRegIn">
                        Not a member? <a href="registration.php">Sign up!</a>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</body>
</html>