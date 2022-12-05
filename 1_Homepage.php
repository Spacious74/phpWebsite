<?php 
    session_start();
    if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true){
        header('location: Firstpage.php');
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./1_Homepage.css">
    <script src="https://kit.fontawesome.com/8ef334e6c6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="Crousel.js">
    <link rel="icon" href="./icons/plate.png">
    <title>FoodServer.com</title>
</head>

<body>
    <a id="Top"></a>
    <!-- This is the main section of image and text -->
<?php 
  include('navbar.php'); 
?>


    <div class="main">
        <div class="text">
            <p class="heading"> Donate food <br> <span class="animation">
                    <h1>
                        <a href="" class="typewrite" data-period="2000" data-type='[ "Save lives.", "Do not Waste food.", "Kill Starvation.", "Kill Hunger." ]'>
                            <span class="wrap"></span>
                        </a>
                    </h1>
                </span></p>
            <br> <br>
            <p class="paratext">
                We Care about the well-being of Indian Needy Families. Take Action Now by Donating or Volunteering.
                We Care About Poverty.</p>
            </p> <br>
            <span style=" font-size: 2rem; ">🥘 Meals served till today <span class="number" data-target="35640"> 0</span></span>
            <div class="btns">
                <button class="btn-grad" onclick="openrequestform()">
                  <a href="requestform.php">  <div>Request</div></a>
                </button>
                <button class="btn-grad" onclick="opendonationform()">
                   <a href="donationform.php"> <div>Donate</div></a>
                </button>
            </div>
        </div>
        <div class="mainimage">
            <img src="./images/onlymainimage.png" alt="image" class="image">
        </div>
    </div>


    <script>
        var TxtType = function(el, toRotate, period) {
            this.toRotate = toRotate;
            this.el = el;
            this.loopNum = 0;
            this.period = parseInt(period, 10) || 2000;
            this.txt = '';
            this.tick();
            this.isDeleting = false;
        };

        TxtType.prototype.tick = function() {
            var i = this.loopNum % this.toRotate.length;
            var fullTxt = this.toRotate[i];

            if (this.isDeleting) {
                this.txt = fullTxt.substring(0, this.txt.length - 1);
            } else {
                this.txt = fullTxt.substring(0, this.txt.length + 1);
            }

            this.el.innerHTML = '<span class="wrap">' + this.txt + '</span>';

            var that = this;
            var delta = 200 - Math.random() * 100;

            if (this.isDeleting) {
                delta /= 2;
            }

            if (!this.isDeleting && this.txt === fullTxt) {
                delta = this.period;
                this.isDeleting = true;
            } else if (this.isDeleting && this.txt === '') {
                this.isDeleting = false;
                this.loopNum++;
                delta = 500;
            }

            setTimeout(function() {
                that.tick();
            }, delta);
        };

        window.onload = function() {
            var elements = document.getElementsByClassName('typewrite');
            for (var i = 0; i < elements.length; i++) {
                var toRotate = elements[i].getAttribute('data-type');
                var period = elements[i].getAttribute('data-period');
                if (toRotate) {
                    new TxtType(elements[i], JSON.parse(toRotate), period);
                }
            }
            // INJECT CSS
            var css = document.createElement("style");
            css.type = "text/css";
            css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
            document.body.appendChild(css);
        };
    </script>

    <div class="vandmcontainer">
        <section class="vandm">
            <div class="heading" style="border: dashed 2px black; width: 98%; margin: auto; ">
                THE FOOD SERVER
            </div>
            <div class="vmtext">
                The Food Server Foundation is a not-for-profit organisation headquartered in Bengaluru, India. The
                Foundation strives to eliminate classroom hunger by implementing the Mid-Day Meal Programme. It provides
                nutritious meals to children studying in Government schools and Government-aided schools. Food Server also
                aims to counter malnutrition and support right to education of children hailing from socio-economically
                challenging backgrounds.
            </div>
            <div class="vmsection">
                <div class="vision">
                    <div class="heading">Our Vision</div>
                    No child in India shall be deprived of education because of hunger.
                </div>
                <div class="vision">
                    <div class="heading">Our Mission</div>
                    To feed more than 5 million children by 2025.
                </div>
            </div>
        </section>
    </div>

    <div class="video">
        <div class="videotext">
            <p class="big">Let's talk about</p>
            <p>Food waste is a massive global problem. In fact, if food waste were a country, it would be the
                third-largest emitter of greenhouse gases, right after the USA and China.</p>
            <p class="highlight">
                <span class="fancy-undeline"> According to the ministry of consumer affairs, food
                    and public distribution, between 2017 and 2020,
                    11,520 tonnes of food grains stored in government godowns rotted. The Hunger Watch survey in
                    December
                    2020 said 27% of Indians often went to bed hungry during the COVID-19 lockdown.</span>
            </p>
        </div>
        <div class="video-container">
            <video controls class="imvideo">
                <source src="./videos/foodvideo.webm" type="video/webm" poster="./images/1.png">
                your browser does not support html video.
            </video>
        </div>
    </div>

    <!-- This is the facts section -->
    <div class="fact-container">
        <div class="factbox">
            <div class="factsimage">
                <a href="https://cdn.statcdn.com/Infographic/images/normal/24350.jpeg"> <img src="./images/factillustratin.jpg" alt="did you know" class="imfactimg"></a>
            </div>
            <ol class="facts">
                <p class="big">Data Analysis </p>
                <li>1. We waste about 7.6 million tonnes of food each year. 70% of this is perfectly edible.</li>
                <li>2. Food waste costs our economy $36.6 billion a year.</li>
                <li>3. Wholesome food that is currently wasted could help feed families in need.</li>
                <li>4. More than 25 million hectares of land is wasted to grow that is not eaten.</li>
                <li>5. So many people died due to starvation yet many people waste food and throw it into dustbin.</li>
                <a href="#" style="color: tomato;">← Click image to checkout official image</a>
            </ol>
        </div>
    </div>

    <div class="data-container">
        <div class="heading">Our Impact</div>
        <div class="todata">
            <span class="text">Total number of meals served till today -</span> <span class="number" data-target="34546"> 0</span>
        </div>
        <div class="twodata">
            <div class="adults">
                <img src="./images/adultfood2.jpg" alt="" class="vectorimage"><br>
                <div><span class="number" style="font-size:3.5rem;">85%</span><br> Adults served</div>
            </div>
            <div class="childrens">
                <img src="./images/child4.jpg" alt="" class="vectorimage"><br>
                <div><span class="number" style="font-size:3.5rem;">14%</span><br> Childrens served</div>
            </div>
        </div>
    </div>

    <script>
        const todata = document.querySelectorAll('.number');
        const speed = 200;
        todata.forEach(number => {
            const updatecount = () => {
                const target = +number.getAttribute('data-target');
                const count = +number.innerText;
                const inc = target / speed;
                if (count < target) {
                    number.innerText = count + parseInt(inc);
                    setTimeout(updatecount, 1);
                } else {
                    count.innerText = target;
                }
            }
            updatecount();
        });
    </script>


    <div class="slideshowcontainer">
        <p class="big">Our Recent Moments</p>
        <div class="slideshow">
            <button class="slidebutton leftbutton">&#10094;</button>
            <div class="slidetrack_container">
                <ul class="slidetrack">
                    <li class="slides currentslide">
                        <img src="./imagegallery/image4.jpg" alt="" class="slideimage">
                        <span class="imagetext">This is the text</span>
                    </li>
                    <li class="slides">
                        <img src="./images/slide12.jpg" alt="" class="slideimage">
                    </li>
                    <li class="slides">
                        <img src="./images/slide13.jpg" alt="" class="slideimage">
                    </li>
                    <li class="slides">
                        <img src="./images/slide14.jpg" alt="" class="slideimage">
                    </li>
                    <li class="slides">
                        <img src="./imagegallery/image5.jpg" alt="" class="slideimage">
                    </li>
                    <li class="slides">
                        <img src="./imagegallery/image6.jpg" alt="" class="slideimage">
                    </li>
                    <li class="slides">
                        <img src="./imagegallery/image11.jpg" alt="" class="slideimage">
                    </li>
                    <li class="slides">
                        <img src="./imagegallery/image8.jpg" alt="" class="slideimage">
                    </li>
                    <li class="slides">
                        <img src="./imagegallery/image12.jpg" alt="" class="slideimage">
                    </li>
                    <li class="slides">
                        <img src="./imagegallery/image14.jpg" alt="" class="slideimage">
                    </li>
                </ul>
            </div>
            <button class="slidebutton rightbutton">&#10095;</button>
            <div class="slideshownav">
                <button class="slideindicator currentslide"></button>
                <button class="slideindicator"></button>
                <button class="slideindicator"></button>
                <button class="slideindicator"></button>
                <button class="slideindicator"></button>
                <button class="slideindicator"></button>
                <button class="slideindicator"></button>
                <button class="slideindicator"></button>
                <button class="slideindicator"></button>
                <button class="slideindicator"></button>
            </div>
        </div>
        <script src="Crousel.js"></script>
    </div>


    <div class="areasofserve">
        
        <div class="heading">
            Areas we served
        </div>
        <div class="mapandtext">
            <div class="map">
                <iframe src="https://www.google.com/maps/d/embed?mid=1V1Axu4T5HEgRV7zeSCcJ4E91b83j1jq5&hl=en&ehbc=2E312F" class="framemap"></iframe>
            </div>
            <div class="maptext">
                <ul class="locations">
                    <li>Govind Nagar</li>
                    <li>Ashok Nagar</li>
                    <li>Barra</li>
                    <li>Civil Lines</li>
                    <li>VIP Road</li>
                    <li>Hazratganj</li>
                    <li>Indira Nagar</li>
                    <li>Sector-14</li>
                    <li>Mahanagar</li>
                    <li>Vasant kunj</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="iandvhead">
        Images and Videos
    </div>
    <div class="imageandvideo">
        <a href="./imagegallery.php" class="imagegallery album">
            <img src="./images/onlycamera.png" alt="#" class="imimage">
            <p class="captiontext" style="margin-top: -6%;"> Image Gallery</p>
        </a>
        <a href="./videogallery.php" class="videoalbum album">
            <img src="./images/onlyvc2_ccexpress.png" alt="#" class="imimage">
            <p class="captiontext">Videos</p>
        </a>
    </div>
    <?php include 'footer.php'; ?>
</body>

</html>