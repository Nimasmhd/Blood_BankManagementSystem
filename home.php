<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        body {
            margin: 0;
            padding: 0;
            text-align: left;
            
        }


        .carousel-inner img {
            width: 100vw;
            height: 100vh;
            object-fit: cover;
        }

        .carousel-caption{
            
            justify-content: center;
            position: absolute;
            top: 55%;  /* Center vertically */
            left: 50%; /* Center horizontally */
            transform: translate(-50%, -50%); /* Adjust for perfect centering */
            text-align: center;
            z-index: 2;
        }
        .head-title {
          align-items: center;
          justify-content: center;
          text-align: center;
         
          
        }
        .head-title h1{
          
          position: absolute;
            z-index: 3;
            left: 50%;
            transform: translate(-50%, -50%); 
            top: 20%;
            font-size:65px;
            
        }

        .card {
            margin: auto;
        }

        .card-body {
            text-align: left;
        }
        .card .card-header{
            background-color: #990000;
        }

        .row {
            justify-content: left;
        }

        .btn-block {
            width: fit-content;
        }

        .container-fluid {
            padding: 0;
        }

        .content-container {
            padding-left: 30px;
            padding-right: 30px;
        }

        /* Optional: You can adjust padding for smaller screens */
        @media (max-width: 768px) {
            .content-container {
                padding-left: 10px;
                padding-right: 10px;
            }
            .head-title h1{
          
          position: absolute;
            z-index: 3;
            left: 50%;
            transform: translate(-50%, -50%); 
            top: 20%;
            font-size:40px;
            
        }
        .btn{
            background-color:red; 
            color:white; 
            font-weight: bold; 
            padding: 5px 10px; 
            border-radius: 25px;
            font-size: 5px;
        }
        .carousel-caption a{
            text-decoration: none;
            color:white; 
            font-size: 5px;
            

            
        }
        .carousel-caption .blood{
            font-size: 15px;
        }
        .carousel-caption p{
            display:none;
        }
        .carousel-caption a .btn:hover{
            background-color:white; 
            color:red; 
}

        }
        .btn{
            background-color:red; 
            color:white; 
            font-weight: bold; 
            padding: 12px 15px; 
            border-radius: 25px;
            font-size: 15px;
            
        }
        .btnlast{
            background-color:red; 
            color:white; 
            font-weight: bold; 
            padding: 12px 15px; 
            border-radius: 25px;
            font-size: 15px;
            border:none;
            
        }
        a .btnlast:hover{
            background-color:white; 
            color:red; 
}
        .carousel-caption a{
            text-decoration: none;
            color:white; 
            font-size: 70px;
            

            
        }
        .carousel-caption a .btn:hover{
            background-color:white; 
            color:red; 
}
.banner-sec{
    display:flex;
    top: 50%;
}
.sub-title{
    color:red;
}
        
    </style>
</head>

