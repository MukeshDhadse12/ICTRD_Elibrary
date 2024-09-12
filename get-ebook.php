<?php
define('DB_SERVER',"localhost");
define('DB_USERNAME',"root");
define('DB_PASSWORD',"");
define('DB_DATABASE',"dashboard");

$conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

if(!$conn){
  die("Connection Failed: ". mysqli_connect_error());
}

$bookId = $_GET['bookId'];

$sql = $conn->prepare("SELECT ebookUpload FROM books WHERE id = ?");
$sql->bind_param("i", $bookId);
$sql->execute();
$sql->bind_result($pdfPath);
$sql->fetch();
$sql->close();

if ($pdfPath) {
    echo json_encode(['success' => true, 'pdfUrl' => $pdfPath]);
} else {
    echo json_encode(['success' => false, 'message' => 'Book not found.']);
}

$conn->close();
?>
