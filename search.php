<?php
include('includes/functions.php');
include('includes/db_connection.php');

if (isset($_GET['query'])) {
    $query = $_GET['query'];
    $books = searchBooksFromGoogle($query);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            margin-top: 20px;
            color: #333;
        }

        .search-results {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
            padding: 20px;
        }

        .book-item {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            padding: 15px;
            text-align: center;
            transition: transform 0.3s;
            height: 100%;
        }

        .book-item:hover {
            transform: translateY(-5px);
        }

        .book-item img {
            width: 100%;
            max-width: 150px;
            height: auto;
            margin-bottom: 15px;
            border-radius: 8px;
        }

        .book-item h3 {
            color: #333;
            font-size: 1.2em;
            margin-bottom: 10px;
        }

        .book-item p {
            color: #555;
            font-size: 1em;
            margin-bottom: 15px;
        }

        .book-item a {
            display: inline-block;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border-radius: 4px;
        }

        .book-item a:hover {
            background-color: #45a049;
        }

        .no-results {
            text-align: center;
            color: #721c24;
            font-size: 1.2em;
            margin-top: 20px;
        }

        /* Responsive Styling for Mobile Devices */
        @media (max-width: 768px) {
            .search-results {
                grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            }
        }

    </style>
</head>
<body>

    <h1>Search Results</h1>

    <div class="search-results">
        <?php if (isset($books['items']) && count($books['items']) > 0): ?>
            <?php foreach ($books['items'] as $book): ?>
                <div class="book-item">
                    <?php
                        // Check if cover image is available, else use a placeholder image
                        $cover_url = isset($book['volumeInfo']['imageLinks']['thumbnail']) ? $book['volumeInfo']['imageLinks']['thumbnail'] : 'https://via.placeholder.com/150';
                        $title = isset($book['volumeInfo']['title']) ? $book['volumeInfo']['title'] : 'No title available';
                        $authors = isset($book['volumeInfo']['authors']) ? implode(', ', $book['volumeInfo']['authors']) : 'No authors available';
                    ?>
                    <img src="<?= $cover_url ?>" alt="<?= htmlspecialchars($title) ?>">
                    <h3><?= htmlspecialchars($title) ?></h3>
                    <p><?= htmlspecialchars($authors) ?></p>
                    <a href="add-book.php?isbn=<?= $book['id'] ?>&title=<?= urlencode($title) ?>&authors=<?= urlencode($authors) ?>&description=<?= urlencode($book['volumeInfo']['description'] ?? '') ?>&cover_url=<?= urlencode($cover_url) ?>">Add to List</a>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p class="no-results">No books found matching your search.</p>
        <?php endif; ?>
    </div>

</body>
</html>
