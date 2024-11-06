<?php
// Simple function to load the apps data from the JSON file
function get_apps_data() {
    $json_file = __DIR__ . '/private-db/apps.json';

    if (file_exists($json_file)) {
        $json_data = file_get_contents($json_file);
        return json_decode($json_data, true);  // Decode JSON to PHP array
    } else {
        return [];  // Return an empty array if the file doesn't exist
    }
}
?>
