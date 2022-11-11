<?php
$fullname = filter_input(INPUT_POST, 'fullname');
$email = filter_input(INPUT_POST, 'email');
$address = filter_input(INPUT_POST, 'address');
$city = filter_input(INPUT_POST, 'city');
$creditno = filter_input(INPUT_POST, 'creditno');
$expmonth = filter_input(INPUT_POST, 'expmonth');
$expyear = filter_input(INPUT_POST, 'expyear');
$cvv = filter_input(INPUT_POST, 'cvv');
    

if (!empty($fullname)){
if (!empty($cvv)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "food";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);


if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO payment (`fullname`, `email`, `address`, `city`, `creditno`, `expmonth`, `expyear`, `cvv`) values ( '$fullname','$email','$address','$city','$creditno','$expmonth','$expyear','$cvv' ) ";
if ($conn->query($sql)){
echo "Payment sucessfully";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "Payment Faild!";
die();
}
}
else{
echo "Something went wrong";
die();
}
?>