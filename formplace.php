<?php
$connection = mysqli_connect('localhost', 'root');
if ($connection){
   // echo "connection successfull";
}
else{
    echo "no connection found";
}

mysqli_select_db($connection, 'transformation');
$sender =$_POST['sender'];
$reciver =$_POST['receiver'];
$money =$_POST['money_transfer'];

$data = "INSERT INTO transfer (Sender, Reciver, Money) VALUES ('$sender', '$reciver', '$money')";

mysqli_query($connection, $data);
header('location:transfersuccessfull.php');



?>

