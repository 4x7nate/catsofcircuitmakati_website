<?php
include 'db.php';

// Check if ID is set
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Get the current image details
    $sql = "SELECT * FROM images WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
}

// Update cat information
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $new_caption = mysqli_real_escape_string($conn, $_POST['caption']);
    $new_cat_name = mysqli_real_escape_string($conn, $_POST['cat_name']);
    $new_age = mysqli_real_escape_string($conn, $_POST['age']);
    $new_gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $new_spay_neuter = mysqli_real_escape_string($conn, $_POST['spay_neuter']);
    $new_arv = mysqli_real_escape_string($conn, $_POST['arv']);

    $sql = "UPDATE images SET 
            caption='$new_caption', 
            cat_name='$new_cat_name', 
            age='$new_age', 
            gender='$new_gender', 
            spay_neuter='$new_spay_neuter', 
            arv='$new_arv' 
            WHERE id=$id";

    if (mysqli_query($conn, $sql)) {
        echo "✅ Cat information updated!";
        header("Location: dashboard.php");
        exit;
    } else {
        echo "❌ Error updating: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Cat Information</title>
    <link rel="stylesheet" href="dashboard_styles.css">
</head>
<body>

<div class="container">
    <h2>Edit Cat Information</h2>

    <div class="form-container">
        <form action="" method="POST">
            <label>Description:</label>
            <input type="text" name="caption" value="<?php echo htmlspecialchars($row['caption']); ?>" required><br>
            
            <label>Name:</label>
            <input type="text" name="cat_name" value="<?php echo htmlspecialchars($row['cat_name'] ?? ''); ?>" required><br>
            
            <label>Age:</label>
            <input type="text" name="age" value="<?php echo htmlspecialchars($row['age'] ?? ''); ?>" required><br>
            
            <div class="select-container">
                <label for="gender">Gender:</label>
                <select name="gender" required>
                    <option value="Male" <?php echo ($row['gender'] ?? '') == 'Male' ? 'selected' : ''; ?>>Male</option>
                    <option value="Female" <?php echo ($row['gender'] ?? '') == 'Female' ? 'selected' : ''; ?>>Female</option>
                    <option value="Unknown" <?php echo ($row['gender'] ?? '') == 'Unknown' ? 'selected' : ''; ?>>Unknown</option>
                </select>
            </div>
            
            <div class="select-container">
                <label for="spay_neuter">Spay/Neuter:</label>
                <select name="spay_neuter" required>
                    <option value="Yes" <?php echo ($row['spay_neuter'] ?? '') == 'Yes' ? 'selected' : ''; ?>>Yes</option>
                    <option value="No" <?php echo ($row['spay_neuter'] ?? '') == 'No' ? 'selected' : ''; ?>>No</option>
                    <option value="Unknown" <?php echo ($row['spay_neuter'] ?? '') == 'Unknown' ? 'selected' : ''; ?>>Unknown</option>
                </select>
            </div>
            
            <div class="select-container">
                <label for="arv">ARV:</label>
                <select name="arv" required>
                    <option value="Yes" <?php echo ($row['arv'] ?? '') == 'Yes' ? 'selected' : ''; ?>>Yes</option>
                    <option value="No" <?php echo ($row['arv'] ?? '') == 'No' ? 'selected' : ''; ?>>No</option>
                    <option value="Unknown" <?php echo ($row['arv'] ?? '') == 'Unknown' ? 'selected' : ''; ?>>Unknown</option>
                </select>
            </div> <br>
            
            <button type="submit">Update</button>
        </form>
    </div>

    <a href="dashboard.php" class="btn btn-view">Go back</a>
</div>

</body>
</html>