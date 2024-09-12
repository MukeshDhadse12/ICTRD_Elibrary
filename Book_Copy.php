<?php
$pageTitle = "Books";
include('includes1/book_header.php');
?>


<style>
    .download-button {
        background-color: #0f8967;
        color: #fff;
        border: none;
        padding: 5px 10px;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
        margin-top: 10px;
        align-items: center;
    }

    .download-button:hover {
        background-color: #ff6700;
    }

   
</style>
<div class='row' >
    <div class='col-9' >
        <div class="py-5 bg-light">
            <div class="container">
                <div class="row">
                    <?php
            $bookQuery = "SELECT * FROM books WHERE status='0' ";
            $result = mysqli_query($conn, $bookQuery);

            if($result){
                if(mysqli_num_rows($result) > 0){
                    foreach($result as $row){
                        ?>
                    <div class="col-md-3 mb-3">
                        <div class="card shadow-sm">

                            <img src="<?= $row['coverImage']; ?>" class="w-100 rounded" alt="Img"
                                style="min-height:300px; max-height:200px;" />
                            <div class="card-body">
                                <h5>
                                    <?= $row['title']; ?>
                                </h5>

                                <div>
                                    <button class="download-button">
                                        <a href="Books_detail.php?id=<?= $row['id']; ?>">Read More</a>

                                    </button>
                                </div>
                            </div>
                        </div>

                    </div>
                    <?php
                    }
                }else{
                    ?>
                    <div class="col-md-12">
                        <h5>No Books Available </h5>
                    </div>
                    <?php
                    
                }
            }else{
                ?>
                    <div class="col-md-12">
                        <h5>Something went Wrong </h5>
                    </div>
                    <?php
                
            }
            ?>


                </div>
            </div>
        </div>
    </div>



        <div class='col-3'>
            <div class="col-sm-12 mt-4">
                <div class="card py-2">
                    <div class="header-side-cat text-center">
                        <h5>Book Categories</h5>
                        <div id="" class="my-0 mx-auto w-100">
                            <ul class="vertical-main-menu">
                            <?php
    // Database connection
   


    // Fetch categories
    $sqlCategories = "SELECT * FROM categories";
    $resultCategories = $conn->query($sqlCategories);
    while ($rowCategory = $resultCategories->fetch_assoc()) {
        echo "<li><h6 style='font-family: Times New Roman; 
        font-size: 20px; 
        text-align: left; 
        padding-left: 30px;'
        onclick='toggleSubcategories(" . $rowCategory['id'] . ")'>
        <span class='category-toggle'>+</span>" . $rowCategory['categoryname'] . "</h6>
        <ul id='subcategory-list-" . $rowCategory['id'] . "' style='display: none;'>";

        // Fetch subcategories for each category
        $sqlSubcategories = "SELECT * FROM subcategories WHERE category_id = " . $rowCategory['id'];
        $resultSubcategories = $conn->query($sqlSubcategories);
        while ($rowSubcategory = $resultSubcategories->fetch_assoc()) {
            echo "<li style='font-family: Times New Roman; 
            font-size: 20px; 
            text-align: left; 
            padding-left: 50px;'
            onclick='fetchEbooks(" . $rowCategory['id'] . ", " . $rowSubcategory['id'] . ")'><span >-</span>" . $rowSubcategory['subcatname'] . "</li>";
        }

        echo "</ul></li>";
    }

    // Close database connection
    $conn->close();
    ?>




                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    

</div>





<?php include('includes1/footer_front.php');?>