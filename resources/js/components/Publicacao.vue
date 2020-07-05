<template>
    <div class="col-md-8 col-sm-8 col-xs-8 offset-2">
        <div class="publicacao">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="usuario"></div>

                <div class="texto"></div>
            </div>

            <div class="row col-md-6 offset-3">
                <button class="col-md btn btn-elegant botao-interacao">
                    <span><i class="fab fa-pagelines"></i> Gostei</span>
                </button>
                <button class="col-md btn btn-elegant botao-interacao">
                    <span><i class="fas fa-bezier-curve"></i> Compartilhar</span>
                </button>
            </div>
        </div>
    </div>
</template>

<script>
    export default {

    }
</script>

<style type="text/css" scoped>
.publicacao {
  border-radius: 1rem;
  margin: 0.5rem;
  background-color: #fff;
}

.usuario {
  font-size: 1.05rem;
  font-weight: bold;
  padding: 0.25rem;
}

.texto {
  font-size: 1rem;
  padding: 0.25rem;
  text-align: justify;
}

.botao-interacao {
  border-radius: 1rem;
  font-size: 0.8rem;
  font-weight: bold;
  height: 2.2rem;
  margin: 0.3rem;
  padding-top: 0.6rem;
}
</style>
