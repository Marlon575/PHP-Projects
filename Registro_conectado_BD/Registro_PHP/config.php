<?php
$conn = new mysqli('localhost', 'root', '', 'escola_db');

if ($conn->connect_error) {
    die ("Erro de ligação: " . $conn->connect_error);
}