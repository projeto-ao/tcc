<template>
    <div class="col-md-8 offset-md-2">
        <div v-for="publicacao in publicacoes.slice().reverse()" :key="publicacao.id">
        <div class="corpo-publicacao">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="texto-nome-usuario">
                    {{ publicacao.nome_criador }}
                </div>

                <div class="texto-publicacao">
                    {{ publicacao.conteudo }}
                </div>
            </div>

            <div class="row col-md-8 offset-md-2">
                <button class="col-md btn btn-elegant botao-interacao">
                    <i class="fab fa-pagelines"></i> Gostei
                </button>
                <button class="col-md btn btn-elegant botao-interacao">
                    <i class="fas fa-bezier-curve"></i> Compartilhar
                </button>
            </div>
        </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['publicacoes'],
    }
</script>

<style type="text/css" scoped>
</style>
