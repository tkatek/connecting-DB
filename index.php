<?php


$host = 'localhost';
$dbname = 'myapp';
$user = 'root';
$pass = '';
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected to the database successfully!";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}



if (isset($_POST["submit"])) {

$name = $_POST["name"];
$email = $_POST["email"];
$password = password_hash($_POST["password"], PASSWORD_DEFAULT);


$stmt = $pdo -> prepare("INSERT INTO users(name , email , password) VALUES(:name , :email , :password)");
$stmt->execute (['name'=> $name , 'email'=> $email , 'password'=> $password]);

echo "User registered successfully!";

    header("Location: form.html");
    exit;
}