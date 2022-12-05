<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Firstpage.css">
    <link rel="icon" href="./icons/plate.png">
    <title>FoodServer.com</title>
</head>

<body>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == 'POST') {
        include('connection.php');
        $username = $_POST["LUname"];
        $password = $_POST["LUpass"];
        $sql = "SELECT * FROM useraccount WHERE UserName = '$username' AND UserPassword = '$password'";
        $result = mysqli_query($conn, $sql);
        $num = mysqli_num_rows($result);
        if ($num == 1) {
            $login = true;
            $userid = mysqli_query($conn, "SELECT UniqueID from useraccount where UserName = '$username'");
            $row = mysqli_fetch_assoc($userid);
            $id = $row['UniqueID'];
            $mealnum = mysqli_query($conn, "SELECT NoOfPlates from donordetails where UniqueID = '$id'");
            $row2 = mysqli_fetch_assoc($mealnum);
            $mnum = $row2['NoOfPlates'];
            $datetime = mysqli_query($conn, "SELECT DateTime from donordetails where UniqueID = '$id'");
            $row3 = mysqli_fetch_assoc($datetime);
            $dt = $row3['DateTime'];
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION["username"] = $username;
            $_SESSION['userid'] = $id;
            $_SESSION['noofplates'] = $mnum;
            $_SESSION['datetime'] = $dt;

            header("location: 1_Homepage.php");
        } else {
            echo '<span class="alert red">Invalid Credentials !</span>';
        }
    }
    ?>
    <div class="main">
        <div class="imagecontainer">
            <img src="./images/loginvector3cropped-removebg-preview.png" alt="Login" class="mainimage">
        </div>
        <div class="text">
            <div class="bigtext">
                Welcome to the <p class="gradient-text"> Food Server</p>
            </div>
            <form action="./Firstpage.php" class="form" method="POST">
                <label for="name" class="inputtext">Full Name</label>
                <input type="text" id="name" placeholder="Enter your name" class="inputfield" name="LUname">
                <label for="password" class="inputtext">Password</label>
                <input type="password" id="Lpassword" placeholder="Enter your password" class="inputfield" name="LUpass">
                <input type="checkbox" onclick="myLpasswordFunction()" style=" width:20px; height:20px; " class="inputfield">
                <span style="font-size: 1.2rem; font-family: Product Sans; color:darkslategrey;"> Show Password</span>
                <div class="buttons">
                    <input type="submit" value="Sign in" class="btn-grad">
                    <a href="./signuppage.php"><input type="button" value="Sign up" class="btn-grad"></a>
                </div>
                <script>
                    function myLpasswordFunction() {
                        var x = document.getElementById("Lpassword");
                        if (x.type === "password") {
                            x.type = "text";
                        } else {
                            x.type = "password";
                        }
                    }
                </script>
            </form>



        </div>
    </div>

</body>

</html>