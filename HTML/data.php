<?php


require_once "database.php";
$sql="SELECT * FROM register";
$result=mysqli_query($conn , $sql);
// $all_product=$conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wedding Wonders</title>
    <link rel="stylesheet" href="../css/data.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="bg-dark">
    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <div class="card mt-5">
                    <div class="card-header">
                    <center>
                        <h2 class="display-6 text-center">
                            Register Users

</h2>
                    </center>
                    </div>

                    <div class="card-body">
                     <center>
                        <table border="1px" class="table table-bordered text-center">
                            <tr class="bg-dark text-white">
                                <th>UserId</th>
                                <th>FullName</th>
                                <th>Email</th>
                                <th>Password</th>
                            </tr>
                            <tr>
                                <?php
                                  while($row=mysqli_fetch_assoc($result))
                                  {



                                    ?>

                                    <td><?php  echo  $row['id']  ?></td>
                                    <td><?php echo  $row['fullname']  ?></td>
                                    <td><?php  echo $row['email']  ?></td>
                                    <td><?php  echo $row['passw']  ?></td>

                                </tr>
                                <?php


                                  }

                                  ?>
                                
                            
                        </table>
                        </center>
                    </div>
                   
            </div>
          
        </div>
        </div>
    </div>
</body>
</html>