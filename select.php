<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova Ordem de Serviço</title>
    <link href="https://fonts.googleapis.com/css2?family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Nova Ordem de Serviço</h1>
        <form action="index.php" method="GET">
            <div class="form-group">
                <label for="tipo">Tipo de Ordem de Serviço:</label>
                <select id="tipo" name="tipo" required onchange="atualizarFormulario()">
                    <option value="">Selecione o tipo...</option>
                    <option value="reparo">Reparo</option>
                </select>
            </div>

            <div class="form-fields" id="reparoFields">
                <div class="form-grid">
                    <div class="form-group">
                        <label for="praca">PRAÇA:</label>
                        <input type="text" id="praca" name="praca" required>
                    </div>
                </div>
            </div>

            <button type="submit" class="submit-btn">Criar Nova OS</button>
        </form>
    </div>

    <script>
        function atualizarFormulario() {
            const tipo = document.getElementById('tipo').value;
            const reparoFields = document.getElementById('reparoFields');
            const interfoneFields = document.getElementById('interfoneFields');
            
            if (tipo === 'reparo') {
                reparoFields.classList.add('active');
                interfoneFields.classList.remove('active');
            } else if (tipo === 'interfone') {
                reparoFields.classList.remove('active');
                interfoneFields.classList.add('active');
            } else {
                reparoFields.classList.remove('active');
                interfoneFields.classList.remove('active');
            }
        }
    </script>
</body>
</html> 