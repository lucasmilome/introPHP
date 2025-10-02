<?php
session_start();

$message = "";

if (!isset($_SESSION["tasks"])) {
    $_SESSION["tasks"] = [];
}


/** 
 * Adiciona uma nova tarefa a lista de tarefas
 * @param string $task_text É o texto das tarefas (task)
 */
function addTask(string $task_text) : void {
    if (!empty($task_text)) {
        $_SESSION["task"][] = [
            "id" => uniqid(),
            "description" => htmlspecialchars($task_text),
            "completed" => false,
        ];
    }
}

/**
 * Deleta uma tarefa da lista pelo seu ID
 * @param string $task_id O ID da tarefa a ser deletada
 */
function deleteTask(string $task_id): void {
    $_SESSION["tasks"] = array_filter($_SESSION["tasks"], function($task) use ($task_id) {
        return $task["id"] !== $task_id;
    }); 
}

/**
 * Marca uma tarefa como concluída ou não concluída
 * @param string $task_id O ID da tarefa a ser atualizada
 * @param bool $completed O status de conclusão da tarefa (task)
 */
function completeTask(string $task_id, bool $completed)  {
    foreach ($_SESSION["tasks"] as &$task) {
        if ($task["id"] === $task_id) {
            $task["completed"] = $completed;
            break;
        }
    }
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["action"])) {
        $action = $_POST["action"];

        if ($action === "add" && isset($_POST["task_text"])) {
            addTask($_POST['task_text']);
        } elseif ($action === "delete" && isset($_POST["task_id"])) {
            deleteTask($_POST["task_id"]);
        } elseif ($action === "complete" && isset($_POST["task_id"])) {
            completeTask($_POST["task_id"], true);
        } elseif ($action === "uncomplete" && isset($_POST["task_id"])) {
            completeTask($_POST["task_id"], false);
        }
    }

    header("Location: " . $_SERVER["PHP_SELF"]);
    exit;
}

// if (count($_POST) === 0) {
//     $message = "Nenhuma tarefa inserida ainda";
// }
?>