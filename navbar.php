<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Navbar.css?<?php echo time(); ?>" type="text/css">
    <script src="https://kit.fontawesome.com/8ef334e6c6.js" crossorigin="anonymous"></script>
    <title>Its navbar</title>
</head>

<body>
    <a id="Top"></a>
    <nav class="navbar">
        <div class="leftnav">
            <div class="logo">
                <img src="./logos/editedlogo.png" alt="" class="image">
            </div>
            <div class="name">
                Food Server
            </div>
        </div>
        <div class="ham" id="closeham" onclick="openform()">
            <img src="https://img.icons8.com/ios-glyphs/40/000000/menu--v1.png" />
        </div>
        <div class="close" id="openclosebtn" onclick="closeform()">
            <img src="https://img.icons8.com/ios-glyphs/40/000000/delete-sign.png" />
        </div>
        <ul class="list">
            <a href="./1_Homepage.php" class="anchor home">
                <li>Home</li>
            </a>
            <a href="./2_Aboutus.php" class="anchor">
                <li>About us</li>
            </a>
            <a href="./3_Ourwork.php" class="anchor">
                <li>Our Work </li>
            </a>
            <a href="./4_Donorspage.php" class="anchor">
                <li>Donors</li>
            </a>
            <a href="./5_Userprofile.php">
                <span id="profileimg">
                    <img src="https://img.icons8.com/fluency/40/000000/test-account.png" class="improfile" />
                </span>
            </a>
        </ul>
    </nav>

    <div class="form" id="popupform">
        <ul class="formlist">
            <a href="./5_Userprofile.php" class="anchor">
                <li>PROFILE</li>
            </a>
            <a href="./1_Homepage.php" class="anchor">
                <li>HOME</li>
            </a>
            <a href="./2_Aboutus.php" class="anchor">
                <li>ABOUT US</li>
            </a>
            <a href="./3_Ourwork.php" class="anchor">
                <li>OUR WORK</li>
            </a>
            <a href="./4_Donorspage.php" class="anchor">
                <li>DONORS</li>
            </a>

        </ul>
    </div>


    <div class="donationformcontainer" id="requestform">
        <div class="closedonationform" onclick="closerequestform()">
            <!-- &times; -->
            CLOSE
        </div>
        <form class="imdonationform" id="imdonation">
            <div class="formhead">
                REQUEST FORM
            </div>
            <div class="flexform">
                <div class="subfield">
                    <label for="fname" class="labelf">Full name :</label><br>
                    <input type="text" id="fname" class="inputf" name="fname" placeholder="Enter your Name"><br>
                </div>
                <div class="subfield">
                    <label for="lname" class="labelf">Phone number :</label><br>
                    <input type="tel" id="lname" class="inputf" name="lname" placeholder="Enter your 10 digit mobile number"><br>
                </div>
            </div>
            <label for="fmealno" class="labelf">How many plates of food :</label><br>
            <input type="number" id="fmealno" class="inputf" name="mealno" placeholder="Minimum 20" min="20"><br>
            <label for="address" class="labelf">Where are you :</label><br>
            <input type="text" id="faddress" class="inputf" name="adress" placeholder="Enter your address"><br>
            <br>
            <center> <input type="submit" class="btn-grad" value="REQUEST"></center>
        </form>
    </div>

    <div class="sidebutton" id="sidebtn">
        <a href="./requestform.php"> <button class="btn-grad2">
                Request
            </button></a>
        <a href="./donationform.php"> <button class="btn-grad2">
                Donate
            </button></a>
        <button class="cross" onclick="closesidebutton()">
            🡨
        </button>
    </div>
    <a href="#Top"><button id="toptopage"><img src="https://img.icons8.com/external-flatart-icons-lineal-color-flatarticons/40/000000/external-up-arrow-arrows-flatart-icons-lineal-color-flatarticons-3.png" /></button></a>
    
    <script>
        let nav = document.querySelector("nav")
        window.onscroll = () => {
            if (window.scrollY >= 200) {
                nav.classList.add("active")
                document.getElementById("toptopage").style.transform = 'translateX(0%) ';
                document.getElementById("sidebtn").style.transform = 'translateX(0%) ';

            } else {
                nav.classList.remove("active")
                document.getElementById("toptopage").style.transform = 'translateX(200%) rotate(180deg)';
                document.getElementById("sidebtn").style.transform = 'translateX(-200%) ';
            }
        };

        function openform() {
            document.getElementById("popupform").style.transform = 'translateY(0%)';
            document.getElementById("closeham").style.display = 'none';
            document.getElementById("openclosebtn").style.display = 'inline-block';
        }

        function closeform() {
            document.getElementById("popupform").style.transform = 'translateY(-300%)';
            document.getElementById("closeham").style.display = 'inline-block';
            document.getElementById("openclosebtn").style.display = 'none';
        }

        function closesidebutton() {
            document.getElementById('sidebtn').style.transform = 'translateX(-200%)';
        }
    </script>
</body>

</html>