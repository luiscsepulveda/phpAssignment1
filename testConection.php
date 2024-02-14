<?php 

$servername="localhost";
$username="root";
$password="root";
$database="";


//create connection

$conn = new mysqli($servername,$username,$password,$database);

//checking connection

if($conn->connect_error)
    {
        die("connection failed" .$conn->connect_error);
    }
    else
        {
        echo"connected succesfully";
    }

    
    $name=$POST['fname'];
    $id=$POST['iduser'];
    $email=$POST['uemail'];
    $date=$POST['currentDate'];

    $sql = "insert into userinfo values('$id','$name', '$email', '$currentDate')";
    if($conn -> query($sql)===TRUE){
        echo"data inserted";

    }else{
        echo"Is not working : ".$slq. " <br> ".$conn->error;
    }

    $conn->close();


    
    //Create Database
 
    $sql = "create database TrackHours";

    if($conn->query($sql)===TRUE)
    {
        
        echo"Database TrackHours created succesfully";
        }
            else
            {
    echo "Error creating database: " .$conn -> error;
}
     $conn -> close();

?>
