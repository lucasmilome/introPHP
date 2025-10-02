<?php require "task.php"; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Gestor de Tarefas</title>
    <link rel="shortcut icon" href="./img/icons/tarefa.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="container">
        <h1>Gerenciador de Tarefas</h1>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <input type="text" name="task-text" id="task-input"> 
            <button type="submit" class="add-button">Adicionar</button>
        </form>                        
        <div class="task-list">
            <?php if (empty($_SESSION["task"])): ?>
                <p style="text-align: center; color: #6b7280">Nenhuma tarefa adicionada ainda</p>
            <?php else: ?>
                <?php foreach ($_SESSION["tasks"] as $task): ?>
                    <div class="task-item <?php echo $task["completed"] ? "completed" : "uncompleted"; ?>">

                    </div>
                <?php endforeach ?>
            <?php endif ?>    
        </div>
    </div>
</body>
</html>