<body>
    <div class="header">
        <?php
        $active = "home";
        include('head.php'); ?>
    </div>

    <div id="page-container" style=" position: relative; min-height: 100vh;">
        <div class="container-fluid">
            <div id="content-wrap" style="padding-bottom:75px;">

                <!-- Carousel Section -->
                <div id="demo" class="carousel slide" data-ride="carousel">
                    <ul class="carousel-indicators">
                        <li data-target="#demo" data-slide-to="0" class="active"></li>
                        <li data-target="#demo" data-slide-to="1"></li>
                    </ul>
                    
                    <div class="head-title">
                    <h1 style=" color: black;">Welcome to Blood Bank </h1>
                    </div>
                    <div class="carousel-caption d-block" >
                             
                        <h1 style="font-size:30px; color: black;">DONATE</h1>
                        <h1 style="font-size:60px; color: red;" class="blood">YOUR BLOOD</h1>
                        <p style="font-size:15px; color: black; font-weight: 500;">Every donation helps patients in emergencies, those undergoing surgeries, cancer treatments, and individuals with chronic conditions like anemia. It only takes a small amount of your time to make a significant impact, and each donation can help up to three people.</p>
                       
                   <a  href="donate_blood.php" ><button class="btn">Become a Donor</button></a>

                    </div>
           
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="image/banner.png" alt="Banner">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#demo" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#demo" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>
                </div>

                <!-- Content Section with Padding on Left and Right -->
                <div class="content-container">

                    <!-- Cards Section -->
                    <div class="row mt-4">
                        <div class="col-lg-4 mb-4">
                            <div class="card">
                                <h4 class="card-header  text-white">The need for blood</h4>
                                <p class="card-body overflow-auto">
                                    <?php
                                    include 'conn.php';
                                    $sql = "select * from pages where page_type='needforblood'";
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['page_data'];
                                        }
                                    }
                                    ?>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-4">
                            <div class="card">
                                <h4 class="card-header  text-white">Blood Tips</h4>
                                <p class="card-body overflow-auto">
                                    <?php
                                    $sql = "select * from pages where page_type='bloodtips'";
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['page_data'];
                                        }
                                    }
                                    ?>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-4">
                            <div class="card">
                                <h4 class="card-header  text-white">Who you could Help</h4>
                                <p class="card-body overflow-auto">
                                    <?php
                                    $sql = "select * from pages where page_type='whoyouhelp'";
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo $row['page_data'];
                                        }
                                    }
                                    ?>
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Universal Donors and Blood Groups -->
                    <div class="row mt-4">
                        <div class="col-lg-6">
                            <h2 class = "sub-title">BLOOD GROUPS</h2>
                            <p>
                                <?php
                                $sql = "select * from pages where page_type='bloodgroups'";
                                $result = mysqli_query($conn, $sql);
                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo $row['page_data'];
                                    }
                                }
                                ?>
                            </p>
                        </div>
                        <div class="col-lg-5">
                         <iframe width="100%" height="300px" src="https://www.youtube.com/embed/xfZhb6lmxjk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>

                    </div>

                    <hr>

                    <!-- Call to Action Section -->
                    <div class="row mb-4 d-flex justify-content-center align-items-center">
                        <div class="col-md-8">
                            <h4 class="text-left  sub-title">UNIVERSAL DONORS AND RECIPIENTS</h4>
                            <p>
                                <?php
                                $sql = "select * from pages where page_type='universal'";
                                $result = mysqli_query($conn, $sql);
                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo $row['page_data'];
                                    }
                                }
                                ?>
                            </p>
                        </div>
                        <div class="col-md-4 d-flex justify-content-center">
                            <a href="donate_blood.php">
                                <button class="btnlast">Become a Donor</button>
                            </a>
                        </div>
                    </div>

                    <!-- Helping Videos Section -->
                                    <div class="row mt-4">
                    <div class="col-12">
                        <h2 class="text-center sub-title">Helping Videos</h2>
                        <hr style="width: 100%; border: 0.5px solid #B0B0B0; margin-top: 30px; ">
                        <div class="row">
                            <?php
                                // Assuming you have a table that stores video details with columns like 'video_url', 'video_title'
                                include 'conn.php';
                                $sql = "SELECT * FROM videos WHERE status='active'"; // Assuming 'status' column filters active videos
                                $result = mysqli_query($conn, $sql);
                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        // Ensure the URL is properly formatted
                                        $video_url = htmlspecialchars($row['video_url']);
                                        ?>
                                        <div class="col-md-4 mb-4">
                        <div class="card" style="width: 100%; height: 300px; border: none;">
                            <div class="card-body" style="padding: 20px;">
                                <h5 class="card-title"><?php echo htmlspecialchars($row['video_title']); ?></h5>
                                <iframe width="100%" height="100%" src="<?php echo $video_url; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>


                    <?php
                }
            } else {
                echo "<p>No videos available at the moment.</p>";
            }
            ?>
        </div>
    </div>
</div>




                </div>
            </div>
        </div>
        <?php include('footer.php'); ?>
    </div>
</body>

</html>
