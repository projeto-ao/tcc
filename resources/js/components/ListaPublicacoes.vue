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
                $.ajax({
                    url: './apagar/' + id,
                    method: 'GET',
                    success: function() {
                        let pub = document.getElementById("publicacao-" + id);

                        pub.innerHTML = "";
                    },
                    error: function() {
                        alert(mensagemDeErro);
                    }
                })
            },
            curtir(id) {
                $.ajax({
                    url: './curtir/' + id,
                    method: 'GET',
                    success: function() {
                        let span = document.getElementById("curtidas-" + id),
                            curtidas = Number(span.innerHTML) + 1;

                        return span.innerHTML = (curtidas);
                    },
                    error: function() {
                        alert(mensagemDeErro);
                    }
                });
            },
            compartilhar(id) {
                $.ajax({
                    url: './compartilhar/' + id,
                    method: 'GET',
                    success: function() {
                        let span = document.getElementById("compartilhamentos-" + id),
                            compartilhamentos = Number(span.innerHTML) + 1;

                        span.innerHTML = (compartilhamentos);
                        // Procurar uma maneira de se livrar do reload dps
                        location.reload();
                    },
                    error: function() {
                        alert(mensagemDeErro);
                    }
                })
            }
        }
    }
</script>

<style type="text/css" scoped>
</style>
