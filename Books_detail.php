<?php
session_start();
if(!isset($_SESSION["fname"])){
    header("Location:login.php");
}
$pageTitle = "Books";
include('includes1/book_header.php');





if(isset($_GET['id']))
{
    if($_GET['id'] == null){
        redirect('Books.php','');
    }
}else{
    redirect('Books.php','');
}

$book_id = validate($_GET['id']);
$book = "SELECT * FROM books WHERE status='0' AND id='$book_id' LIMIT 1";
$result = mysqli_query($conn,$book);
if(!$result){
    redirect('book.php','');
}

$rowData = mysqli_fetch_assoc($result);
?>
<style>
    

    .book-container {
    display: flex;
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    max-width: 800px;
    width: 100%;
    
}


.book-cover img {
    max-width: 300px;
    border-radius: 8px;
    
    
}


.book-details {
    margin-left: 20px;
    flex-grow: 1;
}

.book-details h1 {
    margin-top: 0;
}

.reviews {
    display: flex;
    align-items: center;
}

.stars {
    color: #ff6700;
    margin-right: 10px;
}

.review-count {
    color: #888;
}

.author {
    margin: 10px 0;
}

.author a {
    color: #007bff;
    text-decoration: none;
}

.author a:hover {
    text-decoration: underline;
}

.description p {
    margin: 10px 0;
    color: #333;
}

.meta p {
    margin: 5px 0;
    color: #666;
}

.download-button {
    background-color: #0f8967;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
    margin-top: 10px;
}

.download-button:hover {
    background-color: #ff6700;
}
</style>
<div>
<div class="py-5 bg-light"  >
    <div class="container">
        <div class="row">
            <div class="col-md-8 book-container">
                <div class="book-cover" >
                <img src="<?= $rowData['coverImage']; ?>" class=" rounded" alt="Img"
                />
                </div>
                <div class="book-details">
                <h4><?= $rowData['title'] ?></h4>
                <div class="reviews">
                <span class="stars">★★★★★</span>
                <span class="review-count">4 Customer reviews</span>
               </div>
                
                <div class="underline"></div>
                <div class="meta">
                <?php
                $categoryId =$rowData['categories'];
                $query_category = "SELECT * FROM categories where id='$categoryId'";
                $result_category = mysqli_query($conn, $query_category);
                ?>
                <p><strong>Category:</strong>
                <?php foreach($result_category as $category_row){echo $category_row['categoryname'];} ?>
              </p>

              
  
                
                <p><strong>Author:</strong>
                <?php 
                              $authorsql="select author.name from author INNER JOIN books_author on author.id=books_author.author_id WHERE books_author.book_id='".$rowData['id']."'";
                              
                              $authorresult=mysqli_query($conn,$authorsql);
                              
                              while($authordata=mysqli_fetch_array($authorresult))
                              {
                                               
                              echo $authordata['name'].',';
                              }
                              ?>
            
                </p>

                <?php
                $publisherId =$rowData['publishers'];
                $query_publisher = "SELECT * FROM publisher where id='$publisherId'";
                $result_publisher = mysqli_query($conn, $query_publisher);
                ?>
                <p><strong>Publisher:</strong>
                <?php foreach($result_publisher as $publisher_row){echo $publisher_row['name'];} ?>
            
            </p>
            </div>
            
                
                
               <div class="description">
               <p>
                <?= $rowData['description'] ?>
                </p>
               </div>
               <div>
        <button id="downloadButton" class="download-button">Download</button>
    </div>
                
            </div>

        </div>
    </div>

</div>
</div>



<script>
    // Function to get the bookId from the URL parameters
    function getQueryParam(param) {
        const urlParams = new URLSearchParams(window.location.search);
        return urlParams.get(param);
    }

    document.getElementById('downloadButton').addEventListener('click', function() {
        const bookId = getQueryParam('id'); // Get bookId from URL parameters

        fetch(`get-ebook.php?bookId=${bookId}`)
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Open PDF in a new tab
                    window.open(data.pdfUrl, '_blank');
                } else {
                    alert('Failed to fetch the PDF.');
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });
    });
    </script>





<?php include('includes1/footer_front.php');?>
