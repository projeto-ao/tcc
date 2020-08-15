<template>
    <div class="col-md-8 offset-md-2">
        <div v-for="publicacao in publicacoes.slice().reverse()"
            :key="publicacao.id"
            :id="'publicacao-' + publicacao.id"
        >
        <div class="corpo-publicacao">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="texto-nome-usuario">
                    <a class="menu-opcoes-publicacao"
                        data-toggle="dropdown"
                        v-show="publicacao.id_criador == usuario"
                    >
                        <i class="fas fa-ellipsis-h"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-left">
                        <button class="dropdown-item atencao"
                            @click="apagar(publicacao.id)"
                        >
                            <i class="fas fa-trash"></i> Apagar publicação
                        </button>
                    </div>

                    <template v-if="publicacao.nome_compartilhador">
                        {{ publicacao.nome_compartilhador }}
                        <span class="texto-compartilhamento">
                            compartilhou uma publicação de
                        </span>
                    </template>
                    {{ publicacao.nome_criador }}
                </div>

                <div class="texto-publicacao">
                    {{ publicacao.conteudo }}
                </div>
            </div>

            <div class="row col-md-8 offset-md-2">
                <button class="col-md btn btn-elegant botao-interacao"
                    @click="curtir(publicacao.id)"
                >
                    <span :id="'curtidas-' + publicacao.id">
                        {{ publicacao.curtidas }}
                    </span>
                    <i class="fab fa-pagelines"></i> Gostei
                </button>
                <button class="col-md btn btn-elegant botao-interacao"
                    @click="compartilhar(publicacao.id)"
                >
                    <span :id="'compartilhamentos-' + publicacao.id">
                        {{ publicacao.compartilhamentos }}
                    </span>
                    <i class="fas fa-bezier-curve"></i> Compartilhar
                </button>
            </div>
        </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['publicacoes', 'usuario'],
        methods: {
            apagar(id) {
                fazerRequisicaoAjax({
                    idPublicacao: id,
                    idElemento: "publicacao-" + id,
                    requisicao: 'apagar',
                    acrescer: false,
                    recarregar: false
                });
            },
            curtir(id) {
                fazerRequisicaoAjax({
                    idPublicacao: id,
                    idElemento: "curtidas-" + id,
                    requisicao: 'curtir',
                    acrescer: true,
                    recarregar: false
                });
            },
            compartilhar(id) {
                fazerRequisicaoAjax({
                    idPublicacao: id,
                    idElemento: "compartilhamentos-" + id,
                    requisicao: 'compartilhar',
                    acrescer: true,
                    recarregar: true
                });
            }
        }
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

    function atualizarElemento(id, acrescer) {
        let elemento = document.getElementById(id);

        if (acrescer) {
            return elemento.innerHTML = Number(elemento.innerHTML) + 1;
        }

        return elemento.innerHTML = null;
    }
</script>

<style type="text/css" scoped>
</style>
