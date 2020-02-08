<template>
    <div>
        <router-view :chanpionDatas="chanpiondatas"></router-view>
    </div>
</template>

<script>
    export default {
        props: ["chanpiondatas"],
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
