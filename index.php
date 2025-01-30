<?php
include('includes/db_connection.php');

// Fetch books from the database
$sql = "SELECT * FROM books";
$result = $conn->query($sql);
$books = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $books[] = $row;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<hea>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Community Reading List</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="includes/styles.css"></head>
<body>

    <h1>Community Reading List</h1>

    <!-- Description Section -->
    <div class="description" style="text-align: center; margin-bottom: 40px; font-size: 18px; color: #333; line-height: 1.6; background-color: #f9fafb; padding: 30px; max-width: 900px; margin: 40px auto;">
    <p style="margin-bottom: 15px; font-weight: 600; font-size: 20px; color: #2c3e50;">This is the Community Reading List a space where book lovers can explore and share recommendations. Browse through a collection of books, check out their titles, authors, and descriptions, or use the search bar below to find something specific.</p>
    <p style="margin-bottom: 15px; font-size: 16px; color: rgb(13, 194, 207);">Find your next great read or contribute by recommending your favorite books to the community.</p>
</div>


    <!-- Search Form -->
    <div class="search-form">
        <form method="GET" action="search.php">
            <input type="text" name="query" placeholder="Search your favorite book" required>
            <button type="submit">Search</button>
        </form>
    </div>

    <!-- List of Books -->
    <div class="container">
        <div class="book-list">
            <?php foreach ($books as $book): ?>
                <div class="book-card">
                    <img src="<?= $book['cover_url'] ?>" alt="<?= $book['title'] ?>">
                    <h3><?= $book['title'] ?></h3>
                    <h4><?= $book['authors'] ?></h4>
                    <p><?= substr($book['description'], 0, 100) . '...' ?></p>
                    <a href="one-book.php?id=<?= $book['id'] ?>">View Details</a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

</body>
</html>
