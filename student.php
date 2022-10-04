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




    <?php
    require_once('dbconnection.php');
    //fetch all the data
    $fetchStudentsRecords = mysqli_query($conn, "SELECT *FROM enrollment");
    ?>
    <!----==================side bar information ends=====================================-->
  </div>
  <!----==================main content starts here=====================================-->
  <div class="main-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="card-header bg-dark text-white text-center pt-4">
            <span>Student</span> <a href="addstudent.php" class="btn btn-sm btn-secondary float-right">Add Student</a>
          </div>
          <div class="card-body">
            <table class="table table-striped table-hover
                ">
              <thead>
                <tr>
                  <th>no.</th>
                  <th>name</th>
                  <th>regnumber</th>
                  <th>phonenumber</th>
                  <th>email</th>
                  <th>course</th>
                  <th>enrolled on</th>
                  <th>action</th>
                </tr>
              </thead>
              <tbody>
                <?php while ($row = mysqli_fetch_array($fetchStudentsRecords)) {

                ?>
                  <tr>
                    <td>
                      <?php echo $row["id"] ?></td>
                    <td>
                      <?php echo $row["name"] ?></td>
                    <td>
                      <?php echo $row["reg_number"] ?></td>
                    <td>
                      <?php echo $row["phone_number"] ?></td>
                    <td>
                      <?php echo $row["email"] ?></td>
                    <td>
                      <?php echo $row["course"] ?></td>
                    <td>
                      <?php echo $row["created_at"] ?></td>
                    <td>
                      <a href="editUser.php?id=<?php echo $row["id"] ?>" class="btn btn-primary btn-sm">
                        <i class="fa fa-edit"></i>
                      </a>
                      <a href="userData.php" class="btn btn-success btn-sm">
                        <i class="fa fa-eye"></i>
                      </a>
                      <a href="deleteUser.php" class="btn btn-danger btn-sm">
                        <i class="fa fa-trash"></i>
                      </a>
                    </td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
          <div class="card-footer"></div>
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