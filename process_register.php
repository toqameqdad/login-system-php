<?php 
require 'config/db.php';
require 'classes/user.php';

if($_SERVER['REQUEST_METHOD']==="POST"){
    $username=$_POST['username'];
    $password=$_POST['password'];

    $img_name=$_FILES['profile_image']['name'];
    $img_tmp=$_FILES['profile_image']['img_tmp'];
    $unique_name=uniqid().'_'.$img_name;
    $upload_path='uploads/'.$unique_name;

    $check=$conn->prepare("SELECT id FROM user WHERE username = ?");
    $check->bind_param("s",$username);
    $check->execute();
    $check->store_result();

    if($check->num_row>0){
        echo"username already exists";
    }else{
        if(move_uploaded_file($img_tmp,$upload_path)){
            $stmt= $conn->prepare("INSERT INTO user (username,password,image ) VALUES (?,?,?)");
            $hashedPassword = password_hash($password,PASSWORD_DEFAULT);
            $stmt->bind_param("sss",$username,$hashPassword,$upload_path);
            $stmt->execute();

            session_start();
            $_SESSION['loggedin']=true;
            $_SESSION['username']=$username;
            $_SESSION['image']=$upload_path;

            header("Location:dashboard.php");
            exit();
            $check->close();
            $conn->close();

        }else{
            echo "failed to upload image";
        }
    }
}
?>