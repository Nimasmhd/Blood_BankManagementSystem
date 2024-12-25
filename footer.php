<html>
<head>
  <style>
 /* Footer Styles */
.footer {
    background:  #FF7F7F ;
    padding: 2rem 0;
}

.secContainer {
    display: grid;
    gap: 1.5rem;
    text-align: center;
    align-items: flex-start;
}

.logoDiv {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}

.footerLogo {
    display: flex;
    color: var(--blackColor);
    font-weight: 500;
    cursor: pointer;
    align-items: center;
    justify-content: center;
    padding-bottom: .5rem;
    margin-bottom: 1rem;
}

.footerLogo .icon {
    font-size: 25px;
    color: var(--blackColor);
}

.socials {
    gap: .5rem;
    margin: auto;
    justify-content: center;
}

.socials .icon {
    font-size: 25px;
    background: var(--primaryColor);
    border-radius: 50%;
    padding: 8px;
    color: white;
    transition: background-color 0.3s, color 0.3s;
}

.socials .icon:hover {
    background: var(--primaryColorLight);
    color: black;
}

.footerLinks {
    display: grid;
}

.footerLinks .linkTitle {
    padding-bottom: .5rem;
    color: black;
    font-weight: 700;
}

.footerLinks li {
    list-style: none;
}

.footerLinks li:hover {
    transform: translate(10px);
}

.footerLinks li a {
    color: black;
    font-size: 13px;
    font-weight: 500;
    padding: 5px;
    text-decoration: none;
}

.footerLinks li a:hover {
    color: var(--primaryColor);
}

.footerLinks img {
    height: 50px;
    width: 50px;
    border-radius: 30%;
    object-fit: cover;
    border: 1px solid var(--whiteColor);
    justify-content: center;
    box-shadow: 0 0 2px 2px rgb(251, 212, 194);
    display: block;
    margin-left: auto;
    margin-right: auto;
}

.footerLinks .name,
.footerLinks .phone,
.footerLinks .email {
    color: black;
    font-size: 13px;
    font-weight: 500;
    padding: 5px;
}

@media screen and (min-width: 448px) {
    .secContainer {
        grid-template-columns: repeat(2, 1fr);
        text-align: start !important;
        align-items: center;
    }
}

@media screen and (min-width: 640px) {
    .secContainer {
        grid-template-columns: repeat(4, 1fr);
        padding: .5rem 0;
    }
}

  </style>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer Section</title>
    <link rel="stylesheet" href="footer.css">
</head>
<body>

<div class="footer">
    <div class="secContainer container grid">
        <!-- Logo and Social Links -->
        <div class="logoDiv" data-aos="fade-up">
            <div class="footerLogo">
                <img src="logo.png" alt="logo" /> <!-- Replace logo.png with actual image -->
            </div>
            <div class="socials flex">
                <a href="#" class="icon"><i class="fab fa-facebook"></i></a>
                <a href="#" class="icon"><i class="fab fa-twitter"></i></a>
                <a href="#" class="icon"><i class="fab fa-instagram"></i></a>
            </div>
        </div>

        <!-- Information Links -->
        <div class="footerLinks" data-aos="fade-up">
            <span class="linkTitle">Information</span>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Explore</a></li>
                <li><a href="#">Travel</a></li>
                <li><a href="#">Blog</a></li>
            </ul>
        </div>

        <!-- Helpful Links -->
        <div class="footerLinks" data-aos="fade-up">
            <span class="linkTitle">Helpful Links</span>
            <ul>
                <li><a href="#">Destination</a></li>
                <li><a href="#">Support</a></li>
                <li><a href="#">Travel & Condition</a></li>
                <li><a href="#">Privacy</a></li>
            </ul>
        </div>

        <!-- Contact Details -->
        <div class="footerLinks" data-aos="fade-up">
            <span class="linkTitle">Contact Details</span>
            <img src="designer.jpg" alt="Designer" /> <!-- Replace designer.jpg with actual image -->
            <span class="name">Designer: M.R.M Nimas</span>
            <span class="phone">+94 123 456 789</span>
            <span class="email">nimasrfk.off@gmail.com</span>
        </div>
    </div>
</div>

<script src="https://kit.fontawesome.com/a076d05399.js"></script> <!-- For FontAwesome icons -->
</body>
</html>


</body>

</html>
