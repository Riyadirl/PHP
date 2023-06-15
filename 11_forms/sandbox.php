<?php

//ternary operation
$score = 50;
//if ($score > 40) {
//    echo 'high score';
//} else {
//    echo 'low score ';
//}

//$val = $score > 90 ? 'high' : 'low';
//echo $val;


?>



<!DOCTYPE html>
<html lang="en">

<head>

    <title>11</title>
</head>

<body>
    <h1>
        <?php echo $score > 0 ? 'high' : 'low'; ?>
    </h1>
</body>

</html>