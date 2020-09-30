<template>
<app-layout>
    <template #header>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{course.title}}
        </h2>

    </template>

    <iframe class="w-full h-screen" :src="course.episodes[0].video_url" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

    <div class="text-2xl text-gray-700 "> {{course.episodes[0].title}}</div>
    <div class="text-sm text-gray-500"> {{course.episodes[0].description}}</div>

</app-layout>
</template>

<script>
import AppLayout from './../../Layouts/AppLayout'

export default {
    components: {
        AppLayout,
    },

    props: ['course'],

    data() {
        return {
            courseShow: this.course,
        }
    },

    mounted() {
        console.log(this.course);
    }

}
</script>
