<template>
<app-layout>
    <template #header>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{course.title}}
        </h2>

    </template>

    <div class="mx-8 py-4">

        <div class="text-2xl text-gray-700 "> {{course.episodes[this.currentKey].title}}</div>

        <iframe class="w-full h-screen" :src="course.episodes[this.currentKey].video_url" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        <div class="text-sm text-gray-500"> {{course.episodes[this.currentKey].description}}</div>

        <div class="mt-6">
            <ul v-for="(episode, index) in this.course.episodes" v-bind:key="episode.id">
                <li class="mt-3">
                    episode n°{{index +1}} - {{episode.title}}
                    <button class="text-gray-500 focus:text-indigo-500 focus:outline-none" @click="switchEpisode(index)"> Voir l'episode</button>
                </li>
            </ul>
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

    props: ['course'],

    data() {
        return {
            courseShow: this.course,
            currentKey: 0,
        }
    },

    methods: {
        switchEpisode(index) {
            this.currentKey = index;

            window.scrollTo({
                top: 0,
                left: 0,
                behavior: 'smooth'

            });

        }
    },

    mounted() {
        console.log(this.course);
    },

}
</script>
