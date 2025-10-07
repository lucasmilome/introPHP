<?php require "register.php"; ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de alunos</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <main class="container">
        <h1>Cadastro de Alunos</h1>

    <!-- Formulário de cadastro de alunos -->
        <form id="studentForm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>">
            <div class="form-group">
                <label for="">Nome do Aluno:</label>
                <input type="text" name="name" required>
                <span id="nameError" class="error-name">Por favor, insira o nome.</span>
            </div>
            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" required>
                <span id="emailError" class="error-message">Por favor, insira um e-mail válido.</span>
            </div>
            <div class="form-group">
                <label for="course">Curso:</label>
                <input type="text" name="course" id="course" required>
                <span id="courseError" class="error-message">Por favor, insira o curso.</span>
            </div>
            <button type="submit" class="btn">Cadastrar Aluno</button>
        </form>

        <!-- Lista de alunos cadastrados -->
        <div class="student-list">
            <h2>Alunos Cadastrados</h2>
            <?php if (empty($_SESSION["students"])): ?>
                <p class="empty-message">Nenhum aluno cadastrado ainda</p>
            <?php else: ?>
                <table>
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>E-mail</th>
                            <th>Curso</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($_SESSION["students"] as $student): ?>
                            <tr><?php echo $student["name"]; ?></tr>
                            <tr><?php echo $student["email"]; ?></tr>
                            <tr><?php echo $student["course"]; ?></tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <a href="?action-clear" class="clear-link" onclick="return confirm('Tem certeza que deseja a lista com todos os alunos?')">Limpar</a>
            <?php endif; ?>
        </div>
    </main>
</body>
</html>