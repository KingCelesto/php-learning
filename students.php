<?php
    $students= [
        ["name"=>"Uche Emeka Brendan","matric_no"=>"VUG/SEN/23/10607","course"=>"Software Engineering","admission_type"=>"direct_entry","faculty"=>"engineering","year_registered"=>"2023","fee_status"=>"paid"],
        ["name"=>"David Izuchukwu Charles","matric_no"=>"VUG/SEN/23/8837","course"=>"Software Engineering","admission_type"=>"direct_entry","faculty"=>"engineering","year_registered"=>"2023","fee_status"=>"paid"],
        ["name"=>"Ezehi Theddy Lome","matric_no"=>"VUG/SEN/23/8867","course"=>"Software Engineering","admission_type"=>"direct_entry","faculty"=>"engineering","year_registered"=>"2023","fee_status"=>"outstanding"],
        ["name"=>"James Idabor","matric_no"=>"VUG/SEN/23/8898","course"=>"Software Engineering","admission_type"=>"direct_entry","faculty"=>"engineering","year_registered"=>"2023","fee_status"=>"outstanding"],
    ];

    foreach ($students as $studs) {
        echo $studs["name"]. '</br>';
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/materialize.css">
</head>
<body>
    <div class="container">
        <h1 class="center-align green darken-3">
            Students
        </h1>
        <div class="row">
            <?php foreach ($students as $studs) { ?>
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