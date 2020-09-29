<template>
<app-layout>
    <template #header>

        liste des formations

    </template>
    <div class="py-6" v-for='course in this.courseList' v-bind:key='course.id'>
        <div class="mx-8 bg-white rounded shadow p-4">
            <div class="text-4xl "> {{course.title}}</div>
            <div class="text-sm text-gray-500"> {{course.description}}</div>
            <a href="#" class="bg-indigo-500 text-white px-2 py-1 mt-3 inline-block
            rounded hover:bg-indigo-700
            "> voir la formation</a>
        </div>
    </div>

</app-layout>
</template>

<script>
import AppLayout from './../../Layouts/AppLayout'

export default {
    components: {
        AppLayout,
    },

    data() {
        return {
            courseList: this.courses,
        }
    },

    props: ['courses'],

    mounted() {
        console.log(this.courses);
    }

}
</script>
