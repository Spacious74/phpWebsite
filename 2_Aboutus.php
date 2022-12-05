<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/8ef334e6c6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./2_Aboutus.css?php echo time(); ?>" type="text/css">
    <link rel="icon" href="./icons/plate.png">
    <title>FoodServer.com</title>
</head>

<body>
    <?php include 'navbar.php' ?>

    <!-- Main section of aboutus  -->
    <div class="maincontainer">
        <div class="imagecontainer">
            <img src="./images/charity.png" alt="mainimage" class="imimage">
        </div>
        <div class="maintext">
            <p class="quotation"><i class="fas fa-quote-left"></i> Food server is giving it's services from year 2000,
                <span class="fancy-underline"> with motive of killing
                    starvation from the world.
                </span> <i class="fas fa-quote-right"></i>
            </p>
        </div>
    </div>

    <!-- About us section -->
    <div class="aboutuscont">
        <div class="textofabout">
            <div class="abouthead">
                About us
            </div> <br>
            <p style="text-align: justify;">
                The Food Server Foundation is an NGO in India headquartered in Bengaluru. Our organisation strives to
                eliminate classroom hunger by implementing the Mid-Day Meal Scheme in the government schools and
                government-aided schools.
                <br> <br>
                Since 2000, Food Server has been concerting all its efforts towards providing fresh and nutritious
                meals to children on every single school day. We are continuously leveraging technology to multiply our
                reach. The state-of-the-art kitchens have become a subject of study and have attracted curious visitors
                from around the world.
                <br> <br>
                Today, Food Server is the world’s largest (not-for-profit run) Mid-Day Meal Programme serving
                wholesome food every school day to over 1.8 million children from 19,039 schools across 13 states & 1
                Union territory of India.
            </p>
        </div>
        <div class="imageofabout">
           <img src="./images/FS.png" alt="mainimage" class="image">
           <img src="./images/Second.png" alt="mainimage" class="image2">

        </div>
    </div>

    <!-- Our Growth section -->

    <div class="growthcontainer">
        <div class="growthimage">
            <img src="./images/growthimage.jpg" alt="" class="gimage">
        </div>
        <div class="growthtext">
            <div class="abouthead">
                Our Growth
            </div>
            <br>
            <p style="text-align: justify;">
                On 28 November 2001, the Supreme Court of India passed a mandate, "Cooked mid-day meal is to be provided in
                all the Government and Government-aided primary schools in all the states." And, Food Server was also
                called upon to provide testimonies to the Supreme Court.
                <br><br>
                By the time the Ministry of Human Resource Development - Department of School Health and Education extended
                its support to the initiative in 2003, Akshaya Patra was already reaching out to 23,000 children.
                <br><br>
                Today, Food Server has 58 kitchens spread across 13 states & 1 Union territories of India, a result of the
                successful partnership with the Government of India, various State Governments and generous supporters
            </p>
        </div>
    </div>

    <!-- Meet the team -->
    <div class="verifyhead">
        Meet our Food Verifiers
    </div>
    <div class="teammembers">
        <div class="card">
            <img src="./images/foodinspector11.jpg" alt="image1" class="cardimg" width="80%">
            <div class="cardtext">
                <h2>Josefin Sans</h2>
                <p class="cardpara">
                <h3>Chief food inspector.</h3>
                - from FSSAI.
                </p>
            </div>
        </div>
        <div class="card">
            <img src="./images/foodinspector12.jpg" alt="image1" class="cardimg" width="80%">
            <div class="cardtext">
                <h2>Andrew Tyre</h2>
                <p class="cardpara">
                <h3>Food quality analyser.</h3>
                - from FSSAI.
                </p>
            </div>
        </div>
        <div class="card">
            <img src="./images/foodinspector13.jpg" alt="image1" class="cardimg" width="80%">
            <div class="cardtext">
                <h2>Emily Rose</h2>
                <p class="cardpara">
                <h3>Wasted food analyser.</h3>
                - from FAO.
                </p>
            </div>
        </div>
        <div class="card">
            <img src="./images/foodinspector14.jpg" alt="image1" class="cardimg" width="80%">
            <div class="cardtext">
                <h2>Mike Tyson</h2>
                <p class="cardpara">
                <h3>Food quality analyser.</h3>
                - from FAO.
                </p>
            </div>
        </div>
    </div>

    <!-- footer section -->
    <?php include 'footer.php' ?>
</body>

</html>