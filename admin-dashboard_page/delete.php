<?php
include 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Get the image filename before deleting
    $sql = "SELECT filename FROM images WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    
    // Delete file from "uploads/" folder
    $file_path = "C:\\xampp\\htdocs\\cms_project\\uploads\\" . $row['filename'];
    if (file_exists($file_path)) {
        unlink($file_path);
    }

    // Delete from database
    $sql = "DELETE FROM images WHERE id=$id";
    if (mysqli_query($conn, $sql)) {
        echo "✅ Image deleted!";
    } else {
        echo "❌ Error deleting: " . mysqli_error($conn);
    }

    header("Location: dashboard.php");
    exit;
}
?>
