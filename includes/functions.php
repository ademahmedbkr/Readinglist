<?php
// Include the Google Books API key
$apiKey = 'AIzaSyDj4PdWG3DD9qYCorl2B6hZAhOVoy7KxpQ';

// Function to search books from Google Books API
function searchBooksFromGoogle($query) {
    global $apiKey;
    $url = 'https://www.googleapis.com/books/v1/volumes?q=' . urlencode($query) . '&key=' . $apiKey;
    
    // Use cURL to fetch data from the API
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $response = curl_exec($ch);
    curl_close($ch);

    // Decode the JSON response
    return json_decode($response, true);
}
?>
