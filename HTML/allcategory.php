<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Wedding Wonders</title>
    <link rel="stylesheet" href="../css/cart1.css">
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

<div class="dropdown5">
  <button class="dropbtn5">Admin </button>
  <div class="dropdown-content5">
    <button type="button">Add Bridal MakeUp</button>
    <button type="button">Add Wedding Decor</button>
    <button type="button">Add Wedding Photography</button>
    <button type="button">Add  Wedding Venue</button>
    <button type="button"><a href="../HTML/data.php">Records</a></button>

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

  <div id="maincart0">
            <!-- <h4 id="headingthree">Cart</h4> -->

        <h1 class="headone">Bridal Makeup</h1>
            <div class="row">
                <div class="col-lg-3">
                            <form action="manage_cart.php"  method="POST">
                            <div class="card" style="width: 18rem;">
                              <a href="../HTML/register.php"><img src="https://images.pexels.com/photos/8881955/pexels-photo-8881955.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load" class="card-img-top" alt="..."></a>
                              <div class="card-body text-center">
                              <h5 class="card-title">Swati Verma Makeovers</h5>
                              <p class="card-text">Price: Rs.24000 Onwards</p>
                              <!-- <button href="#" type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button> -->
                              <p>Pune</p>

                              <input type="hidden"name="Item_Name" Value="Dress 1">
                              <input type="hidden"name="Price" Value="2000">
                            </div>
                            </div>
                            </form>
                </div>

                <div class="col-lg-3">
                            <form action="manage_cart.php"  method="POST">
                            <div class="card" style="width: 18rem;">
                             <a href="../HTML/register.php"> <img src="https://images.pexels.com/photos/9418537/pexels-photo-9418537.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load" class="card-img-top" alt="..."></a>
                              <div class="card-body text-center">
                              <h5 class="card-title">Chandani Singh Studio</h5>
                              <p class="card-text">Price: Rs.15000 Onwards</p>
                              <!-- <button href="#" type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button> -->
                              <p>Pune</p>
                              <input type="hidden"name="Item_Name" Value="Dress 2">
                              <input type="hidden"name="Price" Value="2500">
                            </div>
                            </div>
                            </form>
                </div>

                <div class="col-lg-3">
                            <form action="manage_cart.php" method="POST">
                            <div class="card" style="width: 18rem;">
                           <a href="../HTML/register.php">   <img src="https://images.pexels.com/photos/8881950/pexels-photo-8881950.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load" class="card-img-top" alt="..."></a>
                              <div class="card-body text-center">
                              <h5 class="card-title">Shruti Sharma</h5>
                              <p class="card-text">Price: Rs.45000 Onwards</p>
                              <!-- <button href="#" type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button> -->
                              <p>Mumbai</p>

                              <input type="hidden"name="Item_Name" Value="Dress 3">
                              <input type="hidden"name="Price" Value="2570">
                            </div>
                            </div>
                            </form>
                </div>


                <div class="col-lg-3">
                            <form action="manage_cart.php"  method="POST">
                            <div class="card" style="width: 18rem;">
                           <a href="../HTML/register.php">   <img src="https://images.pexels.com/photos/2100868/pexels-photo-2100868.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load" class="card-img-top" alt="..."></a>
                              <div class="card-body text-center">
                              <h5 class="card-title">Makeup By Deesha</h5>
                              <p class="card-text">Price: Rs.40000 Onwards</p>
                              <!-- <button href="#" type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button> -->
                              <p>Mumbai</p>
                              <input type="hidden"name="Item_Name" Value="Dress 4">
                              <input type="hidden"name="Price" Value="2200">
                            </div>
                            </div>
                            </form>
                </div>
            </div>
            <div id="maincart1">
            <!-- <h4 id="headingthree">Cart</h4> -->

            <h1 class="headone">Wedding Decor</h1>
            <div class="row">
                <div class="col-lg-3">
                            <form action="manage_cart.php"  method="POST">
                            <div class="card" style="width: 18rem;">
                              <a href="../HTML/done.html"><img src="https://images.pexels.com/photos/169200/pexels-photo-169200.jpeg?auto=compress&cs=tinysrgb&w=600" class="card-img-top" alt="..."></a>
                              <div class="card-body text-center">
                              <h5 class="card-title">Elements Decor</h5>
                              <p class="card-text">Price: Rs.400000 Onwards</p>
                              <!-- <button href="#" type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button> -->
                              <p>Pune</p>

                              <input type="hidden"name="Item_Name" Value="Dress 1">
                              <input type="hidden"name="Price" Value="2000">
                            </div>
                            </div>
                            </form>
                </div>

                <div class="col-lg-3">
                            <form action="manage_cart.php"  method="POST">
                            <div class="card" style="width: 18rem;">
                             <a href="../HTML/dtwo.html"> <img src="https://images.pexels.com/photos/6479601/pexels-photo-6479601.jpeg?auto=compress&cs=tinysrgb&w=600" class="card-img-top" alt="..."></a>
                              <div class="card-body text-center">
                              <h5 class="card-title">Blush Decor</h5>
                              <p class="card-text">Price: Rs.150000 Onwards</p>
                              <!-- <button href="#" type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button> -->
                              <p>Pune</p>

                              <input type="hidden"name="Item_Name" Value="Dress 2">
                              <input type="hidden"name="Price" Value="2500">
                            </div>
                            </div>
                            </form>
                </div>

                <div class="col-lg-3">
                            <form action="manage_cart.php" method="POST">
                            <div class="card" style="width: 18rem;">
                           <a href="../HTML/dthree.html">   <img src="https://images.pexels.com/photos/5038739/pexels-photo-5038739.jpeg?auto=compress&cs=tinysrgb&w=600" class="card-img-top" alt="..."></a>
                              <div class="card-body text-center">
                              <h5 class="card-title">House Of W</h5>
                              <p class="card-text">Price: Rs.450000 Onwards</p>
                              <!-- <button href="#" type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button> -->
                              <p>Mumbai</p>

                              <input type="hidden"name="Item_Name" Value="Dress 3">
                              <input type="hidden"name="Price" Value="2570">
                            </div>
                            </div>
                            </form>
                </div>


                <div class="col-lg-3">
                            <form action="manage_cart.php"  method="POST">
                            <div class="card" style="width: 18rem;">
                           <a href="../HTML/dfour.html">   <img src="https://images.pexels.com/photos/14161195/pexels-photo-14161195.jpeg?auto=compress&cs=tinysrgb&w=600" class="card-img-top" alt="..."></a>
                              <div class="card-body text-center">
                              <h5 class="card-title">Happy Shades Event Company</h5>
                              <p class="card-text">Price: Rs.400000 Onwards</p>
                              <!-- <button href="#" type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button> -->
                              <p>Mumbai</p>

                              <input type="hidden"name="Item_Name" Value="Dress 4">
                              <input type="hidden"name="Price" Value="2200">
                            </div>
                            </div>
                            </form>
                </div>
            </div>


            <div id="maincart2">
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
                              <!-- <button href="#" type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button> -->
                              <p>Pune</p>
                              

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
                              <!-- <button href="#" type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button> -->
                              <p>Pune</p>

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
                              <!-- <button href="#" 
                              type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button> -->
                              <p>Mumbai</p>

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
                              <!-- <button href="#" type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button> -->
                              <p>Mumbai</p>

                              <input type="hidden"name="Item_Name" Value="Dress 4">
                              <input type="hidden"name="Price" Value="2200">
                            </div>
                            </div>
                            </form>
                </div>
            </div>
            <div id="maincart3">
            <!-- <h4 id="headingthree">Cart</h4> -->
            <h1 class="headone">Wedding Venue</h1>

            <div class="row">
                <div class="col-lg-3">
                            <form action="manage_cart.php"  method="POST">
                            <div class="card" style="width: 18rem;">
                              <a href="../HTML/vone.html"><img src="https://images.pexels.com/photos/1035665/pexels-photo-1035665.jpeg?auto=compress&cs=tinysrgb&w=600" class="card-img-top" alt="..."></a>
                              <div class="card-body text-center">
                              <h5 class="card-title">The Ritz By Ferns And Petals</h5>
                              <p class="card-text">Available On Request</p>
                              <!-- <button href="#" type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button> -->
                              <p>Pune</p>

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
                              <!-- <button href="#" type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button> -->
                              <p>Pune</p>

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
                              <!-- <button href="#" type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button> -->
                              <p>Mumbai</p>

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
                              <!-- <button href="#" type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button> -->
                              <p>Mumbai</p>

                              <input type="hidden"name="Item_Name" Value="Dress 4">
                              <input type="hidden"name="Price" Value="2200">
                            </div>
                            </div>
                            </form>
                </div>
            </div>



</body>
</html>