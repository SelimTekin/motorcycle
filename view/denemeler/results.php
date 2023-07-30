<?php include("../curl_deneme.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Results</title>
    <link rel="stylesheet" href="../assets/css/index.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>

<body>

    <?php include("header.php"); ?>

    <div class="row row-cols-1 row-cols-md-4 g-4 my-2">
        <?php foreach ($searchResult as $result) { ?>
            <div class="card">
                <img src="../images/motorcycle.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $result["make"]; ?></h5>
                    <p class="card-text"><?php echo $result["model"]; ?></p>
                    <a href="#" class="btn btn-primary">Display Details</a>
                    <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                </div>
            </div>
        <?php } ?>
    </div>

    <script src="../assets/js/bootstrap.min.js"></script>
</body>

</html>