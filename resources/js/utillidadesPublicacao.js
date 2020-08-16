/*
    Abriga funções uteis para as partes do sistema que possuem
    alguma interação com as Publicações.
*/

function atualizarElemento(id, acrescer) {
    let elemento = document.getElementById(id);

    if (acrescer) {
        return elemento.innerHTML = Number(elemento.innerHTML) + 1;
    }

    return elemento.innerHTML = null;
}

function fazerRequisicaoAjax({
    idPublicacao,
    idElemento,
    requisicao,
    acrescer = false,
    recarregar = false
} = {}) {
    $.ajax({
        url: './' + requisicao + '/' + idPublicacao,
        method: 'GET',
        success: function() {
            atualizarElemento(idElemento, acrescer);

            if (recarregar) {
                location.reload();
            }
        },
        error: function() {
            alert(mensagemDeErro);
        }
    })
}

export { fazerRequisicaoAjax };
