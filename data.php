<?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="wifiData";

    $conn=mysqli_connect($servername,$username,$password,$dbname);
    if(!$conn){
        die('Could not connect:'.mysqli_connect_error());
    }

    $rollno=$_POST['rollno'];
    $name=$_POST['name'];
    $gender=$_POST['gender'];
    $course=$_POST['course'];
    $branch=$_POST['branch'];
    $from=$_POST['from'];
    $to=$_POST['to'];
    $hostel=$_POST['hostel'];
    $roomno=$_POST['roomno'];
    $mail=$_POST['mail'];
    $device=$_POST['device'];
    $make=$_POST['make'];
    $model=$_POST['model'];
    $serialno=$_POST['serialno'];
    $mac=$_POST['mac'];
    $os=$_POST['os'];
    $antiv=$_POST['antiv'];
    

    $data=$conn->prepare("INSERT INTO studata (RollNo,Stud_Name,Gender,Course,Branch,Dur_from,Dur_to,Hostel,RoomNo,Email,Device,Make,Model,SerialNo,MAC_Address,OS,Antivirus) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
    $data->bind_param("sssssiissssssssss",$rollno,$name,$gender,$course,$branch,$from,$to,$hostel,$roomno,$mail,$device,$make,$model,$serialno,$mac,$os,$antiv);
    
    if($data->execute()){
        echo "Data entered";
   }
   else{
       echo "Error: ".mysqli_error($conn);
       echo $data;
   }
 
   setcookie("rollno",$rollno);
   setcookie("name",$name);
   setcookie("gender",$gender);
   setcookie("course",$course);
   setcookie("branch",$branch);
   setcookie("from",$from);
   setcookie("to",$to);
   setcookie("hostel",$hostel);
   setcookie("roomno",$roomno);
   setcookie("mail",$mail);
   setcookie("device",$device);
   setcookie("make",$make);
   setcookie("model",$model);
   setcookie("serialno",$serialno);
   setcookie("mac",$mac);
   setcookie("os",$os);
   setcookie("antiv",$antiv);



   mysqli_close($conn);
   header("Location:print.php");
   exit;
   
   ?>