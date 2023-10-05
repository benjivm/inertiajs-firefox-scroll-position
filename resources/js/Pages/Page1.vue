<script setup>
import GuestLayout from "@/Layouts/GuestLayout.vue";
import { Link } from "@inertiajs/vue3";

defineOptions({ layout: GuestLayout });

defineProps({
    paragraphs: Array
})
</script>

<template>
    <div v-for="(paragraph, index) in paragraphs" :class="{'mt-3' : index > 0}">
        {{ paragraph }}
    </div>

    <div class="mt-3 border-t border-red-300"></div>

    <div class="mt-3">Ensure you've scrolled.</div>

    <div class="mt-3">
        <Link href="/page-2" class="text-indigo-600 hover:text-indigo-500 hover:underline font-bold">Click here to go to another page</Link>
        then click your browser's back button/back mouse button, the scroll position should not be preserved in Firefox.
    </div>

    <div class="mt-3">If the scroll position is not entirely reset, it will be much different from the position used prior to clicking the link above.</div>

    <div class="mt-3">This issue is not present in Chrome. I have not tested Safari.</div>

    <div class="mt-3 border-t border-red-300"></div>

    <div v-for="(paragraph, index) in paragraphs" class="mt-3">
        {{ paragraph }}
    </div>
</template>
