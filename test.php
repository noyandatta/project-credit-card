<?php

       $firstName = $_POST['firstName'];
       $lastName = $_POST['lastName'];
       $userName = $_POST['userName'];
       $email = $_POST['email'];
       $password = $_POST['password'];
       $dob = $_POST['date_of_birth'];
       $color = $_POST['fav_color'];
       $gender = $_POST['gender'];
       $about = $_POST['about_you'];
       

       //database conection
       
       $conn = new mysqli('localhost','root','','credit_card_project');
       if($conn->connect_error)
       {
        die('Connection Failed : ');
       }
       else{
        $stmt = $conn->prepare("insert into login(firstname,lastname,username,email,password,dob,color,gender,about)  values(?,?,?,?,?,?,?,?,?)") ;
        $stmt->bind_param("sssssisss",$firstname,$lastname,$username,$email,$password,$dob,$color,$gender,$about);
        $stmt "LogIn Successfully...."; 
        $stmt->close();
        $conn->close(); } 

        ?>