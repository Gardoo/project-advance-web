<?php


$con = mysqli_connect('localhost', 'root', '','fitness_gym_club');
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $password = $_POST['password'];
        $cpassword = $_POST['confirm_password'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $pnumber = $_POST['pnumber'];
        $address = $_POST['address'];
        $birthday = $_POST['birthday'];
        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $db_name = "fitness_gym_club";

       
         $conn = new mysqli($host, $dbUsername, $dbPassword, $db_name);
     
               $sql = "INSERT INTO register (id,fname, lname,birthday,confirm_pword, pword, gender, email, pnum, address) VALUES(0,$fname, $lname,$birthday,$cpassword, $password, $gender,$email, $pnumber, $address)";
             
      
   $rs = mysqli_query($con, $sql);
if($rs)
{
    echo "Contact Records Inserted";
}


?>