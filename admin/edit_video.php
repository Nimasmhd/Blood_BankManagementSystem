<?php
// Connect to the database
include 'conn.php';

if (isset($_GET['edit'])) {
    $video_id = $_GET['edit'];

    // Fetch the video details from the database
    $sql = "SELECT * FROM videos WHERE video_id = '$video_id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    // If the video is found, display it in the form
    if ($row) {
        $video_title = $row['video_title'];
        $video_url = $row['video_url'];
    }
}

// Handle form submission for updating the video
if (isset($_POST['update'])) {
    $new_video_title = $_POST['video_title'];
    $new_video_url = $_POST['video_url'];

    // Update the video details in the database
    $sql = "UPDATE videos SET video_title='$new_video_title', video_url='$new_video_url' WHERE video_id='$video_id'";

    if (mysqli_query($conn, $sql)) {
        // Set a success message and redirect to the manage_videos.php page
        session_start();
        $_SESSION['message'] = "Video details updated successfully.";
        $_SESSION['message_type'] = "success";
        header("Location: manage_videos.php");
        exit();
    } else {
        // Set an error message and redirect to the manage_videos.php page
        session_start();
        $_SESSION['message'] = "Error updating video.";
        $_SESSION['message_type'] = "danger";
        header("Location: manage_videos.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Edit Video</title>
  <!-- Add Bootstrap and jQuery -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
  <div class="container">
    <h2>Edit Video</h2>

    <form method="post">
      <div class="form-group">
        <label for="video_title">Video Title</label>
        <input type="text" class="form-control" id="video_title" name="video_title" value="<?php echo $video_title; ?>" required>
      </div>

      <div class="form-group">
        <label for="video_url">Video URL</label>
        <input type="text" class="form-control" id="video_url" name="video_url" value="<?php echo $video_url; ?>" required>
      </div>

      <button type="submit" class="btn btn-primary" name="update">Update Video</button>
    </form>
  </div>
</body>

</html>

<?php
// Close the database connection
mysqli_close($conn);
?>
