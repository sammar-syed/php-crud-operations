
<?php

// Creating DB Connection
$conn = mysqli_connect("localhost", "root", "", "register");

// Check is being POST

if (isset($_POST['register_btn'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];


    // Query to INSERT VALUES

    $query = "INSERT INTO rgstr(fname,lname,email,password,phone)
              VALUES('$fname', '$lname', '$email', '$password', '$phone')";

    // Result - Execute Query
    $result = mysqli_query($conn, $query);

    if ($result) {
        // echo "Registerd Successfully!";
        header("Location: ../index.php");
    } else {
        // echo "Something went wrong!";
        header("Location: register.php");
    }
}

// Update

if (isset($_POST['register_update_btn'])) {
    $id_update = $_POST['edit_id'];
    $fname_update = $_POST['fname'];
    $lname_update = $_POST['lname'];
    $email_update = $_POST['email'];
    $password_update = $_POST['password'];
    $phone_update = $_POST['phone'];


    $query_update = "UPDATE rgstr SET fname='$fname_update', lname='$lname_update', email='$email_update', password='$password_update', phone='$phone_update' WHERE id='$id_update'";

    // Execute

    $query_update_run = mysqli_query($conn, $query_update);

    if ($query_update_run) {
        header("Location: ../index.php");
    } else {
        header("Location: index.php");
    }
}

// Delete
if(isset($_POST['register_delete_btn'])) {
    $delete_id = $_POST['delete_id'];
    $reg_query = "DELETE FROM rgstr WHERE id='$delete_id'";

    $reg_query_run = mysqli_query($conn, $reg_query);

    if($reg_query_run)
    {
        header("Location: ../index.php");
    }
    else
    {
        header("Location: ../index.php");
    }
}

?>