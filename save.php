<?php
$conn = mysqli_connect('localhost','root','','my_test');

if (isset($_POST['save'])){
    $name = $_POST['name'];
    $state = $_POST['state_division_id'];
    $sql = "INSERT INTO township (name,state_division_id) VALUES ('$name','$state')";
    if (mysqli_query($conn,$sql)){
        header('Location:index.php');
    }else{
        echo mysqli_error($conn);
    }
}

