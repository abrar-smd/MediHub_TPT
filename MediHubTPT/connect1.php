<?php
    $name = $_POST['txt'];
    $number = $_POST['phn'];
    $email = $_POST['email'];
    $password = $_POST['pswd'];
   //database connection
   $conn = new mysqli('localhost','root','','project');
   if (!$conn)
   { die("Connection failed: ". mysqli_connect_error());

   }
   else{
    $stmt = $conn->prepare("insert into registration(Name,Phone,Email,Password)
    values(?,?,?,?)");
    $stmt->bind_param("siss",$name,$number,$email,$password);
    $stmt->execute();
    if ($stmt->affected_rows > 0) {
        $message = "Registration successful!";
    } else {
        $message = "Registration failed. Please try again.";
    }
    $stmt->close();
    $conn->close();
    header("Location: loginpage1.php?message=" . urlencode($message));
    exit;
   }
   
?>