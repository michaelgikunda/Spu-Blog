<?php
// database connection settings
include 'dbcon.php';

// get the user input
$title = $_POST['title'];
$content = $_POST['content'];
$image = $_POST['image'];

include 'ftpcon.php';

// Navigate to images folder and upload image
$remote_file = "../images/" . $_POST['image'];
ftp_chdir($conn_id, "../images/");
if (ftp_put($conn_id, $remote_file, $image, FTP_BINARY)) {
    echo "Image uploaded successfully";
} else {
    echo "Failed to upload image";
}

// Close FTP connection
ftp_close($conn_id);


//If image is not set The default will be used
if (!$image){
    $image = '../images/pexels-joshua-abner-3605015.jpg';
}

//If blog post is not inserted this will be outputedS
if (!$content){
    $content = "Welcome to SPU blog post!";
}

//If blog title is not inserted this wil be outputed
if (!$title){
    $title = "Default";
}
// insert a new blog post with the retrieved user image
$sql = "INSERT INTO blog (title, content, image) VALUES ('$title', '$content', '$image')";
if (mysqli_query($dbconn, $sql)) {
    header("Location: home.php");
} else {
    echo "Error: " . mysqli_error($conn);
}

?>
