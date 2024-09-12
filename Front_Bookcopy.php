<?php
$pageTitle = "Books";
include('includes1/book_header.php');


?>

   <section class="category-section-page">
        <div class="row m-0">
            <div class="col-lg-3 col-md-4 col-sm-12 p-0 border-right">
                <div class="drop-header">
                    <h5>Business</h5>
                </div>
                <div class="btn-section-for-mobile d-none d-d-block">
                    <div class="btn-group">
                        <div class="btn btn-light" id="click_on_view">
                            <i class="fa fa-th-large" aria-hidden="true" id="view_icon"></i>
                        </div>
                        <div class="btn btn-light" data-toggle="modal" data-target="#myModal">
                            <i class="fa fa-sort-alpha-asc" aria-hidden="true"></i> Sort by
                        </div>
                        <!-- The Modal -->
                        <div class="modal" id="myModal">
                            <div class="modal-dialog mx-0 modal-dialog-centered">
                                <div class="modal-content">
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <button type="button" class="reset my-auto btn btn-light" data-dismiss="modal" onclick="reset_short_data()">Reset</button>
                                        <h4 class="modal-title m-auto text-white">Sort by</h4>
                                        <button type="button" class="btn btn-light my-auto" data-dismiss="modal">Close</button>
                                    </div>
                                    <!-- Modal body -->
                                    <div class="modal-body p-0">
                                        <div class="drop-header">
                                            
                                        </div>
                                    </div>
                                    <!-- Modal footer -->
                                    <!-- <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  </div> -->
                                </div>
                            </div>
                        </div>
                        
                        <!-- The Modal -->
                        <div class="modal modal1 p-0" id="myModal1">
                            <div class="modal-dialog my-0 mx-0 modal-dialog-centered">
                                <div class="modal-content">
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <button type="button" class="reset my-auto btn btn-light" data-dismiss="modal" onclick="reset_price_data()">Reset</button>
                                        <h4 class="modal-title m-auto text-white">Filter</h4>
                                        <button type="button" class="btn btn-light my-auto" data-dismiss="modal">Close</button>
                                    </div>
                                    <!-- Modal body -->
                                    <div class="modal-body p-0">
                                        <div class="price-cate">
                                            
                                            <div class="col-sm-12">
                                                <div class="card py-2">
                                                    <div class="header-side-cat text-center">
                                                        <h5>Book Categories</h5>
                                                        <div id="vertical-menu" class="my-0 mx-auto w-100">
                                                            <ul class="vertical-main-menu">
                                                                <li class=" active ">
                                                                    <h3><span class="plus"> -  </span>Business</h3>
                                                                    <ul>
                                                                        <li class=" sub_active " id="left_side_cat_1" onclick="check_cat(1)"><a href="/books/social-science">Social Science</a></li>
                                                                        <li class="" id="left_side_cat_2" onclick="check_cat(2)"><a href="/books/physics">Physics</a></li>
                                                                        <li class="" id="left_side_cat_3" onclick="check_cat(3)"><a href="/books/chemistry">Chemistry</a></li>
                                                                        <li class="" id="left_side_cat_4" onclick="check_cat(4)"><a href="/books/mathematics">Mathematics</a></li>
                                                                        <li class="" id="left_side_cat_5" onclick="check_cat(5)"><a href="/books/botany">Botany</a></li>
                                                                        <li class="" id="left_side_cat_6" onclick="check_cat(6)"><a href="/books/zoology">Zoology</a></li>
                                                                        <li class="" id="left_side_cat_7" onclick="check_cat(7)"><a href="/books/law">Law</a></li>
                                                                        <li class="" id="left_side_cat_8" onclick="check_cat(8)"><a href="/books/account">Account</a></li>
                                                                        <li class="" id="left_side_cat_9" onclick="check_cat(9)"><a href="/books/economics">Economics</a></li>
                                                                        <li class="" id="left_side_cat_10" onclick="check_cat(10)"><a href="/books/political-science">Political Science</a></li>
                                                                        <li class="" id="left_side_cat_11" onclick="check_cat(11)"><a href="/books/philosophy">Philosophy</a></li>
                                                                        <li class="" id="left_side_cat_12" onclick="check_cat(12)"><a href="/books/arts">Arts</a></li>
                                                                        <li class="" id="left_side_cat_13" onclick="check_cat(13)"><a href="/books/environmental-science">Environmental Science</a></li>
                                                                        <li class="" id="left_side_cat_14" onclick="check_cat(14)"><a href="/books/hotel-management">Hotel Management</a></li>
                                                                        <li class="" id="left_side_cat_15" onclick="check_cat(15)"><a href="/books/library-science">Library Science</a></li>
                                                                        <li class="" id="left_side_cat_16" onclick="check_cat(16)"><a href="/books/medical">Medical</a></li>
                                                                        <li class="" id="left_side_cat_99" onclick="check_cat(99)"><a href="/books/research/-edited">Research/ Edited</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li class="">
                                                                    <h3><span class="plus"> + </span>Hacking</h3>
                                                                    <ul>
                                                                        <li class="" id="left_side_cat_17" onclick="check_cat(17)"><a href="/books/engineering">Engineering</a></li>
                                                                        <li class="" id="left_side_cat_18" onclick="check_cat(18)"><a href="https://www.ebookselibrary.com/books/management">Management</a></li>
                                                                        <li class="" id="left_side_cat_19" onclick="check_cat(19)"><a href="https://www.ebookselibrary.com/books/ca">CA</a></li>
                                                                        <li class="" id="left_side_cat_20" onclick="check_cat(20)"><a href="https://www.ebookselibrary.com/books/cfa">CFA</a></li>
                                                                        <li class="" id="left_side_cat_21" onclick="check_cat(21)"><a href="https://www.ebookselibrary.com/books/company-secretary">Company Secretary</a></li>
                                                                        <li class="" id="left_side_cat_22" onclick="check_cat(22)"><a href="https://www.ebookselibrary.com/books/icwa">ICWA</a></li>
                                                                        <li class="" id="left_side_cat_23" onclick="check_cat(23)"><a href="https://www.ebookselibrary.com/books/computers">Computers</a></li>
                                                                        <li class="" id="left_side_cat_100" onclick="check_cat(100)"><a href="https://www.ebookselibrary.com/books/research/-edited">Research/ Edited</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li class="">
                                                                    <h3><span class="plus"> + </span>Trading</h3>
                                                                    <ul>
                                                                        <li class="" id="left_side_cat_24" onclick="check_cat(24)"><a href="/books/competitions/railway">Railway</a></li>
                                                                        <li class="" id="left_side_cat_25" onclick="check_cat(25)"><a href="/books/competitions/banking">Banking</a></li>
                                                                        <li class="" id="left_side_cat_26" onclick="check_cat(26)"><a href="/books/competitions/upsc">UPSC</a></li>
                                                                        <li class="" id="left_side_cat_27" onclick="check_cat(27)"><a href="/books/competitions/iit-jee">IIT-JEE</a></li>
                                                                        <li class="" id="left_side_cat_28" onclick="check_cat(28)"><a href="/books/competitions/neet-aipmt">NEET/AIPMT</a></li>
                                                                        <li class="" id="left_side_cat_29" onclick="check_cat(29)"><a href="/books/competitions/ias">IAS</a></li>
                                                                        <li class="" id="left_side_cat_30" onclick="check_cat(30)"><a href="/books/competitions/law-enterance-exam">Law entrance exam</a></li>
                                                                        <li class="" id="left_side_cat_31" onclick="check_cat(31)"><a href="/books/competitions/state-exams">State Exams</a></li>
                                                                        <li class="" id="left_side_cat_32" onclick="check_cat(32)"><a href="/books/competitions/ntpc">NTPC</a></li>
                                                                        <li class="" id="left_side_cat_33" onclick="check_cat(33)"><a href="/books/competitions/nda">NDA</a></li>
                                                                        <li class="" id="left_side_cat_34" onclick="check_cat(34)"><a href="/books/competitions/olympiad">Olympiad</a></li>
                                                                        <li class="" id="left_side_cat_35" onclick="check_cat(35)"><a href="/books/competitions/ugc-net">UGC NET</a></li>
                                                                        <li class="" id="left_side_cat_36" onclick="check_cat(36)"><a href="/books/competitions/current-affairs">Current Affairs</a></li>
                                                                        <li class="" id="left_side_cat_37" onclick="check_cat(37)"><a href="/books/competitions/teaching-exam">Teaching Exam</a></li>
                                                                        <li class="" id="left_side_cat_38" onclick="check_cat(38)"><a href="/books/competitions/study-packages">Study Packages</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li class="">
                                                                    <h3><span class="plus"> + </span>General</h3>
                                                                    <ul>
                                                                        <li class="" id="left_side_cat_53" onclick="check_cat(53)"><a href="/books/general/fiction">Fiction</a></li>
                                                                        <li class="" id="left_side_cat_54" onclick="check_cat(54)"><a href="/books/general/non-fiction">Non-Fiction</a></li>
                                                                        <li class="" id="left_side_cat_55" onclick="check_cat(55)"><a href="/books/general/puzzles-and-quizzes">Puzzles and Quizzes</a></li>
                                                                        <li class="" id="left_side_cat_56" onclick="check_cat(56)"><a href="/books/general/religious-spritual">Religious/ Spiritual</a></li>
                                                                        <li class="" id="left_side_cat_57" onclick="check_cat(57)"><a href="/books/general/cooking">Cooking</a></li>
                                                                        <li class="" id="left_side_cat_58" onclick="check_cat(58)"><a href="/books/general/enternainment">Entertainment</a></li>
                                                                        <li class="" id="left_side_cat_59" onclick="check_cat(59)"><a href="/books/general/story-books">Story books</a></li>
                                                                        <li class="" id="left_side_cat_60" onclick="check_cat(60)"><a href="/books/general/essay">Essay</a></li>
                                                                        <li class="" id="left_side_cat_61" onclick="check_cat(61)"><a href="/books/general/personality-development">Personality Development</a></li>
                                                                        <li class="" id="left_side_cat_62" onclick="check_cat(62)"><a href="/books/general/career-development">Career Development</a></li>
                                                                        <li class="" id="left_side_cat_95" onclick="check_cat(95)"><a href="/books/general/magazines">Magazines</a></li>
                                                                        <li class="" id="left_side_cat_96" onclick="check_cat(96)"><a href="/books/general/horror">Horror</a></li>
                                                                        <li class="" id="left_side_cat_97" onclick="check_cat(97)"><a href="/books/general/others">Others</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li class="">
                                                                    <h3><span class="plus"> + </span>Journals</h3>
                                                                    <ul>
                                                                        <li class="" id="left_side_cat_75" onclick="check_cat(75)"><a href="/books/journals/physics">Physics</a></li>
                                                                        <li class="" id="left_side_cat_76" onclick="check_cat(76)"><a href="/books/journals/chemistry">Chemistry</a></li>
                                                                        <li class="" id="left_side_cat_77" onclick="check_cat(77)"><a href="/books/journals/mathematics">Mathematics</a></li>
                                                                        <li class="" id="left_side_cat_78" onclick="check_cat(78)"><a href="/books/journals/biology">Biology</a></li>
                                                                        <li class="" id="left_side_cat_79" onclick="check_cat(79)"><a href="/books/journals/	
