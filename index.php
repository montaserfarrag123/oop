<?php 
  
  require "./config/operation.php";
  $operation = new operation;

  $data = $operation->datashow();
   
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
    <table>
     
    <tr>
        <th>titl</th>
        <th>content</th>
    </tr>

    
    <?php foreach ($data as $key => $value) {?>
                
                
        
            
            <tr>
                <td><?php  echo $value['title']; ?></td>
                <td><?php  echo $value['content'];   ?></td>
                

                <td>
                    <a href='delete.php?id=<?php echo $value['id']  ?>' class='btn btn-danger m-r-1em'>Delete</a>
                    <a href='edit.php?id=<?php echo $value['id'] ?>' class='btn btn-primary m-r-1em'>Edit</a>
                </td>
            </tr>

            <?php  } ?>


    </table>
</body>
</html>