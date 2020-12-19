<template>
    <div class="col-md-8 offset-md-2">
        <Publicacao
            :publicacao="publicacao"
            :usuario="usuario"
            :telaDeComentarios="true"
        />

        <div class="col-md-10 offset-md-1">
            <div class="corpo">
                <div v-for="comentario in coments"
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
    },
    data () {
        return {
            coments: this.comentarios,
        }
    },
    mounted () {
        window.Echo.channel(process.env.MIX_PUSHER_CHANNEL)
            .listen('.atualiza.comentarios', (e) => {
                this.coments.push(e.novoComentario);
            })
    },
}
</script>

<style type="text/css" scoped>
</style>
