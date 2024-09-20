<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import { Link } from '@inertiajs/vue3';

defineOptions({ layout: GuestLayout });

defineProps({
    paragraphs: Array,
});
</script>

<template>
    <div
        v-for="(paragraph, index) in paragraphs"
        :class="{ 'mt-3': index > 0 }"
    >
        {{ paragraph }}
    </div>

    <div
        class="mt-3 rounded-lg border border-yellow-300 bg-yellow-50 px-4 py-3"
    >
        <Link
            href="/page-2"
            class="font-bold text-indigo-600 hover:text-indigo-500 hover:underline"
        >
            Click here to go to another page
        </Link>
        then, after scrolling any amount on the linked page, click your
        browser's or mouse's back button, the scroll position should not be
        preserved in Firefox.

        <div class="mt-3">
            If the scroll position is not entirely reset, it will be much
            different from the position set prior to clicking the link above.
        </div>

        <div class="mt-3">
            I cannot reproduce this issue in Chrome, though it may be present in
            another context. I have not tested Safari or other browsers.
        </div>
    </div>

    <div v-for="(paragraph, index) in paragraphs" class="mt-3">
        {{ paragraph }}
    </div>
</template>
