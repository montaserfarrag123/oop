<?php 
 
 require "./config/operation.php";
  $id = $_GET['id'];
  $operation = new operation;
  $data = $operation->edit($id);

 if($_SERVER['REQUEST_METHOD'] == "POST"){
    $operation->edit($_POST);
 }

?>

<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
 </head>
 <body>
    
   <form action="" method="post">
     
     <input type="text" name="title" value ="<?php echo $data['title']; ?>" placeholder="title"> <br><br>
     <input type="content" value ="<?php echo  $data['content']; ?>" name="content" placeholder="content"><br><br>
     
     <input type="submit" value="submit"><br><br>
   
   </form>

  
 </body>
 </html>