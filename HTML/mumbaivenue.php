<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wedding Wonder</title>
    <link rel="stylesheet" href="../css/cart1.css">
    <link rel="stylesheet" href="../css/serrch.css">
    <script src="cart1.js"></script>
</head>
<body>
<div id="header">
  
  <!-- </select> -->
  <h4 class="headone"></h4>

  <!-- <h4 id="headingone" class="dropbtn" onmouseover="bigImg(this)" onmouseout="normalImg(this)" onclick="one()" >Wedding Vendors   -->

  <div class="dropdown">
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
  <div id="mainc">
            <!-- <h4 id="headingthree">Cart</h4> -->
            <h1 class="headone">Wedding Venue</h1>

            <div class="roww">
              

                <div class="col-lg-3">
                            <form action="manage_cart.php" method="POST">
                            <div class="card" style="width: 18rem;">
                           <a href="../HTML/vthree.html">   <img src="https://images.pexels.com/photos/169211/pexels-photo-169211.jpeg?auto=compress&cs=tinysrgb&w=600" class="card-img-top" alt="..."></a>
                              <div class="card-body text-center">
                              <h5 class="card-title">Udman By Ferns And Petals</h5>
                              <p class="card-text">Available On Request</p>
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
                           <a href="../HTML/vfour.html">   <img src="https://images.pexels.com/photos/17315419/pexels-photo-17315419/free-photo-of-a-wedding-venue-decorated-with-white-flowers.jpeg?auto=compress&cs=tinysrgb&w=600" class="card-img-top" alt="..."></a>
                              <div class="card-body text-center">
                              <h5 class="card-title">Orana Hotels And Resort</h5>
                              <p class="card-text">Available On Request</p>
                              <p>Mumbai</p>
                              <!-- <button href="#" type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button> -->

                              <input type="hidden"name="Item_Name" Value="Dress 4">
                              <input type="hidden"name="Price" Value="2200">
                            </div>
                            </div>
                            </form>
                </div>
            </div>

</body>
</html>