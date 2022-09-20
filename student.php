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
  <div class="header">
    <img src="./images/U-3WnLIg_400x400.jpg" alt="logo" height="50" width="50" class="rounded-circle" />

    <!----==================header section ends here=====================================-->
  </div>

  <div class="sidebar">
    <!----==================side bar information starts=====================================-->
    <nav>
      <ul>
        <li>
          <a href="index.php">
            <span><i class="fa fa-group"></i></span> <span> Dashboard</span></a>
        </li>
        <li>
          <a href="student.php">
            <span><i class="fa fa-group"></i></span> <span> Students</span></a>
        </li>
        <li>
          <a href="">
            <span><i class="fa fa-folder-open"></i></span>
            <span> Courses</span></a>
        </li>
        <li>
          <a href="">
            <span><i class="fa fa-graduation-cap"></i></span>
            <span> Campus</span></a>
        </li>
      </ul>
    </nav>

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
                  <th>Name</th>
                  <th>Reg Number</th>
                  <th>Phone Number</th>
                  <th>Course</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>IAN NYONGESA</td>
                  <td>00373</td>
                  <td>011111222</td>
                  <td>web design</td>
                  <td>
                    <a href="#" class="btn btn-primary btn-sm">
                      <i class="fa fa-edit"></i>
                    </a>
                    <a href="#" class="btn btn-success btn-sm">
                      <i class="fa fa-eye"></i>
                    </a>
                    <a href="#" class="btn btn-danger btn-sm">
                      <i class="fa fa-trash"></i>
                    </a>
                  </td>
                </tr>
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