<?php
    $name = $_POST['name'];
    $spname = $_POST['spname'];
    $Fname = $_POST['Fname'];
    $phone= $_POST['phone'];
    $email = $_POST['email'];
    $date= $_POST['date'];
   //database connection
   $conn = new mysqli('localhost','root','','project');
   if (!$conn)
   { die("Connection failed: ". mysqli_connect_error());

   }
   else{
    $stmt = $conn->prepare("insert into appointment(Doctor,Specialist,Name,Phone,Email,Date)
    values(?,?,?,?,?,?)");
    $stmt->bind_param("sssiss",$name,$spname,$Fname,$phone,$email,$date);
    $stmt->execute();
    $stmt->close();
    $conn->close();
    echo '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="https://us.123rf.com/450wm/mantinov/mantinov2004/mantinov200400007/143789285-help-for-health-icon-logo-vector-graphic-design-helping-hands-inside-medical-cross-sign.jpg?ver=6" type="image/x-icon">
        <title>Appointment Receipt</title>
        <link rel="stylesheet" type="text/css" href="appointmentpage1.css">
        <style>
            #receipt {
                border: 1px solid #ccc;
                padding: 20px;
                margin-top: 20px;
                background-color: #f9f9f9;
            }

            #receipt h2 {
                font-size: 24px;
                margin-bottom: 10px;
            }

            #receipt p {
                margin: 0;
            }

            #receipt strong {
                font-weight: bold;
            }

            #receipt .success-message {
                font-size: 18px;
                color: green;
                margin-bottom: 20px;
            }

            #receipt .contact-info {
                font-size: 14px;
                color: #777;
                margin-top: 20px;
            }
        </style>
    </head>
    <body>
        <div id="receipt">
        <h1>Appointment Successful</h1>
            <h2>Appointment Receipt</h2>
            <p><strong>Doctor:</strong> ' . $name . '</p>
            <p><strong>Specialist:</strong> ' . $spname . '</p>
            <p><strong>Name:</strong> ' . $Fname . '</p>
            <p><strong>Phone:</strong> ' . $phone . '</p>
            <p><strong>Email:</strong> ' . $email . '</p>
            <p><strong>Date:</strong> ' . $date . '</p>
            <div class="success-message">Congratulations! Your appointment has been booked.</div>
            <p><strong>If you have any queries, please contact: 987653436</strong></p>
        </div>
    </body>
    </html>';
   }
