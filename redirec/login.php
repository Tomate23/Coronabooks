
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-image:url("../img/otras/universe.gif");
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            border-radius: 5px;
        }
        button:hover {
            opacity: 0.8;
        }
        input[type=text],
        input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            box-sizing: border-box;
            border: 1px solid black;
            border-radius: 10px;
        }
        .cancelbtn {
            width: auto;
            padding: 10px 18px;
            background-color: #f44336;
        }
        .cancelbtn>a{
            color: white;
            text-decoration: none;
            font-size:18px;
            transition: ease-in-out .5s;
        }
        .cancelbtn>a:hover{
            color: black;
            /* box-shadow: 0 0 6px 0 rgba(0, 0, 0, 0.4); */
        }
        .modal {
            display:block;
            /* Hidden by default */
            position: fixed;
            /* Stay in place */
            z-index: 1;
            /* Sit on top */
            left: 0;
            top: 0;
            width: 100%;
            /* Full width */
            height: 100%;
            /* Full height */
            overflow: auto;
            /* Enable scroll if needed */
            background-color: rgb(0, 0, 0);
            /* Fallback color */
            background-color: rgba(0, 0, 0, 0.4);
            /* Black w/ opacity */
            padding-top: 60px;
        }

        .imgcontainer {
            text-align: center;
            margin: 24px 0 12px 0;
            position: relative;
        }
        img.avatar {
            width: 40%;
            border-radius: 50%;
        }
        span.psw {
            float: right;
            padding-top: 16px;
        }

        .modal-content {
            background-color: #fefefe;
            margin: 5% auto 15% auto;
            /* 5% from the top, 15% from the bottom and centered */
            border: 1px solid #888;
            width: 80%;
            /* Could be more or less, depending on screen size */
        }

        .animate {
            -webkit-animation: animatezoom 0.6s;
            animation: animatezoom 0.6s
        }

        .close {
            position: absolute;
            right: 25px;
            top: 0;
            color: #000;
            font-size: 35px;
            font-weight: bold;
        }
        .container {
            padding: 16px;
        }
        .close:hover,
        .close:focus {
            color: red;
            cursor: pointer;
        }
        .animate {
            -webkit-animation: animatezoom 0.6s;
            animation: animatezoom 0.6s
        }

        @-webkit-keyframes animatezoom {
            from {
                -webkit-transform: scale(0)
            }

            to {
                -webkit-transform: scale(1)
            }
        }

        @keyframes animatezoom {
            from {
                transform: scale(0)
            }

            to {
                transform: scale(1)
            }
        }
        @media screen and (max-width: 300px) {
            span.psw {
                display: block;
                float: none;
            }

            .cancelbtn {
                width: 100%;
            }
        }
        .valid{
            background-color: #f44336;
            text-transform: uppercase;
            color:#000;
            border: 1px solid black;
        }
        

    </style>
</head>
<body>
           
    <div class="modal">
        <form class="modal-content animate" action="../includes/signup.inc.php" method="POST">
                    <?php
                    if(isset($_GET['error'])){
                        echo '<center class="valid">Datos no validos</center>';
                    }
                    ?>
            <div class="imgcontainer">
                <!-- <span class="close" title="Close Modal">&times;</span> -->
                <img src="../img/otras/logoCrorona.PNG" alt="Avatar" class="avatar">
            </div>
            <div class="container">
                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="uname" required>

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" required>

                <button type="submit" name="submit">Login</button>
                <!-- <label>
                    <input type="checkbox" checked="checked" name="remember"> Remember me
                </label> -->
            </div>
            <div class="container" style="background-color:#f1f1f1">
                <!-- <a href="https://www.w3docs.com/" class="cancelbtn">Cancel</a> -->
                <button type="button" class="cancelbtn"><a href="../index2.php" target="_self">Cancel</a></button>
                <span class="psw">Forgot <a href="#">password?</a></span>
            </div>
        </form>
    </div>
   
</body>
</html>
   
    


