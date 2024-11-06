<?php
session_start();

// Path to your JSON file
$json_file = 'apps.json';

if (file_exists($json_file)) {
    $json_data = file_get_contents($json_file);  // Read the content of the file
    $apps = json_decode($json_data, true);  // Decode JSON data into a PHP array
} else {
    $apps = [];  // If file doesn't exist, initialize empty array
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apps</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }
        .app-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }
        .app-card {
            border: 1px solid #ccc;
            margin: 20px;
            padding: 20px;
            width: 250px;
            text-align: center;
        }
        .app-card img {
            max-width: 100%;
            height: auto;
        }
        .button {
            margin-top: 10px;
            padding: 10px;
            background-color: #333;
            color: white;
            text-decoration: none;
            border-radius: 4px;
        }
        .button:hover {
            background-color: #555;
        }
    </style>
</head>
<body>

    <h1>Available Apps</h1>

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
