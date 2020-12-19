<template>
<div :id="'publicacao-' + publicacao.id" class="corpo">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="row texto-nome-usuario">
            <div class="col-10">
                <template v-if="compartilhador">
                    <img class="imagem-usuario-publicacao"
                        :src="compartilhador.imagem
                            ? '/public/uploads/' + compartilhador.imagem
                            : '/public/imagens/foto_perfil_padrao.jpeg'
                    "/>

                    <a class="link-perfil" :href="'/perfil/' + compartilhador.id">
                        {{ compartilhador.name }}
                    </a>
                    <span class="texto-secundario">
                        - Compartilhou uma publicação de
                        <a class="link-perfil" :href="'/perfil/' + criador.id">
                            {{ criador.name }}
                        </a>
                    </span>
                </template>
                <template v-else>
                    <img class="imagem-usuario-publicacao"
                        :src="criador.imagem
                            ? '/public/uploads/' + criador.imagem
                            : '/public/imagens/foto_perfil_padrao.jpeg'
                    "/>

                    <a class="link-perfil" :href="'/perfil/' + criador.id">
                        {{ criador.name }}
                    </a>
                </template>
            </div>

            <div class="col-2">
                <template v-if="publicacao.id_criador == usuario
                    || publicacao.id_compartilhador == usuario">
                    <a class="menu-opcoes-publicacao" data-toggle="dropdown">
                        <i class="fas fa-ellipsis-h"></i>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right menu-opcoes-item">
                        <button class="dropdown-item atencao"
                            @click="apagar(publicacao.id)"
                        >
                            <i class="fas fa-trash"></i> Apagar publicação
                        </button>
                    </div>
                </template>
            </div>
        </div>

        <div class="texto-principal">
            <span style="white-space: pre;">{{ publicacao.texto }}</span>

            <p/>

            <img class="col-md-10 offset-md-1 imagem-publicacao"
                v-if="publicacao.imagem"
                :src="'/public/uploads/' + publicacao.imagem"
            >
        </div>
    </div>

    <BarraComentario :publicacao="publicacao" v-if="telaDeComentarios"/>
    <BarraInteracoes :publicacao="publicacao" v-if="! telaDeComentarios"/>
</div>
</template>

<script>
import BarraInteracoes from './BarraInteracoes.vue';
import BarraComentario from './BarraComentario.vue';

export default {
    components: {
        BarraInteracoes,
        BarraComentario,
    },
    props: ['publicacao', 'usuario', 'telaDeComentarios'],
    data () {
        return {
            criador: '',
            compartilhador: '',
        }
    },
    methods: {
        apagar(id) {
            window.axios
                .get('/apagar/' + id)
                .then(() => {
                    let elemento = document.getElementById('publicacao-' + id);

                    elemento.innerHTML = null;
                })
        },
    },
    mounted () {
        var self = this;

        window.axios
            .post('/obter-criador-e-compartilhador', {
                id_criador: self.publicacao.id_criador,
                id_compartilhador: self.publicacao.id_compartilhador,
            })
            .then(resposta => {
                self.criador = resposta.data.criador;
                self.compartilhador = resposta.data.compartilhador;
            })
    }
}
</script>

<style type="text/css" scoped>
</style>
