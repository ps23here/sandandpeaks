<?php
session_start();
include 'database.php';

 $username=$_POST['username'];
 $email=$_POST['email'];
 $contact=$_POST['contact'];
// $address=$_POST['address'];
// $message=$_POST['message'];

// $sql="INSERT INTO users(Username, Email, Contact, Address, Message) VALUES ('$username','$email','$contact','$address','$message')";
$sql="INSERT INTO family_vacation(Username, Email, Contact) VALUES ('$username','$email','$contact')";

$result=mysqli_query($conn, $sql);

if($result)
    {
        $_SESSION['status'] = "We will contact you soon..!";
        header("Location: index.php");
    }
    else
    {
        $_SESSION['status'] = "Date values Inserting Failed";
        header("Location: index.php");
    }
 
?>