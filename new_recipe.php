<?php
//1. connection file
include('./connect.php');

//2. Create blank variables to store data
$recipe_name = "";
$created_by = "";

//4. Check if the submit button is pressed
if(isset($_POST['save'])){
    // print_r($_POST);

    //4. Store array values to variables
    $recipe_name = $_POST['recipe_name'];
    $created_by = $_POST['created_by'];

    //5. Write the insert query
    $insert_query = "INSERT INTO `recipe_tb`(`recipe_name`, `created_by`) VALUES ('$recipe_name', '$created_by')";

    //6. Send query to the server
    $send_query = mysqli_query($db_con, $insert_query);

    //7. 
    if ($send_query) {
        header('Location: recipe.php');
    }
    else {
        echo 'error in saving data' . mysqli_error($db_connect);
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="css/materialize.css">
</head>
<body>
    <div class="container">
        <div class="container">
            <h1 class="red-text center-align" style="width: 700px;">Add New Recipe.</h1>
            <div class="container">
                <h4 class="red-text"><?php echo 'Thank you, ' . $created_by .  ' for creating the ' . $recipe_name; ?></h4>
                <div class="row">
                    <div class="col l12">
                        <form action="" method="post">
                            <div class="col s12 l16 input-field">
                                <input type="text" name="recipe_name" id="recipe_name">
                                <label for="recipe_name">Recipe Name</label>
                            </div>
                            <div class="col s12 l16 input-field">
                            <input type="text" name="created_by" id="created_by">
                            <label for="created_by">Created by</label>
                            </div>
                            <center><input type="submit" name="save" class="btn btn-large red offset-l12" value="Save"></center>
                        </form>    
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">

    </div>
    <script src="js/jquery.js"></script>
    <script src="js/materialize.js"></script>
    <script>
        $(document).ready(function(){

        })
    </script>
</body>
</html>