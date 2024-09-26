<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>
<!-- <div id="header">
        <input id="search" type="text" name="searchtext" placeholder="Search....">
        <img id="searchimage" src="../images/search2.png" width="20px" height="20px" alt="Search Image">
        <h4 id="headingone"  onmouseover="bigImg(this)" onmouseout="normalImg(this)">Collections</h4>
        <h6 id="headingtwo">WEDDING WONDERS</h6>
        <a href="www.instagram.com"> <img id="instagramimage" src="../images/instagram.png" width="15px" height="15px"
                alt="Instagram Image"></a>
        <img id="facebookimage" src="../images/facebook.png" width="18px" height="18px" alt="Facebook Image">
        <img id="twitterimage" src="../images/twitter.png" width="18px" height="18px" alt="Twitter Image">
        <img id="youtubeimage" src="../images/youtube.png" width="22px" height="22px" alt="Youtube Image">
        <img id="cartimage" src="../images/bag.png" width="22px" height="22px" alt="Cart Image">
        <img id="userimage" src="../images/user.png" width="22px" height="22px" alt="User Image">
    </div> -->
    <div id="header">
        <!-- <input id="search" type="text" name="searchtext" placeholder="Search...."> -->
    <!-- <img id="searchimage" src="../images/search2.png" width="20px" height="20px" alt="Search Image"> -->
    <!-- <select id="searchimage" width="60px" height="30px" alt="Search Image"> -->

        <!-- <option><a href="../HTML/hall1.php" >Mumbai</a></option> -->
        <!-- <option><a href="../HTML/hall1.php" >Pune</a></option> -->
        <!-- <option>Jaipur</option>
        <option>Delhi</option> -->
    <!-- </select> -->
    <h4 class="headone"></h4>

    <!-- <h4 id="headingone" class="dropbtn" onmouseover="bigImg(this)" onmouseout="normalImg(this)" onclick="one()" >Wedding Vendors   -->

    <div class="dropdown">
  <button class="dropbtn">Wedding Vendors</button>
  <div class="dropdown-content">
    <a href="../HTML/cart1.php"> Bridal Makeup</a>
    <a href="../HTML/cart2.php">Wedding Decor</a>
    <a href="../HTML/cart3.php">Wedding Photography</a>
    <a href="../HTML/cart4.php">Wedding Venue</a>

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
  <button class="dropbtn5">Admin Login</button>
  <div class="dropdown-content5">
    <a href="../HTML/loginadmin.php">Login</a>

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
        <h4 id="headingthree">LOGIN</h4>
        <h3 id="billing">Login Yourself</h3>
        
        <hr id="one">
        <br>
        <br>

        <br>

        <?php
   
               
        if(isset($_POST["login"]))
        {
           
            $email=$_POST["email"];
            $pass=$_POST["passw"];
         


            require_once 'database.php';
            // require_once 'register.php';
            $sql= "SELECT * from register WHERE email ='$email' and passw='$pass' ";
            $result=mysqli_query($conn , $sql);
            // $user=mysqli_fetch_array($result );
            // , MYSQLI_ASSOC


            // if($user)
            // {
            //     if(password_verify($pass,$user["passw"]))
            //     {
            //         // header("location: index.php");
            //         // die();
            //         echo "<div  class='alert alert-danger'> match</div>";
            //     }
            //     else
            //     {
            //         echo "<div  class='alert alert-danger'>Password does not match</div>";

            //     }

            // }
            // else
            // {
            //     echo "<div  class='alert alert-danger'>Email does not match</div>";

            // }

            if($row = mysqli_fetch_array($result))
                {
            
            
                        $_SESSION['email']   = $row['email'];
            
                        $_SESSION['passw'] = $row['passw'];
                
                     
                
                        header("Location: index.php");
                
                    }
                    else {
                        
                                $error_message = "Incorrect Email or Password!!!";
                        
                            }
                        
                

           
            
        }


        ?>


      
        <form action="loginadmin.php" method="post">
            <label id="labelfirst" for="firstname">Email</label>
            <br>
            <input id="inputfirst" type="text" title="firstname" name="email">
        


            <label id="labellast" for="lastname" >Password</label>
            <br>
            <input id="inputlast" type="password" title="lastname" name="po">
            </br>



            <label id="companyname" for="companyname">Password</label>
            </br>

            <input id="inputcompany" type="password" title="passw" name="passw">
        </br>




        <!-- <label id="country" for="country">Password</label> -->




    </br>

    <input  id="inputcountry" type="button" title="login" name="login"  value="login" onclick="ogin()">












    
<!-- </br>

<label id="streetaddress" for="streetaddress">Repeat Password</label>
</br>
<input id="inputadd1" type="password" title="streetaddress" name="passwordrepeat" placeholder="Enter Password">
 </br>
<input id="inputadd2" type="submit" title="streetaddress" name="submit"  value="Register" placeholder="Apartment , Suite ,Unit, (Optional)">

</br> -->


<!-- <label id="city" for="city">Town/City</label>
</br>
<input id="inputcity" type="text" title="city" name="city" >

</br>


<label id="state" for="state">State</label>
</br>

<select name="state" id="inputstate" title="state">
    <option value="maharashtra">Maharashtra</option>
    <option value="goa">Goa</option>
    <option value="punjab">Punjab</option>
    <option value="karnatata">Karnataka</option>
  </select>

</br>



<label id="zipcode" for="zipcode">Zipcode</label>
</br>
<input id="inputzipcode" type="text" title="zipcode" name="zipcode" >

</br>




<label id="phone" for="phone">Phone</label>
</br>
<input id="inputphone" type="number" title="phone" name="phone" >

</br>





<label id="email" for="email">Email Address</label>
</br>
<input id="inputemail" type="email" title="email" name="email" >

</br>

<h3 id="inform">Additional Information</h3>

<hr id="two">

</br>

<label id="ordernotes" for="ordernotes">Order Notes (Optional)</label>
</br>
<textarea rows="4" cols="43" name="order note" title="order note" id="ordernote" placeholder="Order Notes"></textarea> -->
 

        </form>
        <script src="../javascript/loginadmin.js" ></script>
</body>
</html>