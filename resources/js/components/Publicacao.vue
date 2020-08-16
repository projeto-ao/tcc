<template>
<div :id="'publicacao-' + publicacao.id" class="corpo-publicacao">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="texto-nome-usuario">
            <a class="menu-opcoes-publicacao"
                data-toggle="dropdown"
                v-show="publicacao.id_criador == usuario"
            >
                <i class="fas fa-ellipsis-h"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-left">
                <button class="dropdown-item atencao"
                    @click="apagar(publicacao.id)"
                >
                    <i class="fas fa-trash"></i> Apagar publicação
                </button>
            </div>

            <template v-if="publicacao.nome_compartilhador">
                {{ publicacao.nome_compartilhador }}
                <span class="texto-compartilhou">
                    - Compartilhou uma publicação de
                    {{ publicacao.nome_criador }}
                </span>
            </template>
            <template v-else>
                {{ publicacao.nome_criador }}
            </template>
        </div>

        <div class="texto-publicacao">
            {{ publicacao.conteudo }}
        </div>
    </div>

    <div class="row col-md-8 offset-md-2">
        <button class="col-md btn btn-elegant botao-interacao"
            @click="curtir(publicacao.id)"
        >
            <span :id="'curtidas-' + publicacao.id">
                {{ publicacao.curtidas }}
            </span>
            <i class="fab fa-pagelines"></i>
            <span> Gostei</span>
        </button>
        <button class="col-md btn btn-elegant botao-interacao"
            @click="compartilhar(publicacao.id)"
        >
            <span :id="'compartilhamentos-' + publicacao.id">
                {{ publicacao.compartilhamentos }}
            </span>
            <i class="fas fa-bezier-curve"></i>
            <span> Compartilhar</span>
        </button>
    </div>
</div>
</template>

<script>
import { fazerRequisicaoAjax } from '../utillidadesPublicacao.js';

export default {
    props: ['publicacao', 'usuario'],
    methods: {
        apagar(id) {
            fazerRequisicaoAjax({
                idPublicacao: id,
                idElemento: "publicacao-" + id,
                requisicao: 'apagar',
                acrescer: false,
                recarregar: false
            });
        },
        curtir(id) {
            fazerRequisicaoAjax({
                idPublicacao: id,
                idElemento: "curtidas-" + id,
                requisicao: 'curtir',
                acrescer: true,
                recarregar: false
            });
        },
        compartilhar(id) {
            fazerRequisicaoAjax({
                idPublicacao: id,
                idElemento: "compartilhamentos-" + id,
                requisicao: 'compartilhar',
                acrescer: true,
                recarregar: true
            });
        }
    }
}
</script>

<style type="text/css" scoped>
</style>
