<?php
require 'config/database.php';

if(isset($_PSOT['submit'])){
    $firstname = filter_var($_POST['firstname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $lastname = filter_var($_POST['firstname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $username = filter_var($_POST['firstname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_var($_POST['email'],FILTER_VALIDATE_EMAIL);
    $createpassword = filter_var($_POST['createpassword'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $confirmpassword = filter_var($_POST['confirmpassword'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $is_admin = filter_Var($_POST['userrole'],FILTER_SANITIZE_NUMBER_INT);
    $avatar = $_FILES['avatar'];

    if (!$firstname){
    $_SESSION['add-user'] = "Please enter your First Name";}
    elseif(!$lastname){
    $_SESSION['add-user'] = "Please enter your Last Name";}
    elseif(!$username){
    $_SESSION['add-user'] = "please enter your username";}
    elseif(!$email){
    $_SESSION['add-user'] = "please enter your a valid email";}
    elseif(!$is_admin){
    $_SESSION['add-user'] = "please select user role";}
    elseif(strlen($createpassword) < 8 || strlen($confirmpassword) < 8){
    $_SESSION['add-user']= "password should be 8+ characters";}
    elseif(!$avatar['name']){
    $_SESSION['add-user'] = "please add avatar";}
    else{
    if($createpassword !== $confirmpassword){
        $_SESSION['add-user'] = "passwords do not match";
    }else{
        $hashed_password = password_hash($createpassowrd,PASSWORD_DEFAULT);

        $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email'";

        $user_check_result = mysqli_query($connection, $user_check_query);
        if(mysqli_num_rows($user_check_result) > 0){
            $_SESSION['add-user'] = "Username or Email already exist";
        } else{
            $time = time();
            $avatar_name = $time. $avatar['name'];
            $avatar_temp_name = $avatar['temp_name'];
            $avatar_destination_path = '../images/' .$avatar_name;

            $allowed_files =['png','jpg','jpeg'];
            $extention = explode('.',$avatar_name);
            $extention = end($extention);
            if(in_array($extention,$allowed_files)){
                if($avatar['size']< 1000000){
                    move_uploaded_file($avatar_temp_name,$avatar_destination_path);
                }else{
                    $_SESSION['add-user'] = "Files isze too big.Should be less than 1mb";
                }
            }else{
                $_SESSION['add-user'] = 'files should be png,jpeg or jpeg';
            }
        }
    }
}
if(isset($_SESSION['add-user'])){
    $_SESSION['add-user-data'] = $_POST;
    header('location:' .ROOT_URL . '/admin/add-user.php');
    die();
    }else {
    $insert_user_query = "INSERT INTO users SET firstname= '$firstname',
    lastname = '$lastname', username='$username',email='$email',
    password = '$hashed_password', avatar='$avatar_name', is_admin=$is_admin";
    $insert_user_result = mysqli_query($connection,$insert_user_query);


    if(!mysqli_errno($connection)){
        $_SESSION['add-user-success'] = "Registration succesful. Please log in";
        header('location:' .ROOT_URL . 'admin/manage-users.php');
        die();
    }
}
}else{
    header('location:' .ROOT_URL . 'admin/add-user.php'); 
    die();
}

