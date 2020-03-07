<template>
    <div>
       <router-view :chanpionDatas="chanpiondatas" :skillDatas="skilldatas" :tagDatas="tagdatas" :tags="tags"></router-view>
    </div>
</template>

<script>
    export default {
        props: ["chanpiondatas","tagdatas","skilldatas","tags"],
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
