<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <style>
    #sidebar {
      position: relative;
      margin-top: -20px;
    }

    #content {
      position: relative;
      margin-left: 210px;
    }

    @media screen and (max-width: 600px) {
      #content {
        position: relative;
        margin-left: auto;
        margin-right: auto;
      }
    }
  </style>
</head>

<body style="color:black">

  <?php
  include 'conn.php';
  include 'session.php';
  if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
  ?>

  <div id="header">
    <?php include 'header.php'; ?>
  </div>
  <div id="sidebar">
    <?php
    $active = "videos";
    include 'sidebar.php';
    ?>
  </div>

  <div id="content">
    <div class="content-wrapper">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12 lg-12 sm-12">
            <h1 class="page-title">Manage Videos</h1>
          </div>
        </div>
        <hr>

        <?php
        if (isset($_POST['upload'])) {
            $video_title = $_POST['video_title'];
            $video_url = $_POST['video_url'];
        
            // Ensure the values are sanitized before insertion
            $video_title = mysqli_real_escape_string($conn, $video_title);
            $video_url = mysqli_real_escape_string($conn, $video_url);
        
            // Insert video into the database
            $sql = "INSERT INTO videos (video_title, video_url) VALUES ('$video_title', '$video_url')";
            if (mysqli_query($conn, $sql)) {
                echo '<div class="alert alert-success"><b>Video Uploaded Successfully.</b></div>';
            } else {
                echo '<div class="alert alert-danger"><b>Failed to upload video. Please try again.</b></div>';
            }
        }

        // Delete video when requested
        if (isset($_GET['delete'])) {
          $video_id = $_GET['delete'];
          $conn = mysqli_connect("localhost", "root", "", "blood_donation") or die("Connection error");
          $sql = "DELETE FROM videos WHERE video_id='{$video_id}'";
          $result = mysqli_query($conn, $sql) or die("query unsuccessful.");
          echo '<div class="alert alert-danger"><b>Video Deleted Successfully.</b></div>';
          mysqli_close($conn);
        }
        ?>

        <div class="row">
          <div class="col-md-10">
            <div class="panel panel-default">
              <div class="panel-heading">Update Video Details</div>
              <div class="panel-body">
                <form method="post" name="update_video" class="form-horizontal">

                  <div class="form-group">
                    <label class="col-sm-4 control-label">Video Title</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="video_title" id="video_title" value="" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-4 control-label">Video URL</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="video_url" id="video_url" value="" required>

                    </div>
                  </div>
                  <div class="text-center">
  <button type="submit" class="btn btn-primary mt-3" name="upload">Upload Video</button>
</div>

                  <div class="hr-dashed"></div>

                                
                    

                                </form>
              </div>
            </div>
          </div>
        </div>

        <!-- List of videos -->
        <div class="row">
          <div class="col-md-10">
            <div class="panel panel-default">
              <div class="panel-heading">Existing Videos</div>
              <div class="panel-body">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>Video Title</th>
                      <th>Video URL</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $conn = mysqli_connect("localhost", "root", "", "blood_donation") or die("Connection error");
                    $sql = "SELECT * FROM videos";
                    $result = mysqli_query($conn, $sql) or die("query unsuccessful.");
                    while ($row = mysqli_fetch_assoc($result)) {
                      echo "<tr>";
                      echo "<td>" . $row['video_title'] . "</td>";
                      echo "<td>" . $row['video_url'] . "</td>";
                      echo "<td>
                              <a href='edit_video.php?edit=" . $row['video_id'] . "' class='btn btn-warning btn-sm'>Edit</a>
                              <a href='?delete=" . $row['video_id'] . "' class='btn btn-danger btn-sm' onclick='return confirm(\"Are you sure you want to delete this video?\")'>Delete</a>
                            </td>";
                      echo "</tr>";
                    }
                    mysqli_close($conn);
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <?php
  } else {
    echo '<div class="alert alert-danger"><b> Please Login First To Access Admin Portal.</b></div>';
    ?>
    <form method="post" name="" action="login.php" class="form-horizontal">
      <div class="form-group">
        <div class="col-sm-8 col-sm-offset-4" style="float:left">
          <button class="btn btn-primary" name="submit" type="submit">Go to Login Page</button>
        </div>
      </div>
    </form>
  <?php }
  ?>

</body>

</html>
