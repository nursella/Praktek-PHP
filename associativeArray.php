<?php

$mahasiswa = [
    "001" => "Sella",
    "002" => "Chika",
    "003" => "Dika",
    "004" => "Kia",
    "005" => "Rahmah"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Array Associative</title>
</head>
<body>
    <?php foreach ($mahasiswa as $nrp => $nama) : ?>
        <li><?php echo $nrp : $nama" ?></li>
    <?php endforeach ?>
</body>
</html>