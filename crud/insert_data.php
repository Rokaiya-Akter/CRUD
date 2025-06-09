<?php
include('dbcon.php');

if (isset($_POST['add_students'])) {

    $f_name = $_POST['f_name'];
    $l_name = $_POST['l_name'];
    $age = $_POST['age'];

    if ($f_name == "" || empty($f_name)) {
        header('location:index.php?message_f_name=You need to fill in the first name!');
        exit();
    } elseif ($l_name == "" || empty($l_name)) {
        header('location:index.php?message_l_name=You need to fill in the last name!');
        exit();
    } elseif ($age == "" || empty($age)) { // ✅ Fixed: check $age, not $l_name
        header('location:index.php?message_age=You need to fill in the age!');
        exit();
    } else {
        $query = "INSERT INTO students (first_name, last_name, age) VALUES ('$f_name', '$l_name', '$age')";
        $result = mysqli_query($connection, $query);

        if (!$result) {
            echo "Query Failed";
        } else {
            header('location:index.php?insert_msg=Student has been added successfully');
            exit();
        }
    }
}
?>
