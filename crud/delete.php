<?php include('dbcon.php'); ?>

<?php

if(isset($_GET['id'])){
$id = $_GET['id'];

$query = "delete from students where id = '$id'";

$result = mysqli_query($connection, $query);

if(!$result){
echo "Query Error on Delete Page";

}

else{
header('location:index.php?delete_msg=You have deleted the student.');
}

}

?>