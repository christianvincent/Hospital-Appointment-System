<?php
// Retrieve necessary data from the database or any other source
$checkupTitle = "Time";
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
        <h1>Time Section</h1>
        <p>At MedAppoint, we value your time and strive to provide efficient healthcare services. We understand the importance of minimizing wait times and ensuring timely appointments for our patients.</p>
        <p>Key features of our time management:</p>
        <ul>
            <li>Optimized appointment scheduling to reduce waiting times</li>
            <li>Efficient patient flow management to minimize delays</li>
            <li>Prompt start times for appointments</li>
            <li>Real-time updates on any changes or delays</li>
            <li>Dedicated staff to manage time and ensure smooth operations</li>
        </ul>

        <h2>Why Choose Our Time Management Approach?</h2>
        <ul>
            <li>Minimized waiting times for appointments</li>
            <li>Improved patient satisfaction and experience</li>
            <li>Enhanced efficiency and productivity for healthcare providers</li>
            <li>Reduced stress and anxiety associated with long waiting times</li>
            <li>Streamlined operations for a more organized healthcare facility</li>
        </ul>

        <h2>FAQs</h2>
        <h3>Q: How do you manage waiting times for appointments?</h3>
        <p>A: We use advanced scheduling systems and optimize appointment durations to ensure efficient patient flow. Our staff closely monitors appointment timings and makes necessary adjustments to minimize waiting times.</p>

        <h3>Q: What if there are delays or changes to my appointment time?</h3>
        <p>A: In the rare event of delays or changes to your appointment time, we will notify you as soon as possible. We strive to keep you informed and provide updates to minimize any inconvenience.</p>

        <h3>Q: How can I provide feedback on my experience?</h3>
        <p>A: We value your feedback and suggestions. You can provide feedback through our website, email, or by speaking with our staff. Your input helps us improve our services and further enhance our time management approach.</p>

        <a href="http://localhost:3000/index.php#services" class="btn"> Back to main page <span class="fas fa-chevron-right"></span> </a>
    </div>

    <footer>
        <p>&copy; <?php echo date('Y'); ?> MedAppoint. All rights reserved.</p>
    </footer>
</body>
</html>