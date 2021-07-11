<?php
$conn = mysqli_connect('localhost','root','','my_test');

if (isset($_POST['update'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $state = $_POST['state_division_id'];
    $sql ="UPDATE township SET name='$name',state_division_id='$state' WHERE id=$id";
   
    if (mysqli_query($conn,$sql)){
        header('Location:index.php');
    }else{
        echo mysqli_error($conn);
    }
}
