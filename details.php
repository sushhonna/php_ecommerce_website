<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>details page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>
    <?php
    include("./dbconnect.php");
    include("./header.php");
    ?>
    <?php
    $id = $_GET['details_id'];
    $query = "select * from cloths where ecomm_id=$id";
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_assoc($result);
    $ecom_id = $row['ecomm_id'];
    $ecom_name = $row['ecomm_name'];
    $ecom_desc = $row['ecomm_desc'];
    $ecom_img = $row['ecomm_img'];
    $ecom_price = $row['ecomm_price'];
    ?>


    <div class="jumbotron">
        <div class="container">
            <h1 class="display-4 text-center text-primary">
                <?php echo $ecom_name ?>
            </h1>
            <p class="lead">
                <?php echo $ecom_desc ?>
            </p>
            <p class="lead">
                <button class="btn btn-dark text-light">
                    <a class="btn btn-dark" href="index.php" role="button">Continue shopping</a>
                </button>
            </p>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-12">
                <img style="height:400px; width:500px; object-fir:contain" src=<?php echo $ecom_img ?> alt="">
            </div>
            <div class="col-lg-6 col-12">
                <h2 class="text-center text-danger">
                    <?php echo $ecom_name ?>
                </h2>
                <p>
                    <?php echo $ecom_desc ?>
                </p>
                <p><strong>Price : </strong>
                    <?php echo $ecom_price ?>/-
                </p>
                <button class="btn btn-success">Add to cart</button>
            </div>
        </div>
    </div>
    </div>

</body>

</html>