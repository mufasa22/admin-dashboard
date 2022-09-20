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
  <link rel="stylesheet" href="addstudent.css">
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
          <a href="">
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
            <span>Add Student</span>
          </div>
        </div>
       <div class="container py-5 lg-4">
        <div class="card">
          <div class="card-body">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label"
                >Name</label
              >
              <input
                type="name"
                class="form-control"
                id="exampleFormControlInput1"
                placeholder=""
              />
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label"
                >Registration Number
              </label>
              <input
                type="reg number"
                class="form-control"
                id="exampleFormControlInput1"
                placeholder=""
              />
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label"
                >Phone Number</label
              >
              <input
                type="phone Number"
                class="form-control"
                id="exampleFormControlInput1"
                placeholder=""
              />
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label"
                >Course</label
              >
              <input
                type="Course"
                class="form-control"
                id="exampleFormControlInput1"
                placeholder=""
              />
            </div>
            <button class="btn btn-primary submit" type="button" value="submit">
              Submit
            </button>
           
          </div>
        </div>
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