computers">Computers</a></li>
                                                                        <li class="" id="left_side_cat_80" onclick="check_cat(80)"><a href="/books/journals/economics">Economics</a></li>
                                                                        <li class="" id="left_side_cat_81" onclick="check_cat(81)"><a href="/books/journals/accountancy">Accountancy</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li class="">
                                                                    <h3><span class="plus"> + </span>School</h3>
                                                                    <ul>
                                                                        <li class="" id="left_side_cat_39" onclick="check_cat(39)"><a href="/books/school/pre-primary">Pre-Primary</a></li>
                                                                        <li class="" id="left_side_cat_40" onclick="check_cat(40)"><a href="/books/school/primary">Primary</a></li>
                                                                        <li class="" id="left_side_cat_41" onclick="check_cat(41)"><a href="/books/school/class-1">Class 1</a></li>
                                                                        <li class="" id="left_side_cat_42" onclick="check_cat(42)"><a href="/books/school/class-2">Class 2</a></li>
                                                                        <li class="" id="left_side_cat_43" onclick="check_cat(43)"><a href="/books/school/class-3">Class 3</a></li>
                                                                        <li class="" id="left_side_cat_44" onclick="check_cat(44)"><a href="/books/school/class-4">Class 4</a></li>
                                                                        <li class="" id="left_side_cat_45" onclick="check_cat(45)"><a href="/books/school/class-5">Class 5</a></li>
                                                                        <li class="" id="left_side_cat_46" onclick="check_cat(46)"><a href="/books/school/class-6">Class 6</a></li>
                                                                        <li class="" id="left_side_cat_47" onclick="check_cat(47)"><a href="/books/school/class-7">Class 7</a></li>
                                                                        <li class="" id="left_side_cat_48" onclick="check_cat(48)"><a href="/books/school/class-8">Class 8</a></li>
                                                                        <li class="" id="left_side_cat_49" onclick="check_cat(49)"><a href="/books/school/class-9">Class 9</a></li>
                                                                        <li class="" id="left_side_cat_50" onclick="check_cat(50)"><a href="/books/school/class-10">Class 10</a></li>
                                                                        <li class="" id="left_side_cat_51" onclick="check_cat(51)"><a href="/books/school/class-11">Class 11</a></li>
                                                                        <li class="" id="left_side_cat_52" onclick="check_cat(52)"><a href="/books/school/class-12">Class 12</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li class="">
                                                                    <h3><span class="plus"> + </span>Story Book</h3>
                                                                    <ul>
                                                                        <li class="" id="left_side_cat_82" onclick="check_cat(82)"><a href="/books/story-book/magazine">magazine</a></li>
                                                                        <li class="" id="left_side_cat_83" onclick="check_cat(83)"><a href="/books/story-book/adventure">Adventure</a></li>
                                                                        <li class="" id="left_side_cat_84" onclick="check_cat(84)"><a href="/books/story-book/thriller">Thriller</a></li>
                                                                        <li class="" id="left_side_cat_85" onclick="check_cat(85)"><a href="/books/story-book/mystery">Mystery</a></li>
                                                                        <li class="" id="left_side_cat_86" onclick="check_cat(86)"><a href="/books/story-book/horror">Horror</a></li>
                                                                        <li class="" id="left_side_cat_87" onclick="check_cat(87)"><a href="/books/story-book/others">Others</a></li>
                                                                        <li class="" id="left_side_cat_88" onclick="check_cat(88)"><a href="/books/story-book/bed-time-stories">Bed time stories</a></li>
                                                                        <li class="" id="left_side_cat_89" onclick="check_cat(89)"><a href="/books/story-book/fairy-tales">Fairy tales</a></li>
                                                                        <li class="" id="left_side_cat_90" onclick="check_cat(90)"><a href="/books/story-book/folk-tales">Folk Tales</a></li>
                                                                        <li class="" id="left_side_cat_91" onclick="check_cat(91)"><a href="/books/story-book/short-stories">Short Stories</a></li>
                                                                        <li class="" id="left_side_cat_92" onclick="check_cat(92)"><a href="/books/story-book/suspense">Suspense</a></li>
                                                                        <li class="" id="left_side_cat_93" onclick="check_cat(93)"><a href="/books/story-book/moral-stories">Moral Stories</a></li>
                                                                        <li class="" id="left_side_cat_94" onclick="check_cat(94)"><a href="/books/story-book/others">Others</a></li>
                                                                        <li class="" id="left_side_cat_98" onclick="check_cat(98)"><a href="/books/story-book/classics">Classics</a></li>
                                                                        <li class="" id="left_side_cat_101" onclick="check_cat(101)"><a href="/books/story-book/hindi-story">Hindi Story</a></li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="card pt-2">
                                                    <div class="header-side-cat text-center">
                                                        <h5>Publishers</h5>
                                                        <div id="vertical-menu" class="my-0 mx-auto w-100">
                                                            <ul class="vertical-main-menu" style="margin-left:15px;">
                                                                <li class="addon_class" id="p_id_list_18" onclick="get_publisher_books(18,1,1)">
                                                                    <h3>Brainmate</h3>
                                                                </li>
                                                                <li class="addon_class" id="p_id_list_24" onclick="get_publisher_books(24,1,1)">
                                                                    <h3>Pragati Prakashan</h3>
                                                                </li>
                                                                <li class="addon_class" id="p_id_list_35" onclick="get_publisher_books(35,1,1)">
                                                                    <h3>AS Prakashan</h3>
                                                                </li>
                                                                <li class="addon_class" id="p_id_list_70" onclick="get_publisher_books(70,1,1)">
                                                                    <h3>Amba International Publishers And Distributors</h3>
                                                                </li>
                                                                <li class="addon_class" id="p_id_list_64" onclick="get_publisher_books(64,1,1)">
                                                                    <h3>Career Success Guru Publishers</h3>
                                                                </li>
                                                                <li class="addon_class" id="p_id_list_65" onclick="get_publisher_books(65,1,1)">
                                                                    <h3>ZIG ZAG Books</h3>
                                                                </li>
                                                                <li class="addon_class" id="p_id_list_68" onclick="get_publisher_books(68,1,1)">
                                                                    <h3>AISECT Publication, Bhopal</h3>
                                                                </li>
                                                                <li class="addon_class" id="p_id_list_69" onclick="get_publisher_books(69,1,1)">
                                                                    <h3>Project Gutenberg</h3>
                                                                </li>
                                                                <li class="addon_class" id="p_id_list_71" onclick="get_publisher_books(71,1,1)">
                                                                    <h3>Ram Prasad &amp; Sons, Bhopal</h3>
                                                                </li>
                                                                <li class="addon_class" id="p_id_list_72" onclick="get_publisher_books(72,1,1)">
                                                                    <h3>Jawahar Publishers And Distributors Pvt Ltd.</h3>
                                                                </li>
                                                                <li class="addon_class" id="p_id_list_73" onclick="get_publisher_books(73,1,1)">
                                                                    <h3>Kailash Pustak Sadan</h3>
                                                                </li>
                                                                <li class="addon_class" id="p_id_list_74" onclick="get_publisher_books(74,1,1)">
                                                                    <h3>Vani Prakashan</h3>
                                                                </li>
                                                                <li class="addon_class" id="p_id_list_75" onclick="get_publisher_books(75,1,1)">
                                                                    <h3>Rastogi Publication</h3>
                                                                </li>
                                                                <li class="addon_class" id="p_id_list_76" onclick="get_publisher_books(76,1,1)">
                                                                    <h3>MBML PUBLICATION</h3>
                                                                </li>
                                                                <li class="addon_class" id="p_id_list_77" onclick="get_publisher_books(77,1,1)">
                                                                    <h3>AYUSHMAN PUBLICATION HOUSE</h3>
                                                                </li>
                                                                <li class="addon_class" id="p_id_list_78" onclick="get_publisher_books(78,1,1)">
                                                                    <h3>RUDRA PUBLICATION</h3>
                                                                </li>
                                                                <li class="addon_class" id="p_id_list_79" onclick="get_publisher_books(79,1,1)">
                                                                    <h3>KITAB MAHAL</h3>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal footer -->
                                    <!-- <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!---------------------------------------------------------------------------->
                <div class=" m-d-none">
                     
                    <div class="col-sm-12 mt-4">
                        <div class="card py-2">
                            <div class="header-side-cat text-center">
                                <h5>Book Categories</h5>
                                <div id="" class="my-0 mx-auto w-100">
                                    <ul class="vertical-main-menu" >
                                   
                                    
                                    
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
            <div class="col-lg-9 col-md-8 col-sm-12 p-0">
                
              
            </div>
        </div>
        </div>
    </section>
    <section class="container">
    
    </section>
   
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    

    

<?php include('includes1/footer_front.php');?>