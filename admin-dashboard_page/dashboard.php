<?php
include 'db.php';

// Fetch images from the database
$sql = "SELECT * FROM images ORDER BY uploaded_at DESC";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Cats of Circuit Makati</title>

    <link rel="stylesheet" href="dashboard_styles.css">
</head>
<body>

<div class="container">
    <h2>Admin Dashboard</h2>

    <a href="../cats_page/catspage.php" class="btn btn-view">View Cats Page</a>
    <a href="../index.php" class="btn btn-view">Home</a>

    <!-- Upload Form -->
    <div class="form-container">
        <h3>Upload New Cat</h3>
        <form action="upload.php" method="POST" enctype="multipart/form-data">
            <input type="file" name="image" accept="image/*" required><br>
            <input type="text" name="cat_name" placeholder="Cat name" required><br>
            <input type="text" name="age" placeholder="Age (e.g. 2 years, 6 months)" required><br>
            <input type="text" name="caption" placeholder="Enter description" required><br>
            
            <div class="select-container">
                <label for="gender">Gender:</label>
                <select name="gender" required>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Unknown">Unknown</option>
                </select>
            </div>
            
            <div class="select-container">
                <label for="spay_neuter">Spay/Neuter:</label>
                <select name="spay_neuter" required>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                    <option value="Unknown">Unknown</option>
                </select>
            </div>
            
            <div class="select-container">
                <label for="arv">ARV:</label>
                <select name="arv" required>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                    <option value="Unknown">Unknown</option>
                </select>
            </div><br>
            
            <button type="submit">Upload</button>
        </form>
    </div>

    <!-- Image Table -->
    <table>
        <thead>
            <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Age</th>
                <th>Description</th>
                <th>Gender</th>
                <th>Spay/Neuter</th>
                <th>ARV</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_assoc($result)) : ?>
            <tr>
                <td><img src="uploads/<?php echo $row['filename']; ?>" alt="Image"></td>
                <td><?php echo htmlspecialchars($row['cat_name'] ?? ''); ?></td>
                <td><?php echo htmlspecialchars($row['age'] ?? ''); ?></td>
                <td><?php echo htmlspecialchars($row['caption']); ?></td>
                <td><?php echo htmlspecialchars($row['gender'] ?? 'Unknown'); ?></td>
                <td><?php echo htmlspecialchars($row['spay_neuter'] ?? 'Unknown'); ?></td>
                <td><?php echo htmlspecialchars($row['arv'] ?? 'Unknown'); ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-edit">✏ Edit</a>
                    <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-delete" onclick="return confirm('Are you sure?');">🗑 Delete</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>

</body>
</html>