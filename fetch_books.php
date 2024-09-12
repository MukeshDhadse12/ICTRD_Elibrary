<?php
// Database connection (similar to other files)
define('DB_SERVER', "localhost");
define('DB_USERNAME', "root");
define('DB_PASSWORD', "");
define('DB_DATABASE', "dashboard");

$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

// Check if category ID is provided in the POST data
if (isset($_POST['categoryId'])) {
    $categoryId = $_POST['categoryId'];

    // Fetch books based on category ID
    $bookQuery = "SELECT * FROM books WHERE category_id = $categoryId AND status = '0'";
    $result = mysqli_query($conn, $bookQuery);

    // Generate HTML content for fetched books
    $booksHTML = '';
    if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $booksHTML .= '<div class="col-md-3 mb-3">';
            $booksHTML .= '<div class="card shadow-sm">';
            $booksHTML .= '<img src="' . $row['coverImage'] . '" class="w-100 rounded" alt="Img" style="min-height:300px; max-height:200px;" />';
            $booksHTML .= '<div class="card-body">';
            $booksHTML .= '<h5>' . $row['title'] . '</h5>';
            $booksHTML .= '<div>';
            $booksHTML .= '<button class="download-button"><a href="Books_detail.php?id=' . $row['id'] . '">Read More</a></button>';
            $booksHTML .= '</div>';
            $booksHTML .= '</div>';
            $booksHTML .= '</div>';
            $booksHTML .= '</div>';
        }
    } else {
        $booksHTML = '<div class="col-md-12"><h5>No Books Available</h5></div>';
    }

    // Return HTML content of books
    echo $booksHTML;
}

// Close database connection
mysqli_close($conn);
?>
