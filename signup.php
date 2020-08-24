<?php
// Connect with MySQL Database
$servername = "localhost";
$username = "root";
$password = "16306325698r";
$dbname ="hotel_db";


// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error)
{
	die("Connection failed: " . $conn->connect_error);
}	
else{
    $fname = $_POST['fname_tbx'];
    $lname = $_POST['lname_tbx'];
    $email = $_POST['email_tbx'];
    $passwd = $_POST['password_tbx'];

    //inset data to table quaery
	$query = "INSERT INTO login_tbl(f_name, l_name, email, paswrd) VALUES ('$fname','$lname','$email','$passwd');";

        //excecute and message show
        if ($conn->query($query)) {
        echo '<script>alert("Account Create Successfully")</script>'; 
        header("location: login.html");
        } 
        else 
        {
          echo '<script>alert("Sorry, Uncompleted, Try Again..")</script>'; 
          header("location: signup.html");
        }
}
  
   mysqli_close($conn);

?>