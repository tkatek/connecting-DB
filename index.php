<?php
include "database.php";
include "todo.php";




if(isset($_POST["add_task"]) && !empty($_POST["title"])){
    $titel = $_POST["title"];  // get input
    addTask($conn, $titel);     // insert into DB
    header("Location: index.php"); // redirect to avoid resubmission
    exit;
}



$todos = getTodos($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <title>Document</title>
</head>
<body>

<div class="main">
    <form action=""  method="post">
        <input type="text" name="title" id="task" placeholder="Enter your task" class="task"  >
        <button type="submit" name="add_task" class="btn" id="btn" >Add Task</button>

    </form>

    <ul>
        <?php
        foreach($todos as $todo){
            echo "<li>" . htmlspecialchars($todo['titel']) . "</li>";
        }
        
        
        
        ?>
    </ul>





</div>






</body>
</html>
