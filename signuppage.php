<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./icons/plate.png">
    <title>FoodServer.com</title>
</head>
<style>
    body {
        background: url('./images/outlinedvectorback.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        background-blend-mode: color;
        background-color: rgba(255, 255, 255, 0.699);
    }
    .modal {
        display: flex;
        justify-content: center;
        align-items: center;
        position: fixed;
        z-index: 31;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
    }
    .modal-content {
        background-color: #fefefe;
        margin: auto;
        font-size: 1.5rem;
        padding: 20px;
        border: 1px solid #888;
        width: 70%;
        box-shadow: 0px 10px 40px rgba(0, 0, 0, 0.295);
    }
    .modal-content .formhead {
        font-style: 2rem;
        font-family: tahoma;
        font-weight: 900;
        text-align: center;
        background-color: cadetblue;
        border-radius: 3px;
        color: snow;
        padding: 20px;
    }
    .inputf {
        font-size: 1.3rem;
        width: 96%;
        padding: 10px 18px;
        border: solid 1px grey;
        margin-top: 15px;
        margin-bottom: 15px;
        border-radius: 3px;
    }
    .labelf {
        font-family: 'Product Sans';
    }
    .modal .btn {
        font-size: 1.3rem;
        border: solid 1px black;
        border-radius: 3px;
        text-align: center;
        padding: 12px;
        font-family: 'tahoma';
        background-color: rgb(5, 128, 1);
        width: 20%;
        margin-bottom: 10px;
        color: white;
    }
</style>

<body>

    <?php
    // Connection with the database
    include('connection.php');
    // Authentication with database
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $ShowAlert = false;
        $username = $_POST["uname"];
        $phoneno = $_POST["uphone"];
        $password = $_POST["upassword"];
        $exists = false;
        if ($exists == false) {
            $sql = "INSERT INTO `useraccount` ( `UserName`, `UserPhone`, `UserPassword`, `DateTime`) 
        VALUES ( '$username', '$phoneno', '$password', current_timestamp())";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                $ShowAlert = true;
            }
        } else {
            echo '<span class="alert red"> Given Phone no. already exists with user. Try Again! with new </span>';
        }
        if ($ShowAlert == true) {
            header("Location: Firstpage.php");
            echo '<span class="alert"> User Registered Successfully you can Signin now</span>';
        }
    }

    ?>

    <div id="myModal" class="modal">
        <div class="modal-content" id="modal">
            <div class="formhead">
                A Quick Sign Up
            </div> <br>
            <form class="signupform" action="./signuppage.php" method="POST">
                <label for="fname" class="labelf">Full name:</label><br>
                <input type="text" id="fname" class="inputf" name="uname" placeholder="Enter your Name" required><br>
                <label for="lname" class="labelf">Phone number:</label><br>
                <input type="tel" id="lname" class="inputf" name="uphone" placeholder="Enter your 10 digit mobile number" required><br>
                <label for="myInput" class="labelf">Password:</label><br>
                <input type="password" id="myInput" class="inputf" name="upassword" placeholder="Create a password" style="margin-bottom: 5px;" required>
                <input type="checkbox" onclick="mypasswordFunction()" style="margin-bottom: 20px; width:20px; height:20px; ">
                <span style="font-size: 1.1rem; font-family: Product Sans; color:darkslategrey;"> Show Password</span>
                <script>
                    function mypasswordFunction() {
                        var x = document.getElementById("myInput");
                        if (x.type === "password") {
                            x.type = "text";
                        } else {
                            x.type = "password";
                        }
                    }
                </script>
                <center><input type="submit" class="btn" value="SIGN UP"></center>
            </form>
        </div>
    </div>
    <script>
        function opensignupform() {
            document.getElementById('myModal').style.display = 'flex';
        }
    </script>
</body>

</html>