<?php
$servername = "localhost";
$username = "root"; // Change this to your MySQL username
$password = ""; // Change this to your MySQL password
$dbname = "dashboard";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $authorName = $_POST['authorName'];
    
    $sql = "SELECT b.id, b.title, b.categories, b.coverImage, a.name AS author_name 
            FROM books b
            JOIN books_author ba ON b.id = ba.book_id
            JOIN author a ON a.id = ba.author_id
            JOIN categories c ON b.categories = c.id
            WHERE a.name LIKE '%$authorName%'";
    
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<div class='card'>";
            if ($row['coverImage']) {
                echo "<img src='" . $row['coverImage'] . "' alt='Book Cover'>";
            } else {
                echo "<img src='default_cover.jpg' alt='Book Cover'>";
            }
            echo "<h3>" . $row['title'] . "</h3>";
            echo "<p>Author: " . $row['author_name'] . "</p>";
            echo "<p>Category: " . $row['categoryname'] . "</p>";
            echo "<div class='buttons'>
                    <a href='#'>Read More</a>
                    <a href='download.php?id=" . $row['id'] . "'>Download</a>
                  </div>";
            echo "</div>";
        }
    } else {
        echo "0 results";
    }
}
$conn->close();
?>
