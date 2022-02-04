<template>
    <Tutorial/>
</template>

<script>
import Tutorial from "../components/Tutorial.vue";
export default {
    middleware:['auth'],
    component: { Tutorial },
}
</script>
