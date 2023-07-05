<?php
// Retrieve necessary data from the database or any other source
$checkupTitle = "Scheduling";
$checkupDescription = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla scelerisque elit quis ex gravida, ac tincidunt massa efficitur.";
$checkupSchedule = "Monday to Friday: 9 AM - 5 PM";
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
        <h1>Scheduling</h1>
        <p>At MedAppoint, we strive to make scheduling appointments easy and convenient for our patients. Whether you need a routine checkup or a specialized consultation, our scheduling process ensures a smooth experience.</p>
        <p>Steps to schedule an appointment:</p>
        <ol>
            <li>Visit our website or call our clinic</li>
            <li>Provide your personal details and preferred appointment date and time</li>
            <li>Our team will check the availability and confirm the appointment</li>
            <li>An appointment confirmation will be sent to you via email or SMS</li>
            <li>Arrive at the clinic on the scheduled date and time</li>
        </ol>

        <h2>Why Choose Our Scheduling Services?</h2>
        <ul>
            <li>Flexible appointment options to fit your schedule</li>
            <li>Efficient and responsive appointment booking process</li>
            <li>Advanced technology for accurate scheduling and reminders</li>
            <li>Experienced staff to assist with any scheduling queries</li>
            <li>Timely notifications and updates regarding your appointment</li>
        </ul>

        <h2>FAQs</h2>
        <h3>Q: How soon can I get an appointment?</h3>
        <p>A: Appointment availability depends on various factors, including the type of service and the healthcare professional's schedule. We make every effort to accommodate your needs and offer prompt appointments whenever possible.</p>

        <h3>Q: Can I reschedule or cancel my appointment?</h3>
        <p>A: Yes, you can reschedule or cancel your appointment by contacting our clinic at least 24 hours in advance. This allows us to adjust our schedule and offer the appointment slot to another patient.</p>

        <h3>Q: What if I have an urgent medical concern?</h3>
        <p>A: For urgent medical concerns, please call our clinic immediately. Our staff will assess the situation and provide appropriate guidance, including scheduling a same-day appointment if necessary.</p>

        <a href="http://localhost:3000/index.php#services" class="btn"> Back to main page <span class="fas fa-chevron-right"></span> </a>
    </div>

    <footer>
        <p>&copy; <?php echo date('Y'); ?> MedAppoint. All rights reserved.</p>
    </footer>
</body>
</