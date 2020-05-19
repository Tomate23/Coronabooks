<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign UP</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            
        }
    
        * {
            box-sizing: border-box;
        }
        
        /* Full-width input fields */
        input[type=text],
        input[type=password] {
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            background: #f1f1f1;
            border: 1px solid black;
            border-radius: 10px;
        }
    
        /* Add a background color when the inputs get focus */
        input[type=text]:focus,
        input[type=password]:focus {
            background-color: #ddd;
            outline: none;
            border: 1px solid black;
            border-radius: 10px;
        }
    
        /* Set a style for all buttons */
        button {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
            font-size: 17px;
        }
    
        button:hover {
            opacity: 1;
        }
    
        /* Extra styles for the cancel button */
        .cancelbtn {
            padding: 14px 20px;
            background-color: #f44336;
        }
    
    
        /* Float cancel and signup buttons and add an equal width */
        .cancelbtn,
        .signupbtn {
            float: left;
            width: 50%;
        }
    
        .cancelbtn>a {
            color: white;
            text-decoration: none;
            /* font-size: 18px; */
            transition: ease-in-out .5s;
        }
    
        .cancelbtn>a:hover {
            color: black;
            /* box-shadow: 0 0 6px 0 rgba(0, 0, 0, 0.4); */
        }
    
        /* Add padding to container elements */
        .container {
            padding: 16px;
            
        }
    
        /* The Modal (background) */
        .modal {
            display: block;
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
            /* background-color: #474e5d; */
            background-image:url("../img/otras/universe.gif");
            padding-top: 50px;
            
        }
    
        /* Modal Content/Box */
        .modal-content {
            background-color: #fefefe;
            margin: 5% auto 15% auto;
            /* 5% from the top, 15% from the bottom and centered */
            border: 1px solid #888;
            width: 80%;
            /* Could be more or less, depending on screen size */
        }
    
        /* Style the horizontal ruler */
        hr {
            border: 1px solid #f1f1f1;
            margin-bottom: 25px;
        }
    
        /* The Close Button (x) */
        .close {
            position: absolute;
            right: 35px;
            top: 15px;
            font-size: 40px;
            font-weight: bold;
            color: #f1f1f1;
        }
    
        .close:hover,
        .close:focus {
            color: #f44336;
            cursor: pointer;
        }
    
        /* Clear floats */
        .clearfix::after {
            content: "";
            clear: both;
            display: table;
        }
    
        /* Change styles for cancel button and signup button on extra small screens */
        @media screen and (max-width: 300px) {
    
            .cancelbtn,
            .signupbtn {
                width: 100%;
            }
        }
    </style>

</head>

<body>

    <!-- <h2>Modal Signup Form</h2> -->
    <div class="modal">
        <!-- <span class="close" title="Close Modal">&times;</span> -->
        <form class="modal-content" action="../includes/signup2.inc.php" method="POST">
            <div class="container">
                <h1>Sign Up</h1>
                <p>Please fill in this form to create an account.</p>
                <hr>
                <label for="email"><b>Email</b></label>
                <input type="text" placeholder="Enter Email" name="email" required>

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" required>

                <label for="uname"><b>User name</b></label>
                <input type="text" placeholder="Enter your Username" name="uname" required>

                <!-- <label>
                    <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
                </label> -->

                <p>By creating an account you agree to our <a href="https://policies.google.com/privacy?hl=en-US" style="color:dodgerblue">Terms & Privacy</a>.</p>

                <div class="clearfix">
                    <!-- <button type="button" class="cancelbtn">Cancel</button> -->
                    <button type="button" class="cancelbtn"><a href="../index2.php" target="_self">Cancel</a></button>
                    <button type="submit" class="signupbtn">Sign Up</button>
                </div>
            </div>
        </form>
    </div>

    <!-- <script>
        // Get the modal
        var modal = document.getElementById('id01');

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script> -->

</body>

</html>