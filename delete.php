<?php
$conn = mysqli_connect('localhost','root','','my_test');

if (isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "DELETE FROM township WHERE id= $id";
    if(mysqli_query($conn,$sql)){
        header('Location:index.php');
    }else{
        echo mysqli_error($conn);
    }
}