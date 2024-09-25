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
       
       $conn = new mysli('localhost','root','','credit_card_project');
       if($conn->connect_error)
       {
        die('Connection Failed : ' $conn->connect_error);
       }
       else{
        $stmt = $conn->prepare("insert into login(firstname,lastname,username,email,password,dob,color,gender,about)  values(?,?,?,?,?,?,?,?,?)") ;
        $stmt->bind_param("sssssisss",$firstname,$lastname,$username,$email,$password,$dob,$color,$gender,$about);
        $stmt "LogIn Successfully...."; 
        $stmt->close();
        $conn->close(); } 

    /*if(!empty($firstName) || !empty($lasttName) || !empty($username)||!empty($email)||!empty($password)||!empty($date_of_birth)||!empty($fav_color)||!empty($gender)||!empty($about_you))
    {
        $host = "localhost";
        $dbusername = "root";
        $dbpassword = " ";
       $dbname = "credit_card_project";

       $conn = new mysli($host,$dbusername,$dbpassword,$dbname);

       if(mysli_connection_error())
       {
        die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error()) ;
       }
        else
       {
          $SELECT = "SELECT email FROM login where email = ? Limit 1";
          $Insert = "Insert Into login (firstname,lastname,username,email,password,date_of_birth,fav_color,gender,about_you) values(?,?,?,?,?,?,?,?,?)";

          //prepare statement
          $stmt = $conn->prepare($SELECT);
          $stmt->bind_param("s",$email);
          $stmt->eecute();
          $stmt->bind_result($email);
          $stmt->store_result();
          $rnum=$stmt->num_rows;

          if($rnum==0)
          {
            $stmt->close();

            $stmt = $conn->prepare($Insert);
            $stmt->bind_param("sssssdsss",$firstname,$lastname,$username,$email,$password,$date_of_birth,$fav_color,$gender,$about_you);
            $stmt->execute();
            echo "New record inserted sucessfully";

          }
          else{
            "Already registered";
          }
          $stmt->close();
          $conn->close();
       }
       
       else
       {
         echo "All field are required";
         die();
       }
    }*/

?>