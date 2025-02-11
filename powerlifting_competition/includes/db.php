<?php
$servername = "localhost";
$username = "root"; // по умолчанию
$password = ""; // по умолчанию
$dbname = "powerlifting_competition"; // название вашей базы данных

// Создание подключения
$conn = new mysqli($servername, $username, $password, $dbname);

// Проверка подключения
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>