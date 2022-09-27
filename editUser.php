<!-- ==========php file for displaying edit user details============ -->
<?php
// dbconnection
require_once('dbconnection.php');

$sql = mysqli_query($conn, "SELECT * FROM enrollment WHERE id='" . $_GET['id'] . "' ");
while ($row = mysqli_fetch_array($sql)) {
    $name = $row['name'];
    $reg_number = $row['reg_number'];
    $phone_number = $row['phone_number'];
    $email = $row['email'];
    $course = $row['course'];
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
                <form action="editUser.php" method="post">
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
                        <button class="btn btn-secondary submit" name="submitbutton" type="submit" value="submit">
                            Submit
                        </button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>