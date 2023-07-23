<?php

$conn = mysqli_connect('localhost', 'root', '', 'contact_db') or die('connection failed');

$message = array(); // Initialize an empty array to store validation messages

if (isset($_POST['submit'])) {
    // Validate name field
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    if (empty($name)) {
        $message[] = 'Please enter your name.';
    }

    // Validate email field
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    if (empty($email)) {
        $message[] = 'Please enter your email.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message[] = 'Please enter a valid email address.';
    }

    // Validate number field
    $number = $_POST['number'];
    if (empty($number)) {
        $message[] = 'Please enter your number.';
    } elseif (!preg_match('/^\d{11}$/', $number)) {
        $message[] = 'Please enter a 11-digit number.';
    }
    
    // If there are no validation errors, insert the data into the database
    if (empty($message)) {
        $date = $_POST['date'];

        $insert = mysqli_query($conn, "INSERT INTO contact_form (name, email, number, date) VALUES ('$name', '$email', '$number', '$date')") or die('query failed');

        if ($insert) {
            $message[] = 'Appointment made successfully!';
        } else {
            $message[] = 'Appointment failed.';
        }
    }
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Hospital | Appointment System</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header class="header">
        <a href="#" class="logo"> <i class="fas fa-stethoscope"></i> <strong>Med</strong>Appoint</a>


        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#about">about</a>
            <a href="#services">services</a>
            <a href="#doctors">doctors</a>
            <a href="#appointment">appointment</a>
        <a href="Login/login.php" class="btn"> Sign in/ Sign up <span class="fas fa-chevron-right"></span> </a>
        </nav>

</header>


<!-- home section starts  -->

<section class="home" id="home">

    <div class="image">
        <img src="images/home-img.svg" alt="">
    </div>

    <div class="content">
        <h3>From Illness to Wellness, We Journey Together</h3>
        <p>Your Health is Our Priority: Empowering Wellness, Providing Expert Care, and Guiding Your Journey to Lifelong Vitality.</p>
        <a href="#appointment" class="btn"> Set Appointment <span class="fas fa-chevron-right"></span> </a>
    </div>

</section>

<!-- home section ends -->

<!-- icons section starts  -->

<section class="icons-container">

    <div class="icons">
        <i class="fas fa-user-md"></i>
        <h3>200+</h3>
        <p>doctors at work</p>
    </div>

    <div class="icons">
        <i class="fas fa-users"></i>
        <h3>1200+</h3>
        <p>satisfied patients</p>
    </div>

    <div class="icons">
        <i class="fas fa-procedures"></i>
        <h3>500+</h3>
        <p>bed facility</p>
    </div>

    <div class="icons">
        <i class="fas fa-hospital"></i>
        <h3>100+</h3>
        <p>available hospitals</p>
    </div>

</section>

<!-- icons section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <h1 class="heading"> <span>about</span> us </h1>

    <div class="row">

        <div class="image">
            <img src="images/about-img.svg" alt="">
        </div>

        <div class="content">
            <h3>take the world's best quality treatment</h3>
            <p>Welcome to MedAppoint, your all-in-one platform for seamless scheduling and appointment management in the healthcare industry. Our website is designed to bridge the gap between hospitals and patients, providing a user-friendly interface that simplifies the appointment process</p>
            <p>At MedAppoint, we understand the importance of efficient healthcare services and the need for patients to easily access and manage their appointments. Our platform empowers patients with the ability to conveniently schedule appointments, reschedule or cancel them, all from the comfort of their homes. We aim to save your time and streamline the healthcare experience.</p>
            <a href="about.php" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

    </div>

</section>

<!-- about section ends -->

<!-- services section starts  -->

<section class="services" id="services">

    <h1 class="heading"> our <span>services</span> </h1>

    <div class="box-container">

        <div class="box">
            <i class="fas fa-notes-medical"></i>
            <h3>free checkups</h3>
            <p>Get complimentary checkups to prioritize your well-being.</p>
            <a href="services/free_checkups.php" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-procedures"></i>
            <h3>bed facility</h3>
            <p>Experience comfort and rest in our modern bed facilities.</p>
            <a href="services/facilities.php" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-heartbeat"></i>
            <h3>total care</h3>
            <p>Receive comprehensive care tailored to your unique needs.</p>
            <a href="services/care.php" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

    </div>

</section>

<!-- services section ends -->

<!-- doctors section starts  -->
<?php
$q = "SELECT * FROM doctor"; // doctor is the table's name
$doctors = $conn->query($q);
?>
<section class="doctors" id="doctors">

    <h1 class="heading"> our <span>doctors</span> </h1>

    <div class="box-container">
       <?php
        while($row = mysqli_fetch_assoc($doctors)){
       ?>
        <div class="box">
            <?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row['dr_img']).'"alt="">' ?> <!-- the strings under the double quotes depends on the column names of the table -->
            <h3><?php echo $row["name"] ?></h3>
            <span><?php echo $row["specialization"] ?></span>
            <div class="share">
            <a href=<?php echo $row["fb_link"] ?> target="_blank" class="fab fa-facebook-f"></a>
            <a href=<?php echo $row["ig_link"] ?> target="_blank" class="fab fa-instagram"></a>
            <a href=mailto:<?php echo $row["email_link"] ?> target="_blank" class="fa fa-envelope"></a>
            </div>
        </div>
        <?php
        }
        ?>
    </div>
