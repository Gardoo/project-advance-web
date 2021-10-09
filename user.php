<?php



$conn = mysqli_connect('localhost', 'root', '','fitness_gym_club');



$username = $_POST['username'];
$password = $_POST['password'];
   
   $sql = "SELECT * FROM register WHERE username = '$username' AND pword = '$password'";
   $result= mysqli_query($conn,$sql);

   $row = mysqli_fetch_array($result);

 if($username == "" && $password = ""){
   header('location:user_login.php');
 }

   if($row['username'] == $username && $row['pword'] == $password){
      echo '<script type="text/javascript">'; 

echo 'window.location.href = "profile.php";';
echo '</script>';
   }
   else{
    echo '<script type="text/javascript">'; 
echo 'alert("Invalid Credentials");'; 
echo 'window.location.href = "user_login.php";';
echo '</script>';
   }      

?>  