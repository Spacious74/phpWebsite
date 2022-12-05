<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/8ef334e6c6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./3_Ourwork.css?php echo time(); ?>">
    <link rel="icon" href="./icons/plate.png">
    <title>FoodServer.com</title>
</head>

<body>
    <?php include 'navbar.php'; ?>

    <div class="mainimage">
        <div class="img2">
            <img src="./images/ourworkimage.jpg" alt="Main image" class="workimg">
        </div>
        <div class="textsection">
            <p class="quotation"><i class="fas fa-quote-left"></i> Our work is as simple as that, <span
                    class="fancy-underline">to give smile on every hunger's face
                </span> <i class="fas fa-quote-right"></i> </p>
        </div>
    </div>

    <!-- Help and verify section -->

    <center><hr width="40%" color="black"></center>

    <div class="head">
        How we help and verify ?
    </div>
    <div class="verification">
        <div class="helping">
            <div class="heading">
                How we <span
                    style="background-color: rgba(7, 143, 197, 0.726) ; color: white; padding: 5px; border-radius: 3px;">
                    Help</span> ?
            </div>
            <ol class="processlist">
                <li>We recieved the food donated with untouchablity of food and heigine.</li>
                <li>We are using best storage units to store the food.</li>
                <li>Our strict verification process gives the food green light or red light.</li>
                <li>After verification we are going to donate the verified food only.</li>
                <li>Needy people's satisfaction is our last step to donate the food.</li>
            </ol>
        </div>
        <div class="verify">
            <div class="heading">
                What we <span
                    style="background-color: rgba(7, 143, 197, 0.726); color: white; padding: 5px; border-radius: 3px;">verify</span>?
            </div>
            <ol class="processlist">
                <li>Food should not be staled.</li>
                <li>Span time after cooking of food should not more than 6 hours.</li>
                <li>Should be made with hygein and fresh vegitables.</li>
                <li>Food will accepted after verification of food doctors in our organisation.</li>
                <li>Donated food will be rejected if any of the factors is missing.</li>
            </ol>
        </div>
    </div>

    <!-- Data analysis -->

    <center><hr width="40%" color="black"></center>

    <div class="reports">
        <div class="head">
            Food Reports
        </div>
        <div class="reporthead">
            Total no. of meals checked- <span style="color: rgb(0, 24, 102);"> 23,450</span>
        </div>
        <div class="rep">
            <div class="verifiedr">
                <i class="far fa-check-circle" style="color: green;"></i> 19543 Verifed.
            </div>
            <div class="rejectedr">
                <i class="far fa-times-circle" style="color: red;"></i> 3907 Rejected.
            </div>
        </div>
    </div>

    <!-- Disaster response section -->

    <center><hr width="40%" color="black"></center>

    <div class="head">
        Disaster response
    </div>
    <div class="disaster">
        <div class="video-container">
            <video controls class="imvideo">
                <source src="./videos/foodvideo2.webm" type="video/webm">
                your browser does not support html video.
            </video>
        </div>
        <div class="textofvideo">
            <h2>At the time of COVID-19</h2> <br>
            <p class="vtext">
                We are serving at the time of covid in different areas
                and there are millions of peoples who needed the food
                . Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magnam assumenda iusto pariatur eius velit
                quam doloremque earum. <br><br> Odit rem assumenda veniam architecto illo iste nulla cupiditate excepturi, maxime
                suscipit reprehenderit, velit quisquam amet, quasi repellendus corrupti similique provident consequatur
                voluptates facilis iusto! Nisi cum, iure quasi asperiores ducimus consequatur laborum.
            </p>
        </div>
    </div>

    <!-- Footer section  -->
    <?php include 'footer.php'; ?>
</body>

</html>