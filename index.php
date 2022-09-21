<!DOCTYPE html>
<html>

<head>
  <title>Bootstrap Admin Template</title>
  <meta charset="UTF-8" />
  <meta name="description" content="Creating admin dashboard" />
  <meta name="keywords" content="HTML,CSS,Zalego,Technology,Zalego institute,JavaScript" />
  <meta name="author" content="IAN NYONCESA" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" />
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <!-- All our code. write here   -->
  <!----==================header section starts here=====================================-->
  <?php
  include('includes/header.php')
  ?>

  <!----==================header section ends here=====================================-->
  </div>

  <div class="sidebar">
    <!----==================side bar information starts=====================================-->
    <?php
    include('includes/sidebar.php')
    ?>
    <!----==================side bar information ends=====================================-->
  </div>
  <!----==================main content starts here=====================================-->
  <div class="main-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="card-header bg-dark text-white text-center pt-4">
            <span>Top content</span>
          </div>
          <div class="card-body"></div>
          <div class="card-footer"></div>
        </div>
        <div class="col-lg-3">
          <div class="card-header bg-dark text-white text-center">
            <span>Students</span>
          </div>
          <div class="card-body">
            <span><i class="fa fa-group fa-3x"></i></span>
            <span class="float-right">oo</span>
          </div>
          <div class="card-footer"></div>
        </div>
        <div class="col-lg-3">
          <div class="card-header bg-dark text-white text-center">
            <span>Available courses</span>
          </div>
          <div class="card-body">
            <span><i class="fa fa-folder-open fa-3x"></i></span>
            <span class="float-right">oo</span>
          </div>
          <div class="card-footer"></div>
        </div>
        <div class="col-lg-3">
          <div class="card-header bg-dark text-white text-center">
            <span>Courses</span>
          </div>
          <div class="card-body">
            <span><i class="fa fa-graduation-cap fa-3x"></i></span>
            <span class="float-right">oo</span>
          </div>
          <div class="card-footer"></div>
        </div>
        <div class="col-lg-3">
          <div class="card-header bg-dark text-white text-center">
            <span>User</span>
          </div>
          <div class="card-body">
            <span><i class="fa fa-user fa-3x"></i></span>
            <span class="float-right">oo</span>
          </div>
          <div class="card-footer"></div>
        </div>
        <div class="col-lg-12">
          <div class="card-header bg-dark text-white text-center">
            <span>student Analysis</span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!----==================main content ends here=====================================-->
  <script src="jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>