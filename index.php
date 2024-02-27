<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<?php
include("./dbconnect.php");
include("./header.php");
?>
<h1 class="text-center text-primary my-3">Welcome to our store</h1>
<h1 class="text-center text-success mb-4">Shop by category</h1>
<div class="container">
    <div class="row">

        <?php
        $sql = "select * from cloths";
        $result = mysqli_query($con, $sql);
        if ($result) {
            // $row = mysqli_fetch_assoc($result);
            // echo $row['ecomm_name'];
        
            while ($row = mysqli_fetch_assoc($result)) {
                $ecom_id = $row['ecomm_id'];
                $ecom_name = $row['ecomm_name'];
                $ecom_desc = $row['ecomm_desc'];
                $ecom_img = $row['ecomm_img'];
                $ecom_price = $row['ecomm_price'];

                echo ' <div class="col-md-4 col-sm-6 col-12">
            <div class="card">
                <img src=' . $ecom_img . ' class="card-img-top" alt="photo1" style="height:300px; object-fir:contain">
                <div class="card-body">
                    <h5 class="card-title">' . $ecom_name . '</h5>
                    <p class="card-text">' . substr($ecom_desc, 0, 50) . '....</p>
                    <p>' . $ecom_price . '/-</p>
                    <a href="details.php?details_id=' . $ecom_id . '" class="btn btn-primary">Shop now</a>
                </div>
            </div>
        </div>';
            }
        }
        ?>


    </div>
</div>

<body>

</body>

</html>