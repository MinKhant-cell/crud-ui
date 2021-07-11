<?php

//SHOW ALERT
function showAlert($type,$message){
    return "<div class='alert alert-$type alert-dismissible fade show' role='alert'>
                    $message
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>";
}

//TOWNSHIPS
function townships(){

    $sql = "SELECT * FROM township";
    $query = mysqli_query($GLOBALS['conn'],$sql);
    $rows=[];
    while ($row = mysqli_fetch_object($query)){
        array_push($rows,$row);
        }
    return $rows;

}

//TOWNSHIP
function township($id){

    $sql = "SELECT * FROM township WHERE id=$id";
    $query = mysqli_query($GLOBALS['conn'],$sql);
    return mysqli_fetch_object($query);
}

function createTownship(){
    $name = $_POST['name'];
    $state = $_POST['state_division_id'];
    $sql = "INSERT INTO township (name,state_division_id) VALUES ('$name','$state')";
    if (mysqli_query($GLOBALS['conn'],$sql)){
        return true;
    }
    return false;
}

function updateTownship(){

    $id = $_POST['id'];
    $name = $_POST['name'];
    $state = $_POST['state_division_id'];
    $sql ="UPDATE township SET name='$name',state_division_id='$state' WHERE id=$id";

    if (mysqli_query($GLOBALS['conn'],$sql)){
        return true;
    }
    return false;
}

function deleteTownship(){

    $id = $_POST['id'];
    $sql = "DELETE FROM township WHERE id= $id";
    if (mysqli_query($GLOBALS['conn'],$sql)){
        return true;
    }
    return false;
}




//function STATE DIVISION

function stateDivisions(){
        $sql = "SELECT * FROM state_division";
        $query = mysqli_query($GLOBALS['conn'],$sql);
        $rows=[];
        while ($row = mysqli_fetch_object($query)){
            array_push($rows,$row);
        }
        return $rows;
}

function stateDivision($id){

    $sql = "SELECT * FROM state_division WHERE id=$id";
    $query = mysqli_query($GLOBALS['conn'],$sql);
    return mysqli_fetch_object($query);
}


function deleteStateDivision(){

    $id = $_POST['id'];
    $sql = "DELETE FROM state_division WHERE id= $id";
    if (mysqli_query($GLOBALS['conn'],$sql)){
        return true;
    }
    return false;
}

function createStateDivision(){
    $name = $_POST['name'];
    $sql = "INSERT INTO state_division (name) VALUES ('$name')";
    if (mysqli_query($GLOBALS['conn'],$sql)){
        return true;
    }
    return false;
}

function updateStateDivision(){

    $id = $_POST['id'];
    $name = $_POST['name'];
    $sql ="UPDATE state_division SET name='$name' WHERE id=$id";

    if (mysqli_query($GLOBALS['conn'],$sql)){
        return true;
    }
    return false;
}