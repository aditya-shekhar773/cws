<?php
  $connect = mysqli_connect("localhost","root","","cws");

    function redirect($page='index.php'){
        echo "<script>window.open('$page','_self')</script>";
    }
    function alert($msg){
        echo"<script>alert('$msg')</script>";
    }

session_start();

function checkAuth($page){
    if(!isset($_SESSION['user'])){
        redirect($page);
    }
    
    return null;
}

function getUser(){
    global $connect;
    if(isset($_SESSION['user'])){
        $sessionData = $_SESSION['user'];
        $query = mysqli_query($connect, "select * from account where email='$sessionData' OR contact='$sessionData'");
        $row = mysqli_fetch_array($query);
        return $row;
    }
    return null;
}


// Create account

if(isset($_POST['create'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $password = sha1($_POST['password']);
    $con_password = sha1($_POST['con_password']);
    if($password != $con_password){
        alert('retry password not match');
    }
    else{
        $query = mysqli_query($connect, "insert into account (name, email, contact, password) value ('$name','$email','$contact','$password')");

        if($query){
            $_SESSION['user'] = $email;
            redirect("index.php");
        }
        else{
            alert("fail to create your account");
            redirect("login.php");
        }
    }
}


// login

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = sha1($_POST['password']);

    $query = mysqli_query($connect, "select * from account where (email='$email' OR contact='$email') AND  password='$password'");

    $count = mysqli_num_rows($query);

    if($count > 0){
        $_SESSION['user'] = $email;
        redirect("admin.php");
    }
    else{
        alert("email or password may invalid try again");
        redirect("login.php");
    }
}


// admission work

if(isset($_POST['save'])){
    $name = $_POST['name'];
    $father_name = $_POST['father_name'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
   
    
    $query = mysqli_query($connect, "insert into admission (name, father_name, contact, email) value ('$name','$father_name','$contact','$email')");

    if($query){
        redirect("index.php");
    }
    else{
        alert("fail to create your account");
        redirect("admission.php");
    }
    
}


// course insert

if(isset($_POST['send'])){
    $course_name = $_POST['course_name'];
    $course_duration = $_POST['course_duration'];
    
    // image work
    $dp = $_FILES['dp']['name'];
    $tmp = $_FILES['dp']['tmp_name'];

    move_uploaded_file($tmp,"images/$dp");

   
    
    $query = mysqli_query($connect, "insert into course (course_name, course_duration, dp) value ('$course_name','$course_duration','$dp')");

    if($query){
        redirect("courseAdd.php");
    }
    else{
        alert("fail to create your account");
        redirect("admin.php");
    }
    
}


// Success Student insert

if(isset($_POST['click'])){
    $student_name = $_POST['student_name'];
    $developer = $_POST['developer'];
    $company_name = $_POST['company_name'];
    
    // image work
    $cover = $_FILES['cover']['name'];
    $tmp = $_FILES['cover']['tmp_name'];

    move_uploaded_file($tmp,"images/$cover");

   
    
    $query = mysqli_query($connect, "insert into student (student_name, developer, company_name, cover) value ('$student_name','$developer','$company_name','$cover')");

    if($query){
        redirect("studentView.php");
    }
    else{
        alert("fail to create your account");
        redirect("admin.php");
    }
    
}
?>