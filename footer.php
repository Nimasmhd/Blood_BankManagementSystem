<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer Section</title>
    <style>
        /* Footer Styles */
        .footer {
            background: #000; /* Black background */
            padding: 2rem 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .secContainer {
            display: grid;
            gap: 1.5rem;
            text-align: center;
            justify-items: center;
            align-items: center;
        }

        .footerLinks {
            display: grid;
            justify-items: center;
            text-align: center;
        }

        .footerLinks .linkTitle {
            padding-bottom: 0.5rem;
            color: white; /* White text */
            font-weight: 700;
        }

        .footerLinks ul {
            padding: 0;
            margin: 0;
            list-style: none;
        }

        .footerLinks li {
            margin: 5px 0;
        }

        .footerLinks li a {
            color: white; /* White text */
            font-size: 13px;
            font-weight: 500;
            text-decoration: none;
        }

        .footerLinks li a:hover {
            color: #FF4500; /* Hover color */
        }

        .footerLinks .name,
        .footerLinks .phone,
        .footerLinks .email {
            display: block;
            color: white; /* White text */
            font-size: 13px;
            font-weight: 500;
            padding: 5px 0;
        }

        .mapContainer {
            width: 100%;
            max-width: 800px;
            height: 250px;
            border: 2px solid white;
            border-radius: 10px;
            overflow: hidden;
        }

        iframe {
            width: 100%;
            height: 100%;
            border: none;
        }

        @media screen and (min-width: 640px) {
            .secContainer {
                grid-template-columns: repeat(4, 1fr);
                gap: 2rem;
            }
        }
    </style>
</head>
<body>

<div class="footer">
    <div class="secContainer container grid">
        <!-- Information Links -->
        <div class="footerLinks">
            <span class="linkTitle">Information</span>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="about_us.php">About Us</a></li>
                <li><a href="why_donate_blood.php">Why Donate Blood</a></li>
                <li><a href="donate_blood.php">Become a donor</a></li>
                <li><a href="need_blood.php">Need Blood</a></li>
            </ul>
        </div>

        <!-- Helpful Links -->
        <div class="footerLinks">
            <span class="linkTitle">Helpful Links</span>
            <ul>
                <li><a href="#">Popular blood Bank</a></li>
                <li><a href="#">Support</a></li>
                <li><a href="#">Hospitals</a></li>
                <li><a href="#">Privacy</a></li>
            </ul>
        </div>

        <!-- Contact Details -->
        <div class="footerLinks">
            <span class="linkTitle">Contact Details</span>
            <span class="name">Designer: M.R.M Nimas</span>
            <span class="phone">+94 123 456 789</span>
            <span class="email">nimasrfk.off@gmail.com</span>
        </div>

        <!-- Map Section -->
        <div class="mapContainer">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3152.8365827424684!2d80.5000512!3d8.760589!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3afc14fff9009211%3A0x56123bec75fea1a9!2sDistrict+General+Hospital+Vavuniya!5e0!3m2!1sen!2slk!4v1605225239642"
                allowfullscreen=""
                loading="lazy">
            </iframe>
        </div>
    </div>
</div>

</body>
</html>
