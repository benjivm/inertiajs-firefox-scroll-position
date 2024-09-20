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
</template>
