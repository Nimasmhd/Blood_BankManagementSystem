<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blood Bank & Donation</title>
  <style>
    .header {
      display: flex;
      align-items: center;
      justify-content: space-between;
      width: 100%;
      padding: .5rem 2rem;
      position: fixed;
      top: 0;
      left: 0;
      background: rgba(255, 255, 255);
      backdrop-filter: blur(5px);
      z-index: 1000;
    }

    /* Style the header links */
    .header a {
      color: Black;
      text-align: center;
      padding: 12px;
      text-decoration: none;
      font-size: 18px;
      line-height: 25px;
      border-radius: 5px;
      font-weight: bold;
    }

    /* Style the logo link */
    .header a.logo {
      font-size: 25px;
      font-weight: bold;
      color: black;
    }

    /* Change the background color on mouse-over */
    .header a:hover {
     
      color: red;
      
    }

    /* Header-right for right aligned links */
    .header-right {
      display: flex;
      justify-content: flex-end;
    }

    /* Hide the menu items by default on small screens */
    .header-right a {
      display: inline-block;
    }

    /* Menu icon for small screens */
    .menu-icon {
      display: none;
      font-size: 30px;
      cursor: pointer;
      color: black;
      background: transparent;
      border: none;
    }

    /* Responsive styling - when the screen is 500px or less */
    @media screen and (max-width: 500px) {
      .header a.logo {
        display: block;  /* Hide logo on small screens */
      }

      .menu-icon {
        display: block;  /* Show menu icon on small screens */
      }

      .header-right {
        position: absolute;
        top: 0;
        left: 0;
        right:15px;
        background-color: white;
        flex-direction: column;
        align-items: left;
        width: 60%;
        display: none;
      }

      .header-right a {
        width: 100%;
        text-align: center;
        padding: 14px;
      }

      .header-right.show {
        display: flex;
      }
    }

    /* Style the active/current link */
    a.act {
     
      color: red;
      border-radius: 10px;
    }

    a.logo2 {
      background-color: #333;
    }
  </style>
</head>
<body>

  <div class="header">
    <a href="home.php" class="logo" <?php if($active=='home') echo "class='logo2'"; ?>>Blood Bank & Donation</a>
    
    <!-- Menu Icon -->
    <button class="menu-icon" onclick="toggleMenu()">&#9776;</button>

    <div class="header-right">
      <a href="home.php" <?php if($active=='home') echo "class='act'"; ?>>Home</a>
      <a href="about_us.php" <?php if($active=='about') echo "class='act'"; ?>>About Us</a>
      <a href="why_donate_blood.php" <?php if($active=='why') echo "class='act'"; ?>>Why Donate Blood</a>
      <a href="donate_blood.php" <?php if($active=='donate') echo "class='act'"; ?>>Become A Donor</a>
      <a href="need_blood.php" <?php if($active=='need') echo "class='act'"; ?>>Need Blood</a>
      <a href="contact_us.php" <?php if($active=='contact') echo "class='act'"; ?>>Contact Us</a>
    </div>
  </div>

  <script>
    // Function to toggle the visibility of the menu on small screens
    function toggleMenu() {
      var menu = document.querySelector('.header-right');
      menu.classList.toggle('show'); // Toggle the 'show' class to display the menu
    }
  </script>

</body>
</html>
