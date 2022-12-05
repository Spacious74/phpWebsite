<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="videogallery.css">
    <link rel="icon" href="./icons/plate.png">
    <title>FoodServer.com</title>
</head>
<body>
    <?php include 'navbar.php' ?>
    <div class="mainimage">
        <img src="./imagegallery/videoimage.png" alt="This is main image" class="immain">
        <div class="caption">Capturing Live...</div>
    </div>
    <div class="table">
        <div class="videocell">
            <div class="videocell1">
                <video class="imvideo" controls>
                    <source src="./videos/foodvideo.webm" type="video/webm">
                </video>
                <div class="videotext">Introducing Food Server</div>
            </div>
            <div class="videocell1">
                <video class="imvideo" controls>
                    <source src="./videos/foodvideo2.webm" type="video/webm">
                </video>
                <div class="videotext">Introducing Campaign</div>
            </div>
        </div>
    </div>
    <?php include 'footer.php' ?>
</body>
</html>