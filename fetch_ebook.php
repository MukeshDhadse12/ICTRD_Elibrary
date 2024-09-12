<?php
// Database connection
define('DB_SERVER', "localhost");
define('DB_USERNAME', "root");
define('DB_PASSWORD', "");
define('DB_DATABASE', "dashboard");

$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

$categoryId = intval($_GET['category_id']);
$subcategoryId = intval($_GET['subcategory_id']);

// Fetch books based on category and subcategory
$sqlBooks = "SELECT * FROM books WHERE category_id = $categoryId AND subcategory_id = $subcategoryId";
$resultBooks = $conn->query($sqlBooks);

if ($resultBooks->num_rows > 0) {
    while ($rowBook = $resultBooks->fetch_assoc()) {
        echo "<div class='card' style='width: 18rem; margin: 10px;'>
                <img src='" . $rowBook['coverImage'] . "' class='card-img-top' alt='" . $rowBook['title'] . "'>
                <div class='card-body'>
                    <h5 class='card-title'>" . $rowBook['title'] . "</h5>
                    <a href='download.php?file=" . urlencode($rowBook['coverImage']) . "' class='btn btn-primary'>Download</a>
                </div>
              </div>";
    }
} else {
    echo "No books found for this category/subcategory.";
}

// Close database connection
$conn->close();
?>