<?php
include('includes/db_connection.php');

// Initialize success and error messages
$success_message = '';
$error_message = '';

// Handle form submission
// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $isbn = mysqli_real_escape_string($conn, $_POST['isbn']);
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $authors = mysqli_real_escape_string($conn, $_POST['authors']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $cover_url = mysqli_real_escape_string($conn, $_POST['cover_url']);
    $recommended_by = mysqli_real_escape_string($conn, $_POST['recommended_by']);
    $comment = mysqli_real_escape_string($conn, $_POST['comment']);

    // Validate inputs (add more validation as needed)
    if (empty($isbn) || empty($title) || empty($authors) || empty($description) || empty($recommended_by) || empty($comment)) {
        $error_message = 'Please fill in all required fields.';
    } else {
        // SQL query to insert book details
        $sql = "INSERT INTO books (isbn, title, authors, description, cover_url, recommended_by, comment)
                VALUES ('$isbn', '$title', '$authors', '$description', '$cover_url', '$recommended_by', '$comment')";

        if ($conn->query($sql) === TRUE) {
            $success_message = "New book added successfully!";
            header("Location: index.php"); // Redirect to homepage after successful submission
            exit;
        } else {
            $error_message = "Error: " . $conn->error;
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add a Book</title>
    <style>
        /* Styling for the page */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 50px;
            background-color: #f4f4f9;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .message {
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 5px;
            text-align: center;
            font-weight: bold;
        }

        .success {
            background-color: #d4edda;
            color: #155724;
        }

        .error {
            background-color: #f8d7da;
            color: #721c24;
        }

        form {
            max-width: 600px;
            margin: 20px auto;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        input, textarea, button {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border-radius: 4px;
            border: 1px solid #ddd;
            box-sizing: border-box;
        }

        button {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px 5px;
        }

        footer a {
            color: white;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <h1>Add a Book to the Community Reading List</h1>

    <?php if (isset($success_message)): ?>
        <div class="message success"><?= $success_message ?></div>
    <?php elseif (isset($error_message)): ?>
        <div class="message error"><?= $error_message ?></div>
    <?php endif; ?>

    <form method="POST">
        <!-- Hidden fields to pass the book data -->
        <input type="hidden" name="isbn" value="<?= isset($_GET['isbn']) ? htmlspecialchars($_GET['isbn']) : '' ?>">
        <input type="hidden" name="title" value="<?= isset($_GET['title']) ? htmlspecialchars($_GET['title']) : '' ?>">
        <input type="hidden" name="authors" value="<?= isset($_GET['authors']) ? htmlspecialchars($_GET['authors']) : '' ?>">
        <input type="hidden" name="description" value="<?= isset($_GET['description']) ? htmlspecialchars($_GET['description']) : '' ?>">
        <input type="hidden" name="cover_url" value="<?= isset($_GET['cover_url']) ? htmlspecialchars($_GET['cover_url']) : '' ?>">

        <label for="title">Title:</label>
        <input type="text" name="title" required value="<?= isset($_GET['title']) ? htmlspecialchars($_GET['title']) : '' ?>" readonly><br>

        <label for="authors">Authors:</label>
        <input type="text" name="authors" required value="<?= isset($_GET['authors']) ? htmlspecialchars($_GET['authors']) : '' ?>" readonly><br>

        <label for="description">Description:</label>
        <textarea name="description" required><?= isset($_GET['description']) ? htmlspecialchars($_GET['description']) : '' ?></textarea><br>

        <label for="cover_url">Cover URL:</label>
        <input type="text" name="cover_url" value="<?= isset($_GET['cover_url']) ? htmlspecialchars($_GET['cover_url']) : '' ?>" readonly><br>

        <label for="recommended_by">Recommended By:</label>
        <input type="text" name="recommended_by" required><br>

        <label for="comment">Comment:</label>
        <textarea name="comment" required></textarea><br>

        <button type="submit">Add Book</button>
    </form>

    <!-- Fixed Footer -->
    <footer>
        <p>&copy; 2025 Community Reading List | <a href="index.php">Back to Home</a></p>
    </footer>

</body>
</html>
