<?php
include('includes/db_connection.php');

// Fetch book details from the database
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM books WHERE id = $id";
    $result = $conn->query($sql);
    $book = $result->fetch_assoc();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Details</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f4f7fc;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            padding: 20px;
            background-color: #333;
            color: white;
            margin-bottom: 30px;
        }

        .container {
            width: 80%;
            margin: 0 auto;
            background-color: white;
            padding: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        .book-details {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 30px;
        }

        .book-image img {
            width: 250px;
            height: 350px;
            object-fit: cover;
            border-radius: 8px;
        }

        .book-info {
            max-width: 60%;
        }

        .book-info h2 {
            font-size: 30px;
            margin-bottom: 10px;
            color: #333;
        }

        .book-info p {
            font-size: 16px;
            color: #555;
            margin: 8px 0;
        }

        .book-info .strong {
            font-weight: bold;
        }

        .back-button {
            display: inline-block;
            margin-top: 30px;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            text-align: center;
        }

        .back-button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

    <h1>Book Details</h1>

    <div class="container">
        <div class="book-details">
            <!-- Book Image -->
            <div class="book-image">
                <img src="<?= $book['cover_url'] ?>" alt="<?= $book['title'] ?>">
            </div>

            <!-- Book Info -->
            <div class="book-info">
                <h2><?= $book['title'] ?></h2>
                <p><span class="strong">Authors:</span> <?= $book['authors'] ?></p>
                <p><span class="strong">Description:</span> <?= $book['description'] ?></p>
                <p><span class="strong">Recommended by:</span> <?= $book['recommended_by'] ?></p>
                <p><span class="strong">Comment:</span> <?= $book['comment'] ?></p>
            </div>
        </div>

        <!-- Back to List Button -->
        <a href="index.php" class="back-button">Back to Reading List</a>
    </div>

</body>
</html>
