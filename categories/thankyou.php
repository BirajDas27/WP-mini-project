<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column; 
            height: 100vh;
            background: linear-gradient(135deg, black, white);
        }

        .thank-you-container {
            text-align: left;
            animation: fadeIn 1s ease-in-out;
        }

        h1 {
            font-size: 60px;
            color: #fff;
            margin: 0;
        }

        p {
            font-size: 28px;
            color: #fff;
            margin: 0;
            margin-top: 10px;
        }

        .home-button {
            margin-top: 20px;
            background-color: #232323;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: transform 0.2s; 
        }

        .home-button:hover {
            transform: scale(1.1); 
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
                transform: translateY(-20px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
    <title>Thank You Page</title>
</head>

<body>
    <div class="thank-you-container">
        <h1 class="thank-you-message">Survey Completed!</h1>
        <p class="sub-message">Thank you for taking part.</p>
        <button class="home-button" onClick="parent.location='homepage.php'" value="Home">Home</button>
    </div>
</body>

</html>
