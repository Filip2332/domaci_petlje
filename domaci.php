<?php


$podaci = [
    "Glavna",
    "O nama",
    "Kontakt"
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

   <?php foreach($podaci as $podatak): ?> 
   <a href="#"><?php echo $podatak; ?></a><br>
    <?php endforeach; ?>   
</body>

</html>