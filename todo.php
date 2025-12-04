
<?php
include "database.php";

function getTodos($conn){
    $sql = "SELECT * FROM taskes"; // select everything
    $stmt = $conn->query($sql);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function addTask($conn, $titel){       // change parameter name to match
    $stmt = $conn->prepare("INSERT INTO taskes (titel) VALUES (?)"); // use 'titel'
    $stmt->execute([$titel]);
}
?>
