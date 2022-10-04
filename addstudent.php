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


  <?php
  $msg = '';
  //db.connection
  require_once('dbconnection.php');
//check if form fields have values
  if (isset($_POST['submitbutton'])) {

    //fetch form values
    $studentName = $_POST['name'];
    $regnumber = $_POST['reg_number'];
    $phonenumber = $_POST['phone_number'];
    $email = $_POST['email'];
    $course = $_POST['course'];

    //check for reg nummber
    $sqlRegNumber=mysqli_query($conn , "SELECT * FROM enrollment  WHERE reg_number='$regnumber'");
$checkRegNumber=mysqli_num_rows($sqlRegNumber);

    //check phone number
    $sqlPhoneNumber = mysqli_query($conn, "SELECT * FROM enrollment  WHERE phone_number='$phonenumber'");
    $checkPhoneNumber = mysqli_num_rows($sqlPhoneNumber);

    //check for email
    $sqlEmail= mysqli_query($conn, "SELECT * FROM enrollment  WHERE email='$email'");
    $checkEmail = mysqli_num_rows($sqlEmail);


if($checkRegNumber !=0){
  $msg="reg number already in use";
}

elseif($checkPhone!=0){
  $msg="phone already exists";
}

elseif($checkEmail!=0){
  $msg="email already in use";
}

else{



    //insert into table enrollments
    $insertRecords = mysqli_query($conn, "INSERT INTO enrollment(name,reg_number,phone_number,email,course)
VALUES('$studentName','$regnumber','$phonenumber','$email' ,'$course')");

    if ($insertRecords) {
      $msg = "data submitted succesfully ";
    } else {
      $msg = "error occured";
    }
  }
  }
  


  ?>


  <!----==================main content starts here=====================================-->
  <div class="main-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="card-header bg-dark text-white text-center pt-4">
            <span>Enroll</span> <br>
            <?php
            echo $msg;
            ?>

          </div>
        </div>
        <div class="container py-5 lg-4">
          <div class="card">
            <form action="addstudent.php" method="post">
              <div class="card-body">
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Name</label>
                  <input type="name" class="form-control" name="name" id="exampleFormControlInput1" placeholder="" />
                </div>
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Registration Number
                  </label>
                  <input type="reg_number" class="form-control" name="reg_number" id="exampleFormControlInput1" placeholder="" />
                </div>
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Phone Number</label>
                  <input type="phone_number" class="form-control" name="phone_number" id="exampleFormControlInput1" placeholder="" />
                </div>
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">email</label>
                  <input type="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="" />
                </div>
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Course</label>
                  <select name="course" id="course" class="form-control">
                    <option value="">--select course--</option>
                    <option value="web design & development">web design $ development</option>
                    <option value="cyber security">cyber security</option>
                    <option value="Android Application Develpment">Android Application $ development</option>
                    <option value="Data Analysis">Data Analysis</option>
                  </select>
                </div>
                <button class="btn btn-secondary submit" name="submitbutton" type="submit" value="submit">
                  Submit
                </button>
            </form>

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