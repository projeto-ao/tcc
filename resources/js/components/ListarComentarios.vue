<template>
    <div class="col-md-8 offset-md-2">
        <Publicacao
            :publicacao="publicacao"
            :usuario="usuario"
            :comentarios="true"
        />

        <div class="col-md-10 offset-md-1">
            <div class="corpo-publicacao">
                <div v-for="comentario in comentarios.slice().reverse()"
                    :key="comentario.id"
                >
                    <Comentario
                        :comentario="comentario"
                        :usuario="usuario"
                    />
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Publicacao from './Publicacao.vue';
import Comentario from './Comentario.vue';

export default {
    props: ['comentarios', 'usuario', 'publicacao'],
    components: {
        Publicacao,
        Comentario
    }
}
</script>

<style type="text/css" scoped>
</style>
