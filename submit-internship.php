<?php

if($_SERVER["REQUEST_METHOD"] == "POST")
{

$to = "info@alhassanhealth.org";

$fullname = htmlspecialchars($_POST['fullname']);
$email = htmlspecialchars($_POST['email']);
$phone = htmlspecialchars($_POST['phone']);
$gender = htmlspecialchars($_POST['gender']);
$program = htmlspecialchars($_POST['program']);
$institution = htmlspecialchars($_POST['institution']);
$course = htmlspecialchars($_POST['course']);
$duration = htmlspecialchars($_POST['duration']);
$motivation = htmlspecialchars($_POST['motivation']);

$subject = "New Internship Application - " . $fullname;

$message = "
New Internship Application Received

Full Name: $fullname

Email: $email

Phone: $phone

Gender: $gender

Program: $program

Institution: $institution

Course: $course

Duration: $duration

Motivation:
$motivation
";

$headers = "From: noreply@alhassanhealth.org\r\n";
$headers .= "Reply-To: $email\r\n";

if(mail($to,$subject,$message,$headers))
{
echo "
<!DOCTYPE html>
<html>
<head>
<title>Application Submitted</title>
<style>
body{
font-family:Segoe UI;
background:#f4f4f4;
text-align:center;
padding-top:100px;
}
.box{
background:white;
padding:40px;
width:500px;
margin:auto;
border-radius:10px;
box-shadow:0 0 20px rgba(0,0,0,0.1);
}
a{
display:inline-block;
margin-top:20px;
padding:12px 25px;
background:#0b5d2a;
color:white;
text-decoration:none;
border-radius:25px;
}
</style>
</head>
<body>

<div class='box'>

<h2>Application Submitted Successfully</h2>

<p>Thank you for applying. We will contact you soon.</p>

<a href='index.html'>Return Home</a>

</div>

</body>
</html>
";
}
else
{
echo "Error sending application. Please try again.";
}

}

?>