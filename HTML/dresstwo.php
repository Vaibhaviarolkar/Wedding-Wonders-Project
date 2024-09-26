<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wedding Wonders</title>
    <link rel="stylesheet" href="../css/dresstwo.css" type="text/css">
</head>
<body>
    <div id="header">
        <input id="search" type="text" name="searchtext" placeholder="Search....">

    <img id="searchimage" src="../images/search2.png" width="20px" height="20px" alt="Search Image">

    <h4 id="headingone">Collections</h4>

    <h6 id="headingtwo">TO BE MOM</h6>

   <a href="www.instagram.com" > <img id="instagramimage" src="../images/instagram.png" width="15px" height="15px" alt="Instagram Image"></a>

    <img id="facebookimage" src="../images/facebook.png" width="18px" height="18px" alt="Facebook Image">

    <img id="twitterimage" src="../images/twitter.png" width="18px" height="18px" alt="Twitter Image">

    <img id="youtubeimage" src="../images/youtube.png" width="22px" height="22px" alt="Youtube Image">

    <img id="cartimage" src="../images/bag.png" width="22px" height="22px" alt="Cart Image">

    <img id="userimage" src="../images/user.png" width="22px" height="22px" alt="User Image" >
    
    </div>
<!-- 
    <div id="view">
        <img id="dresstwo" src="http://www.tiffanyrose.com/v3-img/products/LAURRS-zoom.jpg"  alt="Maternity Image"  >
        <h3 id="headingthree">Dresses</h3>
        <p id="paraone">Spark Pinkish Dress</p>
        <h3 id="headingfour">2000 Rs</h3>
        
    </div>
    <div id="viewone">
        <p id="paratwo">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Pariatur suscipit, molestias dicta ipsam consectetur architecto? Ea iste ipsum, reiciendis culpa totam voluptate voluptatem.</p>
    </div>

    <div id="information">
        <input id="count" type="number" name="count" value="1" title="count">
        <h3 id="headingfive">ADD TO CART</h3>
    </div> -->

    <div id="maincart">
        <!-- <h4 id="headingthree">Cart</h4> -->


        <div class="row">
            <div class="col-lg-3">
                        <form action="manage_cart.php"  method="POST">
                        <div class="card" style="width: 18rem;">
                          <img src="https://images.pexels.com/photos/2291462/pexels-photo-2291462.jpeg?auto=compress&cs=tinysrgb&w=600"class="card-img-top" alt="...">
                          <div class="card-body text-center">
                          <h5 class="card-title">Q Events</h5>
                          <p class="card-text">Price: Rs.300000 Onwards</p>
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
                          <img src="https://images.pexels.com/photos/169203/pexels-photo-169203.jpeg?auto=compress&cs=tinysrgb&w=600" class="card-img-top" alt="...">
                          <div class="card-body text-center">
                          <h5 class="card-title">Elusive Dreams</h5>
                          <p class="card-text">Price: Rs.150000 Onwards</p>
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
                          <img src="https://images.pexels.com/photos/2434255/pexels-photo-2434255.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load" class="card-img-top" alt="...">
                          <div class="card-body text-center">
                          <h5 class="card-title">Ritu Mago Wedding And Events</h5>
                          <p class="card-text">Price: Rs.600000 Onwards</p>
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
                          <img src="https://images.pexels.com/photos/169192/pexels-photo-169192.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load" class="card-img-top" alt="...">
                          <div class="card-body text-center">
                          <h5 class="card-title">InchPerfecto</h5>
                          <p class="card-text">Price: Rs.200000 Onwards</p>
                          <button href="#" type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>

                          <input type="hidden"name="Item_Name" Value="Dress 4">
                          <input type="hidden"name="Price" Value="2200">
                        </div>
                        </div>
                        </form>
            </div>
        </div>
</body>
</html>