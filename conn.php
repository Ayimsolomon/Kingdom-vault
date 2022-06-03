<?php

$con = mysqli_connect("localhost","root","","trial");

if($con){
    echo "<p style='background:lightgreen;text-align:center;font-size:10pxpx;'>Connected to Database Succeessfully.</p>";

    
}

else{
    echo "<p style='background:red;text-align:center;'> Not connected to Database,please check your connection route.</p>";
}


header("refresh:60");





   if(isset($_POST["submit"])){
   if(!empty($_POST["Email"]) && !empty($_POST["Password"])  && !empty($_POST["Gender"])){

    $email = $_POST['Email'];
    $password = $_POST['Password'];
    $password =md5('$password');
    $gender = $_POST['Gender'];

    $query = "INSERT INTO reg (Email,Password,Gender)values('$email','$password','$gender')";
    
    $result = mysqli_query($con,$query);

if($result){

    echo "<p style='color:black;background:lightgreen;text-align:center;padding:25px;font-size:40px;width:500px;position:relative;margin-left:450px;'> Inserted into Database successfully.</p>";
    }
    else{
    echo "<p style='color:black;background:red;text-align:center;'>Fail to insert Data,check connnection and try again .</p>";
    }
    }
  // else{
    
  // }
       
    
   else{ //echo"all fields required";
    
    echo "<div style='background:red;'>All field is required to be fill up.</div>";
    }
    }
?>