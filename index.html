<?php
session_start();

// Path to the JSON file
$json_file = 'apps.json';

if (file_exists($json_file)) {
    $json_data = file_get_contents($json_file);  // Read the content of the file
    $apps = json_decode($json_data, true);  // Decode JSON data into PHP array
} else {
    $apps = [];  // Empty array if the file doesn't exist
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }
    </style>
</head>
<body>

    <h1>Welcome to Our App Store</h1>
    <p>Browse our collection of apps. Click on any app to see more details or download it.</p>

    <div class="app-container">
        <?php
        foreach ($apps as $app) {
            echo "<div class='app-card'>";
            echo "<h3>" . htmlspecialchars($app['name']) . "</h3>";
            echo "<img src='images/" . htmlspecialchars($app['image']) . "' alt='" . htmlspecialchars($app['name']) . "'>";
            echo "<p>" . htmlspecialchars($app['description']) . "</p>";
            if ($app['payment_required'] == 1) {
                echo "<a href='https://buy.stripe.com/test_5kAg0S8ama68flu288' class='button'>Pay to Download</a>";
            } else {
                echo "<a href='" . htmlspecialchars($app['download_link']) . "' class='button'>Download Now</a>";
            }
            echo "</div>";
        }
        ?>
    </div>

</body>
</html>
