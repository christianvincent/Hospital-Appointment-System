<?php
// Retrieve necessary data from the database or any other source
$checkupTitle = "About";
$checkupDescription = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla scelerisque elit quis ex gravida, ac tincidunt massa efficitur.";
$checkupSchedule = "Monday to Friday: 9 AM - 5 PM";
?>
<!DOCTYPE html>
<html>
<head>
    <title>About Us</title>
    <!-- Add any necessary CSS or JavaScript files -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">

    <style> 

        /* Global Styles */
        :root {
            --green: #3EB489;
            --black: #444;
            --light-color: #111;
            --box-shadow: .5rem .5rem 0 rgba(22, 160, 133, .2);
            --text-shadow: .4rem .4rem 0 rgba(0, 0, 0, .2);
            --border: .2rem solid var(--green);
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
            line-height: 1.6;
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

        .btn {
            display: inline-block;
            margin-top: 1rem;
            padding: .5rem 1rem;
            border: var(--border);
            border-radius: .5rem;
            box-shadow: var(--box-shadow);
            color: var(--green);
            cursor: pointer;
            font-size: 1.7rem;
            background: #fff;
            transition: background-color 0.3s, color 0.3s;
            text-decoration: none;
        }

        .btn span {
            padding: .7rem 1rem;
            border-radius: .5rem;
            background: var(--green);
            color: #fff;
            margin-left: .5rem;
        }

        .btn:hover {
            background: var(--green);
            color: #fff;
        }

        .btn:hover span {
            color: var(--green);
            background: #fff;
            margin-left: 1rem;
        }

    </style>
</head>

<body>
    <header class="header">
        <a href="#" class="logo"><i class="fas fa-stethoscope"></i><strong>MedAppoint</strong></a>
    </header>

    <div class="container">
        <h1>About MedAppoint</h1>
        <p>Welcome to MedAppoint, your all-in-one platform for seamless scheduling and appointment management in the healthcare industry. Our mission is to revolutionize the way patients and healthcare providers connect and streamline the entire appointment process.</p>
        <p>At MedAppoint, we understand the challenges faced by both patients and healthcare facilities when it comes to managing appointments. Our platform provides a user-friendly interface that simplifies the entire process, allowing patients to easily find and book appointments with their preferred healthcare providers.</p>
        <p>With MedAppoint, you can say goodbye to long waiting times and phone calls to schedule appointments. Our intuitive and efficient platform enables you to access real-time availability of healthcare providers, choose a convenient time slot, and secure your appointment in just a few clicks.</p>
        <p>Our commitment to quality extends beyond the booking process. We ensure that all healthcare providers on our platform are verified and meet the highest standards of expertise and care. You can have peace of mind knowing that you'll receive top-quality treatment from experienced professionals.</p>
        <p>Whether you need a routine check-up, specialized consultation, or diagnostic tests, MedAppoint is here to make the process smooth and hassle-free. We believe that managing your healthcare should be as easy as managing any other aspect of your life, and we're dedicated to making that a reality.</p>
        <a href="http://localhost:3000/index.php" class="btn"> Back to main page <span class="fas fa-chevron-right"></span> </a>
    </div>

    <footer>
        <p>&copy; <?php echo date('Y'); ?> MedAppoint. All rights reserved.</p>
    </footer>
</body>
</html>