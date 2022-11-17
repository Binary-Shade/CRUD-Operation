<?php

include 'connect.php';        //including the connect.php file

if(isset($_POST['submit'])){   //getting user input
  $name = $_POST['name'];  
  $email =$_POST['email'];
  $phone =  $_POST['phone'];
  $location = $_POST['location'];
  $hobby = $_POST['hobby'];
}

$sql = "INSERT INTO `crud` (`name`, `email`, `phone`, `location`, `hobby`) VALUES ('$name', '$email', '$phone', '$location', '$hobby')"; 
$result = mysqli_query($connection, $sql);

if($result){    //insertion checking slot
  echo '<div class="alert alert-success">   
  <strong>whey !</strong> Data entered successfully ..
</div>';
}else{
  die (mysqli_error());
}


/*if ($connection->query($sql) === TRUE) {  //show that data is inserted
  echo "'<div class=alert alert-success'>
  <strong>Success!</strong> Indicates a successful or positive action.
</div>";
} else {
  echo "Error: " . $sql . "<br>" . $connection->error;
}*/

$connection->close();       //closing the connection
?>

<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
<div class="container my-5">
<h2><b>CRUD Data Form </b> </h2>
  <form method="POST" class="form">
    <div class="form-group">
      <label for="name"><span class="glyphicon glyphicon-user"></span> Name:</label>
      <input type="name" name="name" class="form-control" id="name" placeholder="Enter your name" autocomplete="off">
    </div>
    <div class="form-group">
      <label for="email"><span class="glyphicon glyphicon-envelope"></span> Email:</label>
      <input type="email" name="email" class="form-control" id="email" placeholder="Enter email" autocomplete="off">
    </div>
    <div class="form-group">
      <label for="phone"><span class="glyphicon glyphicon-phone"></span> Phone:</label>
      <input type="phone" name="phone" class="form-control" id="phone" placeholder="Enter your phone" >
    </div>
    <div class="form-group">
      <label for="location"><span class="glyphicon glyphicon-search"></span> Location:</label>
      <input type="location" name="location" class="form-control" id="location" placeholder="Enter your location" >
    </div>
    <div class="form-group">
      <label for="hobbby"><span class="glyphicon glyphicon-heart"></span> Hobbby :</label>
      <input type="hobby" name="hobby" class="form-control" id="hobby" placeholder="Enter your Hobbby">
    </div>



  
    <button type="submit" name="submit" class="btn btn-success">Submit Data</button>

    

  </form>
</div>
</body>
</html>