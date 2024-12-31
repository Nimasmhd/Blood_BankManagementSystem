<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<style>
  .row {
    background-color: rgb(234, 239, 241);
    padding:30px;
  }

  .mission {
    background-color: rgb(0, 112, 120);
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    width: 100%;
    padding: 20px 0;
    color: white;
    margin-bottom: 10px;
  }

  .mission h1 {
    text-align: center;
    font-size: 2.5rem;
    margin-bottom: 10px;
  }

  .mission .divider {
    width: 50px;
    height: 4px;
    background-color: white;
    margin: 10px auto;
    border-radius: 2px;
  }

  .mission p {
    text-align: center;
    max-width: 800px;
  }

  .join {
  position: relative; 
  background: url('image/banner.jpg') no-repeat center center;
  background-size: cover;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  width: 100%;
  padding: 30px 0;
  color: white;
  margin-bottom: 20px;
}

.join::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: rgba(111, 0, 0, 0.8); /* Black color with opacity */
  z-index: 1; /* Ensures the overlay is behind the content */
}

.join .content {
  position: relative;
  z-index: 2; 
}

.join h1, .join p {
  position: relative;
  z-index: 2; 
}
</style>
<body>
<?php 
$active = 'about';
include('head.php');
?>

<div id="page-container" style="margin-top:100px; position: relative;min-height: 84vh;">
  <div class="container">
    <div id="content-wrap" style="padding-bottom:50px;">
      <div class="row">
        <div class="col-lg-6">
          <h1 class="mt-4 mb-3">About Us</h1>
          <p>
            <?php
              include 'conn.php';
              $sql = "select * from pages where page_type='aboutus'";
              $result = mysqli_query($conn, $sql);
              if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                  echo $row['page_data'];
                }
              }
            ?>
          </p>
        </div>
        <div class="col-lg-6 d-flex justify-content-center align-items-center">
          <img class="img-fluid rounded" src="image/ABOUT.jpeg" style="height:400px" alt="error">
        </div>
            </div>
    </div>
  </div>

  <div class="mission">
        <h1>Our Mission</h1>
        <div class="divider"></div>
        <p>To ensure that no one faces a shortage of blood when they need it the most. Through technology and community support, we strive to bridge the gap between donors and recipients.</p>
      </div>

      <div id="page-container" style="margin-top:50px; position: relative; min-height: 84vh; ">
  <div class="container">
    <div id="content-wrap" style="padding-bottom:50px;">
      <div class="row">
        <div class="col-lg-6">
          <h1 class="mt-4 mb-3">What We Offer</h1>
          <p class="text-justify p-3">
            <strong>Become a Lifesaver:</strong> Register as a blood donor and help save lives. With just a few clicks, 
            you can sign up, update your availability, and make a difference in your community.
          </p>
          <p class="text-justify p-3">
            <strong>Access Blood When Needed:</strong> If you're in need of blood, our platform simplifies the process 
            of finding and securing the right match quickly and efficiently.
          </p>
          <p class="text-justify p-3">
            <strong>Convenient and Safe:</strong> Our website ensures a smooth experience for both donors and recipients, 
            with all transactions handled securely and responsibly.
          </p>
        </div>
        <div class="col-lg-6 d-flex justify-content-center align-items-center">
  <img class="img-fluid rounded" src="image/how.jpg" style="height:350px" alt="error">
</div>

      </div>
    </div>
  </div>
</div>

<div class="join">
<div class="content">
        <h1 style=" text-align: center;  font-size: 3.5rem; margin-bottom: 10px;">JOIN US TODAY !</h1>
        <div class="divider"></div>
        <p style="text-align: center; max-width: 1000px; font-size: 1rem">Whether you're here to donate blood or find a lifesaving resource, you are at the heart of what we do. Together, we can save lives and make a meaningful impact in our community.
          Donate now and become part of our mission to make every drop count!</p>
      </div>
            </div>

  <?php include('footer.php'); ?>
</div>
</body>
</html>
