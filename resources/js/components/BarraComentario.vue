<template>
<form @submit.prevent="enviar()">
    <div class="row col-md-10 offset-md-1 md-form mb-4 success-textarea active-success-textarea">
        <textarea v-model="form.comentario" class="col-md-10 md-textarea form-control" rows="1" placeholder="Escreva seu comentário ..." maxlength="255" required></textarea>

        <button type="submit" class="col-md btn btn-elegant botao-enviar">
            <i class="fas fa-paper-plane"></i>
        </button>
    </div>
</form>
</template>

<script>
export default {
    props: ['publicacao'],
    data () {
        return {
            form: {
                comentario: '',
                idPublicacao: this.publicacao.id
            }
        }
    },
    methods: {
        enviar () {
            window.axios
                .post('/comentarios/novo', this.form)
        }
    }
}
</script>

<style scoped>
</style>