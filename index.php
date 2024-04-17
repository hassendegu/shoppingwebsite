<!DOCTYPE>
<?php
session_start(); 
include("functions/functions.php");

?>
<html>
     <head>
    
    <title>Smart Online Shop</title>
    <link rel="stylesheet" href="styles/style.css" media="all" />
    
    </head>
<body>
         
    <!-- Main container starts here-->
    <div class="main_wrapper">
          
		<!-- Header starts here-->
        <div class="header_wrapper">
             
          <img id="logo" src="images/amir.jpg" />
		  <div id="sidebar_title">Advertisment</div>
          <div id ="amir"><?php advert(); ?> </div>
             
        </div>

        <!-- Navigations Bar starts-->
             
       <div class="menubar">
            <ul id="menu">
                <li><a href="index.php">Home</a> </li>
				<li><a href="about_us.php">About US</a> </li>
                <li><a href="all_products.php">All products</a> </li>
				 <li><a href="customer/my_account.php">My account</a> </li>
				<li><a href="customer_register.php">sign Up</a> </li>
                <li><a href="contact_us.php">Contact Us</a> </li>
				<li><a href="helpdesk.php">Help</a> </li>

           </ul>
           <div id="form">
              <form method="get" action="results.php" enctype="multipart/form-data">
                 <input type="text" name="user_query" placeholder="search a product" />
                 <input type="submit" name="search" value="Search" />
               </form>
           </div>
            
             </div>
             <!-- Navigation Bar ends -->
             
             <!-- content wrapper starts -->
             <div class="content_wrapper">
        <div id="sidebar">
            <div id="sidebar_title">Catagories</div>
            <ul id="cats">
           <?php getCats();  ?>  
            </ul>

        <div id="sidebar_title">Brands</div>
            <ul id="cats">
           <?php getBrands();  ?>  
            </ul>
	
        </div>

        <div id="content_area">

            <?php cart(); ?>

            <div id="shopping_cart">

                <span style="float:right; font-size:17px; padding:5px; line-height:40px;">
              
                    <b>Baga nagaan dhuftan! Welcome to our smart shop! </b>:
                    
					  <?php
                  if(!isset($_SESSION['user_email'])){

                      echo "<a href='login.php' style='color:orange;'>Login</a>";
                  }  
                 else{

                    echo "<a href='logout.php' style='color:orange';>Logout</a>"; 
                 }

                ?>

                </span>

            </div>
 
           <div id="products_box">

               <?php getPro(); ?>
               <?php getCatPro(); ?>
               <?php getBrandPro(); ?>

            </div>
                 
            </div>  
		
             </div>
             
        <!-- containt wrapper ends -->
				
        <div id ="footer">
           <h2 style="text-align:center; padding-top:30px;"><marquee>INFORMATION TECHNOLOGY&copy; GC 2024</marquee></h2>
        </div>
                
         </div>
         <!-- main container ends here-->
</body>    
</html>