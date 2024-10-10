<?php
//DB connection
   require('../../config/db_connection.php');
   //Get data from register form

   $email = $_POST['email'];
   $pass = $_POST ['passwd'];
   $enc_pass = md5($pass);
   
// query to insert data into users table 
    $query = "INSERT INTO users (email, password) 
    VALUES ('$email','$enc_pass')";

    $result = pg_query($conn, $query);

    if($result){
    echo 'User Registraction  seccessful';
   
    }else{
      echo 'failed to register user';
    }
    pg_close($conn);
?>