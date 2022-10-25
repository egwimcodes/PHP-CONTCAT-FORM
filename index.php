<?php
 require_once('process.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=	, initial-scale=1.0">
    <title>Valid Php Form</title>
    <style>
        body{
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #fdfeff;
            position: relative;
            overflow-x: hidden;
        }
        .container{
            width: 300px;
            height: 500px;
            background-color: #fdfeff;
            border: none;
            border-radius: 10px;
            padding: 1rem;
            box-shadow: 0 0 10px 0 rgba(0,0,0,0.2),inset 0 0 10px 0 rgba(204, 204, 204, 0.19);
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        form{
            width: 200px;
            height: 590px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            margin-top: -30px;
        }
        input,textarea{
            width: 100%;
            font-size: 12px;
            font-weight: 600;
            border: 1px solid green;
            padding: 4px 8px;
            border-radius: 19px;
            outline: none;
        }
        ::placeholder {
          color: rgba(0, 0, 0, 0.979);
          opacity: 0.4; /* Firefox */
        }
        .btn{
            width: 100px;
            margin-top: 9px;
        }
        h1{
            text-align: center;
            margin-bottom: 20px;
            color: green;
        }
        span{
            color: red;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Valid Form</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        <label for="name">Name:
            <input type="text" name="name" value="<?php echo $name?>" placeholder="Please enter a valid name"><span>*<?php
            echo $nameErr?></span>
        </label>
        <label for="email">Email:
            <input type="text" name="email" value="<?php echo $email?>"  placeholder="Please enter a valid email"><span>*<?php
            echo $emailErr?></span>
        </label>
        <label for="subject">Subject
            <input type="text" name="subject" value="<?php echo $subject?>"? placeholder="Please enter your subject"><span>*<?php
            echo $subjectErr?></span>
        </label>
        <label for="message">Message
            <textarea name="message" id="" cols="50" rows="10" placeholder="Your message goes here...."><?php echo $message?></textarea>
        </label>
        <input class="btn" type="submit" value="submit">
    </form>
</div>
</body>
</html>