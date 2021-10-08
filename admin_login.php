<?php



$conn = mysqli_connect('localhost', 'root', '','fitness_gym_club');



$username = $_POST['username'];
$password = $_POST['password'];
   
   $sql = "SELECT * FROM admin_account WHERE username = '$username' AND password = '$password'";
   $result= mysqli_query($conn,$sql);

   $row = mysqli_fetch_array($result);

 if($username == "" && $password = ""){
   header('location:login.php');
 }

   if($row['username'] == $username && $row['password'] == $password){
      echo '<script type="text/javascript">'; 

echo 'window.location.href = "admin.php";';
echo '</script>';
   }
   else{
    echo '<script type="text/javascript">'; 
echo 'alert("Invalid Credentials");'; 
echo 'window.location.href = "login.php";';
echo '</script>';
   }      

?>	