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
    <div class="loading">
        <div class="loading-spinner"></div>
    </div>
    <div class="container">
        <h1>Criar Nova Ordem de Serviço</h1>
        <div action="index.php" method="GET">
            <div class="form-group">
                <label for="tipo">Tipo de Ordem de Serviço:</label>
                <select id="tipo" name="tipo" required onchange="atualizarFormulario()">
                    <option value="">Selecione o tipo...</option>
                </select>
            </div>
            
            <div class="form-fields" id="reparoFields">
                <div class="form-grid">
                    <div class="form-group">
                        
                    </div>
                </div>
            </div>

            <button type="button" class="submit-btn" onclick="copiarOS()">Criar Nova OS</button>
        </div>
    </div>

    <textarea id="osFormatada" style="position: absolute; left: -9999px;"></textarea>

    <script src="script.js"></script>
</body>
</html> 