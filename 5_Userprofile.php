<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
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
    <link rel="stylesheet" href="./5_Userprofile.css?<?php echo time(); ?>">
    <link rel="icon" href="./icons/plate.png">
    <title>FoodServer.com</title>
</head>

<body>
    <?php
    include './navbar.php'
    ?>

    <div class="main">
        <div class="imagecontainer">
            <img src="https://img.icons8.com/external-bearicons-glyph-bearicons/500/ffffff/external-User-essential-collection-bearicons-glyph-bearicons.png" class="image" />
        </div>
        <div class="textcontainer">
            Hello! <?php echo $_SESSION["username"];  ?>

            <?php
            include('connection.php');
            $query = "SELECT * FROM donordetails;";
            $data = mysqli_query($conn, $query);
            $total = mysqli_num_rows($data);
            if ($total != 0) {
                $old = 0;
                while ($result = mysqli_fetch_assoc($data)) {
                    if($result['UniqueID'] == $_SESSION['userid']){
                        $old = $result['NoOfPlates'] + $old;
                    }
                    
                }
                echo '<p class="smalltext">Thankyou for donating ' . $old . ' meals.</p>';
            } else {
                echo '<p class="smalltext">Not a meal donated yet</p>';
            }
            ?>

            <p class="smalltext">User ID : <?php echo $_SESSION["userid"];  ?></p>
            <center>
                <p>
                    <a href="./Firstpage.php"> <input type="submit" value="Logout" class="btn-grad"></a>
                </p>
            </center>
        </div>
    </div>

    <div class="donations">
        <div class="heading">My Donations</div>
        <?php
        include('connection.php');
        $query = "SELECT * FROM donordetails;";
        $data = mysqli_query($conn, $query);
        $total = mysqli_num_rows($data);
        if ($total != 0) {
            while ($result = mysqli_fetch_assoc($data) ) {
                if($result['UniqueID'] == $_SESSION['userid']){
                    echo '
                        <div class="donationbar">
                            <div class="smalltext"> <b>' . $result["NoOfPlates"] . '</b> Meals donated at <div class="number">' . $result["DateTime"] . '</div>
                            </div>
                            <div class="status">STATUS : Verified</div>
                            <div class="status">MEALID: ' . $result['MealID'] . '</div>
                        </div>
                        ';
                }
            }
        } else {
            echo '<center><h1 style = "padding: 20px;"> Not a Donation yet</h1></center>';
        }
        ?>
    </div>
    <?php
    include 'footer.php';
    ?>
</body>

</html>