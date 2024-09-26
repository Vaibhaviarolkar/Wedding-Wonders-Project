

<?php 

require_once "database.php";
$sql="SELECT * FROM cartone";
$all_product=$conn->query($sql);
?>

<!DOCTYPE html>
<?php 
// include('.php');
// session_start();

// session_destroy();

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wedding Wonders</title>
    <link rel="stylesheet" href="../css/cart1.css">
    <script src="cart1.js"></script>

</head>

<body>

<!-- <? print_r($_SESSION['cart']) ?> -->
    <!-- <div id="header">
        <input id="search" type="text" name="searchtext" placeholder="Search....">
        <img id="searchimage" src="../images/search2.png" width="20px" height="20px" alt="Search Image">
        <h4 id="headingone">Collections</h4>
        <h6 id="headingtwo">WEDDING WONDERS</h6>
        <a href="www.instagram.com"> <img id="instagramimage" src="../images/instagram.png" width="15px" height="15px"
                alt="Instagram Image"></a>
        <img id="facebookimage" src="../images/facebook.png" width="18px" height="18px" alt="Facebook Image">
        <img id="twitterimage" src="../images/twitter.png" width="18px" height="18px" alt="Twitter Image">
        <img id="youtubeimage" src="../images/youtube.png" width="22px" height="22px" alt="Youtube Image"> -->
        <!-- <div class="cartt"><img id="cartimage" src="../images/bag.png" width="22px" height="22px" alt="Cart Image" ><p id ="countt">0</p></i></div> -->
            <!-- <a href="mycart.php" id="cartimage" class="btn btn-outline-success">My Cart (0)</a>
        <img id="userimage" src="../images/user.png" width="22px" height="22px" alt="User Image"> -->
    <!-- </div> -->

    <div id="header">
  
    <!-- </select> -->
    <h4 class="headone"></h4>

    <!-- <h4 id="headingone" class="dropbtn" onmouseover="bigImg(this)" onmouseout="normalImg(this)" onclick="one()" >Wedding Vendors   -->

    <div class="dropdown">
    <?php
            while($row=mysqli_fetch_assoc($all_product)){




            ?>
  <button class="dropbtn">Wedding Vendors</button>
  <div class="dropdown-content">
    <a href="#"> Bridal Makeup</a>
    <a href="#">Wedding Decor</a>
    <a href="#">Wedding Photography</a>
    <a href="#">Wedding Venue</a>

  </div>
</div>

    <div class="dropdown3">
  <button class="dropbtn3">AboutUs</button>
  <div class="dropdown-content3">
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quod incidunt, mollitia obcaecati blanditiis eum quas placeat aut laboriosam commodi modi! Reprehenderit voluptas distinctio excepturi cupiditate assumenda numquam. Dolorum suscipit rerum autem, consequatur nobis veritatis.</p>
    <!-- <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a> -->
  </div>
</div>

<div class="dropdown4">
  <button class="dropbtn4">ContactUs</button>
  <div class="dropdown-content4">
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
  </div>
</div>



   <!-- <h4 id="us">AboutUs</h4>  -->
    <!-- <h4 id="headingbtn1" class="dropbtn1" onmouseover="bigImg(this)" onmouseout="normalImg(this)" onclick="two()" >Why Wedding Vendors     -->

<!-- <div class="dropdown-content">
<h4 > <a href="../HTML/cart1.php" > Bridal Makeup</a></h4>
    <h4 ><a href="../HTML/cart1.php" > Wedding Decor</a></h4>
    <h4 ><a href="../HTML/cart1.php" > Wedding Photography</a></h4>
    <h4 ><a href="../HTML/cart1.php" > Wedding Venue</a></h4>
</div> -->



 
 
    <h6 id="headingtwo">WEDDING WONDERS</h6>

   <!-- <a href="www.instagram.com" > <img id="instagramimage" src="../images/instagram.png" width="15px" height="15px" alt="Instagram Image"></a>
    <img id="facebookimage" src="../images/facebook.png" width="18px" height="18px" alt="Facebook Image">
    <img id="twitterimage" src="../images/twitter.png" width="18px" height="18px" alt="Twitter Image">
    <img id="youtubeimage" src="../images/youtube.png" width="22px" height="22px" alt="Youtube Image"> -->
    <!-- <img id="cartimage" src="../images/bag.png" width="22px" height="22px" alt="Cart Image"> -->
<!-- 
    <a href="cart1.php"  id="cartimage" class="btn btn-outline-success">My Cart (0)</a> -->
    <!-- <a href="../HTML/register.php"><img id="userimage" src="../images/user.png" width="22px" height="22px" alt="User Image" ></a> -->
    
    

   
        
    </div>
  
        <div id="maincart">
            <!-- <h4 id="headingthree">Cart</h4> -->
            <h1 class="headone">Wedding Photography</h1>

            <div class="row">
                <div class="col-lg-3">
                            <form action="manage_cart.php"  method="POST">
                            <div class="card" style="width: 18rem;">
                              <a href="../HTML/pone.html"><img src="https://images.pexels.com/photos/3990404/pexels-photo-3990404.jpeg?auto=compress&cs=tinysrgb&w=600" class="card-img-top" alt="..."></a>
                              <div class="card-body text-center">
                              <h5 class="card-title">Pixbrics</h5>
                              <p class="card-text">Price: Rs.25000 Onwards</p>
                              <p>Pune</p>
                              <!-- <button href="#" type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button> -->

                              <input type="hidden"name="Item_Name" Value="Dress 1">
                              <input type="hidden"name="Price" Value="2000">
                            </div>
                            </div>
                            </form>
                </div>

                <div class="col-lg-3">
                            <form action="manage_cart.php"  method="POST">
                            <div class="card" style="width: 18rem;">
                             <a href="../HTML/ptwo.html"> <img src="https://images.pexels.com/photos/265722/pexels-photo-265722.jpeg?auto=compress&cs=tinysrgb&w=600" class="card-img-top" alt="..."></a>
                              <div class="card-body text-center">
                              <h5 class="card-title">Paran Singh Photography</h5>
                              <p class="card-text">Price: Rs.50000 Onwards</p>
                              <p>Pune</p>
                              <!-- <button href="#" type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button> -->

                              <input type="hidden"name="Item_Name" Value="Dress 2">
                              <input type="hidden"name="Price" Value="2500">
                            </div>
                            </div>
                            </form>
                </div>

                <div class="col-lg-3">
                            <form action="manage_cart.php" method="POST">
                            <div class="card" style="width: 18rem;">
                           <a href="../HTML/pthree.html">   <img src="https://images.pexels.com/photos/10147878/pexels-photo-10147878.jpeg?auto=compress&cs=tinysrgb&w=600" class="card-img-top" alt="..."></a>
                              <div class="card-body text-center">
                              <h5 class="card-title">Morvi Images</h5>
                              <p class="card-text">Price: Rs.60000 Onwards</p>
                              <p>Mumbai</p>
                              <!-- <button href="#" type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button> -->

                              <input type="hidden"name="Item_Name" Value="Dress 3">
                              <input type="hidden"name="Price" Value="2570">
                            </div>
                            </div>
                            </form>
                </div>


                <div class="col-lg-3">
                            <form action="manage_cart.php"  method="POST">
                            <div class="card" style="width: 18rem;">
                           <a href="../HTML/pfour.html">   <img src="https://images.pexels.com/photos/18613853/pexels-photo-18613853/free-photo-of-groom-and-the-bride-during-a-photo-session-at-the-fishermans-bastion.jpeg?auto=compress&cs=tinysrgb&w=600" class="card-img-top" alt="..."></a>
                              <div class="card-body text-center">
                              <h5 class="card-title">Weddshooter</h5>
                              <p class="card-text">Price: Rs.40000 Onwards</p>
                              <p>Mumbai</p>
                              <!-- <button href="#" type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button> -->

                              <input type="hidden"name="Item_Name" Value="Dress 4">
                              <input type="hidden"name="Price" Value="2200">
                            </div>
                            </div>
                            </form>
                </div>
                

                <?php

                          }




                ?>
                
            </div>
            <!-- <h3 id="cartItem">Your cart is Empty</h3> -->
            <!-- <form>
            <table id="carttable">
                <tr id="row1">
                    <th>.</th>
                    <th>.</th>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>SubTotal</th>
                   
                </tr>
                <hr id="one">


                <tr>
                    <td >.</td>
                    <td  id="root">.</td>
                    <td>.</td>
                    <td>.</td>
                    <td>.</td>
                    <td>.</td>
                </tr>

            </table>

       
            </form>


    <table id="checkout">
        <tr>
            <th id="cardtotal">Card Totals</th>
        </tr>
        <tr>
            <td class="subtotal"> Subtotal</td>
            <td class="total">Rs 0.0</td>
        </tr>
        <hr id="two">
        <tr>
             <td class="subtotal">Total</td>
             <td class="total">Rs 0.0</td>
        </tr>
        <hr id="three">
        <tr>
            <td rowspan="2" id="proceedtocheck">
                Proceed To Checkout
            </td>
        </tr>
        <hr id="four">
    </table>

</div> -->

<script src="../javascript/dressone.js"></script>
<script src="../javascript/cart2.js"></script>

</body>

</html>