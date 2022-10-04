<!-- ==========php file for displaying edit user details============ -->
<?php
$msg = '';
// dbconnection
require_once('dbconnection.php');

$sql = mysqli_query($conn, "SELECT * FROM enrollment WHERE id='" . $_GET['id'] . "' ");
while ($row = mysqli_fetch_array($sql)) {
    $id = $row['id'];
    $name = $row['name'];
    $reg_number = $row['reg_number'];
    $phone_number = $row['phone_number'];
    $email = $row['email'];
    $course = $row['course'];
}

//update user data

if (isset($_POST['updatebutton'])) {
    //fetch form data
    $updateName = $_POST['name'];
    $updateReg_Number = $_POST['reg_number'];
    $updatePhoneNumber = $_POST['phone_number'];
    $updateEmail = $_POST['email'];
    $updateCourse = $_POST['course'];

    //sql querry
    $sql = mysqli_query($conn, "UPDATE enrollment SET name='$updateName', reg_number='$updateReg_Number' ,phone_number='$updatePhoneNumber' ,email='$updateEmail' ,course='$updateCourse' WHERE id='" . $_GET['id'] . "' ");

    //check if querry is true
    if ($sql) {
        $msg = "
    <div class='alert alert-success' role='alert'><strong>success!</strong>user data updated successfully</div>";
    } else {
        $msg = "
       <div class='alert alert-danger' role='alert'><strong>error!</strong>something went wrong please try again</div>";
    }
}


?>





<!DOCTYPE html>
<html lang="en">

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

    <!-- ===========================card to hold the form====================== -->
    <div class="main-content">
        <div class="card">
            <div class="card-header bg-dark text-center text-white">Edit user account data
            </div>
            <div class="card-body">
                <span><?php echo $msg ?></span>
                <form action="editUser.php?id=<?php echo $id ?>" method="post">
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Name</label>
                            <input type="name" value="<?php echo $name ?>" class="form-control" name="name" id="exampleFormControlInput1" placeholder="" />
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Registration Number
                            </label>
                            <input type="reg_number" value="<?php echo $reg_number ?>" class="form-control" name="reg_number" id="exampleFormControlInput1" placeholder="" />
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Phone Number</label>
                            <input type="phone_number" value="<?php echo $phone_number ?>" class="form-control" name="phone_number" id="exampleFormControlInput1" placeholder="" />
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">email</label>
                            <input type="email" value="<?php echo $email ?>" class="form-control" name="email" id="exampleFormControlInput1" placeholder="" />
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Course</label>
                            <select name="course" value="<?php echo $course ?>" id="course" class="form-control">
                                <option value="">--select course--</option>
                                <option value="web design & development">web design $ development</option>
                                <option value="cyber security">cyber security</option>
                                <option value="Android Application Develpment">Android Application $ development</option>
                                <option value="Data Analysis">Data Analysis</option>
                            </select>
                        </div>
                        <button class="btn btn-secondary update" name="updatebutton" type="submit">
                            update
                        </button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>