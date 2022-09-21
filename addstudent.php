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
            <span>Enroll</span>
          </div>
        </div>
        <div class="container py-5 lg-4">
          <div class="card">
            <div class="card-body">
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Name</label>
                <input type="name" class="form-control" id="exampleFormControlInput1" placeholder="" />
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Registration Number
                </label>
                <input type="reg number" class="form-control" id="exampleFormControlInput1" placeholder="" />
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Phone Number</label>
                <input type="phone Number" class="form-control" id="exampleFormControlInput1" placeholder="" />
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Course</label>
                <select name="Course" id="course" class="form-control">
                  <option value="">--select course--</option>
                  <option value="web design & development">web design $ development</option>
                  <option value="cyber security">cyber security</option>
                  <option value="Android Application Develpment">Android Application $ development</option>
                  <option value="Data Analysis">Data Analysis</option>
                </select>
              </div>
              <button class="btn btn-secondary submit" type="button" value="submit">
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