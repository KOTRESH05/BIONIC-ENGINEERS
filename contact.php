<?php
   include_once("include/dbconnect.php");
  if ($_SERVER['REQUEST_METHOD'] == 'POST')
   {
      $var=$_POST['name'];
      $phone=$_POST['phone'];
	    $email=$_POST['email'];
      $age=$_POST['age'];
      $gender=$_POST['gender'];
      $comment=$_POST['comment'];
      
      $sql = "INSERT INTO contact(customer_name,phone,email,age,gender,comment) VALUES ('$var','$phone','$email','$age','$gender','$comment')";

          if (mysqli_query($conn,$sql)) 
            {
              echo "<script>alert(\"Message have sent successfully .\")</script>";  
            }
            else
            {
            echo "<span  class='success_msg'>Error: " . $sql . "<br>" . $conn->error . "</span>";
            }
    }
?>