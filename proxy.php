<?php
header("Content-Type: application/json");

// Check if category is passed
$category = $_GET['category'] ?? null;

// Base API
if ($category) {
    // Category-based blogs
    $url = "https://blog.digitroopers.com/wp-json/wp/v2/posts?_embed&per_page=3&categories=" . intval($category);
} else {
    // Latest blogs
    $url = "https://blog.digitroopers.com/wp-json/wp/v2/posts?_embed&per_page=3";
}

// cURL
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

$response = curl_exec($ch);

if ($response === false) {
    echo json_encode(["error" => curl_error($ch)]);
    exit;
}

curl_close($ch);

echo $response;