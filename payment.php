<?php
session_start();

// Redirect to payment page before allowing download
if (isset($_GET['app_id'])) {
    $app_id = $_GET['app_id'];
    $json_file = '/path/to/private-db/apps.json';

    if (file_exists($json_file)) {
        $json_data = file_get_contents($json_file);
        $apps = json_decode($json_data, true);
        $app = $apps[$app_id];

        // If payment required, show payment page
        if ($app['payment_required'] == 1) {
            header('Location: https://buy.stripe.com/test_5kAg0S8ama68flu288');
            exit;
        } else {
            // Directly allow download if no payment is required
            header('Location: ' . $app['download_link']);
            exit;
        }
    }
}
?>
