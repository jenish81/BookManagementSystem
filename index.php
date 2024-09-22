<!DOCTYPE html>
<html>
<head>
    <title>Book Management System</title>
    <style>
        table {
            width: 50%;
            margin-top: 20px;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        .error {
            color: red;
        }
        body{
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Book Management System</h1>
    <br><br>
    <?php
    include 'Book.php';
    $books = [];
    $errors = [];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $title = $_POST['title'] ?? '';
        $author = $_POST['author'] ?? '';
        $year = $_POST['year'] ?? '';

        if (empty($title) || empty($author) || empty($year)) {
            $errors[] = "All fields are required.";
        } elseif (!is_numeric($year) || $year < 0) {
            $errors[] = "Kindly enter valid publication year.";
        } else {
            try {
                $book = new Book($title, $author, $year);
                $books[] = $book;
            } catch (Exception $e) {
                $errors[] = $e->getMessage();
            }
        }
    }

    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo "<p class='error'>$error</p>";
        }
    }

    if (count($books) > 0) {
        echo "<table>
                <tr>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Year</th>
                </tr>";
        foreach ($books as $book) {
            echo "<tr>
                    <td>" . htmlspecialchars($book->getTitle()) . "</td>
                    <td>" . htmlspecialchars($book->getAuthor()) . "</td>
                    <td>" . htmlspecialchars($book->getYear()) . "</td>
                </tr>";
        }
        echo "</table>";
    } else {
        echo "<p>No books have been added yet.</p>";
    }
    ?>
<br><br><br><br>
<h3>Insert Books</h3>
    <form method="POST" action="">
        <label for="title">Book Title:</label><br>
        <input type="text" id="title" name="title"><br><br>

        <label for="author">Author:</label><br>
        <input type="text" id="author" name="author"><br><br>

        <label for="year">Publication Year:</label><br>
        <input type="text" id="year" name="year"><br><br>

        <input type="submit" value="Add Book" style="cursor:pointer;">
    </form>
</body>
</html>