<template>
    <div class="col-md-8 offset-md-2">
        <div v-for="publicacao in pubs"
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
    props: ['publicacoes', 'usuario'],
    data () {
        return {
            pubs: this.publicacoes,
        }
    },
    components: {
        Publicacao
    },
    mounted () {
        Echo.channel(process.env.PUSHER_CHANNEL)
            .listen('.AtualizaLinhaDoTempo', (e) => {
                this.pubs["publicacao"] = e.nova_publicacao
            })
    },
}
</script>

<style type="text/css" scoped>
</style>
