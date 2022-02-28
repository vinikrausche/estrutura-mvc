<?php

const DSN = "mysql:dbname=vk;host=localhost";
const USER_DB = "root";
const PASS_DB = "";
try {
    $pdo = new PDO(DSN, USER_DB, PASS_DB);
} catch (PDOException $e) {
    echo "ERRO DE CONEXÃO: " . $e->getMessage();
}
