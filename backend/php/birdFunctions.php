<?php // This file contains functions that query the database to populate the frontend website
require_once('databaseConnect.php');

// Returns the bird's information using the ID, used in bird.php
function getBird($id){
    $database = databaseConnect();
    $stmt = $database -> prepare("SELECT name, scientific_name, description, image_url, video_url FROM birds WHERE id = ?");
    $stmt -> bind_param("i", $id);
    $stmt -> execute();
    $result = $stmt -> get_result();
    $bird = $result -> fetch_assoc();
    $stmt -> close();
    $database -> close();
    return $bird;
}

function searchBirds($name = '') {
    $database = databaseConnect();
    $name = '%' . $name . '%';
    $stmt = $database -> prepare("SELECT id, name, scientific_name FROM birds WHERE name LIKE ? OR scientific_name LIKE ? ORDER BY name ASC");
    $stmt -> bind_param("ss", $name, $name);
    $stmt -> execute();
    $result = $stmt -> get_result();
    $birds = [];
    while ($row = $result -> fetch_assoc()) {
        $birds[] = $row;
    }
    $stmt -> close();
    $database -> close();
    return $birds;
}
