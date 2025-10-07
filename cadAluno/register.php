<?php

session_start();

// Garante que a lista de alunos na sessão seja um array, mesmo que vazia.
if (isset($_SESSION["students"])) {
    $_SESSION["students"] = [];
}

// Armazena um tipo de requisição, GET OU POST
$request_method = $_SERVER["REQUEST_METHOD"];

// Se a aquisição por igual a POST, um aluno será cadastrado
if ($request_method === "POST") {
    $name = trim($_POST ["name"] ? $_POST ["name"] : "");
    $email = trim($_POST ["email"] ? $_POST ["email"] : "");
    $course = trim($_POST ["course"] ? $_POST ["course"] : "");

    if (!empty($name) && !empty($email) && !empty($course)) {
        $new_students = [
            "id" => uniqid(),
            "name" => $name,
            "email" => $email,
            "course" => $course,
        ];
        
        $_SESSION["students"][] = $new_students;
    }

    header("Location: " . $_SERVER["PHP_SELF"]);
    exit;
}

if (isset($_GET["action"]) && $_GET(["action"]) === "clear") {
    unset($_SESSION["students"]);

    header("Location: " . $_SERVER["PHP_SELF"]);
    exit;
}
?>