
  <?php
    //db.connection
    require_once('dbconnection.php');


    //sql querry
    $sql = mysqli_query($conn, "SELECT * FROM enrollment WHERE id='" . $_GET['id'] . "'");
    while ($row = mysqli_fetch_array($sql)) {
        $id = $row['id'];
        $name = $row['name'];
        $reg_number = $row['reg_number'];
        $phone_number = $row['phone_number'];
        $email = $row['email'];
        $course = $row['course'];
    }


    ?>
