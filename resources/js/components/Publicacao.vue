<template>
<div :id="'publicacao-' + id" class="corpo-publicacao">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="texto-nome-usuario">
            <a class="menu-opcoes-publicacao" data-toggle="dropdown"
                v-show="idCriador == usuario"
            >
                <i class="fas fa-ellipsis-h"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-left menu-opcoes-item">
                <button class="dropdown-item atencao"
                    @click="apagar(id)"
                >
                    <i class="fas fa-trash"></i> Apagar publicação
                </button>
            </div>

            <template v-if="compartilhada">
                {{ nomeCompartilhador }}
                <span class="texto-compartilhou">
                    - Compartilhou uma publicação de
                    {{ nomeCriador }}
                </span>
            </template>
            <template v-else>
                {{ nomeCriador }}
            </template>
        </div>

        <div class="texto-publicacao">
            {{ texto }}
            <p/>
            <img class="col-md-10 offset-md-1 imagem-publicacao"
                :src="'public/uploads/' + imagem"
                v-if="possuiImagem"
            >
        </div>
    </div>

    <!-- Seção de inputs para a view de comentarios -->
    <form method="GET"
        :action="'./novo/' + id"
        v-show="comentarios"
    >
        <div class="row col-md-10 offset-md-1 md-form mb-4 success-textarea active-success-textarea">
            <textarea id="comentario" name="comentario" class="col-md-10 md-textarea form-control" rows="1" placeholder="Escreva seu comentário ..." maxlength="255" required></textarea>

            <button type="submit" class="col-md btn btn-elegant botao-enviar">
                <i class="fas fa-paper-plane"></i>
            </button>
        </div>
    </form>

    <div class="row col-md-8 offset-md-2"
        v-show="!comentarios"
    >
        <button class="col-md btn btn-elegant botao-interacao"
            @click="curtir(id)"
        >
            <span v-show="curtidas" :id="'curtidas-' + id">
                {{ curtidas }}
            </span>
            <i class="fab fa-pagelines"></i> Gostei
        </button>
        <a class="col-md btn btn-elegant botao-interacao"
            :href="'./comentarios/' + id"
        >
            <i class="fas fa-signature"></i> Comentarios
        </a>
        <button class="col-md btn btn-elegant botao-interacao"
            @click="compartilhar(id)"
        >
            <span v-show="compartilhamentos" :id="'compartilhamentos-' + id">
                {{ publicacao.compartilhamentos }}
            </span>
            <i class="fas fa-share-alt"></i> Compartilhar
        </button>
    </div>
</div>
</template>

<script>
import { requisicao } from '../utillidadesPublicacao.js';

export default {
    props: ['publicacao', 'usuario', 'comentarios'],
    data () {
        return {
            id: this.publicacao.id,
            idCriador: this.publicacao.id_criador,
            nomeCriador: this.publicacao.nome_criador,
            texto: this.publicacao.texto,
            imagem: this.publicacao.imagem,
            nomeCompartilhador: this.publicacao.nome_compartilhador,
            curtidas: this.publicacao.curtidas,
            compartilhamentos: this.publicacao.compartilhamentos,
            compartilhada: this.publicacao.nome_compartilhador ? true : false,
            possuiImagem: this.publicacao.imagem ? true : false,
        }
    },
    methods: {
        apagar(id) {
            requisicao({
                idPublicacao: id,
                idElemento: "publicacao-" + id,
                requisicao: 'apagar',
                apagar: true,
                recarregar: true //lembrar de tentar mudar p/false
            });
        },
        curtir(id) {
            requisicao({
                idPublicacao: id,
                requisicao: 'curtir',
            });

            this.curtidas += 1;
        },
        compartilhar(id) {
            requisicao({
                idPublicacao: id,
                requisicao: 'compartilhar',
                recarregar: true //lembrar de tentar mudar p/false
            });

            this.compartilhamentos += 1;
        }
    }
}
</script>

<style type="text/css" scoped>
</style>
