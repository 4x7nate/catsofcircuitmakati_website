<?php
include 'db.php'; // Connect to database

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $caption = mysqli_real_escape_string($conn, $_POST['caption']);
    $cat_name = mysqli_real_escape_string($conn, $_POST['cat_name']);
    $age = mysqli_real_escape_string($conn, $_POST['age']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $spay_neuter = mysqli_real_escape_string($conn, $_POST['spay_neuter']);
    $arv = mysqli_real_escape_string($conn, $_POST['arv']);
    $image = $_FILES['image'];

    $image_name = time() . "_" . basename($image['name']); // Unique filename
    $target_file = "C:\\xampp\\htdocs\\CoCM\\admin-dashboard_page\\uploads\\" . $image_name;

    // Move uploaded file to "uploads/" folder
    if (move_uploaded_file($image['tmp_name'], $target_file)) {
        // Insert filename and caption into the database
        $sql = "INSERT INTO images (filename, caption, cat_name, age, gender, spay_neuter, arv) 
                VALUES ('$image_name', '$caption', '$cat_name', '$age', '$gender', '$spay_neuter', '$arv')";
        if (mysqli_query($conn, $sql)) {
            echo "✅ Cat added successfully!";
        } else {
            echo "❌ Database error: " . mysqli_error($conn);
        }
    } else {
        echo "❌ Error uploading file.";
    }
}
?>
<a href="dashboard.php">Go back</a>