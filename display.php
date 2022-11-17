<?php

include 'connect.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> crud display </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container ">
    <h2><b><center>Students Record </center> </b></h2>
        <a href="crud.php"><button type="button" class="btn btn-primary btn-m">Add Entry</button> </a>
    
    <p>Personal Details of Students :</p>
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID No</th>
        <th>Name</th>
        <th>Email</th>
        <th>Mobile number</th>
        <th>Location</th>
        <th>Hobby</th>
      </tr>
    </thead>
    <tbody>
 <?php
    $sql = 'SELECT * FROM "crud"';
    $result=mysqli_query($connection, $sql);
    if($result){
        $row=mysqli_fetch_assoc($result);
        echo $row['name'];
    }









?>
     <!-- <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
      </tr>
    </tbody>
  </table>
   </div> -->
</body>
</html>
