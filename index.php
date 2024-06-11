<?php
include 'database.php';

function getImagesBySection($conn, $section) {
    $sql = "SELECT * FROM images WHERE section = '$section'";
    return $conn->query($sql);
}

$aboutImages = getImagesBySection($conn, 'about');
$projectsImages = getImagesBySection($conn, 'projects');
$contactImages = getImagesBySection($conn, 'contact');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Portfolio</title>
</head>
<body>
    <header>
        <div class="logo">
            <img src="images/Port-removebg-preview.png" alt="Logo" class="logo-img">
        </div>
        <nav>
            <ul>
            <button class="button"> <li><a href="over_mij.php">Over mij</a></li></button>
                <button class="button"><li><a href="projecten.php">Projecten</a></li></button>
                <button class="button"><li><a href="contact.php">Contact</a></li></button>
                <button class="button"><li><a href="upload.html">upload</a></li></button>
                <button class="button"><li><a href="login.html">Login</a></li></button>
            </ul>
        </nav>
    </header>

    <section id="about">
        <h1>over mij</h1>
        <p>over mij.</p>
        <?php
        if ($aboutImages->num_rows > 0) {
            while($row = $aboutImages->fetch_assoc()) {
                echo "<div class='image'><img src='" . $row['image_path'] . "' alt='Image'></div>";
            }
        }
        ?>
    </section>

    <section id="projects">
        <h1>Projecten</h1>
        <p>projecten</p>
        <?php
        if ($projectsImages->num_rows > 0) {
            while($row = $projectsImages->fetch_assoc()) {
                echo "<div class='image'><img src='" . $row['image_path'] . "' alt='Image'></div>";
            }
        }
        ?>
    </section>

    <section id="contact">
        <h1>Contact</h1>
        <p>hallo</p>
        <?php
        if ($contactImages->num_rows > 0) {
            while($row = $contactImages->fetch_assoc()) {
                echo "<div class='image'><img src='" . $row['image_path'] . "' alt='Image'></div>";
            }
        }
        ?>
    </section>

    <footer>
        <p>&copy; 2024 zyon gressmann</p>
    </footer>
</body>
</html>

<?php
$conn->close();
?>
