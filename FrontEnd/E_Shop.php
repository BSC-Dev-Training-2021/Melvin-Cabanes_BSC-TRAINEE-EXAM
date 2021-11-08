<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Melvin Shop</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='style.css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src='main.js'></script>
</head>
<body>

    <!--NAVIGATION BAR-->
   <header>
       <a href="#">LOGO</a>
       <nav>
        
           <ul class="nav-links">
               <li><a href="profile.php">My Account</a></li>
               <li><a href="#">Customer Care</a></li>
               <li><a href="checkout.php">Track My Order</a></li>
               <input type="search" name="searchbar" placeholder="Search here...">
                <button>Search</button>
           </ul>
       </nav>
       
        
      
   </header>
    <!--LEFT SIDE BAR-->

    <div>
        
        <ul class="sideMenu">
            <p>CATEGORY</p>    
            <li><a href="E_Shop.php">Electronic Devices</a></li>
            <li><a href="E_Shop.php">Electronic Accessories</a></li>
            <li><a href="E_Shop.php">TV & Home Appliances</a></li>
            <li><a href="E_Shop.php">Health & Beauty</a></li>
            <li><a href="E_Shop.php">Babies & Toys</a></li>
            <li><a href="E_Shop.php">Groceries & Pets</a></li>
            <li><a href="E_Shop.php">Home & Living</a></li>
            <li><a href="E_Shop.php">Women's Fashion</a></li>
            <li><a href="E_Shop.php">Men's Fashion</a></li>
            <li><a href="E_Shop.php">Fashion Accessories</a></li>
            <li><a href="E_Shop.php">Sports & Lifestyle</a></li>
            <li><a href="E_Shop.php">Automotive & Motorcycles</a></li>
        </ul>
    </div>

    <!--MAIN-->

    <div class="banner">
        <!--Banner-->
        <img class = "bannerImage" src="img/banner.jpg" alt="">
    

        <!--Items-->
 
        <h3>Flash Sale</h3>
        <div class="itemImages-container">
            <ul>
                <li>
                    <a href="additem.php"><img src = "img/add.png"></a>
                    <a href="E_Shop.php"></a>
                    <div class="itemText">
                            <p>Add Item</p>
                           <!-- <p>Price: </p>
                        
                    <div>
                        <button>Buy now</button>
                        <button>add to cart</button>
                    </div></div>-->
                </li>
            </ul>
        </div>
    </div>
    <!--FOOTER-->

    <footer>
        <p>Follow Us</p>
        <p>&copy; Melvin Shop || All Rights Reserved 2021 </p>
        
    </footer>
</body>
</html>