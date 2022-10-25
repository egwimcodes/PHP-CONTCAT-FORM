<?php
$name = $email = $subject = $message= "";
$nameErr = $emailErr = $subjectErr = $messageErr="";

if($_SERVER['REQUEST_METHOD'] == "POST"){
    if(empty($_POST['name'])){
         $nameErr = "please enter a valid name";
    }else{
        $name = check_input($_POST['name']);
        if(!preg_match("/^[a-zA-Z-' ]*$/", $name)){
            $nameErr = "Only letters and white space allowed";
        }
    }
    if(empty($_POST['email'])){
        $emailErr = "Valid email address required";
    }else{
        $email = check_input($_POST['email']);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format"; 
    }
    }
    if(empty($_POST['subject'])){
        $subjectErr = "Why contacting me..";
    }else{
        $subject = check_input($_POST['subject']);
    }
    if(empty($_POST['message'])){
        $messageErr = "";
    }else{
        $message = check_input($_POST['message']);
    }
    $mailTo = "contact@snowwisdom.com";
    $headers = "From: ".$email;
    $txt = "You are getting this mail from: ".$name.".\n\n".$message;
    mail($mailTo , $subject, $txt, $headers);
}

function check_input($data){
    $data = trim($data);
    $data = htmlspecialchars($data);
    $data = stripslashes($data);
    return $data;
}
?>