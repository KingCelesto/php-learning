<?php
// Index
$cake=["choco","vanilla","strawberry"];
// /echo $cake[1];
$cake[0]= "chocolate";
array_push($cake, "blueberry");
array_push($cake, "caramel");
array_push($cake, "apple");
$choco_cake=[
    "full_name"=>"Chocolate Cake",
    "bake_time"=>"25",
    "ingredients"=>"cocoa, sugar, flour, butter, milk",
    "likes"=>"258",
];
$choco_cake ["date_created"]="02/09/2024";
// print_r($cake);
// print_r($choco_cake);
// echo $choco_cake["ingredients"];

$student= [
    "full_name"=>"Uche Emeka Brendan",
    "matric_no"=>"VUG/SEN/23/8837",
    "course"=>"Software Engineering",
    "admission_type"=>"direct_entry",
    "faculty"=>"engineering",
    "year_registered"=>"2023",
    "fee_status"=>"10/10/2006",
];
$students= [
    ["name"=>"Uche Emeka Brendan","matric_no"=>"VUG/SEN/23/10607","course"=>"Software Engineering","admission_type"=>"direct_entry","faculty"=>"engineering","year_registered"=>"2023","fee_status"=>"10/10/2006"],
    ["name"=>"David Izuchukwu Charles","matric_no"=>"VUG/SEN/23/8837","course"=>"Software Engineering","admission_type"=>"direct_entry","faculty"=>"engineering","year_registered"=>"2023","fee_status"=>"10/10/2006"],
    ["name"=>"Ezehi Theddy Lome","matric_no"=>"VUG/SEN/23/8867","course"=>"Software Engineering","admission_type"=>"direct_entry","faculty"=>"engineering","year_registered"=>"2023","fee_status"=>"10/10/2006"],
];
// print_r($students);

// Conditional statements
$total_score= 79;
if ($total_score >= 80) {
    echo "Grade A";
}
elseif ($total_score>= 70) {
    echo "Grade B";
}
elseif ($total_score>= 60) {
    echo "Grade c";
}
elseif ($total_score>= 40) {
    echo "Grade D";
}
elseif ($total_score<= 39) {
    echo "Grade F";
}
else{
    echo "Error";
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/materialize.css">
    <style>
        .card-content{
            justify-content: space-between;
        }
    </style>
</head>
<body>
    
    <div class="container">
        <div class="row">
            <h1>STUDENT DETAILS</h1>
            <div class="col s12 l4">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title green-text darken-3 activator">Welcome, <span style="text-decoration: underline;" ><?php echo $student['full_name'] ?></span></span>
                        <p class="card-title black-text"><?php echo $student['matric_no'] ?></p>
                        <p class="card-title black-text">Course of study:- <?php echo $student['course'] ?></p>
                        <p class="card-title black-text">Faculty:- <?php echo $student['faculty'] ?></p>
                        <p class="card-title black-text">Payment status:- <?php echo $student['fee_status'] ?></p>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title green-text darken-3">close</span>
                        <p>
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quos, nemo?
                        </p>
                    </div>
                </div>
            </div>
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