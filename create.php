
<?php
//include "./config/dbconfig.php";
include "./config/operation.php";
  
if($_SERVER['REQUEST_METHOD'] == "POST"){

    $operation = new operation;

    $operation->insert($_POST);

    // foreach($data as $key => $value){
    //     echo '* '.$key.' : '.$value.'<br>';
    // }
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
     
     <input type="text" name="title" placeholder="title"> <br><br>
     <input type="content" name="content" placeholder="content"><br><br>
     
     <input type="submit" value="submit"><br><br>
   
   </form>

  
 </body>
 </html>