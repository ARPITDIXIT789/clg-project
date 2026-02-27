<?php
include "db.php";

$name=$_POST['name'];
$email=$_POST['email'];
$title=$_POST['title'];
$abstract=$_POST['abstract'];

$sql="INSERT INTO submissions(name,email,title,abstract)
VALUES('$name','$email','$title','$abstract')";

if(mysqli_query($conn,$sql)){
  echo "Paper Submitted Successfully";
}else{
  echo "Error";
}
?>