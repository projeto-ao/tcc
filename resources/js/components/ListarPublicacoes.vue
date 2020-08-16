<template>
    <div class="col-md-8 offset-md-2">
        <div v-for="publicacao in publicacoes.slice().reverse()"
            :key="publicacao.id"
        >
            <Publicacao :publicacao="publicacao" :usuario="usuario"/>
        </div>
    </div>
</template>

<script>
import Publicacao from './Publicacao.vue';

export default {
    props: ['publicacoes', 'usuario'],
    components: {
        Publicacao
    }
}
</script>

<style type="text/css" scoped>
</style>
