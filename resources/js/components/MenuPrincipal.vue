<template>
<div>
    <button class="btn menu-principal" data-toggle="dropdown" title="Menu">
        <img class="imagem-menu"
            :src="imagemUsuario != null
                ? '/public/fotos-de-perfil' + imagemUsuario
                : '/public/fotos-de-perfil/foto_padrao.jpeg'
        "/>
    </button>

    <div class="dropdown-menu dropdown-menu-right menu-principal-dropdown">
        <a class="dropdown-item" href="/linha-do-tempo/">
            <span>Início </span>
            <i class="fas fa-tree"></i>
        </a>

        <a class="dropdown-item" id="nova-publicacao" data-toggle="modal" data-target="#modal-nova-publicacao">
            <span>Novo </span>
            <i class="fas fa-plus"></i>
        </a>

        <a class="dropdown-item" :href="'/perfil/' + usuario ">
            <span>Perfil </span>
            <i class="fas fa-user"></i>
        </a>

        <template v-show="! imagemUsuario">
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" :href="'/adicionar-imagem-de-perfil/' + usuario">
                <span>Foto Perfil</span>
            </a>
        </template>

        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="https://github.com/projeto-ao/projeto-ao" target="_blank">
            <span>Sobre </span>
            <i class="fab fa-github"></i>
        </a>
    </div>
</div>
</template>

<script>
export default {
    props: ['usuario', 'imagemUsuario'],
}
</script>