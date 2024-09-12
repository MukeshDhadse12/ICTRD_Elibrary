<?php
define('DB_SERVER', "localhost");
define('DB_USERNAME', "root");
define('DB_PASSWORD', "");
define('DB_DATABASE', "dashboard");

$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

<?php
// Database connection
include('includes1/db_connection.php');

if (isset($_POST['query']) && isset($_POST['type'])) {
    $query = $_POST['query'];
    $type = $_POST['type'];
    $output = '';

    if ($type == 'author') {
        $sql = "SELECT name FROM author WHERE name LIKE '%$query%'";
    } elseif ($type == 'publisher') {
        $sql = "SELECT name FROM publisher WHERE name LIKE '%$query%'";
    }

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $output .= '<div onclick="selectSuggestion(\'' . $row['name'] . '\', \'' . $type . '\')">' . $row['name'] . '</div>';
        }
    } else {
        $output .= '<div>No suggestions found</div>';
    }

    echo $output;
}
?>
