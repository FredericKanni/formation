<template>
<app-layout>
    <template slot='header'>

        liste des formations
    </template>
    <h1>coucou</h1>
</app-layout>
</template>

<script>
import AppLayout from './../../Layouts/AppLayout'

export default {
    components: {
        AppLayout,
    },

    props: ['courses'],

    mounted() {
        console.log(this.courses);
    }

}
</script>
