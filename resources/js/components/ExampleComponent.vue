<template>
    <div>
       <router-view :chanpionDatas="chanpiondatas" :skillDatas="skilldatas" :tagDatas="tagdatas"></router-view>
    </div>
</template>

<script>
    export default {
        props: ["chanpiondatas","tagdatas","skilldatas"],
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
