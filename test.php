<?php
    $your_name= "David";
    $department= "Software";
    echo $your_name;

    // $your_age= 17;
    // echo "My name is $your_name";

    // functions
    echo strlen($your_name);
    echo strtoupper($your_name);
    echo 'My name is'. $your_name.'and i am in'. $department . 'department';
    // Area of a circle (pie r^2)
    $radius= "7";
    $area_of_a_circle= pi() * $radius**2;
    echo $area_of_a_circle;

    //  phytagoreas
    $a= 5;
    $b= 4;
    $c= $a**2+$b**2;
    $pyt=sqrt($c);
    echo $pyt;

    echo rand(1, 10);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-Learning</title>
    <link rel="stylesheet" href="css/materialize.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    <h1 class="red-text" >Hello, my name is <?php echo $your_name; ?>. I'm learning php </h1>

    <script src="js/jquery.js"></script>
    <script src="js/materialize.js"></script>
    <script>
        $(document).ready(function(){

        })
    </script>
</body>
</html>