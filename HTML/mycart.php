<? include('header.php'); 

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center border rounded">
                <h1>My Cart</h1>
            </div>

            <div class="col-lg-8">
            <table class="table">
                <thead class="text-center">
                    <tr>
                    <th scope="col">Serial No.</th>
                    <th scope="col">Item Name</th>
                    <th scope="col">Item Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col"></th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <?php
                        foreach($_SESSION['cart'] as $key => $value )
                        {
                            echo"
                                <tr>

                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>




                                </tr>
                            ";
                        }
                        ?>
                    <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    </tr>
                 
                </tbody>
            </table>
            </div>
        </div>
    </div>
</body>
</html>