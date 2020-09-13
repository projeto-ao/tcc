<template>
<div class="sticky-top">
    <button class="btn menu-principal" data-toggle="dropdown" title="Menu">
        <i class="fas fa-align-center"></i>
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

}
</script>