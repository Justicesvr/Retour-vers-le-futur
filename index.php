<?php


$presentTime = new DateTime;
$destinationTime = new DateTime;

$destinationTime->setDate(2015, 10, 21);
$destinationTime->setTime(16, 29);

$presentTime->setDate(2015, 10, 21);
$presentTime->setTime(16, 06);


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
    <ul>
        <li><?php echo $destinationTime->format('M j Y a h:i'); ?></li>
        <li><?php echo $presentTime->format('M j Y a h:i'); ?></li>
    </ul>
</body>

</html>