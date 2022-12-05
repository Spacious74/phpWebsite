<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./4_Donorspage.css?php echo time(); ?>">
    <script src="https://kit.fontawesome.com/8ef334e6c6.js" crossorigin="anonymous"></script>
    <link rel="icon" href="./icons/plate.png">
    <title>FoodServer.com</title>
</head>
<body>
<?php include 'navbar.php'; ?>

    <!-- Main section of donor -->
    <div class="maincontainer">
        <div class="imagecont">
            <img src="./images/fooddonor-removebg-preview.png" alt="main image" class="imimage">
        </div>
        <div class="textofmain">
            A big <span class="thank fancy-underline">thankyou</span> to our every donor.
        </div>
    </div>

    <!-- Donor pledge -->
    <div class="donorhead">
        <i class="far fa-hand-paper"></i> Our pledge to donor
    </div>
    <div class="donorpledgecont">
   <p class="list"> Because you have a desire to give,
    We have an opportunity to fulfill that desire. </p>
        
   <p class="list"> Because you have choice in charitable giving,
    Our service must be superior. </p>
        
   <p class="list"> Because you have a sense of urgency,
    We must act promptly. </p>
        
   <p class="list"> Because you have expectations,
    We must exceed them. </p>
        
   <p class="list"> Because you have memory,
    We must provide exceptional experiences. </p>
    <p class="list" style="font-size: 1.8rem; font-family: 'verdana';"> Because of you,<span class="fancy-underline">Food Server</span> exist!  </p>
    </div>
<!-- Our impact   -->
<div class="donorhead">
    Our impact
</div>
<div class="impactcont">
   
        <div class="meals" >
            <img src="./images/foodvirus.png" alt="img2" class="imageofimpact">
            <p class="caption"><span style="color:blue;"> 20-crore </span><br> C19-relief meals served</p>
        </div>
        <div class="meals" >
            <img src="./images/total meals.png" alt="" class="imageofimpact">
            <p class="caption"><span style="color:blue;"> 100-crore</span> <br>plus total meals served</p>
        </div>
        <div class="meals" >
            <img src="./images/totalpeoples.png" alt="" class="imageofimpact">
            <p class="caption"><span style="color:blue;"> 90%-Peoples</span><br>served from the total</p>
        </div>
        <div class="meals" >
            <img src="./images/foodwithboyandgirl.png" alt="" class="imageofimpact">
            <p class="caption"><span style="color:blue;"> 20-crore </span><br> Mid-day meals served </p>
        </div>
        <div class="meals" >
            <img src="./images/happykit.png" alt="" class="imageofimpact">
            <p class="caption"><span style="color:blue;"> 1-Lakh </span><br> Happiness Kits donated</p>
        </div>
    
</div>
<!-- Our regular donors -->
    <div class="donorhead">
        Our Regular donors
    </div>
    <div class="regulardonors">
        <marquee behavior="scroll" scrollamount="10" loop="20" broder=0 loop="1000">
        <?php 
        for ($i=0;$i<=50;$i++){
           echo "
           <img src='./logos/burger_king_PNG17.png' alt='img1' class='scrollimg'>
           <img src='./logos/kfc.png' alt='img1' class='scrollimg' >
           <img src='./logos/mcdonalds_PNG22.png' alt='img1' class='scrollimg' >
           <img src='./logos/papa-johns-png-5065.png' alt='img1' class='scrollimg' >
           <img src='./logos/pizza-hut-png-logo-3806.png' alt='img1' class='scrollimg' >
           <img src='./logos/starbucks.png' alt='img1' class='scrollimg' >
           <img src='./logos/the cheesecake.png' alt='img1' class='scrollimg' >
           ";
        }
    ?>
        </marquee>
    </div>
   

    <?php include 'footer.php'; ?>
</body>
</html>