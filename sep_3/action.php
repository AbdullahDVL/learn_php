<?php
$conn = mysqli_connect('localhost', 'root', '', 'testing');

 $name = $_POST['name'];
 $mobile= $_POST['mobile'];
 $email= $_POST['email'];
 $password= $_POST['password'];
 $address= $_POST['address'];
 $updateId=$_POST['updateId'];
 $deleteId=$_GET['deleteId'];
if($deleteId) {
    $sql = "DELETE FROM users WHERE u_id = $deleteId";
    $conn->query($sql);
}  else if ($updateId) {
      $sql = "UPDATE users SET u_name = '$name', u_mobile = '$mobile', u_email = '$email', u_password = '$password', u_address = '$address' WHERE u_id = $updateId";
      $conn->query($sql);
 }  else {
    $sql = "INSERT INTO users (u_name, u_mobile, u_email, u_password, u_address) VALUES ('$name','$mobile','$email','$password', '$address')";
    $conn->query($sql);
}


 header("Location: index.php");
 ?>