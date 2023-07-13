<?php
// Retrieve necessary data from the database or any other source
$checkupTitle = "24/7 Ambulance";
$checkupDescription = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla scelerisque elit quis ex gravida, ac tincidunt massa efficitur.";
$checkupSchedule = "Open 24/7";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Free Checkups</title>
    <!-- Add any necessary CSS or JavaScript files -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style> 

        /* Global Styles */
        :root{
            --green:#3EB489;
            --black:#444;
            --light-color:#111;
            --box-shadow:.5rem .5rem 0 rgba(22, 160, 133, .2);
            --text-shadow:.4rem .4rem 0 rgba(0, 0, 0, .2);
            --border:.2rem solid var(--green);
        }
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            outline: none;
            border: none;
            text-transform: capitalize;
            transition: all .2s ease-out;
            text-decoration: none;
            background: #f2f2f2;
            color: #333;
        }

        /* Header Styles */
        .header {
            padding: 1rem 5%;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
            box-shadow: 0 .5rem 1.5rem rgba(0, 0, 0, .1);
            display: flex;
            align-items: center;
            justify-content: space-between;
            background: #00A86B;
            color: #fff;
        }

        .header .logo {
            font-size: 2.5rem;
            color: #444;
            text-decoration: none;
        }

        .header .logo i {
            color: #c0392b;
        }

        .header .navbar a {
            font-size: 1.7rem;
            color: #fff;
            margin-left: 2rem;
            text-decoration: none;
        }

        .header .navbar a:hover {
            color: #ddd;
        }

        /* Main Content Styles */
        .container {
            max-width: 960px;
            margin: 8rem auto 2rem;
            padding: 2rem;
            background: #fff;
            box-shadow: 0 0.5rem 1.5rem rgba(0, 0, 0, 0.1);
            border-radius: 0.5rem;
        }

        h1 {
            font-size: 2.5rem;
            margin-bottom: 2rem;
            text-align: center;
        }

        p {
            font-size: 1.2rem;
            line-height: 1.5;
            margin-bottom: 1rem;
        }

        h2 {
            font-size: 2rem;
            margin-bottom: 1.5rem;
        }

        h3 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
        }

        ul, ol {
            margin-bottom: 1rem;
        }

        li {
            margin-bottom: 0.5rem;
        }

        /* Footer Styles */
        footer {
            background: #f2f2f2;
            padding: 2rem;
            text-align: center;
        }

        .btn{
            display: inline-block;
            margin-top: 1rem;
            padding: .5rem;
            padding-left: 1rem;
            border:var(--border);
            border-radius: .5rem;
            box-shadow: var(--box-shadow);
            color:var(--green);
            cursor: pointer;
            font-size: 1.7rem;
            background: #fff;
        }

        .btn span{
            padding:.7rem 1rem;
            border-radius: .5rem;
            background: var(--green);
            color:#fff;
            margin-left: .5rem;
        }

        .btn:hover{
            background: var(--green);
            color:#fff;
        }

        .btn:hover span{
            color: var(--green);
            background:#fff;
            margin-left: 1rem;
        }

    </style>
</head>
<body>
    <header class="header">
        <a href="#" class="logo"> <i class="fas fa-stethoscope"></i> <strong>MedAppoint</strong></a>
    </header>

    <div class="container">
        <h1>Ambulance Services</h1>
        <p>Our ambulance services provide reliable and efficient transportation for medical emergencies and non-emergency situations. With a dedicated fleet of ambulances and a team of highly skilled medical professionals, we ensure that patients receive timely and safe transportation to the nearest medical facility.</p>
        <p>Our ambulance services include:</p>
        <ul>
            <li>Emergency medical transportation</li>
            <li>Non-emergency medical transportation</li>
            <li>Inter-facility transfers</li>
            <li>Specialized care during transportation</li>
            <li>Advanced life support (ALS) and basic life support (BLS) ambulances</li>
        </ul>

        <h2>How to Request Ambulance Services</h2>
        <p>If you require our ambulance services, please follow these steps:</p>
        <ol>
            <li>Contact our 24/7 helpline at [insert phone number] or visit our website</li>
            <li>Provide your location and details of the medical situation</li>
            <li>Our team will assess the situation and dispatch the appropriate ambulance</li>
            <li>Our trained medical professionals will arrive at your location and provide necessary medical care during transportation</li>
            <li>You will be safely transported to the designated medical facility</li>
        </ol>

        <h2>FAQs</h2>
        <h3>Q: Are the ambulance services available round the clock?</h3>
        <p>A: Yes, our ambulance services are available 24 hours a day, 7 days a week.</p>

        <h3>Q: Can I request an ambulance for a non-emergency situation?</h3>
        <p>A: Absolutely! Our ambulance services cater to both emergency and non-emergency situations.</p>

        <h3>Q: Are the medical professionals in the ambulance trained and certified?</h3>
        <p>A: Yes, all our medical professionals in the ambulance are highly trained, experienced, and certified in providing pre-hospital care.</p>

        <a href="http://localhost:3000/index.php#services" class="btn"> Back to main page <span class="fas fa-chevron-right"></span> </a>
    </div>

    <footer>
        <p>&copy; <?php echo date('Y'); ?> MedAppoint. All rights reserved.</p>
    </footer>
</body>
</html>