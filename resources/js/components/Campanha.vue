<template>
<div :id="'campanha-' + campanha.id" class="corpo">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="row texto-nome-usuario">
            <div class="col text-center">
                <h1>{{ campanha.titulo }}</h1>
                <h4 v-if="campanha.subtitulo">{{ campanha.subtitulo }}</h4>
            </div>
        </div>

        <hr></hr>

        <div class="texto-principal">
            <vue-markdown>{{ campanha.texto }}</vue-markdown>

            <p/>

            <img class="col-md-10 offset-md-1 imagem-campanha"
                v-if="campanha.imagem"
                :src="'/public/uploads/' + campanha.imagem"
            >
        </div>
    </div>
</div>
</template>

<script>
import VueMarkdown from "vue-markdown/src/VueMarkdown";

export default {
    props: ['campanha'],
    components: {
        VueMarkdown
    }
}
</script>

<style scoped>
h1,
h4 {
    font-weight: bold;
}

h4 {
    color: #bdc3c7;
}
</style>