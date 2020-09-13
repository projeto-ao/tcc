<template>
<div id="carousel-campanhas" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="/public/imagens/pagina-inicial/arvores.jpg" class="d-block w-100">
        </div>
        <div class="carousel-item">
            <img src="/public/imagens/pagina-inicial/arvores.jpg" class="d-block w-100">
        </div>
        <div class="carousel-item">
            <img src="/public/imagens/pagina-inicial/arvores.jpg" class="d-block w-100">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carousel-campanhas" role="button" data-slide="prev" title="Anterior">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    </a>
    <a class="carousel-control-next" href="#carousel-campanhas" role="button" data-slide="next" title="Próximo">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
    </a>
</div>
</template>

<script>
export default {

}
</script>

<style scoped>
    img {
        border-radius: 1rem;
        height: 10rem;
    }

    .carousel {
        margin-top: 5%;
    }
</style>