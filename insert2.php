<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
$username=$_POST["username"];
$email=$_POST["email"];
$password=$_POST["password"];
$confirm_pasword=$_POST["confirm_pasword"];
$phone=$_POST["phone"];
    if(!empty($username) || !empty($email) || !empty($password) || !empty($confirm_pasword) || !empty($phone) ){
        if($password != $confirm_pasword){
            echo "chek your password";
        }else{
            $host = "localhost";
            $dbUsername = "root";
            $dbPassword = "";
            $dbName="souad";
            $conn =  mysqli_connect($host, $dbUsername, $dbPassword, $dbName);
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            } 
            
            $sql = "INSERT Into logex (username, passw, email, confirm_pasword, Phone)values ('$username', '$password', '$email','$confirm_pasword', '$phone')";
            
            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            
            $conn->close();
      }
  }
}
?>