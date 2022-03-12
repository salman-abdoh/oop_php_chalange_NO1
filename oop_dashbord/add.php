<?php

include 'db.php'; 

$db=new Database ;
if(isset($_POST['add'])){
  
   
  
           
    $name = $_POST['name'];
    $descr = $_POST['descr'];
    $price = $_POST['price'];
    $image = $_POST['image']; 
      
      $resultdata=$db->insert("items","VALUES(null, '".$name."','".$image."','".$descr."','".$price."')");
      // "insert into prudocts(name,descr,price,image) values( '$name', '$descr', '$price', '$image')"
     // $result=MySqli_qurey($con,$sql);
      if ($resultdata) {
        echo"sc insert";
      //  header('location:index.php');
      
      
      }else{ echo"no";;}
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>products</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
   
   
       
</head>

<body>

<div class="card text-center" style="padding:15px;">
  <h4>ADD NEW PRODUCT</h4>
</div><br> 

<div class="container">
  <form action="add.php"    method="POST">
  
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" name="name"  required="">
    </div>
    <div class="form-group">
      <label for="price">Price:</label>
      <input type="text" class="form-control" name="price"  required="">
    </div>
    <div class="form-group">
      <label for="details">details:</label>
      <input type="text" class="form-control" name="descr" required="">
    </div>
    <div class="form-group">
      <label for="details">image:</label>
      <input type="text" class="form-control" name="image"  required="">
    </div>
    <div class="form-group">
      <input type="hidden" name="id" value="null" >
      <input type="submit" name="add" class="btn btn-primary" style="float:right;" value="add pro">
    </div>
  </form>
</div>
       
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      
    </script>
</body>
</html>