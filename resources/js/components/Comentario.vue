<template>
<div :id="'comentario-' + id">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="texto-nome-usuario">
            {{ nomeCriador }}
            <span class="texto-secundario">
                - Comentou
            </span>
        </div>

        <div class="texto-principal">
            <span style="white-space: pre;">{{ texto }}</span>
        </div>
    </div>
    <hr>
</div>
</template>

<script>
export default {
    props: ['comentario', 'usuario'],
    data () {
        return {
            id: this.comentario.id,
            idCriador: this.comentario.id_criador,
            nomeCriador: this.comentario.nome_criador,
            texto: this.comentario.texto,
        }
    },
    methods: {
    }
}
</script>

<style type="text/css" scoped>
</style>
