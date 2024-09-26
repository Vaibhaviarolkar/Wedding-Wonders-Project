
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
    <title>Document</title>
    <link rel="stylesheet" href="../css/cart1.css">
    <script src="cart1.js"></script>

</head>

<body>

<!-- <? print_r($_SESSION['cart']) ?> -->
    <div id="header">
        <input id="search" type="text" name="searchtext" placeholder="Search....">
        <img id="searchimage" src="../images/search2.png" width="20px" height="20px" alt="Search Image">
        <h4 id="headingone">Collections</h4>
        <h6 id="headingtwo">WEDDING WONDERS</h6>
        <a href="www.instagram.com"> <img id="instagramimage" src="../images/instagram.png" width="15px" height="15px"
                alt="Instagram Image"></a>
        <img id="facebookimage" src="../images/facebook.png" width="18px" height="18px" alt="Facebook Image">
        <img id="twitterimage" src="../images/twitter.png" width="18px" height="18px" alt="Twitter Image">
        <img id="youtubeimage" src="../images/youtube.png" width="22px" height="22px" alt="Youtube Image">
        <!-- <div class="cartt"><img id="cartimage" src="../images/bag.png" width="22px" height="22px" alt="Cart Image" ><p id ="countt">0</p></i></div> -->
            <a href="mycart.php" id="cartimage" class="btn btn-outline-success">My Cart (0)</a>
        <img id="userimage" src="../images/user.png" width="22px" height="22px" alt="User Image">
    <!-- </div> -->

  
        <div id="maincart">
            <!-- <h4 id="headingthree">Cart</h4> -->
            <h1 class="headone">Wedding Halls</h1>

            <div class="row">
                <div class="col-lg-3">
                            <form action="manage_cart.php"  method="POST">
                            <div class="card" style="width: 18rem;">
                              <a href="../HTML/vone.html"><img src="https://images.pexels.com/photos/1035665/pexels-photo-1035665.jpeg?auto=compress&cs=tinysrgb&w=600" class="card-img-top" alt="..."></a>
                              <div class="card-body text-center">
                              <h5 class="card-title">The Ritz By Ferns And Petals</h5>
                              <p class="card-text">Available On Request</p>
                              <button href="#" type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>

                              <input type="hidden"name="Item_Name" Value="Dress 1">
                              <input type="hidden"name="Price" Value="2000">
                            </div>
                            </div>
                            </form>
                </div>

                <div class="col-lg-3">
                            <form action="manage_cart.php"  method="POST">
                            <div class="card" style="width: 18rem;">
                             <a href="../HTML/vtwo.html"> <img src="https://images.pexels.com/photos/169189/pexels-photo-169189.jpeg?auto=compress&cs=tinysrgb&w=600" class="card-img-top" alt="..."></a>
                              <div class="card-body text-center">
                              <h5 class="card-title">JW Marriot Hotel</h5>
                              <p class="card-text">Available On Request</p>
                              <button href="#" type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>

                              <input type="hidden"name="Item_Name" Value="Dress 2">
                              <input type="hidden"name="Price" Value="2500">
                            </div>
                            </div>
                            </form>
                </div>

                <div class="col-lg-3">
                            <form action="manage_cart.php" method="POST">
                            <div class="card" style="width: 18rem;">
                           <a href="../HTML/vthree.html">   <img src="https://images.pexels.com/photos/169211/pexels-photo-169211.jpeg?auto=compress&cs=tinysrgb&w=600" class="card-img-top" alt="..."></a>
                              <div class="card-body text-center">
                              <h5 class="card-title">Udman By Ferns And Petals</h5>
                              <p class="card-text">Available On Request</p>
                              <button href="#" type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>

                              <input type="hidden"name="Item_Name" Value="Dress 3">
                              <input type="hidden"name="Price" Value="2570">
                            </div>
                            </div>
                            </form>
                </div>


                <div class="col-lg-3">
                            <form action="manage_cart.php"  method="POST">
                            <div class="card" style="width: 18rem;">
                           <a href="../HTML/vfour.html">   <img src="https://images.pexels.com/photos/17315419/pexels-photo-17315419/free-photo-of-a-wedding-venue-decorated-with-white-flowers.jpeg?auto=compress&cs=tinysrgb&w=600" class="card-img-top" alt="..."></a>
                              <div class="card-body text-center">
                              <h5 class="card-title">Orana Hotels And Resort</h5>
                              <p class="card-text">Available On Request</p>
                              <button href="#" type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>

                              <input type="hidden"name="Item_Name" Value="Dress 4">
                              <input type="hidden"name="Price" Value="2200">
                            </div>
                            </div>
                            </form>
                </div>
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