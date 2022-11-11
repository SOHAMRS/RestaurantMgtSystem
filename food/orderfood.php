<?php
$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');
$email = filter_input(INPUT_POST, 'email');
$category = filter_input(INPUT_POST, 'category');
$phone = filter_input(INPUT_POST, 'phone');
$table = filter_input(INPUT_POST, 'table');
$mobile = filter_input(INPUT_POST, 'mobile');


if (!empty($username)){
if (!empty($password)){
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
$sql = "INSERT INTO hotel (`username`, `password`, `email`, `category`, `phone`, `table`, `mobile`) values ( '$username','$password','$email','$category','$phone','$table','$mobile' ) ";
if ($conn->query($sql)){
echo "Order Recieved successfully!";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "Password should not be empty";
die();
}
}
else{
echo "Username should not be empty";
die();
}
?>