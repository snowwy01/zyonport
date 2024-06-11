<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.html");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Admin Panel</title>
</head>
<body>
    <header>
        <h1>Admin Panel</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>

    <section id="admin-content">
        <h2>Welcome, <?php echo htmlspecialchars($_SESSION['naam']); ?>!</h2>
        <p>Here you can manage your website content.</p>
        <!-- Add admin functionalities here -->
    </section>

    <footer>
        <p>&copy; 2024 zyon gressmann</p>
    </footer>

    <?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.html");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Admin Panel</title>
</head>
<body>
    <header>
        <h1>Admin Panel</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>

    <section id="admin-content">
        <h2>Welcome, <?php echo htmlspecialchars($_SESSION['naam']); ?>!</h2>
        <p>Hier kan je dingen toevoegen aan de website</p>
        <div class="upload-container">
            <h1>Upload Image</h1>
            <form action="upload.php" method="post" enctype="multipart/form-data">
                <label for="section">Select Section:</label>
                <select id="section" name="section" required>
                    <option value="about">About Me</option>
                    <option value="projects">Projects</option>
                    <option value="contact">Contact</option>
                </select>
                <label for="image">Select Image:</label>
                <input type="file" id="image" name="image" required>
                <button type="submit">Upload</button>
            </form>
        </div>
    </section>

    <footer>
        <p>&copy; 2024 Your Name</p>
    </footer>
</body>
</html>
