<?php
// Index
$cake=["choco","vanilla","strawberry"];
echo $cake[1];
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
print_r($choco_cake);
echo $choco_cake["ingredients"]

?>