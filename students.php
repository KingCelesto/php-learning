<?php
    $students= [
        ["name"=>"Uche Emeka","matric_no"=>"VUG/SEN/23/10607","course"=>"Software Engineering","admission_type"=>"direct_entry","faculty"=>"engineering","year_registered"=>"2023","fee_status"=>"paid"],
        ["name"=>"David Charles","matric_no"=>"VUG/SEN/23/8837","course"=>"Software Engineering","admission_type"=>"direct_entry","faculty"=>"engineering","year_registered"=>"2023","fee_status"=>"paid"],
        ["name"=>"Ezehi Theddy Lome","matric_no"=>"VUG/SEN/23/8867","course"=>"Software Engineering","admission_type"=>"direct_entry","faculty"=>"engineering","year_registered"=>"2023","fee_status"=>"outstanding"],
        ["name"=>"James Idabor","matric_no"=>"VUG/SEN/23/8898","course"=>"Software Engineering","admission_type"=>"direct_entry","faculty"=>"engineering","year_registered"=>"2023","fee_status"=>"outstanding"],
    ];

    foreach ($students as $studs) {
        echo $studs["name"]. '</br>';
    }

    function shoot($user= "guest"){
        echo "Good Afternoon, $user";
    };
    shoot("Blaze");
    shoot();
    function volume_of_a_sphere($radius=7){
        echo 4/3*pi()*$radius**3;
    }
    volume_of_a_sphere();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/materialize.css">
    <style>
        /* .card{
            color: <?php
                // fee_status("paid", "outstanding");
                // if (fee_status=paid) {
                    // echo color='green';
                // } ?>;
        } */
    </style>
</head>
<body>
    <div class="container">
        <h1 class="center-align green darken-3">
            Students
        </h1>
        <div class="row">
            <?php foreach ($students as $studs) { 
            // if ($students["fee_status"]===true) {
            //     $color="green";
            // }
            // elseif ($students["fee_status"]===false) {
            //     $color ="red";
            // }
            // ?>
                <div class="col s12 l3">
                    <div class="card">
                        <div class="card-image"></div>
                        <div class="card-content">
                            <span class="card-title"><?php echo $studs["name"]; ?></span>
                            <span class=""><?php echo $studs["matric_no"]; ?></span>
                            <br>
                            <span class=""><?php echo $studs["course"]; ?></span>
                            <br>
                            <span class=""><?php echo $studs["fee_status"]; ?></span>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

    <script src="js/jquery.js"></script>
    <script src="js/materialize.js"></script>
    <script>
        $(document).ready(function(){

        })
    </script>
</body>
</html>