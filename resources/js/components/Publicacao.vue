<template>
<div :id="'publicacao-' + id" class="corpo">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="texto-nome-usuario">
            <template v-show="idCriador == usuario">
                <a class="menu-opcoes-publicacao" data-toggle="dropdown">
                    <i class="fas fa-ellipsis-h"></i>
                </a>

                <div class="dropdown-menu dropdown-menu-left menu-opcoes-item">
                    <button class="dropdown-item atencao" @click="apagar(id)">
                        <i class="fas fa-trash"></i> Apagar publicação
                    </button>
                </div>
            </template>

            <template v-if="idCompartilhador">
                <a class="link-perfil" :href="'/perfil/' + idCompartilhador">
                    {{ nomeCompartilhador }}
                </a>
                <span class="texto-secundario">
                    - Compartilhou uma publicação de
                    <a class="link-perfil" :href="'/perfil/' + idCriador">
                        {{ nomeCriador }}
                    </a>
                </span>
            </template>
            <template v-else>
                <a class="link-perfil" :href="'/perfil/' + idCriador">
                    {{ nomeCriador }}
                </a>
            </template>
        </div>

        <div class="texto-principal">
            <span style="white-space: pre;">{{ texto }}</span>
            <p/>

            <img class="col-md-10 offset-md-1 imagem-publicacao"
                :src="'/public/uploads/' + imagem"
                v-if="imagem"
            >
        </div>
    </div>

    <BarraComentario :publicacao="publicacao" v-if="telaDeComentarios"/>
    <BarraInteracoes :publicacao="publicacao" v-if="! telaDeComentarios"/>
</div>
</template>

<script>
import { requisicao } from '../utillidadesPublicacao.js';
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
            id: this.publicacao.id,
            idCriador: this.publicacao.id_criador,
            nomeCriador: this.publicacao.nome_criador,
            idCompartilhador: this.publicacao.id_compartilhador,
            nomeCompartilhador: this.publicacao.nome_compartilhador,
            texto: this.publicacao.texto,
            imagem: this.publicacao.imagem,
        }
    },
    methods: {
        apagar(id) {
            requisicao({
                idPublicacao: id,
                idElemento: "publicacao-" + id,
                requisicao: 'apagar',
                apagar: true,
            });
        },
    }
}
</script>

<style type="text/css" scoped>
</style>
