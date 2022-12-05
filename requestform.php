<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./icons/plate.png">
    <title>FoodServer.com</title>
    <style>
        body {
            background: url('./images/outlinedvectorback.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-blend-mode: color;
            background-color: rgba(255, 255, 255, 0.699);
        }
        .btn-grad {
            background-image: linear-gradient(to right, blue 0%, purple 51%, blue 100%)
        }
        .btn-grad {
            margin-right: 10px;
            padding: 15px 45px;
            text-align: center;
            text-transform: uppercase;
            transition: 0.5s;
            background-size: 200% auto;
            color: white;
            box-shadow: 0 0 20px #eee;
            border-radius: 4px;
            display: block;
            border: none;
            margin-top: 10px;
        }
        .btn-grad:hover {
            background-position: right center;
            color: #fff;
            text-decoration: none;
            box-shadow: 0px 10px 20px rgb(168, 216, 235);
        }
        .donationformcontainer {
            display: flex;
            justify-content: center;
            align-items: center;
            position: fixed;
            z-index: 32;
            left: 0;
            top: 0;
            width: 100%;
            height: 100vh;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.637);
        }
        .donationformcontainer .imdonationform {
            background-color: #f0f0f0;
            margin: auto;
            font-size: 1.3rem;
            padding: 1rem;
            border: 1px solid #888;
            width: 85%;
            border: solid 1px black;
            border-radius: 3px;
            overflow: hidden;
        }

        .donationformcontainer .inputf {
            font-size: 1.2rem;
            width: 100%;
            padding: 10px 18px;
            border: solid 1px grey;
            margin-top: 15px;
            margin-bottom: 15px;
            border-radius: 3px;
        }

        .donationformcontainer .labelf {
            font-family: 'Product Sans';
        }

        .donationformcontainer .formhead {
            font-style: 2rem;
            letter-spacing: 5px;
            font-family: tahoma;
            font-weight: 900;
            text-align: center;
            background: linear-gradient(135deg, blue, purple);
            border: solid 1px black;
            border-radius: 3px;
            color: snow;
            padding: 20px;
            margin-bottom: 20px;
        }

        .donationformcontainer .flexform {
            width: 96%;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .imdonationform .subfield {
            width: 46%;
        }

        @media screen and (max-width: 900px) {
            .flexform {
                flex-direction: column;
            }

            .flexform .subfield {
                width: 100%;
            }
        }

        .message {
            position: absolute;
            top: 1%;
            left: 28%;
            width: 40%;
            height: 20%;
            background-color: white;
            border: solid 1px grey;
            padding: 1rem;
            z-index: 33;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            border-radius: 6px;
        }

        .message .text {
            font-size: 1.5rem;
            font-family: Product Sans;
            margin-bottom: 10px;
        }

        .message .phone {
            font-size: 1.4rem;
            font-family: Product Sans;
            color: darkblue;
        }

        .red {
            background-color: rgb(255, 203, 203);
        }
    </style>
</head>

<body>

    <?php
    include('connection.php');
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $ShowAlert = false;
        $Username = $_POST["username"];
        $Phoneno = $_POST["userphone"];
        $Uid = $_POST["uid"];
        $Noofplates = $_POST["noofplates"];
        $Address = $_POST["address"];
        $exists = false;
        if ($exists == false && $Noofplates >= 10) {
            $sql = "INSERT INTO `requests` (`UserName`, `Phoneno`, `UniqueID`, `NoOfPlates`, `Address`, `DateTiime`)
                 VALUES ('$Username', '$Phoneno', '$Uid', '$Noofplates', '$Address', current_timestamp());";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                $ShowAlert = true;
            }
        } else {
            echo '<div class="message red">
                    <div class="text">
                        Minimum 10 plates of food can be delivired.
                    </div>
                    <div class="phone">
                        Thankyou
                </div>
                </div>';
        }
        if ($ShowAlert == true) {
            echo '<div class="message">
                    <div class="text">
                     Thankyou for requesting food for needy, we are arriving to you.
                    </div>
                    <div class="phone">
                        Phone number: 9876543212
                    </div>
                </div>';
        }
    }
    ?>

    <div class="donationformcontainer" id="requestform">
        <form class="imdonationform" id="imdonation" action="requestform.php" method="POST">
            <div class="formhead">
                REQUEST FORM
            </div>
            <div class="flexform">
                <div class="subfield">
                    <label for="fname" class="labelf">Full name :</label><br>
                    <input type="text" id="fname" class="inputf" name="username" placeholder="Enter your Name"><br>
                </div>
                <div class="subfield">
                    <label for="lname" class="labelf">Phone number :</label><br>
                    <input type="tel" id="lname" class="inputf" name="userphone" placeholder="Enter your 10 digit mobile number"><br>
                </div>
            </div>
            <div class="flexform">
                <div class="subfield">
                    <label for="fmealno" class="labelf">User ID :</label><br>
                    <input type="phone" id="fmealno" class="inputf" name="uid" placeholder="Check you ID in your Profile" min="20"><br>
                </div>
                <div class="subfield">
                    <label for="fmealno" class="labelf">No. of plates of food :</label><br>
                    <input type="number" id="fmealno" class="inputf" name="noofplates" placeholder="Minimum 10" min="10"><br>
                </div>
            </div>

            <label for="address" class="labelf">Where are you :</label><br>
            <input type="text" id="faddress" class="inputf" name="address" placeholder="Enter your address" style="width: 96.5%;"><br>
            <br>
            <center> <input type="submit" class="btn-grad" value="REQUEST"></center>
        </form>
    </div>

</html>