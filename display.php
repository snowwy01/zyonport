<?php
include 'database.php';

$sql = "SELECT * FROM images";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Display Images</title>
</head>
<body>
    <header>
        <h1>Uploaded Images</h1>
    </header>

    <section id="image-gallery">
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<div class='image'><img src='" . $row['image_path'] . "' alt='Image'></div>";
            }
        } else {
            echo "<p>No images found.</p>";
        }
        ?>
    </section>

    <footer>
        <p>&copy; 2024 Your Name</p>
    </footer>
</body>
</html>

<?php
$conn->close();
?>
