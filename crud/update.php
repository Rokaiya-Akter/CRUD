<?php include('header.php'); ?>
<?php include('dbcon.php'); ?>

<?php

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "select * from students where id = '$id'";
    $result = mysqli_query($connection, $query);

    if(!$result){
        echo "Query Failed";
    }
    else{
        $row = mysqli_fetch_assoc($result);
        echo "<div style='text-align: center; margin-top: 20px; margin-bottom: 20px;'>";
        echo "<h2> Update Student's Data </h2>";
        echo "</div>";
    }
}
else {
    echo "Student ID not provided!";
    exit; 
}

?>

<?php

if(isset($_POST['update_students'])){
    if (isset($_GET['id'])) {
        $idnew= $_GET['id'];
    }
    $f_name = $_POST['f_name'];
    $l_name = $_POST['l_name'];
    $age = $_POST['age'];

    $query = "update students set first_name = '$f_name', last_name = '$l_name', age = '$age' where id = '$idnew'";

    $result = mysqli_query($connection, $query);

    if(!$result){
        echo "Query Failed";
    }
    else{
        header('location:index.php?update_msg=The student has been updated successfully');
        exit;
    }
}
?>

<form action="update.php?id=<?php echo $id; ?>" method="post">
    <div class="form-group">
        <label for="f_name">First Name</label>
        <input type="text" name="f_name" class="form-control" value="<?php echo $row['first_name']?>">
    </div>
    <div class="form-group">
        <label for="l_name">Last Name</label>
        <input type="text" name="l_name" class="form-control" value="<?php echo $row['last_name']?>">
    </div>
    <div class="form-group">
        <label for="age">Age</label>
        <input type="text" name="age" class="form-control" value="<?php echo $row['age']?>">
    </div>
    <div style="margin-top: 20px; margin-bottom: 20px">
    <button type="submit" class="btn btn-success" name="update_students" value="update_students">Update Student</button></div>
</form>

<?php include('footer.php'); ?>
