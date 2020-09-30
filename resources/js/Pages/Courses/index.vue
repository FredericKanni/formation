<template>
<app-layout>
    <template #header>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            liste des formations
        </h2>

    </template>
    <div class="py-6" v-for='course in this.courseList' v-bind:key='course.id'>
        <div class="mx-8 bg-white rounded shadow p-4">
            <div class="text-sm text-gray-700 ">mise en ligne par : {{course.user.name}}</div>
            <div class="flex justify-between items-center">
                <div class="text-4xl "> {{course.title}}</div>
                <div class="text-sm text-gray-700">{{course.episodes_count}} episodes</div>
            </div>

            <div class="text-sm text-gray-500"> {{course.description}}</div>
            <a :href="'courses/' + course.id" class="bg-indigo-500 text-white px-2 py-1 mt-3 inline-block
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

    props: ['courses'],

    data() {
        return {
            courseList: this.courses,
        }
    },

    mounted() {
        console.log(this.courses);
    }

}
</script>
