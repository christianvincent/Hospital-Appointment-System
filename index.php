<?php

$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = $_POST['number'];
   $date = $_POST['date'];

   $insert = mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, date) VALUES('$name','$email','$number','$date')") or die('query failed');

   if($insert){
      $message[] = 'appointment made successfully!';
   }else{
      $message[] = 'appointment failed';
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
            <a href="#review">review</a>
            <a href="#blogs">blogs</a>
        </nav>

</header>


<!-- home section starts  -->

<section class="home" id="home">

    <div class="image">
        <img src="home-img.svg" alt="">
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
            <img src="about-img.svg" alt="">
        </div>

        <div class="content">
            <h3>take the world's best quality treatment</h3>
            <p>Welcome to MedAppoint, your all-in-one platform for seamless scheduling and appointment management in the healthcare industry. Our website is designed to bridge the gap between hospitals and patients, providing a user-friendly interface that simplifies the appointment process</p>
            <p>At MedAppoint, we understand the importance of efficient healthcare services and the need for patients to easily access and manage their appointments. Our platform empowers patients with the ability to conveniently schedule appointments, reschedule or cancel them, all from the comfort of their homes. We aim to save your time and streamline the healthcare experience.</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
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
            <a href="free_checkups.php" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-ambulance"></i>
            <h3>24/7 ambulance</h3>
            <p>Emergency ambulance service available round the clock.</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-user-md"></i>
            <h3>expert doctors</h3>
            <p>LReceive care from our highly qualified and dedicated doctors.</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-pills"></i>
            <h3>medicines</h3>
            <p>Access a wide range of quality medications for your health needs.</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-procedures"></i>
            <h3>bed facility</h3>
            <p>Experience comfort and rest in our modern bed facilities.</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-heartbeat"></i>
            <h3>total care</h3>
            <p>Receive comprehensive care tailored to your unique needs.</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-calendar-alt"></i>
            <h3>Convenient Scheduling</h3>
            <p>Easily book appointments online with our user-friendly scheduling system.</p>
            <a href="#" class="btn">Learn More <span class="fas fa-chevron-right"></span></a>
        </div>
        
        <div class="box">
            <i class="fas fa-clock"></i>
            <h3>Efficient Time Management</h3>
            <p>Streamline your schedule and optimize resource allocation with our efficient time management tools.</p>
            <a href="#" class="btn">Learn More <span class="fas fa-chevron-right"></span></a>
        </div>

    </div>

</section>

<!-- services section ends -->

<!-- doctors section starts  -->

<section class="doctors" id="doctors">

    <h1 class="heading"> our <span>doctors</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="doc1.jpg" alt="">
            <h3>Dr. Ida Tacata</h3>
            <span>Cardiologist</span>
            <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="doc3.jpg" alt="">
            <h3>Dr. Rouel Mateo M. Azores</h3>
            <span>General Surgeon</span>
            <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="doc4.jfif" alt="">
            <h3>Dr. Consuelo Amparo De Vera</h3>
            <span>Orthopaedic Surgeon</span>
            <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>
        <div class="box">
            <img src="doc5.jpg" alt="">
            <h3>Dr. Ramon Carlos Miguel Alemany</h3>
            <span>Neuro-surgeon</span>
            <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>
        <div class="box">
            <img src="doc7.jpg" alt="">
            <h3>Dr. Aurelia Leus</h3>
            <span>Cardiologist</span>
            <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>
        <div class="box">
            <img src="doc8.jpg" alt="">
            <h3>Dr. Maria Corazon Avancena</h3>
            <span>Pediatric</span>
            <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>
        <div class="box">
            <img src="doc9.jpg" alt="">
            <h3>Dr. Ma. Teresa B. Abola</h3>
            <span>Cardiologist</span>
            <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>
        <div class="box">
            <img src="doc10.jpg" alt="">
            <h3>Dr. Tito G. Garrido</h3>
            <span>General Surgeon</span>
            <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>



    </div>

</section>

<!-- doctors section ends -->

<!-- appointmenting section starts   --> 
<section class="appointment" id="appointment">

    <h1 class="heading"> <span>Appointment</span> Now </h1>    

    <div class="row">

        <div class="image">
            <img src="appointment-img.svg" alt="">
        </div>

        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
            <?php
                if(isset($message)) {
                    foreach($message as $message) {
                    echo'<p class ="message">'.$message.'</p>';
                }
                }
            ?>
                
            
            <h3>Make an Appointment</h3>
            <input type="text" name="name" placeholder="Your name" class="box">
            <input type="number" name="number" placeholder="Your number" class="box">
            <input type="email" name="email" placeholder="Your email" class="box">
            <input type="date" name="date" class="box">
            <input type="submit" name="submit" value="Appointment Now" class="btn">
        </form>

    </div>
</section>
<!-- appointmenting section ends -->

<!-- review section starts  -->

<section class="review" id="review">
    
    <h1 class="heading">Client's <span>Review</span></h1>

    <div class="box-container">

        <div class="box">
            <img src="review1.jpg">
            <h3>Lisa Johnson</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <p class="text">I had an amazing experience using MedAppoint! The appointment process was quick and hassle-free, and the staff was incredibly friendly and helpful. I highly recommend this platform for scheduling medical appointments.</p>
        </div>

        <div class="box">
            <img src="review2.jfif" alt="">
            <h3>Maria Santos</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <p class="text">Napaka-simpleng gamitin ng MedAppoint! Malinis at maayos ang serbisyo, at ang mga doktor ay napakahusay. Napaaga ang aking pagpapagamot at malaki ang pasasalamat ko sa kanila.</p>
        </div>

        <div class="box">
            <img src="review3.jpg" alt="">
            <h3>John Smith</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <p class="text">I had a great experience with MedAppoint! The appointment system is easy to use, and the doctors are highly professional and knowledgeable. I highly recommend their services.</p>
        </div>

       
    </div>

</section>


<!-- review section ends -->

<!-- blogs section starts  -->

<section class="blogs" id="blogs">

    <h1 class="heading"> our <span>blogs</span> </h1>

    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="blog6.jpeg" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"><i class="fas fa-calendar"></i> 10 April, 2021</a>
                    <a href="#"><i class="fas fa-user"></i> by Jessica Anderson</a>
                </div>
                <h3>The Benefits of Eating Healthy Food</h3>
                <p>Discover the importance of maintaining a healthy diet and how it can improve your overall well-being. Learn about the nutrients and advantages of incorporating nutritious foods into your meals.</p>
                <a href="#" class="btn">Learn More <span class="fas fa-chevron-right"></span></a>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="blog2.jpg" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"><i class="fas fa-calendar"></i> 15 January, 2022</a>
                    <a href="#"><i class="fas fa-user"></i> by Emily Smith</a>
                </div>
                <h3>The Importance of Mental Health Awareness</h3>
                <p>Gain insights into the significance of mental health awareness and the impact it has on individuals. Explore ways to prioritize mental well-being and foster a supportive environment for mental health.</p>
                <a href="#" class="btn">Learn More <span class="fas fa-chevron-right"></span></a>
            </div>
        </div>
        
        <div class="box">
            <div class="image">
                <img src="blog3.jpg" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"><i class="fas fa-calendar"></i> 10 February, 2020</a>
                    <a href="#"><i class="fas fa-user"></i> by John Fritz</a>
                </div>
                <h3>Tips for a Restful Night's Sleep</h3>
                <p>Uncover effective strategies and techniques for achieving a restful night's sleep. Learn about the importance of quality sleep and discover practical tips to improve your sleep hygiene.</p>
                <a href="#" class="btn">Learn More <span class="fas fa-chevron-right"></span></a>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="blog 4.webp" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"><i class="fas fa-calendar"></i> 21 November, 2022</a>
                    <a href="#"><i class="fas fa-user"></i> by Alex Rey</a>
                </div>
                <h3>Exploring the Benefits of Regular Exercise</h3>
                <p>Delve into the numerous benefits of incorporating regular exercise into your lifestyle. Discover how physical activity can boost your physical and mental health, enhance energy levels, and improve overall well-being.</p>
                <a href="#" class="btn">Learn More <span class="fas fa-chevron-right"></span></a>
            </div>
        </div>
    </div>

</section>

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
            <a href="#review"> <i class="fas fa-chevron-right"></i> review </a>
            <a href="#blogs"> <i class="fas fa-chevron-right"></i> blogs </a>
        </div>

        <div class="box">
            <h3>our services</h3>
            <a href="#"> <i class="fas fa-chevron-right"></i> dental care </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> message therapy </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> cardioloty </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> diagnosis </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> ambulance service </a>
        </div>

        <div class="box">
            <h3>appointment info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +8801688238801 </a>
            <a href="#"> <i class="fas fa-phone"></i> +63 2 123 4567 </a>
            <a href="#"> <i class="fas fa-envelope"></i> MedAppoint@gmail.com</a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Manila, Philippines</a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#"> <i class="fab fa-faceappointment-f"></i> faceappointment </a>
            <a href="#"><i class="fab fa-facebook"></i> Facebook</a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
            <a href="#"> <i class="fab fa-pinterest"></i> pinterest </a>
        </div>

    </div>

    <div class="credit"><span>MedAppoint</span> | all rights reserved </div>

</section>

<!-- footer section ends -->


<!-- js file link  -->
<script src="js/script.js"></script>

</body>
</html>
