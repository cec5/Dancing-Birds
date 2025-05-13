<?php // Script for inserting bird into database
require_once('databaseConnect.php');

echo "Insert Bird into Database\n";

// Helper function for clean input
function prompt($text) {
    echo $text;
    return readline();
}

$name = prompt("Common Name: ");
$scientificName = prompt("Scientific Name: ");
$description = prompt("Short Description: ");
$imageUrl = prompt("Image URL (relative or full path): ");
$videoUrl = prompt("YouTube Embed URL (e.g., https://www.youtube.com/embed/...): ");

$database = databaseConnect();

$stmt = $database -> prepare("INSERT INTO birds (name, scientific_name, description, image_url, video_url) VALUES (?, ?, ?, ?, ?)");
$stmt -> bind_param("sssss", $name, $scientificName, $description, $imageUrl, $videoUrl);

if ($stmt -> execute()) {
    echo "Bird successfully added with ID: " . $stmt -> insert_id . "\n";
} else {
    echo "Failed to insert bird: " . $stmt -> error . "\n";
}

$stmt -> close();
$database -> close();
?>