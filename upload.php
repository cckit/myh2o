<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Upload</title>

    <!-- JavaScript and CSS -->
    <?php include 'include.php'; ?>
    <link href="css/theme.css" rel="stylesheet">
</head>

<body>

    <?php include 'theme/nav_fixed.php'; ?>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Data Upload
                </h1>
            </div>
        </div>

        <form action="insert.php" method="post">
            Longitude: <input type="" name="longitude"><br><br>
            Latitude: <input type="text" name="latitude"><br><br>
            PH: <input type="text" name="ph"><br><br>
            ammonium_nitrate: <input type="text" name="ammonium_nitrate"><br><br>
            phosphate: <input type="text" name="phosphate"><br><br>
            permanganate: <input type="text" name="permanganate"><br><br>
            heavy_metal: <input type="text" name="heavy_metal"><br><br>
            email: <input type="text" name="email"><br><br>
            <input type="submit">
        </form>
        <hr>
    </div>
    <!-- /.container -->

</body>

</html>
