<?php
include('config.php');
?>


<?php 
if (isset($_POST['submit'])){
 echo "Dear, ".$_POST['username']." You are Welcome.".'<br>';
 $username = $_POST['username'];
 $age = $_POST['age'];
 $contact = $_POST['contact'];
 $email = $_POST['email']; 
    
    $sql  = "INSERT INTO `record` (NAME, AGE, CONTACT, EMAIL) 
    VALUES ('$username', '$age', '$contact', '$email')";
    mysqli_query($conn, $sql);
    header("Location:details.php");
}
else{
    echo "Welcome Guest";
}
?>