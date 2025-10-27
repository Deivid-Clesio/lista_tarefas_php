const form = document.getElementById('form-tarefa');
const lista = document.getElementById('lista-tarefas');
const inputPesquisar = document.getElementById('pesquisar');

// Adicionar tarefa
form.addEventListener('submit', e => {
    e.preventDefault();
    const titulo = document.getElementById('titulo').value;

    fetch('adicionar.php', {
        method: 'POST',
        body: new URLSearchParams({ titulo })
    }).then(() => {
        document.getElementById('titulo').value = '';
        carregarTarefas();
    });
});

// Remover tarefa
function removerTarefa(id) {
    fetch('remover.php', {
        method: 'POST',
        body: new URLSearchParams({ id })
    }).then(() => carregarTarefas());
}

// Buscar tarefas
function carregarTarefas(q = '') {
    fetch(`buscar.php?q=${q}`)
        .then(res => res.json())
        .then(tarefas => {
            lista.innerHTML = '';
            tarefas.forEach(t => {
                const li = document.createElement('li');
                li.innerHTML = `
                    ${t.titulo}
                    <button onclick="removerTarefa(${t.id})">❌</button>
                `;
                lista.appendChild(li);
            });
        });
}

// Pesquisa dinâmica
inputPesquisar.addEventListener('input', e => {
    carregarTarefas(e.target.value);
});

// Carrega tarefas ao abrir
carregarTarefas();
