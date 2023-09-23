<?php
if(isset($_POST['name'])){
  $server = "localhost";
  $username = "root";
  $password = "";

  $con = mysqli_connect($server,$username,$password);

  if(!$con){
    die("connection is fallied" . mysqli_connect_error());
  }


  $name = $_POST['name'];
  $email =$_POST['email'];
  $password =$_POST['password'];
  $gender = $_POST['gender'];
  $phone = $_POST['phone'];
  $massage = $_POST['massage'];


 $sql = " INSERT INTO `form`.`filds` (`name`, `email`, `gender`, `password`, `phone`, `massage`) VALUES ( '$name', '$email', '$gender', '$password', '$phone', '$massage');";
  
 echo $sql;
 echo "pass";

if($con->query($sql) == true){
    echo "sucessful inserted ";
    $insert = true;
}
else{
    echo "error : $sql <br> $con->error";
}

$con->close();

}

//   else{
//     $sql = "INSERT INTO `form` (`firstname`, `lastname`, `password`) VALUES (\'2\', \'ram\', \'shyam\', \'12444\');";

//   }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="box-main">
        <h3>this is a form in the trip</h3>
        <p>Enter your detaills and sumites</p>

        <H2><?php
        if($insert == "ture"){
            this apption is submited
        }
        ?></H2>
        <form action="index.php" method="post">
          <input type="text" name=" name" id="name" placeholder="enetr your name">
          <input type="email" name="email" id="email" placeholder="enter your email id">
          <input type="text" name="gender" id="gender" placeholder="enetr your gender">
          <input type="password" name="password" id="password" placeholder="enetr your password">
          <input type="number" name="phone" id="phone" placeholder="enetr your number">
          <textarea name="massage" id="massage" cols="30" rows="10" placeholder="enter your massage"></textarea>

          <input type="submit" value="submit">

        </form>
    </div>
</body>
</html>