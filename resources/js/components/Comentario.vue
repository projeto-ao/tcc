<template>
<div :id="'comentario-' + id" class="corpo-publicacao">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="texto-nome-usuario">
            <!--
            <a class="menu-opcoes-publicacao" data-toggle="dropdown"
                v-show="idCriador == usuario"
            >
                <i class="fas fa-ellipsis-h"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-left menu-opcoes-item">
                <button class="dropdown-item atencao"
                    @click="apagar(id)"
                >
                    <i class="fas fa-trash"></i> Apagar comentário
                </button>
            </div>
            -->

            {{ nomeCriador }}
            <span class="texto-secundario">
                - Respondeu
            </span>
        </div>

        <div class="texto-principal">
            {{ texto }}
        </div>
    </div>
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