</section>

        <!--<div class="box">
            <img src="doctors/doc3.jpg" alt="">
            <h3>Dr. Rouel Mateo M. Azores</h3>
            <span>General Surgeon</span>
            <div class="share">
            <a href="https://www.facebook.com/rouelmazores" target="_blank" class="fab fa-facebook-f"></a>
            </div>
        </div>

        <div class="box">
            <img src="doctors/doc4.jfif" alt="">
            <h3>Dr. Consuelo Amparo De Vera</h3>
            <span>Orthopaedic Surgeon</span>
            <div class="share">
            <a href="https://www.facebook.com/consuelo.devera.94" target="_blank" class="fab fa-facebook-f"></a>
            </div>
        </div>
        <div class="box">
            <img src="doctors/doc5.jpg" alt="">
            <h3>Dr. Ramon Carlos Miguel Alemany</h3>
            <span>Neuro-surgeon</span>
            <div class="share">
            <a href="https://www.facebook.com/ramoncarlosmiguel.alemany" target="_blank" class="fab fa-facebook-f"></a>
            </div>
        </div>
        <div class="box">
            <img src="doctors/doc7.jpg" alt="">
            <h3>Dr. Aurelia Leus</h3>
            <span>Cardiologist</span>
            <div class="share">
            <a href="https://www.facebook.com/aurelia.leus.3" target="_blank" class="fab fa-facebook-f"></a>
            </div>
        </div>
        <div class="box">
            <img src="doctors/doc10.jpg" alt="">
            <h3>Dr. Tito G. Garrido</h3>
            <span>General Surgeon</span>
            <div class="share">
            <a href="https://www.facebook.com/titogarridomd/" target="_blank" class="fab fa-facebook-f"></a>
            </div>
        </div>-->

<!-- doctors section ends -->

<!-- appointmenting section starts   --> 
<section class="appointment" id="appointment">

    <h1 class="heading"> <span>Appoint</span> Now </h1>    

    <div class="row">

        <div class="image">
            <img src="images/appointment-img.svg" alt="">
        </div>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <?php 
            if(isset($message)) {
                foreach($message as $message) {
                echo'<p class ="message">'.$message.'</p>';
            }
            }

        ?>
            <p class="message"></p>
                
            
            <h3>Make an Appointment</h3>
            <input type="text" name="name" placeholder="Last name, Given name, Middle Initial" class="box">
            <input type="number" name="number" placeholder="Your 11-digit number" class="box">
            <input type="email" name="email" placeholder="Your email" class="box">
            <input type="date" name="date" class="box">
            <input type="submit" name="submit" value="Appointment Now" class="btn">
        </form>

    </div>
</section>
    </div>

</section>

<!-- appointmenting section ends -->

<!-- review section starts  -->




<!-- review section ends -->

<!-- blogs section starts  -->



<!-- blogs section ends -->

<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>quick links</h3>
            <a href="#home"> <i class="fas fa-chevron-right"></i> home </a>
            <a href="#about"> <i class="fas fa-chevron-right"></i> about </a>
            <a href="#services"> <i class="fas fa-chevron-right"></i> services </a>
            <a href="#doctors"> <i class="fas fa-chevron-right"></i> doctors </a>
            <a href="#appointment"> <i class="fas fa-chevron-right"></i> appointment </a>
        </div>

        <div class="box">
            <h3>our services</h3>
            <a href="services/free_checkups.php"> <i class="fas fa-chevron-right"></i> Free Checkups </a>
            <a href="services/facilities.php"> <i class="fas fa-chevron-right"></i> Bed Facility </a>
            <a href="services/care.php"> <i class="fas fa-chevron-right"></i> Total Care </a>
        </div>

        <div class="box">
            <h3>appointment info</h3>
            <a href="#"> <i class="fas fa-envelope"></i> medappoint.sd5@gmail.com</a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Manila, Philippines</a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#"><i class="fab fa-facebook"></i> Facebook</a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
        </div>

    </div>

    <div class="credit"><span>MedAppoint</span> | all rights reserved </div>

</section>

<!-- footer section ends -->


<!-- js file link  -->
<script src="js/script.js"></script>

</body>
</html>