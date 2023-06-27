<?php

// $link=mysqli_connect('localhost','root','Piyush@123');
// if(!$link){
//     echo"can't be connect ";
// }else{
//     echo "connected !";
// }

// mysqli_close($link);

if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit'])){
    $conn=mysqli_connect('localhost','root','Piyush@123','demo')
    or
    die("connection failed :".mysqli_connect_error());
    if(isset($_POST['name'])&& 
    isset($_POST['email'])&&
    isset($_POST['password'])&&
    isset($_POST['cgpa'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $cgpa=$_POST['cgpa'];

        $sql = "INSERT INTO `tybca5` (`name`, `email`, `password`, `cgpa`) VALUES ('$name','$email','$password','$cgpa')";
        $query= mysqli_query($conn,$sql);
        if($query){
            echo "Data Inserted";
        }else{
            echo "Error";
        }
    }
}
?>

