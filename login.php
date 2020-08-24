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
    $email = $_POST['email_tbx'];
    $passwd = $_POST['password_tbx'];

    //check user login
	$sql = "SELECT f_name FROM login_tbl WHERE email = '$email' and paswrd = '$passwd'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $active = $row['active'];
      
    $count = mysqli_num_rows($result);
      
    //excecute and message show
    if($count == 1) {    
      header("location: index.html");
    }else {
      
      echo '<script language="javascript">';
      echo 'alert("Sorry..! Try Again")';
      header("location: login.html");
      echo '</script>'; 

      
    }
}
  
   mysqli_close($conn);

?>