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
    foreach ($nama as $absen) {
        echo "<li>$absen</li>";
    }
    ?>
</body>
</html>