<?php
$nama = ["Sella","Budi","Ahmad","Adzando","Erwin"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Looping for array</title>
</head>
<body>
    <?php 
    for ($i = 0; $i < count ($nama); $i++) {
        echo "<li>$nama[$i]</li>";
    }
    ?>
</body>
</html>