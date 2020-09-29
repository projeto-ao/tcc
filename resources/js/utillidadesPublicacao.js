/*
    Abriga funções uteis para as partes do sistema que possuem
    alguma interação com as Publicações.
*/
function requisicao({
    idPublicacao,
    idElemento = null,
    requisicao,
    apagar = false,
    recarregar = false
} = {}) {
    $.ajax({
        url: '/' + requisicao + '/' + idPublicacao,
        method: 'GET',
        success: function() {
            if (apagar) {
                let elemento = document.getElementById(idElemento);

                elemento.innerHTML = null
            }

            if (recarregar) {
                location.reload();
            }
        },
        error: function() {
            alert(mensagemDeErro);
        }
    })
};

export { requisicao };
