<template>
<div class="col-md-8 offset-md-2">
    <div v-for="campanha in campanhas.slice().reverse()" :key="campanha.id">
        <Campanha :campanha="campanha"/>
    </div>
</div>
</template>

<script>
import Campanha from './Campanha.vue';

export default {
    props: ['campanhas'],
    components: {
        Campanha
    },
}
</script>

<style scoped>
</style>