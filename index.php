<?php include_once 'includes/db.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>

<?php 
    $query = "SELECT * FROM todos;";
    $result = mysqli_query($conn, $query);
    $resultcheck = mysqli_num_rows($result);

    if($resultcheck > 0){
        while($row = mysqli_fetch_assoc($result)){
            ?>
            <h1 id="myid"><?php echo $row['title'];?></h1>
            <p><?php echo $row['description']; ?></p>
            <?php
        }
    }
?>
    
</body>
</html>