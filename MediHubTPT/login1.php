<?php
    $email = $_POST['email'];
    $password = $_POST['pswd'];
    //database connection
   $conn = new mysqli('localhost','root','','project');
   if (!$conn)
   { die("Connection failed: " . mysqli_connect_error());

   }
   else{
    $stmt = $conn->prepare("Select * from registration where email = ?");
    $stmt->bind_param("s",$email);
    $stmt->execute();
    $stmt_result = $stmt->get_result();
    if($stmt_result->num_rows > 0)
    {
        $data = $stmt_result->fetch_assoc();
        if($data['Password']==$password)
        {
            //echo "<h2> Login Successfull</h2>";
            echo '<script>window.location.href = "./homepage1.html";</script>';
        exit();

        }
        else{
            echo "<h2> Invalid Email or Password</h2>";
        }
    }
    else{
        echo "<h2> Invalid Email or Password</h2>";
    }
   }
   
?>
