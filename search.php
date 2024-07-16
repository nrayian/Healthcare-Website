<?php
session_start();
// Simulated database or data source
$doc1=$_SESSION['doc1'];
$doc2=$_SESSION['doc2'];
$doc3=$_SESSION['doc3'];
$doc4=$_SESSION['doc4'];
$data = array(
    $doc1,
    $doc2,
    $doc3,
    $doc4,
    "Fig",
    "Grape",
    "Kiwi",
    "Lemon",
    "Mango",
    "Orange",
    "Peach",
    "Pear",
    "Pineapple",
    "Strawberry",
    "Watermelon"
);

// Get the search query from the AJAX request
$searchQuery = $_POST['query'];

// Filter the data based on the search query
$searchResults = array_filter($data, function ($item) use ($searchQuery) {
    return stripos($item, $searchQuery) !== false;
});

// Display the search results
if (!empty($searchResults)) {
    echo '<ul>';
    foreach ($searchResults as $result) {
        echo '<li>' . $result . '</li>';
    }
    echo '</ul>';
} else {
    echo 'No results found.';
}
?>