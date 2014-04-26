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

        <form class="form-horizontal" role="form">
          <div class="form-group">
            <label for="longitude" class="col-sm-2 control-label">Longitude</label>
            <div class="col-sm-4">
              <input type="number" class="form-control" id="longitude" name="longitude" placeholder="Longitude" step="any">
            </div>
          </div>
          <div class="form-group">
            <label for="latitude" class="col-sm-2 control-label">Latitude</label>
            <div class="col-sm-4">
              <input type="number" class="form-control" id="latitude" name="latitude" placeholder="Latitude" step="any">
            </div>
          </div>
          <div class="form-group">
            <label for="ph" class="col-sm-2 control-label">pH Value</label>
            <div class="col-sm-4">
              <input type="number" class="form-control" id="ph" name="ph" placeholder="pH Value" step="any">
            </div>
          </div>
          <div class="form-group">
            <label for="ammonium_nitrate" class="col-sm-2 control-label">Ammonium Nitrate</label>
            <div class="col-sm-4">
              <input type="number" class="form-control" id="ammonium_nitrate" name="ammonium_nitrate" placeholder="Ammonium Nitrate" step="any">
            </div>
          </div>
          <div class="form-group">
            <label for="phosphate" class="col-sm-2 control-label">Phosphate</label>
            <div class="col-sm-4">
              <input type="number" class="form-control" id="phosphate" name="phosphate" placeholder="Phosphate" step="any">
            </div>
          </div>
          <div class="form-group">
            <label for="permanganate" class="col-sm-2 control-label">Permanganate</label>
            <div class="col-sm-4">
              <input type="number" class="form-control" id="permanganate" name="permanganate" placeholder="Permanganate" step="any">
            </div>
          </div>
          <div class="form-group">
            <label for="heavy_metal" class="col-sm-2 control-label">Heavy metal</label>
            <div class="col-sm-4">
              <input type="number" class="form-control" id="heavy_metal" name="heavy_metal" placeholder="Heavy metal" step="any">
            </div>
          </div>
          <div class="form-group">
            <label for="email" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-4">
              <input type="email" class="form-control" id="email" name="email" placeholder="Email">
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <!--<button type="submit" class="btn btn-default">Sign in</button>-->
              <input type="submit" class="btn btn-primary">
            </div>
          </div>
        </form>
        <hr>
    </div>
    <!-- /.container -->

</body>

</html>
