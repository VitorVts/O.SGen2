
function showLoading() {
    document.querySelector('.loading').classList.add('active');
    document.querySelector('.container').classList.add('loading-active');
}

function hideLoading() {
    document.querySelector('.loading').classList.remove('active');
    document.querySelector('.container').classList.remove('loading-active');
}

document.addEventListener('DOMContentLoaded', function() {
    console.log('Página carregada, iniciando carregamento dos tipos de serviço...');
    carregarTiposServico();
});

function carregarTiposServico() {
    showLoading();
    fetch('http://localhost/Github/O.SGen2/listar_tipo_servico.php')
        .then(function(respostaServidor) {
            console.log('Resposta recebida do servidor:', respostaServidor);
            return respostaServidor.json();
        })
        .then(function(tipos) {
            console.log('Tipos de serviço recebidos:', tipos);
            const select = document.getElementById('tipo');
            
            if (!tipos || tipos.length === 0) {
                console.log('Nenhum tipo de serviço encontrado');
                return;
            }
            
            while (select.options.length > 1) {
                select.remove(1);
            }
            
            tipos.forEach(tipo => {
                console.log('Adicionando tipo:', tipo);
                const option = document.createElement('option');
                option.value = tipo.id;
                option.textContent = tipo.nome;
                select.appendChild(option);
            });
        })
        .catch(function(erro) {
            console.error('Erro ao carregar tipos de serviço:', erro);
        })
        .finally(function() {
            hideLoading();
        });
}

function atualizarFormulario() {
    const tipo = document.getElementById('tipo').value;
    limpaCampos();
    getTipo(tipo);
    const reparoFields = document.getElementById('reparoFields');
    const interfoneFields = document.getElementById('interfoneFields');
    
    if (tipo === '1') {
        reparoFields.classList.add('active');
        interfoneFields.classList.remove('active');
    } else {
        reparoFields.classList.remove('active');
        interfoneFields.classList.remove('active');
    }
}

function getTipo(tipo) {
    if (!tipo) return;
    
    showLoading();
    fetch(`http://localhost/Github/O.SGen2/listar_campos_os.php?id=${tipo}`)
        .then(function(respostaServidor){
           return respostaServidor.json()
        })
        .then(function(dadosConvertidosEmObjeto){
            if(dadosConvertidosEmObjeto == []){
                return;
            }
            criaCampos(dadosConvertidosEmObjeto)
        })
        .finally(function() {
            hideLoading();
        });
}

function limpaCampos() {
    const form = document.querySelector("form");
    if (form) {
        form.remove();
    }
}

function criaCampos(result) {
    limpaCampos();
    
    const form = document.createElement("form");

    result.forEach(campo => {
        const label = document.createElement("label");
        label.setAttribute("for", campo.label);
        label.textContent = `${campo.label}:`;
        
        const input = document.createElement(campo.tag);
        input.setAttribute("type", campo.type);
        input.setAttribute("id", campo.label);
        input.setAttribute("name", campo.label);
        input.setAttribute("required", "");
        
        if (campo.tag === "textarea") {
            input.setAttribute("rows", "10");
            input.setAttribute("cols", "33");
        }
        
        form.appendChild(label);
        form.appendChild(input);
    });
    
    const formGroup = document.querySelector('.form-group')
    formGroup.appendChild(form);
} 