<?php

// include 'connect.php'; 
include 'db.php'; 
$db=new Database ;


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
  <h4>products</ h4>
</div><br><br> 

<div class="container">

    
 
        <?php 
         $list=$db->getTable('items');
         while($row=mysqli_fetch_assoc($list)){
?>

        <div class=" col-md-3 col-lg-3 " style="    border: 1px solid #ecdcdc;
            border-radius: 7px;">
            <form action="index.php" method="post">
             <div class="text-primary hiddin" style="display: none;"><h2><?php echo $row['pid'];?></h2></div>
            <div class="text-primary"><h2><?php echo $row['name'];?></h2></div>
            <div class="text-dark"><h6><?php echo $row['price'];?></div>
            
            <div class="text-danger"><h5><?php echo $row['descr'];?></h5></div>
            <div class="product-image"><img src="image/<?php echo $row['image'];?>";></div>
           
                <div class="btn">
                <input type="submit" name="update" class="btn btn-primary" style="float:right;" value="update">
                  
                   </div>
                 
                   </form>
            </div>
         
            <?php } ?>
        <!-- //    if($result){
        //   while( $row=mysqli_fetch_assoc($result)){
        //     $id = $row['idp'];
		    //     $name = $row['name'];
        //     $descr = $row['descr'];
        //     $price = $row['price'];
        //     $image = $row['image']; 
        //     echo
        //     ' <tr>
        //        <td>'.$id.'</td>
        //        <td>'.$name.'</td>
        //        <td>'.$price.'</td>
        //        <td>'.$descr.'</td>
        //        <td>'.$image.'</td>
        //        <td>
              
        //        <a class="btn btn-success" href="update.php?updateid='.$id.'" style="color:white">
        //            <i class="fa fa-pencil" aria-hidpden="true"></i>update</a>
                  
        //             <a class="btn btn-danger" href="delete.php?deleteid='.$id.'" style="color:white" onclick="confirm("Are you sure want to delete this record")">
        //             delete<i class="fa fa-trash" aria-hidpden="true"></i> 
        //          </a>
        //        </td>
        //      </tr>';
        //   } 
           
        //    }
      -->
       
    
</div></div>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      
    </script>
</body>
</html>