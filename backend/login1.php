<?php
error_reporting(0);
   $email=$_POST['email'];
   $password=$_POST['password'];
   // echo $email;
   $con= new mysqli("localhost","root","","test1");
   if($con->connect_error){
      die("Failed ".$con->connect_error);
   }else{
      $stmt = $con->prepare("select * from registration where email = ?");
      $stmt->bind_param("s",$email);
      $stmt->execute();
      $stmt_result = $stmt->get_result();
      if($stmt_result->num_rows > 0 ){
         $data = $stmt_result->fetch_assoc();
         if ($data['password'] === $password){
            echo '<script>alert("you are successfully logged in")</script>';
         }else{
            echo "not successfull";
         }

      }else{
         echo "invalid";
      }
   }
?>