<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bienvenidos a la Videoteca</title>

    <link rel="stylesheet" href="assets/videoteca/styles/bootstrap.css">
    <link rel="stylesheet" href="assets/videoteca/styles/dataTables.bootstrap.css">
    <link rel="stylesheet" href="assets/videoteca/styles/font-awesome.css">
    <link rel="stylesheet" href="assets/videoteca/styles/dt-sidebar.css">
    <link rel="stylesheet" href="assets/videoteca/styles/dt-gradients.css">
    <link rel="stylesheet" href="assets/videoteca/styles/dt-theme.css">
    <link rel="stylesheet" href="assets/videoteca/styles/dt-styles.css">

    <script src="assets/videoteca/scripts/jquery-3.2.1.js"></script>
    <script src="assets/videoteca/scripts/bootstrap.min.js"></script>
    <script src="assets/videoteca/scripts/jquery.dataTables.js"></script>
    <script src="assets/videoteca/scripts/dataTables.bootstrap.js"></script>
    <script src="assets/videoteca/scripts/underscore.js"></script>

</head>

<body>
  <div id="wrapper" class="toggled">
    <?php include('_sidebar.php'); ?>
    <div id="page-content-wrapper">
      <?php include('_navbar.php'); ?>
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <?=$MASTER_CONTENT?>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="assets/videoteca/scripts/simple-sidebar.js"></script>
  <script src="assets/videoteca/scripts/plugins.js"></script>
  
</body>

</html>