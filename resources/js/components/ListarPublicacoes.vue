<template>
    <div class="col-md-8 offset-md-2">
        <div v-for="publicacao in publicacoes"
            :key="publicacao.id"
        >
            <Publicacao :publicacao="publicacao" :usuario="usuario"/>
        </div>
    </div>
</template>

<script src="https://js.pusher.com/7.0/pusher.min.js"></script>

<script>
import Publicacao from './Publicacao.vue';
import Pusher from 'pusher-js';

export default {
    data () {
        return {
            publicacoes: null,
            usuario: null,
        }
    },
    components: {
        Publicacao
    },
    mounted () {
        window.axios
            .get('/obter-publicacoes')
            .then(resposta => {
                this.publicacoes = resposta.data;
            })

        window.axios
            .get('/obter-usuario-conectado')
            .then(resposta => {
                this.usuario = resposta.data;
            })

        window.Echo.channel(process.env.MIX_PUSHER_CHANNEL)
            .listen('.atualiza.publicacoes', (e) => {
                this.publicacoes.push(e.nova_publicacao);
            })
    },
}
</script>

<style type="text/css" scoped>
</style>
