<?php require "task.php"; ?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Gestor de Tarefas</title>
    <link rel="shortcut icon" href="./img/icons/tarefa-100.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <div class="container">
        <h1>Gerenciador de Tarefas</h1>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" id="task-form">
            <input type="hidden" name="action" value="add">
            <input type="text" name="task-text" id="task-input" placeholder="Adcionar nova tarefa..." required>
            <button type="submit" class="add-button">Adicionar</button>
        </form>
        <div class="task-list">
            <?php if (empty($_SESSION['tasks'])): ?>
                <p style="text-align: center; color: #6b7280">Nenhuma tarefa adicionada ainda.</p>
            <?php else: ?>
                <?php foreach ($_SESSION['tasks'] as $task) : ?>
                    <div class="task-item <?php echo $task['completed'] ? 'completed' : ''; ?>">
                        <span class="task-text"><?php echo $task['description']; ?></span>
                        <div class="task-actions">
                            <form 
                                action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" 
                                method="POST" style="display:inline;"
                            >
                                <input 
                                    type="hidden" 
                                    name="action" 
                                    value="<?php echo $task['completed'] ? 'uncomplete' : 'complete'; ?>"
                                >
                                <input type="hidden" name="task_id" value="<?php echo $task['id']?>">
                                <button 
                                    type="submit" 
                                    class="complete-button <?php echo $task['completed'] ? 'completed' : ''; ?>">
                                    &#10003;
                                </button>  
                            </form>
                            <form 
                                action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"
                                method="POST" style="display:inline;"
                            >
                                <input type="hidden" name="action" value="delete">
                                <input type="hidden" name="task_id" value="<?php echo $task['id']; ?>">
                                <button type="submit" class="delete-button" title="Excluir">
                                    &#x2715;
                                </button>
                            </form>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>    
        </div>
    </div>
</body>
</html>