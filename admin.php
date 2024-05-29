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
        <p>&copy; 2024 Your Name</p>
    </footer>
</body>
</html>
